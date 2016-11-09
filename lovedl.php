<?php
include("connection.php");
$flg = 1;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];


    $sql = "SELECT * FROM doctor where dusername='$name' and dpass='$pass'";
    // echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $dpass = $row["dpass"];
            $status = $row["status"];



            $userid = $row["id"];
            $fullname = $row["doctorname"];
            $username = $row["dusername"];
            $password = $row["dpass"];
            $email = $row["demail"];


            if ($pass == $password && $status != 0) {
                session_start();

                $_SESSION['duserid'] = $userid;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $email;

                header("Location:index.php");

                $flg = 0;
            }
        }
    } else {
        echo "<h3>User name or password invalid. Or Admin not Approved</h3>";
        $flg = 1;
    }
}
if ($flg != 0) {
    ?>

    <h1>DOCTORS LOGIN </h1>

    <form id="contactform" action="lovedl.php" method="post" class="form-horizontal"> 
        <p class="contact"><label for="name">User Name*</label></p> 
        <input class="form-control" id="name" name="name" placeholder="User Name"  type="text"> 



        <p class="contact"><label for="name">Password*</label></p> 
        <input class="form-control" id="name" name="pass" placeholder="Password"  type="password" >  



        <br>



        <input class="btn btn-primary col-md-12" name="submit" id="submit" tabindex="5" value="Login" type="submit"> 	 
    </form> 


<?php } ?>  
<br>   <br>   