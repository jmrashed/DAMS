<?php
include("connection.php");
include("header.php");
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">

    <?php
    if (isset($_GET['type'])) {
        $c = $_GET['type'];
        echo '<h1>Division :  ' . $c . '</h1><hr><br>';
        ?>
        <table class="table table-responsive table-striped">
            <?php
            $sql = "SELECT * FROM doctor where catagory_id='$c'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $c = 0;
                while ($row = $result->fetch_assoc()) {
                    $c++;
                    ?>


                    <tr>
                        <td> 
                            <img src="img/doctor/1.jpg" height="100" width="100"/> 
                        </td>
                        <td>
                            <h3 class="page-header"> <a href="#"><?= $row["doctorname"]; ?> </a></h3> 
                            <br><b>Degree:</b> <?= $row["description"]; ?> 	
                            <br><b>Address:</b> <?= $row["address"]; ?> 	
                            <br><b>Email:</b> <?= $row["demail"]; ?> 	
                            <br><b>Department:</b> <?= $row["catagory_id"]; ?> 	
                            <br><b>Hospital:</b> <?= $row["hospital_id"]; ?> 				  
                    
                            Available : Mon-Wed & Thursday<br>
                            ( 4.00 pm - 6.30 pm )
                            <br> <a href="appoinment.php" class="btn btn-success"> Appointment </a>


                        </td>    
 

                    </tr>

                    <?php
                }
            }else{
                echo '<h3 class=text-danger>Empty Doctor List</h3>';
            }
            ?>

        </table>
    <?php } ?>

    </div>




    <?php include 'rightbar.php'; ?>
    <?php
    include("footer.php");
    ?>			
