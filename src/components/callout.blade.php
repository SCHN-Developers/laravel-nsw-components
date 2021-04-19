@props(['icon', 'title'])

<div class="nsw-callout">
    @if ($icon)
        <i class="material-icons nsw-material-icons nsw-callout__icon" focusable="false" aria-hidden="true">{{ $icon }}</i>
    @endif
    <div class="nsw-callout__content">
        <h4 class="nsw-callout__title">{{ $title }}</h4>
        {{ $slot }}
        @if ($linkText ?? null)
            <a href="{{ $linkUrl ?? '#' }}" class="nsw-text-link">{{ $linkText }}</a>
        @endif
    </div>
</div>
