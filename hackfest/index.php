<?php
session_start();
$_SESSION['message'] = "";
?>

<!DOCTYPE html>

<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <title>B Positive</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">


    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>


    <link rel="shortcut icon" href="images/logoblood2.png" type="image/x-icon">
    <link rel="icon" href="images/logoblood2.png" type="image/x-icon">

</head>

<body id="top">


    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <h2 style="color: white;">B Positive</h2>
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3></h3>

                <ul class="header-nav__list">
                    <li class="current"><a href="index.php" title="home">Home</a></li>
                    <li><a href="#about" title="about">About</a></li>
                    
                    <li><a href="signup1.php" title="works">Register</a></li>
                    <li><a href="log.php" title="clients">Login</a></li>
                    <li><a href="#contact" title="contact">Contact</a></li>
                </ul>

               

                <ul class="header-nav__social">
                   <!-- <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    -->
                </ul>

            </div>

        </nav>

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text" style="color: #DC143C;">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>



    <section style="background-image:url('images/image3.jpg');" id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" style="padding-top: 200px;">

                <h3>Welcome to B Positive</h3>

                <h1>
                    Every Blood Donor<br>
                    is a "SUPER HERO"<br>
                </h1>

                <div class="home-content__buttons">
                    <a href="signup1.php" class="btn btn--stroke" style="border-radius: 25px;">
                        Request Now
                    </a>
                    <a href="signup1.php" class="btn btn--stroke" style="border-radius: 25px;">
                        Donate Now
                    </a>
                </div>

            </div>

            <!--<div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>-->

        </div>


       <!-- <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>

        </ul>
        -->

    </section>



    <section id='about' class="s-about" style="padding-top: 60px;padding-bottom: 60px;">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light" style="font-size: 40px;padding-top: 10px;">Welcome to B Positive</h1>
            </div>
        </div>

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p style="font-size: 20px;">
                  Are you ready to save a life?<br>
                  You can be one of 36,599 registered donors on B Positive<br>
                  B Positive a non-profit, non-commercial interface was born out of our social commitment and our desire to use the power of the Internet to help common people
                </p>
            </div>
        </div>

        <div style="font-size: 30px;" class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
          <div class="col-block stats__col">
              <div style="font-size: 40px;" class="stats__count">1505</div>
              <h5>Blood donors</h5>
          </div>
          <div class="col-block stats__col ">
              <div style="font-size: 40px;" class="stats__count">127</div>
              <h5>Hospitals connected</h5>
          </div>
          <div class="col-block stats__col">
              <div style="font-size: 40px;" class="stats__count">109</div>
              <h5>NGO's connected</h5>
          </div>
            <div class="col-block stats__col">
              <div style="font-size: 40px;" class="stats__count">102</div>
              <h5>Happy Clients</h5>
          </div>
        </div>

        <div class="about__line"></div>

    </section>



    <section id='services' class="s-services" style="padding-top: 60px;padding-bottom: 60px;">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" style="color: #f94040;">DONATE BLOOD, DONATE LOVE</h3>
                <h1 style="font-size: 30px;padding-top: 10px;" class="display-2">One Donation can save upto three lives.</h1>
            </div>
        </div>

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="images/b1.png" style="height: 50px;width: 50px;">
                </div>
                <div class="service-text">
                    <h3 class="h2" style="font-size:25px;">Why should I Donate Blood?</h3>
                    <p style="font-size:15px;"><b>One in Four people</b> will need a blood transfusion sometime in their lifetime.<br>
                      Only <b>37%</b> of the population is eligible to give blood.And less than <b>10%</b> only gives anually.<br>
                      In India <b>evrey two seconds</b> someone needs blood.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="images/b2.png" style="height: 50px;width: 50px;">
                </div>
                <div class="service-text">
                    <h3 class="h2" style="font-size:25px;">What's My Type?</h3>
                    <p style="font-size:15px;">You inherit your blood from your parents, and it determines the type of blood you can recieve and to whom it can be donated.<br>
                      No matter what type of blood you have, a patient somewhere needs it. If you have rare type, there are fewer donations to go around.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="images/b3.png" style="height: 50px;width: 50px;">
                </div>
                <div class="service-text">
                    <h3 class="h2" style="font-size:25px;">Where does Blood Donated Go?</h3>
                    <p style="font-size:15px;"><b>50 Red Blood Cell units</b> needed for trauma victim.<br>
                      <b>20 Red Blood Cell units</b> needed during liver transplant.<br>
                      <b>8 Platelet transfusions a week </b> forcancer patient.<br>
                      <b>6 Red Blood Cells units </b> needed needed during heart surgery.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="images/b4.png" style="height: 50px;width: 50px;">
                </div>
                <div class="service-text">
                    <h3 style="font-size:25px;" class="h2">What's the impact?</h3>
                    <p style="font-size:15px;">A single blood donation can provide red cells, platelets, and plasma, meaning a single donations could be used to <b>save three different lives</b>.<br>
                      a single person who gives blood once every 56 days from age 17 to 76 donates over 48 gallons of blood, potentially saving more than 1000 lives.
                    </p>
                </div>
            </div>

            <!--<div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Packaging Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Web Development</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>-->

        </div>

    </section>

