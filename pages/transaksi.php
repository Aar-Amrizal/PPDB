<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>DASHBOARD | LOGIN</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="../css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../css/feather.css">
    <link rel="stylesheet" href="../css/select2.css">
    <link rel="stylesheet" href="../css/dropzone.css">
    <link rel="stylesheet" href="../css/uppy.min.css">
    <link rel="stylesheet" href="../css/jquery.steps.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="../css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="../css/app-dark.css" id="darkTheme" disabled>
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
              <span class="fe fe-grid fe-16"></span>
            </a>
          </li>
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
              <span class="fe fe-bell fe-16"></span>
              <span class="dot dot-md bg-success"></span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="assets/images/geol.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
            </div>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="../admin.php"><span class="ml-1 item-text">Default</span></a>
                </li>
               
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Navigation</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Data Master</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="../pages/registrasi.php"><span class="ml-1 item-text">Registrasi</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="../pages/input_gelombang.php"><span class="ml-1 item-text">Input Gelombang</span></a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-credit-card fe-16"></i>
                <span class="ml-3 item-text">Pendaftaran</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="../pages/daftar_baru.php"><span class="ml-1 item-text">Daftar Baru</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="../pages/data_siswa.php"><span class="ml-1 item-text">Daftar Siswa</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./data_kaos.php"><span class="ml-1 item-text">Data Kaos</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Pembayaran</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="transaksi.php"><span class="ml-1 item-text">Transaksi</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="data_pembayaran.php"><span class="ml-1 item-text">Data Pembayaran</span></a>
                </li>
              </ul>
</li>
            </li>
            <li class="nav-item dropdown">
            <a href="cek_login.php"  aria-expanded="false" >
                <i class="fe fe-layout fe-16"></i>
                <span class="ml-3 item-text">Logout</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Default</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./index-horizontal.html"><span class="ml-1 item-text">Top Navigation</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./index-boxed.html"><span class="ml-1 item-text">Boxed</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Documentation</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="../docs/index.html">
                <i class="fe fe-help-circle fe-16"></i>
                <span class="ml-3 item-text">Getting Start</span>
              </a>
            </li>
          </ul>
         
        </nav>
      </aside>
      <main role="main" class="main-content">
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Transaki </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
              </ol>
            </nav>
          </div>

          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card animated" id="animatedCard">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Transaksi</h4>
                    <form class="needs-validation" action="proses/proses_bayar.php" method="post" novalidate="">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="lastName">Tanggal</label>
                          <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>

                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="firstName">Nama Siswa</label>
                          <input type="text" class="form-control" name="nama_siswa" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <label for="firstName">Asal Sekolah</label>
                          <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="firstName">Gelombang</label>
                          <input type="text" class="form-control" name="gelombang" id="gelombang" placeholder="" value=" "required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <!-- Kode PHP -->
                        <!-- Kode PHP -->
                        <div class="col-md-6 mb-3">
                          <label for="nominal">Jumlah</label>
                          <input type="number" class="form-control" id="nominal" name="nominal" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>

                        <div class="col-md-2 mb-3">
                          <label for="bayar">Pembayaran</label>
                          <input type="text" class="form-control" id="bayar" name="bayar" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="kembalian">Kembalian</label>
                          <input type="text" class="form-control" id="kembalian" name="kembalian" placeholder="" value="" >
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="kembalian">Sisa Bayar</label>
                          <input type="text" class="form-control" id="sisa" name="sisa" placeholder="" value="" >
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>



                        <!-- Kode JavaScript -->



                        <div class="col-md-4 mb-3">
                          <label for="firstName">Keterangan</label>
                          <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>
                      <script>
                        function triggerAnimation() {
                          var animatedElement = document.getElementById('animatedCard');
                          animatedElement.classList.add('active');
                        }

                        // Panggil fungsi triggerAnimation saat halaman dimuat
                        document.addEventListener("DOMContentLoaded", function() {
                          triggerAnimation();
                        });
                        

                        
                        function sisabayar() {
                          var bayar = parseFloat(document.getElementById("bayar").value);
                          var jumlah = parseFloat(document.getElementById("nominal").value);

                          var sisa = jumlah-bayar;

                          if (jumlah >= bayar) {
                            document.getElementById("sisa").value = sisa.toFixed(2);
                          }
                        }
                        document.getElementById("bayar").addEventListener("input", sisabayar)
                 
                        

                        function hitungKembalian() {
                          var total_belanja = parseFloat(document.getElementById("nominal").value);
                          var pembayaran = parseFloat(document.getElementById("bayar").value);

                          var kembalian = pembayaran - total_belanja;

                          if (pembayaran >= total_belanja) {
                            document.getElementById("kembalian").value = kembalian.toFixed(2);
                            document.getElementById('keterangan').value = 'Lunas';
                          } else {
                            document.getElementById('kembalian').value = '';
                            document.getElementById('keterangan').value = 'Belum Lunas';
                          }
                        }

                        // Menjalankan fungsi hitungKembalian saat ada perubahan pada input pembayaran
                        document.getElementById("bayar").addEventListener("input", hitungKembalian);
                      </script>
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Bayar</button>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <style>
            @keyframes fadeIn {
              0% {
                opacity: 0;
              }

              100% {
                opacity: 1;
              }
            }



            /* Animasi */
            .animated {
              transform: translateY(-100%);
              transition: transform 0.7s ease-in-out;
              animation: fadeIn 0.7s ease-in-out;
            }

            .animated.active {
              transform: translateY(0);
            }
          </style>
        </div>
        <!-- TUTUP NAVBAR ISI -->

        <!-- partial:../../partials/_footer.html -->

        <!-- FOOTER -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Reyz</span>
          </div>
        </footer>
        <!-- TUTUP FOOTER -->


        <!-- partial -->
      </div>

      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/simplebar.min.js"></script>
    <script src='../js/daterangepicker.js'></script>
    <script src='../js/jquery.stickOnScroll.js'></script>
    <script src="../js/tinycolor-min.js"></script>
    <script src="../js/config.js"></script>
    <script src="../js/d3.min.js"></script>
    <script src="../js/topojson.min.js"></script>
    <script src="../js/datamaps.all.min.js"></script>
    <script src="../js/datamaps-zoomto.js"></script>
    <script src="../js/datamaps.custom.js"></script>
    <script src="../js/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="../js/gauge.min.js"></script>
    <script src="../js/jquery.sparkline.min.js"></script>
    <script src="../js/apexcharts.min.js"></script>
    <script src="../js/apexcharts.custom.js"></script>
    <script src='../js/jquery.mask.min.js'></script>
    <script src='../js/select2.min.js'></script>
    <script src='../js/jquery.steps.min.js'></script>
    <script src='../js/jquery.validate.min.js'></script>
    <script src='../js/jquery.timepicker.js'></script>
    <script src='../js/dropzone.min.js'></script>
    <script src='../js/uppy.min.js'></script>
    <script src='../js/quill.min.js'></script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#no_pendaftaran').on('change', function(){
        var no_pendaftaran = $(this).val();
        $.ajax({
          method: 'POST',
          url:'proses/ambil_data.php',
          data: {
            no_pendaftaran: no_pendaftaran
          },
          success: function(response){
            var data = JSON.parse(response);
            $('#firstName').val(data.nama_siswa);
            $('#asal_sekolah').val(data.asal_sekolah);
            $('#gelombang').val(data.gelombang);
            $('#nominal').val(data.nominal);
          },
          error: function(xhr, status, error){
            console.error(error);
          }
          
        });
      });
    });
    </script>

</html>