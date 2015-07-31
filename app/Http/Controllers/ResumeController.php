<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tags = Experience::existingTags();
        $experiences = [
            'education' => Experience::where(['type' => 'Education'])->get(),
            'work' => Experience::where(['type' => 'Work'])->get(),
            'open-source' => Experience::where(['type' => 'Open-source'])->get(),
            'projects' => Experience::where(['type' => 'Projects'])->get(),
        ];

        return view('resume.index', compact('experiences', 'tags'));
    }

}
