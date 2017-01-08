<?php

get_header();

  ?>
  <div class="mw-container">
  <?php
  if (have_posts()):
    while (have_posts()): the_post();

    // CUSTOM FIELDS VARIABLES
    $shortDesc = get_field('description_short');
    $longDesc = get_field('description_long');
    $imgMain = get_field('image_main');
    $slider = get_field('slider');
    $tags = get_field('tags');
    $github = get_field('github_link');
    $live = get_field('live_link');

    ?>


    <!-- PORTFOLIO ITEM ARTICLE -->
    <article class="page portfolio-item">
      <div class="fw flex-col heading-banner">
        <h2 class="tw"><?php the_title(); ?></h2>
        <div class="tw">
          <ul class="tags left">
            <?php echo $tags; ?>
          </ul>
          <div class="code-links right">
            <p class="git-link left"><a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></p>
            <?php if( $live ): ?>
	             <p class="live-link left"><a href="<?php echo $live; ?>" target="_blank">Live Site <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
             <?php endif; ?>
          </div>
        </div>
      </div>


      <img class="twp main-img margin-tb" src="<?php echo $imgMain; ?>">
      <h4 class="twp margin-t">Overview</h4>
      <p class="tw margin-tb"><?php echo $longDesc; ?></p>
      <h4 class="twp">Process</h4>
      <p class="process-expand tw"><i class="fa fa-search-plus" aria-hidden="true"></i>Click the images to expand and find out more</p>
      <div class="process margin-tb tw">
        <?php echo $slider; ?>
      </div>
      <?php the_content(); ?>
    </article>


    <!-- CONTACT FORM -->
    <section class="contact margin-t">
      <div class="tw">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      </div>
    </section>

    <?php endwhile;

  // NO CONTENT
  else:
    echo '<p>No content found</p>';
  endif;
  ?>
  </div> <!--mw-container-->


<?php get_footer(); ?>
