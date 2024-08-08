<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Mda;
use App\Models\NewUser;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::with('roles')->paginate(12);
        if(isset($search))
        {
            $users = User::with('roles')->where('name', 'like', '%'.$search.'%')->orWhere('email', 'like', '%'.$search.'%')->paginate(12);
        }
        $users_count = User::count();
        $roles = Role::all();
        $departments = Department::all();
        return inertia('Admin/UsersPage', [
            'users' => $users,
            'users_count' => $users_count,
            'roles' => $roles,
            'departments' => $departments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            //'password' => ['required', 'string', Rules\Password::defaults()],
            'role' => ['required', 'integer', 'min:1'],
            'department_id' => ['required_if:role,3', 'integer'],
            'title' => ['required_if:role,3', 'string'],
            'surname' => ['required_if:role,3', 'alpha', 'min:3'],
            'firstnames' => ['required_if:role,3', 'alpha', 'min:3']
        ]);

        try {
            $password = Str::random(9);

            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($password)
            ]);

            $user->addRole($request->role);

            NewUser::create([
                'user_id' => $user->id
            ]);

            if ($request->role == 3)
            {
                Mda::create([
                    'user_id' => $user->id,
                    'title' => $request->title,
                    'firstnames' => $request->firstnames,
                    'surname' => $request->surname,
                    'department_id' => $request->department_id
                ]);
            }

            event(new UserRegistered($user, $password));

            return back()->withErrors(['success' => 'User was created successfully, password: '.$password]);

        }catch (Exception $e)
        {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('roles')->find($id);
        return inertia('Admin/Users/DeleteUserPage', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $user = User::findOrFail($id);
            $user->delete();

            return back()->withErrors(['success' => 'User was deleted successfully']);
        }catch(Exception $e)
        {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
