<?php
/*
 * Template Name: WP Portfolio Gallery
*/

get_header();
query_posts(array('post_type' => 'portfolio', 'posts_per_page' => -1));
?>
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="mw-container">


    <!-- CONTACT FORM -->
    <section class="contact margin-t">
      <div class="tw">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      </div>
      <div class="tw"><p><i class="fa fa-envelope" aria-hidden="true"></i>Or, if you hate contact forms, email me at: <a href="mailto:lily@lilykirkwood.co.uk" target="_top">lily@lilykirkwood.co.uk</a></p></div>
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
