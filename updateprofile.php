<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sports Club</title>


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">

	
	<link rel="stylesheet" href="css/magnific-popup.css">


	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">


	<link rel="stylesheet" href="css/style.css">

	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +91 960 449 9066</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="http://localhost/php/sport/code/admin/admin_login.html"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
         include("commonpages/loginheader.php")
		?>
	</nav>
				<div class="col-md-12 animate-box" align="center">

					<div class="box">
                
				 <table height="400px">
				<h1 id="logo">UpdateUser<span class="gray">Profile</span></h1>
                	<form action="./PHP/updateprofile.php" method="POST">
                            <tr>
                                <td>User name :</td>
                        <td><input name="username"  type="text" /></td></tr>
                            <tr>
                                <td>Age:</td>
                        <td><input name="age"  type="text" /></td></tr>
                            <tr>
                        <td> Mobile :</td>    
                                <td><input name="number"  type="number" /></td></tr>
                            <tr>
                        <td>Email:</td>
                                <td><input name="email"  type="text" /></td></tr>
                            <tr>
                        <td>Address:</td>
                                <td><input name="area" type="text"></td></tr>
                            <tr>
                               <div class="form-group">
							
								<td>&nbsp;</td>
								<td><input type="submit" value="UPDATE" class="btn btn-primary"> </td>&nbsp

							</tr>
							</form>
                          </table>
						</div>
				<br/>	
	</div>
<?php
         include("commonpages/footer.php")
		?>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<script src="js/jquery.min.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>

	<script src="js/jquery.countTo.js"></script>

	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/main.js"></script>

	</body>
</html>

