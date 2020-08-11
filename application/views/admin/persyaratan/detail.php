<h4 class="mb-4">Tambah persyaratan mengajukan <?= strtolower(str_replace("-", " ", $layanan['nama'])); ?></h4>
<form action="<?= base_url("admin/persyaratan/submit") ?>" method="POST">
    <textarea id="persyaratan" name="persyaratan">
        <?php if ($persyaratan) : ?>
            <?= $persyaratan["deskripsi"]; ?>
            <?php else : ?>
            <p>Masukkan Persyaratan</p>
        <?php endif; ?>
    </textarea>
    <input type="hidden" name="layanan_id" value=<?= $layanan_id; ?>>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>