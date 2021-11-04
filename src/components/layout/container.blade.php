  <div {{ $attributes->merge(['class' => 'nsw-container']) }}>
    <div class="nsw-layout">
      <main class="nsw-layout__main">
        {{ $slot }}
      </main>
    </div>
  </div>
