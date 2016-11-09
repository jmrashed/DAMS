

<?php
include("connection.php");
$flg = 1;
$msg = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];


    $sql = "SELECT * FROM patient where pusername='$name'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $userid = $row["id"];
            $fullname = $row["fullname"];
            $username = $row["pusername"];
            $password = $row["ppass"];
            $email = $row["pemail"];


            if ($pass == $password) {
                session_start();

                $_SESSION['puserid'] = $userid;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $email;



                header("Location:index.php");


                $flg = 0;
            }
        }
    } else {
        $msg = "<h3 style=color:red>User name or password invalid.</h3>";
        $flg = 1;
    }
}
if ($flg != 0) {
    ?>

    <h1><span>LOGIN FORM </h1>
    </header>      
    <?php echo $msg; ?>			
    <div  class="form">

        <form id="contactform" action="lovepl.php" method="post" class="form"> 
            <p class="contact"><label for="name">User Name*</label></p> 
            <input class="form-control" id="name" name="name" placeholder="" required="" tabindex="1" type="text"> 



            <p class="contact"><label for="name">Password*</label></p> 
            <input class="form-control"  id="name" name="pass" placeholder="" required="" tabindex="1" type="password"  >  



            <br>


            <input class="btn btn-primary col-md-12" name="submit" id="submit" tabindex="5" value="Login" type="submit"> 	 
        </form> 
        <br>
        <a href="reset.php" style="color:blue">Forget Password? </a> 

        <br>
    </div>     

<?php } ?> 
 
 