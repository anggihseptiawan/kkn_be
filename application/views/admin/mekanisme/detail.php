<h4 class="mb-4">Tambah mekanisme pengajuan <?= strtolower(str_replace("-", " ", $layanan['nama'])); ?></h4>
<form action="<?= base_url("admin/mekanisme/submit") ?>" method="POST">
    <textarea id="mekanisme" name="mekanisme">
        <?php if ($mekanisme) : ?>
            <?= $mekanisme["deskripsi"]; ?>
            <?php else : ?>
            <p>Masukkan Mekanisme</p>
        <?php endif; ?>
    </textarea>
    <input type="hidden" name="layanan_id" value=<?= $layanan_id; ?>>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>