<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>SELAMAT DATANG </h1>
<br>
<h4>
    <?php
    echo session()->get('username');
    ?>
</h4>
<?= $this->endSection() ?>