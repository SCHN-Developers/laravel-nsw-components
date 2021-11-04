@props(['expandToggle' => false])
<div class="nsw-accordion js-accordion">
    @if($expandToggle == true)
        <div class="nsw-accordion__toggle">
            <button type="button">Expand all</button>
            <button type="button">Collapse all</button>
        </div>
    @endif
    {{ $slot }}
</div>
