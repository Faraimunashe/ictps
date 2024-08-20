<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $current_quarter = get_current_quarter();
        $search = $request->search;
        $targets = Target::with('progress')->with('mda')->where('quarter_id', $current_quarter->id)->latest()->paginate(12);
        if(isset($search))
        {
            $targets = Target::with('progress')->with('mda')->where('quarter_id', $current_quarter->id)
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                      ->orWhere('description', 'like', '%'.$search.'%');
            })
            ->latest()->paginate(12);
        }
        $targets_count = Target::where('quarter_id', $current_quarter->id)->count();
        return inertia('Admin/TargetsPage', [
            'targets' => $targets,
            'targets_count' => $targets_count
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $target = Target::with('attachments')->withCount('attachments')->with('progress')->with('mda')->find($id);
        return inertia('Admin/targets/ShowTarget', [
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
