<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DR Renukas Skin clinic </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/Profile Pic Dr. Rennuka Skin Clinic1.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Appointment</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i></li>
            <li><i class="fa fa-map-marker"></i></li>
            <li><i class="fa fa-clock-o"></i></li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
   
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
     <?php include 'navbar.php'; ?>
   
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero__text">
                        <span>Providing care and solutions</span>
                        <h2>Take the world's best quality Treadment</h2>
                        <a href="#" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Consultation Section Begin -->
    <section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span>REQUEST FOR YOUR</span>
                            <h2>Consultation</h2>
                        </div>
                        <form action="./submit.php" method="post">
                            <input type="text" placeholder="Name">
                            <div class="datepicker__item">
                                <input type="text" placeholder="Date" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                            
                            <button type="submit" class="site-btn">Book appoitment</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="consultation__text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__text__item">
                                    <div class="section-title">
                                        <span>Welcome  to Dr Renuka's Clinic</span>
                                        <h2>Find Best Doctors With Dr Renuka's Clinic<b></b></h2>
                                    </div>
                                    <!-- <p>30 Years of experience in Cosmetic Surgery.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__video set-bg" data-setbg="img/consultation-video.jpg">
                                    <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>Offer for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-1.png" alt="">
                        <h5>Advanced equipment</h5>
                        <p>We focus on elegance and simplicity, creating designs that are smooth, modern, and easy to use</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-2.png" alt="">
                        <h5>Qualified doctors</h5>
                        <p>A highly qualified doctor dedicated to providing compassionate care and advanced medical expertise for every patient.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-3.png" alt="">
                        <h5>Certified services</h5>
                        <p>A trusted and certified service committed to delivering excellence, reliability, and customer satisfaction</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-4.png" alt="">
                        <h5>Emergency care</h5>
                        <p>Reliable emergency service available anytime, ensuring quick response and trusted care when it matters most.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Services Section Begin -->
   <section class="services spad set-bg" data-setbg="img/services-bg.jpg">
  <div class="container">
    <!-- Section Title + Button -->
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="section-title">
          <span>Our Services</span>
          <h2>Offers for You</h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 text-md-right text-center">
        <div class="services__btn">
          <a href="./contact.php" class="primary-btn">Contact Us</a>
        </div>
      </div>
    </div>

    <!-- Service Cards -->
    <div class="row mt-4">
      <!-- Cosmetology -->
      <div class="col-lg-6 col-md-12">
        <div class="services__item d-flex align-items-center">
          <div class="services__item__image me-3">
            <img src="img/services/cosmetology.jpg" alt="Cosmetology"
                 style="width:70px; height:70px; object-fit:cover; border-radius:10px;">
          </div>
          <div class="services__item__text">
            <h3>Cosmetology</h3>
            <p>Advanced skin treatments for face and body.</p>
          </div>
        </div>
      </div>

      <!-- Dermatology -->
      <div class="col-lg-6 col-md-12">
        <div class="services__item d-flex align-items-center">
          <div class="services__item__image me-3">
            <img src="img/services/dermatology.jpg" alt="Dermatology"
                 style="width:70px; height:70px; object-fit:cover; border-radius:10px;">
          </div>
          <div class="services__item__text">
            <h3>Dermatology</h3>
            <p>Effective treatment for fungal infections with assured results in 3 months.</p>
          </div>
        </div>
      </div>

      <!-- Skin Care -->
      <div class="col-lg-6 col-md-12">
        <div class="services__item d-flex align-items-center">
          <div class="services__item__image me-3">
            <img src="img/services/skin.jpg" alt="Skin Care"
                 style="width:70px; height:70px; object-fit:cover; border-radius:10px;">
          </div>
          <div class="services__item__text">
            <h3>Skin Care</h3>
            <p>Comprehensive solutions for all skin concerns.</p>
          </div>
        </div>
      </div>

      <!-- Trichology -->
      <div class="col-lg-6 col-md-12">
        <div class="services__item d-flex align-items-center">
          <div class="services__item__image me-3">
            <img src="img/services/trichology.jpg" alt="Trichology"
                 style="width:70px; height:70px; object-fit:cover; border-radius:10px;">
          </div>
          <div class="services__item__text">
            <h3>Trichology</h3>
            <p>Advanced hair treatments for healthy growth and restoration.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Services Section End -->

    <!-- Team Section Begin -->
   <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Our Expert Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-1.jpg" alt="">
                        <h5>Caroline Grant</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/Dr3.jpg" alt="">
                        <h5>Dr Rennuka Bhoi</h5>
                        <span>M.S.C in Cosmetology,Trichology,Skin Aesthetics</span>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/drrennukaskinclinic"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <a href="https://www.instagram.com/dr.rennukas_skin_clinic/"><i class="fa fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fa fa-dribbble"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/DR2.jpg" alt="">
                        <h5>Dr SAMRAT P.TAWDE</h5>
                        <span>MS OMFC (UK),MFDS RCPSG (UK)</span>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/drrennukaskinclinic"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <a href="https://www.instagram.com/dr.rennukas_skin_clinic/"><i class="fa fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fa fa-dribbble"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallery Begin -->
    <div class="gallery">
        <div class="gallery__container">
            <div class="grid-sizer"></div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-7.jpg">
                <a href="img/gallery/gallery-7.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Latest News Begin -->
    <!-- <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Our News</span>
                        <h2>Skin care tips</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="#" class="primary-btn">View all news</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">Here’s how you can get a natural glow this party season</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">Get better skin with these top 10 tips for skin care</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">8 Ways to Save Your Skin if You Exercise Outside This Winter</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Latest News End -->

 
<?php include 'footer.php'; ?>