<div class="experience row" data-tags="{{-- @include('partials.tags-class', ['tags'=>$experience->tags]) --}}">
    @include('partials.admin-controls')
    <h3>
        {{$experience->title}}
    </h3>
    <h4>
        @ {{$experience->company}}
    </h4>
    <?php
    $start = new DateTime($experience['Experience']['start']);
    $end = new DateTime($experience['Experience']['end']);
    ?>
    <time>
        <?php echo $start->format('Y') ?> - <?php echo $end->format('Y') ?>
    </time>
    <div>
        <div>
            {!! markdown($experience->description) !!}
            &nbsp;
        </div>
        {{--@include('tags', ['tags'=>$experience->tags()])--}}
    </div>
</div>
