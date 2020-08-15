<h5>Jenis Surat</h5>
<div class="row mt-3">
    <div class="col-md-8">
        <a href="<?= base_url("admin/jenis/add") ?>" class="btn btn-primary mb-2">Tambah Jenis Surat</a>
        <?= $this->session->flashdata("add"); ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jenis as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1; ?></th>
                            <td><?= $value['nama']; ?></td>
                            <td><?= $value['kategori'] ? str_replace('-', " ", $value['kategori']) : ""; ?></td>
                            <td>
                                <a class="btn btn-info mr-1" href="<?= base_url("admin/jenis/edit/") . $value['jenis_id'] ?>">edit</a>
                                <a class="btn btn-danger" href="<?= base_url("admin/jenis/delete/") . $value['jenis_id'] ?>" onclick="return confirm('Yakin mau dihapus ?');">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>