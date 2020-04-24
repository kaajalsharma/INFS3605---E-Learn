<!DOCTYPE html>
<?php include 'student_filesLogic.php';?>
<html>
<head>
        <title>E-Learn Home</title>
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
        background: rgba(220, 220, 255, 0.65);
        color:rgb(124, 124, 255);
        text-align: left;
    }

    .top-container {
            background-color: #ffffff;
            padding: 10px;
        }
        table {
            margin:0;
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
            hr.rounded {
            border-top: 6px solid #bbb;
            border-radius: 5px;
            width:90%;
            margin-bottom:10px;
        }
        hr.rounded2 {
            border-top: 2px solid #bbb;
            border-radius: 5px;
            width:40%;
        }
            .weekcontent .content{
            margin-left:20px;
        }
        .weekcontent .content ul{
            list-style-type: square;
            color:black;
            margin-bottom: 3px;
            display:list-item;
            margin-left:20px;
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

<body>
    

<div class="wrapper">
    <div class="top-container">

        <img src="unsw_elearn_blk.jpg" alt="logo" class="logo" height="50" width="220">
    </div>
    <div class="top_navbar" style="padding-top:80px">
        <div class="top_menu">
            <div class="logo" style="text-align:center">Home</div>
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
                <h4 style="color:#F05E23">
                    <a href="staff_wkspace_session.php" style="color:#F05E23">MyWorkspace</a></h4>
                    <p style="color:#444444">Click to access your workspace to create and monitor content for students</p>
                
            </div>
        </section>
        

        <section class="summaryitems">
            <div class="container">
                <h4 style="color:#F05E23">
                    <a href="get_submission.php" style="color:#F05E23">Recent submissions</a>
                </h4>
                <p style="color:#444444">Click to access recent student submissions</p>
            </div>
        </section>

        <section class="summaryitems">
            <div class="container">
                <h4 style="color:#F05E23">Upcoming Student Submissions</h4>
              
                <p style="color:#444444"> INFS3605 Assignment 1 </p>
               
                <p style="color:#444444">INFS3830 3rd Hands-On Assignment </p>
                
                
                
                
            </div>
        </section>

        </div>
      
        <div class="right">
            <section class = "courses">
                <div class ="content">
                    <a href="student_course_detail_pg1.php" target="_blank" style="color:#F05E23">
                        <h4 style="color:#F05E23">INFS3605</h4>
                    </a>
                    <p style="color:#444444">
                        IS Innovation & Transformation
                    </p>
                    <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3605" target="_blank" style="color:#444444">Course Outline</a>
                </div>
            </section>

            <section class = "courses">
                <div class ="content">
                    <h4 style="color:#F05E23">INFS3617</h4>
                    <p style="color:#444444">
                        Networking & Cyber Security
                    </p>
                    <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3617" target="_blank" style="color:#444444">Course Outline</a>
                </div>
            </section>

            <section class = "courses">
                <div class ="content">
                    <h4 style="color:#F05E23">INFS3830</h4>
                    <p style="color:#444444">
                        Social Media and Analytics
                    </p>
                    <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3830" target="_blank" style="color:#444444">Course Outline</a>
                </div>
            </section>
        </div>
    </div>
 
</div>
</body>
</html>