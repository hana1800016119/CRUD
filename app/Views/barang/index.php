<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Data User</h1>
<table class="table">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Email</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($barangs as $index => $barang) : ?>
            <tr>
                <td><?= ($index + 1) ?></td>
                <td><?= $barang->nama ?></td>
                <td>
                    <img class="img-fluid" width="100px" alt="gambar" src="<?= base_url('uploads/' . $barang->gambar) ?>" />
                </td>
                <td><?= $barang->email ?></td>
                <td>
                    <a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('barang/delete/' . $barang->id) ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data?');">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>