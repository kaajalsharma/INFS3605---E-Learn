<!DOCTYPE html>
<?php include 'filesLogic.php';?>
<html>
<head>
    <title>Course Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">    
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
    <style>
        .left{
            width:70%;
            float:left;
            background:white;
        }
        .right{
            width:30%;
            height:100%;
            background: #FAFAFA;
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
        .previous{
            height: 150px;
            background: white;
            
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 30px;
            padding:10px;
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
                .top-container {
            background-color: #ffffff;
            padding: 10px;
            border-bottom: 10px solid black;
        }
    </style>
</head>
<div class="top-container">

    <img src="unsw_elearn_blk.jpg" alt="logo" class="logo" height="50" width="220" />
</div>
<body>
<div class="wrapper">
    <div class="top_navbar" style="padding-top:80px">
        <div class="hamburger">
            <li>
                <a href="student_home_pg.php">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </li>
        </div>
        <div class="top_menu">
            <div class="logo">Course Details</div>
            <ul>
                <li>
                    <a href="student_home_pg.php">
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
    <div class="containdiv">
        <div class="left">
            <h2>Your NEXT workshop is coming this Thursday, 10/04/20</h2>
            <hr class="rounded">
            <img src="agile_scrum.png" alt="Agile Scrum" width="60%">
            <div class="weekcontent">
                <br>
                <section class="content">
                    <h3>Week 8 Learning Objectives:</h3>
                    <hr class="rounded2"><br>
                    <h4>Starting Your Sprint</h4><br>
                    <div>
                    <ul>
                        <li>Selecting Agile Scrum Roles</li></ul>
                    <ul>
                        <li>Starting Sprint Planning</li></ul>
                    <ul>
                        <li>Keeping track of progress</li></ul>
                    </div>
                </section>
                <br><br>
                <section class="content">
                    <h3>Learning Materials:</h3>
                    <hr class="rounded2"><br>
                    <div>
                    <table>
                        <tbody>
                        <?php foreach ($files as $file): ?>
                            <tr>
                            <td><?php echo $file['name']; ?></td>
                            <td><?php echo floor($file['size'] / 1000) . ' KB';?></td>
                            <td><a href="student_course_detail_pg.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                            </tr>
                        <?php endforeach;?>

                        </tbody>
                        </table>
                        <br />
                    </div>
                </section>
            </div>          
            
        </div>
      
        <div class="right">
            <section class ="previous">
                <section class="content" style="color: #F05E23">
                    <h4>Week 7: Sprint Ceremonies</h4>

                </section>
                <section class="content">
                <div>
                       <br /> 
                        <ul>
                            <li> - Daily Stand-up</li>
                        </ul>
                        <ul>
                            <li> - Conducting Sprint Review</li>
                        </ul>
                        <ul>
                            <li> - Sprint Retrospective</li>
                        </ul>
                    </div>
                </section>
            </section>
            <section class = "previous">
                <div class="content" style="color: #F05E23">
                    <h4>Week 6: Agile Sprints</h4>
                    </div>
                    <section class="content">
                        <div>
                            <br />
                            <ul>
                                <li> - Phases in a sprint</li>
                            </ul>
                            <ul>
                                <li> - Organising a sprint</li>
                            </ul>
                            <ul>
                                <li> - Measuring success</li>
                            </ul>
                        </div>
                    </section>
                
            </section>
            <section class = "previous">
                <div class="content" style="color: #F05E23">
                    <h4>Week 5: Agile Roles</h4>
                </div>
                <section class="content">
                    <div>
                        <br />
                        <ul>
                            <li> - Product Owner, Scrum Master & Agile Team</li>
                        </ul>
                        <ul>
                            <li> - Responsibility</li>
                        </ul>
                        <ul>
                            <li> - Agile Leadership</li>
                        </ul>
                    </div>
                </section>
            </section>
            <section class = "previous">
                <div class="content" style="color: #F05E23">
                    <h4>Week 4: Agile Scrum</h4>
                </div>
                <section class="content">
                    <div>
                        <br />
                        <ul>
                            <li> - Implementation Methodology</li>
                        </ul>
                        <ul>
                            <li> - What is Agile Scrum?</li>
                        </ul>
                        
                    </div>
                </section>
            </section>
        </div>
    </div>
</div>     
</body>
</html>