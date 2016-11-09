<?php
session_start();
include("connection.php");
include("function.php");

$puserid = "";
$duserid = "";
$suserid = "";
$fullname = "";
$username = "";
$password = "";
$email = "";
$username = "Dr. Abu Jafor";



if (isset($_SESSION["puserid"])) {
    $puserid = $_SESSION['puserid'];
    $fullname = $_SESSION['fullname'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
} else if (isset($_SESSION["duserid"])) {
    $duserid = $_SESSION['duserid'];
    $fullname = $_SESSION['fullname'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
} else if (isset($_SESSION["suserid"])) {
    $suserid = $_SESSION['suserid'];
    $email = $_SESSION['email'];
    $fullname = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html>
    <head>

        <title>DOCTORS INFORMATION SYSTEM | HOME </title>
    <body background="87.jpg">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript">
            <!--
                    function Redirect() {
                window.location = "index.php";
            }
            //-->
        </script>


    </head>

<body> 



    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">DIAS</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="finddoctor.php">Find Doctors</a></li> 
                    <li><a href="aboutus.php">About Us</a></li> 
                    <li class="pull-right">
                        <?php
                        if (isset($_SESSION["puserid"]) || isset($_SESSION["duserid"]) || isset($_SESSION["suserid"])) {
                            ?> 

                        <li><a href="userprofile.php"><img src="img/profile.png" alt="profile" /> <?php echo $fullname; ?> </a></li>
                        <li><a href="message.php"><img src="img/message.png" alt="profile" />
                                <?php
                                if ($puserid != "") {
                                    $sql = "SELECT * FROM message where receiverid='$puserid ' and status=0";
                                } else if ($duserid != "") {
                                    $sql = "SELECT * FROM message where receiverid='$duserid ' and status=0";
                                } else if ($suserid != "") {
                                    $sql = "SELECT * FROM message where receiverid='$suserid ' and status=0";
                                }


                                $result = $conn->query($sql);
                                $msgnum = $result->num_rows;
                                ?>

                                <span class="badge"> 
                                    <?php
                                    if ($msgnum != 0) {
                                        echo $msgnum;
                                    }
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li><a href="logout.php" title="Logout"><img src="img/logout.png" alt="profile" /></li>

                        </li>
                    <?php } ?>

                </ul>
            </div>
        </nav> 
        <div class="row">
            <br>
            <div class="col-md-12">
                <img src="img/banner1.jpg" style="width:100%; height: 300px;" class="img img-responsive img-thumbnail ">
            </div>
        </div>

        <div class="row"> 
