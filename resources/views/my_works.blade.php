<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>I, Portfolio - Personal Category Bootstrap Responsive Website Template | Portfolio : W3layouts</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{config('app.url')}}portfolio/assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light stroke">
      <a class="navbar-brand" href="index.html">
        <span> I, Portfolio</span>
      </a>
      <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item @@home__active">
            <a class="nav-link" href="index.html">Home </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="portfolio.html">My Portfolio</a>
          </li>
          <li class="nav-item @@c__active">
            <a class="nav-link" href="contact.html">Contact me</a>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="popup ml-auto">
          <a href="#menu" class="domain" data-toggle="modal" data-target="#DomainModal">
            <div class="hamburger">
              <span class="top-bar"></span>
              <span class="middle-bar"></span>
              <span class="bottom-bar"></span>
            </div>
          </a>
        </div>
      </div>

      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position ml-lg-2">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<div class="header-gap">

</div>


<!-- Domain Modal -->
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>

      <div class="modal-body">
        <div class="modal__content">
          <a class="navbar-brand"> <span>I, Portfolio </span></a>
          <!-- if logo is image enable this   
            <h2 class="logo">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </h2> -->
          <p class="mt-md-3 mt-2">I Would Love to make your Ideas real. Contact me and we will discuss your projects!
          </p>

          <img src="assets/images/banner.png" alt="" class="img-fluid mt-5">

          <div class="widget-social-icons mt-sm-5 mt-4">
            <ul class="icon-rounded address">
              <li class="mt-3">
                <p><a href="tel:+404-11-22-89">+1-2345-345-678-11</a></p>
              </li>
              <li class="mt-2">
                <p><a href="mailto:design@portfolio.com">design@portfolio.com</a></p>
              </li>
            </ul>
          </div>
          <div class="widget-social-icons mt-sm-5 mt-4">
            <ul class="follow-social">
              <li><a href="#url"><span class="fa fa-behance"></span></a></li>
              <li><a href="#url"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url"><span class="fa fa-facebook-official"></span></a></li>
              <li><a href="#url"><span class="fa fa-twitter"></span></a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>
    <!-- //modal-content -->
  </div>
  <!-- //modal-dialog -->
</div>
<!-- //Domain modal -->
<!-- home page portfolio section -->
<section class="w3l-portflioblock" id="awards">
    <div class="midd-w3 py-5">
        <div class="container py-lg-4 py-md-3">
            <div class="contact-heading text-center mb-5">
                <span class="text">My Portfolio </span>
                <h3 class="title-big">Some of my <span>Latest works</span></h3>
            </div>
            <div id="owl-portfolio" class="owl-carousel owl-theme mt-4 py-md-2 mb-4">
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template1.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Digital - Corporate Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template2.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Solutions - Corporate Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template3.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Medpill - Medical Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template4.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Digital - Corporate Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template5.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Solutions - Corporate Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template6.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Medpill - Medical Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template7.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Digital - Corporate Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template8.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Solutions - Corporate Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-content">
                        <a href="#url" class="grid-anchor">
                            <img src="assets/images/template3.jpg" class="img-fluid" alt="" />
                            <div class="template-info">
                                <h3>Medpill - Medical Template</h3>
                                <p class="description">Html template</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page contact section -->
<div class="copyright py-sm-5 py-4 text-center">
  <div class="container">
    <p class="copy-footer-29">© 2020 I, Portfolio. All rights reserved | Design by <a
        href="https://w3layouts.com">W3layouts</a></p>
  </div>
</div>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->


<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- script for portfolio slider -->
<script>
  $(document).ready(function () {
    $("#owl-portfolio").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        568: {
          items: 2,
          nav: false
        },
        1080: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for portfolio slider -->

<!-- script for featured posts blog slider -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for featured posts blog slider -->

<!-- script for banner typing text -->
<script>
  function autoType(elementClass, typingSpeed) {
    var thhis = $(elementClass);
    thhis.css({
      "position": "relative",
      "display": "inline-block"
    });
    thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
    thhis = thhis.find(".text-js");
    var text = thhis.text().trim().split('');
    var amntOfChars = text.length;
    var newString = "";
    thhis.text("|");
    setTimeout(function () {
      thhis.css("opacity", 1);
      thhis.prev().removeAttr("style");
      thhis.text("");
      for (var i = 0; i < amntOfChars; i++) {
        (function (i, char) {
          setTimeout(function () {
            newString += char;
            thhis.text(newString);
          }, i * typingSpeed);
        })(i + 1, text[i]);
      }
    }, 1500);
  }

  $(document).ready(function () {
    // Now to start autoTyping just call the autoType function with the 
    // class of outer div
    // The second paramter is the speed between each letter is typed.   
    autoType(".type-js", 200);
  });
</script>
<!-- //script for banner typing text -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>