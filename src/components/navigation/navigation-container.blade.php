    <nav class="nsw-main-nav js-mega-menu" id="main-nav" aria-label="Main menu">
      <div class="nsw-main-nav__header">
        <div class="nsw-main-nav__title">Menu</div>
        <button class="nsw-icon-button js-close-nav" type="button" aria-expanded="true">
          <span class="material-icons nsw-material-icons" focusable="false" aria-hidden="true">close</span>
          <span class="sr-only">Close Menu</span>
        </button>
      </div>
      <ul class="nsw-main-nav__list">
        {{ $slot }}
      </ul>
    </nav>