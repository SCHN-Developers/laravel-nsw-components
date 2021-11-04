@props([
  'label',
  'name',
  'helpText' => null,
  'required' => false
])
<div class="nsw-form__group">
  <fieldset class="nsw-form__fieldset">
        <legend>
          <span class="nsw-form__legend nsw-form__required">{{ $label }}</span>
          @if($helpText)
            <span class="nsw-form__helper">{{ $helpText }}</span>
          @endif
          @error($name)
            <span class="nsw-form__helper nsw-form__helper--error"><i class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">cancel</i> {{ $message }}</span>
          @enderror
        </legend>
        {{ $slot }}
  </fieldset>
</div>