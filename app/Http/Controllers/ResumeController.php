<?php

namespace App\Http\Controllers;

use App\Experiences;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $experiences = [
            'education' => Experiences::where(['type' => 'Education'])->get(),
            'work' => Experiences::where(['type' => 'Work'])->get(),
            'open-source' => Experiences::where(['type' => 'Open-source'])->get(),
            'projects' => Experiences::where(['type' => 'Projects'])->get(),
        ];

        return view('resume.index', ['experiences' => $experiences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('resume.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $id = null;
        return redirect()->route('show', ['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('resume.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('resume.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
