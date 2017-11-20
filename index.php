<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Hello, I'm Jesse Carmine and welcome to my portfolio, I’m a Web Developer from Portland, OR U.S.A. I create unique and elegant responsive web designs that look great and work perfectly, on any device." />
  <meta name="author" content="Jesse Carmine">
  <title>Jesse Carmine - Web Developer</title>
  <link rel="icon" href="images/favicon.ico?v=1">
  <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.9/release/featherlight.min.css" type="text/css" rel="stylesheet" />
  <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.9/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="styles/main.css">
</head>

<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <h1 class="visuallyhidden">I create unique and elegant websites that both look great and work perfectly, on any device.</h1>
  <div id="contentSlide">
    <!--Nav-->
    <header>
      <div id="logo">
        <img src="images/logo.png" alt="Logo: Jesse Carmine - Web Developer" />
      </div>
      <nav id="menu">
        <ul>
          <li class="startPage">
            <a href="#" data-nav="homepage" title="" class="current">
              <span class="menu-label">Home</span>
            </a>
          </li>
          <li>
            <a href="#" data-nav="about" title="" class="">
              <span class="menu-label">About</span>
            </a>
          </li>
          <li>
            <a href="#" data-nav="portfolio" title="" class="">
              <span class="menu-label">Portfolio</span>
            </a>
          </li>
          <li>
            <a href="#" data-nav="contact" title="" class="">
              <span class="menu-label">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="shadow"></div>
    <!-- Home Page -->
    <div id="homepage" style="display: none;">
      <div class="wrap">
        <div class="whiteBox background">
          <h1>
              Welcome
          </h1>
          <p class="mobile center">
            I create unique and elegant websites that both look great and work perfectly, on any device.
          </p>
          <!-- Load carousel on Home Page. -->
          <div id="carousel-example-generic" class="carousel slide desktop">
            <!-- Indicators for carousel -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Carousel slides. -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/slider_1.jpg" alt="I create unique and elegant websites that both look great and work perfectly, on any device.">
              </div>
              <div class="item">
                <img src="images/slider_2.jpg" alt="Inspire your visitors to imagine the possibilities, with stunning imagery.">
              </div>
              <div class="item">
                <img src="images/slider_3.jpg" alt="Define your image with custom graphics and logos.">
              </div>
            </div>
            <!-- Carousel controls. -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
        </div>
        <div class="footerBox center">
          <span>&#169; Jesse Carmine 2017</span>
        </div>
      </div>
    </div>
    <!-- About Page -->
    <section id="about" style="display: none;">
      <div class="wrap">
        <div class="whiteBox">
          <h1>About</h1>
          <div class="section group">
            <div class="col span_2_of_3 center">
              <h2>
                 Hello, I'm Jesse Carmine and welcome to&nbsp;my&nbsp;portfolio,<br class="desktop"> I’m a Web Developer from Portland, OR U.S.A.
              </h2>
              <p>Graphic design and creating innovative web experiences have always been passions of mine. With over 4 years of professional web development experience, I have completed projects for clients across the United States. This experience has established my fluency in the most popular development languages, perfected my project management skills, and honed the attention to detail that is required to create stunning and pixel-perfect websites - websites that will not only impress your visitors, but also entice them to engage with your cause or organization. Whether you desire a WordPress site or a completely custom, responsive, interactive experience driven by JavaScript, I can make it&nbsp;happen.</p>
              <p>Need more detail? Click below to download my resume.</p>
              <div>
                <a href="resources/resume_for_jesse_carmine.pdf?ver=1.5" target="_blank">
                  <button type="button" class="btn btn-primary">Download Resume</button>
                </a>
              </div>
            </div>
            <div class="col span_1_of_3 lastColumn">
              <span>HTML5/CSS3</span>
              <div class="progress">
                <div class="bar" style="width: 100%;"></div>
              </div>
              <span>JavaScript/jQuery</span>
              <div class="progress">
                <div class="bar" style="width: 90%;"></div>
              </div>
              <span>PHP</span>
              <div class="progress">
                <div class="bar" style="width: 30%;"></div>
              </div>
              <span>WordPress</span>
              <div class="progress">
                <div class="bar" style="width: 80%;"></div>
              </div>
              <span>Hand Coding</span>
              <div class="progress">
                <div class="bar" style="width: 100%;"></div>
              </div>
              <span>Photoshop</span>
              <div class="progress">
                <div class="bar" style="width: 97%;"></div>
              </div>
              <span>Illustrator</span>
              <div class="progress">
                <div class="bar" style="width: 90%;"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="footerBox center">
          <span>&#169; Jesse Carmine 2017</span>
        </div>
      </div>
    </section>
    <!-- Portfolio Page -->
    <section id="portfolio" style="display: none;">
      <div class="wrap">
        <div class="whiteBox">
          <h1>Portfolio</h1>
          <section data-featherlight-gallery data-featherlight-filter="a">
            <div class="section group">
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#zambezi">
                    <img src="images/gazelle_small_image.jpg" alt="Portfolio example - Gazelle">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="zambezi">
                      <div class="contentLeft">
                        <img src="images/gazelle_large_image.png" alt="Portfolio example - Gazelle">
                        <a href='http://buy.gazelle.com/gazelle-certified-electronics' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                        <h2>Gazelle</h2>
                        <p>As a Software Engineer for Gazelle, I am currently responsible for improving the user experience through site-speed optimization and re-developing the mobile experience.</p>
                        <h3>Specific responsibilities include:</h3>
                        <ul>
                          <li>Developing the front-end for a reCommerce platform built on Bigcommerce.</li>
                          <li>Increasing engagement and conversion rate through A/B testing, utilizing Optimizely.</li>
                          <li>Improving site performance to enhance the UX, especially for mobile users.</li>
                          <li>Integrating Gulp.js into the workflow to improve code quality and speed up the development process.</li>
                          <li>Updating build system to enable the use of ES6 and SASS.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#strideRite">
                    <img src="images/stride_rite_small_image.jpg" alt="Portfolio example - Stride Rite Shoes">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="strideRite">
                      <div class="contentLeft">
                        <img src="images/stride_rite_large_image.png" alt="Portfolio example - Stride Rite Shoes">
                        <a href='http://www.striderite.com/en/home' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#academicPortfolio">
                    <img src="images/academic_small_image.jpg" alt="Portfolio example - Academic Portfolio">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="academicPortfolio">
                      <div class="contentLeft">
                        <img src="images/academic_large_image.png" alt="Portfolio example - Academic Portfolio">
                        <a href='http://www.sfu.ca/~leonid/' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="section group">
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#harmony">
                    <img src="images/harmony_small_image.jpg" alt="Portfolio example - Harmony Website for BBK Worldwide">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="harmony">
                      <div class="contentLeft">
                        <img src="images/harmony_large_image.png" alt="Portfolio example - Harmony Website for BBK Worldwide">
                        <a href='demos/harmony/' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#dolomites">
                    <img src="images/dolomites_small_image.jpg" alt="Portfolio example - Dolomites Website for BBK Worldwide">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="dolomites">
                      <div class="contentLeft">
                        <img src="images/dolomites_large_image.png" alt="Portfolio example - Dolomites Website for BBK Worldwide">
                        <a href='demos/dolomites/' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#sc">
                    <img src="images/sc_small_image.jpg" alt="Portfolio example - The Southcentral Alaska Science Catalog">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="sc">
                      <div class="contentLeft">
                        <img src="images/sc_large_image.png" alt="Portfolio example - The Southcentral Alaska Science Catalog">
                        <a href='http://southcentral.epscor.alaska.edu/' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section group">
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#program35">
                    <img src="images/program35_small_image.jpg" alt="Portfolio example - Program 35 Intern Sign-up Form for Hill Holliday">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="program35">
                      <div class="contentLeft">
                        <img src="images/program35_large_image.png" alt="Portfolio example - Program 35 Intern Sign-up Form for Hill Holliday">
                        <a href='demos/program35/' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col span_1_of_3">
                <div class="center">
                  <a class="gallery" href="#email">
                    <img src="images/email_small_image.jpg" alt="Portfolio example - Email coding example and tour">
                  </a>
                  <div style="display: none;">
                    <div class="lightboxContent" id="email">
                      <div class="contentLeft">
                        <img src="images/email_large_image.png" alt="Portfolio example - Email coding example and tour">
                        <a href='demos/email/' target='_blank'>
                          <button type="button" class="btn btn-primary">Visit Site</button>
                        </a>
                      </div>
                      <div class="contentRight">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!--/.whiteBox-->
        <div class="footerBox center">
          <span>&#169; Jesse Carmine 2017</span>
        </div>
        <!--/.footerBox-->
      </div>
      <!--/.wrap-->
    </section>
    <!-- Contact Page -->
    <section id="contact" style="display: none;">
      <div class="wrap">
        <div class="whiteBox">
          <h1>Contact</h1>
          <div class="section group">
            <div class="col span_1_of_2 center">
              <p>
                Interested in working together? Fill out the form with some info about your project and I will be in touch with you shortly.
              </p>
              <div>
                <div class="contactItem">
                  <i class="icon-map-marker icon-2x"></i>Portland, OR, U.S.A.
                </div>
                <div class="contactItem">
                  <i class="icon-phone icon-2x"></i>+1 (971) 241-9112
                </div>
                <div class="contactItem">
                  <i class="icon-envelope icon-2x"></i>
                  <a href="mailto:carminej@gmail.com" target="_self">carminej@gmail.com</a>
                </div>
              </div>
            </div>
            <div class="col span_1_of_2 lastColumn">
              <?php
                error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

                //If the form is submitted
                if(isset($_POST['submitted'])) {

                    // require a name from user
                    if(trim($_POST['contactName']) === '') {
                        $nameError =  'Please enter your name';
                        $hasError = true;
                    } else {
                        $name = trim($_POST['contactName']);
                    }

                    // need valid email
                    if(trim($_POST['email']) === '')  {
                        $emailError = 'Please enter in your e-mail address';
                        $hasError = true;
                    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
                        $emailError = 'Please enter a valid email address';
                        $hasError = true;
                    } else {
                        $email = trim($_POST['email']);
                    }

                    // we need at least some content
                    if(trim($_POST['comments']) === '') {
                        $commentError = 'Please enter a message';
                        $hasError = true;
                    } else {
                        if(function_exists('stripslashes')) {
                            $comments = stripslashes(trim($_POST['comments']));
                        } else {
                            $comments = trim($_POST['comments']);
                        }
                    }

                    // upon no failure errors let's email now!
                    if(!isset($hasError)) {

                        $emailTo = 'carminej@gmail.com';
                        $subject = 'Submitted message from '.$name;
                        $sendCopy = trim($_POST['sendCopy']);
                        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
                        $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

                        mail($emailTo, $subject, $body, $headers);

                        // set our boolean completion value to TRUE
                        $emailSent = true;
                    }
                }
              ?>
              <!-- @begin contact -->
              <div id="contactForm">
                <div class="container content">
                  <?php if(isset($emailSent) && $emailSent == true) { ?>
                  <p class="info">Thank you! I will get back to you shortly.</p>
                  <?php } else { ?>
                  <div id="contact-input">
                    <?php if(isset($hasError) || isset($captchaError) ) { ?>
                    <p class="alert">Sorry, there was an error submitting the form.</p>
                    <?php } ?>
                    <form id="contact-us" action="index.php" method="post">
                      <div class="formblock">
                        <label class="screen-reader-text" for="contactName">NAME:</label>
                        <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="" />
                        <br>
                        <?php if($nameError != '') { ?>
                        <br /><span class="error"><?php echo $nameError;?></span>
                        <?php } ?>
                      </div>
                      <div class="formblock">
                        <label class="screen-reader-text" for="email">EMAIL:</label>
                        <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="" />
                        <br>
                        <?php if($emailError != '') { ?>
                        <br /><span class="error"><?php echo $emailError;?></span>
                        <?php } ?>
                      </div>
                      <div class="formblock">
                        <label class="screen-reader-text" for="commentsText">MESSAGE:</label>
                        <textarea name="comments" id="commentsText" class="requiredField" placeholder=""><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                        <br>
                        <?php if($commentError != '') { ?>
                        <br /><span class="error"><?php echo $commentError;?></span>
                        <?php } ?>
                      </div>
                      <button name="submit" type="submit" class="subbutton btn btn-primary">
                        Submit
                      </button>
                      <input type="hidden" name="submitted" id="submitted" value="true" />
                    </form>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <!-- End #contact -->
            </div>
          </div>
        </div>
        <div class="footerBox center">
          <span>&#169; Jesse Carmine 2017</span>
        </div>
      </div>
    </section>
  </div>
  <!--/.contentSlide-->

  <!-- Load jQuery -->
  <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

  <!-- Load jQuery plugin to handle navigation. -->
  <script type="text/javascript" src="js/sliding_min.js"></script>

  <!-- Load bootstrap js to drive slider on home page. -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- Load fancybox.js to drive slider on Portfolio page. -->
  <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>

  <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.9/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.9/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
    $('a.gallery').featherlightGallery({
      previousIcon: '«',
      nextIcon: '»',
      galleryFadeIn: 300,

      openSpeed: 300
    });
  </script>

  <!-- Allows for site tracking with Google Analytics. -->
  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-45115716-2', 'jessecarmine.com');
  ga('send', 'pageview');
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
    /* Initialize the JS navigation */
    $("#menu ul li").slidingPage({
      easing: 'fade',
      speed: 700,
      slideScroll: 'vertical', // not enabled on fade effect
      top: 0, // it depends on menu height
      navigation: {
        show: true,
        nestedPagesFlows: true
      },
    });

    /* Initialize carousel on Home page. */
    $('.carousel').carousel({
      interval: 9000
    });

    /* Initialize lightbox feature on Portfolio page. */
    $(".fancybox")
      .attr('rel', 'gallery')
      .fancybox({
        beforeLoad: function() {
          var el, id = $(this.element).data('title-id');
          if (id) {
            el = $('#' + id);
            if (el.length) {
              this.title = el.html();
            }
          }
        }
      });

    /* Validation for form on Contact page. */
    $('form#contact-us').submit(function() {
      $('form#contact-us .error').remove();
      var hasError = false;
      $('.requiredField').each(function() {
        if ($.trim($(this).val()) == '') {
          var labelText = $(this).prev('label').text();
          $(this).parent().append('<span class="error">Please enter your ' + labelText + '.</span>');
          $(this).addClass('inputError');
          hasError = true;
        } else if ($(this).hasClass('email')) {
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if (!emailReg.test($.trim($(this).val()))) {
            var labelText = $(this).prev('label').text();
            $(this).parent().append('<span class="error">Please enter a valid ' + labelText + '.</span>');
            $(this).addClass('inputError');
            hasError = true;
          }
        }
      });
      if (!hasError) {
        var formInput = $(this).serialize();
        $.post($(this).attr('action'), formInput, function(data) {
          $('form#contact-us').slideUp("fast", function() {
            $(this).before('<p class="tick center">Thank you! I will get back to you shortly.</p>');
          });
        });
      }

      return false;
    });
  });
  </script>



</body>

</html>
