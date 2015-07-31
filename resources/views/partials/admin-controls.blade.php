@if(Auth::user())
    <ul class="admin-controls">
        <li><strong>Modify</strong></li>
        <li>
            <a href="{{route('admin::resume::edit', ['id' => $experience->id])}}">
                Edit
            </a>
        </li>
        <li>
            {!! Form::open(['route'=>['admin::resume::delete', 'id' => $experience->id], 'method'=>'delete']) !!}
            {!! Form::submit('Delete') !!}
            {!! Form::close() !!}
        </li>
    </ul>
@endif
