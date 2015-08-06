@extends('layouts.master')

@section('content')
    <div class="experiences index">
        <h2>
            Projects
        </h2>
        @foreach ($experiences->where('type', 'Projects') as $experience)
            @include('partials.experience.projects')
        @endforeach

        <h2>
            Open Source Contributions
        </h2>
        @foreach ($experiences->where('type', 'Open-source') as $experience)
            @include('partials.experience.opensource')
        @endforeach

        <h2>
            Work Experience
        </h2>
        @foreach ($experiences->where('type', 'Work') as $experience)
            @include('partials.experience.work')
        @endforeach

        <h2>
            Education
        </h2>
        @foreach ($experiences->where('type', 'Education') as $experience)
            @include('partials.experience.education')
        @endforeach
    </div>

@endsection
