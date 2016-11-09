<?php
include("connection.php");
include("header.php");
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">

    <div class=" panel panel-primary"> 
        <div class="panel-heading">
            Find Doctor
        </div>
        <div class="panel-body">
            <div class="list-group">
                <a href="populardoctorlist.php" class="list-group-item ">      Popular Doctor List   </a>


                <a href="squaredoctorlist.php" class="list-group-item">Square Doctor List</a>


                <a href="labaiddoctorlist.php" class="list-group-item">LAB AID Doctor List</a>



                <a href="dmcdoctorlist.php" class="list-group-item">Dhaka Medical Doctor List</a>

            </div>
        </div> 
    </div>

    <br>
    <div class=" panel panel-primary"> 
        <div class="panel-heading">
            Search a Doctor
        </div>
        <div class="panel-body" style="height: 350px">

            <form action="finddoctor.php" class="form-horizontal"   method="post">

                <label for="phone">Select Hospital*</label> <br><br>
                <select name="hospital" class="form-control"> 
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
                <br> 	 

                <label for="phone">Select Department*</label> <br>	<br>
                <select name="catagory"  class="form-control"> 
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

                <br> 
                <input type="submit" name="submit" value="Search"  class="btn btn-lg btn-primary" />

            </form>

        </div>
    </div>



    <?php
    if (isset($_POST['submit'])) {

        $catagory = $_POST['catagory'];
        $hospital = $_POST['hospital'];

        $sql = "SELECT * FROM doctor where catagory_id='$catagory' and hospital_id='$hospital'";
        //	echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            ?>
            <h2 class="page-header">Search Result</h2>
            <table class="table table-responsive table-bordered" >
                <tr> 
                    <th>Full Name </th>
                    <th>User Name </th>
                    <th>Email</th>
                    <th>Description</th> 
                </tr>
                <?php
                while ($row = $result->fetch_assoc()) {
                    if ($row["status"] == 1) {
                        ?>	

                        <tr> 
                            <td>  <?php echo $row["doctorname"]; ?> </td> 
                            <td>   <?php echo $row["dusername"]; ?> </td> 
                            <td>     <?php echo $row["demail"]; ?> </td> 
                            <td>     <?php echo $row["description"]; ?>  </td> 

                        </tr>

                        <?php
                    }
                }
                echo '</table>';
            } else {
                echo "<h2 class=text-danger>There is no doctor list available</h2>";
            }
        }
        ?>

</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			






