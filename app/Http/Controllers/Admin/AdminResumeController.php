<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use App\Http\Requests\DestroyExperienceRequest;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $experiences = [
            'education' => Experience::where(['type' => 'Education'])->get(),
            'work' => Experience::where(['type' => 'Work'])->get(),
            'open-source' => Experience::where(['type' => 'Open-source'])->get(),
            'projects' => Experience::where(['type' => 'Projects'])->get(),
        ];

        return view('admin.resume.index', ['experiences' => $experiences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $experience = new Experience();

        return view('admin.resume.create')
            ->with('experience', $experience);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreExperienceRequest $request)
    {
        $experience = new Experience($request->except('_token', '_method', 'tagging'));

        $file = $request->file('file');

        if($file){
            $newFileName = $experience->id . '.' . $request->file('file')->getClientOriginalExtension();
            $file = $request->file('file')->move(public_path('experience-images'), $newFileName);
            $experience->file = '/experience-images/' . $newFileName;
        }

        Auth::user()->experiences()->save($experience);

        $experience->tag(explode(',',rtrim($request->get('tagging'), ',')));

        return redirect()->route('admin::resume::show', ['id' => $experience->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $experience = Experience::find($id);

        return view('admin.resume.show')
            ->with('experience', $experience);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $experience = Experience::find($id);

        return view('admin.resume.edit')
            ->with('experience', $experience);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateExperienceRequest $request
     * @return Response
     */
    public function update(UpdateExperienceRequest $request)
    {
        $experience = Experience::find($request->input('id'))
            ->fill($request->except('id', '_token', '_method', 'tagging'));

        $file = $request->file('file');

        if($file){
            $newFileName = $experience->id . '.' . $request->file('file')->getClientOriginalExtension();
            $file = $request->file('file')->move(public_path('experience-images'), $newFileName);
            $experience->file = '/experience-images/' . $newFileName;
        }

        Auth::user()->experiences()->save($experience);

        if($request->has('tagging')){
            $experience->retag(explode(',',rtrim($request->get('tagging'), ',')));
        } else {
            $experience->untag();
        }

        return redirect()->route('admin::resume::show', ['id' => $experience->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(DestroyExperienceRequest $request)
    {

    }
}
