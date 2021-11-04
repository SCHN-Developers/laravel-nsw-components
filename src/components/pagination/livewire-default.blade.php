@if($paginator->hasPages())
    <nav class="nsw-pagination" aria-label="Pagination">
    <ul>
         {{-- Previous Page Link --}}
        <li>
            <a class="nsw-icon-button" @if(!$paginator->onFirstPage()) href="#" wire:click.prevent="previousPage" @endif>
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_left</span>
                <span class="sr-only">Back</span>
            </a>
        </li>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li>
                    <li class="nsw-pagination__item" aria-disabled="true"><span class="nsw-pagination__text">{{ $element }}</span></li>
                </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <a @if($page == $paginator->currentPage()) class="active" wire:key="paginator-page-{{ $page }}" @else wire:click.prevent="gotoPage({{ $page }}" @endif href="{{ $url }}">
                            <span class="sr-only">Page </span>{{ $page }}
                        </a>
                    @endforeach
                @endif

        @endforeach
        {{-- Next Page Link --}}
        <li>
            <a class="nsw-icon-button"  @if ($paginator->hasMorePages()) href="#" wire:click.prevent="nextPage" @endif>
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_right</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
    </nav>
@endif
