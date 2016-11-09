<?php
include("connection.php");


if (isset($_POST['submit'])) {

    /*
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';


     */

    $fullname = $_POST['name'];
    $pusername = $_POST['username'];
    $pemail = $_POST['email'];
    $ppass = $_POST['password'];
    $status = 1;
    $info = $_POST['info'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO patient ( fullname, pusername, pemail, ppass, status, info, phone, address, datetime) 
 VALUES ( '$fullname', '$pusername', '$pemail', '$ppass', '$status', '$info', '$phone', '$address', now())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h1 class="page-header"> REGISTER FORM </h1>

<div  class="row">
    <form id="contactform" accept="register.php" method="post" class="form-horizontal"> 
        <label for="name">Patient Name*</label> 
        <input class="form-control" placeholder="Patient Name" id="name" name="name" placeholder=""   type="text"> 



        <label for="name">User Name*</label> 
        <input class="form-control" placeholder="User Name" id="name" name="username" placeholder=""   type="text"> 




        <label for="name">Email*</label> 
        <input class="form-control" placeholder="Email" id="name" name="email" placeholder=""   type="email" pattern="[^ @]*@[^ @]*"  > 




        <label for="name">Password*</label> 
        <input class="form-control" placeholder="Password" id="name" name="password" placeholder=""   type="text"> 




        <label for="name">Phone*</label>  

        <input class="form-control" placeholder="Phone" id="name" name="phone" oninput="maxLengthCheck(this)"  type = "number" maxlength = "11"   />

        <script>
            // This is an old version, for a more recent version look at
            // https://jsfiddle.net/DRSDavidSoft/zb4ft1qq/2/
            function maxLengthCheck(object)
            {
                if (object.value.length > object.maxLength)
                    object.value = object.value.slice(0, object.maxLength)
            }
        </script>

        <label for="name">Address*</label> <br>
        <input class="form-control" placeholder="Address" id="name" name="address" placeholder=""   type="text"> 



        <label for="name">Describe Problem*</label> <br> 
        <textarea name="info" class="form-control"> 
				
        </textarea>

        <br><br><br>




        <input class="btn btn-primary col-md-12" name="submit" value="Save" type="submit"> 	 
    </form> 
</div>      
<br>   
<br>