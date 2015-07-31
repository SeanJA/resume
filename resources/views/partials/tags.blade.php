@if($experience->tags()->count() > 0)
    <div class="large-12 columns">
        <strong>Skills / Tech:</strong>
        <small>
            @foreach($experience->tags() as $i=>$tag)@if($i > 0), @endif<span data-count="{{$tag->count}}">{{$tag->name}}</span>@endforeach
        </small>
    </div>
@endif
