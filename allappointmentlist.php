			
<?php
include("header.php");
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">
    <?php
    $msg = "";
    if (isset($_GET['delete'])) {

        $id = $_GET['id'];
        //DELETE FROM `complain` WHERE 1
        $sql = "DELETE FROM appoinment WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $msg = "Delete successfully";
            header("Location: allappointmentlist.php?msg='$msg'");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['update'])) {

        $id = $_GET['id'];
        $sql = "UPDATE appoinment SET status  = '0' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $msg = "Served successfully";
            header("Location: allappointmentlist.php?msg='$msg'");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <h1 align="center"> All Appointment List</h1>

    <?php
    if (isset($_GET['msg'])) {

        echo "<h4>" . $_GET['msg'] . "</h4>";
    }
    ?>
    <table class="table table-bordered table-responsive" >
        <tr>
            <th>Serial No</th>
            <th>Name </th>
            <th>Age</th>
            <th>Appointment Time</th>
            <th>Action</th>
            <th>Finished</th>
        </tr>

        <?php
        $count = 1;
        $sql = "SELECT * FROM appoinment";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                ?>
                <tr>
                    <td> <?php echo $row["id"]; ?> </td> 
                    <td> <?php echo $row["name"]; ?> </td> 
                    <td> <?php echo $row["age"]; ?> </td> 
                    <td> <?php echo $row["appoinment"]; ?> </td> 
                    <td>    
                        <a href="allappointmentlist.php?delete=yes&id=<?= $id; ?>"><img src="img/delete.gif" alt=""></a>  
                    </td><td>
                        <?php if ($row["status"] == 1) { ?>
                            <a href="allappointmentlist.php?update=yes&id=<?= $id; ?>"><img src="img/ok.png" alt=""></a>  
                        <?php } else {
                            ?>

                            <img src="img/disable.png" alt=""> 
                            <?php
                        }
                        ?>

                    </td> 

                </tr>


                <?php
            }
            echo '</table>';
        } else {
            echo "0 results";
        }
        ?>
</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			



