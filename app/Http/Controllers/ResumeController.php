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
        $experiences = Experience::all();

        return view('resume.index', compact('experiences', 'tags'));
    }

}
