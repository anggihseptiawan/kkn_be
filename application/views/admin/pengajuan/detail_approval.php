
<div class="container-fluid">
    <main class="list_perizinan">
       
            <div class="list-group">
                 <div class="list-group-item list-group-item-action">
                            <div class="descrption float-left">
                                <p class="mb-0">Pengajuan <span class="font-weight-bold"><?= str_replace('-', ' ', $pengajuan['jenis']); ?></span> </p>
                                <p class="d-block">Tanggal Pengajuan : <?= $pengajuan['created_at']; ?> </p>
                                <p class="mb-0">Berkas Pengajuan : <a href="<?= base_url() . str_replace(" ", '_', $pengajuan["path"]);  ?>" download>Download</a> </p>
                                <?php if ($pengajuan['status'] == 1) : ?>
                                    <p class="mb-0">Surat  : <a href="<?= base_url() . str_replace(" ", '_', $pengajuan["path_admin"]);  ?>" download>Download</a> </p>
                                <?php elseif ($pengajuan['status'] == 2) : ?>
                                    <p class="mb-0">Keterangan : <?= $pengajuan['feedback']; ?> </p>
                                <?php endif; ?>
                            </div>
                            
                       <?php if ($pengajuan['status'] == 0) : ?>
                                <p class="float-right badge badge-primary">Menuggu</p>
                            <?php elseif ($pengajuan['status'] == 1) : ?>
                                <p class="float-right badge badge-success">Diterima</p>
                            <?php else : ?>
                                <p class="float-right badge badge-danger">Ditolak</p>
                            <?php endif; ?>

                        </div>
                  
                    
            </div>
    
    </main>
</div>