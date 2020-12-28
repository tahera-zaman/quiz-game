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
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		//We need total question in process file too
		$query = "SELECT * FROM question_uni_math";
		$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
		
		//We need to capture the question number from where form was submitted
		$number = $_POST['number'];
	
		//Here we are storing the selected option by user
		$selected_choice = $_POST['choice'];
		
		//What will be the next question number
		$next = $number+1;
		
		$query = "SELECT * FROM answer_uni_math_option WHERE question_number = $number AND is_correct = 1";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
		
		$correct_choice = $row['id'];
		
		if($selected_choice == $correct_choice){
			$_SESSION['score']++;
		}
		
		//Redirect to next question or final score page. 
		if($number == $total_questions){
			header("LOCATION: final_math_uni.php");
		}else{
			header("LOCATION: start_math_uni.php?n=". $next);
		}
	 
	}
?>