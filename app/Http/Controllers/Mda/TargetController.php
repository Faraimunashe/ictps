<?php

namespace App\Http\Controllers\Mda;

use App\Http\Controllers\Controller;
use App\Models\Mda;
use App\Models\Quarter;
use App\Models\Target;
use App\Models\TargetAttachment;
use App\Models\TargetProgress;
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
        $targets = Target::with('progress')->withCount('milestones')->where('mda_id', $mda->id)->latest()->paginate(12);
        if(isset($search))
        {
            $targets = Target::with('progress')->withCount('milestones')->where('mda_id', $mda->id)
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
        $quarters = Quarter::orderBy('created_at', 'desc')->take(4)->get();
        return inertia('Mda/Target/AddTarget', [
            'quarters' => $quarters
        ]);
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
            $target = Target::create([
                'quarter_id' => get_current_quarter()->id,
                'mda_id' => $mda->id,
                'name' => $request->name,
                'description' => $request->description,
                'status' => 'PENDING',
                'start_date' => $request->start_date,
                'due_date' => $request->end_date
            ]);

            TargetProgress::create([
                'target_id' => $target->id,
                'progress' => 0
            ]);

            return back()->withErrors(['success' => 'Target was created successfully.']);
        }catch(Exception $e){

            return back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $target = Target::with('attachments')->withCount('attachments')->with('progress')->with('milestones')->find($id);
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

    public function progress($id)
    {
        $target = Target::with('progress')->with('milestones')->find($id);
        return inertia('Mda/Target/UpdateTargetProgress', [
            'target' => $target
        ]);
    }

    public function update_progress(Request $request, string $id)
    {
        $request->validate([
            'progress' => ['required', 'integer', 'min:0', 'max:100'],
            'files.*' => ['nullable', 'file', 'max:5048'],
        ]);

        //dd($request->all(), $id);

        try{
            $file_paths = [];
            $file_sizes = [];
            if ($request->hasFile('files'))
            {
                foreach ($request->file('files') as $file)
                {
                    $file_paths[] = $file->store('target_attachments', 'public');
                    $size = $file->getSize();
                    $file_sizes[] = $size;
                }
            }

            //dd($file_sizes, $file_paths);

            $target_progress = TargetProgress::where('target_id', $id)->first();
            if(is_null($target_progress))
            {
                return back()->withErrors(['error' => 'Target progress was not found.']);
            }

            $attachment = new TargetAttachment();
            $attachment->target_id = $id;
            $attachment->files = json_encode($file_paths);
            $attachment->progress = $request->progress;
            $attachment->size = json_encode($file_sizes);
            $attachment->save();

            $target_progress->progress = $request->progress;
            $target_progress->save();

            if($request->progress == 100)
            {
                $target = Target::find($id);
                $target->status = 'COMPLETED';
                $target->save();
            }

            return back()->withErrors(['success' => 'Target progress was updated.']);
        }catch(Exception $e){

            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
