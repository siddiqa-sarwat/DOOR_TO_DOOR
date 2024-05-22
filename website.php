<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>website</title>
	<!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">-->
	<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">-->
	<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">-->
	<link href="website.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
		<div class="owl-carousel" id="slider-area">
                    
			<div style="background-image:url(dbe3a659e36d3df79c17e39d3c8acf10.jpg) "></div>
                       
			<div style="background-image: url(dbe3a659e36d3df79c17e39d3c8acf10.jpg)"></div>
			<div style="background-image: url(dbe3a659e36d3df79c17e39d3c8acf10.jpg)"></div>
		</div>
		<div class="nav-area">
			<div class="nav">
				
				<a href="t&c.html">Terms and Conditions</a>  
				<a href="about.html">About</a> 
				<a href="contact.html">contact</a>
                               
		</div>
		<div class="slider-text">
			<h2>Door To <span> Door Dispatch</span></h2>
			<p>Forget that old-fashioned stuff, here’s our new-fashioned service</p>
                        
                        <br> <br> <br><br/>
                        
                        
                         <a href="admin_login.php">ADMIN</a>
                        <a href="deli_login.php">DELIVERY BOY</a>
                     <a href="signup.html">USER</a>
                      
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
	<script>
	$('#slider-area').owlCarousel({
	   loop: true,
	   autoplay: true,
	   responsive: {
	       0: {
	           items: 1
	       },
	       600: {
	           items: 1
	       },
	       1000: {
	           items: 1
	       }
	   }
	})        
	</script>
</body>
</html>

