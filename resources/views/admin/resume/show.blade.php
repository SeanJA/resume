@extends('layouts.admin')

@section('sidebar')
    @if($experience->file)
        <img src="{{$experience->file}}" alt="" />
    @endif
@endsection


@section('content')
    <h3>
        {{$experience->title}}
    </h3>
    <h4>{{$experience->company}}</h4>
    <div>{{$experience->start}} - {{$experience->end}}</div>
    <div>{{$experience->type}}</div>
    {!! $experience->markdown_description !!}

    @include('partials.tags')
@endsection
