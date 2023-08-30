<?php 
 include 'components/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		header("location: login.php");
	}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Ally's Little Corner - home page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		
		<section class="home-section">
			<div class="slider">
				<div class="slider__slider slide1">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>You can think of it? We can embroid it!<h1>
						<p>We love making your dreams and visions come true especially for a special occasion for a loved one.</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide2">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Welcome to Ally's Little Corner lovelies!</h1>
						<p>My name is Ally and this is my little space I created as an escape from reality and I hope it's a place of comfort for you</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide3">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Help us give back more to our community</h1>
						<p>More than 90% of our profits go to local Vietnamese orphanages and now you can be a part of it too!</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="left-arrow"><i class='bx bxs-left-arrow'></i></div>
                <div class="right-arrow"><i class='bx bxs-right-arrow'></i></div>
			</div>
		</section>
		<!-- home slider end -->
		<section class="thumb">
			<div class="box-container">
				<div class="box">
					<img src="img/thumbn.jpg">
					<h3>Flowers</h3>
					<p>Flower patterns of any kind and stitch that you'd prefer</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb0n.png">
					<h3>Landscape</h3>
				    <p>Give any painting or picture and we will turn it into embroidery!</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb1n.png">
					<h3>Cartoons</h3>
					<p>Craving sushi? Love a cute character? Send it right over to us! </p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb2n.png">
					<h3>Self-potraits</h3>
					<p>Want a picture of yourself? We can make that happen!</p>
					<i class="bx bx-chevron-right"></i>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="box-container">
				<div class="box">
					<img src="img/5n.avif">
				</div>
				<div class="box">
					<img src="img/iconn.png">
					<span>beautiful embroidery</span>
					<h1>save up to 50% off</h1>
					<p>Find out more about our products and see what our customers think!</p>
				</div>
			</div>
		</section>
		<section class="shop">
			<div class="title">
				<img src="img/iconn.png">
				<h1>Trending Products</h1>
			</div>
			<div class="row">
				<img src="img/7n.jpg">
				<div class="row-detail">
					<img src="img/17n.jpg">
					<div class="top-footer">
						<h1>a piece of embroidery makes you happy</h1>
					</div>
				</div>
			</div>
			<div class="box-container">
				<div class="box">
					<img src="img/product1.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/product5.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/product7.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/product9.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/product8.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/product12.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</section>
		<section class="shop-category">
			<div class="box-container">
				<div class="box">
					<img src="img/8n.jpg">
					<div class="detail">
						<span>BIG OFFERS</span>
						<h1>Extra 15% off</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
				<div class="box">
					<img src="img/29n.jpg">
					<div class="detail">
						<span>new in store</span>
						<h1>fresh designs</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="img/icon2.png">
					<div class="detail">
						<h3>great savings</h3>
						<p>save big every order</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon1.png">
					<div class="detail">
						<h3>24*7 support</h3>
						<p>one-on-one support</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon0.png">
					<div class="detail">
						<h3>gift vouchers</h3>
						<p>vouchers on every festivals</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon.png">
					<div class="detail">
						<h3>worldwide delivery</h3>
						<p>dropship worldwide</p>
					</div>
				</div>
			</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>