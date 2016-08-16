<?php
get_header();
the_post();
?>
<div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
  <main class="mdl-layout__content">
    <div class="demo-back">
      <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
        <i class="material-icons" role="presentation">arrow_back</i>
      </a>
    </div>
    <div class="demo-blog__posts mdl-grid">

      <?php get_template_part( 'partials/content', 'single' ) ?>

      <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
        <a href="index.html" class="demo-nav__button">
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
            <i class="material-icons">arrow_back</i>
          </button>
          Newer
        </a>
        <div class="section-spacer"></div>
        <a href="index.html" class="demo-nav__button">
          Older
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
            <i class="material-icons">arrow_forward</i>
          </button>
        </a>
      </nav>
    </div>
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer--left-section">
        <?php get_template_part( 'partials/social-buttons' ) ?>
      </div>
      <div class="mdl-mini-footer--right-section">
        <button class="mdl-mini-footer--social-btn social-btn__share">
          <i class="material-icons" role="presentation">share</i>
          <span class="visuallyhidden">share</span>
        </button>
      </div>
    </footer>
  </main>
  <div class="mdl-layout__obfuscator"></div>
</div>
<?php
get_footer();
