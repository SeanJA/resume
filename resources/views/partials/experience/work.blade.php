<div class="experience row" data-tags="{{-- @include('partials.tags-class', ['tags'=>$experience->tags]) --}}">
    @include('partials.admin-controls')
    <h3>
        {{$experience->title}}
    </h3>
    <h4>
        @ {{$experience->company}}
    </h4>
        @include ('partials.time', [
                        'start' => $experience->carbon_start,
                        'end' => $experience->carbon_end
                    ])
    <div>
        <div>
            {!! $experience->markdown_description !!}
            &nbsp;
        </div>

        @include('partials.tags')
    </div>
</div>
