<!doctype html>
<html lang="en">
 <head> 

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='css/contactus.css' rel='stylesheet'>


	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


  <title>Contact Us</title>
 
</head>



<body>

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
    <center><h1 class="portHeader">Contact us</h1></center>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">Bangladesh</option>
	  <option value="usa">India</option>
	  <option value="usa">Bhutan</option>
	  <option value="usa">Singapur</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <center><a href="homepage.php">submit</a>
	 
  </form>
</div>

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
			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About Us</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				

			</div>

		</footer>
</br>
</html>
