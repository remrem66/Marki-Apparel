@if ($paginator->hasPages())
    <nav class="navigation paging-navigation text-center mt-5" role="navigation">
        <div class="pagination loop-pagination d-flex justify-content-center align-items-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="pagination-arrow d-flex align-items-center mx-3">
                    <iconify-icon icon="ic:baseline-keyboard-arrow-left" class="pagination-arrow fs-1"></iconify-icon>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-arrow d-flex align-items-center mx-3">
                    <iconify-icon icon="ic:baseline-keyboard-arrow-left" class="pagination-arrow fs-1"></iconify-icon>
                </a>
            @endif

            {{-- Pagination Links --}}
            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span aria-current="page" class="page-numbers mt-2 fs-3 mx-3 current">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="page-numbers mt-2 fs-3 mx-3">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-arrow d-flex align-items-center mx-3">
                    <iconify-icon icon="ic:baseline-keyboard-arrow-right" class="pagination-arrow fs-1"></iconify-icon>
                </a>
            @else
                <span class="pagination-arrow d-flex align-items-center mx-3">
                    <iconify-icon icon="ic:baseline-keyboard-arrow-right" class="pagination-arrow fs-1"></iconify-icon>
                </span>
            @endif
        </div>
    </nav>
@endif
