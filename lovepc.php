<?php
$name = "";
$title = "";
$description = "";
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
}


if (isset($_GET['edit'])) {

    $id = $_GET['id'];
    $sql = "SELECT * FROM complain where id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $title = $row["title"];
            $description = $row["description"];
            $uid = $row["id"];
        }
    }
}




if (isset($_POST['update'])) {


    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];


    // UPDATE `complain` SET `id`=[value-1],`name`=[value-2],`title`=[value-3],`description`=[value-4],`datetime`=[value-5] WHERE 1
    $sql = "UPDATE complain SET name='$name', title='$title', description='$description' where id='$uid'";

    if ($conn->query($sql) === TRUE) {
        $msg = "Update successfully";
        header("Location: allcomplainlist.php?msg='$msg'");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}







if (isset($_POST['submit'])) {

    /* 	
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';
     */



    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = " INSERT INTO complain ( name, title, description, datetime) VALUES ( '$name', '$title', '$description ', now())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h1> COMPLAINTS FORM </h1>

<div  class="form">
    <form id="contactform" accept="lovepc.php" method="post" class="form-horizontal"> 
        <p class="contact"><label for="name">Patient Name*</label></p> 
        <input class="form-control"  id="name" name="name" placeholder="Patient Name"  tabindex="1" type="text" value="<?= $fullname; ?>" > 



        <p class="contact"><label for="name">Complaints Topic*</label></p> 
        <input class="form-control"  id="name" name="title" placeholder="Complaints Topic"  tabindex="1" type="text"  value="<?= $title; ?>" > 



        <p class="contact"><label for="name">Brief Complaints*</label></p>  
        <textarea name="description" class="form-control"> 
            <?= $description; ?> 
        </textarea>

        <br><br><br>
        <?php
        if (isset($_GET['edit'])) {
            ?>
            <input class="form-control"  type="hidden" name="uid" value="<?= $uid ?>"> 


            <input class="form-control"  class="buttom" name="update" id="submit" tabindex="5" value="Update" type="submit"> 	

        <?php } else {
            ?>			
            <input class="btn btn-primary col-md-12" name="submit" id="submit" tabindex="5" value="Save" type="submit"> 	 
        <?php } ?>
    </form> 
</div>   