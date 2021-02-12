<?php
session_start();
//print_r($_SESSION['id']);
//exit();
if (!isset($_SESSION['id'])) {
	header('location: login.php');
	# code...
}
?>



<!DOCTYPE HTML>
<html>
<head>
<title>User | Todo Dashboard</title>
<meta charset="UTF-8">
	<meta name="description" content="Users Dashboard">
	<meta name="author" content="Ravi kumar | PHP developer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap Core CSS -->
<link rel='stylesheet' type='text/css' href="dashboard/css/bootstrap.css"  />
<!-- Custom CSS -->
<link href="dashboard/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="dashboard/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js-->
<script src="dashboard/js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="dashboard/css/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- Metis Menu -->
<script src="dashboard/js/metisMenu.min.js"></script>
<script src="dashboard/js/custom.js"></script>
<link href="dashboard/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="profile.php"><i class="fa fa-user nav_icon"></i>Profile</a>
						</li>
						
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				
				<div class="logo">
					<a href="index.php">
						<?php
						 include 'connection.php';
						$ids= $_SESSION['id'];
						$selectuser= "select username from users where id = $ids";
						$result = mysqli_query($conn, $selectuser);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        //print_r($row);
                                        //exit();
                                        
                                   


						 ?>
						<h1><?php echo $row['username']; ?></h1>
					<?php } ?>
						<span>UaerPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<!--Profile Start here -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="#" alt=""> </span> 
									<div class="user-name">
										<p>TO-DO</p>
										<span>USER</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu"> 
								<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" style="background-color: #fdf9f9;">
			<div class="main-page">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<div>
								<h3><u>User Profile</u></h3>
							</div>

						</div>
					</div>
					<div class="clearfix"> </div>	
				</div>

				<div class="row">
					  <table class="table table-hover">
						    <thead>
						      <tr>
						        
						        <th>User Name</th>
						        <th>Email</th>
						        <th>Mobile</th>
						        <th class="text-center">Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?php
						    	$Selectquery = "select * from users where id =  $ids";
						    	$data = mysqli_query($conn, $Selectquery);
						    	if (mysqli_num_rows($data) > 0) {
						    		while ($rows = mysqli_fetch_assoc($data)) {
						    			//print_r($rows);?>

						    			
						    	<tr>
							        <td><?php echo $rows['username']?></td>
							        <td><?php echo $rows['email']; ?></td>
							        <td><?php echo $rows['mobile']; ?></td>
							        <td class="text-center"><a href="update.php?id=<?php echo $ids 	?>" class="btn btn-primary">Update</a>
							        							        </td>
							    </tr>
							    	<?php
							    	}
						    	}
						    	?>

						    </tbody>
					  	</table>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; <script> document.write(new Date().getFullYear());</script> TO-DO User Panel. All Rights Reserved | Design by <a href="#" target="_blank">Ravi kumar</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="dashboard/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="dashboard/js/jquery.nicescroll.js"></script>
	<script src="dashboard/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="dashboard/js/bootstrap.js"> </script>
</body>
</html>
