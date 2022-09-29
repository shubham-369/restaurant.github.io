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
        <style>
            <?php include'../style/left.css'; ?>
        </style>
    </head>
    <body>
            
        <div class="title">
            Welcome <?php echo $_SESSION['user']; ?>
        </div>
        <div class="dashboard">
            <a href="admin-panel.php" target="iframe_right"> 
                <i class="fa fas-fb"></i>
                Dashboard
            </a>
            <ul>
               <div class="dropdown">
                    <li class="btn" onclick="myFunction()">Menu</li>
                    <ul class="dropdown-menu hide" id="nested-list">
                        <li><a class="dropdown-item">Carousel-Menu</a></li>
                        <li><a class="dropdown-item">Carousel-Menu</a></li>
                        <li><a class="dropdown-item">Carousel-Menu</a></li>
                    </ul>
               </div>
            </ul>
            
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

        function myFunction(){
            var element = document.getElementById('nested-list');
            

        }

	</script>
    </body>
</html>