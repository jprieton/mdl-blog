<div class="minilogo"></div>
<div>
  <strong><?php the_author() ?></strong>
  <span><?php printf( __( '%s ago', 'mdl' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ) ?></span>
</div>