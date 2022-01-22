<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Inventory Management System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="loginpopup.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <img class="logo" src="images/company_logo.png">
    <a class="navbar-brand" href="#">P.I.M.S ph</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 80%;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="#home"  id="home-page">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contactme" id="contactme-page">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="jam" id="home">
  <div class="i-left">
    <h1 class="hero__heading">We are here to help with your <span>care</span></h1>
    <br>
    <div class="form-box">
      <div class="open-btn">
        <button class="open-button" onclick="addForm()">
          <strong>Login</strong>
        </button>
      </div>
      <div id="addPopup">
        <div class="form-popup" id="popupForm">
          <form action="login_db.php" method = "post" class="form-container">
            <h2>Login</h2>
            <label for="username">
              <strong>Username</strong>
            </label>
            <input type="text" id="email" placeholder="" name="username" required>
            <label for="password">
              <strong>Password</strong>
            </label>
            <input type="password" id="psw" placeholder="" name="password" required>
            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
          </form>
        </div>
      </div>

               <div class="open-btn">
                <button class="open-button" onclick="signForm()">
                <strong>Sign Up</strong>
                </button>
              </div>
              <div id="signPopup">
                <div class="form-popup" id="popupForm">
                  <form action="signup_db.php" method = "post" class="form-container">
                    <h2>Sign Up</h2>
                    <label for="fullname">
                    <strong>Full Name</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="full_name" required>

                    <label for="username">
                    <strong>Username</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="username" required>

                    <label for="email">
                    <strong>Email</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="email" required>

                    <strong>Password</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="password" required>

                    <button type="submit" class="btn">Sign Up</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                  </form>
                </div>
              </div>
           </div>
           
        </div>
        <div class="i-right">
        <img class="logo" src="images/company_logo.png">
        </div>
      </div>
        </div>
      </div>
  
      <!-- Footer Section -->
      <div class="contact" id="contactme">
        <div class="footer__container">
          <div class="footer__links">
            <div class="footer__link--wrapper">
              <div class="footer__link--items">
                <h2>Contact Us</h2>
                <a href="#">Email: pims@gmail.com</a> <a href="#">Mobile Number: +6390123456789</a>
              </div>
            </div>
          </div>
        <section class="social__media">
          <div class="social__media--wrap">
            <div class="footer__logo">
              <a href="/" id="footer__logo">P.I.M.S</a>
            </div>
            <p class="website__rights">© P.I.M.S 2021. All rights reserved</p>
            <div class="social__icons">
              <a href="https://www.facebook.com/pims/" class="social__icon--link" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
              <a href="https://www.instagram.com/pims/" class="social__icon--link"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://twitter.com/pims" class="social__icon--link"
                ><i class="fab fa-twitter"></i
              ></a>
            </div>
          </div>
        </section>
      </div>
    </div>

</body>
</html>