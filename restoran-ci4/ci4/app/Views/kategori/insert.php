<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1>INSERT DATA</h1>

<?php

echo '<h3>' . session()->getFlashdata('info') . '</h3>';

?>

<form action="<?= base_url() ?>/admin/kategori/insert" method="post">

    kategori : <input type="text" name="kategori" id="" required>
    <br>
    keterangan : <input type="text" name="keterangan" id="" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>
<?= $this->endSection() ?>