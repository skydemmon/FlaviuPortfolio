<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flaviu PALFI | Developpeur Web</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- animate.css-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/style.sea.css">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.png">
    <script
          src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous"></script>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>

    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="#intro" class="navbar-brand scrollTo">Flaviu PALFI</a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Intro</a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll">À PROPOS</a></li>
              <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>
              <li class="nav-item"><a href="#testimonials" class="nav-link link-scroll">Mon Experience</a></li>
              <li class="nav-item"><a href="#references" class="nav-link link-scroll">Mes projets</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Intro-->
    <section id="intro" style="background: url(img/header.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2, statistics-section text-white parallax parallax">
      <div class="container text-center">
        <div data-animate="fadeInDown" class="logo"><img src="img/logo.png" alt="logo" width="130"></div>
        <h1 data-animate="fadeInDown" class="text-shadow mb-5">Flaviu PALFI</h1>
        <p data-animate="slideInUp" class="h3 text-shadow text-400">Developpeur Web et Web Mobile</p>
      </div>
    </section>
    <!-- Description -->
    <section id="about" class="about-section">
          <div class="container">
            <header class="text-center">
              <h2 data-animate="fadeInDown" class="title">À PROPOS</h2>
            </header>
            <div class="row">
              <div data-animate="fadeInUp" class="col-lg-6">
                <p>Developpeur Web 21 ans <strong>1 an</strong> de experience dans le domain de <strong>développement web</strong> plusiers projets créer pendant mes formations et plusiers des projets créer pour des clients. </p>
                <p>Plusiers diplome dans le metier de développement web diplome par l'etat France Developpeur Web et Web Mobile Front-End, Developpeur Web et Web Mobile Back-End plus des formation  professionelle sur <strong>Adobe Photoshop</strong> et <strong>Adobe Ilustrator</strong>, maitriser les logiciels pour créer des maquetes et logos</p>
                <p>Je suis en train de m'enricher mes experience professionelle et je suis toujours en train des m'informer avec les <strong>nouveau techiniques et methede</strong> de coder les sites web et leur components</p>
                <p class="buttons text-center"><a href="http://webdevflav.online/cv/cv.pdf" target="_blank" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Voir mon CV!</a><a href="cv.pdf" download class="btn btn-outline-primary"><i class="fa fa-download"></i> Telecharger mon CV!</a></p>
              </div>
              <div data-animate="fadeInUp" class="col-lg-6">
                <div class="skill-item">
                  <div class="progress-title">PHP</div>
                  <div class="progress">
                    <div id="dynamic" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title">Javascript</div>
                  <div class="progress">
                    <div id="dynamic_1" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title">HTML/CSS</div>
                  <div class="progress">
                    <div id="dynamic_2"role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title">SEO</div>
                  <div class="progress">
                    <div id="dynamic_3" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="progress-title">WordPress</div>
                  <div class="progress">
                    <div id="dynamic_4" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>
                  </div>
                </div>
              </div>
              <div data-animate="fadeInUp" class=" col-xs-12 col-sm-12 mx-auto mt-4 col-md-2"><img src="img/portret.jpg" alt="This is me - IT worker" class="image rounded-circle img-fluid"></div>
            </div>
          </div>
        </section>
    <!-- Je fais -->
    <section id="services" class="bg-gradient services-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">Je fais</h2>
        </header>
        <div class="row services text-center">
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-search"></i></div>
            <h3 class="heading mb-3 text-400">Consultation</h3>
            <p class="text-left description">Consultation front-end et back-end pour les sites web.Consultation sur web design des tips pour ameliorer un site web dynamique et responsive.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-html5"></i></div>
            <h3 class="heading mb-3 text-400">Web Design</h3>
            <p class="text-left description">Design de maquetes pour structure un site web, Design des images customize,Design des logo customize pour les clients</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-tachometer"></i></div>
            <h3 class="heading mb-3 text-400">PHP développement</h3>
            <p class="text-left description">Développement PHP poour toutes les clients, on offrir des hebergement chez notre serverus avec du protection ddos eleve votre site vais etre online 99% du temp,Base de donnés securise avec des protection de donnes trés stricte et elevé. </p>
          </div>
        </div>
        <hr data-animate="fadeInUp">
        <div data-animate="fadeInUp" class="text-center">
          <p class="lead">Voulez vous voir plus?</p>
          <p><a href="#contact" class="btn btn-outline-light link-scroll">Contacter mois!</a></p>
        </div>
      </div>
    </section>
    <!-- Mes etudes -->
 <section id="testimonials" class="testimonials-section bg-gray">
      <div class="container">
        <header class="text-center mb-2">
          <h2 data-animate="fadeInUp" class="title">Mes<br><span>Etudes</span></h2>

        </header>
        <ul data-animate="fadeInUp" class="owl-carousel owl-theme testimonials equalize-height">
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Developpeur Web Front-End(BAC+2) 05/02/2020 </p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/greta.png">
                  <h5>Greta de L'Essonne</h5>
                  <p>05/02/2019</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Tosa Digital Web Développement Diplome 24/01/2020 </p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/tosa.png">
                  <h5>Greta de L'Essonne</h5>
                  <p>24/01/2019</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Administrator system de reseaux informatique 14/08/2019</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/cnis.png">
                  <h5>CNIS</h5>
                  <p>14/08/2019</p>
                </div>
              </div>
            </div>
          </li>

          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Cambridge Anglais diplome niveau B2 15/01/2019</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/cambridge.png">
                  <h5>Cambridge</h5>
                  <p>15/01/2019</p>
                </div>
              </div>
            </div>
          </li>

          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>ICDL(international computer driving license) 14/01/2019</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/ecdl.png">
                  <h5>l' instauration ICDL</h5>
                  <p>14/02/2019</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Bac specialisé Mathemathique - informatique 24/12/2018 </p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/cnis.png">
                  <h5>CNIS</h5>
                  <p>14/01/2019</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
