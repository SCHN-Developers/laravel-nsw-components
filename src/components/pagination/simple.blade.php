@if($paginator->hasPages())
    <nav class="nsw-pagination" aria-label="Pagination">
    <ul>
         {{-- Previous Page Link --}}
        <li>
            <a class="nsw-button" @if(!$paginator->onFirstPage()) href="{{ $paginator->previousPageUrl() }}" @endif>
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_left</span>
                <span>Prev</span>
                <span class="sr-only">Back</span>
            </a>
        </li>

        <li>
            <span class="nsw-m-x-md">Page {{ $paginator->currentPage() }}</span>
        </li>

        {{-- Next Page Link --}}
        <li>
            <a class="nsw-button"  @if ($paginator->hasMorePages()) href="{{ $paginator->nextPageUrl() }}" @endif>
                <span>Next</span>
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_right</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
    </nav>
@endif
