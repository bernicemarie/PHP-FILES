<?php 
  include("functions.php");
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bernice-IT & Senior Web Developer</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/my-styles.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1 style="color: black">Hello, Je suis  <span style="color: black" class="name">Bernice Marie</span></h1>
          <p style="color: black">IT & Senior Developer</p>
          <a href="#about" class="btn btn-default btn-lg page-scroll">Apprendre Plus</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <a class="navbar-brand page-scroll" href="#page-top">Bernice Marie</a>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand" href="https://developer-pour-tous.com/goundo/public" target="_blank">Notre Goundo</a>
         </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">A mon sujet</a> </li>
          <li> <a class="page-scroll" href="#skills">Compétences</a> </li>
          <li> <a class="page-scroll" href="#portfolio">Mes images</a> </li>
          <li> <a class="page-scroll" href="#resume">Expériences</a> </li>
          <li> <a class="page-scroll" href="#contact">Contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>A mon sujet</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="img/benjamin01.jpg" style="width:250px;height:150px;"class="img-responsive"></div>
      <div class="col-md-8 col-md-offset-2">
        <div class="about-text">
          <p> L'informatique est pour moi une réelle passion. Le developpement d'application et la création des sites web m'interressent beaucoup dans ce metier. Le but que je me suis fixé est de rendre tout facile aux jeux des utilisateurs. </p>
          <p>C'est vrai ça démande beaucoup d'abnégations, beaucoup de concentrations mais avec l'aide divin tout devient très simple.</p>
          <p class="text-center"><a class="btn btn-primary" href="#"><i class="fa fa-download"></i>Télécharger mes expériences</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Compétences</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="95"> <span class="percent">95</span> </span>
        <h4>HTML5</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
        <h4>CSS3</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>jQuery</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>WordPress</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
        <h4>Photoshop</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
        <h4>Linux(Ubuntu-Kali)</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="99"> <span class="percent">99</span> </span>
        <h4>PHP</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="99"> <span class="percent">99</span> </span>
        <h4>Javascript</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="99"> <span class="percent">99</span> </span>
        <h4>SQL</h4>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfolio</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Design</a></li>
            <li><a href="#" data-filter=".app">App Development</a></li>
            <li><a href="#" data-filter=".branding">Branding</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small> </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small> </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Branding</small> </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development, Branding</small> </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->
<!-- <div id="achievements" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Some Stats</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
        <div class="achievement-box"> <span class="count">310</span>
          <h4>Happy Clients</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
        <div class="achievement-box"> <span class="count">4700</span>
          <h4>Hours of Work</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
        <div class="achievement-box"> <span class="count">30</span>
          <h4>Awards Won</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
        <div class="achievement-box"> <span class="count">8</span>
          <h4>Years of Experience</h4>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Resume Section -->
<div id="resume" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Experiences</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
         <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Juin 2018 <br>
                - <br>
                Présent </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Analyste-Programmeur</h4>
                <h4 class="subheading">UMS-SA</h4>
              </div>
              <div class="timeline-body">
                <p>Nous y developpons des applications, gerer le serveur DB, gerer Sage.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>Nov 2015 <br>
                - <br>
                Juin 2018 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Professeur d'université</h4>
                <h4 class="subheading">ULG,UCAO,IST de Conakry,Nelson Mandela, Réné Leveques</h4>
              </div>
              <div class="timeline-body">
                <p>J'y ai donné le cours de SQL,d'Oracle et de SQL Server.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
             <h4>Nov 2011 <br>
                - <br>
                Décembre 2013 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Ingénieur informaticien</h4>
                <h4 class="subheading">Sabari Technology</h4>
              </div>
              <div class="timeline-body">
                <p>J'y ai assuré la gestion du processus élèctoral à Kindia, puis travailler au Commisseriat central de Kindia.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title center">
      <h2>Education</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          
          <!-- Education Section-->
          
          <li>
            <div class="timeline-image">
              <h4>2014
                
                </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Global Institute-Ghana</h4>
                <h4 class="subheading">Etude approfondie en langues anglaises (Diplôme en Proficiency in English) à Global Institute (Accra, Ghana)</h4>
              </div>
              <div class="timeline-body">
                
              </div>
            </div>
          </li>
           <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2015
                
                </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>IPMC Ghana</h4>
                <h4 class="subheading">Etude certifiée en Administration et Implémentation de Base de données (Certification en SQL Server 2012, Numéro certification : F085-1837) à IPMC (Accra, Ghana)</h4>
              </div>
              <div class="timeline-body">
                 
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>2007 <br>
                - <br>
                2010 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Informatique</h4>
                <h4 class="subheading">LICENCE Fondamentale en Informatique 
(Centre Universitaire de Labé)
</h4>
              </div>
              <div class="timeline-body">
                 
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2007  
                 
                </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Lycée Aviation</h4>
                <h4 class="subheading">Baccalauréat en Sciences Mathématiques (Lycée Publique de l’Aviation)</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted"></p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact</h2>
      <hr>
    </div>
    <div class="col-md-12">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>Guinée-Conakry<br>
          Matoto</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>benjamin@developer-pour-tous.com</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p>+224 622 79 19 79</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <!-- <h3>Laissez moi un message</h3>
        <h2 class="text-center" style="color:purple"><?php  display_message();?> </h2>
      
      <form name="sentMessage" id="contactForm" method="post">
         <?php  send_message();?>
                            
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" name="nom" placeholder="Votre nom complet" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" name="adresse" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id=""></div>
        <button type="submit" class="btn btn-info" name="envoyer">Envoyer Message</button>
      </form> -->
      
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2021 Bernice Marie. <a href="#" rel="nofollow"></a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/easypiechart.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>