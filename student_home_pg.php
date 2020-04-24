<!DOCTYPE html>

<html>
<head>
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
</head>

<style>
    .courses .content a{
        color: blue;
        
    }

    .courses .content{
        margin-left:10px;
        margin-right: 10px;
    }

    h4{
        padding-top:10px;
        font-size: 20px;
        padding-bottom: 5px;
    }

    .container{
        text-align: center;
    }

    .container a{
        color:blue;
        
    }

    .container .content{
        margin-left: 10px;
        margin-right: 10px;
        padding:10px;
        background: #FAFAFA;
        color:rgb(124, 124, 255);
        text-align: left;
    }

    .top-container {
            background-color: #ffffff;
            padding: 10px;
            border-bottom: 10px solid black;
        }
    a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}

</style>
<div class="top-container">

        <img src="unsw_elearn_blk.jpg" alt="logo" class="logo" height="50" width="220">
    </div>
<body>
<div class="wrapper" style="background-color:#FAFAFA">
    
    <div class="top_navbar"style="padding-top:80px">
        <div class="top_menu">
            <div class="logo">Home</div>
            <ul>
                <li><a href="#">
                    <i class="fas fa-cog"></i></a></li>
                <li><a href="#">
                    <i class="far fa-user"></i></a></li>
                <li><a href="login_page.php">
                    <i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </div>


    <div class="containdiv">
        <div class="left">
        <section class="summaryitems">
            <div class="container">
                
                
            <h4 style="color:#F05E23"><a href="student_workspace_session.php" style="color:#F05E23">MyWorkspace</a></h4>
                <p style="color:#444444">Click here to access your workspace material</p>
            </div>
        </section>
        

        <section class="summaryitems">
            <div class="container">
            <h4 style="color:#F05E23">Announcements</h4>
                 <p style="color:#444444">INFS3605: Individual Assignment Extension </p>
                    <p style="color:#444444">INFS3617: Please complete the 'My Experience Survey'</p>
            </div>
        </section>

        <section class="summaryitems">
            <div class="container">
                <h4 style="color:#F05E23">Your Upcoming Submissions</h4>
                
                    <p style="color:#444444">INFS3605: Assignment 1 </p>
                    <p style="color:#444444">INFS3830: 3rd Hands-On Assignment</p>
                
            </div>
        </section>

        </div>
      
        <div class="right">
            <section class = "courses">
                <div class ="content">
                <a href="student_course_detail_pg.php" target="_blank" style="color:#F05E23">
                    <h4 style="color:#F05E23">INFS3605</h4></a>
                    <p style="color: #444444">
                    IS Innovation & Transformation
                    </p>
                    <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3605" target="_blank" style="color: #444444">Course Outline</a>
                </div>
            </section>

            <section class = "courses">
                <div class ="content">
                    <h4 style="color:#F05E23">INFS3617</h4>
                    <p style="color: #444444">
                    Networking & Cyber Security
                    </p>
                    <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3617" target="_blank" style="color: #444444">Course Outline</a>
                </div>
            </section>

            <section class = "courses">
                <div class ="content">
                <h4 style="color:#F05E23">INFS3830</h4>
                <p style="color: #444444">
                Social Media and Analytics
                </p>
                <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3830" target="_blank" style="color: #444444">Course Outline</a>
                </div>
            </section>
        </div>
    </div>
 
</div>
</body>
</html>