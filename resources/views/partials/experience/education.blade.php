<div class="experience row" data-tags="@include('partials.tag-class')">
    @include('partials.admin-controls')
    <h3>
        {{$experience->title}}
    </h3>
    <h4>
        @ {{$experience->company}}
    </h4>
    <time>
        {{$experience->carbon_start->format('Y')}}@if($experience->carbon_end) - {{$experience->carbon_end->format('Y')}} @endif
    </time>
    <div>
        <div>
            {!! $experience->markdown_description !!}
            &nbsp;
        </div>
        @include('partials.tags')
    </div>
</div>
