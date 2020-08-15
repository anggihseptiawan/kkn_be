
 <div class="container">

    <div class="row  mt-5 justify-content-center">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Edit Profil Admin</h6>
                 
             </div>
             <!-- Card Body -->
             <div class="card-body">
                 
               
               <div class="col-lg profil-form">
                        <div class="text-center">
                            <img src="<?= base_url(""); ?>assets/img/person.png" class="rounded-circle w-25  mb-4" alt="Account">
                        </div>
                        <div class="widget-title-outer">
                            <h3 class="widget-title"></h3>
                        </div>
                         <form class="user" method="post" action="<?= base_url('admin/auth'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama"  name="nama" value="<?= $nama; ?>">
                                            
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="emails" name="emails" value="<?= $emails; ?>" >
                                           
                            </div>
                            <button type="submit" class="btnSubmit btn-primary btn-user btn-block">
                                          Edit Profile
                            </button>
                        </form>

                       
                </div>
            </div>
    </div>
     