<div class="container-xl">
    <div class="row">
        <div id="demo" class="carousel slide w-100" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="<?= base_url("assets"); ?>/img/Slide1.png" alt="gambar1" class="w-100 ">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("assets"); ?>/img/Slide2.png" alt="gambar2" class="w-100 ">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("assets"); ?>/img/Slide3.png" alt="gambar3" class="w-100 ">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

<div class="container">
    <div class="container">
    <div class="row mt-5 justify-content-center">
        <?= $this->session->flashdata('message'); ?>
        <?php foreach ($panduan as $key => $value) : ?>
                    <div class="col-lg-4">
                        <div class=" iconbox shadow iconleft style2">
                            <div class="box-header">
                                <div class="box-icon p-4 ">
                                    <i class="fa fa-university fa-2x"></i>
                                </div>
                            </div>
                             
                            <div class="box-content p-2 pt-3 pb-3">
                                <b><a href="<?= base_url("panduan") ?>"><?= str_replace("-", " ", $value["jenis"]); ?></</a></b>  
                                <p class="mb-0">Jam Pelayanan <span>08:00</span>-<span>16:00</span> </p> 
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?><!-- /.col-lg-4 -->
               
                 
    </div>
</div>
</div>
 </a>
<div class="bg-counter">
    <div class="container  mt-5">
        <div class=" row">
            <br/>
           <div class="col text-center text-white">
            <h2>Jumlah Penduduk Desa Cikolelet</h2>
            <p>Cikolelet adalah Desa yang terdiri dari beberapa Kampung.Desa Cikolelet pada mulanya yaitu sebelum pada tahun 1928 Desa Cikolelet Distrik Cinangka Kersidenan Banten,Bernama Desa Cikolelet</p>
            </div>
        </div>
            <div class="row text-center mt-5 mb-3">
                <?= $this->session->flashdata('message'); ?>
                <?php foreach ($desa as $key => $value) : ?>

                <div class="col-md-4 mb-2">
                <div class="counter">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                       
                    <h2 class="timer count-title count-number" data-to="<?= $value['total_penduduk']; ?>" data-speed="1000"></h2>
                    <p class="count-text ">Total Penduduk</p>
                </div>
                </div>
                <div class="col-md-4 mb-2">
                <div class="counter">
                    <i class="fa fa-female fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="<?= $value['total_wanita']; ?>" data-speed="1000"></h2>
                    <p class="count-text ">Perempuan</p>
                </div>
                </div>
                <div class="col-md-4">
                <div class="counter">
                    <i class="fa fa-male fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="<?= $value['total_pria']; ?>" data-speed="1000"></h2>
                    <p class="count-text ">Laki Laki</p>
                </div>
                </div>
            </div>
            
    </div>
</div>  
</div>  

</div> 


<div class="container mt-5 card shadow h-100"> 
    <div class="col text-center mt-5">
        <h2>Kantor Desa Cikolelet</h2>
        <span><?= $value['alamat']; ?></span>
        <p><?= $value['telp']; ?></p>
        </div>
        <div class="mapouter"><div class="gmap_canvas "><iframe class="w-100 pt-4 pb-4" id="gmap_canvas" src="<?= $value['gmaps']; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style></style></div>  </div>
        </div>  </div>
<?php endforeach; ?>
                