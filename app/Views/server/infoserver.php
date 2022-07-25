<?= $this->extend('layout/master') ?>
<?= $this->section('title') ?>
<title>Info Server</title>
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<div class="container-fluid">
    <div class="header">
        <h1 class="header-title">
            Analytics Dashboard
        </h1>
        <p class="header-subtitle"></p>
    </div>
    <?php
     $cpu= number_format(($qemu['data']['cpu']*100),2,'.','');
     $swap= number_format((($qemu['data']['swap']['used']/$qemu['data']['swap']['total'])*100),2,'.','');
     $memory= number_format((($qemu['data']['memory']['used']/$qemu['data']['memory']['total'])*100),2,'.','');
     $rootf= number_format((($qemu['data']['rootfs']['used']/$qemu['data']['rootfs']['total'])*100),2,'.','');
     $idle= number_format(($qemu['data']['idle']*100),2,'.','');
    ?>
</div>
<script>
    var button= document.getElementById('clicker');
    setInterval(function(){
        button.click()
    }, 1000)
</script>

<div class="container-fluid"> 
    <div class="row">
        <div class="col-xl-6 col-xxl-6 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-2 col-md-6">
                                        <i class="menu-icon tf-icons bx bx-memory-card"></i>
                                       <span>CPU Usage</span>
                                       <div class="" style="float:right">fasdafd</div>
                                        <div class="progress-bar bg-primary-dark" role="progressbar" style="width: <?=$cpu?>%; border-radius:20px;"
                                            aria-valuenow="<?=$cpu?>" aria-valuemin="0" aria-valuemax="100"><?=$cpu?>%</div>
                                    </div>
                                <div class="mb-2 col-md-6">
                                    <i class="menu-icon tf-icons bx bx-chip"></i>
                                    <span>IO Delay</span>
                                    <div class="" style="float:right">fasdafd</div>
                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: <?=$idle?>%;"
                                            aria-valuenow="<?=$idle?>" aria-valuemin="0" aria-valuemax="100"><?=$idle?>%</div>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <i class="menu-icon tf-icons bx bx-microchip"></i>
                                    <span>RAM Usage</span>
                                    <div class="" style="float:right">fasdafd</div>
                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: <?=$memory?>%;"
                                            aria-valuenow="<?=$memory?>" aria-valuemin="0" aria-valuemax="100"><?=$memory?>%</div>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <i class="menu-icon tf-icons bx bx-desktop"></i>
                                    <span>Load Average</span>
                                    <div class="" style="float:right"><?php foreach($qemu['data']['loadavg'] as $qm): ?>
                                       <?= $qm ?> ,
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <i class="menu-icon tf-icons bx bx-desktop"></i>
                                    <span>KSM sharing </span>
                                    <div class="" style="float:right"><?= $qemu['data']['ksm']['shared'] ?></div>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <i class="menu-icon tf-icons bx bx-network-chart"></i>
                                     <span>SWAP Usage</span>
                                    <div class="" style="float:right">fasdafd</div>
                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: <?=$cpu?>%;"
                                            aria-valuenow="<?=$cpu?>" aria-valuemin="0" aria-valuemax="100"><?=$cpu?>%</div>
                                </div>
                                <div class="mb-2 col-md-12">
                                <span> / HD space </span>
                                    <div class="" style="float:right">fasdafd</div>
                                    <div class="progress-bar bg-primary-dark" role="progressbar" style="width: <?= $rootf?>%;"
                                            aria-valuenow="<?= $rootf;?>" aria-valuemin="0" aria-valuemax="100"><?= $rootf?>%</div>
                                </div>
                                <div class="mb-2 col-md-12">
                                    <i class="menu-icon tf-icons bx bx-desktop"></i>
                                    <span>CPU(s)  </span>
                                    <div class="" style="float:right"><?= $qemu['data']['cpuinfo']['model']?> (<?= $qemu['data']['cpuinfo']['sockets']?> Socket)</div>
                                </div>
                                <div class="mb-2 col-md-12">
                                    <i class="menu-icon tf-icons bx bx-desktop"></i>
                                    <span>Kernel Version  </span>
                                    <div class="" style="float:right"><?= $qemu['data']['kversion'] ?></div>
                                </div>
                                <div class="mb-2 col-md-12">
                                    <i class="menu-icon tf-icons bx bx-desktop"></i>
                                    <span>PVE Manager Version  </span>
                                    <div class="" style="float:right"><?= $qemu['data']['pveversion'] ?></div>
                                </div>
                                <div class="mb-2 col-md-12">
                                    <i class="menu-icon tf-icons bx bx-desktop"></i>
                                    <span>Repository Status </span>
                                    <div class="" style="float:right">fasdafd</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-6 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<form action=" <?=site_url('cpuusage')  ?>" method="post">
    <input type="hidden" name="usage" value="<?= $cpu ?>" id="cpus">
    <button type="submit" id="clicker"></button>
</form>
<!-- <button hidden="hidden">asdsdfdsfsdf</button> -->
<?= $this->endSection() ?>