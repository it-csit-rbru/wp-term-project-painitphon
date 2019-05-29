<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>My com</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<h1>IT.COM</h1>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">ข้อมูลuser</a></li>
					<li><a href="#portfolio">โปสเตอร์หนัง</a></li>
					<li><a href="#service">รายชื่อหนังรอบหนัง</a></li>
					<li><a href="#pricing">รายชื่อคนดูหนัง</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">My Database</h1>
							<p class="white-text">ตารางเก็บข้อมูลคนไปดูหนัง.
							</p>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- ข้อมูลuser -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">ข้อมูลUser</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-sm-4 col-md-5">
				<body>        
        <div class="container">
            <div class="row"> 
            </div>
            <div class="row">  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <a href="user_add.php" class="btn btn-link">เพิ่มข้อมูลUser</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รหัส</th>
									<th>คำนามหน้า</th>
                                    <th>ชื่อ</th>
                                    <th>สกุล</th>
                                    <th colspan="2">อีเมล</th>
                                </tr>
                            </thead>
                            <body>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM user_add order by us_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
							echo '<td>' . $row['us_id'] . '</td>';
							echo '<td>' .$row['ttl_name'].'</td>';
                            echo '<td>' . $row['us_fname'] .'</td>' ;
                            echo '<td>' . $row['us_lname'] .'</td>';
                            echo '<td>' . $row['add_name'] .'</td>';
                            echo '<td>';
                            ?>
                                <a href="user_edit.php?us_id=<?php echo $row['us_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='user_delete.php?us_id=<?php echo $row["us_id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </body>
                        </table>    
                </div>    
            </div>
        </div>    
    </body>
						
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">โปรแกรมหนัง</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work1.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>jonwich Chapter 3</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work2.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Thesun is also a star</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work2.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work3.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Avengers Endgame</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work3.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work4.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Rocketman</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work4.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work5.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Pikachu</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work5.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work6.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>BlacKkKlansman</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work6.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
	        <div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">รายชื่อหนังรอบหนัง</h2>
				</div>
				<div class="container">
            <div class="row"> 
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <a href="movie_add.php" class="btn btn-link">เพิ่มภาพยนต์</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>รหัส</th>
								<th>ชื่อหนัง</th>
								<th>ชื่อโรงภาพยนต์</th>
								<th>เวลาฉาย</th>
                                <th colspan="2"></th>
                            </tr>                
                        </thead>
                        <body>
                            <?php
                                include 'connectdb.php';
                                $sql =  'SELECT * FROM movie_time order by mv_id';
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                    echo '<tr>';
                                    echo '<td>' . $row['mv_id'] . '</td>';
                                    echo '<td>' . $row['mv_name'] . '</td>';
                                    echo '<td>' . $row['tt_name'] . '</td>';
                                    echo '<td>' . $row['tt_t'] . '</td>';
                                    echo '<td>';
                            ?>
                                <a href="movie_edit.php?mv_id=<?php echo $row['mv_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='movie_delete.php?mv_id=<?php echo $row["mv_id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
                        </body>    
                    </table>
                </div>    
            </div>
        </div> 
				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	
	<!-- Pricing -->
	<div id="pricing" class="section md-padding">
       
	   <!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">รายชื่อคนดูหนังทั้งหมด</h2>
				</div>
			</div>
		

		</div>
		<!-- /Container -->
		<div class="container">
            <div class="row"> 
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <a href="Remix_add.php" class="btn btn-link">เพิ่มช้อมูลคนดู</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>รหัส</th>
                                <th>คำนำหน้า</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>อีเมล์</th>
                                <th>ชื่อหนัง</th>
                                <th>ชื่อโรงหนัง</th>
                                <th>เวลาฉาย</th>
                                <th colspan="2"></th>
                            </tr>                
                        </thead>
                        <body>
                            <?php
                                include 'connectdb.php';
                                $sql =  'SELECT * FROM us_mv order by us_id';
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                    echo '<tr>';
                                    echo '<td>' . $row['us_id'] . '</td>';
                                    echo '<td>' . $row['ttl_name'] . '</td>';
                                    echo '<td>' . $row['us_fname'] .' </td>';
                                    echo '<td>' . $row['us_lname'] . '</td>';
                                    echo '<td>' . $row['add_name'] . '</td>';
                                    echo '<td>' . $row['mv_name'] . '</td>';
                                    echo '<td>' . $row['tt_name'] . '</td>';
                                    echo '<td>' . $row['tt_t'] . '</td>';
                                    echo '<td>';
                            ?>
                                <a href="Remix_edit.php?tls_id=<?php echo $row['tls_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='remix_delete.php?tls_id=<?php echo $row["tls_id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
                        </body>    
                    </table>
                </div>    
            </div>
        </div> 

	</div>
	<!-- /Pricing -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">
					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>0925828510</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>6014421011@rbru.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>4/179 จันทบุรี</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
