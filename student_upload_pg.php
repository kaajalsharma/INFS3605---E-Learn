<!DOCTYPE html>
<html>
<head>
    <title>Assignment Submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>

    <style>
        .containdiv{
            margin-left: 150px;
            margin-right: 150px;
            padding-top: 10px;
            width:calc(100%-160px);
            height:100%;
            display:block;
        }

        h2{
            margin-top: 10px;
            margin-bottom:20px;
        }

        input[type=text]{
            margin-left:0;
            display:block;
            margin-bottom:10px;
            border: 1px solid #F05E23;
        }

        button{
            background-color:  #F05E23;
            margin-bottom:20px;
        }

        .upload{
            display:block;
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
            <div class="logo">Assignment Submission</div>
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

    <div class="sidebar">
        <ul>
            <li>
                <a href="student_workspace_session.php">
                    <span class="icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </span>
                    <span class="title">Sessions</span>
                </a>
            </li>
            <li>
                <a href="contacts.php">
                    <span class="icon">
                        <i class="fas fa-address-book"></i>
                    </span>
                    <span class="title">Contacts</span>
                </a>
            </li>

            <li><a href="student_upload_pg.php">
                <span class="icon"><i class="fas fa-upload"></i></span>
                <span class="title">Upload</span></a></li>
        </ul>
    </div>

    <div class="containdiv">
        <h2 style="padding-left:40px">Upload Assignment</h2>

        <form method="post" action="student_upload_pg.php" enctype="multipart/form-data">
            <label>File Title:</label>
            <input type="text" name="title">
            <label>File Upload: </label>
            <input type="file" name="file">
            <button type="submit" name="submit">Upload</button>
            <?php include 'student_filesLogic.php';?>
        </form>

        <br>
        <br>
         <h2>Downloads</h2>
         <div>   
            <table>
            <thead>
                <th>Student ID</th>
                <th>Filename</th>
                <th>Size</th>
                <th>Downloads</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php foreach ($files as $file): ?>
                <tr>
                <td><?php echo 'z1111111'; ?></td>
                <td><?php echo $file['name']; ?></td>
                <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                <td><?php echo $file['downloads']; ?></td>
                <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                </tr>
            <?php endforeach;?>

            </tbody>
            </table>
         </div>
    </div>        

</body>
</html>

