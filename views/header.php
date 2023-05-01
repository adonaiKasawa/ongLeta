<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Male_Fashion Template">
  <meta name="keywords" content="Male_Fashion, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ONG | APP</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="<?= URL ?>public/css/style.css" type="text/css">
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
      <div class="offcanvas__links">
        <a href="#">Sign in</a>
        <a href="#">FAQs</a>
      </div>
      <div class="offcanvas__top__hover">
        <span>Usd <i class="arrow_carrot-down"></i></span>
        <ul>
          <li>USD</li>
          <li>EUR</li>
          <li>USD</li>
        </ul>
      </div>
    </div>
    <div class="offcanvas__nav__option">
      <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
      <a href="#"><img src="img/icon/heart.png" alt=""></a>
      <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
      <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
      <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
  </div>
  <!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7">
            <div class="header__top__left">
              <p>Le ONG de la solution pour le demi-nue!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 col-md-3">
          <div class="header__logo">
            <a href="<?= URL ?>home "><img src="<?= URL ?>public/img/logo.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-11 col-md-11">
          <nav class="header__menu mobile-menu">
            <ul>
              <li class="active"><a href="<?= URL ?>home">Accueil</a></li>
              <li><a href="<?= URL ?>ministere">Ministere</a></li>
              <li><a href="<?= URL ?>agriculture">Agriculture</a></li>
              <li><a href="#">Affaire sociales </a>
                <ul class="dropdown">
                  <li><a href="<?= URL ?>sociales/orphelinat">Les orphelins</a></li>
                  <li><a href="<?= URL ?>sociales/handicapes">Les handicapes</a></li>
                  <li><a href="<?= URL ?>sociales/filles_mere">Les fille méres</a></li>
                  <li><a href="<?= URL ?>sociales/veuf">les veufs (ves)</a></li>
                  <li><a href="<?= URL ?>sociales/viellards">Les hommes de viéllards</a></li>
                </ul>
              </li>
              <li><a href="<?= URL ?>ecoles">Ecole </a></li>
              <li><a href="<?= URL ?>revenue">révenue </a>
                <ul class="dropdown">
                  <li><a href="<?= URL ?>revenue/habillement">Habillement</a></li>
                  <li><a href="<?= URL ?>revenue/voiture">Voiture</a></li>
                  <li><a href="<?= URL ?>revenue/prod_cosmetique">Produits cosmétiques</a></li>
                </ul>
              </li>
              <li><a href="<?= URL ?>contact">Contacts</a></li>
            </ul>
          </nav>
        </div>

      </div>
      <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
  </header>
  <!-- Header Section End -->