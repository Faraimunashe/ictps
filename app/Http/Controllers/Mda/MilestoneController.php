<?php

namespace App\Http\Controllers\Mda;

use App\Http\Controllers\Controller;
use App\Models\Milestone;
use App\Models\Target;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'target_id' => ['required', 'integer', 'min:1'],
            'name' => ['required','string'],
            'description' => ['required', 'string'],
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after:start_date']
        ]);

        $target = Target::find($request->target_id);
        if(is_null($target))
        {
            return back()->withErrors(['target_id' => 'Target id might be wrong']);
        }

        $target_start_date = Carbon::createFromFormat('Y-m-d', $target->start_date);
        $milestone_start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);

        $target_end_date = Carbon::createFromFormat('Y-m-d', $target->due_date);
        $milestone_end_date = Carbon::createFromFormat('Y-m-d', $request->end_date);

        if ($target_start_date->gt($milestone_start_date)) {
            return back()->withErrors(['start_date' => 'start date should not be before target start date']);
        }

        if ($milestone_end_date->gt($target_end_date)) {
            return back()->withErrors(['start_date' => 'end date should not be after target end date']);
        }

        try{
            Milestone::create([
                'target_id' => $request->target_id,
                'name' => $request->name,
                'description' => $request->description,
                'status' => 'PENDING',
                'start_date' => $request->start_date,
                'due_date' => $request->end_date
            ]);

            return back()->withErrors(['success' => 'Successfully created a milestone']);
        }catch(Exception $e){

            return back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
