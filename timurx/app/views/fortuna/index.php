<?php
// var_dump($data['banner']);
$icon           = $data['banner']['iconperusahaan'];
$logo           = $data['banner']['logoperusahaan'];
$title          = $data['judul'];
$judulbanner    = $data['banner']['judulbanner'];
$subjudul       = $data['banner']['subjudul'];
$deskripsiX     = $data['banner']['deskripsi'];
$fotobg         = $data['banner']['fotobackground'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL ?>assets/assetskk/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="<?= BASEURL ?>assets/upload/<?= $icon ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>PT Timur Kasih Karunia</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="<?= BASEURL ?>assets/assetskk/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= BASEURL ?>assets/assetskk/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= BASEURL ?>assets/assetskk/css/style.css" />
  <link rel="stylesheet" href="<?= BASEURL ?>assets/assetskk/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= BASEURL ?>assets/assetskk/css/owl.theme.default.min.css" />
</head>

<body class="landing-page sidebar-collapse">
  <nav class="
        navbar navbar-transparent navbar-color-on-scroll
        fixed-top
        navbar-expand-lg
      " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.html">
          <img src="<?= BASEURL ?>assets/upload/<?= $logo ?>" alt="" srcset="" class="img-fluid" width="300px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link smoothScroll top" href="#"> Beranda </a>
          </li>
          <li class="nav-item">
            <a class="nav-link smoothScroll scroll" href="#tentang-kami">
              Tentang Kami
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link smoothScroll scroll" href="#produk"> Produk </a>
          </li>
          <li class="nav-item">
            <a class="nav-link smoothScroll scroll" href="#customer"> Customer </a>
          </li>
          <!--<li class="nav-item">-->
          <!--    <a class="nav-link smoothScroll scroll" href="#"> brand </a>-->
          <!--</li>-->
          <li class="nav-item">
            <a class="nav-link smoothScroll scroll" href="#"> unduh brosur </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-success btn-call smoothScroll scroll" href="#hubungi-kami" style="color: white">Hubungi Kami</a>
          </li>
          <!-- <li class="nav-item">
              <a
                class="btn btn-success nav-link smoothScroll scroll"
                href="#hubungi-kami"
              >
                call us
              </a>
            </li> -->
        </ul>
        <!-- <a
            class="btn btn-success btn-call smoothScroll scroll"
            href="#hubungi-kami"
            >CALL US</a
          > -->
      </div>
    </div>
  </nav>
  <!-- MODAL LAYANAN -->
  <!-- RETAIL -->
  <?php
  foreach ($data['layanan'] as $lyk) {
    $gambarlayanan     = $lyk['gambarlayanan'];
    $judullayanan      = $lyk['listlayanankami'];
    $deskripsi        = $lyk['deskripsi'];
    //  var_dump($lyk);           
  ?>
    <div class="modal fade" id="<?= $judullayanan  ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?= $judullayanan ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="material-icons">clear</i>
            </button>
          </div>
          <div class="modal-body">
            <p>
              <?= $deskripsi ?>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <!-- end -->
  <!-- DISTRIBUSI -->
  <!-- <div class="modal fade" id="informasi-akurat" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">INFORMASI AKURAT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts. Separated
                        they live in Bookmarksgrove right at the coast of the Semantics, a
                        large language ocean. A small river named Duden flows by their
                        place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly
                        into your mouth. Even the all-powerful Pointing has no control
                        about the blind texts it is an almost unorthographic life One day
                        however a small line of blind text by the name of Lorem Ipsum
                        decided to leave for the far World of Grammar.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">

                        Close

                    </button>

                </div>

            </div>

        </div>

    </div> -->

  <!-- end -->



  <!-- GROSIR -->

  <!-- <div class="modal fade" id="pengiriman-cepat" tabindex="-1" role="dialog">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">PENGIRIMAN CEPAT</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <i class="material-icons">clear</i>

                    </button>

                </div>

                <div class="modal-body">

                    <p>

                        Far far away, behind the word mountains, far from the countries

                        Vokalia and Consonantia, there live the blind texts. Separated

                        they live in Bookmarksgrove right at the coast of the Semantics, a

                        large language ocean. A small river named Duden flows by their

                        place and supplies it with the necessary regelialia. It is a

                        paradisematic country, in which roasted parts of sentences fly

                        into your mouth. Even the all-powerful Pointing has no control

                        about the blind texts it is an almost unorthographic life One day

                        however a small line of blind text by the name of Lorem Ipsum

                        decided to leave for the far World of Grammar.

                    </p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">

                        Close

                    </button>

                </div>

            </div>

        </div>

    </div> -->

  <!-- end -->
  <!-- END -->

  <!-- MODAL PRODUK -->
  <!-- produk 1 -->
  <?php
  $count = 1;
  //*Produk
  foreach ($data['produk'] as $prd) {
    $namaproduk     = $prd['namaproduk'];
    $deskripsi      = $prd['deskripsi'];
  ?>
    <!-- produk 1 -->
    <div class="modal fade" id="produk-<?= $count++ ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?= $namaproduk ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="material-icons">clear</i>
            </button>
          </div>
          <div class="modal-body" style="text-align: justify;">
            <p>
              <?= $deskripsi ?>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- end -->
  <?php
  }
  ?>
  <!-- END -->
  <!-- produk 2 -->
  <div class="modal fade" id="produk-2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">SIKU</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- produk 3 -->
  <div class="modal fade" id="produk-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">UNP</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- produk 4 -->
  <div class="modal fade" id="produk-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">BAJA RINGAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- produk 5 -->
  <div class="modal fade" id="produk-5" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">PLAT ESSER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- produk 6 -->
  <div class="modal fade" id="produk-6" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">HOLLOW</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- produk 7 -->
  <div class="modal fade" id="produk-7" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">RENG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- produk 8 -->
  <div class="modal fade" id="produk-8" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ALUMINIUM</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their
            place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly
            into your mouth. Even the all-powerful Pointing has no control
            about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum
            decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- END -->

  <!-- MODAL Customer -->
  <!-- customer 1 -->
  <?php
  if (count($data['topcustomer'])) {
    $count = 1;
    foreach ($data['topcustomer'] as $prd) {
      $namacustomer   = $prd['namacustomer'];
      $deskripsi      = $prd['deskripsi'];
  ?>
      <!-- produk 1 -->
      <div class="modal fade" id="topcustomer-<?= $count++ ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?= $namacustomer ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons">clear</i>
              </button>
            </div>
            <div class="modal-body" style="text-align: justify;">
              <p>
                <?= $deskripsi ?>
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- end -->
  <?php
    }
  }
  ?>



  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?= BASEURL ?>assets/upload/<?= $fotobg; ?>')">

    <div class="container top-content">

      <div class="row float-right">

        <div class="banner">

          <div class="row mb-3">

            <div class="col-lg-12">

              <h1 class="title"><?= $judulbanner ?></h1>

              <!-- <h3 class="mt-0 pt-0">Supplier Baja Ringan Terpercaya</h3> -->

              <h3 class="mt-0 pt-0"><?= $subjudul ?></h3>

            </div>

            <div class="col-lg-12">

              <h4>

                <!-- Melayani pembelian grosir baja ringan Reng, Galvalume, Canal

                                C, Hollo Plafon, dsb -->

                <?= $deskripsiX ?>

              </h4>

            </div>

          </div>



          <?php

          foreach ($data['brosur'] as $brs) {

            $fileBrosur     = $brs['filebrosur'];
          }

          ?>

          <a href="<?= BASEURL ?>assets/upload/brosur/<?= $fileBrosur ?>" target="_blank" class="btn-cpk btn btn-raised btn-md smoothSchroll scroll">Cek Brosur Online</a>



          <a href="#hubungi-kami" class="btn-cpk btn btn-raised btn-md smoothScroll scroll">

            HUBUNGI KAMI

          </a>

          <!-- <div

              class="col-md-5 float-right"

              style="margin-right: -10px; margin-left: -10px"

            >

              <div class="row float-right">

                <div

                  class="col-md-6 col-6"

                  style="margin-right: -5px; margin-left: -5px"

                >

                  <a

                    href="#produk"

                    class="btn-cpk btn btn-raised btn-md smoothSchroll scroll"

                    >CEK PRODUK KAMI</a

                  >

                </div>

                <div

                  class="col-md-6 col-6"

                  style="margin-right: -5px; margin-left: -5px"

                >

                  <a

                    href="#hubungi-kami"

                    class="btn-cpk btn btn-raised btn-md smoothScroll scroll"

                  >

                    HUBUNGI KAMI

                  </a>

                </div>

              </div>

            </div> -->

        </div>

      </div>

    </div>

  </div>

  <div class="main">

    <!-- LAYANAN KAMI -->

    <section class="section-padding" id="tentang-kami">

      <div>

        <div class="section text-center">

          <h2>MENGAPA MEMILIH KAMI?</h2>

          <div class="col-md-8 ml-auto mr-auto mt-5 mb-5">

            <div class="row">

              <?php

              // $count = 1;

              //*Produk

              foreach ($data['layanan'] as $ly) {

                $gambarlayanan     = $ly['gambarlayanan'];

                $judullayanan      = $ly['listlayanankami'];

                // var_dump($judullayanan);          

              ?>

                <div class="col-md-4 col-12">

                  <img data-toggle="modal" data-target="#<?= $judullayanan ?>" src="<?= BASEURL ?>assets/upload/<?= $gambarlayanan ?>" class="layanan-item img-raised rounded img-fluid" alt="" />

                </div>

              <?php

              }

              ?>







              <!-- <div class="col-md-4 col-12">

                                <img data-toggle="modal" data-target="#produk-lengkap" src="assets/img/02.jpg"

                                    class="layanan-item img-raised rounded img-fluid" alt="" />

                            </div>

                            <div class="col-md-4 col-12">

                                <img data-toggle="modal" data-target="#informasi-akurat" src="assets/img/03.jpg"

                                    class="layanan-item img-raised rounded img-fluid" alt="" />

                            </div>

                            <div class="col-md-4 col-12">

                                <img data-toggle="modal" data-target="#pengiriman-cepat" src="assets/img/04.jpg"

                                    class="layanan-item img-raised rounded img-fluid" alt="" />

                            </div> -->

            </div>

          </div>

          <!-- carousel -->

          <div class="col-md-12 pt-lg-4 mt-2 play-c">

            <div id="owl-tk" class="owl-carousel owl-theme">

              <div class="item">

                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetskk/img/06.jpg" alt="" srcset="" />

                <h1>

                  Lebih dari 12 tahun <br />

                  di industri baja ringan

                </h1>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- END -->



    <!-- PRODUCT -->

    <section class="section-padding" id="produk">

      <div class="bg-grey">

        <div class="section text-center">

          <div class="col-md-8 ml-auto mr-auto">

            <h2>PRODUK</h2>
            <!-- <h5 class="description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam
              </h5> -->
            <div class="row">
              <?php
              $count = 1;
              //*Produk
              foreach ($data['produk'] as $prd) {
                // var_dump($prd);
                $namaproduk     = $prd['namaproduk'];
                $deskripsi      = $prd['deskripsi'];
                $gambarProduk   = $prd['gambarproduk']; ?>
                <div class="col-md-3 col-6">
                  <img data-toggle="modal" data-target="#produk-<?= $count++ ?>" class="img-produk img-raised rounded img-fluid" src="<?= BASEURL ?>assets/upload/produk/<?= $gambarProduk ?>" alt="" srcset="" />
                </div>
              <?php
              }
              ?>
              <!-- <div class="col-md-3 col-6">
                                <img data-toggle="modal" data-target="#produk-1"
                                    class="img-produk img-raised rounded img-fluid" src="assets/img/07.png" alt=""
                                    srcset="" />
                            </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- END -->

    <section class="section-padding" id="customer">
      <div class="container-fluid section-padding bg-grey pb-2">
        <div class="section mb-0">
          <h2 class="text-center ml-auto mr-auto" style="max-width: 600px;">TOP #3 CUSTOMER</h2>
        </div>
        <div class="col-md-6 col-12 ml-auto mr-auto">
          <div class="row">
            <?php
            if (count($data['topcustomer'])) {
              $count = 1;
              foreach ($data['topcustomer'] as $prd) {
                //var_dump($prd);
                $namacustomer     = $prd['namacustomer'];
                $deskripsi        = $prd['deskripsi'];
                $gambarcustomer   = $prd['gambarcustomer']; ?>
                <div class="col-md-4 col-10 ml-auto mr-auto">
                  <img data-toggle="modal" data-target="#topcustomer-<?= $count++ ?>" class="img-customer img-raised rounded img-fluid" src="<?= BASEURL ?>assets/upload/customer/<?= $gambarcustomer ?>" alt="" srcset="" />
                </div>
            <?php
              }
            }
            ?>
          </div>
          <div class="text-center ml-3 pt-1 pb-1">
            <h4>Sudah banyak yang telah mempercayakan produknya di PT Timur Kasih Karunia. Apakah anda selanjutnya?</h4>
          </div>
        </div>
        <!-- carousel -->
        <?php
        if (count($data['customer'])) {
          $count = 1;
          foreach ($data['customer'] as $prd) {
            //var_dump($prd);
            $namacustomer     = $prd['namacustomer'];
            $deskripsi        = $prd['deskripsi'];
            $gambarcustomer   = $prd['gambarcustomer']; ?>
            <div class="col-md-8 col-10 ml-auto mr-auto pt-4 pb-5 client">
              <div class="slide-client owl-carousel owl-theme">
                <div class="item">
                  <img data-toggle="modal" data-target="#customer-<?= $count++ ?>" class="img-customer img-raised rounded img-fluid" src="<?= BASEURL ?>assets/upload/customer/<?= $gambarcustomer ?>" alt="" srcset="" />
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>


      </div>
      <!-- end -->
  </div>
  </section>
  <!-- end client -->
  <!-- <h5 class="description">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam
  </h5> -->
  <!-- <div class="row">
                //<?php
                  //$count = 1;             
                  //*Customer
                  //foreach ($data['customer'] as $prd) {
                  //var_dump($prd);
                  //$namacustomer     = $prd['namacustomer'];
                  //$deskripsi        = $prd['deskripsi'];
                  //$gambarcustomer   = $prd['gambarcustomer']; 
                  ?>
                <div class="col-md-3 col-6">
                    <img data-toggle="modal" data-target="#customer-<?= $count++ ?>"
                        class="img-customer img-raised rounded img-fluid"
                        //src="<?= BASEURL ?>assets/upload/customer/<?= $gambarcustomer ?>" alt="" srcset="" />
                </div>
                <?php
                //}
                ?> -->

  <!-- <div class="col-md-3 col-6">

                    <img data-toggle="modal" data-target="#produk-1"

                        class="img-produk img-raised rounded img-fluid" src="assets/img/07.png" alt=""

                        srcset="" />

                </div> -->



  </div>

  </div>

  </div>

  </div>

  </section>

  <!-- END -->

  <!-- client -->
  <section class="section-padding" id="client">
    <div class="container-fluid section-padding bg-grey pb-2">
      <div class="section mb-0">
        <h2 class="text-center ml-auto mr-auto" style="max-width: 600px;">Nge-deal sama ideal steel, #SemuaBisaCuan</h2>
      </div>
      <div class="col-md-6 col-12 ml-auto mr-auto">
        <div class="row">
          <div class="col-md-4 col-10 ml-auto mr-auto">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" class="client-item img-raised rounded img-fluid" alt="">
          </div>
          <div class="col-md-4 col-10 ml-auto mr-auto">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" class="client-item img-raised rounded img-fluid" alt="">
          </div>
          <div class="col-md-4 col-10 ml-auto mr-auto">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" class="client-item img-raised rounded img-fluid" alt="">
          </div>
        </div>
        <div class="text-center ml-3 pt-1 pb-1">
          <h4>Lebih dari 20 merek mempercayakan produknya di PT Timur Kasih Karunia. Toko anda juga bisa punya merek baja ringan sendiri!</h4>
        </div>
      </div>
      <!-- carousel -->
      <div class="col-md-8 col-10 ml-auto mr-auto pt-4 pb-5 client">
        <div class="slide-client owl-carousel owl-theme">
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
          <div class="item">
            <img src="<?= BASEURL ?>assets/assetskk/img/07.png" alt="" class="client-img img-raised rounded img-fluid" srcset="">
          </div>
        </div>
      </div>
      <!-- end -->
    </div>
  </section>
  <!-- end client -->


  <!-- TESTIMONI -->

  <section class="section-padding" id="testimoni">

    <div class="bg-grey">

      <div class="section">

        <h2 class="text-center">TESTIMONI</h2>

        <div class="col-md-8 col-10 ml-auto mr-auto ">

          <div class="testimoni-slider owl-carousel owl-theme">

            <!-- <div class="item">

                                <div class="card mb-3 ml-auto mr-auto card-testimoni">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <div class="col-md-4 pr-0 pl-0">

                                                <img src="assets/img/06. Testimoni Photo.jpg" class="k" alt="..." />

                                            </div>

                                            <div class="col-md-8">

                                                <div class="card-body pt-0 pl-0">

                                                    <h4 class="card-title mb-0">Pak Aan</h4>

                                                    <span class="badge badge-pill badge-success mb-2">Pekerja</span>

                                                    <p class="card-text">

                                                        "Belanja di sini sudah satu tahun, diarahkan

                                                        langsung dari pimpinan. barang di Fortuna Steel

                                                        lengkap, segi harga saya belanja pakai member.

                                                        Kalau jadi member dapat selisih harga, jadi bisa

                                                        nekan budget yang lain."

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div> -->

            <?php

            foreach ($data['testimoni']  as $ts) {

              $nama             = $ts['nama'];

              $perkerjaan       = $ts['perkerjaan'];

              $testimoni        = $ts['isitestimoni'];

              $gambar           = $ts['gambar'];

            ?>

              <div class="item">

                <div class="card mb-3 ml-auto mr-auto card-testimoni">

                  <div class="col-md-12">

                    <div class="row">

                      <div class="col-md-4 pr-0 pl-0">

                        <img src="<?= BASEURL ?>assets/upload/<?= $gambar ?>" class="k" alt="..." />

                      </div>

                      <div class="col-md-8">

                        <div class="card-body pt-0 pl-0">

                          <h4 class="card-title mb-0"><?= $nama  ?></h4>

                          <span class="badge badge-pill badge-success mb-2"><?= $perkerjaan  ?></span>

                          <p class="card-text">

                            <?= $testimoni ?>

                          </p>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            <?php

            }



            ?>



          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- end -->



  <!-- Hubungi KAMI -->

  <section class="section-padding" id="hubungi-kami">

    <div class="container-fluid section-padding hubungi-kami">

      <div class="section section-padding">

        <h2 class="text-center">HUBUNGI KAMI</h2>

        <div class="col-md-12 pt-2 play-c slide-hk">

          <div id="owl-hk" class="owl-carousel owl-theme">

            <?php

            foreach ($data['hubungikami'] as $hk) {

            ?>

              <div class="item">

                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/upload/outlet/<?= $hk['gambaroutlate'] ?>" alt="" srcset="" />





                <!-- <h1>PT Timur Kasih Karunia</h1>

                  <h3>

                    Dusun Banjarsari, Banjaran, Kec. Driyorejo, Kab. Gresik,

                    Jawa Timur 61177

                  </h3>

                  <span class="badge badge-pill badge-warning mb-2"

                    >0851 5555 6666</span

                  > -->

              </div>

            <?php

            }



            ?>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- END -->



  <!-- PROMO -->

  <!-- <section class="section-padding" id="promo">

        <div class="container-fluid section-padding bg-grey">

          <div class="section section-padding">

            <h2 class="text-center">PROMO</h2>

            <div class="col-md-12 pt-2">

              <div id="owl-tk" class="owl-carousel owl-theme">

                <div class="item">

                  <img

                    class="mr-auto ml-auto"

                    src="https://via.placeholder.com/1440x650?text=Foto"

                    alt=""

                    srcset=""

                  />

                </div>

                <div class="item">

                  <img

                    class="mr-auto ml-auto"

                    src="https://via.placeholder.com/1440x650?text=Foto"

                    alt=""

                    srcset=""

                  />

                </div>

                <div class="item">

                  <img

                    class="mr-auto ml-auto"

                    src="https://via.placeholder.com/1440x650?text=Foto"

                    alt=""

                    srcset=""

                  />

                </div>

              </div>

            </div>

          </div>

        </div>

      </section> -->

  <!-- END -->



  <!-- sosial media info -->

  <!-- <section class="section-padding">

        <div class="container-fluid bg-grey">

          <div class="section text-center">

            <h2 class="mb-4">SOSIAL MEDIA INFO</h2>

            <br />

            <div class="col-md-8 ml-auto mr-auto">

              <div class="row mt-3">

                <div class="col-md-6 col-10 ml-auto mr-auto">

                  <div class="box-sos ml-auto mr-auto">

                    <div class="row mb-3">

                      <div class="col-md-3 col-3">

                        <img

                          src="https://via.placeholder.com/70/000000/FFFFF/C/O https://placeholder.com/"

                          class="img-raised rounded-circle img-fluid mt-3"

                          alt=""

                          srcset=""

                        />

                      </div>

                      <div class="col-md-9 col-9">

                        <a href="" class="float-left t-sos"

                          ><h3>@TESTSOSIALMEDIA</h3>

                        </a>

                      </div>

                    </div>

                    <div class="row mb-3">

                      <div class="col-md-3 col-3">

                        <img

                          src="https://via.placeholder.com/70/000000/FFFFF/C/O https://placeholder.com/"

                          class="img-raised rounded-circle img-fluid mt-3"

                          alt=""

                          srcset=""

                        />

                      </div>

                      <div class="col-md-9 col-9">

                        <a href="" class="float-left t-sos"

                          ><h3>@TESTSOSIALMEDIA</h3>

                        </a>

                      </div>

                    </div>

                    <div class="row mb-3">

                      <div class="col-md-3 col-3">

                        <img

                          src="https://via.placeholder.com/70/000000/FFFFF/C/O https://placeholder.com/"

                          class="img-raised rounded-circle img-fluid mt-3"

                          alt=""

                          srcset=""

                        />

                      </div>

                      <div class="col-md-9 col-9">

                        <a href="" class="float-left t-sos"

                          ><h3>@TESTSOSIALMEDIA</h3>

                        </a>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="col-md-6 col-10 ml-auto mr-auto">

                  <img

                    src="assets/img/lampu.png"

                    alt=""

                    srcset=""

                    class="img-fluid"

                  />

                </div>

              </div>

            </div>

          </div>

        </div>

      </section> -->

  <!-- end -->



  <!-- feed ig -->

  <!-- <section class="section-padding">

        <div class="container-fluid">

          <div class="section text-center">

            <h2>FEED INSTAGRAM</h2>

            <div class="col-md-9 ml-auto mr-auto">

              <div class="row">

                <div class="col-md-4">

                  <div class="card">

                    <blockquote

                      class="instagram-media"

                      data-instgrm-permalink="https://www.instagram.com/p/CD57n9MAjFu/?utm_source=ig_embed&amp;utm_campaign=loading"

                      data-instgrm-version="13"

                      style="

                        background: #fff;

                        border: 0;

                        border-radius: 3px;

                        box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),

                          0 1px 10px 0 rgba(0, 0, 0, 0.15);

                        margin: 1px;

                        max-width: 540px;

                        min-width: 326px;

                        padding: 0;

                        width: 99.375%;

                        width: -webkit-calc(100% - 2px);

                        width: calc(100% - 2px);

                      "

                    >

                      <div style="padding: 16px">

                        <a

                          href="https://www.instagram.com/p/CD57n9MAjFu/?utm_source=ig_embed&amp;utm_campaign=loading"

                          style="

                            background: #ffffff;

                            line-height: 0;

                            padding: 0 0;

                            text-align: center;

                            text-decoration: none;

                            width: 100%;

                          "

                          target="_blank"

                        >

                          <div

                            style="

                              display: flex;

                              flex-direction: row;

                              align-items: center;

                            "

                          >

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 50%;

                                flex-grow: 0;

                                height: 40px;

                                margin-right: 14px;

                                width: 40px;

                              "

                            ></div>

                            <div

                              style="

                                display: flex;

                                flex-direction: column;

                                flex-grow: 1;

                                justify-content: center;

                              "

                            >

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 4px;

                                  flex-grow: 0;

                                  height: 14px;

                                  margin-bottom: 6px;

                                  width: 100px;

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 4px;

                                  flex-grow: 0;

                                  height: 14px;

                                  width: 60px;

                                "

                              ></div>

                            </div>

                          </div>

                          <div style="padding: 19% 0"></div>

                          <div

                            style="

                              display: block;

                              height: 50px;

                              margin: 0 auto 12px;

                              width: 50px;

                            "

                          >

                            <svg

                              width="50px"

                              height="50px"

                              viewBox="0 0 60 60"

                              version="1.1"

                              xmlns="https://www.w3.org/2000/svg"

                              xmlns:xlink="https://www.w3.org/1999/xlink"

                            >

                              <g

                                stroke="none"

                                stroke-width="1"

                                fill="none"

                                fill-rule="evenodd"

                              >

                                <g

                                  transform="translate(-511.000000, -20.000000)"

                                  fill="#000000"

                                >

                                  <g>

                                    <path

                                      d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"

                                    ></path>

                                  </g>

                                </g>

                              </g>

                            </svg>

                          </div>

                          <div style="padding-top: 8px">

                            <div

                              style="

                                color: #3897f0;

                                font-family: Arial, sans-serif;

                                font-size: 14px;

                                font-style: normal;

                                font-weight: 550;

                                line-height: 18px;

                              "

                            >

                              View this post on Instagram

                            </div>

                          </div>

                          <div style="padding: 12.5% 0"></div>

                          <div

                            style="

                              display: flex;

                              flex-direction: row;

                              margin-bottom: 14px;

                              align-items: center;

                            "

                          >

                            <div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  height: 12.5px;

                                  width: 12.5px;

                                  transform: translateX(0px) translateY(7px);

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  height: 12.5px;

                                  transform: rotate(-45deg) translateX(3px)

                                    translateY(1px);

                                  width: 12.5px;

                                  flex-grow: 0;

                                  margin-right: 14px;

                                  margin-left: 2px;

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  height: 12.5px;

                                  width: 12.5px;

                                  transform: translateX(9px) translateY(-18px);

                                "

                              ></div>

                            </div>

                            <div style="margin-left: 8px">

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  flex-grow: 0;

                                  height: 20px;

                                  width: 20px;

                                "

                              ></div>

                              <div

                                style="

                                  width: 0;

                                  height: 0;

                                  border-top: 2px solid transparent;

                                  border-left: 6px solid #f4f4f4;

                                  border-bottom: 2px solid transparent;

                                  transform: translateX(16px) translateY(-4px)

                                    rotate(30deg);

                                "

                              ></div>

                            </div>

                            <div style="margin-left: auto">

                              <div

                                style="

                                  width: 0px;

                                  border-top: 8px solid #f4f4f4;

                                  border-right: 8px solid transparent;

                                  transform: translateY(16px);

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  flex-grow: 0;

                                  height: 12px;

                                  width: 16px;

                                  transform: translateY(-4px);

                                "

                              ></div>

                              <div

                                style="

                                  width: 0;

                                  height: 0;

                                  border-top: 8px solid #f4f4f4;

                                  border-left: 8px solid transparent;

                                  transform: translateY(-4px) translateX(8px);

                                "

                              ></div>

                            </div>

                          </div>

                          <div

                            style="

                              display: flex;

                              flex-direction: column;

                              flex-grow: 1;

                              justify-content: center;

                              margin-bottom: 24px;

                            "

                          >

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 4px;

                                flex-grow: 0;

                                height: 14px;

                                margin-bottom: 6px;

                                width: 224px;

                              "

                            ></div>

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 4px;

                                flex-grow: 0;

                                height: 14px;

                                width: 144px;

                              "

                            ></div></div

                        ></a>

                        <p

                          style="

                            color: #c9c8cd;

                            font-family: Arial, sans-serif;

                            font-size: 14px;

                            line-height: 17px;

                            margin-bottom: 0;

                            margin-top: 8px;

                            overflow: hidden;

                            padding: 8px 0 7px;

                            text-align: center;

                            text-overflow: ellipsis;

                            white-space: nowrap;

                          "

                        >

                          <a

                            href="https://www.instagram.com/p/CD57n9MAjFu/?utm_source=ig_embed&amp;utm_campaign=loading"

                            style="

                              color: #c9c8cd;

                              font-family: Arial, sans-serif;

                              font-size: 14px;

                              font-style: normal;

                              font-weight: normal;

                              line-height: 17px;

                              text-decoration: none;

                            "

                            target="_blank"

                            >A post shared by Horus Technology

                            (@horusautomation)</a

                          >

                        </p>

                      </div>

                    </blockquote>

                    <script async src="//www.instagram.com/embed.js"></script>

                  </div>

                </div>

                <div class="col-md-4">

                  <div class="card">

                    <blockquote

                      class="instagram-media"

                      data-instgrm-permalink="https://www.instagram.com/p/CD57mjjgO6N/?utm_source=ig_embed&amp;utm_campaign=loading"

                      data-instgrm-version="13"

                      style="

                        background: #fff;

                        border: 0;

                        border-radius: 3px;

                        box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),

                          0 1px 10px 0 rgba(0, 0, 0, 0.15);

                        margin: 1px;

                        max-width: 540px;

                        min-width: 326px;

                        padding: 0;

                        width: 99.375%;

                        width: -webkit-calc(100% - 2px);

                        width: calc(100% - 2px);

                      "

                    >

                      <div style="padding: 16px">

                        <a

                          href="https://www.instagram.com/p/CD57mjjgO6N/?utm_source=ig_embed&amp;utm_campaign=loading"

                          style="

                            background: #ffffff;

                            line-height: 0;

                            padding: 0 0;

                            text-align: center;

                            text-decoration: none;

                            width: 100%;

                          "

                          target="_blank"

                        >

                          <div

                            style="

                              display: flex;

                              flex-direction: row;

                              align-items: center;

                            "

                          >

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 50%;

                                flex-grow: 0;

                                height: 40px;

                                margin-right: 14px;

                                width: 40px;

                              "

                            ></div>

                            <div

                              style="

                                display: flex;

                                flex-direction: column;

                                flex-grow: 1;

                                justify-content: center;

                              "

                            >

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 4px;

                                  flex-grow: 0;

                                  height: 14px;

                                  margin-bottom: 6px;

                                  width: 100px;

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 4px;

                                  flex-grow: 0;

                                  height: 14px;

                                  width: 60px;

                                "

                              ></div>

                            </div>

                          </div>

                          <div style="padding: 19% 0"></div>

                          <div

                            style="

                              display: block;

                              height: 50px;

                              margin: 0 auto 12px;

                              width: 50px;

                            "

                          >

                            <svg

                              width="50px"

                              height="50px"

                              viewBox="0 0 60 60"

                              version="1.1"

                              xmlns="https://www.w3.org/2000/svg"

                              xmlns:xlink="https://www.w3.org/1999/xlink"

                            >

                              <g

                                stroke="none"

                                stroke-width="1"

                                fill="none"

                                fill-rule="evenodd"

                              >

                                <g

                                  transform="translate(-511.000000, -20.000000)"

                                  fill="#000000"

                                >

                                  <g>

                                    <path

                                      d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"

                                    ></path>

                                  </g>

                                </g>

                              </g>

                            </svg>

                          </div>

                          <div style="padding-top: 8px">

                            <div

                              style="

                                color: #3897f0;

                                font-family: Arial, sans-serif;

                                font-size: 14px;

                                font-style: normal;

                                font-weight: 550;

                                line-height: 18px;

                              "

                            >

                              View this post on Instagram

                            </div>

                          </div>

                          <div style="padding: 12.5% 0"></div>

                          <div

                            style="

                              display: flex;

                              flex-direction: row;

                              margin-bottom: 14px;

                              align-items: center;

                            "

                          >

                            <div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  height: 12.5px;

                                  width: 12.5px;

                                  transform: translateX(0px) translateY(7px);

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  height: 12.5px;

                                  transform: rotate(-45deg) translateX(3px)

                                    translateY(1px);

                                  width: 12.5px;

                                  flex-grow: 0;

                                  margin-right: 14px;

                                  margin-left: 2px;

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  height: 12.5px;

                                  width: 12.5px;

                                  transform: translateX(9px) translateY(-18px);

                                "

                              ></div>

                            </div>

                            <div style="margin-left: 8px">

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  flex-grow: 0;

                                  height: 20px;

                                  width: 20px;

                                "

                              ></div>

                              <div

                                style="

                                  width: 0;

                                  height: 0;

                                  border-top: 2px solid transparent;

                                  border-left: 6px solid #f4f4f4;

                                  border-bottom: 2px solid transparent;

                                  transform: translateX(16px) translateY(-4px)

                                    rotate(30deg);

                                "

                              ></div>

                            </div>

                            <div style="margin-left: auto">

                              <div

                                style="

                                  width: 0px;

                                  border-top: 8px solid #f4f4f4;

                                  border-right: 8px solid transparent;

                                  transform: translateY(16px);

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  flex-grow: 0;

                                  height: 12px;

                                  width: 16px;

                                  transform: translateY(-4px);

                                "

                              ></div>

                              <div

                                style="

                                  width: 0;

                                  height: 0;

                                  border-top: 8px solid #f4f4f4;

                                  border-left: 8px solid transparent;

                                  transform: translateY(-4px) translateX(8px);

                                "

                              ></div>

                            </div>

                          </div>

                          <div

                            style="

                              display: flex;

                              flex-direction: column;

                              flex-grow: 1;

                              justify-content: center;

                              margin-bottom: 24px;

                            "

                          >

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 4px;

                                flex-grow: 0;

                                height: 14px;

                                margin-bottom: 6px;

                                width: 224px;

                              "

                            ></div>

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 4px;

                                flex-grow: 0;

                                height: 14px;

                                width: 144px;

                              "

                            ></div></div

                        ></a>

                        <p

                          style="

                            color: #c9c8cd;

                            font-family: Arial, sans-serif;

                            font-size: 14px;

                            line-height: 17px;

                            margin-bottom: 0;

                            margin-top: 8px;

                            overflow: hidden;

                            padding: 8px 0 7px;

                            text-align: center;

                            text-overflow: ellipsis;

                            white-space: nowrap;

                          "

                        >

                          <a

                            href="https://www.instagram.com/p/CD57mjjgO6N/?utm_source=ig_embed&amp;utm_campaign=loading"

                            style="

                              color: #c9c8cd;

                              font-family: Arial, sans-serif;

                              font-size: 14px;

                              font-style: normal;

                              font-weight: normal;

                              line-height: 17px;

                              text-decoration: none;

                            "

                            target="_blank"

                            >A post shared by Horus Technology

                            (@horusautomation)</a

                          >

                        </p>

                      </div>

                    </blockquote>

                    <script async src="//www.instagram.com/embed.js"></script>

                  </div>

                </div>

                <div class="col-md-4">

                  <div class="card">

                    <blockquote

                      class="instagram-media"

                      data-instgrm-permalink="https://www.instagram.com/p/CD57kifAJZB/?utm_source=ig_embed&amp;utm_campaign=loading"

                      data-instgrm-version="13"

                      style="

                        background: #fff;

                        border: 0;

                        border-radius: 3px;

                        box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),

                          0 1px 10px 0 rgba(0, 0, 0, 0.15);

                        margin: 1px;

                        max-width: 540px;

                        min-width: 326px;

                        padding: 0;

                        width: 99.375%;

                        width: -webkit-calc(100% - 2px);

                        width: calc(100% - 2px);

                      "

                    >

                      <div style="padding: 16px">

                        <a

                          href="https://www.instagram.com/p/CD57kifAJZB/?utm_source=ig_embed&amp;utm_campaign=loading"

                          style="

                            background: #ffffff;

                            line-height: 0;

                            padding: 0 0;

                            text-align: center;

                            text-decoration: none;

                            width: 100%;

                          "

                          target="_blank"

                        >

                          <div

                            style="

                              display: flex;

                              flex-direction: row;

                              align-items: center;

                            "

                          >

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 50%;

                                flex-grow: 0;

                                height: 40px;

                                margin-right: 14px;

                                width: 40px;

                              "

                            ></div>

                            <div

                              style="

                                display: flex;

                                flex-direction: column;

                                flex-grow: 1;

                                justify-content: center;

                              "

                            >

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 4px;

                                  flex-grow: 0;

                                  height: 14px;

                                  margin-bottom: 6px;

                                  width: 100px;

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 4px;

                                  flex-grow: 0;

                                  height: 14px;

                                  width: 60px;

                                "

                              ></div>

                            </div>

                          </div>

                          <div style="padding: 19% 0"></div>

                          <div

                            style="

                              display: block;

                              height: 50px;

                              margin: 0 auto 12px;

                              width: 50px;

                            "

                          >

                            <svg

                              width="50px"

                              height="50px"

                              viewBox="0 0 60 60"

                              version="1.1"

                              xmlns="https://www.w3.org/2000/svg"

                              xmlns:xlink="https://www.w3.org/1999/xlink"

                            >

                              <g

                                stroke="none"

                                stroke-width="1"

                                fill="none"

                                fill-rule="evenodd"

                              >

                                <g

                                  transform="translate(-511.000000, -20.000000)"

                                  fill="#000000"

                                >

                                  <g>

                                    <path

                                      d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"

                                    ></path>

                                  </g>

                                </g>

                              </g>

                            </svg>

                          </div>

                          <div style="padding-top: 8px">

                            <div

                              style="

                                color: #3897f0;

                                font-family: Arial, sans-serif;

                                font-size: 14px;

                                font-style: normal;

                                font-weight: 550;

                                line-height: 18px;

                              "

                            >

                              View this post on Instagram

                            </div>

                          </div>

                          <div style="padding: 12.5% 0"></div>

                          <div

                            style="

                              display: flex;

                              flex-direction: row;

                              margin-bottom: 14px;

                              align-items: center;

                            "

                          >

                            <div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  height: 12.5px;

                                  width: 12.5px;

                                  transform: translateX(0px) translateY(7px);

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  height: 12.5px;

                                  transform: rotate(-45deg) translateX(3px)

                                    translateY(1px);

                                  width: 12.5px;

                                  flex-grow: 0;

                                  margin-right: 14px;

                                  margin-left: 2px;

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  height: 12.5px;

                                  width: 12.5px;

                                  transform: translateX(9px) translateY(-18px);

                                "

                              ></div>

                            </div>

                            <div style="margin-left: 8px">

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  border-radius: 50%;

                                  flex-grow: 0;

                                  height: 20px;

                                  width: 20px;

                                "

                              ></div>

                              <div

                                style="

                                  width: 0;

                                  height: 0;

                                  border-top: 2px solid transparent;

                                  border-left: 6px solid #f4f4f4;

                                  border-bottom: 2px solid transparent;

                                  transform: translateX(16px) translateY(-4px)

                                    rotate(30deg);

                                "

                              ></div>

                            </div>

                            <div style="margin-left: auto">

                              <div

                                style="

                                  width: 0px;

                                  border-top: 8px solid #f4f4f4;

                                  border-right: 8px solid transparent;

                                  transform: translateY(16px);

                                "

                              ></div>

                              <div

                                style="

                                  background-color: #f4f4f4;

                                  flex-grow: 0;

                                  height: 12px;

                                  width: 16px;

                                  transform: translateY(-4px);

                                "

                              ></div>

                              <div

                                style="

                                  width: 0;

                                  height: 0;

                                  border-top: 8px solid #f4f4f4;

                                  border-left: 8px solid transparent;

                                  transform: translateY(-4px) translateX(8px);

                                "

                              ></div>

                            </div>

                          </div>

                          <div

                            style="

                              display: flex;

                              flex-direction: column;

                              flex-grow: 1;

                              justify-content: center;

                              margin-bottom: 24px;

                            "

                          >

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 4px;

                                flex-grow: 0;

                                height: 14px;

                                margin-bottom: 6px;

                                width: 224px;

                              "

                            ></div>

                            <div

                              style="

                                background-color: #f4f4f4;

                                border-radius: 4px;

                                flex-grow: 0;

                                height: 14px;

                                width: 144px;

                              "

                            ></div></div

                        ></a>

                        <p

                          style="

                            color: #c9c8cd;

                            font-family: Arial, sans-serif;

                            font-size: 14px;

                            line-height: 17px;

                            margin-bottom: 0;

                            margin-top: 8px;

                            overflow: hidden;

                            padding: 8px 0 7px;

                            text-align: center;

                            text-overflow: ellipsis;

                            white-space: nowrap;

                          "

                        >

                          <a

                            href="https://www.instagram.com/p/CD57kifAJZB/?utm_source=ig_embed&amp;utm_campaign=loading"

                            style="

                              color: #c9c8cd;

                              font-family: Arial, sans-serif;

                              font-size: 14px;

                              font-style: normal;

                              font-weight: normal;

                              line-height: 17px;

                              text-decoration: none;

                            "

                            target="_blank"

                            >A post shared by Horus Technology

                            (@horusautomation)</a

                          >

                        </p>

                      </div>

                    </blockquote>

                    <script async src="//www.instagram.com/embed.js"></script>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </section> -->

  <!-- end -->



  <!-- HUBUNGI KAMI -->

  <!-- <section class="section-padding" id="hubungi-kami">

        <div class="container-fluid bg-grey">

          <div class="section text-center">

            <h2>HUBUNGI KAMI</h2>

            <div class="col-lg-10 ml-auto mr-auto">

              <div class="row">

                <div class="col-md-3">

                  <div class="card">

                    <img

                      src="https://via.placeholder.com/600x400.png"

                      class="card-img-top"

                      alt="..."

                    />

                    <div class="card-body">

                      <h5 class="card-title">NAMA CABANG</h5>

                      <p class="card-text">

                        Some quick example text to build on the card title and

                        make up the bulk of the card's content.

                      </p>

                      <a href="#" class="btn btn-success"

                        ><i class="fa fa-whatsapp"></i> Whatsapp Now!!!</a

                      >

                    </div>

                  </div>

                </div>

                <div class="col-md-3">

                  <div class="card">

                    <img

                      src="https://via.placeholder.com/600x400.png"

                      class="card-img-top"

                      alt="..."

                    />

                    <div class="card-body">

                      <h5 class="card-title">NAMA CABANG</h5>

                      <p class="card-text">

                        Some quick example text to build on the card title and

                        make up the bulk of the card's content.

                      </p>

                      <a href="#" class="btn btn-success"

                        ><i class="fa fa-whatsapp"></i> Whatsapp Now!!!</a

                      >

                    </div>

                  </div>

                </div>

                <div class="col-md-3">

                  <div class="card">

                    <img

                      src="https://via.placeholder.com/600x400.png"

                      class="card-img-top"

                      alt="..."

                    />

                    <div class="card-body">

                      <h5 class="card-title">NAMA CABANG</h5>

                      <p class="card-text">

                        Some quick example text to build on the card title and

                        make up the bulk of the card's content.

                      </p>

                      <a href="#" class="btn btn-success"

                        ><i class="fa fa-whatsapp"></i> Whatsapp Now!!!</a

                      >

                    </div>

                  </div>

                </div>

                <div class="col-md-3">

                  <div class="card">

                    <img

                      src="https://via.placeholder.com/600x400.png"

                      class="card-img-top"

                      alt="..."

                    />

                    <div class="card-body">

                      <h5 class="card-title">NAMA CABANG</h5>

                      <p class="card-text">

                        Some quick example text to build on the card title and

                        make up the bulk of the card's content.

                      </p>

                      <a href="#" class="btn btn-success"

                        ><i class="fa fa-whatsapp"></i> Whatsapp Now!!!</a

                      >

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </section> -->

  <!-- END -->



  <!-- floating wa -->

  <div id="container-floating">

    <!-- <div class="nds nd4">

          <a href="#" class="buttons l-nds" tooltip="Twitter"

            ><i class="fa fa-whatsapp"></i>

          </a>

        </div>

        <div class="sdn sd4">

          <a href="" class="buttons l-sdn">Outlet 4</a>

        </div>

        <div class="nds nd3">

          <a href="#" class="buttons l-nds" tooltip="Linkedin">

            <i class="fa fa-whatsapp"></i>

          </a>

        </div>

        <div class="sdn sd3">

          <a href="" class="buttons l-sdn">Outlet 4</a>

        </div>

        <div class="nds nd2">

          <a href="#" class="buttons l-nds" tooltip="">

            <i class="fa fa-whatsapp"></i>

          </a>

        </div>

        <div class="sdn sd2">

          <a href="" class="buttons l-sdn">Outlet 4</a>

        </div>

        <div class="nds nd1">

          <a class="buttons l-nds" tooltip="Share" href="#">

            <i class="fa fa-whatsapp"></i>

          </a>

        </div>

        <div class="sdn sd1">

          <a href="" class="buttons l-sdn">Outlet 4</a>

        </div> -->

    <div id="container-floating">



      <?php

      $nomorwa = $data['hubungipusat']['nomorwa'];

      ?>

      <div id="floating-button">

        <div id="floating-btn2">

          <p class="text-wa">

            <a href="https://wa.me/<?= $nomorwa ?>" target="_blank">Ngobrol Lebih Lanjut</a>

          </p>

        </div>

        <p class="plus"><a href="https://wa.me/<?= $nomorwa ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>

        </p>



      </div>

    </div>

  </div>

  <!-- end -->

  </div>

  <footer class="footer footer-default">

    <div class="container">

      <div class="copyright">

        Copyright by &copy;

        <script>
          document.write(new Date().getFullYear());
        </script>

        <a href="https://timurkasihkarunia.com/" target="_blank">

          Timur Kasih Karunia

        </a>

      </div>

    </div>

  </footer>

  <!--   Core JS Files   -->

  <script src="<?= BASEURL ?>assets/assetskk/js/core/jquery.min.js" type="text/javascript"></script>

  <script src="<?= BASEURL ?>assets/assetskk/js/core/popper.min.js" type="text/javascript"></script>

  <script src="<?= BASEURL ?>assets/assetskk/js/core/bootstrap-material-design.min.js" type="text/javascript">

  </script>

  <script src="<?= BASEURL ?>assets/assetskk/js/plugins/moment.min.js"></script>

  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->

  <script src="<?= BASEURL ?>assets/assetskk/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->

  <script src="<?= BASEURL ?>assets/assetskk/js/plugins/nouislider.min.js" type="text/javascript"></script>

  <!--  Google Maps Plugin    -->

  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->

  <script src="<?= BASEURL ?>assets/assetskk/js/material-kit.js?v=2.0.7" type="text/javascript"></script>

  <script src="<?= BASEURL ?>assets/assetskk/js/owl.carousel.min.js"></script>

  <script src="<?= BASEURL ?>assets/assetskk/js/smoothscroll.js"></script>

  <script src="<?= BASEURL ?>assets/assetskk/js/custom.js"></script>

</body>



</html>