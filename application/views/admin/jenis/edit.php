<h5>Edit Jenis Surat</h5>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url("admin/jenis/update/") . $jenis['jenis_id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Surat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $jenis['nama'] ?>" placeholder="masukkan nama surat" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control form-control-user " id="kategori" name="kategori" required="true">
                   
                    <option value="<?= $jenis['kategori'] ?>"><span class="text-white"><?= str_replace("-", " ",  $jenis['kategori']); ?></span></option>
                     <option value="">________________</option>
                    <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($kategori as $key => $value) : ?>
                    <option value="<?=  $value["kategori"]; ?>"><?= str_replace("-", " ", $value["kategori"]); ?></option>
                    
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>


