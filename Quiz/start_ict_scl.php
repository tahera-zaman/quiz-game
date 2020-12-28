<?php

	include("connection.php");
		
	session_start();
	
	if(! isset($_SESSION['email_lg']))
	{
		//echo "You are Logout";
		header('loction:Login.php');
	}
?>

<?php
	
	// Set Question Number
	$number = $_GET['n'];
	
	// Query for Question
	$query = "SELECT * FROM question_school_ict WHERE question_number = $number";
	
	// Get Question
	$result = mysqli_query($conn, $query);
	$question = mysqli_fetch_assoc($result);
	
	// Get Option
	$query = "SELECT * FROM answer_scl_ict_option WHERE question_number = $number";
	$choice = mysqli_query($conn, $query);
	
	// Get Total questions
	$query = "SELECT * FROM question_school_ict";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
	
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
			
			<div style="padding: 10px; border: #000 dotted 1px; margin: 20px 0 10px 0; width: 60%; background: #f4f4f4;">
			 
				<h2> Question <?php echo $number; ?> of <?php echo $total_questions; ?> </h2>
			
			</div> 
			
			<p> <?php echo $question['question_text']; ?> </p>
			 
			<form method="POST" action="process_ict_scl.php">
				
				<ul>
					<?php while($row=mysqli_fetch_assoc($choice)) { ?>
					<li> <input type="radio" name="choice" value="<?php echo $row['id']; ?>"> <?php echo $row['answer_option']; ?> </li>
					<?php } ?>
				
				</ul>
				
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				<button style="padding: 10px;"> <input type="submit" name="submit" value="submit"> </button>
			</form>
		</div>
		<div class="foter">
		
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
				
		</div>
	
	</body>
	
</html>