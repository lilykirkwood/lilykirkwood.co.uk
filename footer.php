</main>

<footer class="site-footer">
  <div class="mw-container">
    <div class="credit-wrap">
      <h6>Credit where credit's due:</h6>
      <div class="credit"><a href="http://fontawesome.io" target="_blank" title="Font-Awesome">Font Awesome</a> by Dave Gandy</div>
      <div class="credit">Icon made by <a href="http://www.freepik.com" target="_blank" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" target="_blank" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
      <div class="credit">Background made by <a href="https://dribbble.com/justinp" target="_blank" title="Justin">Justin</a> from <a href="https://dribbble.com/shots/1479745-50-Free-Tessellated-Designs" target="_blank" title="Dribble">Dribble</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </div>
    <div id="theme-by">
      <p>Custom theme by Lily Kirkwood. Powered by WordPress.</p>
    </div>
    <p><span>&copy; <?php bloginfo('name'); ?></span> <?php echo date('Y'); ?></p>
  </div> <!--mw-container-->
</footer>


<!-- import jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- write script to toggle class on scroll -->
<script>

// media query event handler
if (matchMedia) {
  var tablet = window.matchMedia("(min-width: 768px)");
  tablet.addListener(WidthChange);
  WidthChange(tablet);
}
if (matchMedia) {
  var desktop = window.matchMedia("(min-width: 940px)");
  desktop.addListener(WidthChange);
  WidthChange(desktop);
}

// media query change
function WidthChange(desktop, tablet) {
  if (desktop.matches) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 80){
            $('header').addClass("sticky");
        }
        else{
            $('header').removeClass("sticky");
        }
        if ($(this).scrollTop() > 120){
            $('header').addClass("hide");
        }
        else{
            $('header').removeClass("hide");
        }

    });

  }
  //else if (tablet.matches) {
    // window width is at least 768px
  //}

  //var headerHeight = $(".site-header").height();
  //if (headerHeight < 85){
  //  $('header').addClass("hide");
  //}
  //if (headerHeight > 140){
  //  $('header').removeClass("hide");
  //}

}






</script>

<?php wp_footer(); ?>
</body>
</html>
