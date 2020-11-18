<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h1>UPDATE DATA</h1>

<form action="<?= base_url() ?>/admin/kategori/update" method="post">

    kategori : <input type="text" name="kategori" id="" value="<?= $kategori['kategori'] ?>" required>
    <br>
    keterangan : <input type="text" name="keterangan" id="" value="<?= $kategori['keterangan'] ?>" required>
    <br>
    <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>" id="">
    <input type="submit" name="simpan" value="simpan">
</form>
<?= $this->endSection() ?>