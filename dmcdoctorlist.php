<?php
include("connection.php");
include("header.php");
?>

<?php include 'leftbar.php'; ?>
<div class="col-md-6">
    <div class="doctorlist">

        <h1> DEPERTMENTS </h1>
        <div class="list-group">
            <?php
            $sql = "SELECT * FROM department";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $c=0;
                while ($row = $result->fetch_assoc()) {
                    $c++;
                    ?>
                    <a class="list-group-item" href="dlist.php?type=<?= $row["name"]; ?>"><?= $row["name"]; ?></a> 


                    <?php
                }
            }else
            {
                echo 'No Department.........';
            }
            ?>
                 
        </div>
           <p class="text-danger">Total Department is <?=$c;?></p>
    </div>
</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			


