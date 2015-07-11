
<time>
    @if(is_null($end))
        {{$start->format('F Y')}}
    @elseif ($start->format('Y') == $end->format('Y') && $start->format('F') == $end->format('F'))
        {{$start->format('F Y')}}
    @else
        {{$start->format('F Y')}} - {{$end->format('F Y')}}
    @endif
</time>
