<?= $this->extend('layout/master') ?>
<?= $this->section('title') ?>
    <title>Vps</title>
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Data VPS
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Data Vps</h5>
								
								</div>
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Vmid</th>
												<th>Name</th>
                                                <th>Maxmem</th>
												<th>Cpu</th>
                                                <th>Cpus</th>
												<th>Net In</th>
												<th>Net Out</th>
                                                <th>Max Disk</th>
                                                <th>Status</th>
                                                <th>More</th>
											</tr>
										</thead>
										<tbody>
                                        <?php usort($qemu['data'], function($a, $b)
                                                {
                                                    return strcmp($a['vmid'], $b['vmid']);
                                                });?>
                                        <?php foreach($qemu['data'] as $key => $qm): ?>
                                            <?php if($qm['status']=="running")
                                                 { ?>
											<tr>
												<td style="width:15px;"><?=$key +1 ?></td>
												<td ><?=$qm['vmid']?></td>
												<td ><?=$qm['name']?></td>
												<td><?=$qm['maxmem']?></td>
												<td><?=$qm['cpu']?></td>
                                                <td><?=$qm['cpus']?></td>
                                                <td><?=$qm['netin']?></td>
												<td><?=$qm['netout']?></td>
                                                <td><?=$qm['maxdisk']?></td>
                                                <td><span class="badge bg-success" ><?=$qm['status']?></span></td>
                                                <td><a href="<?=site_url('Vps/detailvps/'.$qm['vmid'])?>"> <i class="align-middle me-2 fas fa-fw fa-eye " ></i></a></td>
											</tr>
                                            <?php }else{ ?>
                                                <tr>
												<td style="width:15px;"><?=$key +1 ?></td>
												<td ><?=$qm['vmid']?></td>
												<td ><?=$qm['name']?></td>
												<td><?=$qm['maxmem']?></td>
												<td><?=$qm['cpu']?></td>
                                                <td><?=$qm['cpus']?></td>
                                                <td><?=$qm['netin']?></td>
												<td><?=$qm['netout']?></td>
                                                <td><?=$qm['maxdisk']?></td>
                                                <td><span class="badge bg-danger" ><?=$qm['status']?></span></td>
                                                <td><a href="<?=site_url('Vps/detailvps/'.$qm['vmid'])?>"> <i class="align-middle me-2 fas fa-fw fa-eye " ></i></a></td>
											</tr>
                                            <?php } ?>
                                            <?php endforeach;?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
<?= $this->endSection() ?>