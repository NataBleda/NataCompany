<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>NataCompany</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="la gestion et la vente des services ">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="logo mehdi.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="lightmode.css" id="light-mode-stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1jCExMZ8LYiYWgGy9+kiTxmbYpISYdm0yNnP+qMiCNM2EcjLaXEG91uW+WrCkPBqdU2eIYxhxF5OgzUul9BvWqQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="darkmode.css" id="dark-mode-stylesheet" disabled>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-DzpL+wo6cqOZ9J8/e6oDXwxuDwYpsY+G1yepz0JH/BtxvVzP+c0pL+V8WnEpyHvV7JlGnYpV8nhLkIzvVZhQqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #0b1f61;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #0b1f61;
    font-size: 50px;
  }
  .logo {
    color: #0b1f61;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #0b1f61;
  }
  .carousel-indicators li {
    border-color: #0b1f61;
  }
  .carousel-indicators li.active {
    background-color: #0b1f61;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #0b1f61; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #0b1f61;
    background-color: #fff !important;
    color: #0b1f61;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #0b1f61 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #0b1f61;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #0b1f61;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #0b1f61 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #0b1f61 !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #0b1f61;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
    
  .dropdown-menu li {
    color: black;
  }
 
  }
  .cookie-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    background-color: #f0f0f0;
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: none; /* Hide by default */
}

.cookie-banner p {
    display: inline;
    margin: 0;
}

#accept-cookies {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="IMG_5127-removebg-preview 2.png" alt="NataCompany mini Logo" onclick="scrollToTop()"   style="display: block;
      height: 80px;  
      float: left;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a title="ce boutton vous dirige vers le cote a propos " href="#about">À PROPOS</a></li>
        <li><a title="ce boutton vous dirige vers le cote services" href="#services">SERVICES</a></li>
        <li><a title="ce boutton vous dirige vers le cote portfolio" href="#portfolio">PORTFOLIO</a></li>
        <li><a title="ce boutton vous dirige vers le cote tarification" href="#pricing">Tarification</a></li>
        <li><a title="ce boutton vous dirige vers le cote contact" href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
  <div class="dropdown" align="right">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      <i class="far fa-user"></i> Ton compte <span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li align="center" class="dropdown-item" ><a title="ce boutton vous dirige vers la page login " href="login2.php" style="background-color: #000000;"><b>se connecter</b></a></li>
      <li align="center" class="dropdown-item"><a title="ce boutton vous dirige vers la page admin" href="admin_page.php" style="background-color: #000000;"><i class="fa-solid fa-user-tie"></i> <b>Admin</b></a></li>
    </ul>
  </div>
  <div class="switch" align="left">
  <button  class="btn btn-dark" id="toggle-mode-button" style="background-color: #000000; color: #fff;"><i id="darkmoon" class="fa-solid fa-moon"></i>Toggle Mode<i id="lightmoon" class="fa-regular fa-sun"></i></button>
  </div>
</div>
</nav>

<div class="jumbotron text-center">
  <h1 style="text-align: center;">
    <img src="IMG_5127-removebg-preview 2.png" alt="NataCompany Logo" style="display: block; height: 300px;   margin: 0 auto;">
  </h1>
   
  <p><h3> Nous ne sommes pas les seuls, mais nous sommes les meilleurs.<small>Hossam Saadi.</small></h3>  </p> 
  <form>
    <div class="input-group">
      <input id="emails" type="email" class="form-control" size="50" placeholder="Address Email " required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger"> <a title="s'abboner a notre site pour avoir nos actu" href="#"> S'abonner</a></button>
      </div>
    </div>
  </form>
  
</div>
<div id="cookie-banner" class="cookie-banner">
        <p>This website uses cookies to ensure you get the best experience on our website. <a title="ce boutton vous dirige vers le cote  regle du site " href="privacy-policy.html">Learn more</a></p>
        <button id="accept-cookies" onclick="acceptCookies()">Got it!</button>
    </div>
