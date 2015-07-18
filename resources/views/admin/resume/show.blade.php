@extends('layouts.admin')

@section('content')
    {{$experience->title}}
    {{$experience->company}}
    {{$experience->start}}
    {{$experience->end}}
    {{$experience->type}}
    {{$experience->description}}
    {{$experience->image}}
@endsection
