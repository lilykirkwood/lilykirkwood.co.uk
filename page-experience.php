<?php
/*
 * Template Name: WP Portfolio Gallery
*/

get_header();
?>
<h1 class="page-title"><?php the_title(); ?></h1>
<div class="mw-container">



  <section class="fw">
    <?php
    function new_excerpt_more( $more ) {
    return ' . . .';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    $recentposts = get_posts('numberposts=12&category=14');
    foreach ($recentposts as $post) :
       setup_postdata($post); ?>
       <div class="experience-item">
         <h3 class="tw"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
         <div class="tw"><?php the_excerpt(); ?></div>
         <div class="view-all tw">
           <a href="<?php the_permalink() ?>">Read More</a>
         </div>
       </div>
    <?php endforeach; ?>
  </section>



  <!-- CONTACT FORM -->
  <section class="contact margin-t">
    <div class="tw">
      <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
    </div>
  </section>

  </div> <!-- mw-container -->

  <script>

  function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

  </script>

<?php
get_footer();
