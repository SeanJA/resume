@extends('layouts.master')

@section('content')
    <div class="experiences index">
        <h2>
            Projects
        </h2>
        @foreach ($experiences['projects'] as $experience)
            @include('partials.experience.projects')
        @endforeach

        <h2>
            Open Source Contributions
        </h2>
        @foreach ($experiences['open-source'] as $experience)
            @include('partials.experience.opensource')
        @endforeach

        <h2>
            Work Experience
        </h2>
        @foreach ($experiences['work'] as $experience)
            @include('partials.experience.work')
        @endforeach

        <h2>
            Education
        </h2>
        @foreach ($experiences['education'] as $experience)
            @include('partials.experience.education')
        @endforeach
    </div>

@endsection
