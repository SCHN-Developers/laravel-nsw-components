  @props(['sidebar' => null ])
  <div {{ $attributes->merge(['class' => 'nsw-container']) }}>
    <div class="nsw-page-layout">
        @if($sidebar == 'left')
            <div class="nsw-page-layout__sidebar nsw-page-layout__sidebar--desktop">
                {{ $sidebar_content }}
            </div>
        @endif
        <main class="nsw-page-layout__main">
            {{ $slot }}
        </main>
        @if($sidebar == 'right')
            <div class="nsw-page-layout__sidebar">
                {{ $sidebar_content }}
            </div>
        @endif
    </div>
  </div>
