 

<?php
include("connection.php");
$flg = 1;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM superadmin where email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $email = $row["email"];
            $dpass = $row["password"];
            if ($password == $dpass) {
                session_start();

                $_SESSION['suserid'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['fullname'] = $email;


                header("Location:index.php");
                ?>
                <?php
                // header("Location:index.php"); 
                //  echo '    <a href="http://localhost/ndis/allpatientlist.php"><img src="img/patientlist.jpg" alt="" /></a> <br>    <a href="http://localhost/ndis/allcomplainlist.php"><img src="img/complainlist.jpg" alt="" /></a> <br>';
                $flg = 0;
            }
        }
    } else {
        echo "<h3>User name or password invalid.</h3>";
        $flg = 1;
    }
}
if ($flg != 0) {
    ?>

    <h1> ADMINISTATOR LOGIN FORM </h1>


    <form id="contactform" action="supperadmin.php" method="post" class="form-horizontal"> 
        <label for="name">Username *</label> 
        <input class="form-control" id="name" name="email" placeholder="Username"  type="text"> 



        <label for="name">Password*</label> 
        <input  class="form-control" id="name" name="password" placeholder="Password"  type="password"  >  



        <br>



        <input class="btn btn-primary col-md-12" name="submit" id="submit" tabindex="5" value="Login" type="submit"> 	 
    </form> 


<?php } ?>  
<br>    <br>