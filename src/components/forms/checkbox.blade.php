@props([
  'name',
  'id' => $name . '-' . Str::random(12),
  'text',
  'value' => true,
])
<div class="nsw-form__group">
  <input {{ $attributes }} class="nsw-form__checkbox-input" type="checkbox" value="{{ $value }}" name="{{ $name }}" id="{{ $id }}">
  <label class="nsw-form__checkbox-label" for="{{ $id }}">{{ $text }}</label>
</div>
