@props([
    'tag' => 'button',
    'type' => 'button',
    'text',
    'style' => 'primary', // primary, outline, highlight, white,
    'icon' => null,
])

<{{ $tag }} {{ $attributes->merge(['class' => "nsw-button nsw-button--{$style}"]) }}{!!
    ($tag === 'input') ? " value=\"{$text}\"" : '' !!}{!!
    ($tag !== 'a') ? " type=\"{$type}\"" : ''!!}>
        @if ($tag !== 'input')
            @if($icon)
                <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">{{$icon}}</span>
            @endif
            <span>
                {{ $text }}
            </span>
            </{{ $tag }}>
        @endif
