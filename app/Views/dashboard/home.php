<?= $this->extend('layout/master') ?>
<?= $this->section('title') ?>
    <title>Dashboard</title>
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Analytics Dashboard
						</h1>
						<p class="header-subtitle"></p>
					</div>
</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-4 col-xxl-4 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Data VPS</h5>
													</div>
												<?php
												$running=0;
												$stopped=0;
												$total=0;
												foreach($qemu['data'] as $qm){
													if($qm['status']=="running"){
														$running++;
													}else{
														$stopped++;
													}
												}
												$total=$running+$stopped;
												?>
													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-primary-dark">
																<i class="align-middle" data-feather="database"></i>
															</div>
														</div>
													</div>
												</div>
												<h1 class="display-5 mt-2 mb-4"><?= $total ?></h1>
												<div class="mb-0">
													Total VPS In Server
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-xxl-4 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">VPS Running</h5>
													</div>

													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-success">
																<i class="align-middle" data-feather="database"></i>
															</div>
														</div>
													</div>
												</div>
											
												<h1 class="display-5 mt-2 mb-4"><?= $running ?></h1>
												<div class="mb-0">
													Total VPS Running In Server
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-xxl-4 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">VPS Stopped</h5>
													</div>

													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-danger">
																<i class="align-middle" data-feather="database"></i>
															</div>
														</div>
													</div>
												</div>
												<h1 class="display-5 mt-2 mb-4"><?= $stopped ?></h1>
												<div class="mb-0">
													Total VPS Stopped In Server
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?= $this->endSection() ?>