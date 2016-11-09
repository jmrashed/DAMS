<?php
//	session_start();
include("connection.php");
//			include("function.php");

$puserid = "";
$duserid = "";
$suserid = "";
$fullname = "";
$username = "";
$password = "";
$phone = "";
$email = "";
$username = "Dr. Abu Jafor";



if (isset($_SESSION["puserid"])) {
    $puserid = $_SESSION['puserid'];
    $fullname = $_SESSION['fullname'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
}


if (isset($_POST['submit'])) {

    /* 	
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';
     */

    $name = $_POST['name'];
    $appoinment = $_POST['appoinment'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $catagory = $_POST['catagory'];
    $doctorname = $_POST['doctorname'];
    $phone = $_POST['phone'];




    $sql = "INSERT INTO appoinment ( name,email, age, catagoryid, doctorid, phone, status,appoinment, datetime) 
VALUES ( '$name','$email', '$age', '$catagory', '$doctorname', '$phone', '1','$appoinment', now())";

    if ($conn->query($sql) === TRUE) {


     //   $msg = "Patient Name: " . $name . "<br> Email: " . $email . "<br> Age: " . $age . " Category: " . $catagory . " <br> Doctor Name: " . $doctorname . " <br>";

        /* 	

          $to = $email;
          $subject = "A new patient appointed to you.";
          $txt = $msg;
          $headers = "From: webmaster@example.com" . "\r\n" .
          "CC: somebodyelse@example.com";

          mail($to,$subject,$txt,$headers);


         */
    header("Location:appoinment.php?message=New record created successfully");
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h1> APPOINMENT FORM </h1>



<div  class="form">

    <?php
    $today = date("Y-m-d");
    $sql = "SELECT * FROM appoinment WHERE datetime LIKE '$today%'";

    $result = $conn->query($sql);
    $num = $result->num_rows;

    if ($result->num_rows < 12) {
        ?>

    <form id="contactform" action="love_appoinment.php" method="post" class="form-horizontal" > 
            <label for="name">Patient Name*</label>
            <input class="form-control"  id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" value="<?php echo $fullname; ?>"> 

            <label for="name">Email*</label>
            <input class="form-control"  id="name" name="email" placeholder="Jhon@example.com" required="" tabindex="1" type="text" value="<?php echo $email; ?>"> 



            <label for="name">Patient Age*</label>
            <input class="form-control"  id="name" name="age" placeholder="" required="" tabindex="1" type="number" > 



            <label for="phone">Select Department*</label>	
            <select class="form-control"  name="catagory" > 
                <?php
                $sql = "SELECT * FROM catagory";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["catagory_name"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>	




            </select>








            <label for="appoinment">Appoinment Time*</label>	
            <select class="form-control"  name="appoinment" > 

                <?php
                $today = date("Y-m-d");
                $sql = "SELECT * FROM appoinment WHERE datetime LIKE '$today%'";

                $result = $conn->query($sql);
                $num = $result->num_rows;




                if ($result->num_rows < 6) {

                    echo "<option value='4 :" . $num * 10 . "Pm'>  4 : " . $num * 10 . "pm </option>";
                } else if ($result->num_rows < 12 && $result->num_rows > 6) {
                    $num = $num % 6;
                    echo "<option value='5 :" . $num * 10 . " Pm'>  5 : " . $num * 10 . "pm </option>";
                } else {
                    echo "<option value='4 :" . $num * 10 . " Pm'>  4 : " . $num * 10 . "pm </option>";
                }
                ?>	




            </select>

 

            <label for="phone">Select Doctor*</label>	
            <select class="form-control"  name="doctorname" > 
                <?php
                $sql = "SELECT * FROM doctor";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["doctorname"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>	




            </select> 



            <label for="phone">Phone Number</label>
            <input class="form-control"   id="phone" name="phone" placeholder="suppose 01xxx-xx xx xx" required="" type="text"  value="<?php echo $phone; ?>"> <br>
            <input   class="btn btn-primary col-md-12" name="submit" id="submit" tabindex="5" value="Save " type="submit"> 	 
        </form> 

      
    </div>
    <?php
} else {
    echo "<pre>
	There is no free slot today for Appoinment.
			
	Please Contact With Us: 
	122 Kazi Nazrul Islam Avenue,
	help@gmail.com
	+8801900008888
	Dhaka-1000, Bangladesh
			
			</pre>";
}
?>
<br>
<br>