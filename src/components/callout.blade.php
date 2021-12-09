@props(['title'])

<div class="nsw-callout">
  <div class="nsw-callout__content">
    <h4>{{ $title }}</h4>
      {{ $slot }}
  </div>
</div>