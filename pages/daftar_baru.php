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
            <h3 class="page-title"> Material design icons </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                <li class="breadcrumb-item active" aria-current="page">Material design icons</li>
              </ol>
            </nav>           
          </div>

          <?php
         
          // Ambil nomor pendaftaran tertinggi dari tabel data_siswa
          include ('../koneksi.php');
          $sql = "SELECT MAX(no_pendaftaran) AS max_registration_number FROM data_siswa";
          $result = $koneksi->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $last_registration_number = $row["max_registration_number"];

            // Jika tidak ada nomor pendaftaran sebelumnya, mulai dari BYR001
            if ($last_registration_number === null) {
              $new_registration_number = "BYR001";
            } else {
              // Ubah nomor pendaftaran terakhir ke nomor pendaftaran baru
              $last_number = intval(substr($last_registration_number, 3));
              $next_number = $last_number + 1;
              $new_registration_number = "BYR" . sprintf("%03d", $next_number);
            }
          } else {
            // Penanganan kesalahan jika query tidak berhasil
            echo "Error: " . $koneksi->error;
          }

          // Gunakan $new_registration_number sesuai kebutuhan di sini



          ?>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Biodata Siswa</h4>


                    <form class="needs-validation" action="proses/pros_tambah_baru.php" method="post">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control " name="no_pendaftar" id="no_pen" placeholder="" value="<?php echo $new_registration_number; ?>" required="" readonly style="color: red;">

                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>

                        </div>

                        <div class="col-md-5 mb-3">
                          <label for="lastName">Nama Lengkap</label>
                          <input type="text" class="form-control text-white " name="nama_siswa" id="lastName" placeholder="" value="" required="">
                          <input type="hidden" name="tanggal" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                        <div class="col-md-5 mb-3">
                          <label for="firstName">Tempat,Tanggal Lahir</label>
                          <input type="text" class="form-control text-white" name="ttl" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>
                      
                      <?php

                      $query = "SELECT * FROM tbl_gel ORDER BY id ASC";
                      $result = mysqli_query($koneksi, $query);

                      if (!$result) {
                        die("query error: ". mysqli_error($koneksi));
                      }
                      ?>


                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label fors="gelombang">Gelombang</label>
                              <select class="customs-select d-block w-100" name="gelombang" id="gelombang" required="">
                                <option value="">Pilih...</option>
                             <?php

                                    while ($row = mysqli_fetch_assoc($result)) {
                                       echo '<option value="'. $row['gelombang']. '">'. $row['gelombang'] . '</option>';

                               }
                               ?>
                                      </select>
                                       <div class="invalid-feedback">
                                          Silakan Pilih Gelombang Anda

                                             </div>
                                           </div>


                      <div class="row">

                        <div class="col-md-6 mb-3">
                          <label class="" for="">Jenis Kelamin</label>
                          <div class="form-inline">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis" id="inlineRadio1" value="Laki-Laki">
                              <label class="custom-label text-white" for="inlineRadio1">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis" id="inlineRadio2" value="Perempuan">
                              <label class="custom-label text-white" for="inlineRadio2">Perempuan</label>
                            </div>
                          </div>
                        </div>

                      </div>

                  </div>
                  <h4 class="col-md-6 mb-3">AGAMA</h4>

                  <div class="d-block col-md-6 mb-3">
                    <div class="row">
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="credit" name="agama" type="radio" class="cuform-control text-white-input" checked="" required="" value="Islam">
                          <label class="cuform-control text-white-label" for="credit">Islam</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="debit" name="agama" type="radio" class="cuform-control text-white-input" required="" value="Kristen">
                          <label class="cuform-control text-white-label" for="debit">Kristen</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-white-input" required="" value="Katolik">
                          <label class="cuform-control text-white-label" for="paypal">Katolik</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-white-input" required="" value="Hindu">
                          <label class="cuform-control text-white-label" for="paypal">Hindu</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-white-input" required="" value="Buddha">
                          <label class="cuform-control text-white-label" for="paypal">Buddha</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-white-input" required="" value="Konghuchu">
                          <label class="cuform-control text-white-label" for="paypal">Konghuchu</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">No Telepon Siswa</label>
                      <input type="text" class="form-control text-white" name="no_telpSiswa" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Asal Sekolah </label>
                      <input type="text" class="form-control text-white" name="asal" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>

                  </div>


                  <div class="mb-3 col-md-14">
                    <label for="address">Alamat Sekolah</label>
                    <textarea class="form-control text-white" id="address" name="alamat_sekolah" placeholder="1234 Main St" required="" cols="30" rows="10"></textarea>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>

                  <div class="col-md-14 mb-3">
                    <label for="country">Pilih Jurusan</label>
                    <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                      <option value="">Pilih...</option>
                      <option>REKAYASA PERANGKAT LUNAK</option>
                      <option>AKUTANSI KEUANGAN DAN LEMBAGA</option>
                      <option>MANANJEMEN PERKANTORAN</option>
                      <option>DESAIN KOMUNIKASI VISUAL</option>
                      <option>PEMASARAN</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>

                  <h4 class="mb-3">Biodata Orang Tua</h4>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Nama Orang Tua</label>
                      <input type="text" class="form-control text-white" id="cc-name" name="nama_ortu" placeholder="">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="address">Alamat Orang Tua</label>
                      <textarea class="form-control text-white" id="address" name="alamat_ortu" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">No Telepon</label>
                          <input type="text" class="form-control text-white" name="no_telpOrtu" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">Pekerjaan</label>
                          <input type="text" class="form-control text-white" name="pekerjaan_ortu" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="mb-3">Biodata Wali</h4>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Nama Wali</label>
                      <input type="text" class="form-control text-white" id="cc-name" name="nama_wali" placeholder="">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="address">Alamat Wali</label>
                      <textarea class="form-control text-white" id="address" name="alamat_wali" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">No Telepon</label>
                          <input type="text" class="form-control text-white" name="no_telpWali" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">Pekerjaan</label>
                          <input type="text" class="form-control text-white" name="pekerjaan_wali" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
                  </div>
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
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>