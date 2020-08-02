<main class="">
    <div class="container">
        <div class="row  mt-5 justify-content-center">

            <div class="col-md-8">
                <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-primaries ">Edit Profil</h2>

                </div>
                <div class="row profil-container rounded ">


                    <div class="col-lg-12 profil-form ">
                        <div class="widget-title-outer">
                            <div class="text-center">
                                <img src="<?= base_url(""); ?>assets/img/man.png" class="rounded-circle w-25  mb-4" alt="Account">
                            </div>
                        </div>
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Informasi Diri</h3>
                        </div>
                        <form class="user" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="321xxxxx" value="" pattern="[0-9]{16}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Harun" value="">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="jk" name="jk" required="true">
                                    <option value="0">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tl" name="tl" placeholder="Tangerang" value="">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="22/07/1968" value="">
                            </div>

                            <div class="form-group">
                                <textarea type="ttex" class="form-control" id="alamat" name="alamat" placeholder="Cikolelet" value=""></textarea>
                            </div>



                            <div class="widget-title-outer">
                                <h3 class="widget-title">Data Akun</h3>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Harun" value="">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="hp" name="hp" placeholder="08xxxxxx" value="" pattern="[0-9]{12} ">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Alrosyid07@gmail.com" value="">
                            </div>
                            <div class="form-group ">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="********">
                            </div>

                            <button type="submit" class="btnSubmit w-100">Simpan Perubahan</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>




</main>