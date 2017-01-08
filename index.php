<?php

get_header();

  ?>
  <div class="mw-container">
  <?php
  if (have_posts()):
    while (have_posts()): the_post();?>

    <article class="post">
      <div class="fw flex-col heading-banner">
        <h2 class="post tw"><?php the_title(); ?></h2>
      </div>
      <div class="tw margin-tb"><?php the_content(); ?></div>
    </article?>

    <?php endwhile;
  else:
    echo '<p>No content found</p>';
  endif;
  ?>
  </div> <!--mw-container-->

  <?php

get_footer();

?>
