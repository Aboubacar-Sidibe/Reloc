<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet"  href="../css/admin.css"/>

        <style>

            .msg-header
            {
                border:1px solid #ccc;
                height: 10%;
                display: inline-block;
                background: #e91e63 !important;
            }
            .msg-header-img{
                margin-left: 5%;
                margin-top: 12px;
                margin-bottom: 2px;
                float: left;
            }

            .active
            {
                width: 180px;
                float: left;
                margin-top: -2px;
            }
            .active h4
            {
                font-size: 15px;
                margin-left: 8px;
                color:#fff;

            }

            .active h6
            {
                font-size: 10px;
                margin-left: 10px;
                line-height: 0.5px;
                color:white;
            }
            .header-icons
            {
                width: 120px;
                float: right;
                margin-top: 12px;
                margin-right: 10px;

            }

            .header-icons .fa
            {
                color:white;
                cursor: pointer;
                margin: 10px;
            }
            .msg-bottom
            {
                background: #fff;
                color:#000;
                height: content-box;
                padding: 10px;
                border: 1px solid black;
                position: fixed;
                bottom: 0;
            }

            .msg-bottom i{
                margin: 5px;

            }

            .sendMessageControl
            {
                display: inline-block;
                left: 40%;
                transform: translate(40%);
                border:1px solid black;
                padding: 5px;



            }
            .sendMessageControl input{
                background: transparent;
                outline: none;
                border: none;
            }

            .sendMessageControl input:focus
            {
                outline: none;
            }

            #chatbox
            {
                height: 655.5px;
                min-height: 655.5px;
                overflow-y: scroll;
            }
            .received-chats-img
            {
                display: inline-block;

                float:left;
            }
            .received-msg
            {
                display: inline-block;
                padding: 0 0 0 10px;
                vertical-align: top;
                width: 92%;
            }
            .received-msg-inbox
            {
                width: 52%;
            }
            .received-msg-inbox p
            {
                background: #efefef none repeat 0 0;
                border-radius: 10px;
                color:#646464;
                font-size: 14px;
                margin: 0;
                padding: 5px 10px 5px 12px;
                width: 100%;
            }
            .time,.timeImg
            {
                color:#777;
                display: block;
                font-size: 12px;
            }
            .timeImg
            {
                margin-left: 60px;
            }


            .outgoing-chats
            {
                overflow: hidden;
            }

            .outgoing-chats-msg p
            {
                background: pink none repeat 0 0;
                border-radius: 10px;
                color:#646464;
                font-size: 14px;
                margin: 0;
                padding: 5px 10px 5px 12px;
                width: 100%;
            }
            .outgoing-chats-msg
            {
                float: left;
                width: 46%;
                margin-left: 45%;
            } 
            .outgoing-chats-img
            {
                display: inline-block;
                float: right;
            }
            .chat-container
            {
                position: relative;
                left: 30%;

            }

            #fileButton, #passToUpload {
                visibility: hidden;
                position: absolute;
                z-index: -1;
            }




        </style>

        <title>JSP Page</title>
    </head>
    <body>
        <section class="chat-container w3-card-4"> 
            <div class="w3-top">
                <div class="w3-theme w3-col s12 m7 l5">

                    <div class="msg-header-img">
                        <img  src="../img/img_avatar4.png" class="w3-circle" height="40" width="40"/>
                    </div>

                    <div class="active">
                        <h4>Bienvenue</h4>
                        <h6><i class="fa fa-circle w3-text-green"></i> Online</h6>
                    </div>
                    
                <div class="header-icons">
                    <i class="fa fa-phone"></i>
                    <i class="fa fa-address-book"></i>
                    <i class="fa fa-home"></i>
                </div>
                </div>
            </div>

            <div id="chatbox" class="w3-container w3-col s12 m7 l5 w3-border  w3-padding-16" >
                <br><br>












            </div>


            <div class="msg-bottom  w3-col s12 m7 l5">
                <i class="fa fa-camera"></i>
                <label for="fileButton"><i class="fa fa-file-photo-o"></i></label>
                <i class="fa fa-smile-o"></i>
                <article class="sendMessageControl w3-round-xlarge">
                    <input id="content" type="text" class="form-control"  placeholder="write a message"/>
                    <span onclick="sendOutgoingChat()">
                        <i class="fa fa-paper-plane w3-text-pink"></i>
                    </span>
                </article>


                <input type="file" id="fileButton"> 

            </div>

        </section>

        


        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-database.js"></script>
        <script  src="https://www.gstatic.com/firebasejs/6.3.3/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-storage.js"></script>

        <script>
                        //alert('${sessionScope.customer.username}');
                        const key = '';
                        
                        var msgpage = document.getElementById("chatbox");
                        var months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
                        // Your web app's Firebase configuration
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

                        function  sendOutgoingChat()
                        {
                            const text = document.getElementById("content").value;
                            var date = new Date();
                            const hour = date.getHours();
                            const minutes = date.getMinutes();
                            const month = date.getMonth();
                            const todayDate = date.getDate();
                            const dateString = hour + ":" + minutes + " | " + months[month] + " " + todayDate;
                            const name = 'guess';

                            document.getElementById("content").value = "";

                            messageRef = firebase.database().ref('rooms/-LisWssZm-euDh0eRWm9').push();
                            messageRef.update({
                                content: text,
                                created: dateString,
                                senderId: "-LisWssZm-euDh0eRWm10",
                                senderName: name,
                                mimeType: "text"


                            }, function (error) {
                                if (error)
                                {
                                    console.log(error);
                                } else
                                {
                                    //document.getElementById("deliveryStatus").innerHTML = "<i class='fa fa-check'> sent<i/>";

                                }

                            });
                        }

                        function sendImageMessage(url, contentType, fileName)
                        {
                            var date = new Date();
                            const hour = date.getHours();
                            const minutes = date.getMinutes();
                            const month = date.getMonth();
                            const todayDate = date.getDate();
                            const dateString = hour + ":" + minutes + " | " + months[month] + " " + todayDate;
                            const name = 'guess';


                            messageRef = firebase.database().ref('rooms/-LisWssZm-euDh0eRWm9' + key).push();
                            messageRef.update({
                                content: url,
                                created: dateString,
                                senderId: "-LisWssZm-euDh0eRWm10",
                                senderName: name,
                                mimeType: contentType,
                                fileName: fileName

                            }, function (error) {
                                if (error)
                                {
                                    console.log(error);
                                } else
                                {
                                    //document.getElementById("deliveryStatus").innerHTML = "<i class='fa fa-check'> sent<i/>";

                                }

                            });

                        }


                        //File upload logic
                        fileButton.addEventListener('change', function (e)
                        {
                            //get the file
                            var file = e.target.files[0];

                            // create a storage ref 
                            var storageRef = firebase.storage().ref('photos/' + file.name);
                            //upload file
                            var uploadTask = storageRef.put(file);

                            uploadTask.on('state_changed', function progress(snapshot) {


                            }, function error() {

                            }, function complete() {

                                uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL)
                                {
                                    var url = downloadURL;
                                    var contentType = "";
                                    var fileName = "";
                                    //console.log('File available at: ', downloadURL);

                                    storageRef.getMetadata().then(function (metadata)
                                    {
                                        fileName = metadata.name;
                                        contentType = metadata.contentType;
                                        sendImageMessage(url, contentType, fileName);
                                    }).catch(function (error)
                                    {
                                        // Uh-oh, an error occurred!
                                    });
                                });

                            });

                        });





                        //Message display logic
                        messageRef = firebase.database().ref('rooms/-LisWssZm-euDh0eRWm9');
                        messageRef.on('child_added', function (data) {
                            var childData = data.val();
                            var mimeType = childData["mimeType"];


                            if (mimeType.startsWith("image"))
                            {
                                if (childData["senderId"] == "-LisWssZm-euDh0eRWm10")
                                {
                                    var outgoingMsg = '<div class="outgoing-chats w3-animate-bottom"> <div class="outgoing-chats-msg"> <div class="outgoing-msg-inbox"> <img style=" ;width: 100%" src="' + childData["content"] + 'class="w3-round-large"" />' +
                                            '<span class="time">' + childData["created"] + '<span class="w3-right" id="deliveryStatus"> sent' + '</span></span> </div> </div>' + '<div class="outgoing-chats-img">' +
                                            ' <img  src="../img/img_avatar4.png" class="w3-circle" height="25" width="25" /> </div> </div>';
                                    msgpage.insertAdjacentHTML("beforeend", outgoingMsg);



                                } else
                                {
                                    var receivendMsg = '<div  class="received-chats w3-animate-bottom"><div class="received-chats-img"><img  src="../img/reloq_logo.jpg" class="w3-circle" height="25" width="25" />\n\
                                    </div> <div class="received-msg"> <div class="received-msg-inbox"> <img style="width: 100%" src="' + childData["content"] + 'class="w3-round-large"" />' + '<span class="time">' + childData["created"] + '<span class="w3-right" id="deliveryStatus2">' + '</span></span> </div> </div> </div>';
                                    msgpage.insertAdjacentHTML("beforeend", receivendMsg);
                                }
                            } else if (mimeType.startsWith("audio"))
                            {

                                if (childData["senderId"] == "-LisWssZm-euDh0eRWm10")
                                {
                                    //let blob = new Blob(childData["content"], {type: 'audio/mpeg-3'});
                                    //alert(blob)
                                    //var url = URL.createObjectURL(blob);
                                    // alert(url);

                                    //var url = URL.createObjectURL(childData["content"]);

                                    //creating an audio tag and add to message view.
                                    var audioMsg =
                                            '<div class="outgoing-chats w3-animate-bottom" >\n\
                                      <div class="outgoing-chats-msg" >\n\
                                        <div class="outgoing-msg-inbox">\n\
                                          <p style="background: transparent none repeat 0 0;"><audio  src=' + childData["content"] + ' controls></audio></p>\n\
                                            <span class="time"> 11:50 |  7 august<span class="w3-right" id="deliveryStatus"> sent</span></span>\n\
                                        </div>\n\
                                      </div>\n\
                                      <div class="outgoing-chats-img">\n\
                                      <img  src="../img/img_avatar4.png" class="w3-circle" height="25" width="25" />\n\
                                      </div>\n\
                                   </div> ';

                                    msgpage.insertAdjacentHTML("beforeend", audioMsg);



                                } else
                                {
                                    var receivendMsg = '<div  class="received-chats w3-animate-bottom"><div class="received-chats-img"><img  src="../img/reloq_logo.jpg" class="w3-circle" height="25" width="25" />\n\
                                    </div> <div class="received-msg"> <div class="received-msg-inbox"> <img style="width: 100%" src="' + childData["content"] + 'class="w3-round-large"" />' + '<span class="time">' + childData["created"] + '<span class="w3-right" id="deliveryStatus2">' + '</span></span> </div> </div> </div>';
                                    msgpage.insertAdjacentHTML("beforeend", receivendMsg);
                                }
                            } else
                            {
                                if (childData["senderId"] == "-LisWssZm-euDh0eRWm10")
                                {
                                    var outgoingMsg = '<div class="outgoing-chats w3-animate-bottom"> <div class="outgoing-chats-msg"> <div class="outgoing-msg-inbox"> <p>' + childData["content"] + '</p>' +
                                            '<span class="time">' + childData["created"] + '<span class="w3-right" id="deliveryStatus"> sent' + '</span></span> </div> </div>' + '<div class="outgoing-chats-img">' +
                                            ' <img  src="../img/img_avatar4.png" class="w3-circle" height="25" width="25" /> </div> </div>';
                                    msgpage.insertAdjacentHTML("beforeend", outgoingMsg);



                                } else
                                {
                                    var receivendMsg = '<div  class="received-chats w3-animate-bottom"><div class="received-chats-img"><img  src="../img/reloq_logo.jpg" class="w3-circle" height="25" width="25" />\n\
                                    </div> <div class="received-msg"> <div class="received-msg-inbox"> <p> ' + childData["content"] + '</p>' + '<span class="time">' + childData["created"] + '<span class="w3-right" id="deliveryStatus2">' + '</span></span> </div> </div> </div>';
                                    msgpage.insertAdjacentHTML("beforeend", receivendMsg);
                                }
                            }

                        });




                        // voice record logic
                        var cancel = false;
                        var cancelBtn = document.getElementById("cancel");
                        navigator.mediaDevices.getUserMedia({audio: true})
                                .then(stream => {
                                    handlerFunction(stream);
                                })


                        function handlerFunction(stream) {
                            rec = new MediaRecorder(stream);
                            rec.ondataavailable = e => {
                                audioChunks.push(e.data);
                                if (rec.state == "inactive" && cancel != true) {
                                    let blob = new Blob(audioChunks);
                                    //alert(blob)
                                    //var file = new File([blob], "si.mp3", {type: 'audio/mpeg-3'});
                                    var url = URL.createObjectURL(blob);
                                    //alert(url);

                                    //creating an audio tag and add to message view.
                                    var audioMsg =
                                            '<div class="outgoing-chats w3-animate-bottom" >\n\
                                      <div class="outgoing-chats-msg" >\n\
                                        <div class="outgoing-msg-inbox">\n\
                                          <p style="background: transparent none repeat 0 0;"><audio  src=' + url + ' controls></audio></p>\n\
                                            <span class="time"> 11:50 |  7 august<span class="w3-right" id="deliveryStatus"> sent</span></span>\n\
                                        </div>\n\
                                      </div>\n\
                                      <div class="outgoing-chats-img">\n\
                                      <img  src="../img/img_avatar4.png" class="w3-circle" height="25" width="25" />\n\
                                      </div>\n\
                                   </div> ';

                                    msgpage.insertAdjacentHTML("beforeend", audioMsg);

                                    //sendAudioData(file);
                                } else
                                {
                                    alert("recording cancel");
                                }
                            }
                        }
                        //sending audio to server
                        function sendAudioData(file) {
                            // create a storage ref 
                            var storageRef = firebase.storage().ref('audio/' + file.name);
                            //upload file
                            var uploadTask = storageRef.put(file);

                            uploadTask.on('state_changed', function progress(snapshot) {


                            }, function error() {

                            }, function complete() {

                                uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL)
                                {
                                    var url = downloadURL;
                                    var contentType = "";
                                    var fileName = "";
                                    //console.log('File available at: ', downloadURL);

                                    storageRef.getMetadata().then(function (metadata)
                                    {
                                        fileName = metadata.name;
                                        contentType = metadata.contentType;
                                        alert(downloadURL);
                                        sendImageMessage(url, contentType, fileName);
                                    }).catch(function (error)
                                    {
                                        // Uh-oh, an error occurred!
                                    });
                                });

                            });
                        }

                        record.onclick = e => {
                            console.log('I was clicked');
                            record.disabled = true;
                            record.style.backgroundColor = "blue";
                            stopRecord.disabled = false;
                            audioChunks = [];
                            rec.start();
                        }
                        stopRecord.onclick = e => {
                            console.log("sending...");
                            cancel = false;
                            record.disabled = false;
                            stop.disabled = true;
                            record.style.backgroundColor = "red"
                            rec.stop();
                        }

                        cancelBtn.onclick = e => {
                            console.log("canceled click")
                            record.disabled = false;
                            stop.disabled = true;
                            record.style.backgroundColor = "red";
                            cancel = true;
                            rec.stop();
                        }

        </script>
    </body>
</html>
