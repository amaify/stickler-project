<?php require_once 'new.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Contact Stickler Cleaning Service">
    <meta name="description" content="Searching for a cleaning service? Contact Stickler Cleaning Service for all kinds of Cleaning.">
    <meta name="keywords" content="Contact, Address, phone number, opening hours, stickler">
    <link rel="stylesheet" href="material-design-iconic-font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="../images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Thasadith:400,700" rel="stylesheet">
    <title>Contact Us | Stickler Cleaning Services</title>
  </head>
  <body>
    <div class="backdrop"></div>

<!-- BEGINNING OF THE MAIN HEADER SECTION -->
    <header>
      <div class="first-header">
        <div class="logo-container">
          <div class="logo-image">
            <img src="../images/logo.png" alt="">
          </div>
        </div>

        <div class="contact-us__items">
          <div class="contact-us__item">
            <div class="contact-us__text">
              <div class="first-logo">
                <h3><i class="zmdi zmdi-pin zmdi-hc-2x"></i></h3>
              </div>
              <div class="first-logo__text">
                <p id="locale">Suite 514<br>UNIT 2,134-136 Pasco Vale<br>Road<br>Moonee Ponds VIC 3039<br>Australia</p>
              </div>
            </div>
          </div>

          <div class="contact-us__item">
            <div class="contact-us__text">
              <div class="first-logo">
                <h3><i class="zmdi zmdi-phone zmdi-hc-2x"></i></h3>
              </div>
              <div class="first-logo__text  office__hours">
                <p>1300 845 433</p>
                <p>Mon-Sat: 8 A.M - 6 P.M</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="main-nav">

        <div class="nav-container">
          <ul class="nav-items" id="nav">
            <li class="nav-item">
              <a href="../index.html">Home</a>
            </li>

            <li class="nav-item">
              <a href="../about/about.html">About Us</a>
            </li>

            <li class="nav-item">
              <a href="../services/services.html">Services</a>
            </li>

            <li class="nav-item active nav-item__cta">
              <a href="contact.php" id="book-now">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="sideDrawer-button">
        <button id="toggle" class="toggle-button">
          <span class="toggle-button__bar"></span>
          <span class="toggle-button__bar"></span>
          <span class="toggle-button__bar"></span>
        </button>
      </div>
    </header>
<!-- END OF THE MAIN HEADER SECTION -->

<!-- BEGINNING OF THE MOBILE NAV SECTION -->
    <div id="mobileNav" class="main-nav__mobile">
      <div class="closing-button">
        <a href="javascript:void(0)" class="closebtn">&times;</a>
      </div>

      <div class="mobile-nav__items">
        <a href="../index.html">
          Home
        </a>

        <a href="../about/about.html">
          About Us
        </a>

        <a href="../services/services.html">
          Services
        </a>

        <a href="contact.php" class="active">
          Contact Us
        </a>
      </div>
    </div>
<!-- END OF THE MOBILE NAV SECTION -->

    <main>
<!-- BEGINNING OF THE CONTACT US HEADER SECTION -->
      <section>
        <div class="contact__container">
          <div class="contact__heading">
            <div class="contact__text">
              <h1>Contact Us</h1>
              <hr>
              <p>We are Waiting to Hear From You.</p>
            </div>
          </div>
        </div>
      </section>
<!-- END OF THE CONTACT US HEADER SECTION -->

<!-- BEGINNING OF THE FORM SECTION -->
      <section>
        <div class="contact-form__container">
          <div class="contact-form__content">
            <h1 class="contact-form__title">Leave a Message</h1>

            <?php if(!empty($statusMsg)){ ?>
                <p style="text-align: center; font-size: 18px; font-weight: bold; color: #879e20" class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
            <?php } ?>

            <form name="form" class="contact-form" method="POST" action=""  enctype="multipart/form-data">
              <label for="name">Name</label>
              <input id="name" type="text" name="name" class="form-control" value="" placeholder="Name">

              <label for="email">Email</label>
              <input id="email" type="email" name="email" class="form-control" value="" placeholder="Email address">

              <label for="subject">Subject</label>
              <input id="subject" type="text" name="subject" class="form-control" value="" placeholder="Subject">

              <label for="service">Service Needed</label>
              <select id="select" name="service">
                <option value="">Select....</option>
                <option value="Office Cleaning">Office Cleaning</option>
                <option value="Building / Warehouse Cleaning">building / warehouse Cleaning</option>
                <option value="Bank Cleaning">Bank Cleaning</option>
                <option value="House Cleaning">House Cleaning</option>
                <option value="Gym Cleaning">Gym Cleaning</option>
                <option value="Medical Center Cleaning">Medical Center Cleaning</option>
                <option value="Childcare center cleaning">Childcare Center Cleaning</option>
                <option value="School Cleaning">School Cleaning</option>
                <option value="Bond Cleaning">Bond Cleaning</option>
                <option value="Emergency Cleaning">Emergency Cleaning</option>
                <option value="Deceased Estate Cleaning">Deceased Estate Cleaning</option>
              </select>

              <label for="message">Message</label>
              <textarea name="message" class="form-control" placeholder="Write your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>

              <button type="submit" id="button" name="submit">Send Message</button>

            </form>
          </div>
        </div>
      </section>
