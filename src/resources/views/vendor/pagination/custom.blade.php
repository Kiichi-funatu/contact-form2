@if ($paginator->hasPages())
    <div class="ui pagination menu" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
    <a class="icon item disabled" aria-disabled="true"><</a>
@else
    <a class="icon item" href="{{ $paginator->previousPageUrl() }}" rel="prev"><</a>
@endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="icon item disabled" aria-disabled="true">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
@if (is_array($element))
    @php
        // 最大表示ページ数
        $maxLinks = 5;

        // 現在ページ
        $current = $paginator->currentPage();

        // 全ページ数
        $last = $paginator->lastPage();

        // 表示開始ページ
        $start = max(1, $current - floor($maxLinks / 2));

        // 表示終了ページ
        $end = min($last, $start + $maxLinks - 1);

        // start がずれたら調整
        if ($end - $start + 1 < $maxLinks) {
            $start = max(1, $end - $maxLinks + 1);
        }
    @endphp

    @foreach ($element as $page => $url)
        @if ($page >= $start && $page <= $end)
            @if ($page == $current)
                <a class="item active" aria-current="page">{{ $page }}</a>
            @else
                <a class="item" href="{{ $url }}">{{ $page }}</a>
            @endif
        @endif
    @endforeach
@endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
    <a class="icon item" href="{{ $paginator->nextPageUrl() }}" rel="next">></a>
@else
    <a class="icon item disabled" aria-disabled="true">></a>
@endif

    </div>
@endif
