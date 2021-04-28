@props([
    'tag' => 'button',
    'type' => 'button',
    'text',
    'style' => 'primary', // primary, outline, highlight, white
])

<{{ $tag }} {{ $attributes->merge(['class' => "nsw-button nsw-button--{$style}"]) }}{!!
    ($tag === 'input') ? " value=\"{$text}\"" : '' !!}{!!
    ($tag !== 'a') ? " type=\"{$type}\"" : ''!!}>@if ($tag !== 'input'){{ $text }}</{{ $tag }}>@endif