<!-- END OF THE FORM SECTION -->

<!-- BEGINING OF THE CONTACTS SECTION -->
      <section>
        <div class="contacts-container">
          <h1>Get in touch to ask us any questions or book our service</h1>

          <div class="contacts-content">
            <div class="contacts-items">
              <i class="zmdi zmdi-email zmdi-hc-2x"></i>
              <h3>Email</h3>
              <p>stickler@stickler.com</p>
              <p>support@stickler.com</p>
            </div>

            <div class="contacts-items">
              <i class="zmdi zmdi-phone zmdi-hc-2x"></i>
              <h3>Phone</h3>
              <p>1300 845 433</p>
            </div>

            <div class="contacts-items">
              <i class="zmdi zmdi-time zmdi-hc-2x"></i>
              <h3>Office Hours</h3>
              <p>Mon-Sat: 9 a.m - 8 p.m</p>
              <p>Sunday Closed</p>
            </div>

            <div class="contacts-items">
              <i class="zmdi zmdi-pin zmdi-hc-2x"></i>
              <h3>Location</h3>
              <p>Suite 514<br>UNIT 2,134-136 Pasco Vale Road<br>Moonee Ponds VIC 3039<br>Australia</p>
            </div>
          </div>
        </div>
      </section>
<!-- END OF THE CONTACTS SECTION -->
    </main>


<!-- BEGINNING OF THE FOOTER SECTION   -->
    <footer class="footer">
      <div class="main-footer">

        <div class="footer-container__content">
          <div class="footer-container__items">
            <h1 class="footer-brand__header">Stickler Cleaning Services</h1>
            <p class="brand-sub">
              with Stickler Cleaning Services, you are a beneficiary of
              Years and Years of industry experience, knowledge and skills.
            </p>
          </div>

          <div class="footer-container__items">
            <h1 class="footer-brand__header">Services</h1>
            <ul class="footer-container__item">
            <li>
                <a href="../services/services.html">Office Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Building/Warehouses Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Bank Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Gym Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Medical Center Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Childcare center Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">School Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Bond Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Emergency Cleaning</a>
              </li>

              <li>
                <a href="../services/services.html">Deceased Estate Cleaning</a>
              </li>
            </ul>
          </div>

          <div class="footer-container__items">
            <h1 class="footer-brand__header">Quick Links</h1>
            <ul class="footer-container__item">
              <li class="quick-links__item">
                <a href="../index.html">Home</a>
              </li>

              <li class="quick-links__item">
                <a href="../about/about.html">About Us</a>
              </li>

              <li class="quick-links__item">
                <a href="../services/services.html">Services</a>
              </li>

              <li class="quick-links__item">
                <a href="contact.php">Contact Us</a>
              </li>

              <li class="quick-links__item">
                <a href="../careers/careers.php">Careers</a>
              </li>

              <li class="quick-links__item">
                <a href="../careers/careers.php">Careers</a>
              </li>

              <li class="quick-links__item">
                <a href="../conditions/privacy.html">Privacy Policy</a>
              </li>

              <li class="quick-links__item">
                <a href="../conditions/terms.html">Terms and Conditions</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-border"></div>

        <div class="footer-links">
          <ul class="footer-links__items">
            <li>
              <a href="#" id="facebook-link"><i class="zmdi zmdi-facebook"></i></a>
            </li>

            <li>
              <a href="#" id="twitter-link"><i class="zmdi zmdi-twitter"></i></a>
            </li>

            <li>
              <a href="#" id="instagram-link"><i class="zmdi zmdi-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer-link__border"></div>
        <div class="footer-trademark">
          <div class="footer-words">
            <h3 class="footer-word">
              Our Purpose
              <p>To be recognised as the leader in Commercial Cleaning services
                by satisfying the needs of our customers nestled with unparalled customer 
                service and value for money.
              </p>
            </h3>

            <h3 class="footer-word">
              Our Values
              <p>
                Deliver quality outcomes and long-term relationships through our service coupled
                with a focus on amazing customer experience on every interaction.
              </p>
            </h3>

            <h3 class="footer-word">
              Privacy Statement 
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt omnis 
                voluptates maxime tenetur officia aperiam dolor fuga harum nobis quod maiores 
                vero eum, laborum tempora provident vel distinctio! Dolor, ducimus?
              </p>
            </h3>
          </div>
          <h3 class="rights">All rights reserved Stickler Cleaning services. <span>&copy; 2020</span></h3>
        </div>
      </div>
    </footer>
<!-- END OF THE FOOTER SECTION -->
    <script src="../index.js"></script>
  </body>
</html>
