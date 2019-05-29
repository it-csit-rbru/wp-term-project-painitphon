<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-id-w10</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5shiv.min.js"></script>
            <script src="bootstrap/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body> 
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
       
        <div class="container">
            
            
            <div class="row">
               
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h1>เพิ่มข้อมูลผู้สอน</h1>
                    <?php
                        if(isset($_GET['submit'])){
                            $mv_id = $_GET['mv_id'];
                            $mv_name = $_GET['mv_name'];
                            $tt_name = $_GET['tt_name'];
                            $tt_t = $_GET['tt_t'];
                            $sql = "insert into lecturer";
                            $sql .= " values (null,'$mv_id','$mv_name','$tt_name','$tt_t')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มอาจารย์ $mv_name $tt_name เรียบร้อยแล้ว<br>";
                            echo '<a href="index.php">แสดงรายชื่ออาจารย์ทั้งหมด</a>';
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="movie_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    
                        <div class="form-group">
                            <label for="mv_name" class="col-md-2 col-lg-2 control-label">ชื่อหนัง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="mv_name" id="mv_name" class="form-control">
                            </div>    
                        </div>    
                        <div class="form-group">
                            <label for="tt_name" class="col-md-2 col-lg-2 control-label">ชื่อโรง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="tt_name" id="tt_name" class="form-control">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="tt_t" class="col-md-2 col-lg-2 control-label">รอบฉาย</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="tt_t" id="tt_t" class="form-control">
                            </div>    
                        </div> 

                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                    <?php
                        }
                    ?>
                </div>    
            </div>
            <div class="row">
            </div>
        </div>    
    </body>
</html>