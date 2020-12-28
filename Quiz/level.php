
<!DOCTYPE HTML>

<html>


	<?php
		
		//session_start();
		//echo $_SESSION['name'];
		
		if(! isset($_SESSION['email_lg']))
		{
			//echo "You are Logout";
			header('loction:Login.php');
		}
	?>

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
				<a href="javascript:void(0)" class="dropbtn">Category</a>
				<div class="dropdown-content">
					<a href="user_gk_scl.php"> General Knowledge </a>
					<a href="ict.php"> ICT </a>
					<a href="english.php"> English </a>
					<a href="math.php"> Math </a>
				</div>
			</li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Level</a>
				<div class="dropdown-content">
					<a href="school.php"> School </a>
					<a href="college.php"> College </a>
					<a href="university.php"> University </a>
				</div>
			</li>
			
			<li><a href="user_contact_us.php">Contact us</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	
	<body>
	
		<div style="background-color: #ccc; padding: 115px;">
				
			<h1> Test Your General Knowledge</h1>
				
			<h3> This is a multiple choice quiz to test your knowledge </h3>
			
			<h4> Number of Question : 10 </h4>
			
			<h4> Type : Multiple Choice </h4>
			
			<h4> Time : 10 minute </h4>
			
			<button style="padding: 10px; color: green; background-color: black;"> Start Quiz </button>
			
		</div>
		<div class="foter">
		
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
				
		</div>
	
	</body>
	
</html>