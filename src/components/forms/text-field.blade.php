@props([
    'name',
    'label',
    'helpText',
    'id' => $name . '-' . Str::random(12),
    'required' => false
])
<div class="nsw-form__group">
  <label for="{{ $id }}" class="nsw-form__label @if($required) nsw-form__required @endif">{{ $label }}</label>
  @if (isset($helpText))
    <span class="nsw-form__helper" id="{{ $id }}-helper-text">{{ $helpText }}</span>
  @endif

  <input {{ $attributes->merge(['class' => 'nsw-form__input' ]) }} type="text" id="{{ $id }}" name="{{ $name }}" value="{{ old($name) }}" @error($name) aria-invalid="true" @enderror />

  @error ($name)
      <span class="nsw-form__helper nsw-form__helper--error" id="{{ $id }}--error-text"><i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">cancel</i>{{ $message }}</span>
  @enderror
</div>
