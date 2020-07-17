<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Data User</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $barang->gambar) ?>" />
                </div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="text-info"><?= $barang->nama ?></h1>
            <h4>Email : <?= $barang->email ?></h4>
        </div>
    </div>
</div>
<br><br><br><br>
<div class="text-right">
    <a class="btn btn-warning" href="<?= site_url('barang/index') ?>">Kembali</a>
</div>
<?= $this->endSection() ?>