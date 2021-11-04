<?php
    $tabs = [];
    $html = preg_split('~<__title__>(.+)</__title__>~', $slot->toHTML(), -1, PREG_SPLIT_DELIM_CAPTURE);
    for ($i=1; $i<count($html); $i+=2) {
        $tabs[] = [
            'id' => Str::random(12),
            'slug' => Str::slug($html[$i]),
            'title' => $html[$i],
            'body' => trim($html[$i+1])
        ];
    }
?>

<div class="nsw-tabs js-tabs is-ready">
    <ul class="nsw-tabs__list" role="tablist">
        @foreach ($tabs as $i => $tab)
            <li>
                <a href="#{{ $tab['slug'] }}">{{ $tab['title'] }}</a>
            </li>
        @endforeach
    </ul>
    @foreach ($tabs as $tab)
        <section id="{{ $tab['slug'] }}" class="nsw-tabs__content">
                {!! $tab['body'] !!}
        </section>
    @endforeach
</div>
