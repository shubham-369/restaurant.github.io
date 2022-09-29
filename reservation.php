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
			 <li class = "nav-item px-3"><a href = "reservation.php" class = "nav-link active"> Reservation </a></li>
			 <li class = "nav-item px-3"><a href = "about.php" class = "nav-link"> About </a></li>
			 <li class = "nav-item px-3"><a href = "contact.php" class = "nav-link"> Contact </a></li>
			</ul>
		</div>
   </div>	
	
  </nav><!-- navbar ends -->
  
  	<section class = "parallax m-custom" data-aos = "fade-in">
		<div class = "parallax-inner text-center">
			<h1>Make Reservation</h1>
			<h6>
				<a href = "index.php">
					HOME
				</a>
				>&nbsp;
				RESERVATION
			</h6>
		</div>
	</section>
	
	<div class = "container">
		<div class = "row">
			<div class = "col-md-5 col-12 p-0" data-aos = "fade-in">
				<img src = "assets/customer.jpg" class = "ceo-img" alt = "ceo"/>
			</div>
			<div class = "col-md-7 col-12 pl-md-5 pl-3">
				<h3 class = "pt-5 text-center fira-font" data-aos = "fade-in"> <span class = "a-font"> Book A Table </span><br> Make Reservation </h3>
				<form method = "POST">
				<div class = "row pt-5">
					<div class = "col-md-6 col-12 mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class = "col-md-6 col-12 mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class = "col-md-6 col-12 mb-3">
						<label for="number" class="form-label">Phone</label>
						<input type="tel" class="form-control" id="number">
					</div>
					<div class = "col-md-6 col-12 mb-3">
						<label for="date" class="form-label">Date</label>
						<input type="date" class="form-control" id="date">
					</div>
					<div class = "col-md-6 col-12 mb-3">
						<label for="time" class="form-label">Time</label>
						<input type="time" class="form-control" id="time">
					</div>
					<div class = "col-md-6 col-12 mb-3">
						<label for="person" class="form-label">Person</label>
						<select class = "form-control" name = "person" id="person">
							<option>Person</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4+">4+</option>
						</select>
					</div>
				</div>
					<div class = "py-3 text-center">
						<a href = "" class = "btn btn-danger py-3 px-5">Make A Reservation</a>
					</div>
				</form>
			</div>
		</div>	
	</div>	
 
<?php include 'includes/footer.php';?>