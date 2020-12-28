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
	
	<div id="slide1">
		  
		<img src="pic1.jpg">
		
	</div>
	
	<div id="slide2">
	  
		<img src="pic2.jpg">
	
	</div>
	
	<div id="slide3">
	  
		<img src="pic3.jpg">
	
	</div>
	
	<div id="slide4">
	  
		<img src="pic4.jpg">
	
	</div>
	
	<body >
		<script>
		
			var i=0;
			function x()
			{
				if(i==0)
				{
					document.getElementById('slide1').style.display='block';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					i=1;
				}
				else if(i==1)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='block';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					
					i=2;
				}
				else if(i==2)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='block';
					document.getElementById('slide4').style.display='none';
					
					i=3;
				}
				else if(i==3)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='block';
					
					i=0;
				}
				
				
				setTimeout(function(){x();},2000);
				
			}
			x();

		</script>
		
		<div class="foter">
		
				<p> Copyright <font color="Black"> &copy Tahera Zaman Diba </font> </p>
				
		</div>
	
	</body>
	
</html>