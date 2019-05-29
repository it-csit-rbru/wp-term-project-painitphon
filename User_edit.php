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
							<h1>แก้ข้อมูลUser</h1>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>
			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
		
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->
    <body>
            <div class="row"> 
                <div class="col-sm-12 col-md-9 col-lg-9">
                    
                    <?php
                        $us_id = $_REQUEST['us_id'];
                        if(isset($_GET['submit'])){
                            $us_ttl = $_GET['us_ttl'];
                            $us_id = $_GET['us_id'];
                            $us_fname = $_GET['us_fname'];
                            $us_lname = $_GET['us_lname'];
                            $add_name = $_GET['add_name'];
                            $sql = "update user_add set ";
                            $sql .= "us_id='$us_id',us_fname='$us_fname',us_lname='$us_lname',us_ttl='$us_ttl',add_name='$add_name' ";
                            $sql .="where us_id='$us_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลนักศึกษา $us_fname $us_lname $add_name เรียบร้อยแล้ว<br>";
                            echo '<a href="index.php">แสดงรายชื่อนักศึกษาทั้งหมด</a>';
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="user_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="us_id" id="us_id" value="<?php echo "$us_id";?>">
                            <label for="us_ttl" class="col-md-2 col-lg-2 control-label">คำนำหน้าชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="us_ttl" id="us_ttl" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from user_add where us_id='$us_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fus_fname = $row2['us_fname'];
                                    $fus_lname = $row2['us_lname'];
                                    $fus_ttl = $row2['us_ttl'];
                                    $fadd_name= $row2['add_name'];
                                    $sql =  "SELECT * FROM title order by ttl_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['ttl_id'].'"';
                                        if($row['ttl_id']==$fus_ttl){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['ttl_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        
                        <div class="form-group">
                            <label for="us_fname" class="col-md-2 col-lg-2 control-label">ชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="us_fname" id="us_fname" class="form-control" 
                                       value="<?php echo $fus_fname;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="us_lname" class="col-md-2 col-lg-2 control-label">นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="us_lname" id="us_lname" class="form-control" 
                                       value="<?php echo $fus_lname;?>">
                            </div>    
                        </div> 
                                
                        <div class="form-group">
                            <label for="add_name" class="col-md-2 col-lg-2 control-label">อีเมล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="add_name" id="add_name" class="form-control" 
                                       value="<?php echo $fadd_name;?>">
                            </div>    
                        </div>  
                                <?php
                                    include 'connectdb.php';
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fus_fname = $row2['us_fname'];
                                    $fus_lname = $row2['us_lname'];
                                    $fadd_name = $row2['add_name'];
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
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
        </div>    
    </body>
</html>