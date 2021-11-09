@if($paginator->hasPages())
    <nav class="nsw-pagination" aria-label="Pagination">
    <ul>
         {{-- Previous Page Link --}}
        <li>
            <button class="nsw-button nsw-button--white" @if(!$paginator->onFirstPage())  wire:click="previousPage" @endif>
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_left</span>
                <span>Prev</span>
                <span class="sr-only">Back</span>
            </button>
        </li>

        <li>
            <span class="nsw-m-x-md">Page {{ $paginator->currentPage() }}</span></span>
        </li>

        {{-- Next Page Link --}}
        <li>
            <button class="nsw-button nsw-button--white"  @if ($paginator->hasMorePages()) wire:click="nextPage" @endif>
                <span>Next</span>
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_right</span>
                <span class="sr-only">Next</span>
            </button>
        </li>
    </ul>
    </nav>
@endif
