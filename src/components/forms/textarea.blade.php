@props([
    'name',
    'label',
    'helpText',
    'id' => $name . '-' . Str::random(12),
    'required' => false,
    'default' => null,
    'model' => null,
])
@php($default = $default ?? data_get($model, $name))
<div class="nsw-form__group">
  <label for="{{ $id }}" class="nsw-form__label @if($required) nsw-form__required @endif">{{ $label }}</label>
  @if (isset($helpText))
    <span class="nsw-form__helper" id="{{ $id }}-helper-text">{{ $helpText }}</span>
  @endif

  <textarea {{ $attributes->merge(['class' => 'nsw-form__input' ]) }} id="{{ $id }}" name="{{ $name }}" @error($name) aria-invalid="true" @enderror>{{ old($name, $default) }}</textarea>

  @error ($name)
      <span class="nsw-form__helper nsw-form__helper--error" id="{{ $id }}--error-text"><i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">cancel</i>{{ $message }}</span>
  @enderror
</div>
