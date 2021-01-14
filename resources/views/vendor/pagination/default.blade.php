@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled mr-2"><a class="btn btn-common disabled"><span>&laquo;</span></a></li>
        @else
            <li class="page-item mr-2"><a class="btn btn-common" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled mr-2"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active mr-2"><a class="page-link" style="background-color: #bd1e26;
    border-color: #bd1e26;"><span>{{ $page }}</span></a></li>
                    @else
                        <li class="page-item mr-2"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item mr-2"><a class="page-link btn btn-common" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="page-item disabled mr-2"><a class="btn btn-common disabled"><span>&raquo;</span></a></li>
        @endif
    </ul>
    </nav>
@endif
