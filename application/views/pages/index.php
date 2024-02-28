<?php
if($this->session->user_login){
	redirect(base_url()."main");
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Integrated Barangay Information System</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url();?>design/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>design/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>design/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>design/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>design/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>design/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
<div class="pre-loader">
		<div class="pre-loader-box">
			<!-- <div class="loader-logo"><img src="<?=base_url();?>design/vendors/images/deskapp-logo.svg" alt=""></div> -->
            <div class="loader-logo"><img src="<?=base_url();?>design/vendors/images/ibislogo.gif" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Authenticating...
			</div>
		</div>
	</div>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="<?=base_url();?>">
					<img src="<?=base_url();?>design/vendors/images/ibislogo.gif" alt="" width="100">
                    &nbsp;<h3>Integrated Barangay Information System</h3>
				</a>
			</div>
			<!-- <div class="login-menu">
				<ul>
					<li><a href="register.html">Register</a></li>
				</ul>
			</div> -->
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?=base_url();?>design/vendors/images/login-page-img.png" alt="">                    
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">System Portal</h2>
						</div>
						<?=form_open(base_url()."login");?>
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn active">
										<input type="radio" name="options" id="admin" value="admin">
										<div class="icon"><img src="<?=base_url();?>design/vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>I'm</span>
										Admin
									</label>
									<label class="btn">
										<input type="radio" name="options" id="user" value="user">
										<div class="icon"><img src="<?=base_url();?>design/vendors/images/person.svg" class="svg" alt=""></div>
										<span>I'm</span>
										User
									</label>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<!-- <div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
								</div>
							</div> -->
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-success btn-lg btn-block">Sign In</button>
									</div>
									<!-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
									</div> -->                                    
								</div>
							</div>
						<?=form_close();?>
						<?php
				if($this->session->error){
					?>
					<div class="alert alert-danger" align="center"><?=$this->session->error;?></div>
				<?php
				}
				?>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?=base_url();?>design/vendors/scripts/core.js"></script>
	<script src="<?=base_url();?>design/vendors/scripts/script.min.js"></script>
	<script src="<?=base_url();?>design/vendors/scripts/process.js"></script>
	<script src="<?=base_url();?>design/vendors/scripts/layout-settings.js"></script>
    <!-- add sweet alert js & css in footer -->
	<script src="<?=base_url();?>design/src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="<?=base_url();?>design/src/plugins/sweetalert2/sweet-alert.init.js"></script>
    <script>
        
    </script>
</body>
</html>