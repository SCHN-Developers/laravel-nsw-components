@props([
    'name',
    'url',
    'id' => Str::random(12),
    'url' => null,
    'description' => null,
    'dropdown_name' => null,
    'active' => false,
])

<li class="{{ $active ? 'active' : ''}}">
  <a href="{{ $url }}">
    <span>{{ $name }}</span>
    @if($slot->isNotEmpty())
      <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_right</span>
    @endif
  </a>

  @if($slot->isNotEmpty())
    <div class="nsw-main-nav__sub-nav" id="sub-nav-{{ $id }}" role="region" aria-label="{{ $name }}">
      <div class="nsw-main-nav__header">
        <button class="nsw-icon-button nsw-icon-button--flex js-close-sub-nav" type="button" aria-expanded="true" aria-controls="sub-nav-{{ $id }}">
          <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">keyboard_arrow_left</span>
          <span>Back<span class="sr-only"> to previous menu</span></span>
        </button>

        <button class="nsw-icon-button js-close-nav" type="button" aria-expanded="true">
          <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">close</span>
          <span class="sr-only">Close Menu</span>
        </button>
      </div>

      @if($url)
        <div class="nsw-main-nav__title">
          <a href="{{ $url }}">
            <span>{{ $dropdown_name ?? $name }}</span>
            <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">east</span>
          </a>
        </div>
      @endif

      <div class="nsw-main-nav__description">{{ $description }}</div>

      <ul class="nsw-main-nav__sub-list">
       {{ $slot }}
      </ul>
    </div>
    @endif
</li>