<!--
    <section id='works' class="s-works">

        <div class="intro-wrap">

            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Works</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
                </div>
            </div>

        </div>

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/lady-shutterbug.jpg"
                                         srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="images/portfolio/woodcraft.jpg"
                                         srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/the-beetle.jpg"
                                         srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-grow-green.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="images/portfolio/grow-green.jpg"
                                         srcset="images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-guitarist.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/guitarist.jpg"
                                         srcset="images/portfolio/guitarist.jpg 1x, images/portfolio/guitarist@2x.jpg 2x" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> <!-- end masonry__brick

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-palmeira.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="images/portfolio/palmeira.jpg"
                                         srcset="images/portfolio/palmeira.jpg 1x, images/portfolio/palmeira@2x.jpg 2x" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-2">Glint has been honored to
                partner up with these clients</h1>
            </div>
        </div>

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">

                    <a href="#0" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/atom.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/blackberry.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/dropbox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/firefox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/joomla.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/magento.png" /></a>

                </div>
            </div>
        </div>

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum.
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.
                        Excepturi nam cupiditate culpa doloremque deleniti repellat.</p>

                        <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Tim Cook</span>
                            <span class="testimonials__pos">CEO, Apple</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>

                        <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Sundar Pichai</span>
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>

                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Satya Nadella</span>
                            <span class="testimonials__pos">CEO, Microsoft</span>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section> -->
    <!--<section id="contact" class="s-contact">

        <div class="overlay"></div>


        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" style="color: #f94040">Request Now</h3>
                <h1 class="display-2 display-2--light">Request out , We'll do the rest.</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Send Us A Request</h3>

                <form name="contactForm" id="contactForm" method="post" action="#" novalidate="novalidate">
                    <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactBg" type="text" id="contactBG" placeholder="Blood Group" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactPhone" id="contactPhone" placeholder="Contact Number" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                      <center>  <button class="full-width" style="background-color: #f94040;width: 40%;border:1px solid #f94040;border-radius: 25px;">Submit</button></center>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                    </fieldset>
                </form>


                <div class="message-warning">
                    Something went wrong. Please try again.
                </div>


                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div>

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5 style="color: #f94040">Where to Find Us</h5>
                        <p>
                            349 Amber hostel<br>
                            IIT(ISM) Dhanbad,Jharkhand<br>
                            826004 India
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5 style="color: #DC143C">Email Us At</h5>
                        <p>
                            <a href="#mail">rishikesh2017@gmail.com</a><br>
                            <a href="#email">charul159@gmail.com</a>
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5 style="color: #f94040">Call Us At</h5>
                        <p>
                            Mobile: 9967877723<br>
                        </p>
                    </div>

                    <ul class="contact-social">
                      <!--  <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </section>-->
    <footer id="contact">

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <h3 style="color:  #f94040 ;">More About B Positive</h3>
                  It is a college students led non profit, non commercial startup born out of our social commitment and our desire to use the power of Internet to help common peoples.
            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Stay Connected</h4>
                <p>For further details and updates .stay connected with us.Subscribe to our newsletter.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe" style="background-color: #f94040;border:1px solid #f94040;border-radius: 25px;">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>B Positive 2017</span>

                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>

    </footer>
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div>
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>



    <script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>


</html>
