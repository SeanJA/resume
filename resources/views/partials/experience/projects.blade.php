<div class="experience row" data-tags="{{-- @include('partials.tags-class', ['tags'=>$experience->tags]) --}}">
    @include('partials.admin-controls')
    <div class="large-12">
        <div class="row">
            <div class="large-4 columns">
                <div class="hide-for-medium-up hide-for-print">
                    <h3>
                        {{$experience->title}}
                    </h3>
                    @include ('partials.time', [
                        'start' => $experience->carbon_start,
                        'end' => $experience->carbon_end
                    ])
                </div>
                @if (!empty($experience->file))
                    <div class="image">
                        <img src="{!! $experience->file !!}" alt="" />
                    </div>
                @endif
            </div>
            <div class="large-8 columns">
                <div class="hide-for-small">
                    <h3>
                        {{$experience->title}}
                    </h3>
                    @include ('partials.time', [
                        'start' => $experience->carbon_start,
                        'end' => $experience->carbon_end
                    ])
                </div>
                <div>
                    {!! $experience->markdown_description !!}
                    &nbsp;
                </div>
            </div>
        </div>
        {{--@include('tags', ['tags'=>$experience->tags()])--}}
    </div>
</div>
