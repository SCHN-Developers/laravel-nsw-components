<div>
    @if ($paginator->hasPages())
        <nav aria-label="Pagination">
            <ul class="nsw-pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="nsw-pagination__item nsw-pagination__item--prev-page">
                        <a class="nsw-direction-link nsw-direction-link--icon-left" rel="prev">
                            <i class="material-icons nsw-material-icons nsw-material-icons--rotate-180" focusable="false" aria-hidden="true">east</i>
                            <span class="nsw-direction-link__text">Back <span class="sr-only">a page</span></span>
                        </a>
                    </li>
                @else
                    <li class="nsw-pagination__item nsw-pagination__item--prev-page">
                        <a href="{{ $paginator->previousPageUrl() }}" class="nsw-direction-link nsw-direction-link--icon-left" rel="prev">
                            <i class="material-icons nsw-material-icons nsw-material-icons--rotate-180" focusable="false" aria-hidden="true">east</i>
                            <span class="nsw-direction-link__text">Back <span class="sr-only">a page</span></span>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="nsw-pagination__item" aria-disabled="true"><span class="nsw-pagination__text">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="nsw-pagination__item nsw-pagination__item--is-active" aria-current="page">
                                    <a class="nsw-pagination__link is-current">
                                        <span class="nsw-pagination__text">
                                            <span class="sr-only">Page </span>{{ $page }}
                                        </span>
                                    </a>
                                </li>
                            @else
                                <li class="nsw-pagination__item">
                                    <a href="{{ $url }}" class="nsw-pagination__link">
                                        <span class="nsw-pagination__text">
                                            <span class="sr-only">Page </span>{{ $page }}
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="nsw-pagination__item nsw-pagination__item--next-page">
                        <a href="{{ $paginator->nextPageUrl() }}" class="nsw-direction-link" rel="next">
                            <span class="nsw-direction-link__text">
                                Next <span class="sr-only">page</span>
                            </span>
                            <i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">east</i>
                        </a>
                    </li>
                @else
                    <li class="nsw-pagination__item nsw-pagination__item--next-page">
                        <a class="nsw-direction-link" rel="next">
                            <span class="nsw-direction-link__text">
                                Next <span class="sr-only">page</span>
                            </span>
                            <i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">east</i>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
