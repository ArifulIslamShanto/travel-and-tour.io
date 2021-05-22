<!DOCTYPE html>
<html>
<head>
</head>
 <title>Login Page</title>
 <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
 <link href='css/aboutus.css' rel='stylesheet'>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body style= "background-color:#7f8c8d">
<header>
	      <ul>
		  <li><a style="text-decoration: none;" href='Homepage.php'>Home</a></li>
	  <li><a style="text-decoration: none;" href='recommandation.php'>Recommendation</a></li>
	  <li><a style="text-decoration: none;" href='portfolio.php'>Portfolio</a></li>
	  <li><a style="text-decoration: none;" href='aboutus.php'>About Us</a></li>
	  <li><a style="text-decoration: none;" href='contactus.php'>Contact Us</a></li>
	  <li><a style="text-decoration: none;">Log In</a>
	  
	  <ul>
	       <li><a href='adminlogin.php'>Admin</a></li>
		   <li><a href='userlogin.php'>User</a></li>
		   </ul>
	  </li>
	  <li><a href='registration.php'>Sign Up</a></li></ul>
 
 
      </header> 
    <h2 id="id"></h2>
	 <div id="main-wrapper">
	    <center>
		   <h2>User Login Form</h2>
		    <img src="imagesstore/member-portal.jpg" class="image"/>
		</center>
        
        <div class="myform" >
            <label>Email:</label><br/>
            <input type="text" id="email" name="email" class="inputvalues" placeholder="Enter Your Email" required/></br></br>
			
			<label>Password:</label><br/>
			<input type="password" id="password" name="password" class="inputvalues" placeholder="Password" required/><br/><br/>
			
            <center><input type="submit" name="login" id="login_btn" value="Login" /><br/></center>
			<center><a href="homepage.php"> <input type="button" id="back_btn" value="Back" /></a><br/></center>
			
		</div>	
		
 	</div>
     <script type="text/javascript" src="js/userlogin.js"></script>
</body>	
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="imagesstore/logo.png"style="width:130px;height:130px;"></h3>

				<p class="footer-links">
					<a href="homepage.php">Home</a>
					·
					<a href="recommandation.php">Recommendation</a>
					·
					<a href="portfolio.php">Portfolio</a>
					·
					<a href="aboutus.php">About Us</a>
					·
					<a href="contactus.php">Contact Us</a>
				</p>

				<p class="footer-company-name">Tour&Travel &copy; 2021</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Bashundhara</span> Dhaka, Bangladesh</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+088 01521402847</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:ariful.shanto@northsouth.edu">ariful.shanto@northsouth.edu</a></p>
				</div>

			</div>
</html>



























































