<!doctype html>
<html lang="en">
  <head>
  	<title>Bindas इंडिया न्यूज़</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend/news') ?>/assets/css/style.css" />
	
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/') ?>css/navbar.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/') ?>css/style.css">
	<link rel="icon" href="<?php echo base_url('upload/frontend/logo2.png') ?>" type="image/icon type">


	</head>
	<body>
	<section class="ftco-section">
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		<div class="text-center mt-1 ml-2">
					<!-- <a href="<?php echo base_url() ?>"><h5 class="logo"><span>Bindas</span>हिंदी न्यूज़ </h5></a> -->
					<a href="<?php echo base_url() ?>"><img src="<?php echo base_url('upload/frontend/logo.png') ?>" width="100" alt="logo"></a>
				</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
					<?php foreach( $menu as $data ){ ?>
						<li class="nav-item"><a href="<?php echo base_url('Main/view/').$data['id']; ?>" class="nav-link"><?php echo$data['title'] ?></a></li>
					<?php } ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">अन्य</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
						<?php foreach( $menus as $data ){ ?>
								<a class="dropdown-item" href="<?php echo base_url('Main/view/').$data['id']; ?>"><?php echo$data['title'] ?></a>
							<?php } ?>
							</div>
						</li>
					</ul>
					<div class="d-flex">
							<div class="social-media">
							<p class="mb-0 d-flex">
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
							</p>
					</div>
					</div>
			</div>
		</div>
		</nav>

    <!-- END nav -->
	</section>
