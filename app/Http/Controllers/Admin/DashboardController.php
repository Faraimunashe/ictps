<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mda;
use App\Models\Target;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $current_quarter = get_current_quarter();
        $quarter_targets_count = Target::where('quarter_id', $current_quarter->id)->count();
        $mdas_count = Mda::count();
        $pending_targets_count = Target::where('quarter_id', $current_quarter->id)->where('status', 'PENDING')->count();
        $completed_targets_count = Target::where('quarter_id', $current_quarter->id)->where('status', 'COMPLETED')->count();

        $icon_data = [
            'quarter_targets_count' => $quarter_targets_count,
            'mdas_count' => $mdas_count,
            'pending_targets_count' => $pending_targets_count,
            'completed_targets_count' => $completed_targets_count
        ];

        $departments = Mda::with('department')
            ->withCount(['targets' => function ($query) use ($current_quarter) {
                $query->where('quarter_id', $current_quarter->id);
            }])->get();

        $total_department_targets = $departments->sum('targets_count');

        return inertia('Admin/Dashboards', [
            'current_quarter' => $current_quarter,
            'icon_data' => $icon_data,
            'departments' => $departments,
            'total_department_targets' => $total_department_targets
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
