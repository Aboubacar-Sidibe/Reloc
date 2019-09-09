<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114501583-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-114501583-1');
        </script>
        <!-- MetaInfo -->
        <title>Reloc Québec</title>
        <meta name="description"
              content="Reloc québec offre des services de préparation, d’accueil et d’installation de grande qualité afin de faciliter l’intégration culturelle et culturelle des nouveaux arrivants."/>
        <meta name="keywords"
              content="Relocation, Québec, préparation, animation, d’accueil , installation, culturelle, culturelle , nouveaux arrivants"/>
        <meta name="author" content="Sidibe"/>
        <!-- End MetaInfo-->

        <!--puslsating button -->
        <link rel="stylesheet" href="css/pulsatingButton.css"/>
        <!--end of puslsating button-->

        <!--Slideshow-->



        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script>
            if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
                var root = document.getElementsByTagName('html')[0];
                root.setAttribute('class', 'ff');
            }
            ;
        </script>
        <!--End of Slideshow-->



        <!-- Distorted button effect -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- End Distorted button effect -->

        <!-- Logo -->
        <link rel="shortcut icon" href="img/LOGOMAPCOLOR.png">
        <link rel="stylesheet" type="text/css" href="css/base.css"/>
        <link rel="stylesheet" type="text/css" href="pater/pater.css"/>
        <!-- Logo -->


        <link rel="stylesheet" type="text/css" href="css/w3.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Book menu css -->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!--End Book menu css -->



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

        <script>document.documentElement.className = "js";
            var supportsCssVars = function () {
                var e, t = document.createElement("style");
                return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
            };
            supportsCssVars() || alert("Please view this website in a modern browser that supports CSS Variables.");</script>
        <style>




            @-webkit-keyframes bar {
                0% {
                    background-position: 0%;
                }
                100% {
                    background-position: 200%;
                }
            }

            @keyframes bar {
                0% {
                    background-position: 0%;
                }
                100% {
                    background-position: 200%;
                }
            }


            .mySlides {display:none;}

            div.animate-border-bottom{width: 70%}
            form div.animate-border-bottom { color: white;display:inline-block; margin:0;text-transform:uppercase; }
            form  div.animate-border-bottom:after {
                display:block;
                content: '';
                border-bottom: solid 3px #2196F3;
                transform: scaleX(0);
                transition: transform 250ms ease-in-out;
            }
            form div.animate-border-bottom:hover:after { transform: scaleX(1); }
            form div.animate-border-bottom:after{ transform-origin:100% 50%; }
            form div.animate-border-bottom:after{  transform-origin:  0% 50%; }



            .modal {
                z-index: 3;
                display: block;
                padding-top: 100px;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.4)
            }

            .container {
                position: relative;
            }
            .overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color:rgba(0,120,255,0.6) ;
                overflow: hidden;
                width: 0;
                height: 100%;
                transition: .5s ease;
            }

            .container:hover .overlay {
                width: 100%;
            }


            .overlayleft {
                position: absolute;
                bottom: 0;
                left: 100%;
                right: 0;
                background-color: rgba(0,120,255,0.6);
                overflow: hidden;
                width: 0;
                height: 100%;
                transition: .5s ease;
            }

            .container:hover .overlayleft {
                width: 100%;
                left: 0;
            }

            .prepareSlide
            {
                position: relative;
                left: 1px;
                -webkit-transition: left 1s;
                -moz-transition: left 1s;
                transition: left 1s;
            }
            .slideLeft
            {
                left: 450px;              
            }

            #temoignage
            {
                background-color:rgb(239,244,255);
                transition: background-color 1s;
            }
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:20px;width:20px;padding:0;margin-top: 5px}

            article > div
            {
                padding-bottom: 2px;
                box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                transition: box-shadow 1s;
            }

            article > div:hover
            {
                box-shadow:0 32px 10px 0 rgba(0,0,0,0.2),0 32px 20px 0 rgba(0,0,0,0.19);
            }
            .control
            {
                opacity: 1;
                transition: opacity .5s;
            }
            .control:hover
            {
                opacity: 0.6
            }



            #signup input
            {
                border-bottom: 1px solid #898989;
                outline: none;
            }
            ::placeholder
            {
                color: #ffffff;
            }

            .closing
            {

                -webkit-animation-name: closing; /* Safari 4.0 - 8.0 */
                -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
                -webkit-animation-fill-mode: forwards;

                -moz-animation-name: closing; 
                -moz-animation-duration: 4s; /* Safari 4.0 - 8.0 */
                -moz-animation-fill-mode: forwards;

                animation-name: closing;
                animation-duration: 4s;
                animation-fill-mode: forwards;
            }

            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes closing
            {
                0% {

                    -moz-transform: scale(1, 1); /* Safari */
                    -webkit-transform: scale(1, 1); /* Safari */
                    -ms-transform: scale(1, 1); /* IE 9 */
                    transform: scale(1, 1);
                }
                50% {
                    -moz-transform: scale(1, 1); /* Safari */
                    -webkit-transform: scale(0.5, 0.5); /* Safari */
                    -ms-transform: scale(0.5, 0.5); /* IE 9 */
                    transform: scale(0.5, 0.5);
                }
                100%
                {
                    left:2000px;
                }
            }


            /* Standard syntax */
            @keyframes closing 
            {
                0% {
                    -moz-transform: scale(1, 1); /* Safari */
                    -webkit-transform: scale(1, 1); /* Safari */
                    -ms-transform: scale(1, 1); /* IE 9 */
                    transform: scale(1, 1);
                }
                50% {
                    -moz-transform: scale(1, 1); /* Safari */
                    -webkit-transform: scale(0.5, 0.5); /* Safari */
                    -ms-transform: scale(0.5, 0.5); /* IE 9 */
                    transform: scale(0.5, 0.5);
                }

                100%
                {
                    left:2000px
                }
            }


            body,.comment
            {
                background: white;
                transition: background 1s;
            }
            .topBarNightMode
            {
                background: #000000;
                transition: background 1s;
            }


        </style>
    </head>
    <body ng-app="sidi" ng-controller="myCtrl" style="background: {{bgcolor}};color:{{color}}">
        <div class="w3-row w3-center  w3-text-white topBarNightMode" style="padding: 8px;background: {{topBarNightMode}};color:{{color}}">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
            <defs>
            <filter id="filter-goo-2">
                <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur"/>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                               result="goo"/>
                <feComposite in="SourceGraphic" in2="goo"/>
            </filter>
            </defs>
            </svg>
            <img class="w3-left" src="img/Reloc-Quebec-White.png" height="30">
            <button id="component-2" class="button--2 w3-bar-item w3-padding w3-margin-right" style="filter: url('#filter-goo-2')">
                accueil
                <span class="button__bg "></span>
            </button>
            <button id="component-x" class="button--2 w3-bar-item w3-padding w3-margin-right" style="filter: url('#filter-goo-2')">
                à propos
                <span class="button__bg "></span>
            </button>
            <button id="component-y" class="button--2 w3-bar-item w3-padding w3-margin-right" style="filter: url('#filter-goo-2')">
                services
                <span class="button__bg "></span>
            </button>
            <button id="component-z" class="button--2 w3-bar-item w3-padding w3-margin-right" style="filter: url('#filter-goo-2')">
                international
                <span class="button__bg "></span>
            </button>
            <button id="component-v" class="button--2 w3-bar-item w3-padding w3-margin-right" style="filter: url('#filter-goo-2')">
                blog
                <span class="button__bg "></span>
            </button>

            <div class="pretty p-switch ">

                <input type="checkbox"  ng-change="myFunc()" ng-model="myValue"  id="newsletters"/>
                <div class="state p-success">
                    <label>night mode</label>
                </div>

            </div>

            <button  id="signUpBtn" style="background: none"  onclick="openRegister()" title="Créer un compte" class="w3-btn pulsatingCircle w3-right">


                <span class="firstCircle w3-aqua"><i class="fa fa-user-circle-o" style="position: relative;top: -9px;font-size: 6px;"></i></span>


                <span class="secondCircle"></span>

                <span class="thirdCircle"></span>

            </button>

            <a  id="facebook" href="https://www.facebook.com/Reloc-Qu%C3%A9bec-1388735241349032/" target="_blank" style="background: none;position: absolute;right: 10px;z-index: 10;padding: 15px;top: 180px;"  title="Facebook" class="w3-btn pulsatingCircle w3-right">


                <span class="firstCircle w3-aqua"><i class="fa fa-facebook" style="position: relative;top: -9px;font-size: 6px;"></i></span>


                <span class="secondCircle"></span>

                <span class="thirdCircle"></span>

            </a>

            <a  id="twitter" href="https://twitter.com/RelocQuebec" target="_blank" style="background: none;position: absolute;right: 10px;z-index: 10;padding: 15px;top: 240px;"  title="Twitter" class="w3-btn pulsatingCircle w3-right">


                <span class="firstCircle w3-aqua"><i class="fa fa-twitter" style="position: relative;top: -9px;font-size: 6px;"></i></span>


                <span class="secondCircle"></span>

                <span class="thirdCircle"></span>

            </a>

            <a  id="youtube" href="https://www.youtube.com/channel/UCt_6Hh-TfbIZjFjuk2nYVNA" target="_blank" style="background: none;position: absolute;right: 10px;z-index: 10;padding: 15px;top: 300px;"  title="Twitter" class="w3-btn pulsatingCircle w3-right">


                <span class="firstCircle w3-aqua"><i class="fa fa-youtube " style="position: relative;top: -9px;font-size: 6px;"></i></span>


                <span class="secondCircle"></span>

                <span class="thirdCircle"></span>

            </a>



        </div>

        <?php include "signup.html" ?>

        <div id="succesItem" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container">
                    <div class="w3-panel w3-pale-green w3-border">
                        <h3>Success!😍</h3>
                        <p>Item created successfully.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signup" class="w3-modal" style="z-index: 20">
            <form ng-app="" name="myForm">

                <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round-large w3-black" style="max-width:600px">

                    <div class="w3-center"><br>
                        <span onclick="closeRegister()" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                        <img src="img/img_avatar4.png" alt="Avatar" style="width:80px;height: 80px" class="w3-circle w3-margin-top">
                    </div>

                    <div class="w3-section">
                        <input class="w3-input  w3-margin-bottom w3-dark-gray" type="text" placeholder="Nom et prénom" id="username"  required>
                        <input class="w3-input w3-margin-bottom w3-dark-gray" type="email" placeholder="Entrer Email" id="email" name="myAddress" ng-model="email" >
                        <span class="w3-text-red" ng-show="myForm.myAddress.$error.email">Not a valid e-mail address</span>
                        <input class="w3-input w3-margin-bottom w3-dark-gray" type="number" placeholder="Numero de télephone" id="phone" required>
                        <input class="w3-input w3-margin-bottom w3-dark-gray" type="text" placeholder="Pays" id="country" required>

                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" onclick="register()">S'inscrire</button>
                        <div class="pretty p-switch">

                            <input type="checkbox" value="oui" checked="" id="newsletters"/>
                            <div class="state p-success">
                                <label>Recevoir nos newsletters</label>
                            </div>
                        </div>

                    </div>

                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey w3-center w3-text-red">
                        Toutes vos données sont protégées <i class="fa fa-lock w3-text-green"></i>.
                    </div>

                </div>
            </form>
        </div>


        <main>

            <div class="slideshow">
                <div class="slides slides--images">
                    <div class="slide slide--current">
                        <div class="slide__img" style="background-image: url(img/1.jpg)"></div>
                    </div>
                    <div class="slide">
                        <div class="slide__img" style="background-image: url(img/2.jpg)"></div>
                    </div>
                    <div class="slide">
                        <div class="slide__img" style="background-image: url(img/3.jpg)"></div>
                    </div>
                    <div class="slide">
                        <div class="slide__img" style="background-image: url(img/4.jpg)"></div>
                    </div>
                </div>
                <div class="slides slides--titles">
                    <div class="slide slide--current">
                        <div class="slide__title w3-center w3-hide-small">
                            <span style="white-space: normal; font-size: 55px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">Vous êtes un professionnel et<br>  vous désirez changer de vie</span>
                            <br><br><br>
                            <span style="z-index: 9; min-width: 941px; max-width: 941px; max-width: 29px; max-width: 29px; white-space: nowrap; font-size: 36px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">Venez travailler au Québec</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide__title w3-center w3-hide-small">
                            <span style="white-space: normal; font-size: 55px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">Vous avez besoin de main-d'oeuvre<br>internationale, prête à l'emploi</span>
                            <br><br><br>
                            <span style="z-index: 9; min-width: 941px; max-width: 941px; max-width: 29px; max-width: 29px; white-space: nowrap; font-size: 36px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">Vous vous préparez à accueillir des employés internationaux</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide__title w3-center w3-hide-small">
                            <span style="white-space: normal; font-size: 55px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">Vous voulez étudier au Canada</span>
                            <br><br><br>
                            <span style="z-index: 9; min-width: 941px; max-width: 941px; max-width: 29px; max-width: 29px; white-space: nowrap; font-size: 36px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">Venez suivre une formation ou étudier<br><br>le français ou l'anglais</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide__title w3-center w3-hide-small">
                            <span style="white-space: normal; font-size: 55px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">Vous voulez visiter le canada</span>
                            <br><br>
                            <span style="z-index: 9; min-width: 941px; max-width: 941px; max-width: 29px; max-width: 29px; white-space: nowrap; font-size: 36px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">Nous sommes là pour vous guider</span>
                        </div>
                    </div>
                </div>
                <nav class="slidenav">
                    <button class="slidenav__item slidenav__item--prev w3-display-topleft"><i class="fa fa-mail-reply w3-text-aqua" style="font-size:24px"></i></button>
                    <span class="w3-text-aqua">/</span>
                    <button id="d" class="slidenav__item slidenav__item--next w3-display-topright"><i class="fa fa-mail-forward w3-text-aqua"  style="font-size:24px"></i></button>
                </nav>
            </div>
        </main>

        <section id="about" class="section-one">
            <header>
                <h2 class="w3-center">SERVICES</h2>
            </header>
            <br>

            <section class="w3-row-padding w3-margin-top">

                <div class="w3-third">
                    <div class="w3-card container">
                        <img src="img/entreprise-1.jpg" style="width:100%;height: 231px">

                        <div class="overlayleft">
                        </div>
                    </div>

                    <div class="w3-container" style="border-left: 2px solid #2196F3">
                        <h5>ENTREPRISES</h5>
                        <p style="font-size: 17px;
                           color: #898989;
                           font-family: 'Lato', sans-serif;
                           font-weight: 400;
                           letter-spacing: .34px;
                           padding: 0;
                           margin: 0;
                           }">Nous nous associons à votre entreprise afin d’accueillir votre force de travail recrutée à l’international</p>
                    </div>
                </div>

                <div class="w3-third ">
                    <div class="w3-card container">
                        <img src="img/particuliers.jpeg" style="width:100%;height: 231px">
                        <div class="overlay">
                        </div>

                    </div>
                    <div class="w3-container" style="border-left: 2px solid #2196F3">
                        <h5>PARTICULIERS</h5>
                        <p style="font-size: 17px;
                           color: #898989;
                           font-family: 'Lato', sans-serif;
                           font-weight: 400;
                           letter-spacing: .34px;
                           padding: 0;
                           margin: 0;
                           }">Nous vous offrons de vous soutenir dans la préparation de votre projet, de vous accueillir chaleureusement et de faciliter votre installation.</p>
                    </div>
                </div>

                <div class="w3-third ">
                    <div class="w3-card container">
                        <img src="img/formation.jpg" style="width:100%;height: 231px">
                        <div class="overlay">
                        </div>

                    </div>
                    <div class="w3-container" style="border-left: 2px solid #2196F3">
                        <h5>FORMATIONS</h5>
                        <p style="font-size: 17px;
                           color: #898989;
                           font-family: 'Lato', sans-serif;
                           font-weight: 400;
                           letter-spacing: .34px;
                           padding: 0;
                           margin: 0;
                           }">L’apprentissage de la langue et de certaines compétences est essentiel pour le travail et l’intégration. Nous vous aiderons à trouver le programme ou le cours parfait pour vos besoins.</p>
                    </div>
                </div>
            </section>

        </section>
        <br>



        <section class="w3-row-padding comment" style="background: {{bgcolor}};color:{{color}}">

            <header>
                <h4 class="w3-center w3-text-black"> COMMENT AMORCER LA PRÉPARATION DE VOTRE PROJET D’IMMIGRATION AU
                    QUÉBEC, CANADA?</h4>
            </header>


            <section class="main w3-col l6 ">
                <header class="w3-center w3-margin-bottom">
                    <a class="w3-text-black w3-card-4 w3-padding" >Guide en text</a>
                </header><br>
                <div id="rm-container" class="rm-container prepareSlide">

                    <div class="rm-wrapper" id="rm-wrapper">

                        <div class="rm-cover w">

                            <div class="rm-front">
                                <div class="rm-content">

                                    <div class="rm-logo"></div>
                                    <h2>Le guide</h2>
                                    <h3>Vous voulez vous installer au Québec mais vous ne savez pas par où commencer?</h3>

                                    <a href="#" class="rm-button-open">ouvrez notre guide</a>


                                </div><!-- /rm-content -->
                            </div><!-- /rm-front -->

                            <div class="rm-back ">
                                <div class="rm-content">
                                    <h4>1ère étape - La préparation de votre projet</h4>
                                    <dl>
                                        <dd>Est-ce que votre formation est reconnue au Québec?
                                            Celle-ci et d’autres questions doivent être répondues avant d’entamer le processus
                                            d’immigration.
                                            Il est important aussi de rechercher de l’information sur la vie et les valeurs
                                            profondes au Québec.
                                        </dd>
                                    </dl>


                                </div><!-- /rm-content -->
                                <div class="rm-overlay"></div>

                            </div><!-- /rm-back -->

                        </div><!-- /rm-cover -->

                        <div class="rm-middle w">
                            <div class="rm-inner">
                                <div class="rm-content">
                                    <h4>2ème étape - Les procédures d'immigration</h4>
                                    <dl>
                                        <dd>
                                            Il est indispensable de vous informer sur les sites officiels d’immigration.

                                        </dd>


                                    </dl>
                                </div><!-- /rm-content -->
                                <div class="rm-overlay"></div>
                            </div><!-- /rm-inner -->
                        </div><!-- /rm-middle -->

                        <div class="rm-right w">

                            <div class="rm-front">

                            </div>

                            <div class="rm-back">
                                <div class="rm-content">
                                    <span class="rm-close">Fermer</span>

                                    <h4>3ème étape - La logistique et l'installation</h4>
                                    <dl>
                                        <dd>
                                            Après avoir reçu la confirmation de votre immigration,
                                            c’est le moment de préparer votre installation dans la ville que vous avez choisi.
                                        </dd>
                                    </dl>


                                    <h4>4ème étape - Vous entourer pour mieux vous intégrer</h4>
                                    <dl>
                                        <dd>
                                            C’est le moment d’aller rencontrer les gens et de refaire de nouveaux contacts.
                                        </dd>
                                    </dl>

                                </div><!-- /rm-content -->
                            </div><!-- /rm-back -->

                        </div><!-- /rm-right -->
                    </div><!-- /rm-wrapper -->

                </div><!-- /rm-container -->

            </section>


            <section class="w3-col l6" id="video">
                <header class="w3-center">
                    <a class="w3-text-black w3-card-4 w3-padding" >Guide en vidéo</a>
                </header>


                <iframe   style="width: 100%;height: 450px;margin-top: 50px"
                          src="https://www.youtube.com/embed/lJC4nb0iKHo" frameborder="0"
                          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                </iframe>
            </section>


        </section>


        <section class="w3-row-padding" id="temoignage" style="background: {{temoignage}};color:{{color}}">

            <header><h3 class="w3-center">TÉMOIGNAGES</h3></header>

            <section class="mySlides w3-animate-left">

                <article class="w3-container  w3-col s12 m12 l4">
                    <div class=" w3-white w3-round-large">

                        <header class="w3-container w3-border-bottom" style="position:relative">                   
                            <img src="img/france.gif" height="50" width="50" class="w3-circle" style="position:absolute;top:2px;left:90px" alt="drapeau de la france">
                            <p class="w3-center">AURÉLIEN PHILIPPOT</p>
                        </header>

                        <blockquote>
                            <img src="img/left-quote.png" height="20">
                            <p>J'ai particulièrement apprécié le professionnalisme de la société et l'accueil chaleureux qui m'a été réservé.</p>
                            <p>
                                J'ai gagné beaucoup de temps et économisé beaucoup de stress, et j'ai pu me consacrer plus rapidement et plus efficacement à mon activité professionnelle! Il est très réconfortant de se sentir épaulé et conseillé dès son arrivée dans un nouveau pays. Cela facilite et accélère tellement le processus d'intégration.</p>
                            <p>Merci beaucoup pour ces services à valeur ajoutée, c'est un vrai atout!  <sup><img src="img/right-quote.png" height="20"></sup></p>

                        </blockquote>
                    </div>

                </article>


                <article class="w3-container  w3-col s12 m12 l4">
                    <div class=" w3-white w3-round-large">
                        <header class="w3-container w3-border-bottom" style="position:relative">                   
                            <img src="img/belgium.gif" height="50" width="50" class="w3-circle" style="position:absolute;top:2px;left:90px" alt="drapeau de la belguiqe">
                            <p class="w3-center">ARNAUD DUFAYS</p>
                        </header>

                        <blockquote>
                            <img src="img/left-quote.png" height="20">
                            <p>L'accueil a été au-dessus de nos attentes.</p>
                            <p>
                                Nous n'avons eu aucune complication suite à notre emménagement à Québec et Reloc Québec y est pour beaucoup. Pour avoir profité des services d'accueil à l'aéroport, l'aide pour les démarches administratives et autres aides plus particulières à notre emménagement, je dois dire que tout a été parfaitement organisé. En plus de cela, l'accompagnement a été des plus agréables.
                            </p>
                            <p>
                                Karine est une personne charmante qui sait être à l'écoute de ses clients tout en étant capable de leur faire vivre une relation authentique avec elle. Nous avons beaucoup apprécié l'aide qui nous a été apportée!<sup><img src="img/right-quote.png" height="20"></sup></p>

                        </blockquote>
                    </div>
                </article>



                <article class="w3-container  w3-col s12 m12 l4">
                    <div class="  w3-white w3-round-large">
                        <header class="w3-container w3-border-bottom" style="position:relative">                   
                            <img src="img/france.gif" height="50" width="50" class="w3-circle" style="position:absolute;top:2px;left:90px" alt="drapeau de la france">
                            <p class="w3-center">FABRICE FERNANDEZ</p>
                        </header>

                        <blockquote>
                            <img src="img/left-quote.png" height="20">
                            <p>Merci pour votre merveilleux travail d’accompagnement : votre aide concrète, efficace et toujours parfaitement adaptée à ce que nous attendions (type de logement, garderie, etc.), votre soutien, vos excellents conseils et vos encouragements ont été essentiel pour nous.</p>
                            <p>
                                Si notre installation s’est si bien passée c’est en grande partie grâce à vous.</p>
                            <p>Bravo pour votre travail et encore merci!  <sup><img src="img/right-quote.png" height="20"></sup></p>

                        </blockquote>
                    </div>
                </article>

            </section>

            <section class="mySlides w3-animate-left">
                <article class="w3-container  w3-col s12 m12 l4 ">
                    <div class="w3-card w3-white w3-round-large">

                        <header class="w3-container w3-border-bottom" style="position:relative">                   
                            <img src="img/brazil.gif" height="50" width="50" class="w3-circle" style="position:absolute;top:2px;left:90px" alt="drapeau de la france">
                            <p class="w3-center" style="text-transform:uppercase">Orlando Batista</p>
                        </header>

                        <blockquote>
                            <img src="img/left-quote.png" height="20">
                            <p>
                                Reloc Québec a été très importante pour m'accompagner dans mes premiers pas à Québec, parce que je ne connaissais rien, ni personne pour m'aider en lien avec notre déménagement du Brésil.
                            </p>
                            <p>Merci beaucoup pour ces services à valeur ajoutée, c'est un vrai atout!  <sup><img src="img/right-quote.png" height="20"></sup></p>

                        </blockquote>
                    </div>

                </article>


                <article class="w3-container  w3-col s12 m12 l4">
                    <div class="w3-card w3-white w3-round-large">
                        <header class="w3-container w3-border-bottom" style="position:relative">                   
                            <img src="img/belgium.gif" height="50" width="50" class="w3-circle" style="position:absolute;top:2px;left:90px" alt="drapeau de la belguiqe">
                            <p class="w3-center" style="text-transform:uppercase">Caterina Carta</p>
                        </header>

                        <blockquote>
                            <img src="img/left-quote.png" height="20">
                            <p>RelocQuebec has been fantastic in helping out and organizing all the steps of my move to Canada.  They’ve not just addressed all of my concerns and guided me throughout the process; they truly took care to minimize all the stress along the way. I recommend their services with no hesitation.</p>
                            <p>
                                I think the services provided are exceptional. I can safely say that I have never experience anything of the kind. The support provided is professional and yet very personable. All the services provided were, therefore, extremely helpful and truly made the difference in kicking in my Canadian experience.                             </p>


                        </blockquote>
                    </div>
                </article>

                <article class="w3-container  w3-col s12 m12 l4">
                    <div class="w3-card w3-white w3-round-large">
                        <header class="w3-container w3-border-bottom" style="position:relative">                   
                            <img src="img/belgium.gif" height="50" width="50" class="w3-circle" style="position:absolute;top:2px;left:90px" alt="drapeau de la belguiqe">
                            <p class="w3-center" style="text-transform:uppercase">Christophe Lavalle</p>
                        </header>

                        <blockquote>
                            <img src="img/left-quote.png" height="20">
                            <p>Merci beaucoup pour ce formidable accompagnement, tant en amont qu’à l’accueil lors de l’arrivée à l’aéroport puis lors des premièrs jours.</p>
                            <p>
                                Bien que le changement soit d’importance, cela permet d’enlever une grande partie du stress car on ne se sent jamais seul et les questions ne restent jamais longtemps sans réponse. L’accompagnement lors des premiers jours a été essentiel pour bien démarrer/se sentir et appréhender les nombreux changements que l’on découvre!
                            </p>
                            <p>
                                Très précieux dans le processus d’intégration! Encore merci!

                            </p>
                        </blockquote>
                    </div>
                </article>



            </section>



            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-margin-top" style="width:100%">

                <div class="w3-left w3-text-white w3-purple w3-circle w3-padding control" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-text-white w3-purple w3-circle w3-padding control" onclick="plusDivs(1)">&#10095;</div>

                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            </div>


        </section>



        <section class="w3-margin-top" style="background: url('img/mapLarge.jpg'); background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-position: center;">

            <footer class="w3-row " style="background: rgba(0,0,0,0.7);padding-top: 10px">
                <section class="w3-third" >
                    <form action="/action_page.php" class="w3-container w3-text-blue w3-margin">
                        <header>
                            <h3 class="w3-center" style="text-transform: uppercase">Écrivez-nous</h3>

                        </header>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-user"></i></div>
                            <div class="w3-rest animate-border-bottom">
                                <input class="w3-input w3-border w3-dark-gray" name="first" type="text" placeholder="Nom">
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-user"></i></div>
                            <div class="w3-rest animate-border-bottom">
                                <input class="w3-input w3-border w3-dark-gray" name="last" type="text" placeholder="Prénom">
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-envelope-o"></i></div>
                            <div class="w3-rest animate-border-bottom">
                                <input class="w3-input w3-border w3-dark-gray" name="email" type="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-phone"></i></div>
                            <div class="w3-rest animate-border-bottom">
                                <input class="w3-input w3-border  w3-dark-gray" name="phone" type="text" placeholder="Numéro">
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-globe"></i></div>
                            <div class="w3-rest animate-border-bottom">
                                <input class="w3-input w3-border  w3-dark-gray" name="country" type="text" placeholder="Pays">
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-xlarge fa fa-pencil"></i></div>
                            <div class="w3-rest animate-border-bottom">
                                <input class="w3-input w3-border  w3-dark-gray" name="message" type="text" placeholder="Message">
                            </div>
                        </div>

                        <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Envoyer</button>

                    </form>

                </section>
                <section class="w3-third w3-text-white" style="margin-top: 50px">
                    <p class="w3-center">
                        <img src="img/Reloc-Quebec-White.png">

                    </p>
                    <p class="w3-center w3-large">Services de préparation, d’accueil et d’installation des nouveaux arrivants.</p>
                    <p class="w3-center">
                        <a href="https://www.facebook.com/Reloc-Qu%C3%A9bec-1388735241349032/" class="w3-margin-right w3-hover-text-blue" style="font-size:24px"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/RelocQuebec" class="w3-margin-right w3-hover-text-light-blue" style="font-size:24px"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/karine-ouellet-92849718" class="w3-margin-right w3-hover-text-blue" style="font-size:24px"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/channel/UCt_6Hh-TfbIZjFjuk2nYVNA" class="w3-margin-right w3-hover-text-red" style="font-size:24px"><i class="fa fa-youtube"></i></a>
                    </p>
                </section>

                <section class="w3-third w3-center w3-text-white" style="margin-top: 50px">
                    <header>
                        <h3 class=" w3-text-blue" style="text-transform: uppercase">Contactez-nous</h3>
                    </header>
                    <div class="w3-row w3-section" style="margin-left: 130px">

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-large fa fa-phone w3-hover-text-green"></i></div>
                            <div class="w3-rest w3-left">
                                +1 418 271 0617
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class="w3-large fa fa-skype w3-hover-text-light-blue"></i></div>
                            <div class="w3-rest w3-left">
                                10029jdhd993hd
                            </div>
                        </div>
                        <div class="w3-row w3-section w3-center">
                            <div class="w3-col" style="width:50px"><i class="w3-large fa fa-envelope-o w3-hover-text-light-blue"></i></div>
                            <div class="w3-rest w3-left">
                                info@relocquebec.com
                            </div>
                        </div>



                    </div>

                </section>
                <section class="w3-row-padding w3-center w3-text-white">
                    <p>Copyright © RelocQuébec 2019. All rights reserved.</p>

                </section>
            </footer>
        </section>


        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-database.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-messaging.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.4/firebase-storage.js"></script>

        <script>
                            // Your web app's Firebase configuration
                            const firebaseConfig = {
                                apiKey: "AIzaSyBaVHudheBwEnBN5L6Fyt9vzRb525uhD6w",
                                authDomain: "chapdeal-1295d.firebaseapp.com",
                                databaseURL: "https://chapdeal-1295d.firebaseio.com",
                                projectId: "chapdeal-1295d",
                                storageBucket: "chapdeal-1295d.appspot.com",
                                messagingSenderId: "849110353062",
                                appId: "1:849110353062:web:88a3f28f878b67ab"
                            };
                            // Initialize Firebase
                            firebase.initializeApp(firebaseConfig);

                            function register()
                            {
                                const name = document.getElementById("username").value.trim();
                                const email = document.getElementById("email").value.trim();
                                const phone = document.getElementById("phone").value.trim();
                                const country = document.getElementById("country").value.trim();
                                const newsletters = document.getElementById("newsletters").value;
                                const addedTime = dateToCIFormat();



                                itemsRef = firebase.database().ref("Reloc/Users/" + phone);
                                itemsRef.update({
                                    username: name,
                                    email: email,
                                    phone: phone,
                                    newsletters: newsletters,
                                    country: country,
                                    newsletters: newsletters,
                                    date: addedTime

                                }, function (error) {
                                    if (error)
                                    {
                                        console.log(error);
                                        alert("error");
                                    } else
                                    {
                                        document.getElementById("signup").classList.add("closing");
                                        document.getElementById("succesItem").style.display = "block";
                                        setTimeout(function () {
                                            document.getElementById("succesItem").style.display = "none";
                                        }, 3000);
                                        //alert("items saved successfully ");
                                        //getImagesLinks(path);


                                    }

                                });
                            }


                            function dateToCIFormat()
                            {
                                const date = new Date();
                                const day = date.getDate();
                                const month = date.getMonth() + 1;
                                const year = date.getFullYear();
                                const hour = date.getHours() + 1;
                                const min = date.getMinutes();
                                const sec = date.getSeconds();
                                return  day + "/" + month + "/" + year + " à " + hour + ":" + min + ":" + sec;
                            }


                            function openRegister() {
                                if (document.getElementById("signup").classList.contains("closing"))
                                {
                                    document.getElementById("signup").classList.remove("closing");
                                    document.getElementById("signup").style.display = "block";
                                } else
                                    document.getElementById("signup").style.display = "block";

                            }

                            function closeRegister() {
                                document.getElementById("signup").classList.add("closing");
                            }

                            function animateTestimonial1() {
                                var path = document.querySelector('.path');
                                var length = path.getTotalLength() + 2;
                                // Clear any previous transition
                                path.style.transition = path.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path.style.strokeDasharray = length + ' ' + length;
                                path.style.strokeDashoffset = length;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path.getBoundingClientRect();
                                // Define our transition
                                path.style.transition = path.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path.style.strokeDashoffset = '0';

                                var path = document.querySelector('.path2');
                                var length = path.getTotalLength() + 2;
                                // Clear any previous transition
                                path.style.transition = path.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path.style.strokeDasharray = length + ' ' + length;
                                path.style.strokeDashoffset = length;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path.getBoundingClientRect();
                                // Define our transition
                                path.style.transition = path.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path.style.strokeDashoffset = '0';

                                var path = document.querySelector('.path3');
                                var length = path.getTotalLength() + 2;
                                // Clear any previous transition
                                path.style.transition = path.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path.style.strokeDasharray = length + ' ' + length;
                                path.style.strokeDashoffset = length;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path.getBoundingClientRect();
                                // Define our transition
                                path.style.transition = path.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path.style.strokeDashoffset = '0';

                                var path = document.querySelector('.path4');
                                var length = path.getTotalLength() + 2;
                                // Clear any previous transition
                                path.style.transition = path.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path.style.strokeDasharray = length + ' ' + length;
                                path.style.strokeDashoffset = length;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path.getBoundingClientRect();
                                // Define our transition
                                path.style.transition = path.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path.style.strokeDashoffset = '0';

                            }
                            function animateTestimonial2() {

                                var path2 = document.querySelector('.path2-1');
                                var length2 = path2.getTotalLength() + 2;
                                // Clear any previous transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path2.style.strokeDasharray = length2 + ' ' + length2;
                                path2.style.strokeDashoffset = length2;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path2.getBoundingClientRect();
                                // Define our transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path2.style.strokeDashoffset = '0';


                                var path2 = document.querySelector('.path2-2');
                                var length2 = path2.getTotalLength() + 2;
                                // Clear any previous transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path2.style.strokeDasharray = length2 + ' ' + length2;
                                path2.style.strokeDashoffset = length2;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path2.getBoundingClientRect();
                                // Define our transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path2.style.strokeDashoffset = '0';
                                var path2 = document.querySelector('.path2-3');
                                var length2 = path2.getTotalLength() + 2;
                                // Clear any previous transition
                                path.style.transition = path2.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path2.style.strokeDasharray = length2 + ' ' + length2;
                                path2.style.strokeDashoffset = length2;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path2.getBoundingClientRect();
                                // Define our transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path2.style.strokeDashoffset = '0';
                                // Go!
                                path2.style.strokeDashoffset = '0';
                                var path2 = document.querySelector('.path2-4');
                                var length2 = path2.getTotalLength() + 2;
                                // Clear any previous transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path2.style.strokeDasharray = length2 + ' ' + length2;
                                path2.style.strokeDashoffset = length2;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path2.getBoundingClientRect();
                                // Define our transition
                                path2.style.transition = path2.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path2.style.strokeDashoffset = '0';
                            }

                            function animateTestimonial3() {

                                var path31 = document.querySelector('.path3-1');
                                var length31 = path31.getTotalLength() + 2;
                                // Clear any previous transition
                                path31.style.transition = path31.style.WebkitTransition = 'none';
                                // Set up the starting positions x,y
                                path31.style.strokeDasharray = length31 + ' ' + length31;
                                path31.style.strokeDashoffset = length31;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path31.getBoundingClientRect();
                                // Define our transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path31.style.strokeDashoffset = '0';


                                var path31 = document.querySelector('.path3-2');
                                var length31 = path31.getTotalLength() + 2;
                                // Clear any previous transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path31.style.strokeDasharray = length31 + ' ' + length31;
                                path31.style.strokeDashoffset = length31;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path31.getBoundingClientRect();
                                // Define our transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path31.style.strokeDashoffset = '0';

                                var path31 = document.querySelector('.path3-3');
                                var length31 = path31.getTotalLength() + 2;
                                // Clear any previous transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path31.style.strokeDasharray = length31 + ' ' + length31;
                                path31.style.strokeDashoffset = length31;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path31.getBoundingClientRect();
                                // Define our transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path31.style.strokeDashoffset = '0';
                                var path31 = document.querySelector('.path3-4');
                                var length31 = path31.getTotalLength() + 2;
                                // Clear any previous transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'none';
                                // Set up the starting positions x,y
                                path31.style.strokeDasharray = length31 + ' ' + length31;
                                path31.style.strokeDashoffset = length31;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path31.getBoundingClientRect();
                                // Define our transition
                                path31.style.transition = path31.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path31.style.strokeDashoffset = '0';

                            }

                            function animateTestimonial4() {

                                var path41 = document.querySelector('.path4-1');
                                var length41 = path41.getTotalLength() + 2;
                                // Clear any previous transition
                                path41.style.transition = path41.style.WebkitTransition = 'none';
                                // Set up the starting positions x,y
                                path41.style.strokeDasharray = length41 + ' ' + length41;
                                path41.style.strokeDashoffset = length41;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path41.getBoundingClientRect();
                                // Define our transition
                                path41.style.transition = path41.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path41.style.strokeDashoffset = '0';


                                var path41 = document.querySelector('.path4-2');
                                var length41 = path41.getTotalLength() + 2;
                                // Clear any previous transition
                                path41.style.transition = path41.style.WebkitTransition = 'none';
                                // Set up the starting positions x,y
                                path41.style.strokeDasharray = length41 + ' ' + length41;
                                path41.style.strokeDashoffset = length41;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path41.getBoundingClientRect();
                                // Define our transition
                                path41.style.transition = path41.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path41.style.strokeDashoffset = '0';

                                var path41 = document.querySelector('.path4-3');
                                var length41 = path41.getTotalLength() + 2;
                                // Clear any previous transition
                                path41.style.transition = path41.style.WebkitTransition = 'none';
                                // Set up the starting positions x,y
                                path41.style.strokeDasharray = length41 + ' ' + length41;
                                path41.style.strokeDashoffset = length41;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path41.getBoundingClientRect();
                                // Define our transition
                                path41.style.transition = path41.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path41.style.strokeDashoffset = '0';

                                var path41 = document.querySelector('.path4-4');
                                var length41 = path41.getTotalLength() + 2;
                                // Clear any previous transition
                                path41.style.transition = path41.style.WebkitTransition = 'none';
                                // Set up the starting positions x,y
                                path41.style.strokeDasharray = length41 + ' ' + length41;
                                path41.style.strokeDashoffset = length41;
                                // Trigger a layout so styles are calculated & the browser
                                // picks up the starting position before animating
                                path41.getBoundingClientRect();
                                // Define our transition
                                path41.style.transition = path41.style.WebkitTransition =
                                        'stroke-dashoffset 2s ease-in-out';
                                // Go!
                                path41.style.strokeDashoffset = '0';
                            }

                            var isCtrl = false;
                            document.onkeyup = function (e)
                            {
                                if (e.which == 17)
                                    isCtrl = false;
                            }
                            document.onkeydown = function (e)
                            {
                                if (e.which == 17)
                                    isCtrl = true;
                                if (e.which == 85 && isCtrl == true) {
                                    //run code for CTRL+U -- ie, whatever!
                                    window.location.href = "./admin.php";
                                    // document.getElementById("bd").style.opacity="1";



                                    return false;
                                }
                            }




        </script>

        <script>
                    angular.module('sidi', [])
                            .controller('myCtrl', ['$scope', function ($scope) {
                                    $scope.count = 0;
                                    $scope.myFunc = function () {
                                        $scope.count++;
                                        if ((($scope.count) % 2) != 0)
                                        {
                                            $scope.bgcolor = 'black';
                                            $scope.color = '#fff';
                                            $scope.topBarNightMode = "lightgray";
                                            $scope.temoignage = 'black';

                                        }
                                        if ((($scope.count) % 2) == 0)
                                        {
                                            $scope.bgcolor = 'white';
                                            $scope.color = '#000';
                                            $scope.topBarNightMode = "black";
                                             $scope.temoignage = 'rgb(239,244,255)';

                                        }

                                    };
                                }]);
        </script>


        <script>
                    var link = document.getElementById("d");
                    setInterval(function (args) {
                        link.click();
                    }, 10000);
        </script>

        <script src="js/demo.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/anime.min.js"></script>
        <script src="js/demo4.js"></script>

        <!-- /container -->
        <script src="js/TweenMax.min.js"></script>
        <script src="js/main.js"></script>


        <!-- jQuery if needed  book menu-->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript">
                    $(function () {

                        Menu.init();

                    });

        </script>
        <!-- End of book menu-->

        <script>
                    function AllowAccessBlog()
                    {
                        if (document.getElementById("check").checked)
                        {
                            document.getElementById("envoyer").removeAttribute("disabled");

                        } else
                        {
                            document.getElementById("envoyer").disabled = "true";

                        }

                    }
        </script>

        <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                        showDivs(slideIndex += n);
                    }

                    function currentDiv(n) {
                        showDivs(slideIndex = n);
                    }

                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        if (n > x.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = x.length;
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" w3-white", "");
                        }
                        x[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " w3-white";
                    }
        </script>


    </body>
</html>
