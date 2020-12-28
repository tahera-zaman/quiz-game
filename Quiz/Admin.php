<?php
		
	session_start();
	
	if(! isset($_SESSION['email']))
	{
		//echo "You are Logout";
		header('loction:Login.php');
	}
?>

<?php
	include("connection.php");
?>


<!DOCTYPE HTML>

<html>

	<?php
		include("connection.php");
	?>

	<head>
		
		<link href="style.css" rel="stylesheet">
		<title> Quiz Game Admin Panel </title>
	
	</head>

	
	<div class="head">
		<h1 style="color: Black; text-align: center;"> Welcome to Admin Panel </h1>
		
		
		<div class="loginfo">
			<th>
				<h3 ><a href="Login.php">Logout</a>
			</th>
		</div>
		
	
	</div>
	
	<body>
	
	<div style="background-color: white;  padding: 70px;">
	
		<link href="styleadmin.css" rel="stylesheet">
			
		<h1>Add Question</h1></br>
		
		<div class="menu">
			<ul>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">School</a>
					<div class="dropdown-content">
						<a href="scl_gk.php"> General Knowledge </a>
						<a href="scl_ict.php"> ICT </a>
						<a href="scl_eng.php"> English </a>
						<a href="scl_math.php"> Math </a>
					</div>
				</li>
				
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">College</a>
					<div class="dropdown-content">
						<a href="clg_gk.php"> General Knowledge </a>
						<a href="clg_ict.php"> ICT </a>
						<a href="clg_eng.php"> English </a>
						<a href="clg_math.php"> Math </a>
					</div>
				</li>
			
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">University</a>
					<div class="dropdown-content">
						<a href="uni_gk.php"> General Knowledge </a>
						<a href="uni_ict.php"> ICT </a>
						<a href="uni_eng.php"> English </a>
						<a href="uni_math.php"> Math </a>
					</div>
				</li>
			</ul>
		</div>
		
		</br></br></br></br>
		</br></br>
		</br></br></br></br>
		
	</div>
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
			
		</div>
	
	</body>
	
</html>