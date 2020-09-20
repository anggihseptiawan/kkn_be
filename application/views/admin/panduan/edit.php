<h5>Edit Panduan</h5>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url("admin/panduan/update/") . $file['panduan_id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul Panduan</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $file['judul'] ?>" placeholder="masukkan judul" required>
            </div>
            
                <label for="jenis">Jenis Surat</label>
                <select class="form-control form-control-user " id="jenis" name="jenis" required="true">
                  
                  <option value="<?= $file['jenis'] ?>"><span class="text-white"><?= str_replace("-", " ",  $file['jenis']); ?></span></option>
                    <option value="">________________</option>
                    <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($jenis as $key => $value) : ?>
                    <option value="<?=  $value["nama"]; ?>"><?= str_replace("-", " ", $value["nama"]); ?></option>
                    
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Persyaratan</label>
                <textarea id="persyaratan" name="persyaratan" placeholder="Masukan Mekanisme Pengajuan" required><?= $file['persyaratan'] ?>
                </textarea>
            <div class="form-group">
                <label for="judul">Mekanisme</label>
                <textarea id="mekanisme" name="mekanisme" placeholder="Masukan Mekanisme Pengajuan" required><?= $file['mekanisme'] ?>
                </textarea>
                
            </div>
            <label for="judul">Upload File</label>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="file">Pilih file...</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>