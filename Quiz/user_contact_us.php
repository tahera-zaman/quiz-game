<?php
		
	session_start();
	
	if( isset($_SESSION['email_lg']))
	{
		//echo "You are Logout";
		header('loction:Login.php');
	}
?>

<!DOCTYPE HTML>

<html>

	<?php
		include("connection.php");
	?>
	
	<?php
	
		if(! mysqli_select_db($conn,'quiz'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit3']))
			{
				$email_fd=trim($_REQUEST['email_fd']);
				$subject_fd=trim($_REQUEST['subject_fd']);
				$message_fd=trim($_REQUEST['message_fd']);
				
				$sql2="insert into feedback (Email,Subject,Message) values ('$email_fd','$subject_fd','$message_fd')";
				
				$result = mysqli_query($conn,$sql2);
				
				if($result)
				{
					echo 'Successgully Registered';
					header('location:user_contact_us.php');
				}
				else
				{
					echo 'Unsuccessful';
					header('location:user_contact_us.php');
				}
				
			}
	?>

	<head>
		
		<link href="style.css" rel="stylesheet">
		<title> Quiz Game </title>
	
	</head>

	
	<div class="head">
		<h1 style="color: Black; text-align: center;"> Quiz Game </h1>
		
		
		<div class="loginfo">
		
			<h3 ><a href="user_logout.php">Logout</a>
			
		</div>
		
	</div>
	
	<div class="menu">
		<ul>
			<li><a href="Home.php">Home</a></li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Level</a>
				<div class="dropdown-content">
					<a href="level_scl.php"> School </a>
					<a href="level_clg.php"> College </a>
					<a href="level_uni.php"> University </a>
				</div>
			</li>
			
			<li><a href="user_contact_us.php">Contact us</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	
	<body>
		
		<div style="background-color: white; float: left; width: 50%; min-height: 601.9px;">
			
			<p> <h2> Feedback  </h3> <p>
			<p>
				Your feedback matters.
				Write to us if you have any questions, queries<br> 
				or suggestions regarding any page/content.<br> 
			</p>
			
			<form method="post" enctype="multipart/form-data" style="background-color: white;  padding: 20px; margin-bottom: 5%; margin-left: 5%; margin-right: 5%;">
				
				<fieldset style="background-color: white;">
					
					<legend> Feedback </legend>
					
					<br/><b> Email :</b>
						<input type="email" name="email_fd" value= "<?php echo $_SESSION['email_lg']; ?>" style="padding: 5px; top: 2px; width: 49%; margin-top: 5%; margin-left: 2%;">
					
					<br/><b> Subject :</b>
						<input type="text" name="subject_fd" style="padding: 5px; top: 2px; width: 49%; margin-top: 5%; margin-right: 5%;">
					
					
					<p> Massege </p>
					
					<textarea name="message_fd" rows="7" cols="40">
					
					</textarea>
					
					<p> <input type="submit" name="submit3" style="padding: 5px; top: 2px; width: 20%; bgcolor: green; " value="Submit"> </p>
				
				</fieldset>
			
			</form>
		
		</div>
		
		<div style="background-color: white; float: right; width: 50%; min-height: 601.9px;">
			
			<h2 align="center"> <u> Contact Details </u></h2>
			
			<p style="margin-top: 10%;">
				
				<h3  align="center">
					
					<p> Metropolitan University </p>
					<p> Botesshor, Sylhet </p>
					<p> Sylhet-3100,Bangladesh. </p>
					<p> Email :<a href="https://mail.google.com/mail/u/4/#inbox" target="blank"> tzamandiba@gmail.com</a></br>
					<p> Mobile: +8801313956399 </p>
				
				</h3>
			
			</p>
		
		</div>
			
		</div>
		
			<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
			
		</div>
	
	</body>
	
</html>