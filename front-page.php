<?php
/*
 * Template Name: WP Portfolio Gallery
*/

get_header();

?>

  <div class="mw-container">

    <!-- HOME ABOUT -->
    <section class="home-about">
      <h3 class="tw">About</h3>
      <div class="tw">
        <img src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/me50s3.png">
        <p>Hi, I'm Lily, and I'm a web developer.</p>
        <p class="margin-t">Since April 2016, I have been learning skills related to front-end web development and WordPress development.</p>
        <p class="margin-t">Currently, I am strengthening my skills by coding with non-profits through Free Code Camp. I am also continuing to immerse myself in new information as I take courses on Udemy.</p>
        <p class="text margin-tb">I am searching for a Junior Web Developer position in south-east England/London. Please <a href="http://lilykirkwood.co.uk/contact">get in touch</a> if you have an opportunity for me.</p>
        <div class="view-all margin-t fw"><a href="http://www.lilykirkwood.co.uk/about">Read More</a></div>
      </div>
    </section>

    <!-- LATEST PROJECTS -->
    <section class="latest-projects-wrap margin-t">
      <h3 class="tw">Latest Projects</h3>
      <?php
      $queryObject = new WP_Query( 'post_type=portfolio_items&posts_per_page=3' );
      // The Loop!
      if ($queryObject->have_posts()) {
        ?>
          <div class="latest-projects tw">
            <?php
            while ($queryObject->have_posts()) {
              $queryObject->the_post();

              // variables
              $imgMain = get_field('image_main');
            ?>

            <div class="latest-projects-1-wrap">
              <a class="div-link" href="<?php the_permalink(); ?>"></a>
              <div class="latest-projects-1">
                <div class="lp-h4">
                  <h4 class="fw"><?php the_title(); ?></h4>
                </div>
                <img src="<?php echo $imgMain; ?>">
              </div>
            </div>
            <?php
            }
            ?>
          </div>
          <div class="view-all margin-t tw"><a href="http://www.lilykirkwood.co.uk/portfolio">View All</a></div>
      <?php
      }
      ?>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact margin-t">
      <div class="tw">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      </div>
    </section>

  </div> <!-- mw-container -->






    <script type="text/javascript">
        jQuery(function($){

        $("a[rel^='prettyPhoto']").prettyPhoto();

        $('#Container').mixItUp();

        });
    </script>
<?php
get_footer();
