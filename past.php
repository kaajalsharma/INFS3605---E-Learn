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
        padding-left: 5px;
        padding-top:60px;
        bottom:0;
        display:block;
        position: absolute;
    }

    .containdiv .videocontainer {
        padding-top:160px;
        padding-left: 5px;
        padding-right:360px;
        padding-bottom: 10px;
        bottom:0;
        position:absolute;
        height:100%;
        width:100%;
        display:block;
    }

        .resources {
        padding-top:850px;
        padding-left: 5px;
        padding-right:360px;
        padding-bottom: 10px;
        bottom:0;
        position:absolute;
        height:100%;
        width:100%;
        display:block;
    }

    .containdiv .videocontainer .videowrapper{
        position: relative;
        padding-bottom: 56.25%;
    }

    .containdiv .videocontainer .videowrapper iframe{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
    }

    .containdiv .interactcontainer{
        right:0;
        
        padding-top:220px;

        position:absolute;
        width: 350px;
        height: 748px;
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
        height: 100%;
        width: 350px;
        bottom:0;
        padding-top:100px;
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

    .containdiv .interactcontainer .interactoptions .option ul li a:hover,
    .containdiv .interactcontainer .interactoptions .option ul li a.active{
        background: rgba(220,220,220,0.8);
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
        height:100%;
        width:100%;
        bottom:0;
        padding-top:190px;
        margin-bottom:50px;
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


        table {
            margin:auto;
            border-collapse: collapse;
        }
        th,
        td {
            height: 30px;
            vertical-align: center;
            border: 1px solid black;
            padding-left:5px;
            padding-right: 5px;
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
                <div class="logo">INFS3605 Past Live Sessions</div>
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
                   <iframe src="http://video.ibm.com/embed/recorded/126483529" style="border: 0;" webkitallowfullscreen allowfullscreen frameborder="no" width="480" height="270"></iframe> </div>
            </div>
            

        </div>
    

    
    
    

</body>
</html>