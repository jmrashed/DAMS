<?php
include("connection.php");


if (isset($_POST['submit'])) {

    /*
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';
     */



    $fullname = $_POST['fullname'];
    $pusername = $_POST['username'];
    $pemail = $_POST['email'];
    $ppass = $_POST['password'];
    $catagory = $_POST['catagory'];
    $hospital = $_POST['hospital'];
    $status = 1;
    $info = $_POST['info'];
    $address = $_POST['address'];


    $sql = "INSERT INTO doctor ( hospital_id, catagory_id, doctorname, dusername, demail, dpass, description, address, status, datetime)
				VALUES (   '$hospital',  '$catagory',  '$fullname', '$pusername',  '$pemail',  '$ppass', '$info', '$address', '$status', now())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}






/*
  '1', '2', 't', 't', 't', 't', 't', 't', '2016-05-15 00:00:00');

 */
?>

 
                <h1>SIGN UP DOCTOR </h1>
         
            <div  class="form">
                <form id="contactform" accept="dregister.php" method="post"> 
                    <label for="name">Full Name*</label> 
                    <input  class="form-control" id="name" name="fullname" placeholder="Full Name" required="" tabindex="1" type="text"> 



                    <label for="name">User Name*</label> 
                    <input  class="form-control" id="name" name="username" placeholder="User Name" required="" tabindex="1" type="text"> 




                    <label for="name">Email*</label> 
                    <input  class="form-control" id="name" name="email" placeholder="Email" required="" tabindex="1" type="email"> 




                    <label for="name">Password*</label> 
                    <input  class="form-control" id="name" name="password" placeholder="Password" required="" tabindex="1" type="password"> 



                    <label for="phone">Select Hospital*</label> 	
                    <select  class="form-control" name="hospital" > 
                        <?php
                        $sql = "SELECT * FROM hospital";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["hospital_name"] . "'>" . $row["hospital_name"] . "</option>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>	




                    </select>
               	 

                    <label for="phone">Select Department*</label> 	
                    <select  class="form-control" name="catagory" > 
                        <?php
                        $sql = "SELECT * FROM catagory";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["catagory_name"] . "'>" . $row["catagory_name"] . "</option>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>	




                    </select>
 

                    <label for="name">Address*</label> 
                    <textarea name="address"  class="form-control"></textarea>


                    <br><br>
                    <label for="name">Degrees*</label>  
                    <textarea name="info" class="form-control"></textarea>

 

                <br> 
                <br>

                    <input class="btn btn-primary col-md-12" name="submit" id="submit" tabindex="5" value="Save" type="submit"> 	 
                </form> 
            </div>   
                <br> 
                <br>