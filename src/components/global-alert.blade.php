@props(['title', 'type', 'url' => null])

<div class="nsw-sitewide-message nsw-sitewide-message--{{ $type ?? '' }} js-sitewide-message" role="alert">
    <div class="nsw-sitewide-message__wrapper">
        <div class="nsw-sitewide-message__content">
            <h2 class="nsw-sitewide-message__title">{{ $title }}</h2>
            {{ $slot }}
        </div>
        @if ($url)
            <a href="{{ $url }}" class="nsw-button">More information</a>
        @endif
        <button type="button" class="nsw-sitewide-message__close">
            <i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">close</i>
            <span class="sr-only">Close message</span>
        </button>
    </div>
</div>
