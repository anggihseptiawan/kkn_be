<h5>Tambah Jenis Surat</h5>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url("admin/jenis/save") ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Surat</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama surat" required>
            </div>

            <div class="form-group">
                <label for="judul">Kategori</label>
                <select class="form-control form-control-user " id="fm_kategori" name="kategori" required="true">
                    <option value="">Pilih Kategori</option>
                    <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($kategori as $key => $value) : ?>
                    <option value="<?=  $value["kategori"]; ?>"><?= str_replace("-", " ", $value["kategori"]); ?></option>
                    
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>