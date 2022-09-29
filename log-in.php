<?php
	session_start();
	 
	include "includes/db-conn.php";

	if(isset($_POST['submit'])){
		$username = ucfirst($_POST['username']);
		$password = $_POST['password'];

		$admin_sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$query = mysqli_query($conn, $admin_sql);

		$row = mysqli_num_rows($query);
		if($row == 1){
			echo 'login successful';
			$_SESSION['user'] = $username;
			header('location:admin/admin-panel.php'); 
		}else{
			echo "login failed";
			header('location:log-in.php');
		} 
	}
?>
<!doctype html>
<html lang="en">
  <head> 
	
 	 <title>login page</title>
	
	  <?php include 'includes/links.php';?>
  </head>
	<body class = "log-in-body">
		
		<div class = "LogIn-container"> 
			<img src = "assets/pizza.jpg" class = "LogIn-img"/>
			<div class = "card">
				<div class = "card-body">
					<h1> Log In </h1>
					<p> This page is for admin only </p>
					<form action = "#" method = "POST" role="form">
						<div class = "mb-3">
							<input type = "name" name = "username" class = "form-control admin-name" placeholder = "Admin Name" />
						</div>
						<div class = "input-group">
							<input type = "password" name = "password" class = "form-control password" placeholder = "Password" id = "input"/>
							<i class="fa-solid fa-eye input-group-text btn" onClick = "password()"></i>
						</div>
						<div class = "text-center">
							<button type = "submit" name="submit" class = "btn btn-danger"> Log In </button>
						</div>
					</form>
				
				</div>
				
			</div>
		</div>	
	
	<!-- swiper js -->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	
	<!-- javascript link -->
	<script type="text/javascript" src="js/javascript.js"></script>
	<!-- Optional JavaScript -->
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		
	<script>
		AOS.init({
			offset: 120,
			duration: 2100,
			once: true,
		});
	</script>
	</body>
	
</html>