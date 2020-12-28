<!DOCTYPE HTML>

<html>

	<?php
		include("connection.php");
	?>
	
	<?php
	
		if(! mysqli_select_db($conn,'quiz'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit']))
		{
			$name = ($_POST['name']);
			$email = ($_POST['email']);
			$password = ($_POST['password']);
			$confirm_password = ($_POST['confirm_password']);
			$gender = ($_POST['gender']);
			$institute = ($_POST['institute']);
			
			
			$sql = "INSERT INTO registration (";
			$sql .= "Name,Email,Password,Confirm_Password,Gender,Institute )";
			$sql .= "values (";
			$sql .= " '{$name}','{$email}','{$password}','{$confirm_password}','{$gender}','{$institute}' ";
			$sql .= ")";
			
			$result = mysqli_query($conn,$sql);
			
			if($result)
			{
				echo 'Successgully Registered';
				header('location:Login.php');
			}
			else
			{
				echo 'Unsuccessful';
				header('location:Signup.php');
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
		<th>
			<h3 ><a href="Login.php">Login</a>
			/
			<a href="Signup.php">Register</a></h3>
		</th>
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
			<div align="center">
				
				<br/><br/><br/><br>
				
				<h1> Register Here</h1>
				
				<form method="post" style="background-color: #fff; padding: 20px; margin-left: 25%; margin-right: 25%; margin-bottom: 10%;">
					
					<h3> Name : <input type="name" name="name" style="padding: 5px; top: 2px; width: 50%;"> </h3>
					<h3> Email : <input type="email" name="email" style="padding: 5px; top: 2px; width: 50%;"> </h3>
					<h3> Password : <input type="password" name="password" style="padding: 5px; top: 2px; width: 50%; margin-right: 4%;"> </h3>
					<h3> Confirm Password : <input type="password" name="confirm_password" style="padding: 5px; top: 2px; width: 50%; margin-right: 15%;"> </h3>
					<h3> Gender : <select type="radio" name="gender" style="padding: 5px; top: 2px; width: 30%; margin-right: 23%;"> 
									<option>Select</option> 
									<option>Male</option>
									<option>Female</option>
								 </select>	</h3>
					<h3> Institute : <input type="text" name="institute" style="padding: 5px; top: 2px; width: 50%; margin-right: 2%;"> </h3>
					<input type="submit" name="submit" style="padding: 8px; top: 2px; min-width: 20px;" value="Submit">
				
				</form>
				
			</div>
			
			<div class="foter">
		
				<p> Developed By <font color="Black"> &copy Tahera Zaman Diba </font> </p>
				
			</div>
		
		</div>
	</body>
	
	
	
</html>