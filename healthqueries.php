<?php
include("header.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $query=$_POST['query'];
    $ms=$name.'<br>'.$email.'<br>'.$query.'<br>';
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
// mail("admin@gmail.com","My subject",$ms,$headers );
    $message="Send Mail Successfully";
     
}
?>
<?php include 'leftbar.php'; ?>
<div class="col-md-6">
    <div class="panel panel-danger">
        <div class="panel-heading">Health Queries</div>
        <div class="panel-body">
            <marquee behavior="scroll" direction="left"><br> WELCOME TO THE DOCTORS INFORMATION OF DHAKA</marquee>  
            <marquee behavior="scroll" direction="right">TO SAVE EVERY LIFE WE ARE DETERMINED</marquee>


        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">Ask for help </div>
        <div class="panel-body">
            <?php
            if (isset($message)) {
                echo '<p class=text-danger>' . $message . '</p>';
            }
            ?>
            <form class="form-horizontal" method="post" action="healthqueries.php">
                <label>Name </label>
                <input type="text" placeholder="name" name="name" class="form-control">
                <label>Email </label>
                <input type="email" placeholder="email" name="email" class="form-control">
                <label>Query </label>
                <textarea name="query" class="form-control"></textarea>
                <br>

                <input type="submit" value="Submit" name="submit" class="btn btn-primary col-md-12">
            </form>
        </div>
    </div>

</div> 


<?php include 'rightbar.php'; ?>
<?php
include("footer.php");
?>			



