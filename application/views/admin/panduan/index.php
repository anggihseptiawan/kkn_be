<h5>Panduan</h5>
<div class="row mt-3">
    <div class="col-md-8">
        <a href="<?= base_url("admin/panduan/add") ?>" class="btn btn-primary mb-2">Tambah Panduan</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Surat Domisili</td>
                        <td>
                            <a class="btn btn-info mr-1" href="<?= base_url("admin/panduan/edit") ?>">edit</a>
                            <a class="btn btn-danger" href="#">hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Surat Pindah</td>
                        <td>
                            <a class="btn btn-info mr-1" href="<?= base_url("admin/panduan/edit") ?>">edit</a>
                            <a class="btn btn-danger" href="#">hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Surat Keterangan Usaha</td>
                        <td>
                            <a class="btn btn-info mr-1" href="<?= base_url("admin/panduan/edit") ?>">edit</a>
                            <a class="btn btn-danger" href="#">hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>