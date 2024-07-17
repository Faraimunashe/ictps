<?php

namespace App\Http\Controllers\Mda;

use App\Http\Controllers\Controller;
use App\Models\Mda;
use App\Models\Target;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mda = Mda::where('user_id', Auth::id())->first();
        if(is_null($mda))
        {
            return back()->withErrors(['error' => 'This user is not an MDA.']);
        }
        $search = $request->search;
        $targets = Target::withCount('milestones')->where('mda_id', $mda->id)->latest()->paginate(12);
        if(isset($search))
        {
            $targets = Target::where('mda_id', $mda->id)
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                      ->orWhere('description', 'like', '%'.$search.'%');
            })
            ->latest()->paginate(12);
        }
        $targets_count = Target::where('mda_id', $mda->id)->count();
        return inertia('Mda/Targets', [
            'targets' => $targets,
            'targets_count' => $targets_count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd(route('targets.store'));
        return inertia('Mda/Target/AddTarget');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required','string'],
            'description' => ['required', 'string'],
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after:start_date']
        ]);

        try{
            $mda = Mda::where('user_id', Auth::id())->first();
            if(is_null($mda))
            {
                return back()->withErrors(['error' => 'This user is not an MDA.']);
            }
            Target::create([
                'mda_id' => $mda->id,
                'name' => $request->name,
                'description' => $request->description,
                'status' => 'PENDING',
                'start_date' => $request->start_date,
                'due_date' => $request->end_date
            ]);

            return back()->withErrors(['success' => 'Successfully created target']);
        }catch(Exception $e){

            return back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $target = Target::with('milestones')->find($id);
        return inertia('Mda/Target/ShowTarget', [
            'target' => $target
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
        //
    }
}
