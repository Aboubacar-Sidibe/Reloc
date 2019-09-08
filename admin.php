<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/w3.css"/>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="/js/themes/gray.js"></script>



    <title>RELOQ</title>
    <style>
        #fileButton {
            opacity: 0;
            position: absolute;
            z-index: -1;
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

        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }

        /* Responsive navigation menu (for mobile devices) */
        @media screen and (max-width: 600px) {
            #notifBar {
                margin-left: 0;

            }
            #notifications
            {
                margin-left: -250px;

                width:80%;
            }





        }

        .col-container {
            display: table;
            width: 100%;
        }
        .col {
            display: table-cell;
            padding: 1px
        }

        #volume 
        {
            border: none;
            border-bottom: 1px solid black;
        }
        #volume:focus
        {
            outline: none;
        }

        .thumb {
            height: 75px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
        }

        body{
            background: #22283F;
        }

    </style>

    <body>

        <!--left menu-->
        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left dashboar-bg"  style="display:none" id="leftMenu">

            <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large w3-text-white w3-border-bottom w3-margin-bottom">Fermer</button>

            <a href="#" onclick="myAccFunc('addCategory')" class="w3-bar-item w3-button w3-theme-d2 w3-hover-d2"><img class="w3-circle w3-center" src="img/img_avatar4.png" alt="grace"  width="30"> Bonjour Karine<i class="fa fa-caret-down w3-right"></i></a>

            <!--Menu accordion-->
            <div id="demoAcc" class="w3-hide w3-theme-d5">

                <!--
                <p>
                <a href="#" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-envelope"></i>    Messages</a>
                </p>
        
                <p>
                <a href="#" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-cog"></i>    Settings</a>
                </p>
                -->
                <p>
                    <a href="./AdminLogout" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-power-off"></i> Logout</a>
                </p>
            </div>
            <!-- End of Menu accordion-->

            <br>


            <!--Menu accordion-->
            <div id="demoAcc2" class=" w3-theme-d3">
                <!--
                <p>
                    <a href="#" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-tint"></i>   Items</a>
                </p>-->




                <p>
                    <a  href="messaging/AdminChatting.php" target="_blank" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-plus"></i>  Message <sup><span class="w3-green" style="padding: 2px">Instant</span></sup></a>
                </p>
                <p>
                    <a  href="itemsRelated/modifyItems.php" target="_blank" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-minus"></i>    Ecrire blog <sup><span class="w3-red" style="padding: 2px">new</span></sup></a>
                </p>
                <p>
                    <a href="https://analytics.google.com/analytics/web/#/report-home/a114501583w170360432p170189261" target="_blank" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-bar-chart-o"></i> Analytics</a>
                </p>
                <!--
                <p>
                    <a href="#" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-edit"></i>   Modifier Article</a>
                </p>
                <p>
                    <a href="#" class="w3-bar-item w3-button w3-hover-d2"><i class="fa fa-user"></i>   Utilisateurs</a>
                </p>
                -->
            </div>
            <!-- End of Menu accordion-->
            <!--
        <p>
            <a href="#" class="w3-bar-item w3-button w3-hover-d2 w3-green"><i class="fa fa-tachometer"></i> Analyse du site</a>
        </p>-->
        </div>
        <!--left menu-->



        <div class="dashboar-bg">
            <button class="w3-button w3-text-white  w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
            <button class="w3-button  w3-text-white  w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>

            <div id="notifBar" class="w3-bar" style="margin-left: 40%">

                <a href="messaging/AdminChatting.php" class="w3-bar-item w3-button  w3-hover-title-bg"><i class="fa fa-envelope-o w3-text-white " style="font-size:24px"></i> <sup class="w3-red  w3-text-white" style="position: relative;top:-15px;padding: 2px">4</sup></a>

                <div class="w3-dropdown-click">

                    <button class="w3-button w3-hover-title-bg" onclick="showHideNotifications()">
                        <i class="fa fa-bell w3-text-white " style="font-size:24px"></i><sup id='notificationsCount' class="w3-orange w3-text-white" style="position: relative;top:-15px;padding: 2px"></sup>
                    </button>

                    <div id="notifications" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-opacity w3-margin-right">
                        <header class="w3-border-bottom w3-padding w3-red">
                            <a>Notifications</a>
                            <a href='#' class='w3-right'>Tout Supprimer</a>
                        </header>




                    </div>
                </div>
                <a href="#" class="w3-bar-item w3-button  w3-hover-title-bg"><i class="fa fa-flag-checkered w3-text-white " style="font-size:24px"></i><sup class="w3-green w3-text-white" style="position: relative;top:-15px;padding: 2px">6</sup></a>


            </div>





        </div>



        <div class="w3-row">
            <section class="w3-theme w3-container w3-margin">
                <p>Bienvenue, Karine</p>
            </section>
            <section class="w3-row-padding w3-margin-bottom w3-center">

                <div class=" w3-col s12 l3">
                    <article class="w3-card w3-theme  ">
                        <header><h4>Utilisateurs</h4></header>
                        <p>54</p>
                        <p class="w3-text-red">Nombre total de visiteurs</p>
                    </article>
                </div>
                <div class=" w3-col s12 l3">
                    <article class=" w3-card w3-theme ">
                        <header><h4>Utilisateurs</h4></header>
                        <p>6 <i class="fa fa-arrow-up w3-text-green w3-margin-left"> +2.75</i></p>
                        <p class="w3-text-red">Nombre total de visiteurs enrigistrés</p>
                    </article>
                </div>

                <div class=" w3-col s12 l3">
                    <article class="w3-card w3-theme">
                        <header><h4>Nombre de blogs</h4></header>
                        <p>17</p>
                        <p class="w3-text-red">Nombre total de blog</p>
                    </article>
                </div>

            </section>

            <section class="w3-row-padding">
                <table id="CustomersTable" class="w3-text-theme w3-col l6">

                </table>

                <div id="container" class="w3-theme w3-col l6"></div>


            </section>


        </div>


        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-database.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-storage.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#config-web-app -->

        <script>
                        var firebaseConfig = {
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
                        var database = firebase.database();



                        document.addEventListener('DOMContentLoaded', function () {

                            Highcharts.theme = {
                                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
                                    '#FF9655', '#FFF263', '#6AF9C4'],
                                chart: {
                                    backgroundColor: {
                                        linearGradient: [0, 0, 500, 500],
                                        stops: [
                                            [0, 'rgb(19, 22, 50)'],
                                            [1, 'rgb(19, 22, 50)']
                                        ]
                                    },
                                },
                                title: {
                                    style: {
                                        color: '#97999f',
                                        font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                                    }
                                },
                                subtitle: {
                                    style: {
                                        color: '#666666',
                                        font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
                                    }
                                },

                                legend: {
                                    itemStyle: {
                                        font: '9pt Trebuchet MS, Verdana, sans-serif',
                                        color: 'lightgray'
                                    },
                                    itemHoverStyle: {
                                        color: 'gray'
                                    }
                                }
                            };
                            Highcharts.setOptions(Highcharts.theme);

                            var myChart = Highcharts.chart('container', {
                                chart: {
                                    type: 'bar'
                                },
                                title: {
                                    text: 'comportement des visiteurs'
                                },
                                xAxis: {
                                    categories: ['Visiteurs']
                                },
                                yAxis: {
                                    title: {
                                        text: 'diagram visiteurs'
                                    }
                                },
                                series: [{
                                        name: 'Nom Enregistrés',
                                        data: [54]
                                    }, {
                                        name: 'Enregistrés',
                                        data: [6]
                                    }]
                            });




                        });




                        //Listen to new user added and update table showing list of customers
                        database.ref("Reloc/Users").on('value', function (snapshot)
                        {

                            var table = document.getElementById("CustomersTable");
                            table.innerHTML = "<thead> <tr class='w3-theme w3-padding'> <th>Pays</th>  <th>Email</th> <th>Inscrire au newsletter</th> <th>Contact</th> <th>Nom et prenom</th> </tr> </thead>";
                            snapshot.forEach(function (childSnapshot) {
                                var tr = document.createElement("TR");
                                tr.setAttribute("class", "w3-theme");
                                //var Childkey = childSnapshot.key;
                                var childData = childSnapshot.val();
                                for (var key in childData)
                                {
                                    if (key != "date")
                                    {
                                        var td = document.createElement("TD");
                                        td.setAttribute("class", "w3-padding w3-center");
                                        var tdContent = document.createTextNode(childData[key]);
                                        td.appendChild(tdContent);
                                        if (childData[key] == false)
                                        {
                                            td.classList.add("w3-red");
                                        } else if (childData[key] == true)
                                        {
                                            td.classList.add("w3-green");
                                        }
                                        tr.appendChild(td);
                                    }


                                }
                                table.appendChild(tr);
                                //alert(key + " " + childData[key]);

                            });
                        });

                        //Listen to new notifications
                        var notificationsCount;
                        database.ref("Reloc/Users").on('value', function (snapshot) {
                            var notificationsCount = 0;
                            var rootNotification = document.getElementById("notifications");
                            rootNotification.innerHTML = "<header class='w3-border-bottom w3-padding w3-red'> <a>Notifications</a><a href='#' class='w3-right w3-hide-small w3-right'>Tout Supprimer</a></header>";

                            snapshot.forEach(function (childSnapshot) {
                                notificationsCount++;


                                var childData = childSnapshot.val();


                                var article = document.createElement("ARTICLE");
                                article.setAttribute("class", "w3-row col-container w3-bar-item  w3-theme-d4 w3-border-bottom w3-hover-theme");

                                var div1 = document.createElement("div");
                                div1.setAttribute("class", "w3-col col l2");

                                var img = document.createElement("img");
                                img.setAttribute("class", "w3-round-xxlarge w3-hide-small");
                                img.src = "img/img_avatar4.png";
                                img.height = "50";
                                img.width = "50";

                                div1.appendChild(img);
                                article.appendChild(div1);

                                var div2 = document.createElement("div");
                                div2.setAttribute("class", "w3-col col l8");
                                div2.innerHTML = "<strong>" + childData["username"] + "</strong>" + " a créé son compte";
                                article.appendChild(div2);

                                var div3 = document.createElement("div");
                                div3.setAttribute("class", "w3-col col l2 w3-padding w3-hide-small w3-small");
                                div3.innerHTML = childData["date"].split(" à ")[0];
                                article.appendChild(div3);


                                rootNotification.appendChild(article);

                            });
                            document.getElementById("notificationsCount").innerHTML = notificationsCount;
                        });

                        function playAudioNotification()
                        {
                            var myAudio = document.createElement('audio');
                            myAudio.controls = false;
                            myAudio.src = 'audio/notif.mp3';
                            myAudio.play();
                        }


                        var ignoreItems = false;

                        database.ref("AdminNotifications").on("child_added", function () {
                            if (ignoreItems)
                            {
                                playAudioNotification();
                            }

                        });

                        database.ref("AdminNotifications").endAt().limitToLast(1).once("child_added", function () {
                            ignoreItems = true;
                            console.log("at once " + ignoreItems);

                        });


                        database.ref("AdminNotifications").on("child_changed", function (data) {
                            playAudioNotification();
                        });





                        function showHideNotifications() {
                            var x = document.getElementById("notifications");
                            if (x.className.indexOf("w3-show") == -1) {
                                x.className += " w3-show";
                            } else {
                                x.className = x.className.replace(" w3-show", "");
                            }
                        }










        </script>

        <script>
            function openLeftMenu() {
                document.getElementById("leftMenu").style.display = "block";
            }
            function closeLeftMenu() {
                document.getElementById("leftMenu").style.display = "none";
            }

            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }
            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }

            function showHideSection(sectionId)
            {
                var x = document.getElementsByClassName("sectionToHide");
                var i;
                for (i = 0; i < x.length; i++)
                {
                    x[i].style.display = "none";
                }
                document.getElementById(sectionId).style.display = "block";
            }

            function myAccFunc() {
                var x = document.getElementById("demoAcc");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

            function myAccFunc2() {
                var x = document.getElementById("demoAcc2");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }


            function autoSave()
            {

                var req;
                var username = document.getElementById("username").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                var type = document.getElementById("type").value;
                var password = document.getElementById("password").value;
                var dataform = "username=" + username + "&email=" + email + "&phone=" + phone + "&type=" + type + "&password=" + password;
                if (window.XMLHttpRequest)
                {
                    req = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    req = new ActiveXObject("Microsoft.XMLHTTP");
                } else
                {
                    alert("Ajax not supported");
                }

                req.onreadystatechange = function ()
                {
                    if (req.readyState == 4 && req.status == 200)
                    {
                        var res = this.responseText;
                        if (res == "true")
                        {
                            //alert(res);
                            document.getElementById("msg").innerHTML = "sauvegarde automatique";
                        } else
                        {
                            document.getElementById("sauvegardeError").innerText = "Erreur de Sauvegarde automatique. Essayer en cliquant sur modifier 🙍";
                        }

                    }
                }

                req.open("POST", "./ModifyAdmin", true);
                req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                req.send(dataform);
            }



            /*
             function saveCategories()
             {
             
             var xhttp = new XMLHttpRequest();
             var categorie = document.getElementById("categorie").value;
             var souscategories = document.getElementById("souscategories").value;
             var x = document.getElementById("ddlViewBy");
             var option = document.createElement("option");
             option.text = categorie;
             option.value = categorie;
             x.add(option);
             var data = "categorie=" + categorie + "&souscategories=" + souscategories;
             //document.getElementById("otpForm").style.display = "block";
             xhttp.onreadystatechange = function ()
             {
             if (this.readyState == 4 && this.status == 200)
             {
             document.getElementById("feedback").innerHTML = this.responseText;
             setTimeout(function () {
             document.getElementById("feedback").style.display = 'none';
             }, 3000);
             } else
             {
             document.getElementById("feedback").innerHTML = this.responseText;
             }
             };
             xhttp.open("POST", "./CategoryController", true);
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send(data);
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
             });*/

        </script>






    </body>
</html>