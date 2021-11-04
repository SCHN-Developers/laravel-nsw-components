@props(['padding' => null, 'style' => null, 'color' => null, 'image' => null])

<section class="nsw-section
                    {{ $style == 'box' ? 'nsw-section--box': ''}}
                    {{ $style == 'color' ? 'nsw-section--'.$color : '' }}
                    {{ $style == 'image' ? 'nsw-section--image' : ''}}
                    {{ $padding ? "nsw-section--$padding-padding": ''}} "
                    {{ $style == 'image' ? 'style=background-image:url('.$image.')' : ''}}
                >
    <div class="nsw-container ">
        {{ $slot }}
    </div>
</section>
