@props([
    'icon' => null,
    'image' => null,
    'url' => null,
    'title' => null,
    'date' => null,
    'highlight' => false,
    'tag' => null,
    'style' => null
])

<div class="nsw-card @if($highlight) nsw-card--highlight @endif @if($style) nsw-card--{{$style}} @endif">
        @if ($image)
            <div class="nsw-card__image">
                <img src="{{ $image }}" alt="">
            </div>
        @endif
        <div class="nsw-card__content">
            <div class="nsw-card__tag">{{ $tag }}</div>
             @if ($date)
            <p class="nsw-card__date">
                <time datetime="{{ $date->format('Y-m-d') }}">{{ $date->format('j F Y') }}</time>
            </p>
        @endif
            @if ($title)
            <div class="nsw-card__title">
                @if ($url)
                    <a href="{{ $url }}" class="nsw-card__link">{{ $title }}</a>
                @else
                    {{ $title }}
                @endif
            </div>
        @endif
            @if ($slot->toHtml())
                <div class="nsw-card__copy">{{ $slot }}</div>
            @endif
            @if ($icon)
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">{{ $icon }}</span>
            @endif
        </div>
    </div>
