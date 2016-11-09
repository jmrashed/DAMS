<?php
include("header.php");
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">
    <h1 align="center"> Welcome to <?php echo $fullname; ?></h1>

    <table class="table table-responsive table-striped" >





        <?php
        $count = 1;
        if ($puserid != "") {
            $sql = "SELECT * FROM patient where pusername='$username '";
        } else if ($duserid != "") {
            $sql = "SELECT * FROM doctor where doctorname='$fullname '";
        }
        //echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($puserid != "") {
                    ?>
                    <tr>
                        <td>Patient No : <?php echo $row["id"]; ?> </td> </tr><tr>
                        <td>Full Name : <?php echo $row["fullname"]; ?> </td>  </tr><tr>
                        <td>Email : <?php echo $row["pemail"]; ?> </td>  </tr><tr>
                        <td> Info :<?php echo $row["info"]; ?> </td>   </tr><tr>
                        <td>Phone : <?php echo $row["phone"]; ?> </td>   </tr><tr>
                        <td>   

                        </td> 

                    </tr>


                    <?php
                } else if ($duserid != "") {
                    ?>

                    <tr>
                        <td>Doctor No : <?php echo $row["id"]; ?> </td> </tr><tr>
                        <td>Full Name : <?php echo $row["doctorname"]; ?> </td>  </tr><tr>
                        <td>Hospital : <?php echo $row["hospital_id"]; ?> </td>  </tr><tr>
                        <td>Deaprtment : <?php echo $row["catagory_id"]; ?> </td>  </tr><tr>
                        <td>Email : <?php echo $row["demail"]; ?> </td>  </tr><tr> 
                        <td>   

                        </td> 

                    </tr>
                    <?php
                }
            }
        } else {
            echo "0 results";
        }

        echo '</table>';
        ?>
</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			



