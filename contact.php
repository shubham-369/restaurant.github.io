<!doctype html>
<html lang="en">
  <head> 
	
 	 <title>RK Restaurant</title>
	
	  <?php include 'includes/links.php';?>
  </head>

<body>
  <!-- navbar begins -->
  <nav class = "navbar navbar-expand-lg navbar-light bg-light nav-index fixed-top">
   <div class = "container">
	<a href = "index.php" class = "brand-font brand-text"> RK Restaurant </a>
	<a class = "btn border-0 navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarText" aria-controls = "navbarText" aria-expanded = "false" aria-label = "toggle navigation">
		<span class = "navbar-toggler-icon mr-5"><span class = "red-color">Menu</span></span>
	</a>		
		<div class = "collapse navbar-collapse justify-content-end" id = "navbarText">
			<ul class = "navbar-nav d-flex text-white px-5" id = "myDiv">
			 <li class = "nav-item px-3"><a href = "index.php" class = "nav-link"> Home </a></li>
			 <li class = "nav-item px-3"><a href = "specialties.php" class = "nav-link"> Specialties </a></li>
			 <li class = "nav-item px-3"><a href = "reservation.php" class = "nav-link"> Reservation </a></li>
			 <li class = "nav-item px-3"><a href = "about.php" class = "nav-link"> About </a></li>
			 <li class = "nav-item px-3"><a href = "contact.php" class = "nav-link active"> Contact </a></li>
			</ul>
		</div>
   </div>	
	
  </nav><!-- navbar ends -->
  
  	<section class = "parallax m-custom" data-aos = "fade-in">
		<div class = "parallax-inner text-center">
			<h1>Contact Us</h1>
			<h6>
				<a href = "index.php">
					HOME
				</a>
				>&nbsp;
				CONTACT
			</h6>
		</div>
	</section>
	
	<div class = "container py-5">
		<h4 class = "py-5 contact-info">Contact Information</h4>
		<div class = "row">
			<div class = "col-md-3 col-12 contact-divs">
				<p>Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
			</div>
			<div class = "col-md-3 col-12 contact-divs">
				<p>Phone: <a href = ""> + 1235 2355 98</a> </p>
			</div>
			<div class = "col-md-3 col-12 contact-divs">
				<p>Email: <a href = ""> info@yoursite.com</a> </p>
			</div>
			<div class = "col-md-3 col-12 contact-divs">
				<p>Website: <a href = ""> yoursite.com</a> </p>
			</div>
		</div>
	</div>
	
	<div class = "container">
		<div class = "row">
			<div class = "col-md-7 col-12">
				<div id="map-container-google-11" class="z-depth-1-half map-container-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d274.7354238945048!2d77.67771673942111!3d27.479537305199283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39737129371e480b%3A0x295d2c7211cea44b!2sRadha%20Krishna%20Restaurant!5e0!3m2!1sen!2sin!4v1654894266504!5m2!1sen!2sin" width="600" height="696" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			</div>
			<div class = "col-md-5 col-12 map">
				<h1> Contact Us </h1>
				<form>
					<div class="mb-3">
						<input type = "name" class = "form-control" placeholder = "Your Name"/>
					</div>	
					<div class="mb-3">
						<input type = "name" class = "form-control" placeholder = "Your Email"/>
					</div>
					<div class="mb-3">
						<input type = "name" class = "form-control" placeholder = "Subject"/>
					</div>
					<div class="mb-3">
						<textarea class = "form-control" placeholder = "Message"></textarea>
					</div>
					<button class = "btn btn-danger"> Send Meassage</button>
				</form>
			</div>
		</div>
	</div>	
<?php include 'includes/footer.php';?>