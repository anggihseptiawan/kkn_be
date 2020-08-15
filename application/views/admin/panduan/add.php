<h5>Tambah Panduan</h5>
<div class="row">
    <div class="col-md-8">
        <form action="<?= base_url("admin/panduan/save") ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul" required>
            </div>

            <div class="form-group">
                <label for="judul">Jenis Surat</label>
                <select class="form-control form-control-user " id="jenis" name="jenis" required="true">
                    <option value=" ">Pilih Jenis Surat</option>
                     <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($jenis as $key => $value) : ?>
                    <option value="<?= str_replace(" ", "-", $value["nama"]); ?>"><?= str_replace("-", " ", $value["nama"]); ?></option>
                    
                    <?php endforeach; ?>
                    
                </select>
            </div>
            <div class="form-group">
                 <label for="judul">Persyaratan</label> 
                <textarea id="persyaratan" name="persyaratan" placeholder="Masukan Persyaratan" required>
                </textarea>
            </div>
             <div class="form-group"> 
                 <label for="judul">Mekanisme</label>
                <textarea id="mekanisme" name="mekanisme" placeholder="Masukan Mekanisme Pengajuan" required>
                </textarea>
            </div>
            <label for="judul">Upload File</label>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="file" name="file" required>
                <label class="custom-file-label" for="file">Pilih file...</label>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>