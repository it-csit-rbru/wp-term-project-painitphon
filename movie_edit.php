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
    	<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->     
        <div class="container">
            <div class="row">
               
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h1>แก้ไขข้อมูลนักศึกษา</h1>
                    <?php
                        $std_id = $_REQUEST['mv_id'];
                        if(isset($_GET['submit'])){
                            $mv_id = $_GET['mv_id'];
                            $mv_name = $_GET['mv_name'];
                            $tt_name = $_GET['tt_name'];
                            $tt_t = $_GET['tt_t'];
                            $sql = "update movie_time set ";
                            $sql .= "mv_id='$mv_id',mv_name='$mv_name',tt_name='$tt_name',tt_t='$tt_t' ";
                            $sql .="where mv_id='$mv_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลนักศึกษา $mv_name $tt_name $tt_t เรียบร้อยแล้ว<br>";
                            echo '<a href="index.php">แสดงรายชื่อนักศึกษาทั้งหมด</a>';
                        }else{
                            include 'connectdb.php';
                            $sql2 = "select * from category where mv_id='$mv_id'";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                            $fmv_id = $row2['mv_id'];
                            $fmv_name = $row2['mv_name'];
                            $ftt_name = $row2['tt_name'];
                            $ftt_t = $row2['tt_t'];
                            mysqli_close($conn);
                    ?>
                    <form class="form-horizontal" role="form" name="movie_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                       
                                </select>
                           </div>    
                        </div>

                        <div class="form-group">
                            <label for="mv_name" class="col-md-2 col-lg-2 control-label">ชื่อหนัง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="mv_name" id="mv_name" class="form-control" 
                                       value="<?php echo $fmv_name;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="tt_name" class="col-md-2 col-lg-2 control-label">ชื่อโรงหนัง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="tt_name" id="tt_name" class="form-control" 
                                       value="<?php echo $ftt_name;?>">
                            </div>    
                        </div> 
                                
                        <div class="form-group">
                            <input type="hidden" name="mv_id" id="mv_id" value="<?php echo "$mv_id";?>">
                            <label for="tt_t" class="col-md-2 col-lg-2 control-label">รอบหนัง</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="tt_t" id="tt_t" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from movie_time where mv_id='$mv_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fmv_name = $row2['mv_name'];
                                    $ftt_name = $row2['tt_name'];
                                    $ftt_t = $row2['tt_t'];
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        }
                                        echo ">";
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                                
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                
                </div>    
            </div>
        </div>    
    </body>
</html>