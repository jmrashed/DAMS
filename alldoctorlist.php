<?php
include("connection.php");

$msg="";
if(isset($_GET['delete'])) {
	
	$id =$_GET['id'];  
		$sql="DELETE FROM doctor WHERE id='$id'";
	
	if ($conn->query($sql) === TRUE) {
    $msg= "Delete successfully";
	header("Location: alldoctorlist.php?msg='$msg'");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	
if(isset($_GET['active'])) {
	
	$id =$_GET['id'];  
		$sql="UPDATE doctor SET status  = '1' WHERE id='$id'";
		
	if ($conn->query($sql) === TRUE) {
    $msg= "Served successfully";
	header("Location: alldoctorlist.php?msg='$msg'");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	
if(isset($_GET['deactive'])) {
	
	$id =$_GET['id'];  
		$sql="UPDATE doctor SET status  = '0' WHERE id='$id'";
		
	if ($conn->query($sql) === TRUE) {
    $msg= "Served successfully";
	header("Location: alldoctorlist.php?msg='$msg'");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	







include("header.php");
	 
?>

<h1 align="center"> All Doctors List</h1>

	  <?php
if(isset($_GET['msg'])) {

	  echo "<h4>" . $_GET['msg']. "</h4>";
}

	  ?>
<table border="1" style="padding:0px; border-collapse: collapse;" >
<tr>
<th>Serial No</th>
<th>Full Name </th>
<th>User Name </th>
<th>Email</th>
<th>Description</th>
<th>status</th> 
<th>Delete</th>
<th>Active<br>Inactive</th>
</tr>
 
 
 
<?php 
/*
UPDATE `doctor` SET `id`=[value-1],`hospital_id`=[value-2],`catagory_id`=[value-3],`doctorname`=[value-4],`dusername`=[value-5],`
demail`=[value-6],`dpass`=[value-7],`description`=[value-8],`datetime`=[value-9] WHERE 1
*/
$count=1;
	$sql = "SELECT * FROM doctor";
			$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$id=$row["id"] ;
?>
		<tr>
		 	<td> <?php echo $row["id"] ; ?> </td> 
		 	<td> <?php echo $row["doctorname"] ; ?> </td> 
		 	<td> <?php echo $row["dusername"] ; ?> </td> 
		 	<td> <?php echo $row["demail"] ; ?> </td> 
		 	<td> <?php echo $row["description"] ; ?> </td> 
		 	<td> <?php  if($row["status"]==1) echo 'Active'; else echo 'Inactive';  ?> </td> 
	 
		 	<td>     
		 	<a href="alldoctorlist.php?delete=yes&id=<?=$id;?>"><img src="img/delete.gif" alt=""></a>  
		 	
		 	</td> 
		 	<td>     
		 	<a href="alldoctorlist.php?active=yes&id=<?=$id;?>"><img src="img/ok.png" alt=""></a>     
		 	<a href="alldoctorlist.php?deactive=yes&id=<?=$id;?>"><img src="img/disable.png" alt=""></a>  
		 	
		 	</td> 
		
		</tr>


<?php 						
						  
			}
			echo '</table>';
			
			} 
			
			else {
    				echo "0 results";
			}
 
include("footer.php");
?>			
		