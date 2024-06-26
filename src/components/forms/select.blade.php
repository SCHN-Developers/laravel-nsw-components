@props([
    'name',
    'label',
    'helpText',
    'options',
    'id' => $name . '-' . Str::random(12),
    'required' => false,
    'nullOption' => false,
    'default' => null,
    'model' => null,
])
@php($default = $default ?? data_get($model, $name))
<div class="nsw-form__group">

   <label class="nsw-form__label @if($required) nsw-form__required @endif" for="{{ $id }}">{{ $label }}</label>

  @if (isset($helpText))<span id="{{ $id }}--help" class="nsw-form-helper">{{ $helpText }}</span>@endif

  <select {{ $attributes }} class="nsw-form__select" id="form-select-2" name="{{ $name }}" aria-describedby="{{ $id }}--help" @error($name) aria-invalid="true" @enderror>
    @if($nullOption)
      <option value="">{{ $nullOption }}</option>
    @endif
    @foreach ($options as $value => $text)
      <option value="{{ $value }}"{{ (old($name, $default) == $value) ? ' selected' : '' }}>{{ $text }}</option>
     @endforeach
  </select>

  @error($name)
      <span id="{{ $id }}-error-text" class="nsw-form__helper nsw-form__helper--error"><i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">cancel</i>{{ $message }}</span>
  @enderror
</div>