<!-- Statistics-->
    <section id="statistics" data-dir="up" style="background: url(&quot;img/parallax.jpg&quot;);" class="statistics-section text-white parallax parallax">
      <div class="container">
        <div class="row showcase text-center">
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-align-justify"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">5</span><br>Websites</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">0</span><br>Satisfied Clients</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-copy"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">5</span><br>Projects</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-font"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">0</span><br>Magazines and Brochures</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="dark-mask"></div>
    </section>

    <section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">Mes Projets</h2>
            <p data-animate="fadeInUp" class="lead">Voir mes projets</p>
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Webdesign</a></li>
            <li><a href="#" data-filter="marketing">Marketing</a></li>
            <li><a href="#" data-filter="other">Other</a></li>
          </ul>
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>

          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portofolio1.png" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Projet F Deisgn</h3>
                            <p>Projet cree pendant mon formation Web developpeur</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.png,img/main-slider2.png,img/main-slider3.png" class="sr-only reference-description">
                        <p>Projet avec timp limité de creation 2 semaines pour cette reason on a travailer avec un metodé agilé et on a utiliser le framework bootstrap pour créer le site</p>
                        <p>Les projet a été créer dans plusiers étapes le maquetage en utilsant les logiciel balsamique apres integrer le maquete sur le web en utilsant HTML et CSS les back-end et le interface utilsateur a été creer en utilsant le CMS WordPress.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Telecharger le dossier du projet</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portofolio1.png" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project Portfolio</h3>
                            <p>Projet du creer mon premier CV enligne </p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider4.png,img/main-slider5.png,img/main-slider6.png" class="sr-only reference-description">
                        <p>Pour la creation du mon premier CV online on a utilser aucun framework c'est un site simple dynamique et responsive en utilasnt du php et du media quaries pour rendre les site dynamique</p>
                        <p>Projet créer dans 2 semaines les etapes pour créer toutes les media quaries poru toutes les tailes des ecrans il a prendre du temps mais en essence le site il est simple mais tres bien referencé par le SEO et les robots google.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Telecharger le dossier du projet</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portofolio1.png" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project F Design store</h3>
                            <p>Projet de créer un boutique</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider8.png" class="sr-only reference-description">
                        <p>Les projet a été créer en utilsant le CMS wordpress avec des customization pour le client, interface utilisateur customize et site customize.</p>
                        <p> Le site a été créer dans 3 semaines et on a créer des fichier php propré pour le client pour eviter les utilisation des plugins, le plus de plugins les plus mal la site marche doncs on a créer nous meme le php pour eviter les plugins commé meme pour le theme du wordpress on a créer nous meme le theme custom pour notre client</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Telecharger le dossier du projet</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-4.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Les future projeter</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>

    </section>
    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="contact-section contact">
      <div class="container">
        <header class="text-center">
          <h2 class="title">Contacter moi</h2>
        </header>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post" action="">
                <div class="messages"></div>
                <div class="controls">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="name" id="name" placeholder="Nom *" required="required" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="prenom" id="prenom" placeholder="Prenom *" required="required" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="mail" id="mail"placeholder="Votre email *" required="required" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="portable" id="portable" pattern="[0-9]+" maxlength="10" placeholder="Portable" class="form-control">
                    </div>
                    <div class="col-md-12">
                      <textarea name="message" id="message" placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                      <input type="hidden" name="reponsecaptcha" id="reponsecaptcha">
                     <input id="submit" type="button" value="Submit" name="submit">
                     <span id="success_message" class="text-success"></span>
                     <span id="error_message" class="text-danger"></span>
                     </form>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Map-->
    <div id="map"></div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <p class="social"><a href="https://www.linkedin.com/in/palfi-flaviu-a055a71a1/" target="_blank" class="external facebook wow fadeInUp"><i class="fa fa-linkedin"></i></a><a href="#" data-wow-delay="0.2s" class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a><a href="#" data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i class="fa fa-google-plus"></i></a><a href="#" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.6-->
          <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
            <p>© 2020 Flaviu PALFI. All rights reserved.</p>
          </div>
        </div>

      </div>
    </footer>
    <!-- JavaScript -->

