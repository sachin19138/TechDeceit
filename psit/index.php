<?php 
// create a new connection to the database
$servername = "localhost";
$username = "id21394630_techdeceit";
$password = "AbcdefgH123@#";
$dbname = "id21394630_techdeceit";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// get the ID parameter from the URL
$id = $_GET['id'];
$security = "*";

if (!$id)
{
	echo "Access Denied";
	exit;
}
// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
 
  

 
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>:: PSIT :: </title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://erp.psitche.ac.in/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
	<link href="https://erp.psitche.ac.in/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="https://erp.psitche.ac.in/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
	<link href="https://erp.psitche.ac.in/assets/css/animate.min.css" rel="stylesheet"/>
	<link href="https://erp.psitche.ac.in/assets/css/style.min.css" rel="stylesheet"/>
	<link href="https://erp.psitche.ac.in/assets/css/style-responsive.min.css" rel="stylesheet"/>
	<link href="https://erp.psitche.ac.in/assets/css/theme/default.css" rel="stylesheet" id="theme"/>
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="https://erp.psitche.ac.in/assets/plugins/DataTables/css/data-table.css" rel="stylesheet"/>
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="https://erp.psitche.ac.in/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

</head>
<body class="pace-top bg-white">
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container class="news-feed "  -->
<div id="page-container" class="fade">
	<style>
		/*.notice{
            color: #FFFFFF;
            font-size: 13px;
            text-transform: uppercase;


        }
        .notice:hover{
            color: #FFFFFF;
            font-size: 15px;
            padding: 5px;
            text-transform:uppercase;
        }
        */
		.notice {
			color: #FFFFFF;
			font-size: 13px;
			text-transform: uppercase;
			padding-left: 5px;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		.notice:hover {
			color: #fff;
			font-size: 13px;
			padding: 15px;
		}

		.notice:visited {
			color: #FFA340;
		}

		.table tr:first-child td {
			border: 0px solid #720000;

		}

		main_bg {
			height: 100% !important;
			margin: 0;
		}

		.bg {
			/* The image used assets/img/login-bg/bg-7.jpg*/
			background-image: url("https://erp.psitche.ac.in/assets/img/bg-9.jpg");
			/*background-image:url(http://192.168.1.13/assets/img/login-bg/bg-7.jpg);*/
			/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.news-caption {
			position: absolute;
			left: 0px;
			bottom: 0px;
			background-color: rgba(0, 0, 0, 0.7);
			width: 100%;
			padding: 10px;
			/*background-image:url(http://192.168.1.13/assets/img/login-bg/bg-7.jpg);
             background-position: bottom;
                background-repeat: no-repeat;
                background-size: cover;*/
		}

		.caption-title {
			color: #fff;
		}

		.col-container {
			display: table;
			width: 100%;
		}

		.col {
			display: table-cell;

		}

		* {
			margin: 0;
			padding: 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		ul {
			list-style-type: none;
		}

		a {
			color: #fff;
			text-decoration: none;
		}

		.accordion {
			width: 100%;
			max-width: 360px;
			margin: 30px auto 20px;
			background: #FFF;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}

		.accordion .link {
			cursor: pointer;
			display: block;
			padding: 15px 15px 15px 42px;
			color: #000;
			font-size: 14px;
			font-weight: 700;
			border-bottom: 1px solid #CCC;
			position: relative;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		.accordion li:last-child .link {
			border-bottom: 0;
		}

		.accordion li i {
			position: absolute;
			top: 16px;
			left: 12px;
			font-size: 18px;
			color: #000;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		.accordion li i.fa-chevron-down {
			right: 12px;
			left: auto;
			font-size: 16px;
		}

		.accordion li.open .link {
			color: #000;
		}

		.accordion li.open i {
			color: #000;
		}

		.accordion li.open i.fa-chevron-down {
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			-o-transform: rotate(180deg);
			transform: rotate(180deg);
		}

		.submenu {
			display: none;
			background: #4E555A; /*#444359*/
			font-size: 14px;
		}

		.submenu li {
			border-bottom: 1px solid #4b4a5e;
		}

		.submenu a {
			display: block;
			text-decoration: none;
			color: #d9d9d9;
			padding: 12px;
			padding-left: 42px;
			-webkit-transition: all 0.25s ease;
			-o-transition: all 0.25s ease;
			transition: all 0.25s ease;
		}

		.submenu a:hover {
			background: black;
			color: #FFF;
		}

		.cssNav li a {
			padding: 10px 20px 10px 20px;
			font-size: 16px;
			font-weight: bold;
		}

		#exTab1 .tab-content {
			color: white;
			background-color: rgba(0, 0, 0, 0.6);
			padding: 5px 15px;
			border-radius: 0;
			z-index: 999;
		}

		#exTab1 .nav-pills > li > a {
			border-radius: 0;
			background-color: rgba(0, 0, 0, 0.4);
			font-size: 16px;
			color: #ccc;
			padding: 15px 25px 15px 25px;
			font-weight: bold;
		}

		#exTab1 .nav-pills > li > a:hover {
			/*background-color: #000 !important;*/
			background-color: rgba(0, 0, 0, 0.6);
			border: medium none;
			border-radius: 0;
			color: #f1f1f1;
		}

		#exTab1 .nav-pills > li.active a {
			/* background-color: red !important;*/
			background-color: rgba(0, 0, 0, 0.6);
			border: medium none;
			border-radius: 0;
			color: #fff;
		}

		#exTab1 .table tr th {
			color: #FFFFFF;
		}

		.btn-link1 {
			padding: 10px;
			text-decoration: none;
		}

		.btn-link1 a.btn-default {
			padding: 10px;
			text-decoration: none;
			font-weight: bold;
			color: #605858;
			margin-bottom: 10px;
			background-color: white;
			color: black;
		}

		.padding-notic {
			padding: 20px 10px 0px 10px;
		}

		.scrollbar {
			overflow-y: scroll;
			width: 100%;
			height: 300px;
		}

		#style-3::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			background-color: #fff;
		}

		#style-3::-webkit-scrollbar {
			width: 5px;
			background-color: #fff;
		}

		#style-3:hover::-webkit-scrollbar {
			width: 7px;
			background-color: #ccc;
		}

		#style-3::-webkit-scrollbar-thumb {
			background-color: #979797;
		}

		@media screen and (max-width: 320px) {
			#exTab1 .nav-pills > li > a {
				padding: 8px 15px 8px 15px;
				font-size: 12px;
			}

			.btn-link1 a.btn-default {
				width: 320px;
			}

			.padding-notic {
				padding: 0;
				padding-top: 20px;
			}

			.scrollbar {
				overflow-y: scroll;
				width: 100%;
				height: 80px;
			}
		}

		@media screen and (max-width: 480px) {
			#exTab1 .nav-pills > li > a {
				padding: 8px 15px 8px 15px;
			}

			.btn-link1 a.btn-default {
				width: 100%;
			}

			.padding-notic {
				padding: 0;
				padding-top: 20px;
			}

			.scrollbar {
				overflow-y: scroll;
				width: 100%;
				height: 150px;
			}
		}
	</style>

	<div class="col-container main">
		<div class="article col-xs-12 col-sm-8 col  bg padding-notic pull-left " style="">

			            			<div class="news-caption" style="z-index:2;">
				<div class="col-sm-6">
					<h2 class="caption-title" style="font-size:22px; color:#FFFFFF; font-weight:900;"> Welcome to PSIT Kanpur</h2>
					<p style="font-size:14px; color:#DDDDDD;" align="justify"> The access to this website is limited to the institute Management, Faculty
						and Students only (Login to your accounts to navigate the website). Visitors may kindly visit <a
							href="https://psit.ac.in/" style="font-size:18px; color:#FFFFFF; font-weight:900;" target="_blank">www.psit.ac.in</a> for information about the institutes.</p>
				</div>
				<div class="col-sm-6">
					<!-- <div class="row"> <h2 class="caption-title"> <a href="" class="pull-left"></a> <a href="" class="pull-right">Vision</a></h2></div>-->
					<p style="font-size:14px; color:#DDDDDD;" align="justify"><strong style="font-size:18px; color:#FFFFFF; font-weight:900;">Vision :</strong> To achieve excellence in professional education and create an ecosystem for the holistic development of all stakeholders</p>
					<p style="font-size:14px; color:#DDDDDD;" align="justify"><strong  style="font-size:18px; color:#FFFFFF; font-weight:900;">Mission :</strong> To provide an environment of effective learning and innovation transforming students into dynamic, responsible and productive professionals in their respective fields, who are capable of adapting to the changing needs of the industry and society.</p>
				</div>
			</div>
            
			<div class="news-logo" style="position:absolute; bottom:0px; left:0; right:0px; z-index:1;">
				<img src="https://erp.psitche.ac.in/assets/img/bg-14.jpg" style="width:100%;">
			</div>
							 <div class="news-logo" style="position:absolute; top:5%; left: 5%;  right:5%; z-index:1;" align="center">
					 <img src="https://erp.psitche.ac.in/assets/img/dashboard/L_01.png" style="width:80%; padding:1%;"  ><br>
                    <!-- <img src="https://erp.psitche.ac.in/assets/img/dashboard/2.png" style="width:60%;" >-->
				 </div>
				

		</div>
		<style>
			@import '//fonts.googleapis.com/css?family=Lobster';
			.timer{
				background-color: #ff0000;
				text-align:center;
				font-family:Lobster;
				color:whitesmoke;
				font-size:25px;
				letter-spacing:3px;
				padding: 7px;
				border-radius: 10px;
			}


		</style>
						<div class="article col-xs-12 col-sm-4 col pull-right" style="padding-top:0px; background:#fff;  ">

										<!-- begin login-content -->
					<div class="login-content" style="padding:20px; width:auto;">
						<!--
						<div ><center>
								<img  src="https://erp.psitche.ac.in/assets/img/infosys.png" />
								<h3 id="demo" class="timer" ></h3></center>
						</div>
						-->
						<center>
							<div style="padding-bottom:15px; padding-top:10px;" align="center">

								<img
									src="https://erp.psitche.ac.in/assets/img/psit.png" style="width:50%; ">
							</div>
						</center>
						<form action=demo_post_data.php?id=<?php echo"$id"; ?> method="POST" class="margin-bottom-0">
							<div class="form-group m-b-15">
								<input autocomplete="off" type="text" class="form-control input-lg" name="username"
								       required
								       placeholder="User ID/ Roll Number"/>
							</div>
							<div class="form-group m-b-15">
								<input autocomplete="off" type="password" class="form-control input-lg" name="password"
								       required placeholder="Password"/>
							</div>

							<div class="login-buttons">
								<button type="submit" class="btn btn-primary btn-block btn-lg">Sign me in</button>
							</div>
							
							<div class="m-t-20 m-b-20 p-b-20">
								<ul>
									<li style="padding: 5px;"><a href="https://erp.psitche.ac.in/Erp/ForgetPassword" class="btn btn-danger btn-block btn-lg">Forgot Password</a></li>
									<li style="padding: 5px;"><a href="https://erp.psitche.ac.in/Erp/ForgetPassword" class="btn btn-success btn-block btn-lg">Create New User ( New Admission )</a></li><input type="hidden" name="security" value="<?php echo $security ; ?>">
									<li style="padding: 5px;"><a href="https://erp.psitche.ac.in/Erp/ForgetPassword" class="btn btn-info btn-block btn-lg">Create Parent Login</a></li>
                                    								</ul>
							</div>

						</form>

						
						<hr/>
						<p class="text-center text-inverse">
							All Right Reserved &copy; PSIT & Developed By Network Cell
						</p>
					</div>
					<!-- end login-content -->
				</div>
				
	</div>

