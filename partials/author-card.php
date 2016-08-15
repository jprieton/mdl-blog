<?php
global $authordata;
?>
<div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
  <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
    <i class="material-icons mdl-color-text--white" role="presentation">add</i>
    <span class="visuallyhidden">add</span>
  </button>
  <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
    <?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?>
    +1,337
  </div>
  <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
    <div>
      <strong><?php the_author() ?></strong>
    </div>
    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="menubtn">
      <li class="mdl-menu__item">About</li>
      <li class="mdl-menu__item">Message</li>
      <li class="mdl-menu__item">Favorite</li>
      <li class="mdl-menu__item">Search</li>
    </ul>
    <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
      <i class="material-icons" role="presentation">more_vert</i>
      <span class="visuallyhidden">show menu</span>
    </button>
  </div>
</div>

