<h5>Edit Panduan</h5>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url("admin/panduan/update/") . $file['panduan_id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $file['judul'] ?>" placeholder="masukkan judul" required>
            </div>

            <label for="judul">Upload File</label>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="file" name="file" >
                <label class="custom-file-label" for="file">Pilih file...</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>