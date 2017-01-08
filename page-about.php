<?php
/*
 * Template Name: WP Portfolio Gallery
*/

get_header();
query_posts(array('post_type' => 'portfolio', 'posts_per_page' => -1));
?>
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="mw-container">

  <div class="nav-within">
    <ul class="tab">
      <li><a href="javascript:void(0)" class="tablinks" id="defaultOpen" onclick="openTab(event, 'web-dev')">Web Development</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'uni')">University</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'home')">Home</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'hockey')">Hockey</a></li>
    </ul>
  </div>

<article>
    <div id="web-dev" class="tabcontent">
      <h4 class="twp">Web Development</h4>
      <div class="tw margin-t">
        <img class="left" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/me50s3.png">
        <p><span class="q">Hi, I'm Lily, and I'm a web developer.</span></p>
        <p class="margin-t"><span>When and why did you learn to code?</span><br>I started learning to code in April 2016. I was nearing the end of my three years at university studying Zoology, and I knew I did not want to continue with Biology and formal education. I came across Skillcrush, an online learning community for women looking to transform their careers with tech skills, and realised that a career in tech would fulfill my desire to be constantly learning, whilst also enabling me to be creative.</p>
        <p class="margin-t"><span>What kind of job are you looking for?</span><br>I am currently looking for a Junior Web Developer position in south-east England/London. I am most confident working with WordPress but I'm a fast learner and would not turn down the challenge of learning a new language. Ideally, I would like to join a team of developers in order to learn from them and be able to discuss issues.</p>
        <p class="margin-t"><span>Which languages did you learn and why?</span><br>Coming into the world of coding, I had no idea what to learn. The great thing about Skillcrush is that you pick a job-title, and they teach you all the basics you need to know for that job. For example, I took their Front-End Developer course and I learnt HTML, CSS, JavaScript, jQuery, responsive web development, how to QA and deploy a site, and how to use Git and GitHub (to name but few). I also took their WordPress Developer course, where I learnt some PHP, how to install/use WordPress, host a dev site locally, make custom themes and child themes, and multiple other bits and bobs to do with WordPress.</p>
        <p class="margin-t"><span>What are you learning now/planning to learn in the future?</span><br>My curriculum is based on my interests. I am currently learning more about JavaScript, as I felt my knowledge was lacking in that field, and I am curious to learn more about its potential uses. In the future, I plan to learn a CSS framework such as Bootstrap. I wish to learn more PHP and gain a better understanding of MySQL in order to improve my WordPress work. My plans are likely to change with my career as I am required to fit my skills around a job - and that's fine by me!</p>
        <p class="margin-tb"><span>What do you like about coding?</span><br>Having studied only science and maths for five years in college and university, I had spent a lot of time learning facts and how to analyse data, but I missed being creative. Coding brings together technical thinking and creativity, and to me there's something very satisfying about dreaming up a design, figuring out the code, and then seeing the finished product.</p>
      </div>
    </div>

    <div id="uni" class="tabcontent">
      <h4 class="twp">University</h4>
      <div class="tw margin-t">
        <img class="left" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/grad2.jpg">
        <p><span class="q">I graduated from University College London (UCL) in summer 2016, with a BSc (Hons) in Zoology.</span></p>
        <p class="margin-t"><span>What led you to study Zoology?</span><br>I studied Biology, Chemistry, Maths and Psychology at A-level with the intention of pursuing a career in psychiatry. However, when Biology turned out to be my favourite subject and Psychology my least, I decided to look down the path of Biology. I was accepted to study Biological Sciences at UCL, one of the world's leading universities for science, and the <a href="https://www.ucl.ac.uk/news/news-articles/1214/181214-ucl-results-ref" target="_blank">UK's top research university</a>. My first year was extremely broad, covering subjects such as cell and developmental biology, genetics, the origins of life on Earth and statistics. I became very interested in evolution, animal anatomy and how animals interact with their environment, so I specialised in Zoology.</p>
        <p class="margin-t"><span>What is Zoology? That's an unusual degree...</span><br>Zoology involves areas of biology such as evolutionary biology, palaeontology, ecology, animal behaviour, conservation and demography. All sciences require the use of statistics to identify significant results in research, and although animals are cuter than sub-atomic particles, they do not exclude Zoology from this rule.</p>
        <img class="right margin-t" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/pat.jpg">
        <p class="margin-t"><span>What was your favourite topic/assignment at university?</span><br>I developed an interest in skeletons, particularly the reasons for the evolution of certain skeletal features in different animal groups, which led me to write my dissertation on the evolution of the Testudine (turtle) skeleton.<br>My favourite assignment was an ecology project in which I chose an endangered species, <i>Ammodramus maritimus</i> (an American Seaside Sparrow), and mapped how its population distribution could change with future climate change models. This ties in with my strong opinion that climate change and loss of biodiversity are the most significant threats currently facing life on Earth, and all efforts should be towards cutting carbon emissions and harnessing renewable energy.</p>
        <p class="margin-t"><span>Were you a member of any clubs or societies?</span><br>Beside studying, the other major part of my university experience was as a member of the university hockey club. I played in the 3XI and captained the 4XI, as well as umpiring league matches. This was a big part of my time at university, not only because of all the fun I had, but also the commitment I made to being part of the club's committee and working alongside the other committee members to make sure that the members got the most out of being part of the club. My job mostly involved working alongside our coach at our weekly training sessions teaching skills to beginners and running drills, organising the team, and contacting other universities to arrange friendly matches.</p>
        <img class="left margin-t" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/3XI.jpg">
        <p class="margin-tb"><span>Now that you’re a web developer, do you regret studying Biology instead of something more relevant like Computer Science?</span><br>Although my degree is not directly related to my chosen career path, I picked up a lot of transferable skills at university, both through study and extracurricular activities. I don’t regret studying Biology, I think that I had to pursue my passion for biology to know that it wasn't what I wanted to do in the long-run, and it remains one of my personal interests. Looking back, I'd do a few things differently (such as join the hockey club in my first year instead of my second!), but I'd also do a lot of things the same. I had a great time at university and I think fondly of that period of my life. Maybe if I could go back in time and I knew that my future career wouldn’t be in Biology, I’d do something like CS.</p>
      </div>
    </div>

    <div id="home" class="tabcontent">
      <h4 class="twp">Home</h4>
      <div class="tw margin-t">
        <img class="left" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/us2.jpg">
        <p>I live in Hastings, on the south-east coast of England, with my boyfriend, Dave, and our cat, Beau. Hastings is a seaside town, most well known for the Battle of 1066 when King Harold was defeated by William the Conqueror and the Normans. Another fun fact is that it hosts Europe's biggest beach-based fishing fleet... try saying that one fast!</p>
        <p class="margin-t">I was born and grew up near Hastings, with my parents and older sister. Our childhood was a happy one. My sister and I enjoyed playing outside, making dens in the woods and throwing mud at each other. We also loved playing with toys in ways that hadn't been intended. Yes, Barbie was thrown out of the window whilst attached to handmade parachutes many a time - she loved it really and the parachutes did get better as time went on! We had five adorable guinea pigs and a family horse, Murphy.</p>
        <p class="margin-t">I moved to London when I was 18 to study Biological Sciences at University College London. During that time I lived in King's Cross, South Hampstead, and finally Camden. I liked the city, but home is home and I moved back to Hastings when I graduated to live with Dave.</p>
        <p class="margin-tb"></p>
      </div>
    </div>

    <div id="hockey" class="tabcontent">
      <h4 class="twp">Hockey</h4>
      <div class="tw margin-t">
        <img class="left" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/3XI.jpg">
        <p><span class="q">I currently play for South Saxons Ladies 2XI.</span></p>
        <p class="margin-t"><span>How long have you been playing hockey?</span><br>I’ve played hockey since I was around seven years old. As a child, hockey was one of my favourite sports. I played for my school team and local hockey club, South Saxons. After finishing primary school, it was eight years until I picked up a stick again when I joined the University College London Union Women's Hockey Club (UCLUWHC) in my second year at university.</p>
        <p class="margin-t"><span>How did you become a team captain at university?</span><br>By the end of my first year of hockey at uni, I knew I wanted to give back to the club and make it just as special for the future freshers. So, in my second (and final) year, I started giving back to the club by taking an England Hockey umpiring course. This enabled me to umpire league matches for the other women's teams, as well as the men's club. I also volunteered to help the club's committee with welcome events during the fresher's period. A fourth team was created in order to accommodate an unexpected increase in new members, and my enthusiasm was recognised as I was selected by the president of the club to join the committee as their captain.</p>
        <img class="right margin-t" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/4XI.jpg">
        <p class="margin-t"><span>Did you enjoy being a captain?</span><br>Being captain of the fourth team is amongst my greatest achievements at university, not only for the way it developed me as a person, but for how I was a big part of other peoples' university experience. There were many challenges throughout the year, but I can't express how much all the hard work was worth it when members of the fourth team said they had had a good year. Memories from my time in UCLUWHC are some of my most treasured, and I have made friendships I hope will be lifelong. I still go back every so often to umpire matches for the club, cheer them on and to go on the odd night out in London!</p>
        <img class="left margin-t" src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/saxons.jpg">
        <p class="margin-tb"><span>Now that you’ve graduated, do you still play hockey?</span><br>My graduation from UCL in summer 2016 marked the end of one hockey era and the beginning of a new one - in more ways than one. I re-joined South Saxons, the team I had played with when I was 11 years old, and since they had too many defenders I left my lifelong position in defence and moved to midfield. This led to me scoring a few goals - very exciting when you've always been hanging back, watching your team score! I am pleased to say that I have settled into the new club. It feels like home now and I love playing with my new team. I hope to begin umpiring for South Saxons and local schools soon, with plans to move up to the next umpiring rank by passing the level 1 assessment.</p>
      </div>
    </div>

  </article>

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
