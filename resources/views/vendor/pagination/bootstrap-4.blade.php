@if ($paginator->hasPages())
<div class="dataTables_paginate">
    @if ($paginator->onFirstPage())
        <a class="paginate_button disabled">
            <i class="ti-arrow-left"></i>
        </a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="paginate_button">
            <i class="ti-arrow-left"></i>
        </a>
    @endif
    <span>
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="paginate_button disabled">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="paginate_button current">{{ $page }}</a>
                    @else
                        <a class="paginate_button" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </span>
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="paginate_button">
            <i class="ti-arrow-right"></i>
        </a>
    @else
        <a class="paginate_button disabled">
            <i class="ti-arrow-right"></i>
        </a>
    @endif
</div>
@endif