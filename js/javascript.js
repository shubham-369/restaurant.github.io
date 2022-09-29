
		
		const swiper = new Swiper('.swiper', {
		 spaceBetween: 30,
		 effect: "flip",
		 grabCursor: true,
		 autoplay:{
			delay: 1800,
			disableOnInteraction: false,
			},
		  loop: true,

		});
	

		var nav = document.querySelector('nav');
		
		window.addEventListener('scroll',function(){
			if(window.pageYOffset > 100){
			nav.classList.add('bg-light','shadow');
			} else{
			nav.classList.remove('bg-light','shadow');
			}
		});
	

		var brand = document.querySelector('.brand-text');
		
		window.addEventListener('scroll',function(){
			if(window.pageYOffset > 100){
			brand.classList.add('brand-text-1');
			} else{
			brand.classList.remove('brand-text-1');
			}
		});
		
		var brand = document.querySelector('.brand-text-h');
		
		window.addEventListener('scroll',function(){
			if(window.pageYOffset > 100){
			brand.classList.add('brand-text-1');
			} else{
			brand.classList.remove('brand-text-1');
			}
		});

	$(function(){
		let start = 0;
		let end = $(".counter1").html();
		let speed = 282;
		
		setInterval(function(){
			if(start<end){
				start++;
			}
			$(".counter1").html(start);
		},speed);
	});
	$(function(){
		let start = 0;
		let end = $(".counter2").html();
		let speed = 3;
		
		setInterval(function(){
			if(start<end){
				start++;
			}
			$(".counter2").html(start);
		},speed);
	});
	$(function(){
		let start = 0;
		let end = $(".counter3").html();
		let speed = 136;
		
		setInterval(function(){
			if(start<end){
				start++;
			}
			$(".counter3").html(start);
		},speed);
	});
	
	function password() {
	  var x = document.getElementById("input");
	  if (x.type === "password") {
		x.type = "text";
	  } else {
		x.type = "password";
	  }
	}

	
 
	