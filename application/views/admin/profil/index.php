
 <div class="container">

    <div class="row  mt-5 justify-content-center">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Profil Admin</h6>
                 
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
                        <table class="table  table-borderless table-striped table-condensed ">

                            <tbody>
                                
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td><?= $nama; ?></td>

                                </tr>
                                 <tr>
                                    <th scope="row">Email</th>
                                    <td colspan="2"><?= $emails; ?></td>

                                </tr>
                               
                            </tbody>
                        </table>

                        <!-- //<a href="<?= base_url("admin/user/edit"); ?>" class="btnSubmit btn-primary w-100 d-block text-center">Edit Profile</a>
 -->                        <!-- <a href="<? //= base_url("user/edit") 
                                        ?>" class="btnSubmit w-100 d-block text-center">Edit Profil</a> -->
                </div>
            </div>
    </div>
     