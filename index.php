<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("location: backup.php");
 }
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'header.php'; ?>	

<?php echo "<h1 style='font-family:cooper; color:#fff; margin-left:45rem; margin-top:5rem;'>Welcome ". $_SESSION['username']."</h1>"; ?>
<div class="button" style="margin-left:111rem; margin-top:-9rem;">
    <button style="background-color:red; border:none; border-radius:20px; height:3rem; width:7.6rem; color:#fff; font-family:cooper; font-size:1.7rem"><a href="logout.php">Logout</a></button>
	</div>



	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
								<li><h1>EXQUISITE DESIGNER JEWELLERY</h1></li>	
								<li><h1>EXCLUSIVE QUALITY</h1></li>
								<li><h1>LATEST DESIGNS WITH BEST PRICES</h1></li>
						  </ul>
						  
						  <p>With Our Jewellery You Discover Your Natural Beauty</p>
						  <a class="morebtn" href="#">MORE</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="wel-header">
			<h3>WELCOME</h3>
		</div>
		<div class="wel-grids">
			<div class="col-md-5 wel-left">
				<p>Sed ut perspiciatis unde omnis iste natus 
				error sit voluptatem accusantium doloremque laudantium, 
				totam rem aperiam, eaque ipsa quae ab illo inventore 
				veritatis et quasi architecto beatae vitae.</p>
			</div>
			<div class="col-md-2 wel-middle text-center">
				<img src="images/444.png" alt=" "/>
			</div>
			<div class="col-md-5 wel-right">
				<p>Sed ut perspiciatis unde omnis iste natus 
				error sit voluptatem accusantium doloremque laudantium, 
				totam rem aperiam, eaque ipsa quae ab illo inventore 
				veritatis et quasi architecto beatae vitae.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- welcome -->
<!--categories-->
<div id="cate" class="categories">
	 <div class="container">
		<div class="cat-head">
			<h3>LATEST DESIGNS</h3>
		</div>

		 <div class="categorie-grids cs-style-1">
				 <div class="col-md-4 cate-grid grid">
				 <form action="manger_cart.php" method="POST">
					<figure>
						<img src="images/c1.jpg" alt="">
						<figcaption>
							<h3>Necklaces</h3>
							<span>Price:Rs.20000</span>
							<button type="subimt" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Necklaces">
                           <input type="hidden" name="Price" value="20000">

							<!-- <a href="#">VIEW</a> -->
						</figcaption>
					</figure>
</form>
				 </div>
				 <div class="col-md-4 cate-grid grid">
				 <form action="manger_cart.php" method="POST">
					 <figure>
						<img src="images/c2.jpg" alt="">
						<figcaption>
							<h3>Diamond EarRing</h3>
							<span>Price:Rs.285000</span>
							<button type="subimt" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Diamond EarRing">
                           <input type="hidden" name="Price" value="285000">
						</figcaption>
					</figure>
</form>
				 </div>


				 <div class="col-md-4 cate-grid grid">
					<form action="manger_cart.php" method="POST">
					 <figure>
						<img src="images/c3.jpg" alt="">
						<figcaption>
							<h3>Bracelets</h3>
							<span>Price:Rs.15999</span>
							<button type="subimt" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Bracelets">
                           <input type="hidden" name="Price" value="15999">
						</figcaption>
					</figure>
</form>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<form action="manger_cart.php" method="POST">
					<figure>
						<img src="images/c4.jpg" alt="">
						<figcaption>
							<h3>Stone Bracelets</h3>
							<span>Price:Rs.5299</span>
							<button type="subimt" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Stone Bracelets ">
                           <input type="hidden" name="Price" value="5299">
						</figcaption>
					</figure>
</form>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<form action="manger_cart.php" method="POST">
					<figure>
						<img src="images/c5.jpg" alt="">
						<figcaption>
							<h3>Stone EarRing</h3>
							<span>Price:Rs.2999</span>
							<button type="subimt" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Stone EarRing">
                           <input type="hidden" name="Price" value="2999">
						</figcaption>
					</figure>
</form>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<form action="manger_cart.php" method="POST">
					 <figure>
						<img src="images/c6.jpg" alt="">
						<figcaption>
							<h3>Gold Chain With Red Stone</h3>
							<span>Price:Rs.33020</span>
							<button type="subimt" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Gold Chain With Red Stone">
                           <input type="hidden" name="Price" value="33020">
						</figcaption>
					</figure>
</form>
				 </div>

			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--categories-->
<!--flex slider-->
<div class="flex-slider">
	<div class="container">
	</div>
</div>
<!--flex slider-->
<!--contact-->

<!---->

<!---->
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