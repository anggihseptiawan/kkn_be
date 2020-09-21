<h5>Profil Desa</h5>
<?php foreach ($desa as $key => $value) : ?>
    <?= $this->session->flashdata('message'); ?>
<div class="row mt-3">
    <div class="col-md-12">
        <a href="<?= base_url("admin/desa/edit/") . $value['profil_desa_id'] ?>" class="btn btn-primary mb-2">Edit Profil Desa</a>
        
        <div class="form-group">
            <label for="nama">Nama Desa</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $value['nama']; ?>"  disabled>
        </div>
        <div class="form-group">
            <label for="nama">Alamat Desa</label>
            <textarea type="text" class="form-control" id="alamat" name="alamat" value="<?= $value['alamat']; ?>" disabled><?= $value['alamat']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="nama">Telepon</label>
            <input type="tel" class="form-control" id="telp" name="telp" value="<?= $value['telp']; ?>"  disabled>
        </div>
        <div class="form-group">
            <label for="nama">Email</label>
            <input type="email" class="form-control" id="nama" name="nama" value="<?= $value['email']; ?>" placeholder="<?= $value['email']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Jumlah Penduduk Pria</label>
            <input type="number" class="form-control" id="total_pria" name="total_pria" value="<?= $value['total_pria']; ?>" placeholder="<?= $value['total_pria']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Jumlah Penduduk Wanita</label>
            <input type="number" class="form-control" id="total_wanita" name="total_wanita" value="<?= $value['total_wanita']; ?>" placeholder="<?= $value['total_wanita']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Jumlah Penduduk</label>
            <input type="number" class="form-control" id="total_penduduk" name="total_penduduk" value="<?= $value['total_penduduk']; ?>"  disabled>
        </div>
        <div class="form-group">
            <label for="nama">Deskripsi</label>
            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $value['deskripsi']; ?>" placeholder="" disabled><?= $value['deskripsi']; ?></textarea>
        </div>
        <div class="mapouter m-1">
                        <div class="gmap_canvas ">
                            <iframe class="w-100 h-100" id="gmap_canvas" src="<?= $value['gmaps']; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>  
                    </div>
        
    </div>


<?php endforeach; ?>