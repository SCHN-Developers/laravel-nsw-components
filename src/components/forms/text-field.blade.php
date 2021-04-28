@props([
    'name',
    'label',
    'helpText',
    'id' => $name . '-' . Str::random(12)
])

<label for="{{ $id }}" class="nsw-form-label">{{ $label }}</label>
@if (isset($helpText))<span id="{{ $id }}--help" class="nsw-form-helper">{{ $helpText }}</span>@endif

<input name="{{ $name }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'nsw-form-input']) }}
    aria-describedby="{{ isset($helpText) ? "{$id}--help" : '' }}{{ $errors->first($name, " {$id}--error") }}"
    @error($name)aria-invalid="true"@enderror>
@error ($name)
    <span id="{{ $id }}--error" class="nsw-form-helper nsw-form-helper--error">{{ $message }}</span>
@enderror
