<!DOCTYPE html>
<html>

<head>
    <title>Cikolelet</title>

    <script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
        })(document, window, 0);
    </script>

    <link rel="shortcut icon" href="<?= base_url("assets") ?>/img/main-logo-.png">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="description" content="Cikolelet  ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Cikolelet">
    <meta name="twitter:description" content="Cikolelet  ">
    <meta name="twitter:image" content="asset/img/main-logo-.png">
    <meta property="og:title" content="Cikolelet">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="asset/img/main-logo-.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/"); ?>sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/"); ?>style.css">

</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <nav class="col-md-12 navbar navbar-blog navbar-expand-lg navbar-light fixed-top" id="myHeader">
                    <img class="logoku" src="<?= base_url("assets"); ?>/img/logo2.png" alt="Logo Cikolelet">
                    <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($desa as $key => $value) : ?>
                    <a class="bolded pl-10" href="<?= base_url("/"); ?>"><?= strtoupper( $value['nama']); ?></a>
                    <?php endforeach; ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menux">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menux">
                        <ul class="nav nav-pills  flex-column flex-lg-row  ml-auto" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link bolded <?= $active == 'home' ? "active" : "" ?>" href="<?= base_url("home") ?>">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bolded <?= $active == 'panduan' ? "active" : "" ?>" href="<?= base_url("panduan") ?>">Info Layanan</a>
                            </li>

                            <?php if ($this->session->userdata('email')) : ?>

                                <!-- Khusus user yang login -->
                               
                                <li class="nav-item dropdown no-arrow">
              
                                    <a class="nav-link bolded dropdown-toggle <?= $active == 'user' ? "active" : "" ?>" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?= $user['nama_lengkap']; ?>
                                            <img class="img-profile rounded-circle" src="<?= base_url(""); ?>assets/img/person.png">
                                    </a>
              <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="<?= base_url("user"); ?>">Profil Pengguna</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url("pengajuan/list_pengajuan"); ?>">Daftar Pengajuan</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url("pengajuan"); ?>">Lakukan Pengajuan</a></li>
                                                <li><a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">Log out</a></li>
                                            </ul>
                
                                    </div>
                                </li>

                            <?php else : ?>
                                <!-- Khusus user yang login -->
                                <!-- Link Login dan daftar -->
                                <li class="nav-item">
                                    <a class="nav-link bolded" href="<?= base_url("auth") ?>">Masuk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bolded" href="<?= base_url("auth/register") ?>">Daftar</a>
                                </li>
                                <!-- Link Login dan daftar -->

                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>


    <main class="main_content">
        <?php $this->load->view($page); ?>
    </main>

<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Log out</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Yakin ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url("auth/logout"); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <!-- footer awal -->
    <footer>
        <!-- Footer konten -->
        <?= $this->session->flashdata('message'); ?>
                <?php foreach ($desa as $key => $value) : ?>

        <div class="row head-footer py-3">
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Tentang Desa <?= $value['nama']; ?></h3>
                        </div>
                        <div class="d-flex">
                            <img class="logo-footer" src="<?= base_url("assets") ?>/img/logo2.png" alt="Logo Cikolelet">
                            <p id="tentang" class="text-left"><?= $value['deskripsi']; ?>Cikolelet adalah sebuah desa di wilayah kecamatan Cinangka Kabupaten Serang, Banten, Indonesia.</p>
                        </div>
                    </div><!-- end inner -->
                </div><!-- end widget -->
            </div>
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Alamat Desa</h3>
                        </div>
                        <div id="alamatdesa" class="text-left">
                            <p class="mb-0"><?= $value['alamat']; ?></p>
                            <p class="mb-0"><?= $value['telp']; ?></p>
                            <a href="mailto:<?= $value['email']; ?>"><?= $value['email']; ?></a>
                        </div>
                    </div><!-- end inner -->
                </div><!-- end widget -->
            </div>
        </div>
        


        <div class="row footers py-3">

            <div class="container-fluid">
                <!-- link sosmed -->
                <div class="col-md-12 text-center">
                    <div class="social d-flex justify-content-center">
                        <a href="https:/www.twitter.com" class="icons">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https:/www.facebook.com" class="icons">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https:/www.instagram.com" class="icons">
                            <i class="fab fa-instagram"></i>
                            <a href="https:/www.Whatsapp.com" class="icons">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                    </div>
                </div>

                <div class="col-md-12 text-center">
                    &copy; 2019 Copyright Layanan Desa <?= $value['nama']; ?> | All rights reserved.
                </div>

            </div>
<?php endforeach; ?>
            <!-- link sosmed akhir   -->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- footer akhir -->

    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets") ?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url("assets") ?>/js/main.js"></script>
    <script type="text/javascript">(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
    
    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
  }
});
</script>
</body>

</html>