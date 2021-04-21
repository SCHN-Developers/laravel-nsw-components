@props([
    'dark' => false,
    'icon' => 'east',
    'image' => 'https://picsum.photos/id/421/2000/1250',
    'url' => null,
    'title' => 'Hero Title',
])

<div class="nsw-hero-banner @if($dark) nsw-hero-banner--dark @endif">
  <div class="nsw-container">
    <div class="nsw-hero-banner__image-area">
      <img src="{{ $image }}" class="nsw-hero-banner__image" alt="">
    </div>
    <div class="nsw-hero-banner__content-area">
      <div class="nsw-hero-banner__content">
        <h2 class="nsw-hero-banner__title">
            @if($url)
                <a href="{{$url}}" class="nsw-hero-banner__link">{{ $title }}</a>
            @else
                {{ $title }}
            @endif
        </h2>
        {{ $slot }}
        @if($url)
            <i class="material-icons nsw-material-icons nsw-hero-banner__icon" focusable="false" aria-hidden="true">{{ $icon }}</i>
        @endif
      </div>
    </div>
  </div>
</div>