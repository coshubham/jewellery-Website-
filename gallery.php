<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'header.php'; ?>	
<!--//banner-->
<!--gallery-->
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.moments-bottom a').Chocolat();
		});
		</script>
	<!--moments-starts--> 
	<div class="moments">
		<div class="container">
				<h3>GALLERY</h3>
			<div class="moments-bottom">
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w1.jpg">
							<img src="images/w1.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w2.jpg">
							<img src="images/w2.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w3.jpg">
							<img src="images/w3.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w4.jpg">
							<img src="images/w4.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w5.jpg">
							<img src="images/w5.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w6.jpg">
							<img src="images/w6.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" class="mask1" href="images/w7.jpg">
							<img src="images/w7.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w8.jpg">
							<img src="images/w8.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/w1.jpg">
							<img src="images/w1.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--moments-->
<!--//gallery-->
<!--contact-->

<!--footer-->


<!--footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>