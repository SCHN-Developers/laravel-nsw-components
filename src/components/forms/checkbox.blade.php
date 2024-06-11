@props([
  'name',
  'id' => $name . '-' . Str::random(12),
  'text',
  'value' => true,
  'default' => null,
  'model' => null,
])
@php($default = $default ?? data_get($model, $name))
<div class="nsw-form__group">
  <input {{ $attributes }} class="nsw-form__checkbox-input" type="checkbox" value="{{ $value }}" name="{{ $name }}" id="{{ $id }}"{{ (old($name, $default) == $value) ? ' checked' : '' }}>
  <label class="nsw-form__checkbox-label" for="{{ $id }}">{{ $text }}</label>
</div>
