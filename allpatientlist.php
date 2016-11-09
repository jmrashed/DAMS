			
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
        $sql = "DELETE FROM patient WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $msg = "Delete successfully";
            header("Location: allpatientlist.php?msg='$msg'");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if ($fullname != "") {
        ?>

        <h1 align="center"> All Patients List</h1>

        <?php
        if (isset($_GET['msg'])) {

            echo "<h4>" . $_GET['msg'] . "</h4>";
        }
        ?>
        <table class="table-bordered table-responsive table-striped" style="height: 100px !important; overflow: scroll; width: 100%" >
            <tr>
                <th>Serial No</th>
                <th>Full Name </th>
                <th>Email</th>
                <th>Info</th>
                <th>status</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>



            <?php
            $count = 1;
            $sql = "SELECT * FROM patient";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    ?>
                    <tr>
                        <td> <?php echo $row["id"]; ?> </td> 
                        <td> <?php echo $row["fullname"]; ?> </td> 
                        <td> <?php echo $row["pemail"]; ?> </td> 
                        <td> <?php echo $row["info"]; ?> </td> 
                        <td> <?php echo $row["status"]; ?> </td> 
                        <td> <?php echo $row["phone"]; ?> </td>  
                        <td>     
                            <a href="allpatientlist.php?delete=yes&id=<?= $id; ?>"><img src="img/delete.gif" alt=""></a>  

                        </td> 

                    </tr>


                    <?php
                }
                echo '</table>';
            } else {
                echo "0 results";
            }
        }
        ?>
                    <br>     <br>
</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			



