<!DOCTYPE HTML>

<html>

	<head>
		
		<link href="style.css" rel="stylesheet">
		<title> Quiz Game </title>
		<title>  <?php echo $_SESSION['name']; ?> </title>
		
	
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