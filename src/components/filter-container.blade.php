@props(['title' => 'Filter results', 'onClear' => null])

<div class="nsw-filters nsw-filters--instant">
  <div class="nsw-filters__wrapper">
    <div class="nsw-filters__title">{{ $title }}</div>
      <div class="nsw-filters__list">
        {{ $slot }}
        <div class="nsw-filters__cancel">
          <button type="reset" {{ $attributes->merge() }} onclick="{{ $onClear }}">Clear all filters</button>
        </div>
    </div>
  </div>
</div>