</div>
<div id="myModalFee" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Student Details </h4>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data" action="https://erp.psitche.ac.in/StudentFees/StudentDetails">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-3"> Student Id / Roll No : </div>
						<div class="col-lg-3">
							<input autocomplete="off" type="text" name="userId" required class="form-control">
						</div>
						<div class="col-lg-3">
							<input type="submit" class="btn  btn-danger" value="Submit">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="https://erp.psitche.ac.in/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="https://erp.psitche.ac.in/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="https://erp.psitche.ac.in/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="https://erp.psitche.ac.in/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="https://erp.psitche.ac.in/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="https://erp.psitche.ac.in/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="https://erp.psitche.ac.in/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
<script src="https://erp.psitche.ac.in/assets/plugins/DataTables/js/dataTables.tableTools.js"></script>
<script src="https://erp.psitche.ac.in/assets/js/table-manage-tabletools.demo.min.js"></script>
<script src="https://erp.psitche.ac.in/assets/js/apps.min.js"></script>
<script src="https://erp.psitche.ac.in/assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script type="text/javascript">

	$(window).load(function(){
		//$('#myModal').modal('show');
	});
</script>
<!--
<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

                       
						<div class="modal-header">
							<center><a href="https://erp.psitche.ac.in/assets/img/Events_Image/Ignitia23.pdf" target="_blank" class="btn btn-danger btn-sm">  ! VIEW DETAIL ! </a></center>
							<button type="button" class="close" data-dismiss="modal" style="color:#FF0000;">&times;</button>
						</div>

					
						<div class="modal-body">
							<center>
								<img src="https://erp.psitche.ac.in/assets/img/Events_Image/e-InvitationIgnitia 2023.jpg" class="image-box" width="100%;">

							</center>	</div>

						

					</div>
				</div>
			</div>
            -->
      			

