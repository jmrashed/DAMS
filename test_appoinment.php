<?php
$puserid = "";
$duserid = "";
$suserid = "";
$fullname = "";
$username = "";
$password = "";
$phone = "";
$email = "";
$username = "Dr. Abu Jafor";

include("connection.php");

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
    $disease = $_POST['disease'];
    $test_name = $_POST['test_name'];

 

    $sql = "INSERT INTO treatment_test ( patient_name,desease, test_name) 
VALUES ( '$name','$disease', '$test_name')";

    if ($conn->query($sql) === TRUE) {

        header("Location:testappoinment.php?message=New record created successfully");
     
 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



<h1><span>TEST  FORM</h1>


<?php
$today = date("Y-m-d");
$sql = "SELECT * FROM appoinment WHERE datetime LIKE '$today%'";

$result = $conn->query($sql);
$num = $result->num_rows;

if ($result->num_rows < 12) {
    ?>

    <form id="contactform" action="test_appoinment.php" method="post" class="form-horizontal"> 
        <label for="name">Patient Name*</label> 
        <input class="form-control" id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" value="<?php echo $fullname; ?>"> 

        <label for="name">Disease  Name*</label> 
        <input class="form-control" id="name" name="disease" placeholder="Disease" required="" tabindex="1" type="text" value="<?php echo $fullname; ?>"> 


        <label for="phone">Select Test*</label> 	
        <select class="form-control"  name="test_name" > 
            <?php
            $sql = "SELECT * FROM experiment";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                }
            } else {
                echo "0 results";
            }
            ?>	




        </select>



        <br>		<br>	 


        <input class="btn btn-primary col-md-12" name="submit" id="submit"  value="Save " type="submit"> 	 
    </form> 

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

