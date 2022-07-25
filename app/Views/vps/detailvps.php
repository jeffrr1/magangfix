<?= $this->extend('layout/master') ?>
<?= $this->section('title') ?>
<title>Detail</title>
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<div class="container-fluid">

  <div class="header">
    <h1 class="header-title">
      Detail Spesifikasi VPS
    </h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Detail VPS</h5>

        </div>
        <div class="card-body">

          <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row">
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-memory-card"></i>
                <label for="firstName" class="form-label">Memory</label>
                <input class="form-control" type="text" id="firstName" name="firstName"
                  value="<?= $qemu['data']['memory']/1024; ?> GiB" disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-chip"></i>
                <label for="lastName" class="form-label">Procesors</label>
                <input class="form-control" type="text" name="lastName" id="lastName"
                  value="<?= $qemu['data']['sockets'] ?> Socket <?= $qemu['data']['cores'] ?> Core <?= $qemu['data']['cpulimit'] ?> CpuLimit "
                  disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-microchip"></i>
                <label for="email" class="form-label">BIOS</label>
                <input class="form-control" type="text" id="email" name="email"
                  value="Default (SeaBIOS) <?= $qemu['data']['smbios1'] ?>" placeholder="john.doe@example.com"
                  disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-desktop"></i>
                <label for="organization" class="form-label">Display</label>
                <input type="text" class="form-control" id="organization" name="organization" value="Default"
                  disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-network-chart"></i>
                <label class="form-label" for="phoneNumber">Machine</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="202 555 0111"
                    value="<?= $qemu['data']['machine'] ?>" disabled />
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-data"></i>
                <label for="address" class="form-label">SCSI Controller</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                  value="<?= $qemu['data']['scsihw'] ?>" disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-hdd"></i>
                <label for="state" class="form-label">HARD DISK (ide0)</label>
                <input class="form-control" type="text" id="state" name="state" placeholder="California"
                  value="<?= $qemu['data']['ide0'] ?>" disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-disc"></i>
                <label for="zipCode" class="form-label">CD/DVD Drive (ide2)</label>
                <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465" maxlength="6"
                  value="<?= $qemu['data']['ide2'] ?>" disabled />
              </div>
              <div class="mb-3 col-md-6">
                <i class="menu-icon tf-icons bx bx-cabinet"></i>
                <label for="zipCode" class="form-label">Network Device (net0)</label>
                <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465" maxlength="6"
                  value="<?= $qemu['data']['net0'] ?>" disabled />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?= $this->endSection() ?>