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
					
					<form action="./PHP/player_insert.php" method="post" enctype="multipart/form-data">
                      <table width="40%" height="500px">
						<div class="row form-group">
							<div class="row form-group">
							
						</div>
							<div class="col-md-12">
								<tr>
								<h1>PLAYERS REGISTRATION!</h1>
								<h5>Insert your all players detail one by one!</h5>
								</tr>
								<tr>
								<td>Player Name:</td>
								<td><input type="text" id="name" name="name" class="form-control"></td>
							</tr>
							</div>
						</div>
							<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Player Designation</td>
								<td><input type="text" id="mobile" name="p_design"class="form-control"></td>
							</tr>
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Player Contact</td>
								<td><input type="number" id="mobile" name="contact"class="form-control"></td>
							</tr>
							</div>
						</div>
					
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Player Tye</td>
								<td><select class="form-control" required name="ptype">
								<option>Select Player Type</option>
								<option value="team-member">Team Member</option>	
                                <option value="extra">Extra</option> 

								</select></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Team Name:</td>
								<td><input type="text" id="team" name="team" class="form-control"></td>
							</tr>
							</div>
						</div>
                         <div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Player Image:</td>
								<td><input type="file" id="gametype" name="image" ></td>
							</tr>
							</div>
						</div>

						
						
						<div class="form-group">
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" value="submit" class="btn btn-primary" name="btn_ps"> &nbsp; &nbsp; &nbsp;  
						<input type="submit" value="Reset" class="btn btn-primary"></td>

							</tr>

						</div>
                    </table>
					</form>		
				</div>
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

