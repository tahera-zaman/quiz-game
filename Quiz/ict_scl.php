<!DOCTYPE HTML>

<html>

	<?php
		include("connection.php");
	?>
	
	<?php
	
		 if(! mysqli_select_db($conn,'quiz'))
			echo 'Database not selected';
		
		if(isset($_POST['submit_admin']))
		{
			$question_number = $_POST['question_number'];
			$question_text = $_POST['question_text'];
			$correct_option = $_POST['correct_option'];
			
			
			
			//Choice Array
			$choice = array();
			$choice[1] = $_POST['option1'];
			$choice[2] = $_POST['option2'];
			$choice[3] = $_POST['option3'];
			$choice[4] = $_POST['option4'];
			
			$query = "INSERT INTO question_school_ict (";
			$query .= "question_number, question_text )";
			$query .= "VALUES (";
			$query .= " '{$question_number}','{$question_text}' ";
			$query .= ")";
			
			
			
			$result = mysqli_query($conn,$query);
			
			if($result)
			{
				//echo 'hamaise';
				foreach($choice as $option => $value)
				{
					if($value != "")
					{
						if($correct_option == $option)
						{
							$is_correct = 1;
						}
						else
						{
							$is_correct = 0;
						}
						
						$query = "INSERT INTO answer_scl_ict_option (";
						$query .= "question_number, is_correct, answer_option )";
						$query .= "VALUES (";
						$query .= " '{$question_number}','{$is_correct}', '{$value}' ";
						$query .= ")";
						
						$insert_row = mysqli_query($conn,$query);
						
						if($insert_row)
						{
							//echo 'kam oise';
							continue;
						}
						else
						{
							die("Query Could not be Execute");
						}
						
					}
					
				}
				$message = "Question has been added successfully";
			}
		}
		
		$query = "SELECT * FROM question_school_ict";
		$questions = mysqli_query($conn,$query);
		$total = mysqli_num_rows($questions);
		$next = $total + 1;
	
	?>

	<head>
		
		<link href="style.css" rel="stylesheet">
		<title> Quiz Game </title>
	
	</head>

	
	<div class="head">
		<h1 style="color: Black; text-align: center;"> Admin Panel </h1>
		
		
		<div class="loginfo">
			<th>
				<h3><a href="Login.php">Logout</a>
			</th>
		</div>
		
	</div>
	
	<body>
	
		<link href="styleadmin.css" rel="stylesheet">
		
		<div style="background-color: white;  padding: 20px;">
	
			<form  method="post"  style="background-color: white;  padding: 20px;">
				<?php
				if(isset($message))
					echo "<h4>" . $message . "</h4>";
				?>
				<h1 style="text-align: center">School Level ICT Question</h1></br>
					<b>
						<p>
							<h2 style="margin-left: 15%"> Question Number : </h2>
							<input type="number" name="question_number" value="<?php echo $next; ?>" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 5%;">
						</p>
						
						<p>
							<h2 style="margin-left: 15%"> Question Text : </h2>
							<input type="text" name="question_text" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 50%;">
						</p>
						
						<p>
							<h2 style="margin-left: 15%"> Option 1 : </h2>
							<input type="text" name="option1" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 50%;">
						</p>
						
						<p>
							<h2 style="margin-left: 15%"> Option 2 : </h2>
							<input type="text" name="option2" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 50%;">
						</p>
						
						<p>
							<h2 style="margin-left: 15%"> Option 3 : </h2>
							<input type="text" name="option3" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 50%;">
						</p>
						
						<p>
							<h2 style="margin-left: 15%"> Option 4 : </h2>
							<input type="text" name="option4" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 50%;">
						</p>
						
						<p>
							<h2 style="margin-left: 15%"> Correct Option Number : </h2>
							<input type="number" name="correct_option" style="margin-right: 15%; margin-left: 15%; padding: 5px; width: 5%;">
						</p>
						</br>
					
						<input type="submit" name="submit_admin" value="Submit" style="padding: 10px;  width: 10%; margin-left: 56%">		
						
					</b>
				
			</form>
		
			<button style="padding: 10px;  width: 10%; margin-left: 15%"> Cancel </button>
		
		</div>
		
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba</font> </p>
			
		</div>
	
	</body>
	
</html>