<?php
		session_start();
?>

<!DOCTYPE HTML>

<html>
	
	<?php
		include("connection.php");
	?>
	
	<?php
	
		if(isset($_POST['submit_lg']))
		{
			$email=$_POST['email_lg'];
			$password=$_POST['password_lg'];
			
			if($email=='admin@admin.com' && $password=='admin')
			{
				header('location:Admin.php');
			}
			$sql= "select * from registration where Email='$email' and Password='$password'";	
			
			$res=mysqli_query($conn, $sql);
		
			$email_count = mysqli_num_rows($res);
			
			if($email_count)
			{
				$email_pass = mysqli_fetch_assoc($res);
				
				echo "Login Successfull";
				//$name = $_GET['Name'];
				$_SESSION['email_lg']=$email_pass['Email'];
				$_SESSION['name']=$email_pass['Name'];
				header('location:Home.php');
			}
			else
			{
				//echo "Login failed";
				$message = "Wrong Email or Password";
				//header('location:Login.php');
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
		
			<h3 ><a href="Login.php">Login</a>
			/
			<a href="Signup.php">Register</a></h3>
		
		</div>
		
	</div>
	
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			
			<li><a href="contact_us.php">Contact us</a></li>
			<li><a href="about_public.php">About</a></li>
		</ul>
	</div>
	
	<body>
	
		<div style="background-color: #ccc;">
			<div size="4" align="center">
				
				<br/><br/><br/><br>
				
				<?php
						if(isset($message))
						echo "<h2>" . $message . "</h2>";
					?>
				<h1> Login Here</h1>
				
				<form method="post" style="background-color: #fff; padding: 20px; margin-left: 25%; margin-right: 25%; margin-bottom: 10%;">
					
					<p> <input type="email" name="email_lg" style="padding: 5px; top: 2px; width: 50%;" placeholder="Email"> </p>
					<p> <input type="password" name="password_lg" style="padding: 5px; top: 2px; width: 50%;" placeholder="Password"> </p>
					<p> <input type="submit" name="submit_lg" style="padding: 5px; top: 2px; bgcolor: green; min-width: 20px;" value="Login"> </p>
					
					<a href="forgot.php">
					
						<strong>Forgot Password </strong>
						
					</a>
					
					<a href="signup.php">
					
						<strong>Create an account</strong>

					</a>
				
				</form>
				
			</div>
			
				<div class="foter">
		
				<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
				
			</div>
			
		</div>
	
	</body>
	
</html>