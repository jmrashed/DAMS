<?php
include("header.php");
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">

    <?php
    if (isset($_GET['read'])) {

        $id = $_GET['id'];
        $sql = "UPDATE message SET status  = '1' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $msg = "Read successfully";
            //header("Location: message.php?msg='$msg'");
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


        $senderid = $_POST['senderid'];
        $receiverid = $_POST['receiverid'];
        $message = $_POST['message'];
        $status = 0;




        $sql = "INSERT INTO message (senderid, receiverid, message, status, datetime) VALUES ( '$senderid', '$receiverid', '$message', '0',  now())";

        if ($conn->query($sql) === TRUE) {


            echo "Message send successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <h1 align="center">Message of  <?php echo $fullname; ?> </h1>
    <br>
    <hr>
    <br>




    <?php
    if ($puserid != "") {
        $sql = "SELECT *,message.status as s FROM message where receiverid='$puserid'";
    } else if ($duserid != "") {
        $sql = "SELECT *,message.status as s, message.id as i FROM message, doctor where receiverid='$duserid' and doctor.id='$duserid'";
    } else if ($suserid != "") {
        $sql = "SELECT *,message.status as s, message.id as i FROM message, superadmin where receiverid='$suserid' and superadmin.id='$suserid'";
    }
    $count = 1;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>  


        <table class="table table-responsive table-striped" >
            <tr><td><b>Receiver : </b><?php echo $fullname; ?> </td> <td> Read </td> </tr>


            <?php
            while ($row = $result->fetch_assoc()) {
                ?>

                <tr><td>

                        Sender : <?php
                        if ($duserid != "") {
                            if ($row["senderid"] == 0) {
                                echo "Admin";
                            } else
                                echo patientname($row["senderid"]);
                        }
                        else if ($puserid != "") {
                            echo doctorname($row["senderid"]);
                        } else if ($suserid != "") {
                            echo doctorname($row["senderid"]);
                        }
                        ?>
                        <br>

                        <b> Message <?php echo $count; ?> :</b> <?php
                        if ($row['s'] == 0) {
                            echo '<b>';
                        }
                        echo $row["message"];
                        if ($row['s'] == 0) {
                            echo '</b>';
                        }
                        ?> <br> <b>Date Time : </b><?php echo $row["datetime"]; ?> 

                    </td><td> 

                        <?php if ($row['s'] == 0) { ?> 
                            <a href="message.php?read=yes&id=<?php echo $row['i']; ?>">Read</a>
                        <?php } else echo 'Done'; ?>

                    </td>
                </tr>  



                <?php
                $count = $count + 1;
            }
        }

        else {
            echo "You have no Message";
        }

        echo '</table>';
        ?>
        <br>
        <br>
        <br>
        <h2>Send Message</h2>
        <form action="message.php" method="POST" class="form-horizontal">
            <p class="contact"><label for="phone">Select Doctor*</label></p> 	
            <select class="form-control" name="receiverid" >
                <option value="1" >Admin</option>
                <?php
                if ($duserid != "") {
                    $sql = "SELECT * FROM patient";
                } else if ($puserid != "") {
                    $sql = "SELECT * FROM doctor";
                } else if ($suserid != "") {
                    $sql = "SELECT * FROM doctor";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        if ($duserid != "") {
                            echo "<option value='" . $row["id"] . "'>" . $row["fullname"] . "</option>";
                        } else if ($puserid != "") {
                            echo "<option value='" . $row["id"] . "'>" . $row["doctorname"] . "</option>";
                        } else if ($suserid != "") {
                            echo "<option value='" . $row["id"] . "'>" . $row["doctorname"] . "</option>";
                        }
                    }
                } else {
                    echo "0 results";
                }
                ?>	


            </select><br><br>

            Message: <br>
            <textarea name="message" class="form-control"></textarea><br>

            <input type="hidden" name="senderid" value="<?php echo $duserid; ?>" />
            <input  class="btn btn-primary col-md-12" type="submit" name="submit" value="Send" />
            <br>     <br>     <br>
        </form>


</div>




<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			




