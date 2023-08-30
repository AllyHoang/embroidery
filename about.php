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
	<title>Ally's Little Corner - about us page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>about us</h1>
		</div>
		<div class="title2">
			<a href="home.php">home </a><span>/ about</span>
		</div>
		<div class="about-category">
			<div class="box">
				<img src="img/21n.jpg">
				<div class="detail">
					<span>embroidery</span>
					<h1>flowers</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/18n.jpg">
				<div class="detail">
					<span>embroidery</span>
					<h1>self potraits</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/23n.jpg">
				<div class="detail">
					<span>embroidery</span>
					<h1>cartoons</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/15n.webp">
				<div class="detail">
					<span>embroidery</span>
					<h1>landscapes</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<section class="services">
			<div class="title">
				<img src="img/iconn.png" class="logo">
				<h1>why choose us</h1>
				<p> Our biggest aim is to bring the best customer experience for you and here's how we do it!
                </p>
			</div>
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
		</section>
		<div class="testimonial-container">
			<div class="title">
				<img src="img/iconn.png" class="logo">
				<h1>what people say about us</h1>
				<p> Real user experiences and stories for your comfort!
                </p>
            </div>
                <div class="container">
                	<div class="testimonial-item active">
                		<img src="img/01.jpg">
                		<h1>sara smith</h1>
                		<p>Absolutely thrilled with the custom embroidery work I received! The attention to detail is amazing, and the colors are so vibrant. The team at this shop was friendly and patient, ensuring they captured my vision perfectly. Will definitely be coming back for more projects</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/02.jpg">
                		<h1>john smith</h1>
                		<p>Highly impressed with the quality of embroidery from this shop. They turned my company logo into an exquisite piece of art on our uniforms. The stitching is flawless, and the materials used are top-notch. Quick turnaround time too</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/03.jpg">
                		<h1>selena ansari</h1>
                		<p>I wanted a unique gift for my friend's baby shower, and this embroidery shop delivered beyond my expectations. The personalized baby blanket I ordered was beautifully crafted, and the delicate details made it extra special. Thank you for making the moment memorable!</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/04.png">
                		<h1>alweena ansari</h1>
                		<p>Incredible craftsmanship and creativity! I brought in an old jacket that I loved but was a bit worn out. The embroidery work done by this shop transformed it into a stylish and trendy piece. It feels like I have a brand new jacket now. Kudos to the talented artists here!</p>
                	</div>
                	<div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                	<div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide(){
		    slides[index].classList.remove('active');
		    index = (index + 1) % slides.length;
		    slides[index].classList.add('active');
		}
		function prevSlide(){
		    slides[index].classList.remove('active');
		    index = (index - 1 + slides.length) % slides.length;
		    slides[index].classList.add('active');
		}
	</script>
	<?php include 'components/alert.php'; ?>
</body>
</html>