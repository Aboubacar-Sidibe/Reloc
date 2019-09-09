<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ivoirien de bangalore: Une platforme pour les ivoiriens de bangalore"/>
    <meta name="keywords"
          content="Information, Embassade de la côte d'ivoire en inde, Cours de répétition, information sur frro, les services, vendeurs"/>
    <meta name="author" content="Sidibe"/>
    <link rel="shortcut icon" href="img/Logo.png">

    <!--Carousel9 dependencies-->
    <link rel="stylesheet" href="carousel/css/main.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--End of Carousel9 dependencies-->


    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <script src="js/modernizr.custom.js"></script>

    <!--Calendar dependencies-->


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/event.css"/>

    <link rel="stylesheet" href="date_time_calendar/calendrier.css">
    <!--End of Calendar dependencies-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="css/montheme.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/dropdown.css">


    <!--Emojis dependencies-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/emoji.css"/>
    <!--End of Emojis dependencies-->

    <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
    <link rel="stylesheet" href="css/animations.css"/>

    <!--puslsating button -->
    <link rel="stylesheet" href="css/pulsatingCircle.css"/>
    <!--end of puslsating button-->

    <!--submit button dependencies-->
    <link rel="stylesheet" type="text/css" href="css/prpgress_btn_normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/prpgress_btn_component.css" />
    <script src="js/prpgress_btn_modernizr.custom.js"></script>
    <!--end submit button dependencies-->


    <title>AIB</title>
    <style>

        h1, h2, h3, h4 {
            font-family: 'Arial Black',"Arial";
        }

        .no-boxShadow:hover {
            box-shadow: none;
        }

        @media only screen and (max-width: 601px) {

            .container {
                position: relative;
                top: 330px;
                height: 300px;
            }
        }

        .w3-hover-theme:hover {
            color: #fff !important;
            background-color: #00cc00 !important
        }

        .w3-card-32, .w3-hover-shadow:hover {
            box-shadow: 0 32px 10px 0 rgba(0, 0, 0, 0.2), 0 32px 20px 0 rgba(0, 0, 0, 0.19)
        }

        @media (min-width: 993px) {
            .milieu {
                margin-left: 25%;
                width: 100%;
            }

            .hundred {
                width: 60%;
            }
        }

        @media (max-width: 600px) {
            .milieu {
                margin-left: 5%;
                width: 100%
            }

            .hundred {
                width: 80%;
            }

        }

        .center {
            margin: auto;
            width: 90%;
        }

        img {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .transparent {
            background: rgba(255, 255, 255, 0.1);
        }

        input:focus {
            outline: none;
        }

        .w3-login-growIn {
            position: relative;
            animation: loginGrowIn 0.4s
        }

        @keyframes loginGrowIn {
            0% {
                transform-origin: left bottom;
                transform: rotate(90deg);
                opacity: 0;
            }
            100% {
                transform-origin: left bottom;
                transform: rotate(0);
                opacity: 1;
            }
        }

        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("img/Logo.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .w3-sofia {
            font-family: "Sofia", "TIMES NEW ROMAN", serif;
        }

        .w3-black, .w3-hover-black:hover {
            color: gray !important;
            background-color: #000 !important;
        }

        .light-black {
            background: rgba(0, 0, 0, 0.7)
        }

        .w3-card-32, .w3-hover-shadow:hover {
            box-shadow: 0 32px 10px 0 rgba(0, 0, 0, 0.2), 0 32px 20px 0 rgba(0, 0, 0, 0.19)
        }

        ;
        .w3-animate-opacity {
            animation: opac 2.5s
        }

        @keyframes opac {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        ;
        p {
            color: white;
            display: inline-block;
            margin: 0;
            text-transform: uppercase;
        }

        #signup form p:after {
            display: block;
            content: '';
            border-bottom: solid 3px green;
            transform: scaleX(0);
            transition: transform 250ms ease-in-out;
        }

        #signup form p:last-child {
            border: none;
        }

        #signup form p:hover:after {
            transform: scaleX(1);
        }

        #signup form p.fromRight:after {
            transform-origin: 100% 50%;
        }

        #signup form p.fromLeft:after {
            transform-origin: 0% 50%;
        }

        input:focus {
            outline: none;
        }

        textarea:focus {
            outline-color: #8bc34a;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 80px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: rgb(163, 0, 43);
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(46px);
            -ms-transform: translateX(46px);
            transform: translateX(46px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        legend {
            color: black;
            font-family: 'Sofia';
            font-size: 22px;
        }

        #loc:after {
            border-bottom: none;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none; /* remove default arrow */
            background: teal;
            padding: 5px;
            color: white;
            width: 100%;
            margin: auto;
            width: 40%;
            border-radius: 15px;
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 4px 20px 0 rgba(0, 0, 0, 0.19);

        }

        select::-ms-expand {
            display: none; /* hide the default arrow in ie10 and ie11 */
        }

        /* CAUTION: IE hackery ahead */
        select::-ms-expand {
            display: none; /* remove default arrow on ie10 and ie11 */
        }

        /* target Internet Explorer 9 to undo the custom arrow */
        @media screen and (min-width: 0\0
        ) {
            select {
                background: none \9;
                padding: 5px \9;
            }
        }

        #selectOcc:after {
            border-bottom: none;

        }

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
            background-color: rgb(255, 255, 255);
            background-color: rgba(255, 255, 255, 0.4)
        }

        label {
            cursor: pointer;
            /* Style as you please, it will become the visible UI component. */
        }

        #fileToUpload, #passToUpload {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }

        .w3-riverside {
            background: #26364a;
        }

        .w3-animate-top {
            position: relative;
            animation: animatetop 2s;
            animation-delay: 500s
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        .hidden {
            display: none;
        }

        #spring-text {
            position: relative;
            left: 0px;
            top: 0px;
            margin-top: -300px;
            margin-bottom: -300px;
            width: 100vw;
            height: 100vh;
        }

        #aib_event:after {
            border-top: 60px solid #f1f1f1 !important;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            bottom: 0px;
            content: "";
            position: relative;
            width: 0;
            height: 0;
        }

        .abi-light-grey {
            background-color: #404040;
        }

        .abi-dark-grey {
            background-color: #252525;

        }

        #London p, #Paris p {
            border-bottom: 2px dashed lightgray;
            padding-bottom: 5px;
        }

        #tabledata {
            position: relative;
            margin-left: 18%;
            width: 70%;
            top: -35px;
            background-color: rgb(43, 43, 43);
        }

        #motdupr {
            height: 560px;
            margin-left: 60px;
            margin-right: 70px;
            margin-bottom: 25px;
        }

        /*3d footer mobile first*/

        @media only screen and (max-width: 600px) {
            #tabledata, #motdupr {
                width: 100%;
                margin-left: 0;
            }

            #motdupr {

                margin-right: 0;
            }

        }

        @media only screen and (max-width: 900px) {
            #motdupr {
                width: 100%;
            }

            #motdupr {

                margin-left: 0;
                margin-right: 0;
            }
        }

        #tabledata input {
            background-color: rgb(60, 63, 65);
            color: white;
        }

        /*end of 3d footer mobile first*/

        #showcase img {
            height: 210px;
            width: 210px;
        }

        marquee span {
            margin-right: 100%;
        }

        marquee p {
            white-space: nowrap;
            margin-right: 1000px;
        }

        .pw-yellow-green {
            color: rgb(202, 255, 195) !important;
        }

        .pw-animate-bottom {
            position: relative;
            animation: animatebottom 0.4s
        }

        @keyframes animatebottom {
            from {
                bottom: -10px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }

        .bottomMenu {
            display: none;

        }

        #carousel_Alt img {
            height: 350px;
        }

        #carousel_Alt .w3-third {
            margin-bottom: 5px;
        }
        /*calendar*/
        #calendar h1
        {
            color: white;
        }

        i{
            color: #1d9650;
        }

        #video
        {
            width: 900px;
        }

        @media only screen and (max-width: 600px)  {
            #video
            {
                width: 400px;
            }

        }


        div.scrollmenu {
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu img {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }






    </style>

    <script src="js/utilities.js?6"></script>


</head>
<body    class="w3-light-gray night">
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1&appId=322633337895865&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <section  id='myDiv'>

        <?php include "TopMenu.php"; ?>
        <?php include "LeftMenu.php" ?>
        <!--End Login form-->

        <div class="w3-content w3-hide-small" style="max-width:100%;">

            <img class="mySlides w3-animate-opacity" src="img/inde1.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/p5.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/inde4.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/ind2.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/p2.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/p4.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/p6.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/p3.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/2bg.JPG" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/p1.jpg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/PRIZMA.jpeg" style="width:100%;height: 550px">
            <img class="mySlides w3-animate-opacity" src="img/SAFE.jpg" style="width:100%;height: 550px">



        </div><!-- /container -->


        <!--1st row-->
        <div class="w3-row w3-margin w3-margin-top w3-padding-16" id="aib_event">


            <!--Mot du président-->
            <div id="motdupr" class="w3-col l6"
                 style="border: transparent;background: url('img/letterbg2.jpg');overflow-y:scroll;">


                <div class="w3-row">
                    <div class="w3-third">
                        <img src="img/KLA_AMANI_BOMBET_ELI.jpg" alt="Eli kla" style="width:120px;height: 120px;"
                             class="w3-circle w3-left">

                    </div>

                    <div class="w3-rest w3-margin-top w3-hide-small">
                        <h4><b>Bienvenue sur le site de l’AIB – Association des Ivoiriens de Bangalore</b></h4>
                    </div>


                </div>

                <div class="w3-container w3-margin-top">
                    <div class="w3-rest w3-margin-top w3-hide-medium w3-hide-large">
                        <h4><b>Bienvenue sur le site de l’AIB – Association des Ivoiriens de Bangalore</b></h4>
                    </div>
                    <p>Lors de l’assemblée générale tenue le 10 Juin 2018, ce fut le cœur rempli de
                        gratitude et de fierté que je pris officiellement mes fonctions de président de notre
                        association, et ce devant une belle assemblée d’Ivoiriens et de représentants d’autres
                        communautés sœurs. Gratitude, car reconnaissant pour la confiance et le soutien
                        que m’ont témoigné mes frères Ivoiriens et ceux des autres nationalités ; Et fierté,
                        car la mobilisation et l’engouement dont ont fait preuve les Ivoiriens par leur
                        présence et leur effort de participation à toutes les actions déjà entamées, annoncent
                        une belle saison de travail et de progrès, dans l’union et la discipline.</p>
                    <p>Un vent nouveau souffle sur notre communauté Ivoirienne, non pour annoncer
                        l’orage, mais chasser les nuages et faire apparaitre le soleil d’une véritable cohésion.
                        Nous voulons voir tous les Ivoiriens réunis pour une même cause, celle de
                        consolider nos liens, et travailler à être meilleurs pour notre patrie, dont nous
                        sommes les ambassadeurs.</p>
                    <p>
                        Le passage de l’AE2I (Association des Etudiants Ivoiriens de l’Inde) à l’AIB
                        (Association des Ivoiriens de Bangalore) n’altère en rien ce but, bien au contraire, il
                        permet la reconnaissance territoriale des autres associations d’Ivoiriens en Inde :
                        nous sommes mieux structurés pour plus d’efficacité.
                    </p>
                    <p>Au sein de l’AIB, nous sommes pour la cohésion, le dynamisme et la rigueur. Les
                        efforts doivent converger dans le bon sens, car nous portons haut l’image de notre
                        patrie, au travers de nos réussites personnelles.</p>
                    <p>
                        Je vous invite à suivre cet élan de l’association, à demeurer connectés, soit en
                        consultant le site internet, soit en téléchargeant l’application de l’AIB ou encore
                        grâce aux différents réseaux sociaux que nous utilisons, afin d’être informés en
                        temps réel des démarches et activités effectuées par l’association. Cependant, au-
                        delà du virtuel, consolidons nos liens de façon réelle.
                    </p>
                    <p>
                        Je vous souhaite une bonne saison 2018-2019, et que vive l’AIB !
                    </p>
                    <p class="w3-center"><strong>KLA Amani Bombet Eli <br>
                            Président de l’AIB.</strong></p>
                </div>

            </div>





            <!--Calendrier-->
            <div class="w3-third" style="overflow-x: scroll" >

                <div id="calendar"></div>
            </div>


        </div>



        <!--end 1st row-->

        <div class="w3-row-padding w3-margin-top w3-margin-bottom w3-border-bottom w3-padding-16 w3-border-top w3-center w3-hide-large">
            <header><h1>INDEPENDANCE Day of COTE D'IVOIRE in BANGALORE - 2018</h1></header>
            <iframe style="width: 100%;height: 300px" src="https://www.youtube.com/embed/-uBSzH1NLAo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </iframe>

        </div>
        <div class="w3-row-padding w3-margin-top w3-margin-bottom w3-border-bottom w3-padding-16 w3-border-top w3-center w3-hide-small">
            <header><h1>INDEPENDANCE Day of COTE D'IVOIRE in BANGALORE - 2018</h1></header>
            <iframe width="862" height="485" src="https://www.youtube.com/embed/-uBSzH1NLAo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </iframe>

        </div>


        <div class="w3-row-padding w3-margin-top w3-margin-bottom w3-border-bottom w3-padding-16">

            <div class="w3-bar w3-green w3-margin-top w3-margin-bottom w3-threequarter w3-padding-16">
                <button class="w3-third w3-button tablink w3-orange w3-hover-white" onclick="openCity(event, 'London')">
                    Activités récentes
                </button>
                <button class="w3-third w3-button tablink w3-hover-white" onclick="openCity(event, 'Paris')">Activités à
                    venir
                </button>
                <button class="w3-third w3-button tablink w3-hover-white" onclick="openCity(event, 'Tokyo')">Mise à jour
                    Facebook
                </button>


                <div id="London" class="w3-container city w3-light-gray w3-center">
                    <div class="w3-animate-opacity">



                        <p><span class="w3-text-blue w3-left">14 April 2019 </span>
                            Assemblée Générale annuelle.</p>

                        <p><span class="w3-text-blue w3-left">10 Mars 2019 </span>
                            Don.
                        <p><span class="w3-text-blue w3-left">09 Mars 2019</span>
                            Tournoi de football</p>
                        <p><span class="w3-text-blue w3-left">10 Février 2019</span>
                            Freshers day</p>
                        <p><span class="w3-text-blue w3-left">09 Février 2019</span>
                            Visite de zone</p>

                    </div>
                </div>

                <div id="Paris" class="w3-container city w3-light-gray w3-center" style="display:none">
                    <div class="w3-animate-opacity">
                        <!--
                      <p><span class="w3-text-blue w3-left"></span>
                          Visite de commissariats.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Signature des partenariats.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Activité ludique.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Tournoi de football.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Freshers Day.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Visites de zones.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Don.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Formation/Séminaire.</p>
                      <p><span class="w3-text-blue w3-left"></span>
                          Assemblée Générale Finale.</p>-->
                        <p>Bientôt disponible</p>


                    </div>
                </div>

                <div id="Tokyo" class="w3-container city w3-light-gray" style="display:none">
                    <div class="fb-page w3-animate-opacity"
                         data-href="https://www.facebook.com/Associationdesivoiriensdebangalore/"
                         data-tabs="timeline,events,messages" data-width="500" data-height="500" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Associationdesivoiriensdebangalore/"
                                    class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Associationdesivoiriensdebangalore/">AIB - Association
                                des Ivoiriens de Bangalore</a></blockquote>
                    </div>
                </div>
            </div>

            <div class="w3-quarter w3-margin-top w3-margin-bottom">

                <div class="w3-row w3-threequarter w3-hide-small">

                    <div class="w3-card-4 w3-margin-bottom" style="width:100%">
                        <div class="w3-container w3-center w3-black">
                            <p class="">SEM Sainy Tiemele</p>
                        </div>
                        <img  src="img/amb2.jpeg" alt="Norway" style="width:100%;height: 200px">
                        <div class="w3-container w3-center w3-margin-top">
                            <p>Ambassadeur de la Côte d’Ivoire en Inde</p>
                        </div>
                    </div>


                    <div class="w3-card-4 " style="width:100%">
                        <div class="w3-container w3-center w3-black">
                            <p class="">Mr. Naveen Raju</p>
                        </div>
                        <img src="img/consult.jpeg" alt="Norway" style="width:100%;height: 200px">
                        <div class="w3-container w3-center w3-margin-top">
                            <p>Consul honoraire de la Côte d’Ivoire à Bangalore</p>
                        </div>
                    </div>
                </div>
                
                <div class="w3-row w3-threequarter w3-hide-large">

                    <div class="w3-card-4 w3-margin-bottom" style="width:100%">
                        <div class="w3-container w3-center w3-black">
                            <p class="">SEM Sainy Tiemele</p>
                        </div>
                        <img  src="img/amb2.jpeg" alt="Norway" style="width:50%;height: 100px">
                        <div class="w3-container w3-center w3-margin-top">
                            <p>Ambassadeur de la Côte d’Ivoire en Inde</p>
                        </div>
                    </div>


                    <div class="w3-card-4 " style="width:100%">
                        <div class="w3-container w3-center w3-black">
                            <p class="">Mr. Naveen Raju</p>
                        </div>
                        <img src="img/consult.jpeg" alt="Norway" style="width:50%;height: 100px">
                        <div class="w3-container w3-center w3-margin-top">
                            <p>Consul honoraire de la Côte d’Ivoire à Bangalore</p>
                        </div>
                    </div>
                </div>


                <!--Social media-->

                <div class="w3-bar-block w3-quarter w3-hide-small" style="position: fixed;top: 400px;right: -120px">
                    <a href="https://www.facebook.com/Associationdesivoiriensdebangalore/" target="_blank" class="w3-bar-item  social"><img src="img/fb.png" alt="facebook" height="50"
                                                                                                                                            width="50"/></a>

                    <a href="https://www.youtube.com/channel/UCQInW3PsR50BurJ6QpFmW7g" target="_blank" class="w3-bar-item  social"><img src="img/youtube.png" alt="youtube" height="50" width="50"/></a>
                </div>

            </div>


        </div>

        <div class="w3-hide-large" id="partner_mobile ">
            <h1 style="margin-top:20px;">Partenaires</h1>

            <div class="scrollmenu">
                <img  src="carousel/img/COMIB.jpg" alt="Prizma academy" height="80" width="80" class="w3-circle">
                <img src="carousel/img/YELA.jpg" alt="Yela" height="80" width="80" class="w3-circle">
                <img src="carousel/img/GEC.jpg" alt="GEC" height="80" width="80" class="w3-circle">
                <img src="carousel/img/IM2.png" alt="IM2" height="80" width="80" class="w3-circle">
                <img src="carousel/img/ITECHGroup.png" alt="ITECH Group" height="80" width="80" class="w3-circle">
                <img src="carousel/img/CMRIT.png" alt="CRM" height="80" width="80" class="w3-circle">
                <img src="carousel/img/COMIB.jpg" alt="Comib" height="80" width="80" class="w3-circle">
                <img src="carousel/img/SHALOM.jpg" alt="SHALOM"  height="80" width="80" class="w3-circle">
                <img src="carousel/img/SAFE.jpeg" alt="Safe software and integrated solutions"  height="80" width="80" class="w3-circle">


            </div>
        </div>



        <div class="w3-row-padding w3-padding-16 w3-white w3-hide-small w3-hide-medium">
            <h1 style="margin-top:20px;">Partenaires</h1>
            <div id="wrap" style="overflow-y: scroll">
                <div id="showcase" class="noselect">
                    <img class="cloud9-item" src="carousel/img/PRIZMAACADEMY.jpeg" alt="Prizma academy" id="pa"
                         style="height: 210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/YELA.jpg" alt="Yela" style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/GEC.jpg" alt="GEC" style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/IM2.png" alt="IM2" style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/ITECHGroup.png" alt="ITECH Group"
                         style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/CMRIT.png" alt="CRM" style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/SHALOM.jpg" alt="SHALOM" style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/COMIB.jpg" alt="Comib" style="height:  210px;width: 210px">
                    <img class="cloud9-item" src="carousel/img/SAFE.jpeg" alt="Safe software and integrated solutions"
                         style="height:  210px;width: 210px">

                </div>
                <p id="item-title" style="text-transform: uppercase">prizma academy</p>


            </div>


        </div>






        <?php include "./Footer.php"; ?>


    </section>


    <!---------------------------------------Javascript------------------------------------------------------------------------------------------------------------------------>
    
    <!-- submit button js-->




    <script src="js/prpgress_btn_classie.js"></script>
    <script src="js/progressButton.js"></script>
    <script>
                    [].slice.call(document.querySelectorAll('button.progress-button')).forEach(function (bttn) {

                        new ProgressButton(bttn, {
                            callback: function (instance) {
                                var xhttp = new XMLHttpRequest();

                                var myTextarea = document.getElementById("myTextarea").value;
                                var subject = document.getElementById("subject").value;
                                var email = document.getElementById("email").value;
                                var nom = document.getElementById("nom").value;


                                var data = "myTextarea=" + myTextarea + "&subject=" + subject + "&email=" + email + "&nom=" + nom;



                                var progress = 0;

                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 1)
                                    {
                                        instance._setProgress(0.25);
                                    }
                                    if (this.readyState == 2)
                                    {
                                        instance._setProgress(0.5);
                                    }
                                    if (this.readyState == 3)
                                    {
                                        instance._setProgress(0.75);
                                    }
                                    if (this.readyState == 4 && this.status == 200) {
                                        if (this.responseText == "true")
                                        {
                                            instance._setProgress(1);
                                            instance._stop(1);
                                        }


                                    }
                                };
                                xhttp.open("POST", "SendMail.php", true);
                                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xhttp.send(data);


                                /*interval = setInterval( function() {
                                 progress = Math.min( progress + Math.random() * 0.1, 1 );
                                 instance._setProgress( progress );
                                 
                                 if( progress === 1 ) {
                                 instance._stop(1);
                                 clearInterval( interval );
                                 }
                                 }, 200 );*/

                            }
                        });
                    });
    </script>
    <!--end of submit button js-->

    <script>
        function openLeftMenu() {
            var elem = document.getElementById("leftMenu");
            if (elem.style.display == "none")
                elem.style.display = "block";
            else
                elem.style.display = "none";
        }
        function closeLeftMenu() {
            document.getElementById("leftMenu").style.display = "none";
        }
    </script>

    <!--Emojos js dependencues-->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="lib/js/config.js"></script>
    <script src="lib/js/util.js"></script>
    <script src="lib/js/jquery.emojiarea.js"></script>
    <script src="lib/js/emoji-picker.js"></script>
    <script>

        window.emojiPicker = new EmojiPicker({
            emojiable_selector: '[data-emoji-input=unicode]',
            assetsPath: 'lib/img/',
            popupButtonClasses: 'fa fa-smile-o'
        });
        window.emojiPicker.discover();

    </script>
    <!--end emojis js dependecies-->

    <!--slideshow-->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv() {

            setInterval(function () {
                showDivs(slideIndex);
                plusDivs(1)
            }, 5000);


        }

        function showDivs(n)
        {
            var i;
            var x = document.getElementsByClassName("mySlides");
            //var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            // for (i = 0; i < dots.length; i++) {
            //    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            // }
            x[slideIndex - 1].style.display = "block";
            // dots[slideIndex - 1].className += " w3-opacity-off";
        }
    </script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script>
        !function () {

            var today = moment();

            function Calendar(selector, events) {
                this.el = document.querySelector(selector);
                this.events = events;
                this.current = moment().date(1);
                this.events.forEach(function (ev) {
                    ev.date = moment(ev.date);
                });
                this.draw();
                var current = document.querySelector('.today');
                if (current) {
                    var self = this;
                    window.setTimeout(function () {
                        self.openDay(current);
                    }, 500);
                }

            }

            Calendar.prototype.draw = function () {
                //Create Header
                this.drawHeader();

                //Draw Month
                this.drawMonth();

                this.drawLegend();
            }

            Calendar.prototype.drawHeader = function () {
                var self = this;
                if (!this.header) {
                    //Create the header elements
                    this.header = createElement('div', 'header');
                    this.header.className = 'header';

                    this.title = createElement('h1');

                    var right = createElement('div', 'right');
                    right.addEventListener('click', function () {
                        self.nextMonth();
                    });

                    var left = createElement('div', 'left');
                    left.addEventListener('click', function () {
                        self.prevMonth();
                    });

                    //Append the Elements
                    this.header.appendChild(this.title);
                    this.header.appendChild(right);
                    this.header.appendChild(left);
                    this.el.appendChild(this.header);
                }

                this.title.innerHTML = this.current.format('MMMM YYYY');
            }

            Calendar.prototype.drawMonth = function () {
                var self = this;


                if (this.month) {
                    this.oldMonth = this.month;
                    this.oldMonth.className = 'month out ' + (self.next ? 'next' : 'prev');
                    this.oldMonth.addEventListener('webkitAnimationEnd', function () {
                        self.oldMonth.parentNode.removeChild(self.oldMonth);
                        self.month = createElement('div', 'month');
                        self.backFill();
                        self.currentMonth();
                        self.fowardFill();
                        self.el.appendChild(self.month);
                        window.setTimeout(function () {
                            self.month.className = 'month in ' + (self.next ? 'next' : 'prev');
                        }, 16);
                    });
                } else {
                    this.month = createElement('div', 'month');
                    this.el.appendChild(this.month);
                    this.backFill();
                    this.currentMonth();
                    this.fowardFill();
                    this.month.className = 'month new';
                }
            }

            Calendar.prototype.backFill = function () {
                var clone = this.current.clone();
                var dayOfWeek = clone.day();

                if (!dayOfWeek) {
                    return;
                }

                clone.subtract('days', dayOfWeek + 1);

                for (var i = dayOfWeek; i > 0; i--) {
                    this.drawDay(clone.add('days', 1));
                }
            }

            Calendar.prototype.fowardFill = function () {
                var clone = this.current.clone().add('months', 1).subtract('days', 1);
                var dayOfWeek = clone.day();

                if (dayOfWeek === 6) {
                    return;
                }

                for (var i = dayOfWeek; i < 6; i++) {
                    this.drawDay(clone.add('days', 1));
                }
            }

            Calendar.prototype.currentMonth = function () {
                var clone = this.current.clone();

                while (clone.month() === this.current.month()) {
                    this.drawDay(clone);
                    clone.add('days', 1);
                }
            }

            Calendar.prototype.getWeek = function (day) {
                if (!this.week || day.day() === 0) {
                    this.week = createElement('div', 'week');
                    this.month.appendChild(this.week);
                }
            }

            Calendar.prototype.drawDay = function (day) {
                var self = this;
                this.getWeek(day);

                //Outer Day
                var outer = createElement('div', this.getDayClass(day));
                outer.addEventListener('click', function () {
                    self.openDay(this);
                });

                //Day Name
                var name = createElement('div', 'day-name', day.format('ddd'));

                //Day Number
                var number = createElement('div', 'day-number', day.format('DD'));


                //Events
                var events = createElement('div', 'day-events');
                this.drawEvents(day, events);

                outer.appendChild(name);
                outer.appendChild(number);
                outer.appendChild(events);
                this.week.appendChild(outer);
            }

            Calendar.prototype.drawEvents = function (day, element) {
                if (day.month() === this.current.month()) {
                    var todaysEvents = this.events.reduce(function (memo, ev) {
                        if (ev.date.isSame(day, 'day')) {
                            memo.push(ev);
                        }
                        return memo;
                    }, []);

                    todaysEvents.forEach(function (ev) {
                        var evSpan = createElement('span', ev.color);
                        element.appendChild(evSpan);
                    });
                }
            }

            Calendar.prototype.getDayClass = function (day) {
                classes = ['day'];
                if (day.month() !== this.current.month()) {
                    classes.push('other');
                } else if (today.isSame(day, 'day')) {
                    classes.push('today');
                }
                return classes.join(' ');
            }

            Calendar.prototype.openDay = function (el) {
                var details, arrow;
                var dayNumber = +el.querySelectorAll('.day-number')[0].innerText || +el.querySelectorAll('.day-number')[0].textContent;
                var day = this.current.clone().date(dayNumber);

                var currentOpened = document.querySelector('.details');

                //Check to see if there is an open detais box on the current row
                if (currentOpened && currentOpened.parentNode === el.parentNode) {
                    details = currentOpened;
                    arrow = document.querySelector('.arrow');
                } else {
                    //Close the open events on differnt week row
                    //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
                    if (currentOpened) {
                        currentOpened.addEventListener('webkitAnimationEnd', function () {
                            currentOpened.parentNode.removeChild(currentOpened);
                        });
                        currentOpened.addEventListener('oanimationend', function () {
                            currentOpened.parentNode.removeChild(currentOpened);
                        });
                        currentOpened.addEventListener('msAnimationEnd', function () {
                            currentOpened.parentNode.removeChild(currentOpened);
                        });
                        currentOpened.addEventListener('animationend', function () {
                            currentOpened.parentNode.removeChild(currentOpened);
                        });
                        currentOpened.className = 'details out';
                    }

                    //Create the Details Container
                    details = createElement('div', 'details in');

                    //Create the arrow
                    var arrow = createElement('div', 'arrow');

                    //Create the event wrapper

                    details.appendChild(arrow);
                    el.parentNode.appendChild(details);
                }

                var todaysEvents = this.events.reduce(function (memo, ev) {
                    if (ev.date.isSame(day, 'day')) {
                        memo.push(ev);
                    }
                    return memo;
                }, []);

                this.renderEvents(todaysEvents, details);

                arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 27 + 'px';
            }

            Calendar.prototype.renderEvents = function (events, ele) {
                //Remove any events in the current details element
                var currentWrapper = ele.querySelector('.events');
                var wrapper = createElement('div', 'events in' + (currentWrapper ? ' new' : ''));

                events.forEach(function (ev) {
                    var div = createElement('div', 'event');
                    var square = createElement('div', 'event-category ' + ev.color);
                    var span = createElement('span', '', ev.eventName);

                    div.appendChild(square);
                    div.appendChild(span);
                    wrapper.appendChild(div);
                });

                if (!events.length) {
                    var div = createElement('div', 'event empty');
                    var span = createElement('span', '', 'Pas d\'événement');

                    div.appendChild(span);
                    wrapper.appendChild(div);
                }

                if (currentWrapper) {
                    currentWrapper.className = 'events out';
                    currentWrapper.addEventListener('webkitAnimationEnd', function () {
                        currentWrapper.parentNode.removeChild(currentWrapper);
                        ele.appendChild(wrapper);
                    });
                    currentWrapper.addEventListener('oanimationend', function () {
                        currentWrapper.parentNode.removeChild(currentWrapper);
                        ele.appendChild(wrapper);
                    });
                    currentWrapper.addEventListener('msAnimationEnd', function () {
                        currentWrapper.parentNode.removeChild(currentWrapper);
                        ele.appendChild(wrapper);
                    });
                    currentWrapper.addEventListener('animationend', function () {
                        currentWrapper.parentNode.removeChild(currentWrapper);
                        ele.appendChild(wrapper);
                    });
                } else {
                    ele.appendChild(wrapper);
                }
            }

            Calendar.prototype.drawLegend = function () {
                var legend = createElement('div', 'legend');
                var calendars = this.events.map(function (e) {
                    return e.calendar + '|' + e.color;
                }).reduce(function (memo, e) {
                    if (memo.indexOf(e) === -1) {
                        memo.push(e);
                    }
                    return memo;
                }, []).forEach(function (e) {
                    var parts = e.split('|');
                    var entry = createElement('span', 'entry ' + parts[1], parts[0]);
                    legend.appendChild(entry);
                });
                this.el.appendChild(legend);
            }

            Calendar.prototype.nextMonth = function () {
                this.current.add('months', 1);
                this.next = true;
                this.draw();
            }

            Calendar.prototype.prevMonth = function () {
                this.current.subtract('months', 1);
                this.next = false;
                this.draw();
            }

            window.Calendar = Calendar;

            function createElement(tagName, className, innerText) {
                var ele = document.createElement(tagName);
                if (className) {
                    ele.className = className;
                }
                if (innerText) {
                    ele.innderText = ele.textContent = innerText;
                }
                return ele;
            }
        }();

        !function () {
            var data = [
                {
                    eventName: 'Assemblée générale de mi-mandant ',
                    calendar: 'Travail',
                    color: 'orange',
                    date: '2018-10-14'
                },
                {
                    eventName: 'Collecte des informations pour le site et l’App',
                    calendar: 'Travail',
                    color: 'orange',
                    date: '2018-07-21'
                },
                {
                    eventName: 'Confection des cartes de membres et consulaires',
                    calendar: 'Travail',
                    color: 'orange',
                    date: '2018-07-22'
                },
                {
                    eventName: 'Confection de l’application et site internet',
                    calendar: 'Travail',
                    color: 'orange',
                    date: '2018-07-26'
                },
                {
                    eventName: 'Début des visites dans les commissariats',
                    calendar: 'Travail',
                    color: 'orange',
                    date: '2018-08-20'
                },
                {
                    eventName: 'Début des visites dans les commissariats',
                    calendar: 'Travail',
                    color: 'orange',
                    date: '2018-09-02'
                },
                {eventName: 'Formations', calendar: 'Travail', color: 'orange', date: '2018-09-22'},
                {eventName: 'Assemblées Générale', calendar: 'Travail', color: 'orange', date: '2018-09-14'},
                {eventName: 'Assemblées Générale', calendar: 'Autres', color: 'green', date: '2019-03-09'},

                {eventName: 'Tournois', calendar: 'Sports', color: 'blue', date: '2018-07-29'},
                {eventName: 'Game vs Houston', calendar: 'Sports', color: 'blue', date: '2018-06-19'},
                {eventName: 'Game vs Denver', calendar: 'Sports', color: 'blue', date: '2014-02-04'},
                {eventName: 'Game vs San Degio', calendar: 'Sports', color: 'blue', date: '2014-02-01'},

                {
                    eventName: 'Audience avec Monsieur l\'ambassadeur à New Delhi',
                    calendar: 'Officiel',
                    color: 'yellow',
                    date: '2018-07-24'
                },
                {
                    eventName: 'Célébration de l’indépendance à Bangalore le 20 août',
                    calendar: 'Officiel',
                    color: 'yellow',
                    date: '2018-08-04'
                },
                {eventName: 'Pick up from Soccer Practice', calendar: 'Officiel', color: 'yellow', date: '2014-03-31'},
                {eventName: 'Ice Cream Night', calendar: 'Officiel', color: 'yellow', date: '2014-02-20'},

                {eventName: 'Tournées du président', calendar: 'Autres', color: 'green', date: '2018-07-28'},
                {eventName: 'Freshers days', calendar: 'Autres', color: 'green', date: '2018-09-23'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2018-12-15'},
                {eventName: 'Plus d\'infos ultérieurement', calendar: 'Autres', color: 'green', date: '2018-12-16'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2018-12-26'},
                {eventName: 'Sortie détente', calendar: 'Autres', color: 'green', date: '2018-12-30'},
                {eventName: 'Visites de zones', calendar: 'Autres', color: 'green', date: '2019-01-06'},
                {eventName: 'Don', calendar: 'Autres', color: 'green', date: '2019-01-13'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2019-02-03'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2019-02-10'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2019-02-16'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2019-02-17'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2019-02-24'},
                {eventName: 'Plus d\'infos  ultérieurement', calendar: 'Autres', color: 'green', date: '2019-03-17'}


            ];


            var calendar = new Calendar('#calendar', data);

        }();


    </script>
    <script src="js/dropdown.js"></script>
    <script>
        setTimeout(function () {
            document.getElementById('message').style.display = 'none';
        }, 2000);


    </script>



    <script>

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
                window.location.href = "essay.php";
                // document.getElementById("bd").style.opacity="1";



                return false;
            }
        }


        /*
         function nightModeOn() {
         var days = document.getElementsByClassName('night');
         var alwaysBlack = document.getElementsByClassName("alwaysBlack");
         
         if (document.getElementById("dn").innerHTML == "Night")
         {
         document.getElementById("dn").innerHTML = "Day";
         for (i = 0; i < days.length; i++) {
         days[i].classList.replace("w3-light-gray", "w3-black");
         document.body.classList.remove("w3-light-gray");
         document.body.classList.add("w3-black");
         document.body.style.color = "grey";
         
         }
         
         
         }
         else {
         document.getElementById("dn").innerHTML = "Night";
         for (i = 0; i < days.length; i++) {
         days[i].classList.replace("w3-black", "w3-light-gray");
         document.body.classList.remove("w3-black");
         document.body.classList.add("w3-light-gray");
         document.body.style.color = "black";
         
         }
         for (i = 0; i < alwaysBlack.length; i++) {
         alwaysBlack[i].classList.add("w3-black");
         
         }
         
         
         }
         
         
         }*/


        function showHide() {
            var e = document.getElementById("occupation");
            var strUser = e.options[e.selectedIndex].value;
            if (strUser == "Étudiant") {
                document.getElementById("et").style.display = 'block';
                document.getElementById("au").style.display = 'none';
                document.getElementById("m1").removeAttribute("required");
                if (!document.getElementById("e1").hasAttribute("required")) {
                    document.getElementById("e1").setAttribute("required");
                    document.getElementById("e2").setAttribute("required");
                    document.getElementById("e3").setAttribute("required");
                }

            } else if (strUser == "Autres") {
                document.getElementById("au").style.display = 'block';
                document.getElementById("et").style.display = 'none';
                document.getElementById("e1").removeAttribute("required");
                document.getElementById("e2").removeAttribute("required");
                document.getElementById("e3").removeAttribute("required");
                if (!document.getElementById("m1").hasAttribute("required")) {
                    document.getElementById("m1").setAttribute("required");
                }
            }
        }


        function checkContact(textInput) {
            var inputtxt = document.getElementById(textInput).value;
            var phoneno = /[a-z|A-Z]/g;
            if (inputtxt.match(phoneno)) {
                inputtxt.slice(0, -1);
                document.getElementById(textInput).value = inputtxt.slice(0, -1);

            }

        }


        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                } else if (e) {
                    var charCode = e.which;
                } else {
                    return true;
                }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))
                    return true;
                else
                    return false;
            } catch (err) {
                alert(err.Description);
            }
        }

        var inputs = document.querySelectorAll('.inputfile');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                    labelVal = label.innerHTML;

            input.addEventListener('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });
        });

        function changeText() {
            var language = document.getElementById("text");
            if (language.innerText == "English")
            {
                language.innerHTML = "Français";
            } else
            {
                language.innerHTML = "English";

            }
        }

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-orange", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-orange";
        }

    </script>


    <script src="js/trouver.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy4fGY7Lx0oCTGEyGdxVrLu2wDo9WhG-M&callback=initMap">
    </script>

    <script src="date_time_calendar/jquery.js"></script>
    <script src="date_time_calendar/jquery.datetimepicker.min.js"></script>
    <script>/*
     window.onerror = function(errorMsg) {
     $('#console').html($('#console').html()+'<br>'+errorMsg)
     }*/

        $.datetimepicker.setLocale('fr');

        //$('#datetimepicker_format').datetimepicker({value: '2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
        //$("#datetimepicker_format_change").on("click", function (e) {
        //    $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
        // });
        $("#datetimepicker_format_locale").on("change", function (e) {
            $.datetimepicker.setLocale($(e.currentTarget).val());
        });

        $('#datetimepicker').datetimepicker({
            //theme: 'dark',
            dayOfWeekStart: 1,
            lang: 'en',
            format: 'd/m/Y',
            timepicker: false,
            disabledDates: ['1986/01/08', '1986/01/09', '1986/01/10'],
            startDate: '1986/01/05'
        });

        var logic = function (currentDateTime) {
            if (currentDateTime && currentDateTime.getDay() == 6) {
                this.setOptions({
                    minTime: '11:00'
                });
            } else
                this.setOptions({
                    minTime: '8:00'
                });
        };


    </script>


    <!--end animations-->

    <!--Carousel dependencies-->

    <script src="carousel/js/jquery.cloud9carousel.js"></script>

    <script>
        $(function () {

            var showcase = $("#showcase")

            showcase.Cloud9Carousel({
                yPos: 42,
                yRadius: 48,
                mirrorOptions: {
                    gap: 12,
                    height: 0.2
                },
                buttonLeft: $(".nav > .left"),
                buttonRight: $(".nav > .right"),
                autoPlay: true,
                bringToFront: false,
                onRendered: showcaseUpdated,
                onLoaded: function () {
                    showcase.css('visibility', 'visible')
                    showcase.css('display', 'none')
                    showcase.fadeIn(1500)

                }
            })

            function showcaseUpdated(showcase) {

                var title = $('#item-title').html(
                        $(showcase.nearestItem()).attr('alt')
                        )

                var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
                title.css('opacity', 0.5 + (0.5 * c))
            }

            var i = 1;
            setInterval(function () {
                var titre = ["prizma academy", "Safe software and integrated solutions", "Comib", "SHALOM", "CMR", "ITECH Group", "IM2", "GEC", "Yela"];
                document.getElementById("item-title").innerText = titre[i];
                if (i < titre.length - 1) {
                    i++;
                } else {
                    i = 0;
                }


            }, 4000);


            // Simulate physical button click effect
            $('.nav > button').click(function (e) {
                var b = $(e.target).addClass('down')
                setTimeout(function () {
                    b.removeClass('down')
                }, 80)
            })

            $(document).keydown(function (e) {
                //
                // More codes: http://www.javascripter.net/faq/keycodes.htm
                //
                switch (e.keyCode) {
                    /* left arrow */
                    case 37:
                        $('.nav > .left').click()
                        break

                        /* right arrow */
                    case 39:
                        $('.nav > .right').click()
                }
            })
        })

    </script>
    <!--End of Carousel dependencies-->

    <!-- news carousel script-->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("news");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                x[i].classList.add("w3-animate-bottom");
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }


    </script>
    <!--end of news carousel-->

</body>
</html>

