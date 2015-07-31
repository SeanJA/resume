<div class="experience row" data-tags="@include('partials.tag-class')">
    @include('partials.admin-controls')
    <h3>
        {{$experience->company}}
    </h3>
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
