
<html>
<head>
    <title>Live Session</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles.css" />
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
    <!-- load api without page delay-->
    <script>
        (function (t, a, l, k, j, s) {
            s = a.createElement('script'); s.async = 1; s.src = "https://cdn.talkjs.com/talk.js"; a.head.appendChild(s)
                ; k = t.Promise; t.Talk = {
                    v: 3, ready: {
                        then: function (f) {
                            if (k) return new k(function (r, e) { l.push([f, r, e]) }); l
                                .push([f])
                        }, catch: function () { return k && new k() }, c: l
                    }
                };
        })(window, document, []);
    </script>
</head>



<style>
    .containdiv{
        width:100%;
        height:100%;
        margin-left: 50px;
        padding-top:60px;
        
        display:block;
        
    }
    .videocontainer{
        padding-top:160px;
        
        padding-right:300px;
        padding-bottom: 10px;
        bottom:0;
        position:absolute;
        height:100%;
        width:100%;
        display:block;
    }
   .videocontainer .videowrapper{
        position: relative;
        padding-bottom: 56.25%;
    }
    .videocontainer .videowrapper iframe{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 90%;
        height: 100%;
    }
    .containdiv .interactcontainer{
        right:0;
        top:20;
        padding-top:80px;
        
        position:absolute;
        width: 350px;
        height: 820px;
        display: block;
    }
    .containdiv .interactcontainer .contentheader{
        height:35px;
        width:350px;
        right:0;
        padding-top:3px;
        text-align: center;
        border:solid;
        border-radius:10px;
        border-color: lightgrey;
        border-width:1px;
        background:rgba(220,220,220,0.8);
    }
    .containdiv .interactcontainer .interactcontent{
        height: 110%;
        width: 350px;
        
        padding-top:60px;
        position:absolute;
        display: flex;
        flex: 0 0 1px;
    }
    .containdiv .interactcontainer .interactoptions{
        width:350px;
        height:50px;
        right:0;
        bottom:0;
        position:absolute;
        background:whitesmoke;
        display: block;
    }
    .containdiv .interactcontainer .interactoptions .option{
        width:172.5px;
        height:50px;
        display: inline-block;
        border:solid;
        border-color: lightgrey;
        border-width:1px;
    }
    .containdiv .interactcontainer .interactoptions .option ul li a{
        padding-top:7px;
        display: block;
        height:49px;
        color: #fff;
        position: relative;
        color: rgb(81,81,206);
        white-space: nowrap;
        align-content: center;
    }
    .wrapper .top_navbar .top_menu ul li a{
        padding-top:8px;}
    .containdiv .interactcontainer .interactoptions .option ul li a:hover .containdiv .interactcontainer .interactoptions .option ul li a.active{
        background: rgb(81,81,206);
        color: white;
        cursor: pointer;
    }
    .containdiv .interactcontainer .interactoptions .option ul li a span.icon{
        margin:0px;
        text-align: center;
        display: block;
    }
    .containdiv .interactcontainer .interactoptions .option ul li a span.title{
        margin:0px;
        text-align: center;
        display:block;
    }
    .containdiv .interactcontainer .interactcontent .chatcontainer{
        height:80%;
        width:100%;
        
        padding-top:40px;
        
        position:absolute;
    }
    .chatscroll{
        background: whitesmoke;
        color: black;
    }
    .containdiv .interactcontainer .interactcontent .quizcontainer{
        height:100%;
        width:100%;
        bottom:0;
        padding-top:145px;
        margin-bottom:50px;
        position:absolute;
    }
    .containdiv .interactcontainer .interactcontent .quizcontainer .quizcontent{
        height:100%;
        width:100%;
        border:solid;
        margin-bottom:50px;
        border-color: lightgrey;
        border-width:1px;
        background:whitesmoke;
    }
    .resources {
        padding-bottom:100px;
        padding-right: 50px;
        text-align:center;
        
        
        position:absolute;
        height:100%;
        width:350px;
        display:block;
    }
    .top-container {
            background-color: #ffffff;
            padding: 10px;
            border-bottom: 10px solid black;
        }
</style>
<div class="top-container">

    <img src="unsw_elearn_blk.jpg" alt="logo" class="logo" height="50" width="220" />
</div>
<body>
    <div class="wrapper">
        <div class="top_navbar" style="padding-top:80px">
            <div class="hamburger">
                <li>
                    <a href="staff_wkspace_session.php">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
            </div>
            <div class="top_menu">
                <div class="logo">Live Session</div>
                <ul>
                    <li>
                        <a href="staff_home_pg.php">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login_page.php">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <div class="containdiv">
            
            <div class="videocontainer">
                <div class="videowrapper">
                    <iframe src="https://video.ibm.com/broadcaster/23856732"></video></iframe>
                </div>
            </div>
           
        
  

           


            <div class="interactcontainer">
                <div id="chat" class="interactcontent">
                    <header class="contentheader">
                        <h2>Chat</h2>
                    </header>
                    <section class="chatcontainer">
                        <div class="chatscroll" id="chatbox"></div>
                    </section>
                </div>
                
            </div>

            <p style="padding-top:670px"> </p>
            
               <div class="resources"> 
                <a href="https://video.ibm.com/broadcaster/poll/23856732" target="_blank">Click here to access Attendance Poll</a><br />
                 <a href="https://video.ibm.com/broadcaster/slides/23856732" target="_blank">Click here to start Slideshare</a>
                <br />
                <br />
            </div> 


        </div>
    

    
    
    
<script>
    Talk.ready.then(function() {
    var me = new Talk.User({
        id: "654321",
        name: "Sebastian",
        email: "Sebastian@example.com"
    });
        
    window.talkSession = new Talk.Session({
        appId: "tbYam5vB",
        me: me
    });
    var other1 = new Talk.User({
        id: "123456",
        name: "Alice",
        email: "alice@example.com"
    });
       
    var other2 = new Talk.User({
        id: "456789",
        name: "Steve",
        email: "steve@example.com"
    });
        var other3 = new Talk.User({
        id: "456780",
        name: "Ansh",
        email: "ansh@example.com"
        });
        var other4 = new Talk.User({
        id: "456781",
        name: "Clara",
        email: "clara@example.com"
        });
        var other5 = new Talk.User({
        id: "456782",
        name: "Stacey",
        email: "stacey@example.com"
        });
        var other6 = new Talk.User({
        id: "456783",
        name: "David",
        email: "david@example.com"
        });
        var other2 = new Talk.User({
        id: "456784",
        name: "Chloe",
        email: "chloe@example.com"
        });
        var other2 = new Talk.User({
        id: "456785",
        name: "Simon",
        email: "simon@example.com"
    });
var conversation = window.talkSession.getOrCreateConversation("CLASS_3605");
    conversation.setParticipant(me);
    conversation.setParticipant(other1);
    conversation.setParticipant(other2);
    conversation.setAttributes({
        photoUrl: "https://demo.talkjs.com/img/11.jpg",
        subject: "INFS3605-H09"
    })
   
        var inbox = talkSession.createInbox({ conversation });
            inbox.mount(document.getElementById("chatbox"));
});
</script>

    <script>
        var video = document.querySelector("#videoElement");
if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
	}
    </script>
</body>
</html>