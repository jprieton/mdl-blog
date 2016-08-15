<div <?php post_class( 'mdl-card mdl-cell mdl-cell--12-col' ) ?>>
  <div class="mdl-card__media mdl-color-text--grey-50">
    <h3 class="quote"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
  </div>
  <div class="mdl-card__supporting-text mdl-color-text--grey-600">
    <?php the_excerpt() ?>
  </div>
  <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
    <?php get_template_part( 'partials/author' ) ?>
  </div>
</div>