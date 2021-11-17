@if($paginator->hasPages())
    <nav class="nsw-pagination" aria-label="Pagination">
    <ul>
         {{-- Previous Page Link --}}
         @if(!$paginator->onFirstPage())
         <li>
             <button class="nsw-icon-button" wire:click="previousPage">
                 <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_left</span>
                 <span class="sr-only">Back</span>
             </button>
         </li>
         @else
          <li>
                 <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_left</span>
                 <span class="sr-only">Back</span>
          </li>


         @endif

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
                        @if($page == $paginator->currentPage())
                          <a class="active" aria-disabled="true">
                            <span class="sr-only">Page </span>{{ $page }}
                          </a>
                        @else
                          <a wire:key="paginator-page-{{ $page }}" wire:click.prevent="gotoPage({{ $page }})" href="#">
                              <span class="sr-only">Page </span>{{ $page }}
                          </a>
                        @endif
                    @endforeach
                @endif

        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li>
            <button class="nsw-icon-button" wire:click="nextPage">
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_right</span>
                <span class="sr-only">Next</span>
            </button>
        </li>
        @endif
    </ul>
    </nav>
@endif
