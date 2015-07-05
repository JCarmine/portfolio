<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <meta name="description" content="Hello, I'm Jesse Carmine and welcome to my portfolio, I’m a Web Developer from Portland, OR U.S.A. I create unique and elegant responsive web designs that look great and work perfectly, on any device." />
    <meta name="author" content="Jesse Carmine">
    <title>Jesse Carmine - Web Developer</title>
    <script>document.documentElement.className = "";</script>
    <link rel="icon" href="images/favicon.ico?v=2">
    <link rel="stylesheet" href="css/main.css"> 
</head>

<body>

    <div id="contentSlide">
        <!--Nav-->
        <div id="top">
            <div id="logo">
                <a class="revolver" href="#" data-nav="homepage" title="home">
                    <img src="images/logo.png" alt="Jesse Carmine" title="Sliding Web Site" />
                </a>
            </div>
            <nav id="menu">
                <ul>
                    <li class="startPage">
                        <a href="#" data-nav="homepage" title="" class="current">Home</a>
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
        </div>
        <div class="shadow"></div>
        <!-- Home Page -->
        <div id="homepage">
            <div class="wrap">
                <div class="whiteBox background">
                    <h3>
                        Welcome
                    </h3>
                    <h1 class="mobile center">
		              	I create unique and elegant websites that both look great and work perfectly, on any device.
          			</h1>
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
                                <img src="images/slider_1.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="images/slider_2.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="images/slider_3.jpg" alt="...">
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
                <div class="footerBox">
                    <div class="copywrite center"></div>
                </div>
            </div>
        </div>
        <!-- About Page -->
        <div id="about">
            <div class="wrap">
                <div class="whiteBox">
                    <h3>
	                   About
	                </h3>
                    <div class="section group">
                        <div class="col span_2_of_3">
                            <h2 class="center" style="line-height: 1.1em">
    		                   Hello, I'm Jesse Carmine and welcome to&nbsp;my&nbsp;portfolio,<br class="desktop"> I’m a Web Developer from Boston, MA U.S.A.
    		                </h2>
                            <br />
                            <p class="center">Graphic design and creating innovative web experiences have always been passions of mine. With two years of professional web development experience, I have completed projects for clients across the United States. This experience has established my fluency in the most popular development languages, perfected my project management skills, and honed the attention to detail that is required to create stunning and pixel-perfect websites - websites that will not only impress your visitors, but also entice them to engage with your cause or organization. Whether you desire a WordPress site or a completely custom, responsive, interactive experience driven by JavaScript, I can make it&nbsp;happen.</p>
                            <br>
                            <p class="center">Need more detail? Click below to download my resume.</p>
                            <br>
                            <br>
                            <div class="center">
                                <a href="resources/resume_for_jesse_carmine.pdf?ver=1.4" target="_blank">
                                    <button type="button" class="btn btn-primary">Download Resume</button>
                                </a>
                            </div>
                        </div>
                        <div class="col span_1_of_3">
                            <div class="mobile">
                                <br />
                                <br />
                                <hr />
                                <br />
                                <br />
                            </div>
                            HTML5/CSS3
                            <div class="progress">
                                <div class="bar" style="width: 100%;"></div>
                            </div>
                            JavaScript/jQuery
                            <div class="progress">
                                <div class="bar" style="width: 90%;"></div>
                            </div>
                            PHP
                            <div class="progress">
                                <div class="bar" style="width: 30%;"></div>
                            </div>
                            WordPress
                            <div class="progress">
                                <div class="bar" style="width: 80%;"></div>
                            </div>
                            Freehand
                            <div class="progress">
                                <div class="bar" style="width: 100%;"></div>
                            </div>
                            Photoshop
                            <div class="progress">
                                <div class="bar" style="width: 97%;"></div>
                            </div>
                            Illustrator
                            <div class="progress">
                                <div class="bar" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerBox">
                    <div class="copywrite center"></div>
                </div>
            </div>
        </div>
        <!-- Portfolio Page -->
        <div id="portfolio">
            <div class="wrap">
                <div class="whiteBox">
                    <h3>
    	                Portfolio
    	            </h3>
                    <div class="desktop">
                        <div class="section group">
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-1" href="images/stride_rite_large_image.jpg">
                                        <img class="portfolioImage" src="images/stride_rite_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-1" class="hidden">
                                        <a href='http://www.striderite.com/en/rosiepope/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Visit Site</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-2" href="images/academic_large_image.jpg">
                                        <img class="portfolioImage" src="images/academic_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-2" class="hidden">
                                        <a href='demos/academic/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Visit Site</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-3" href="images/dolomites_large_image.jpg">
                                        <img class="portfolioImage" src="images/dolomites_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-3" class="hidden">
                                        <a href='demos/dolomites/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Visit Site</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section group">
                             <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-4" href="images/harmony_large_image.jpg">
                                        <img class="portfolioImage" src="images/harmony_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-4" class="hidden">
                                        <a href='demos/harmony/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Visit Site</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-5" href="images/large_image.jpg">
                                        <img class="portfolioImage" src="images/sc_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-5" class="hidden">
                                        <a href='http://southcentral.epscor.alaska.edu/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Visit Site</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-6" href="images/program35_large_image.jpg">
                                        <img class="portfolioImage" src="images/program35_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-6" class="hidden">
                                        <a href='demos/program35/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Visit Site</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section group">
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a class="fancybox" data-title-id="title-7" href="images/email_large_image.jpg">
                                        <img class="portfolioImage" src="images/email_small_image.jpg" alt="">
                                    </a>
                                    <div id="title-7" class="hidden">
                                        <a href='demos/email/' target='_blank'>
                                            <button type="button" class="btn btn-primary">Take the Tour</button>
                                        </a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <!--/.desktop-->
                    <div class="mobile">
                        <div class="section group">
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='http://www.striderite.com/en/rosiepope/' target='_blank'>
                                        <img src="images/stride_rite_small_image.jpg" width="280" height="187">
                                    </a>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='demos/academic/' target='_blank'>
                                        <img src="images/academic_small_image.jpg" width="280" height="187">
                                    </a>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='demos/dolomites/' target='_blank'>
                                        <img src="images/dolomites_small_image.jpg" width="280" height="187">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="section group">
                        	<!--
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='http://southcentral.epscor.alaska.edu/' target='_blank'>
                                        <img src="images/sc_small_image.jpg">
                                    </a>
                                </div>
                            </div>
                            -->
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='demos/harmony/' target='_blank'>
                                        <img src="images/harmony_small_image.jpg" width="280" height="187">
                                    </a>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='demos/program35/' target='_blank'>
                                        <img src="images/program35_small_image.jpg" width="280" height="187">
                                    </a>
                                </div>
                            </div>
                            <div class="col span_1_of_3">
                                <div class="center">
                                    <a href='demos/email/' target='_blank'>
                                        <img src="images/email_small_image.jpg" width="280" height="187">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.mobile-->
                </div>
                <!--/.whiteBox-->
                <div class="footerBox">
                    <div class="copywrite center"></div>
                </div>
                <!--/.footerBox-->
            </div>
            <!--/.wrap-->
        </div>
        <!-- Contact Page -->
        <div id="contact">
            <div class="wrap">
                <div class="whiteBox">
                    <h3>
			            Contact
                    </h3>
                    <div class="section group">
                        <div class="col span_1_of_2">
                            <p class="desktop contactPara">
                                Interested in working together? Fill out the form with some info about your project and I will be in touch with you shortly.
                            </p>
                            <p class="mobile center">
                                Interested in working together? Send me a message with some info about your project and I will be in touch with you shortly.
                            </p>
                            <div class="center">
                                <div class="contactItem">
                                    <i class="icon-map-marker icon-2x"></i>&nbsp;&nbsp;Boston, MA, U.S.A.
                                </div>
                                <div class="contactItem">
                                    <i class="icon-phone icon-2x"></i>&nbsp;&nbsp;+1 (971) 241-9112
                                </div>
                                <div class="contactItem">
                                    <i class="icon-envelope icon-2x"></i>&nbsp;&nbsp;<a href="mailto:carminej@gmail.com" target="_blank">carminej@gmail.com</a>
                                </div>
                            </div>    
                        </div>
                        <div class="col span_1_of_2">
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
                                                    <label class="screen-reader-text"><h4>NAME:</h4></label>
                                                    <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="" /><br>
                                                    <?php if($nameError != '') { ?>
                                                        <br /><span class="error"><?php echo $nameError;?></span> 
                                                    <?php } ?>
                                                </div>
                                                    
                                                <div class="formblock">
                                                    <label class="screen-reader-text"><h4>EMAIL:</h4></label>
                                                    <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="" /><br>
                                                    <?php if($emailError != '') { ?>
                                                        <br /><span class="error"><?php echo $emailError;?></span>
                                                    <?php } ?>
                                                </div>
                                                    
                                                <div class="formblock">
                                                    <label class="screen-reader-text"><h4>MESSAGE:</h4></label>
                                                     <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder=""><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea><br>
                                                    <?php if($commentError != '') { ?>
                                                        <br /><span class="error"><?php echo $commentError;?></span> 
                                                    <?php } ?>
                                                </div>
                                                    
                                                <button name="submit" type="submit" class="subbutton btn btn-primary" style="margin-right: -12px;">
                                                    Submit
                                                </button>
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                            </form> 
                                                    
                                        </div>
                                        
                                    <?php } ?>
                                </div>
                            </div><!-- End #contact -->
                        </div>
                    </div>
                </div>
                <div class="footerBox">
                    <div class="copywrite center"></div>
                </div>
            </div>
        </div>
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
            $('.fancybox').fancybox();
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
                    if($.trim($(this).val()) == '') {
                        var labelText = $(this).prev('label').text();
                        $(this).parent().append('<span class="error">Please enter your '+labelText+'.</span>');
                        $(this).addClass('inputError');
                        hasError = true;
                    } else if($(this).hasClass('email')) {
                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        if(!emailReg.test($.trim($(this).val()))) {
                            var labelText = $(this).prev('label').text();
                            $(this).parent().append('<span class="error">Please enter a valid '+labelText+'.</span>');
                            $(this).addClass('inputError');
                            hasError = true;
                        }
                    }
                });
                if(!hasError) {
                    var formInput = $(this).serialize();
                    $.post($(this).attr('action'),formInput, function(data){
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