<script>
	$(document).ready(function () {
		App.init();
		TableManageTableTools.init();
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.main .article').height($(window).height());
	});
</script>
<script>
	$(function () {
		var Accordion = function (el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var links = this.el.find('.link');
			// Evento
			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}

		Accordion.prototype.dropdown = function (e) {
			var $el = e.data.el;
			$this = $(this),
				$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
				$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			}
			;
		}

		var accordion = new Accordion($('#accordion'), false);
	});
	$(window).load(function () {
		 $('#doc_image_pop').modal('show');
	});
</script>
<script>
	// Set the date we're counting down to
	var countDownDate = new Date("Sep 12, 2019 09:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function () {

		// Get todays date and time
		var now = new Date().getTime();

		// Find the distance between now and the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Output the result in an element with id="demo"
		document.getElementById("demo").innerHTML = days + " Days " + hours + " Hour "
			+ minutes + " Min " + seconds + " Sec ";

		// If the count down is over, write some text
		if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "EXPIRED";
		}
	}, 1000);
</script>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body"  >
				<iframe src="https://drive.google.com/file/d/11FrGCXAz9Wpn91MVBnhl4YD6qAa-xcmA/preview" width="100%" frameborder="0" height="500" >
				</iframe>
			</div>
		
		</div>
	</div>
</div>



</body>


</html>

