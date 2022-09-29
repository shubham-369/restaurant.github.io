<?php

session_start();

if(!isset($_SESSION['user'])){
	header('location:../index.php');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Page</title>
		<?php include'../includes/links.php'; ?>
	</head>
	<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-3 left">
				<iframe src="left.php" name="iframe_left" title="left IFrame"></iframe>
			</div>
			<div class="col-9 right">
				<iframe src="" name="iframe_right" title="right IFrame"></iframe>
			</div>
		</div>
	</div>

	</div>
		






















	<a href="../log-out.php" class="btn btn-danger"> Log out </a>

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