<script>
    const input = document.querySelector('#portable');

    input.addEventListener('invalid', () => {
      if (input.validity.patternMismatch) {
        input.setCustomValidity('Numbers only please!!');
      }
    });
</script>

<script>

$(function() {
  var current_progress = 0;
  var interval = setInterval(function() {
      current_progress += 2;
      $("#dynamic")
      .css("width", current_progress + "%");
      if (current_progress >= 80)
          clearInterval(interval);
  }, 150);
});

$(function() {
  var current_progress = 0;
  var interval = setInterval(function() {
      current_progress += 2;
      $("#dynamic_1")
      .css("width", current_progress + "%");
      if (current_progress >= 60)
          clearInterval(interval);
  }, 150);
});

$(function() {
  var current_progress = 0;
  var interval = setInterval(function() {
      current_progress += 2;
      $("#dynamic_2")
      .css("width", current_progress + "%");
      if (current_progress >= 90)
          clearInterval(interval);
  }, 150);
});

$(function() {
  var current_progress = 0;
  var interval = setInterval(function() {
      current_progress += 2;
      $("#dynamic_3")
      .css("width", current_progress + "%");
      if (current_progress >= 100)
          clearInterval(interval);
  }, 120);
});

$(function() {
  var current_progress = 0;
  var interval = setInterval(function() {
      current_progress += 2;
      $("#dynamic_4")
      .css("width", current_progress + "%");
      if (current_progress >= 100)
          clearInterval(interval);
  }, 120);
});


$(document).ready(function(){
  $('#submit').click(function(){
       var name = $('#name').val();
       var prenom = $('#prenom').val();
       var mail = $('#mail').val();
       var portable = $('#portable').val();
       var message = $('#message').val();
       var reponsecaptcha = $('#reponsecaptcha').val();
       if(name == '' || prenom == ''|| mail == ''|| portable == ''|| message == '')
       {

            $('#error_message').html("Completer toutes les champs!");
       }
       else
       {
            $('#error_message').html('');
            $.ajax({
                 url:"insert.php",
                 method:"POST",
                 data:{name:name, prenom:prenom, portable:portable, mail:mail, message:message, reponsecaptcha:reponsecaptcha},
                 success:function(data){
                      $("form").trigger("reset");
                      $('#success_message').fadeIn().html(data);
                      setTimeout(function(){
                           $('#success_message').fadeOut("Slow");
                      }, 4000);
                 }
            });
       }
  });
});

</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LfEteQZAAAAAHjK0IE4BCfksjcPOIXYWoVTVoMw
"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfEteQZAAAAAHjK0IE4BCfksjcPOIXYWoVTVoMw', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('reponsecaptcha');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <!--Start Cookie Script-->
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/61aa3f86e6473a7c176f7f2875fc0824.js"></script>
    <!--End Cookie Script-->

 <script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/front.js"></script>

  </body>
</html>
