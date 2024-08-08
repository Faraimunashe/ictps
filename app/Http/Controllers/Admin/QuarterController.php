<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quarter;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class QuarterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $quarters = Quarter::latest()->paginate(10);

        if(isset($search))
        {
            $quarters = Quarter::where('name', 'LIKE', '%'.$search.'%')->latest()->paginate(10);
        }

        return inertia('Admin/QuartersPage', [
            'quarters' => $quarters
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
            'name' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after:start_date']
        ]);

        $overlapping_quarters = Quarter::where(function($query) use ($request) {
            $query->where('start_date', '<=', $request->end_date)
                ->where('end_date', '>=', $request->start_date);
        })->exists();

        if ($overlapping_quarters) {
            return back()->withErrors(['error' => 'The specified period overlaps with an existing quarter.']);
        }

        try {
            Quarter::create([
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);

            return back()->withErrors(['success' => 'Quarter was created successfully']);
        } catch (Exception $e) {
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after:start_date']
        ]);

        $quarter = Quarter::findOrFail($id);

        $overlapping_quarters = Quarter::where('id', '!=', $id)
            ->where(function($query) use ($request) {
                $query->where('start_date', '<=', $request->end_date)
                    ->where('end_date', '>=', $request->start_date);
            })->exists();

        if ($overlapping_quarters) {
            return back()->withErrors(['error' => 'The specified period overlaps with an existing quarter.']);
        }

        try {
            $quarter->update([
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);

            return back()->withErrors(['success' => 'Quarter was updated successfully']);
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $quarter = Quarter::findOrFail($id);

            $quarter->delete();

            return back()->withErrors(['success' => 'Quarter was deleted successfully']);
        } catch (ModelNotFoundException $e) {
            return back()->withErrors(['error' => 'Quarter not found']);
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
