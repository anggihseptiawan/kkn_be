
<div class="">
    <div class="container  mt-5">
        <?= $this->session->flashdata('message'); ?>
        <?php foreach ($desa as $key => $value) : ?>

            <div class="row text-center mt-5 mb-3 text-white">
                <div class="col-md-4 mb-2 ">
                <div class="card bg-counter">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                       
                    <h2 class="timer count-title count-number" data-to="<?= $value['total_penduduk']; ?>" data-speed="1000"></h2>
                    <p class="count-text ">Total Penduduk</p>
                </div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="card bg-counter">
                    <i class="fa fa-female fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="<?= $value['total_wanita']; ?>" data-speed="1000"></h2>
                    <p class="count-text ">Perempuan</p>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card bg-counter">
                    <i class="fa fa-male fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="<?= $value['total_pria']; ?>" data-speed="1000"></h2>
                    <p class="count-text ">Laki Laki</p>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</div>
 <!-- Content Row -->
 <div class="row">
<!-- Daftar Pengajuan -->
     <div class="col-xl-6">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan belum diproses</h6>
                
             </div>
             <!-- Card Body -->
             <div class="card-body">
                
                <div class="list-group">
                    <?php if ($pengajuan) : ?>
                        <?php foreach ($pengajuan as $key => $value) : ?>
                            <?php $user = $this->db->get_where('user', ['user_id' => $value['user_id']])->row_array();
                            $user_id = $value['user_id'];
                            $surat_id = $value['pengajuan_id']; ?>
                            <a href="<?= base_url("admin/pengajuan/detail_pengajuan/$user_id/$surat_id"); ?>" class="list-group-item list-group-item-action">
                                <div class="descrption float-left">
                                    <p class="mb-0"><?= $user['nama_lengkap']; ?></p>
                                    <small class="d-block">Jenis : <?= $value['jenis']; ?> </small>
                                </div>
                                <p class="float-right badge <?= $value['status'] == 0 ? "badge-primary" : "badge-success" ?>"><?= $value['status'] == 0 ? "Menuggu" : "Diterima" ?></p>
                            </a>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="alert alert-primary">Belum ada pengajuan</div>
                    <?php endif; ?>

                </div>
             </div>
         </div>
     </div>
     <!-- Panduan -->
     <div class="col-xl-6">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Layanan</h6>
                 
             </div>
             <!-- Card Body -->
             <div class="card-body">
                 
            
                <?= $this->session->flashdata('message'); ?>
                <div class="list-group mb-4">
                    <?php foreach ($panduan as $key => $value) : ?>
                        <div class="list-group-item list-group-item-action">
                            <div class="descrption float-left">
                                <p class="mb-0"><?= str_replace("-", " ", $value["jenis"]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </div>
     </div>



     
 </div>
