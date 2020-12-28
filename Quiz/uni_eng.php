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
			
			$query = "INSERT INTO question_uni_eng (";
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
						
						$query = "INSERT INTO answer_uni_eng_option (";
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
		
		$query = "SELECT * FROM question_uni_eng";
		$questions = mysqli_query($conn,$query);
		$total = mysqli_num_rows($questions);
		$next = $total + 1;
	
	?>
	
	<?php
		
		if(isset($_REQUEST['delid']))
		{
			$delid = $_REQUEST['delid'];
			$sql = "DELETE FROM question_uni_eng WHERE question_number='$delid'";
			$sql_a = "DELETE FROM answer_uni_eng_option WHERE question_number='$delid'";
			
			$result = mysqli_query($conn, $sql);
			$result_a = mysqli_query($conn, $sql_a);
			if($result)
			{
				echo 'Data Deleted';
				header('location:uni_eng.php');
			}
			else
			{
				echo 'Data Not Deleted';
				header('location:uni_eng.php');
			}
		}
	
	?>

	<head>
		
		<link href="style.css" rel="stylesheet">
		<title> Quiz Game Admin Panel</title>
	
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
			
			<button style="padding: 10px;  width: 10%; margin-left: 15%"> <a href="Admin.php">Back</a> </button>
			
			<form  method="post"  style="background-color: white;  padding: 20px;">
				<?php
				if(isset($message))
					echo "<h4>" . $message . "</h4>";
				?>
				<h1 style="text-align: center">University Level English Question</h1></br>
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
		
			<button style="padding: 10px;  width: 10%; margin-left: 15%"><a href="uni_eng.php"> Cancel </a> </button>
			
			</br></br></br></br>
			<h1 style="text-align: center">	All Question</h1></br>
			
			<?php
				
				$sql_q = "SELECT * FROM question_uni_eng";
				$sql_a = "SELECT * FROM answer_uni_eng_option";
				
				$res_q = mysqli_query($conn,$sql_q);
				$res_a = mysqli_query($conn,$sql_a);
			
				echo '<table border="10">';
					echo '<tr>';
						echo '<td>'.'Question Number'.'</td>';
						echo '<td>'.'Question'.'</td>';
						echo '<td>'.'Delete it'.'</td>';
					echo '</tr>';
					
					while( $arr=mysqli_fetch_array($res_q) )
					{
						
			?>
						<tr>
							<td><?php echo $arr['question_number'] ?></td>
							<td><?php echo $arr['question_text'] ?></td>
							<td><a href="scl_gk.php?delid=<?php echo $arr['question_number']?> "> Delete</a> </td>
							
						</tr>
				
				<?php		
					}
					echo '</table>';
				?>
			
		</div>
		
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
			
		</div>
	
	</body>
	
</html>