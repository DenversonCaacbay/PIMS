<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Inventory Management System</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="products.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
  .navbar
{
    background: #526dfe;
    position: sticky;
    top: 0;
}
  /* Footer CSS */
.footer__container {
    background-color: #526dfe;
    padding: 5rem 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  #footer__logo {
    color: #fff;
    display: flex;
    align-items: center;
    cursor: pointer;
    text-decoration: none;
    font-size: 2rem;
  }
  
  .footer__links {
    width: 100%;
    max-width: 1000px;
    display: flex;
    justify-content: center;
  }
  
  .footer__link--wrapper {
    display: flex;
  }
  
  .footer__link--items {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin: 16px;
    text-align: left;
    width: 160px;
    box-sizing: border-box;
  }
  
  .footer__link--items h2 {
    margin-bottom: 16px;
    color: #fff;
  }
  
  .footer__link--items a {
    color: #fff;
    text-decoration: none;
    margin-bottom: 0.5rem;
    transition: 0.3 ease-out;
  }
  
  .footer__link--items a:hover {
    color: #e9e9e9;
    transition: 0.3 ease-out;
  }
  
  .social__icon--link {
    color: #fff;
    font-size: 24px;
  }
  
  .social__media {
    max-width: 1000px;
    width: 100%;
  }
  
  .social__media--wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 1000px;
    margin: 40px auto 0 auto;
  }
  
  .social__icons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 240px;
  }
  
  .website__rights {
    color: #fff;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <img class="logo" src="../images/company_logo.png">
    <a class="navbar-brand" href="#">P.I.M.S ph</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="medical_supplies.php">MEDICAL SUPPLIES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="protection_and_hygine.php">PROTECTION & HYGINE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mom_and_baby.php">MOM & BABY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="covid_essential.php">COVID ESSESTIAL</a>
        </li>
        <li class="nav-item">
          <button class="btn" onclick="window.location.href= '../index.php'; alert('Logging out...');" style = "padding:10px;height: 40px; background: white; color: #526dfe;">
            Log Out
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!--IMAGE SLIDER-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/background1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="../images/background2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="../images/background3.jpg" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <h1>P.I.M.S ph</h1>
  <p>
  P.I.M.S ph is an online pharmacy with a one-stop destination for all types of medicines and healthcare products. P.I.M.S ph allows you to choose from 10K+ products including, Over-the-counter medicines, mom and baby care.

But is ordering medicines online a complicated process? Not at all! Simply search for the products you want to buy, Reserved, and Payout. You have to go to our Drugstore to pick up the medicine you have been reserved. If you need assistance, give us a call, and our pharmacist will help you complete your order.

Now, isn't that easy? We go all the way to the medicine store and wait in line when you have an online pharmacy at your service to provide your medicine.
  </p>

<h3>Buying medications online</h3>

<p>At P.I.M.S ph, we guarantee that you get high-quality, life-saving drugs delivered to you on time. We provide Over-The-Counter (OTC), protection & hygiene, and bath & body products.</p>


<h3>Medicine Refill</h3>

Remembering to refill drugs month on month, especially in chronic diseases, can be a hassle. P.I.M.S ph' pharmacists will help you to never run out of these essential drugs. 


<h3>Why Choose P.I.M.S ph?</h3>
<p>The trust of 100K+ loyal customers
We stock exclusively genuine healthcare products
Wide range of healthcare products to choose from
Our team is built up of highly experienced pharmacists & healthcare experts
Stay Happy! Stay Healthy!</p>

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