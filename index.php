<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Web design service based in Frisco, Plano, Dallas area creating beautiful sites for business">

  <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
  <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400" rel="stylesheet">
  <title>Web Design</title>



  <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
  <link rel="manifest" href="resources/favicons/manifest.json">
  <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#e67e22">
  <link rel="shortcut icon" href="resources/favicons/favicon.ico">
  <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
  <meta name="theme-color" content="#e67e22">

</head>

<body>
  <header id="home">


    <nav>
      <div class="row">
        <a href="#home">
          <img src="./resources/img/logo.png" alt="logo" class="logo">
        </a>
        <ul class="main-nav js-main-nav">
          <li>
            <a href="#form">Contact me</a>
          </li>
          <li>
            <a href="#form">Chase Bullock</a>
          </li>
          <li>
            <a href="#form">979-587-8846</a>
          </li>
        </ul>
        <a class="mobile-nav-icon js-nav-icon">
          <i class="ion-navicon-round"></i>
        </a>
      </div>
    </nav>

    <div class="hero-text-box animated fadeIn">
      <h1>Web Design brings business to the
        <span class="top animated bounce">top</span>
      </h1>
      <p>Reach more clients with a well crafted website</p>
      <a class="btn btn-full js-scroll-to-plans" href="#"><span>Contact me</span></a>
      <a class="btn btn-ghost js-scroll-to-start" href="#"><span>Learn more</span></a>
    </div>

  </header>

  <section class="section-features js-section-features" id="features">
    <div class="row">
      <h2>Expand your audience with stunning web design</h2>
      <p class="long-copy">
        Hello, I'm Chase Bullock, your web developer. Together we will design the perfect website for you and your clients.

      </p>
    </div>

    <div class="row features js-wp-1">
      <div class="col span-1-of-3 box">
        <i class="ion-iphone icon-big"></i>
        <h3>web pages for all devices</h3>
        <p>From phones to laptops, our product will shine on your client's device.</p>
      </div>
      <div class="col span-1-of-3 box">
        <i class="ion-ios-bolt-outline icon-big"></i>
        <h3>Simple, Powerful</h3>
        <p>Websites are meant to help your business flourish online. With our simple yet powerful designs, you will find new
          clients and keep their attention.</p>
      </div>
      <div class="col span-1-of-3 box">
        <i class="ion-ios-briefcase icon-big"></i>
        <h3>Return of Investment</h3>
        <p>Websites are an investment. With our expertise, the value of your new website will far exceed the investment! </p>
      </div>
    </div>
  </section>

  <section class="section-portfolio">
    <div class="row">
      <h2>portfolio showcase</h2>
    </div>
    <div class="row portfolio-all">


      <div class="col  span-1-of-3 box js-portfolio-1">
        <a href="http://www.chase-bullock.website">
          <img src="./resources/css/img/foodsite1-min.png" alt="food site">
        </a>
      </div>

      <div class="col span-1-of-3 box js-portfolio-2">
        <a href="http://www.chase-bullock.website">
          <img src="./resources/css/img/foodsite1-min.png" alt="food site">
        </a>
      </div>

      <div class="col span-1-of-3 box js-portfolio-3">
        <a href="http://www.chase-bullock.website">
          <img src="./resources/css/img/foodsite1-min.png" alt="food site">
        </a>
      </div>

    </div>
  </section>

  <section class="section-form js-section-form">
    <div class="row" id="form">
      <h2>Get a quote</h2>
    </div>
    <div class="row">
      <form method="POST" action="mailer.php" class="contact-form">
        <div class="row">
              
       <?php

        if($_GET['success'] == 1) {
        echo "<div class=\"form-messages success\">
          Thank you! your message has been sent.
        </div>";
        }

        if($_GET['success'] == -1) {
            echo "<div class=\"form-messages error\">
            Oops! Something went wrong. Please try again!
            </div>";
            }

          ?>
          

        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="name">Name</label>
          </div>
          <div class="col span-2-of-3">
            <input type="text" name="name" id="name" placeholder="Your name" required>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="email">Email</label>
          </div>
          <div class="col span-2-of-3">
            <input type="email" name="email" id="email" placeholder="Your email" required>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="find-us">How did you find me?</label>
          </div>
          <div class="col span-2-of-3">
            <select name="find-us" id="find-us">
              <option value="friends" selected>Friends</option>
              <option value="search">Search engine</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>
        <div class="row">
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label>Drop us a line</label>
          </div>
          <div class="col span-2-of-3">
            <textarea name="message" placeholder="Your message"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label>&nbsp;</label>
          </div>
          <div class="col span-2-of-3">
            <input type="submit" value="Send it!">
          </div>
        </div>
      </form>
    </div>
  </section>

  <footer>
    <div class="row">
      <div class="col span-1-of-2">
        <ul class="footer-nav">
          <li>
            <a href="#">About us</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Press</a>
          </li>
          <li>
            <a href="#">iOs App</a>
          </li>
          <li>
            <a href="#">Android App</a>
          </li>
        </ul>
      </div>
      <div class="col span-1-of-2">
        <ul class="social-links">
          <li>
            <a href="#">
              <i class="ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-googleplus"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <p>
        Copyright &copy; 2017 by Omnifood. All rights reserved.
      </p>
    </div>

  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
  <script src="vendors/js/jquery.waypoints.min.js"></script>
  <script src="resources/js/script.js"></script>

</body>

</html>