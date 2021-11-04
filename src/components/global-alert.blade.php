@props(['type' => null, 'title', 'url' => null, 'buttonText' => null])
<div class="nsw-global-alert nsw-global-alert--{{ $type}} js-global-alert" role="alert">
  <div class="nsw-global-alert__wrapper">
    <div class="nsw-global-alert__content">
        <div class="nsw-global-alert__title">{{ $title }}</div>
            {{ $slot }}
        </div>
        @if($url && $buttonText)
            <p><a href="{{ $url }}" class="nsw-button nsw-button--white">{{ $buttonText }}</a></p>
        @endif
        <button class="nsw-icon-button js-close-alert" type="button" aria-expanded="true">
        <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">close</span>
        <span class="sr-only">Close message</span>
        </button>
  </div>
</div>
