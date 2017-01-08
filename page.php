<?php

get_header();

  ?>
  <div class="mw-container">
  <?php
  if (have_posts()):
    while (have_posts()): the_post();?>

    <article class="post page">
      <h4 class="tw"><?php the_title(); ?></h4>
      <p class="tw"><?php the_content(); ?></p>
    </article>

    <?php endwhile;
  else:
    echo '<p>No content found</p>';
  endif;
  ?>
  </div> <!--mw-container-->

  <?php

get_footer();

?>
