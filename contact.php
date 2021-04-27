<!doctype html>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (empty($_POST['email'])) {
        $emailError = 'Email is empty';
    } else {
        $email = $_POST['email'];

        // validating the email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Invalid email';
        }
    }

    if (empty($_POST['message'])) {
        $messageError = 'Message is empty';
    } else {
        $message = $_POST['message'];
    }

    if (empty($_POST['name'])) {
        $messageError = 'Message is empty';
    } else {
        $name = $_POST['name'];
    }

    if (empty($emailError) && empty($messageError)) {
        $date = date('j, F Y h:i A');

        $emailBody = "
            <html>
            <head>
                <title>$email is contacting you</title>
            </head>
            <body style=\"background-color:#fafafa;\">
                <div style=\"padding:20px;\">
                    Date: <span style=\"color:#888\">$date</span>
                    <br>
                    Name: <div style=\"color:#888\">$name</div>
                    <br>
                    Email: <span style=\"color:#888\">$email</span>
                    <br>
                    Message: <div style=\"color:#888\">$message</div>
                </div>
            </body>
            </html>
        ";

        $headers =  'From: Contact Form <kellyteo11@gmail.com>' . "\r\n" .
                    "Reply-To: $email" . "\r\n" .
                    "MIME-Version: 1.0\r\n" . 
                    "Content-Type: text/html; charset=iso-8859-1\r\n";

        $to = 'kellyteo11@gmail.com';
        $subject = 'Contacting you';

        if (mail($to, $subject, $emailBody, $headers)) {
            $sent = true;   
        }
    }
}
?>

