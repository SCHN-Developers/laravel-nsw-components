@props(['type' => 'info', 'icon', 'title'])

<div class="nsw-notification nsw-notification--{{ $type }}">
    <i class="material-icons nsw-material-icons nsw-notification__icon" focusable="false" aria-hidden="true">{{ $icon }}</i>
    <div class="nsw-notification__content">
        <h4 class="nsw-notification__title">{{ $title }}</h4>
        {{ $slot }}
    </div>
</div>
