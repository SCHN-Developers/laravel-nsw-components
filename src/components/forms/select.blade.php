@props([
    'name',
    'label',
    'helpText',
    'options',
    'id' => $name . '-' . Str::random(12)
])

<label for="{{ $id }}" class="nsw-form-label">{{ $label }}</label>
@if (isset($helpText))<span id="{{ $id }}--help" class="nsw-form-helper">{{ $helpText }}</span>@endif

<select name="{{ $name }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'nsw-form-select']) }}
    aria-describedby="{{ isset($helpText) ? "{$id}--help" : '' }}{{ $errors->first($name, " {$id}--error") }}"
    @error($name)aria-invalid="true"@enderror>
    <option value="">- Select -</option>
    @foreach ($options as $value => $text)
        <option value="{{ $value }}">{{ $text }}</option>
    @endforeach

</select>
@error($name)
    <span id="{{ $id }}--error" class="nsw-form-helper nsw-form-helper--error">{{ $message }}</span>
@enderror
