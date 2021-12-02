  @props(['sidebar' => null ])
  <div {{ $attributes->merge(['class' => 'nsw-container']) }}>
    <div class="nsw-layout">
        @if($sidebar == 'left')
            <div class="nsw-layout__sidebar nsw-layout__sidebar--deskto">
                {{ $sidebar_content }}
            </div>
        @endif
        <main class="nsw-layout__main">
            {{ $slot }}
        </main>
        @if($sidebar == 'right')
            <div class="nsw-layout__sidebar">
                {{ $sidebar_content }}
            </div>
        @endif
    </div>
  </div>
