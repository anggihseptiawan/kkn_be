<h5>Pilih Jenis Surat</h5>
<?= $this->session->flashdata('message'); ?>
<div class="list-group mb-4">
    <a href="<?= base_url("admin/persyaratan/detail/1"); ?>" class="list-group-item list-group-item-action">
        <div class="descrption float-left">
            <p class="mb-0">Surat Keterangan Domisilli</p>
        </div>
    </a>
    <a href="<?= base_url("admin/persyaratan/detail/2"); ?>" class="list-group-item list-group-item-action">
        <div class="descrption float-left">
            <p class="mb-0">Surat Keterangan Pindah</p>
        </div>
    </a>
    <a href="<?= base_url("admin/persyaratan/detail/1"); ?>" class="list-group-item list-group-item-action">
        <div class="descrption float-left">
            <p class="mb-0">Surat Keterangan Kematian</p>
        </div>
    </a>
    <a href="<?= base_url("admin/persyaratan/detail/1"); ?>" class="list-group-item list-group-item-action">
        <div class="descrption float-left">
            <p class="mb-0">Surat Keterangan Usaha</p>
        </div>
    </a>
</div>