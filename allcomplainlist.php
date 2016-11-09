	
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
        $sql = "DELETE FROM complain WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $msg = "Delete successfully";
            header("Location: allcomplainlist.php?msg='$msg'");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <h1 align="center"> All Complain List</h1>

    <?php
    if (isset($_GET['msg'])) {

        echo "<h4>" . $_GET['msg'] . "</h4>";
    }
    ?>
    <table class="table table-bordered table-responsive" >
        <tr>
            <th>Serial No</th>
            <th>Name </th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php
        $count = 1;
        $sql = "SELECT * FROM complain";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                ?>
                <tr>
                    <td> <?php echo $row["id"]; ?> </td> 
                    <td> <?php echo $row["name"]; ?> </td> 
                    <td> <?php echo $row["title"]; ?> </td> 
                    <td> <?php echo $row["description"]; ?> </td> 
                    <td>   
                        <a href="lovepc.php?edit=yes&id=<?= $id; ?>"><img src="img/edit.png" alt=""></a>  
                        <a href="allcomplainlist.php?delete=yes&id=<?= $id; ?>"><img src="img/delete.gif" alt=""></a>  


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



