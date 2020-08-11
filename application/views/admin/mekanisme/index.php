<h5>Pilih Jenis Surat</h5>
<?= $this->session->flashdata('message'); ?>
<div class="list-group mb-4">
    <?php foreach ($layanan as $key => $value) : ?>
        <a href="<?= base_url("admin/mekanisme/detail/") . $value['layanan_id']; ?>" class="list-group-item list-group-item-action">
            <div class="descrption float-left">
                <p class="mb-0"><?= str_replace("-", " ", $value["nama"]); ?></p>
            </div>
        </a>
    <?php endforeach; ?>
</div>