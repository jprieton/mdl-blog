<div class="minilogo"><?php echo get_avatar( get_the_author_meta( 'ID' ), 44 ); ?></div>
<div>
  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><strong><?php the_author() ?></strong></a>
  <span><?php printf( __( '%s ago', 'mdl' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ) ?></span>
</div>