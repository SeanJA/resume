<div class="experience row" data-tags="{{-- @include('partials.tags-class', ['tags'=>$experience->tags]) --}}">
    @include('partials.admin-controls')
    <h3>
        {{$experience->company}}
    </h3>
    @include ('partials.time', [
                'start' => \Carbon\Carbon::parse($experience->start),
                'end' => is_null($experience->end)? null : \Carbon\Carbon::parse($experience->end)
            ])
    <div>
        <div>
            {!! markdown($experience->description) !!}
            &nbsp;
        </div>
        {{--@include('tags', ['tags'=>$experience->tags()])--}}
    </div>
</div>
