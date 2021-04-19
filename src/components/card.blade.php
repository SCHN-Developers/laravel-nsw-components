@props([
    'icon' => null,
    'image' => null,
    'link' => null,
    'title' => null,
    'date' => null,
    'highlight' => false
])

<div class="nsw-card nsw-card--{{ $highlight ? 'media' : 'content' }}">
    <div class="nsw-card__content">
        @if ($date)
            <p class="nsw-card__date">
                <time datetime="{{ $date->format('Y-m-d') }}">{{ $date->format('j F Y') }}</time>
            </p>
        @endif
        @if ($title)
            <h2 class="nsw-card__title">
                @if ($link)
                    <a href="{{ $link }}" class="nsw-card__link">{{ $title }}</a>
                @else
                    {{ $title }}
                @endif
            </h2>
        @endif
        @if ($slot->toHtml())
            <p class="nsw-card__copy">{{ $slot }}</p>
        @endif
        @if ($icon)
            <i class="material-icons nsw-material-icons nsw-card__icon" focusable="false" aria-hidden="true">{{ $icon }}</i>
        @endif
    </div>
    @if ($image)
        <div class="nsw-card__image-area">
            <img src="{{ $image }}" alt="" class="nsw-card__image">
        </div>
    @endif
</div>
