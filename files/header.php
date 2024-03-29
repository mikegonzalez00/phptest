<html>

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Index</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-amber.min.css" /> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <style>

.img-contenedor  {
-webkit-transition:all .9s ease; /* Safari y Chrome */
-moz-transition:all .9s ease; /* Firefox */
-o-transition:all .9s ease; /* IE 9 */
-ms-transition:all .9s ease; /* Opera */
width:100%;
}
.img-contenedor:hover  {
-webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-ms-transform:scale(1.1);
-o-transform:scale(1.1);
transform:scale(1.1);
}
.img-contenedor {/*Ancho y altura son modificables al requerimiento de cada uno*/

overflow:hidden;
}

.productname{
      text-shadow: 2px 2px #444;
    filter: drop-shadow(1px 2px 8px #444);
}

  .mdl-button--accent.mdl-button--accent.mdl-button--raised, .mdl-button--accent.mdl-button--accent.mdl-button--fab{    color:#fff !important;
    background-color: rgb(134, 181, 19) !important;}

    .mdl-card__supporting-text{    color: rgb(96, 45, 8);}

    .demo-card-square.mdl-card {
      max-width: 320px;
      min-width: 260px;
      height: 320px;
    }
    .demo-card-square > .mdl-card__title {
      color: #fff;
    }
    ::selection {
  background-color: #6ab344;
  color: #fff;
}

.search-box .mdl-textfield__input {
  color: rgba(0, 0, 0, 0.87);
}

.header .mdl-menu__container {
  z-index: 50;
  margin: 0 !important;
}


.mdl-textfield--expandable {
  width: auto;
}

.fab {
  position: absolute;
  right: 20%;
  bottom: -26px;
  z-index: 3;
  background: #64ffda !important;
  color: black !important;
}

.mobile-title {
  display: none !important;
}


.logo-image {
  width: 120px;
}


.header {
  overflow: visible;
  background-color: white;
  filter: drop-shadow(1px 2px 5px #444);
}

  .header .material-icons {
    color: #767777 !important;
  }

  .header .mdl-layout__drawer-button {
    background: transparent;
    color: #767777;
  }

  .header .mdl-navigation__link {
    color: #757575;
    font-weight: 700;
    font-size: 14px;
  }

  .navigation-container {
    /* Simple hack to make the overflow happen to the left instead... */
    direction: rtl;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1;
    width: 500px;
    transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1),
        width 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .navigation {
    /* ... and now make sure the content is actually LTR */
    direction: ltr;
    -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    width: 800px;
  }

  .search-box.is-focused + .navigation-container {
    opacity: 0;
    width: 100px;
  }


  .navigation .mdl-navigation__link {
    display: inline-block;
    height: 60px;
    line-height: 68px;
    background-color: transparent !important;
    border-bottom: 4px solid transparent;
  }

    .navigation .mdl-navigation__link:hover {
      border-bottom: 4px solid #8bc34a;
    }

  .search-box {
    -webkit-order: 2;
        -ms-flex-order: 2;
            order: 2;
    margin-left: 16px;
    margin-right: 16px;
  }

  .more-button {
    -webkit-order: 3;
        -ms-flex-order: 3;
            order: 3;
  }


.drawer {
  border-right: none;
}

  .drawer-separator {
    height: 1px;
    background-color: #dcdcdc;
    margin: 8px 0;
  }

  .drawer .mdl-navigation__link.mdl-navigation__link {
    font-size: 14px;
    color: #757575;
  }

  .drawer span.mdl-navigation__link.mdl-navigation__link {
    color: #8bc34a;
  }

  .drawer .mdl-layout-title {
    position: relative;
    background: #6ab344;
    height: 160px;
  }

    .drawer .logo-image {
      position: absolute;
      bottom: 16px;
    }

.be-together-section {
  position: relative;
  height: 400px;
  width: auto;
  background-color: #f3f3f3;
  background: url('images/coconut-pattern2.jpg') center 30%;
  background-repeat: repeat;
}

.logo-font {
  font-family: 'Roboto', 'Helvetica', 'Aril', sans-serif;
  line-height: 1;
  color: #767777;
  font-weight: 500;
}

.slogan {
  font-size: 60px;
  padding-top: 160px;
}

.sub-slogan {
  font-size: 21px;
  padding-top: 24px;
}

.create-character {
  font-size: 21px;
}

  .create-character a {
    text-decoration: none;
    color: #767777;
    font-weight: 300;
  }

.screen-section {
  position: relative;
  padding-top: 60px;
  padding-bottom: 80px;
}

.screens {
  text-align: right;
  width: 100%;
  white-space: nowrap;
  overflow-x: auto;
}

.screen {
  text-align: center;
}

.screen .link {
  margin-top: 16px;
  display: block;
  z-index: 2;
}

.image-link {
  text-decoration: none;
}

.wear {
  display: inline-block;
  width: 160px;
  margin-right: 32px;
}

  .wear .screen-image {
    width: 40%;
    z-index: 1;
  }


.phone {
  display: inline-block;
  width: 64px;
  margin-right: 48px;
}

  .phone .screen-image {
    width: 100%;
    z-index: 1;
  }


.tablet {
  display: inline-block;
  width: 110px;
  margin-right: 64px;
}

  .tablet .screen-image {
    width: 100%;
    z-index: 1;
  }

  .tablet .link {
    display: block;
    z-index: 2;
  }


.tv {
  display: inline-block;
  width: 300px;
  margin-right: 80px;
}

  .tv .screen-image {
    width: 100%;
    z-index: 1;
  }


.auto {
  display: inline-block;
  width: 300px;
  overflow: hidden;
}

  .auto .screen-image {
    display: block;
    height: 300px;
    z-index: 1;
  }


.wear-section {
  position: relative;
  background: url('images/wear.png') center top no-repeat;
  background-size: cover;
  height: 800px;
}

.wear-band {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: center;
  background-color: #37474f;
}

.wear-band-text {
  max-width: 800px;
  margin-left: 25%;
  padding: 24px;
  text-align: left;
  color: white;
}

  .wear-band-text p {
    padding-top: 8px;
  }

.link {
  text-decoration: none;
  color: #8bc34a !important;
}

  .link:hover {
    color: #7cb342 !important;
  }

  .link .material-icons {
    position: relative;
    top: -1px;
    vertical-align: middle;
  }

.alt-link {
  text-decoration: none;
  color: #64ffda !important;
  font-size: 16px;
}

  .alt-link:hover {
    color: #00bfa5 !important;
  }

  .alt-link .material-icons {
    position: relative;
    top: 6px;
  }

.customized-section {
  text-align: center;
}

.customized-section-text {
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  padding: 80px 16px 0 16px;
}

  .customized-section-text p {
    padding-top: 16px;
  }

.customized-section-image {
  background: url('images/devices.jpg') center top no-repeat;
  background-size: cover;
  height: 400px;
}

.more-section {
  padding: 80px 0;
  max-width: 1044px;
  margin-left: auto;
  margin-right: auto;
}

  .more-section .section-title {
    margin-left: 12px;
    padding-bottom: 24px;
  }

.card-container {
}

  .card-container .mdl-card__media {
    overflow: hidden;
    background: transparent;
  }

    .card-container .mdl-card__media img {
      width: 100%;
    }

  .card-container .mdl-card__title {
    background: transparent;
    height: auto;
  }

  .card-container .mdl-card__title-text {
    color: black;
    height: auto;
  }

  .card-container .mdl-card__supporting-text {
    height: auto;
    color: black;
    padding-bottom: 56px;
  }

  .card-container .mdl-card__actions {
    position: absolute;
    bottom: 0;
  }

  .card-container .mdl-card__actions a {
    border-top: none;
    font-size: 16px;
  }

.footer {
  background-color: #fafafa;
  position: relative;
}

  .footer a:hover {
    color: #8bc34a;
  }

  .footer .mdl-mega-footer--top-section::after {
    border-bottom: none;
  }

  .footer .mdl-mega-footer--middle-section::after {
    border-bottom: none;
  }

  .footer .mdl-mega-footer--bottom-section {
    position: relative;
  }

  .footer .mdl-mega-footer--bottom-section a {
    margin-right: 2em;
  }

  .footer .mdl-mega-footer--right-section a .material-icons {
    position: relative;
    top: 6px;
  }


.link-menu:hover {
  cursor: pointer;
}

.containerCOC{max-width: 1270px;margin: auto;}

/**** Mobile layout ****/
@media (max-width: 900px) {
  .navigation-container {
    display: none;
  }

  .title {
    display: none !important;
  }

  .mobile-title {
    display: block !important;
    position: absolute;
    left: calc(50% - 70px);
    top: 12px;
    transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  /* WebViews in iOS 9 break the "~" operator, and WebViews in OS X 10.10 break
     consecutive "+" operators in some cases. Therefore, we need to use both
     here to cover all the bases. */
  .android.search-box.is-focused ~ .mobile-title,
  .search-box.is-focused + .navigation-container + .mobile-title {
    opacity: 0;
  }

  .more-button {
    display: none;
  }

  .search-box.is-focused {
    width: calc(100% - 48px);
  }

  .search-box .mdl-textfield__expandable-holder {
    width: 100%;
  }

  .be-together-section {
    height: 350px;
  }

  .slogan {
    font-size: 26px;
    margin: 0 16px;
    padding-top: 24px;
  }

  .sub-slogan {
    font-size: 16px;
    margin: 0 16px;
    padding-top: 8px;
  }

  .create-character {
    padding-top: 200px;
    font-size: 16px;
  }

  .create-character img {
    height: 12px;
  }

  .fab {
    display: none;
  }

  .wear-band-text {
    margin-left: 0;
    padding: 16px;
  }

  .footer .mdl-mega-footer--bottom-section {
    display: none;
  }
}
  </style>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <a class="title mdl-layout-title" href="index.php">
            <img class="logo-image" src="images/logo.png">
          </a>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="header-spacer mdl-layout-spacer"></div>
          <div class="search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="navigation-container">
            <nav class="navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Productos</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Categorías</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="mostrar_carrito.php"><i class="material-icons">shopping_cart</i>(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>)</a>
            </nav>
          </div>
          <span class="mobile-title mdl-layout-title">
            <img class="logo-image" src="images/logo.png">
          </span>
        
        </div>
      </div> 
    
  <div class="container">