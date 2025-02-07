<ul>
    @foreach ($paginator->appends(request()->query())->linkCollection() as $link)
    <li style="display:inline; margin: 0rem 0.2rem;">
        @if ($link['active'])
        <span style="font-weight: bold; color:#fff">{!! $link['label'] !!}</span>
        @else
        <a href="{{ $link['url'] }}" style="color:#fff">{!! $link['label'] !!}</a>
        @endif
    </li>
    @endforeach
</ul>