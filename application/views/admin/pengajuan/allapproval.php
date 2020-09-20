<h5>Daftar Pengajuan</h5>
<div class="list-group">
    <?php if ($pengajuan) : ?>
        <?php foreach ($pengajuan as $key => $value) : ?>
            <?php $user = $this->db->get_where('user', ['user_id' => $value['user_id']])->row_array();
            $user_id = $value['user_id'];
            $pengajuan_id = $value['pengajuan_id']; ?>
            <a href="<?= base_url("admin/pengajuan/detail_approval/$user_id/$pengajuan_id"); ?>" class="list-group-item list-group-item-action">
                <div class="descrption float-left">
                    <p class="mb-0"><?= $user['nama_lengkap']; ?></p>
                    <small class="d-block">Jenis : <?= str_replace("-", " ", $value['jenis']); ?> </small>
                </div>
                <?php if ($value['status'] == 0) : ?>
                                <p class="float-right badge badge-primary">Menuggu</p>
                            <?php elseif ($value['status'] == 1) : ?>
                                <p class="float-right badge badge-success">Disetujui</p>
                            <?php else : ?>
                                <p class="float-right badge badge-danger">Ditolak</p>
                            <?php endif; ?>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="alert alert-primary">Belum ada pengajuan baru</div>
    <?php endif; ?>
   
</div>