<!-- Container (À propos Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8" id="about-heading">
      <h2>À propos de la page de l'entreprise</h2><br>
      <h4 id="about-text"> NataCompany est une entreprise qui a été créée en 12/12/2012 par son fondateur NataBleda, également connu sous le nom d'ElMehdi ElAlaoui. Avec 12 ans d'expérience dans son domaine, NataCompany est devenue une référence dans l'industrie grâce à son engagement envers l'excellence et la satisfaction du client. L'entreprise est équipée d'un personnel hautement qualifié qui travaille dur pour répondre aux besoins de ses clients avec des solutions innovantes et personnalisées. Avec son expertise, NataCompany a aidé de nombreuses entreprises à atteindre leurs objectifs et à améliorer leur productivité.</h4><br>
      <p id="about-text">NataCompany est leader dans son domaine et offre des services de marketing des réseaux sociaux à ses clients. Grâce à son expertise, l'entreprise aide les entreprises à améliorer leur présence en ligne et à atteindre leurs objectifs marketing. Avec une équipe hautement qualifiée de spécialistes des réseaux sociaux, NataCompany utilise les dernières techniques et stratégies pour offrir des solutions personnalisées à ses clients. Les services de marketing des réseaux sociaux de l'entreprise incluent la création de contenu, la gestion de campagnes publicitaires et l'analyse des données pour améliorer les résultats. Les clients de NataCompany peuvent compter sur l'entreprise pour les aider à atteindre leur public cible et à améliorer leur image de marque sur les réseaux sociaux.</p>
      <br><button class="btn btn-default btn-lg">Entrer en contact</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluiid">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Nos valeurs</h2><br>
      <h4><strong>MISSION:</strong>La mission de NataCompany est d'offrir à ses clients des solutions innovantes et personnalisées pour répondre à leurs besoins. L'entreprise est guidée par des valeurs telles que l'excellence, l'intégrité et l'engagement envers la satisfaction du client. NataCompany s'engage à travailler en étroite collaboration avec ses clients pour comprendre leurs besoins et leur offrir des solutions efficaces et rentables. L'entreprise s'efforce de fournir des services de qualité supérieure qui permettent à ses clients de se concentrer sur leur cœur de métier, tout en améliorant leur productivité et leur rentabilité.</h4><br>
      <p><strong>VISION:</strong>La vision de NataCompany est de devenir un leader mondial dans son domaine en offrant des solutions innovantes et personnalisées à ses clients. L'entreprise aspire à être reconnue pour son engagement envers l'excellence, l'innovation et la satisfaction du client. NataCompany est déterminée à continuer à développer ses compétences et ses capacités pour offrir des services de pointe à ses clients et à contribuer à leur réussite. L'entreprise s'efforce également de maintenir une culture d'entreprise positive et inspirante qui encourage la collaboration et la croissance professionnelle de son personnel.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4> ce que nous offrons</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <h3><strong><u> Création de contenu</u></strong></h3>
    <p>Création de contenu visuel et écrit pour les pages de réseaux sociaux de l'entreprise, en utilisant des tactiques de marketing de contenu pour attirer et fidéliser l'audience.</p>
  
    </div>
    <div class="col-sm-4">
       
     <h3><strong> <u> Formation en marketing des réseaux sociaux </u></strong></h3>
    <p>Formation des équipes internes de l'entreprise sur les meilleures pratiques en matière de marketing des réseaux sociaux, les stratégies et les outils à utiliser pour maximiser l'impact de leurs efforts de marketing.</p>
  </div>
    <div class="col-sm-4">
      
       <h3><strong><u>Gestion de la communauté</u></strong></h3>
         <p>Gestion et animation des pages de réseaux sociaux de l'entreprise, en interagissant avec les abonnés, en répondant aux questions et en partageant du contenu pertinent pour stimuler l'engagement des abonnés.</p>

    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
   <i class="fas fa-chart-line fa-3x"></i>
         <h3><strong><u>Stratégie de marketing des réseaux sociaux</u></strong></h3>
          <p>Développement de stratégies pour aider les entreprises à atteindre leurs objectifs de marketing sur les réseaux sociaux.</p>

    </div>
    <div class="col-sm-4">
      
      <h3><strong><u>Publicité sur les réseaux sociaux</u></strong></h3>
         <p>Création et gestion de campagnes publicitaires payantes sur les réseaux sociaux pour atteindre un public plus large et générer des conversions.</p>

    </div>
    <div class="col-sm-4">
        <h3><strong><u>Analyse de données</u></strong></h3>
    <p>Analyse des données des réseaux sociaux pour mesurer les performances des campagnes et des pages de l'entreprise, identifier les opportunités d'amélioration et ajuster la stratégie en conséquence.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center">
  <h2>Portfolio</h2><br>
  <h4>Ce que nous avons créé en franchise</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="moroccco.jpg" alt="Maroc" width="400" height="300">
        <p><strong>Maroc</strong></p>
        <p>Oui, nous l'avons construit au Maroc</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Company-Offices.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>Nous avons construit New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="San Francisco.jpeg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Oui, San Francisco est à nous </p>
      </div>
    </div>
  </div><br>
  
  <h2>Ce que nos clients disent </h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President de Amazon</span></h4>
      </div>
      <div class="item">
        <h4>"Un seul mot... fantastique!!"<br><span>John Doe, President de D-Straw Hat</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br ><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" title=" cote avis client" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" title=" cote avis des client" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Tarification</h2>
    <h4>Choisissez un plan de paiement qui vous convient</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$199</h3>
          <h4>par mois</h4>
          <button class="btn btn-lg">S'inscrire</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$299</h3>
          <h4>par mois</h4>
          <button class="btn btn-lg">S'inscrire</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p> 
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$499</h3>
          <h4>par mois</h4>
           <button class="btn btn-lg">S'inscrire</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluiid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us, and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Morocco, Casablanca</p>
      <p><span class="glyphicon glyphicon-phone"></span> +212 772020923</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mehdialaouiking@gmail.com</p>
      <p><a title="ce boutton vous dirige vers la page facebook "href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i> NataCompany</a></p>
      <p><a title="ce boutton vous dirige vers la page  instagrame "href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> NataCompany</a></p>
    </div>

    <div class="col-sm-7">
      <form id="contactForm" action="mail.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Your Name" tabindex="1" autocomplete="username" autofocus required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Your Email Address" tabindex="2" autocomplete="email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject" tabindex="4" autocomplete="subject" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" placeholder="Type your Message Details Here..." tabindex="5" rows="4" required></textarea>
        </div>
        <div class="form-group">
       <!-- <label>Choisi une Image ou Fichier</label>
            <input type="file" class="file" name="image" id="image" />
        </div>-->
        <div class="form-group">
          <button type="submit" name="send" class="btn btn-primary" id="contact-submit">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a title="ce boutton vous dirige vers le haut de la page "href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>NataBleda</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
function scrollToTop() {
  window.scrollTo(0, 0);
}
// Initialize Typed.js
 
const toggleModeButton = document.getElementById('toggle-mode-button');
  const lightModeStylesheet = document.getElementById('light-mode-stylesheet');
  const darkModeStylesheet = document.getElementById('dark-mode-stylesheet');
  const darkmoonswitch = document.getElementById('darkmoon');
  const lightmoonswitch = document.getElementById('lightmoon');



  toggleModeButton.addEventListener('click', () => {
    if (lightModeStylesheet.disabled) {
      lightModeStylesheet.removeAttribute('disabled');
      darkModeStylesheet.setAttribute('disabled', 'true');
      
      lightmoonswitch.removeAttribute('disabled');
      darkmoonswitch.setAttribute('disabled', 'true');
      toggleModeButton.textContent = 'Switch to Dark Mode';

    } else {
      darkModeStylesheet.removeAttribute('disabled');
      lightModeStylesheet.setAttribute('disabled', 'true');
      toggleModeButton.textContent = 'Switch to Light Mode';
      darkmoonswitch.removeAttribute('disabled');
      lightmoonswitch.setAttribute('disabled', 'true');
    }
  });
  document.addEventListener('DOMContentLoaded', function () {
    if (!getCookie('cookie_accepted')) {
        // Show the cookie consent banner if the user hasn't accepted cookies
        document.getElementById('cookie-banner').style.display = 'block';
    }
  });


function acceptCookies() {
    // Set a cookie to remember that the user has accepted cookies
    setCookie('cookie_accepted', 'true', 365);

    // Hide the cookie consent banner
    document.getElementById('cookie-banner').style.display = 'none';
}

// Helper functions for handling cookies
function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
}

function getCookie(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}


</script>

</body>
</html>
