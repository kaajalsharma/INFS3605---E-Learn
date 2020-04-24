<!DOCTYPE html>
<?php include 'student_filesLogic.php';?>

<html>
<head>
    <title>E-Learn Submissions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles.css" />
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
    <style>
        .left{
            width:40%;
            float:left;
            background:white;
        }
        .right{
            width:40%;
           background:white;
            float:right;

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
            margin-left:100px;
        }
        .weekcontent .content ul{
            list-style-type: square;
            color:black;
            margin-bottom: 3px;
            display:list-item;
            margin-left:20px;
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
                    .containdiv{
            margin-left: 150px;
            margin-right: 10px;
            padding-top: 10px;
            width:calc(100%-160px);
            height:100%;
            display:block;
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
                    <a href="staff_home_pg.php">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
            </div>
            <div class="top_menu">
                <div class="logo" style="text-align:center">E-Learning Workspace</div>
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

        <div class="sidebar">
            <ul>
                <li>
                    <a href="staff_wkspace_session.php">
                        <span class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </span>
                        <span class="title">Sessions</span>
                    </a>
                </li>


                <li>
                    <a href="staff_contacts.php">
                        <span class="icon">
                            <i class="fas fa-address-book"></i>
                        </span>
                        <span class="title">Contacts</span>
                    </a>
                </li>

                <li>
                    <a href="dash.php">
                        <span class="icon">
                            <i class="fas fa-poll-h"></i>
                        </span>
                        <span class="title">Quiz</span>
                    </a>
                </li>
                <li>
                    <a href="staff_upload_pg.php">
                        <span class="icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="title">Upload</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="containdiv">



            <h2 style="text-align:center; padding-left:20px">Recent Student Submissions </h2><hr />

            <div class="weekcontent">
                <br />


                <br />
                <div class="left">
                    <section class="content">
                        <h3 style="color: #F05E23">INFS3605</h3>
                        <hr class="rounded2" />
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111111'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111112'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111113'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                            <br />
                            <div>
                                <table>
                                    <tbody>
                                        <?php foreach ($files as $file): ?>
                                        <tr>
                                            <td>
                                                <?php echo 'z1111114'; ?>
                                            </td>
                                            <td>
                                                <?php echo $file['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo floor($file['size'] / 1000) . ' KB';?>
                                            </td>
                                            <td>
                                                <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                                <br />
                                <div>
                                    <table>
                                        <tbody>
                                            <?php foreach ($files as $file): ?>
                                            <tr>
                                                <td>
                                                    <?php echo 'z1111115'; ?>
                                                </td>
                                                <td>
                                                    <?php echo $file['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                </td>
                                                <td>
                                                    <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>

                                        </tbody>
                                    </table>
                                    <br />
                                    <div>
                                        <table>
                                            <tbody>
                                                <?php foreach ($files as $file): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo 'z1111116'; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $file['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                    </td>
                                                    <td>
                                                        <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>

                                            </tbody>
                                        </table>
                                        <br />
                                        <div>
                                            <table>
                                                <tbody>
                                                    <?php foreach ($files as $file): ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo 'z1111117'; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $file['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                        </td>
                                                        <td>
                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach;?>

                                                </tbody>
                                            </table>
                                            <br />
                                            <div>
                                                <table>
                                                    <tbody>
                                                        <?php foreach ($files as $file): ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo 'z1111118'; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $file['name']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                            </td>
                                                            <td>
                                                                <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach;?>

                                                    </tbody>
                                                </table>
                                                <br />
                                                <div>
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($files as $file): ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo 'z1111119'; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $file['name']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                </td>
                                                                <td>
                                                                    <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach;?>

                                                        </tbody>
                                                    </table>
                                                    <br />
                                                    <div>
                                                        <table>
                                                            <tbody>
                                                                <?php foreach ($files as $file): ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo 'z2222221'; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $file['name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach;?>

                                                            </tbody>
                                                        </table>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222222'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222222'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222223'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222224'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222225'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222226'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="right">
                    <section class="content">
                        <h3 style="color: #F05E23">INFS3617</h3>
                        <hr class="rounded2" />
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111111'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111112'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111113'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                            <br />
                            <div>
                                <table>
                                    <tbody>
                                        <?php foreach ($files as $file): ?>
                                        <tr>
                                            <td>
                                                <?php echo 'z1111114'; ?>
                                            </td>
                                            <td>
                                                <?php echo $file['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo floor($file['size'] / 1000) . ' KB';?>
                                            </td>
                                            <td>
                                                <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                                <br />
                                <div>
                                    <table>
                                        <tbody>
                                            <?php foreach ($files as $file): ?>
                                            <tr>
                                                <td>
                                                    <?php echo 'z1111115'; ?>
                                                </td>
                                                <td>
                                                    <?php echo $file['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                </td>
                                                <td>
                                                    <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>

                                        </tbody>
                                    </table>
                                    <br />
                                    <div>
                                        <table>
                                            <tbody>
                                                <?php foreach ($files as $file): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo 'z1111116'; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $file['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                    </td>
                                                    <td>
                                                        <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>

                                            </tbody>
                                        </table>
                                        <br />
                                        <div>
                                            <table>
                                                <tbody>
                                                    <?php foreach ($files as $file): ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo 'z1111117'; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $file['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                        </td>
                                                        <td>
                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach;?>

                                                </tbody>
                                            </table>
                                            <br />
                                            <div>
                                                <table>
                                                    <tbody>
                                                        <?php foreach ($files as $file): ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo 'z1111118'; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $file['name']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                            </td>
                                                            <td>
                                                                <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach;?>

                                                    </tbody>
                                                </table>
                                                <br />
                                                <div>
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($files as $file): ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo 'z1111119'; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $file['name']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                </td>
                                                                <td>
                                                                    <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach;?>

                                                        </tbody>
                                                    </table>
                                                    <br />
                                                    <div>
                                                        <table>
                                                            <tbody>
                                                                <?php foreach ($files as $file): ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo 'z2222221'; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $file['name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach;?>

                                                            </tbody>
                                                        </table>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222222'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222222'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222223'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222224'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222225'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br />
                                                        <div>
                                                            <table>
                                                                <tbody>
                                                                    <?php foreach ($files as $file): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo 'z2222226'; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $file['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach;?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>





        </div>

</body>
</html>