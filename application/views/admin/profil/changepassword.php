<main class="">

    <div class="container">

    <div class="row  mt-5 justify-content-center">

            <div class="card">

                <h5 class="card-header py-3m-0 font-weight-bold text-primaries ">Ubah Password</h5>
                <div class="card-body ">


                    <div class="col-lg-12 profil-form ">
                        <div class="widget-title-outer">
                            <div class="text-center">
                                <img src="<?= base_url(""); ?>assets/img/person.png" class="rounded-circle w-25  mb-4" alt="Account">
                            </div>
                        </div>
                        
                       

                <div class="row profil-container rounded ">


                    <div class="col-lg-12 profil-form ">
                        
                      
                        <form class="user" action="<?= base_url("admin/user/changepassword"); ?>" method="post">
                          <?= $this->session->flashdata('message'); ?>
                            <div class="form-group">
                                <label for="oldPassword">Pasword Lama</label>
                                <input type="password" class="form-control" id="password" name="password" value="" required >
                                
                            </div>
                            <div class="form-group">
                                <label for="newassword">Pasword Baru</label>
                                <input type="password" class="form-control" id="newpassword" name="newpassword" required="true">
                                
                            </div>
                            <div class="form-group">
                                <label for="repassword">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="repassword" name="repassword" >
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">Simpan</button>
                            </div>
                            

                        </form>


                    </div>
                </div>
                            
                           

                       


                    </div>
                </div>
            </div>
        </div>

    </div>




</main>