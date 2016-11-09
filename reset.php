<html>
<head>
<title>reset password</title>
 <link rel="stylesheet" type="text/css" href="demo1dl.css" media="all" />
   
    <link rel="stylesheet" type="text/css" href="demodl.css" media="all" />	
</head>
<body>
<div class="container"> 
            <div class="freshdesignweb-top">
                <a href=target="_blank">###</a>
                <span class="right">
                    <a href="beautiful-registration-form-with-html5-and-css3.html">
                        <strong>###</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
			 
 <?php
		include("connection.php");
			$flg=1;
		$msg="";
if(isset($_POST['submit'])) {
	$name=$_POST['name']; 


	$sql = "SELECT * FROM patient where pusername='$name'";
			$result = $conn->query($sql);
				if ($result->num_rows ==1 ) {
					while($row = $result->fetch_assoc()) {
						$msg= 'Your password : '.$row["ppass"];
					} 
			
				}else {
    				$msg=  "<h3 style=color:red>User Not Found.</h3>";
    				$flg=1;
			}

			 


	

}
 









?>

				<h1><span>LOGIN FORM</span>PATIENTS ARE LOGIN HERE </h1>
            </header>      
<?php echo $msg; ?>			
      <div  class="form">
	  
    		<form id="contactform" action="reset.php" method="post"> 
    			<p class="contact"><label for="name">User Name*</label></p> 
    			<input id="name" name="name" placeholder="" required="" tabindex="1" type="text"> 
    			 
    			 
				
            
            
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Login" type="submit"> 	 
   </form> 
</div>     

 
</div>

</body>
</html>
