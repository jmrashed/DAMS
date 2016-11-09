
<div class="col-md-3"> 

    <div class="list-group">
        <a href="#" class=" active list-group-item">Main Menu</a>
        <a href="patientregister.php" class="list-group-item">Patient Register</a>
        <a href="patientlogin.php" class="list-group-item">Patient Login</a>


        <?php if ($suserid != "") { ?>
            <a href="patientlogin.php" target="_parent" class="list-group-item">All Doctor List</a>
            <a href="appoinment.php" target="_parent" class="list-group-item">Appointments</a>
            <a href="healthqueries.php" target="_parent" class="list-group-item"> Health Queries</a>
            <a href="health-checkuppc.php" target="_parent" class="list-group-item"> Patient Complaints</a>
            <a href="userprofile.php" target="_parent" class="list-group-item"> User Profile</a>
            <a href="payment.php" target="_parent" class="list-group-item"> Payment</a>
            <a href="allpatientlist.php" target="_parent" class="list-group-item"> Patients</a> 
            <a href="payment.php" target="_parent" class="list-group-item"> Complaints</a>
            <a href="allappointmentlist.php" target="_parent" class="list-group-item"> Appointments</a>
            <a href="payment.php" target="_parent" class="list-group-item"> Payment</a>
            <a href="index.php" target="_parent" class="list-group-item"> Home</a>
            <a href="logout.php" target="_parent" class="list-group-item"> Logout</a>


            <?php
        }
        if ($duserid != "") {
            ?>
            <a href="allpatientlist.php" target="_parent" class="list-group-item"> Patients</a>
            <a href="allcomplainlist.php" target="_parent" class="list-group-item"> Complaints</a>
            <a href="allappointmentlist.php" target="_parent" class="list-group-item"> Appointments</a>

            <?php
        }
        if ($puserid != "") {
            ?>
            <a href="appoinment.php" target="_parent" class="list-group-item"> Appointments</a>
            <a href="healthqueries.php" target="_parent" class="list-group-item"> Health Queries</a>
            <a href="health-checkuppc.php" target="_parent" class="list-group-item"> Patient Complaints</a>
            <a href="userprofile.php" target="_parent" class="list-group-item"> User Profile</a>

        <?php } ?>

        <a href="payment.php"  target="_parent" class="list-group-item" >Payment</a></li> 
    </div>

    <iframe src="calender.php" width="100%" height="250"> </iframe>
    <div class="list-group">
        <a href="testappoinment.php" class=" active list-group-item">Experiment Appointment</a>
    </div>
</div>
