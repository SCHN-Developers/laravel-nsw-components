@props(['style' => null, 'title', 'image' => null, 'text' => null, 'action' => null])
<div class="nsw-hero-banner @if(!$image) nsw-hero-banner--wide @endif @if($style) nsw-hero-banner--{{$style}}  @endif">
  <div class="nsw-hero-banner__container">
    <div class="nsw-hero-banner__wrapper">
      <div class="nsw-hero-banner__content">
        <h1>{{ $title }}</h1>
        @if($text)
            <p class="nsw-intro">
                {{ $text ?? ''}}
            </p>
        @endif
        @if($action)
            <div class="nsw-hero-banner__button">
                {{ $action ?? ''}}
            </div>
        @endif
      </div>
      <div class="nsw-hero-banner__box">
        <div class="nsw-hero-banner__bg">
            @if($image)
                <img class="nsw-hero-banner__image" src="{{$image}}" alt="" />
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