<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Treal Tech Sdn. Bhd.</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/TT.jpg">
        <link rel="apple-touch-icon" href="images/TT.jpg">
        <link rel="apple-touch-icon" sizes="72x72" href="images/TT.jpg">
        <link rel="apple-touch-icon" sizes="114x114" href="images/TT.jpg">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>   
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width white-link">
                <div class="container-fluid nav-header-container">
                    <div class="row">
                        <!-- start logo -->
                        <div class="col-md-2 col-xs-5">
                        <a href="index.php" title="Treal Technology" class="">
                            <div class="alt-font text-extra-large margin-10px-bottom text-white width-90 md-width-100 xs-margin-15px-bottom">Treal Technology</div>
                        </a>
                        </div>
                        <!-- end logo -->
                        <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                                <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                    <!-- start menu item -->
                                    <li class="dropdown megamenu-fw">
                                        <a href="solutions.php">Solutions</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <!-- end menu item -->
                                    <li class="dropdown simple-dropdown"><a href="industries.php">Industries</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>

                                    <!-- start menu item -->                                                   
                                    <li class="dropdown megamenu-fw">
                                        <a href="partners.php">Partners</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>                                   
                                   
                                    <li class="dropdown megamenu-fw">
                                        <a href="about.php">About Us</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown megamenu-fw">
                                        <a href="contact.php">Contact Us</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                      
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5 width-auto">
                            <div class="header-social-icon xs-display-none">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="https://linkedin.com/" title="Twitter" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://instagram.com/" title="Dribbble" target="_blank"><i class="fab fa-instagram"></i></a>                          
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/kl1.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                        <div class="display-table-cell vertical-align-middle text-center">
                            <!-- start page title -->
                            <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">Contact Us</h1>
                            <!-- end page title -->
                            <!-- start sub title -->
                            <span class="text-white opacity6 alt-font">Unlimited power and customization possibilities</span>
                            <!-- end sub title -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start contact info -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">We love to talk</h5>
                    </div>  
                </div>
                <div class="row">
                    <div class="row">
                        <!-- start contact info item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                            <div class="display-inline-block margin-20px-bottom">
                                <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white"></i></div>
                            </div>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
                            <p class="center-col">Level 20-1, Menara Binjai,<br>No 2, Jalan Binjai, Off Jalan Ampang,<br>50450 Kuala Lumpur, Malaysia.</p>
                        </div>
                        <!-- end contact info item -->
                        <!-- start contact info item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="display-inline-block margin-20px-bottom">
                                <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white"></i></div>
                            </div>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                            <p class="center-col">Phone: 03-2732 6233<br>Fax: 03-2732 6233</p>
                        </div>
                        <!-- end contact info item -->
                        <!-- start contact info item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                            <div class="display-inline-block margin-20px-bottom">
                                <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white"></i></div>
                            </div>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                            <p class="center-col"><a href="mailto:info@trealtechnology.com">info@trealtechnology.com</a><br><a href="mailto:jobs@trealtechnology.com"> jobs@trealtechnology.com</a></p>
                        </div>
                        <!-- end contact info item -->
                        <!-- start contact info item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                            <div class="display-inline-block margin-20px-bottom">
                                <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-megaphone icon-medium text-white"></i></div>
                            </div>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
                            <p class="xs-width-100 center-col">Please submit a form below.<br>Let us help you.</p>
                        </div>
                        <!-- end contact info item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact info section -->
        <!-- start contact form -->
        <section id="contact" class="wow fadeIn no-padding bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row equalize sm-equalize-auto">
                    <div class="col-md-6 cover-background sm-height-450px xs-height-350px wow fadeIn" style="background: url(images/coch1.jpg)"></div>
                    <div class="col-md-6 wow fadeIn">
                        <div class="padding-eleven-all text-center xs-no-padding-lr">
                            <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom xs-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
                            <h5 class="margin-55px-bottom text-white alt-font font-weight-700 text-uppercase xs-margin-ten-bottom"><br> Get In Touch <br> With Us</h5>
                            


                            <form id="project-contact-form" action="" method="POST">
                                <div class="row">
                                     <div class="col-md-12">
                                        <div id="success-project-contact-form" class="no-margin-lr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Name *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" id="comment" placeholder="Describe your project" rows="6" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" name="submit" value="Submit" class="submit-button">
                                    </div>
                                </div>
                            </form>
                            
                            <?php if (isset($emailError) || isset($messageError)) : ?> 
                            <div id="error-message">
                            <?php 
                            echo isset($emailError) ? $emailError . '<br>' : ''; 
                            echo isset($messageError) ? $messageError . '<br>' : ''; 
                            ?>
                           </div>
                           <?php endif; ?>


                           <?php if (isset($sent) && $sent === true) : ?> 
                           <div id="done-message">
                            Your data was succesfully submitted
                           </div>
                           <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact form -->
        <!-- start map section -->
        <section class="no-padding one-second-screen sm-height-400px wow fadeIn"><iframe class="width-100 height-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d592.1885294274394!2d101.71856662971014!3d3.1594986811093033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37cfdda8a417%3A0xde73755a66bf3182!2sMenara+Binjai!5e0!3m2!1sen!2smy!4v1553485886038"></iframe></section>
        <!-- end map section -->
        <!-- start social section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center social-style-1 round social-icon-style-5">
                        <ul class="large-icon no-margin-bottom">
                            <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                            <li><a class="instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                        </ul>
                    </div>                   
                </div>
            </div>
        </section>
        <!-- end social section -->
        <!-- start footer -->
        <footer class="footer-standard-dark bg-extra-dark-gray"> 
            <div class="footer-widget-area padding-five-tb xs-padding-30px-tb">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray sm-no-border-right sm-margin-30px-bottom xs-text-center">
                            <!-- start logo -->
                            <a href="index.html" class="margin-20px-bottom display-inline-block"><img class="footer-logo" src="images/TT2.jpg" data-rjs="images/TT2.jpg" alt="Treal Tech"></a>
                            <!-- end logo -->
                            <p class="text-small width-95 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <!-- start social media -->
                            <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                                <ul class="small-icon no-margin-bottom">
                                    <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a class="linkedin text-white" href="https://twitter.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a class="instagram text-white" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- end social media -->
                        </div>
                        <!-- start additional links -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-no-border-right sm-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Additional Links</div>
                            <ul class="list-unstyled">
                                <li><a class="text-small" href="index.html">Home</a></li>
                                <li><a class="text-small" href="careers.php">Careers</a></li>
                                <li><a class="text-small" href="contact.php">Contact Us</a></li>
                                <li><a class="text-small" href="home-portfolio-minimal.html">Other Links</a></li>
                                <li><a class="text-small" href="home-portfolio-parallax.html">Other Links</a></li>
                                <li><a class="text-small" href="home-portfolio-personal.html"></a></li>
                            </ul>
                        </div>
                        <!-- end additional links -->
                        <!-- start contact information -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-clear-both sm-no-border-right  xs-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Contact Info</div>
                            <p class="text-small display-block margin-15px-bottom width-80 xs-center-col">Treal Tech Sdn Bhd<br> Level 20-1, Menara Binjai, No 2, Jalan Binjai, Off Jalan Ampang, 50450 Kuala Lumpur, Malaysia.</p>
                            <div class="text-small">Email: <a href="mailto:sales@domain.com">info@trealtechnology.com</a></div>
                            <div class="text-small">Phone: +603-2732 6233</div>
                            <a href="contact.php" class="text-small text-uppercase text-decoration-underline">View Direction</a>
                        </div>
                        <!-- end contact information -->
                        <!-- start instagram -->
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12 widget padding-45px-left sm-padding-15px-left xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Our Company</div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-footer"></ul>
                            </div>
                        </div> -->
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div class="bg-dark-footer padding-50px-tb text-center xs-padding-30px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">&copy; 2019 Treal Tech is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" class="text-dark-gray">Treal Tech</a></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">
                            <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer --> 
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>