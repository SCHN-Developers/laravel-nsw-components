@props([
  'name',
  'id' => $name . '-' . Str::random(12),
  'label',
  'required' => false,
  'helpText' => null,
  'options' => [],
  'default' => null,
  'model' => null,
])
@php($default = $default ?? getModelAttribute($model, $name))
<div class="nsw-form__group">
    <fieldset class="nsw-form__fieldset">
      <legend>
        <span class="nsw-form__legend nsw-form__required">{{ $label }}@if($required)<span class="sr-only"> (required)</span>@endif</span>
        @if($helpText) <span class="nsw-form__helper">{{ $helpText }}</span> @endif
        @error($name)<span class="nsw-form__helper nsw-form__helper--error"><i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">cancel</i>This field is required</span>@enderror
      </legend>
      @foreach($options as $value => $option)
        <input {{ $attributes }} class="nsw-form__radio-input" value="{{$value}}" type="radio" name="{{$name}}" id="{{$id.'-'.$value}}"{{ (old($name, $default) == $value) ? ' checked' : '' }}>
        <label class="nsw-form__radio-label" for="{{$id.'-'.$value}}">{{ $option }}</label>
      @endforeach
    </fieldset>
  </div>