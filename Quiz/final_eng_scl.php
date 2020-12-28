<?php

	include("connection.php");
	
	session_start();
	
	if(! isset($_SESSION['email_lg']))
	{
		//echo "You are Logout";
		header('loction:Login.php');
	}

?>

<!DOCTYPE HTML>

<html>

	<head>
		
		<link href="style.css" rel="stylesheet">
		<title> Quiz Game </title>
		
	
	</head>
	<div class="head">
		<h2 style="color: Black;"> Quiz Game </h2>
		<h3 style="color: Black; text-align: center;"> Welcome <?php echo $_SESSION['name']; ?> Test Your Knowledge</h3> 
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
	
		<div style="background-color: #ccc; padding: 115px;">
				
			<h1> Thanks for participating in the Quiz </h1>
			
			<h1> Your Result </h1>
				
			<h3> Congratulation You Have Completed This Test Successfully </h3>
			
			<h4> Type : Multiple Choice </h4>
			
			<h4> Your <strong> Score </strong> is <?php echo $_SESSION['score']; ?>  </h4>
			
			<?php unset ($_SESSION['score']); ?>
			
			<button style="padding: 20px;"> <a href="level_scl.php"> Back </a> </button>
			
		</div>
	
		<div class="foter">
			
				<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
					
		</div>
	</body>
	
</html>