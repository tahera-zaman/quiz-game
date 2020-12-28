<?php
		
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
				
			<h1> Knowledge Test for College Students </h1>
				
			<h3> Choose Your Category </h3>
			
			<button style="padding: 20px;"> <a href="user_gk_clg.php"> General Knowledge </a> </button>
			
			<button style="padding: 20px;"> <a href="user_ict_clg.php"> ICT </a> </button>
			
			<button style="padding: 20px;"> <a href="user_eng_clg.php"> English </a> </button>
			
			<button style="padding: 20px;"> <a href="user_math_clg.php"> Math </a> </button>
			
		</div>
		<div class="foter">
		
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
				
		</div>
	
	</body>
	
</html>