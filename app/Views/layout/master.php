
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from <?php base_url()?>/spark/spark.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 04:30:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
	<meta name="author" content="Bootlab">

  <?= $this->renderSection('title') ?>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<link href="<?php base_url()?>/spark/spark.bootlab.io/css/modern.css" rel="stylesheet">
	<!-- <link href="<?php base_url()?>/spark/spark.bootlab.io/css/classic.css" rel="stylesheet"> -->
	<!-- <link href="<?php base_url()?>/spark/spark.bootlab.io/css/dark.css" rel="stylesheet">
	<link href="<?php base_url()?>/spark/spark.bootlab.io/css/light.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="<?php base_url()?>/spark/spark.bootlab.io/js/settings.js"></script>
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script>
</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="index.html">
				<img src="https://www.bacloud.com/templates/bc-qloud/assets/images/slider/cloud.png" style="width:25%;" alt="">
				    SOCIAL HOSTING
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="<?php base_url()?>/spark/spark.bootlab.io/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="fw-bold">Richard Dwi Putra</div>
					<small>FullStack Developer</small>
				</div>

				<ul class="sidebar-nav">
        <li class="sidebar-item ">
						<a class="sidebar-link" href="<?= site_url('Dashboard') ?>">
            <i class="align-middle me-2 fas fa-fw fa-home " ></i><span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-header">
						Data Center
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-database"></i> <span class="align-middle">Data Center</span>
						</a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<?php 
							// if(isset($_POST['latest-view'])){
							// 	global $wpdb;
							// 	$wpdb->insert(
							// 		$wpdb->prefix.'vpshistory',
							// 		[
								
							// 		]	
							// 	);
							// }
							?>
            <?php foreach($nodes['data'] as $node): ?>
				<form action=" <?=site_url('simpan')  ?>  "method="post">
				<input type="hidden" name="name" value="vps">
							<li class="sidebar-item"><a class="sidebar-link" href="<?= site_url('Vps') ?>"> <button type="submit" name="latest-view" value="<?= $node['node'] ?>"></button>  <span class="dot " style="height: 10px;width: 10px; background-color: #28a745;border-radius: 50%;display: inline-block; float:right;"></span></a>
			</form>
            </li>
            <?php endforeach; ?>
			<form action="<?= site_url('simpanServer')?>" method="post">
			<input type="hidden" name="name" value="server">
			<li class="sidebar-item"><a class="sidebar-link" href="<?= site_url('detailserver') ?>"> <i class="align-middle me-2 fas fa-fw fa-database"></i> <span><button type="submit" name="latest-view" value="" class="btn bg-transparent btn-outline-primary">Details Server</button></span></a>
            </form>
		</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
				
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
					
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
								<span class="indicator"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
			<?= $this->renderSection('body') ?>
			</main>
			<footer class="footer bg-white">
				<div class="container-fluid ">
					<div class="row text-muted">
						<div class="col-8 text-start" style="color:black;">
              Design By Team Intern Program UNIVERSITAS ADVENT INDONESIA
						</div>
						<div class="col-4 text-end">
							<p class="mb-0">
								&copy; 2022 - <a href="dashboard-default.html" class="text-muted" >Social Hosting</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="<?php base_url()?>/spark/spark.bootlab.io/js/app.js"></script>
  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	</script>
</body>


<!-- Mirrored from <?php base_url()?>/spark/spark.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 04:30:17 GMT -->
</html>