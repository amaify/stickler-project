<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Join Stickler Cleaning Services">
    <meta name="description" content="Searching for a Cleaning Job? Join our team of Cleaning experts 
    by simply filling out the Form. Feel free to upload your CV">
    <meta name="keywords" content="Cleaning Job, Melbourne, Australia">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="careers.css">
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Thasadith:300,400,500,700" rel="stylesheet">
    <script src="../jquery.js"></script>
    <title>Careers | Stickler Cleaning Services</title>
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

          <li class="nav-item nav-item__cta">
            <a href="../contact/contact.php" id="book-now">Contact Us</a>
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

    <button class="phone__number">
      <a href="tel: 1300845433" class="phone__link">
        <i class="zmdi zmdi-phone zmdi-hc-1x"></i>
        <span class="phone__number-digits">1300 845 433</span>
      </a>
    </button>
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

      <a href="../contact/contact.php" class="active">
        Contact Us
      </a>
    </div>
  </div>
<!-- END OF THE MOBILE NAV SECTION -->


<!-- BEGINNIG OF CAREERS FORM SECTION -->
  <main>
    <section>
      <div class="careers__container">
        <div class="careers__heading">
          <div class="careers__text">
            <h2>Careers</h2>
            <hr>
            <p>Join us Today</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="contact-form__container">
        <div class="contact-form__content">
            <h3 class="contact-form__title">Apply for a cleaning position with Stickler Cleaning Services</h3>

            <!-- Display submission status -->
            <?php if(!empty($statusMsg)){ ?>
                <p style="text-align: center; font-size: 18px; font-weight: bold; color: #879e20" class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
            <?php } ?>

<!-- Display contact form -->
<form method="post" action="" enctype="multipart/form-data" class="contact-form">
            <div class="formGroup">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Name" required="">
            </div>

            <div class="formGroup">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Email address" required="">
            </div>
            
            <div class="formGroup">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" value="<?php echo !empty($postData['address'])?$postData['address']:''; ?>" placeholder="Address" required="">
            </div>

            <div class="formGroup">
              <label for="suburb">Suburb</label>
              <input type="text" name="suburb" class="form-control" value="<?php echo !empty($postData['suburb'])?$postData['suburb']:''; ?>" placeholder="Suburb" required="">
            </div>

            <div class="formGroup">
              <label for="phone_number">Phone Number</label>
              <input type="tel" name="phone_number" class="form-control" value="<?php echo !empty($postData['phone_number'])?$postData['phone_number']:''; ?>" placeholder="Phone Number" required="">
            </div>

            <div class="formGroup">
              <label for="work_hours">Working Hours</label>
              <input type="number" name="work_hours" class="form-control" value="<?php echo !empty($postData['work_hours'])?$postData['work_hours']:''; ?>" placeholder="Working Hours" required="">
            </div>

            <div class="formGroup">
              <label for="partner">Are you looking to work alone, or with your partner?</label>
              <select  name="partner">
                <option value="">Select....</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>

            <div class="formGroup">
              <label for="age">Age</label>
              <input type="number" name="age" class="form-control" value="<?php echo !empty($postData['age'])?$postData['age']:''; ?>" placeholder="Age" required="">
            </div>

            <div class="formGroup">
              <label for="message">Message</label>
              <textarea name="message" class="form-control" placeholder="Write your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
            </div>

            <div class="formGroup">
              <label for="file">Resume/CV</label>
              <input type="file" name="attachment" class="form-control" id="resume">
            </div>

            <div class="formGroup formGroup-btn">
              <button type="submit" name="submit" class="btn" value="SUBMIT">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </section>

<!-- END OF CAREERS FORM SECTION -->
  </main>

  <footer class="footer">
    <div class="main-footer">

      <div class="footer-container__content">
        <div class="footer-container__items">
          <h3 class="footer-brand__header">Stickler Cleaning Services</h3>
          <p class="brand-sub">
            with Stickler Cleaning Services, you are a beneficiary of
            Years and Years of industry experience, knowledge and skills.
          </p>
        </div>

        <div class="footer-container__items">
          <h3 class="footer-brand__header">Services</h3>
          <ul class="footer-container__item">
            <li>
              <a href="../services/services.html">Home Cleaning</a>
            </li>

            <li>
              <a href="../services/services.html">Kitchen Cleaning</a>
            </li>

            <li>
              <a href="../services/services.html">Hall Cleaning</a>
            </li>

            <li>
              <a href="../services/services.html">Glass Cleaning</a>
            </li>
          </ul>
        </div>

      <div class="footer-container__items">
        <h3 class="footer-brand__header">Quick Links</h3>
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

          <!-- <li>
            <a href="../services/services.html">Bond Cleaning</a>
          </li>

          <li>
            <a href="../services/services.html">Emergency Cleaning</a>
          </li>

          <li>
            <a href="../services/services.html">Deceased Estate Cleaning</a>
          </li> -->
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
        </div>
        <h3 class="rights">All rights reserved Stickler Cleaning services. <span>&copy; 2020</span></h3>
      </div>
    </div>
    </footer>
    <script src="../index.js"></script>
  </body>
</html>
