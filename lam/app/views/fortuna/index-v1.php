<?php 

        // var_dump($data['banner']);

        $icon           = $data['banner']['iconperusahaan'];

        $title          = $data['judul'];



        $judulbanner    = $data['banner']['judulbanner'];

        $subjudul       = $data['banner']['subjudul'];

        $deskripsiX      = $data['banner']['deskripsi'];

        $fotobg         = $data['banner']['fotobackground'];

    ?>



<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />

    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL ?>assets/upload/<?= $icon; ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?= $title ?></title>

    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />

    <!--     Fonts and icons     -->

    <link rel="stylesheet" type="text/css"

        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->

    <link href="<?= BASEURL ?>assets/assetsfs/css/material-kit.css?v=2.0.7" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->

    <link href="<?= BASEURL ?>assets/assetsfs/demo/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= BASEURL ?>assets/assetsfs/css/style.css" />

    <link rel="stylesheet" href="<?= BASEURL ?>assets/assetsfs/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="<?= BASEURL ?>assets/assetsfs/css/owl.theme.default.min.css" />

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

                    <img src="<?= BASEURL ?>assets/assetsfs/img/logo-b.png" alt="" srcset="" class="img-fluid"

                        width="150px" />

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"

                    aria-label="Toggle navigation">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="navbar-toggler-icon"></span>

                    <span class="navbar-toggler-icon"></span>

                    <span class="navbar-toggler-icon"></span>

                </button>

            </div>

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link smoothScroll top" href="#"> Home </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link smoothScroll scroll" href="#tentang-kami">

                            TENTANG KAMI

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link smoothScroll scroll" href="#produk">

                            produk

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link smoothScroll scroll" href="#customer">
                            Customer
                        </a>
                    </li>


                    <li class="nav-item">

                        <a class="nav-link smoothScroll scroll" href="#layanan">

                            layanan

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link smoothScroll scroll" href="#testimoni">

                            testimoni

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link smoothScroll scroll" href="#hubungi-kami">

                            hubungi kami

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>



    <!-- MODAL LAYANAN -->

    <!-- RETAIL -->

    <?php 

        foreach ($data['layanan'] as $ly) {

            // var_dump($ly);

            $judullayanan    = $ly['listlayanankami'];

            $deskripsi       = $ly['deskripsi']; 

            ?>

    <div class="modal fade" id="<?= $judullayanan ?>" tabindex="-1" role="dialog">

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

    <!-- end -->

    <?php

        }    

    ?>

    <!-- DISTRIBUSI -->

    <div class="modal fade" id="distribusi" tabindex="-1" role="dialog">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">DISTRIBUSI</h5>

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



    <!-- GROSIR -->

    <div class="modal fade" id="grosir" tabindex="-1" role="dialog">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">GROSIR</h5>

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

    <!-- END -->





    <!-- MODAL PRODUK -->

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

    <!-- end -->

    <?php

        }

     ?>

    <!-- produk 2 -->

    <!-- <div class="modal fade" id="produk-2" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- produk 3 -->

    <!-- <div class="modal fade" id="produk-3" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- produk 4 -->

    <!-- <div class="modal fade" id="produk-4" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- produk 5 -->

    <!-- <div class="modal fade" id="produk-5" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- produk 6 -->

    <!-- <div class="modal fade" id="produk-6" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- produk 7 -->

    <!-- <div class="modal fade" id="produk-7" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- produk 8 -->

    <!-- <div class="modal fade" id="produk-8" tabindex="-1" role="dialog">

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

    </div> -->

    <!-- end -->

    <!-- END -->







    <div class="page-header header-filter" data-parallax="true"

        style="background-image: url('<?= BASEURL ?>assets/upload/<?= $fotobg; ?>')">

        <div class="container top-content">

            <div class="row float-right">

                <div class="mt-lg-0 pt-0">

                    <h3 class="title mb-0"><?= $judulbanner; ?></h3>

                    <!-- <h1 class="title mt-0">BESI & BAJA</h1> -->

                    <h1 class="title mt-0"><?= $subjudul; ?></h1>



                    <h4><?= $deskripsiX ?></h4>

                    <br />

                    <a class="btn btn-raised btn-md smoothSchroll scroll" href="#tentang-kami" style="width: 150px">

                        TENTANG KAMI

                    </a>

                    <a href="#produk" style="width: 150px" class="btn btn-raised btn-md smoothScroll scroll">

                        PRODUK

                    </a>

                </div>

            </div>

        </div>

    </div>

    <div class="main">

        <!-- TENTANG KAMI -->

        <section class="section-padding" id="tentang-kami">

            <div class="container-fluid section-padding tentang-kami">

                <div class="section section-padding">

                    <h2 class="text-center">TENTANG KAMI</h2>

                    <div class="col-md-12 pt-2 play-c">

                        <div id="owl-tk" class="owl-carousel owl-theme">

                            <?php 

                                foreach ($data['tentangkami']   as $tk) :

                                    ?>

                            <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/upload/<?= $tk['fotolayanan'] ?>"

                                    alt="" srcset="" />

                                <!-- if ketika 1 baris -->

                                <h1>

                                    <!-- Bisa beli custom sesuai kebutuhan, <br />

                                    dengan harga pabrik. -->

                                    <?= html_entity_decode($tk['isikonten'])?>



                                </h1>



                            </div>

                            <?php

                                endforeach;

                            ?>

                            <!-- <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetsfs/img/tk-1.jpg" alt=""

                                    srcset="" />

                                <h1>Belanja di Fortuna Steel</h1>

                            </div>

                            <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetsfs/img/tk-3.jpg" alt=""

                                    srcset="" />

                                <h1>

                                    Gak perlu menunggu lama, <br />

                                    dilayani dengan cepat

                                </h1>

                            </div>

                            <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetsfs/img/tk-4.jpg" alt=""

                                    srcset="" />

                                <h1>

                                    Bisa pesan via WhatsApp <br />

                                    barang diantar sampai ke rumah

                                </h1>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- END -->



        <!-- PROMO -->

        <section class="section-padding" id="promo">

            <div class="container-fluid section-padding bg-grey">

                <div class="section section-padding">

                    <h2 class="text-center">PROMO</h2>

                    <div class="col-md-12 pt-2">

                        <div id="owl-tk" class="owl-carousel owl-theme">

                            <?php 

                                foreach ($data['promo']   as $pr):

                                    ?>

                            <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetsfs/img/03. Promo.jpg"

                                    alt="" srcset="" />

                            </div>

                            <?php 

                            endforeach;

                            ?>

                            <!-- <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetsfs/img/03. Promo.jpg"

                                    alt="" srcset="" />

                            </div>

                            <div class="item">

                                <img class="mr-auto ml-auto" src="<?= BASEURL ?>assets/assetsfs/img/03. Promo.jpg"

                                    alt="" srcset="" />

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- END -->



        <!-- PRODUCT -->

        <section class="section-padding" id="produk">

            <div class="container-fluid">

                <div class="section text-center">

                    <div class="col-md-8 ml-auto mr-auto">

                        <h2>PRODUCTS</h2>

                        <h5 class="description">

                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam

                        </h5>

                        <div class="row">

                            <?php 

                            $count = 1;

                             //*Produk

                            foreach ($data['produk'] as $prd) {

                                $namaproduk     = $prd['namaproduk'];

                                $deskripsi      = $prd['deskripsi'];

                                $gambarProduk   = $prd['gambarproduk']; ?>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-<?= $count++ ?>"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/upload/<?= $gambarProduk ?>" alt="" srcset="" />

                            </div>



                            <?php

                              }

                            ?>

                            <!-- <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-2"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (2).png" alt="" srcset="" />

                            </div>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-3"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (3).png" alt="" srcset="" />

                            </div>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-4"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (4).png" alt="" srcset="" />

                            </div>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-5"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (5).png" alt="" srcset="" />

                            </div>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-6"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (6).png" alt="" srcset="" />

                            </div>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-7"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (7).png" alt="" srcset="" />

                            </div>

                            <div class="col-md-3 col-6">

                                <img data-toggle="modal" data-target="#produk-8"

                                    class="img-produk img-raised rounded img-fluid"

                                    src="<?= BASEURL ?>assets/assetsfs/img/04. Produk  (8).png" alt="" srcset="" />

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- END -->



        <!-- LAYANAN KAMI -->

        <section class="section-padding" id="layanan">

            <div class="container-fluid bg-grey">

                <div class="section text-center">

                    <h2>LAYANAN KAMI</h2>

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

                            <div class="col-md-4 col-4">

                                <img data-toggle="modal" data-target="#<?= $judullayanan ?>"

                                    src="<?= BASEURL ?>assets/upload/<?= $gambarlayanan ?>"

                                    class="layanan-item img-raised rounded img-fluid" alt="" />

                            </div>

                            <?php

                            }

                            ?>

                            <!-- <div class="col-md-4 col-4">

                                <img data-toggle="modal" data-target="#distribusi"

                                    src="<?= BASEURL ?>assets/assetsfs/img/05. Layanan (2).jpg"

                                    class="layanan-item img-raised rounded img-fluid" alt="" />

                            </div>

                            <div class="col-md-4 col-4">

                                <img data-toggle="modal" data-target="#grosir"

                                    src="<?= BASEURL ?>assets/assetsfs/img/05. Layanan (3).jpg"

                                    class="layanan-item img-raised rounded img-fluid" alt="" />

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- END -->



        <!-- TESTIMONI -->

        <section class="section-padding" id="testimoni">

            <div class="container-fluid">

                <div class="section">

                    <h2 class="text-center">TESTIMONI</h2>

                    <div class="col-md-8 col-10 ml-auto mr-auto tes">

                        <div class="owl-carousel owl-theme">

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

                                                <img src="<?= BASEURL ?>assets/upload/<?= $gambar ?>" class="k"

                                                    alt="..." />

                                            </div>

                                            <div class="col-md-8">

                                                <div class="card-body pt-0 pl-0">

                                                    <h4 class="card-title mb-0"><?= $nama  ?></h4>

                                                    <span

                                                        class="badge badge-pill badge-warning mb-2"><?= $perkerjaan  ?></span>

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



        <!-- sosial media info -->

        <section class="section-padding">

            <div class="container-fluid bg-grey">

                <div class="section text-center">

                    <h2 class="mb-4">SOSIAL MEDIA INFO</h2>

                    <br />

                    <div class="col-md-8 ml-auto mr-auto">

                        <div class="row mt-3">

                            <div class="col-md-6 col-10 ml-auto mr-auto">

                                <div class="box-sos ml-auto mr-auto">

                                    <?php 

                                    foreach ($data['sosmed']  as $sm) {

                                        $namaakun   = $sm['namaakun'];

                                        $icon       = $sm['icon'];

                                    

                                        $link       = $sm['link'];     



                                        ?>



                                    <div class="row mb-3">

                                        <div class="col-md-3 col-3">



                                            <img src="<?= BASEURL ?>assets/upload/sosmed-icon/<?= $icon ?>"

                                                class="img-raised rounded-circle img-fluid mt-3" alt="" srcset="" />

                                        </div>

                                        <div class="col-md-9 col-9">

                                            <a href="<?= $link  ?>" target="_blank" class="float-left t-sos">

                                                <h3><?= $namaakun ?></h3>

                                            </a>

                                        </div>

                                    </div>

                                    <?php

                                    }

                                    ?>

                                    <!--                                     

                                    <div class="row mb-3">

                                        <div class="col-md-3 col-3">

                                            <img src="https://via.placeholder.com/70/000000/FFFFF/C/O https://placeholder.com/"

                                                class="img-raised rounded-circle img-fluid mt-3" alt="" srcset="" />

                                        </div>

                                        <div class="col-md-9 col-9">

                                            <a href="" class="float-left t-sos">

                                                <h3>@TESTSOSIALMEDIA</h3>

                                            </a>

                                        </div>

                                    </div> -->

                                    <!-- <div class="row mb-3">

                                        <div class="col-md-3 col-3">

                                            <img src="https://via.placeholder.com/70/000000/FFFFF/C/O https://placeholder.com/"

                                                class="img-raised rounded-circle img-fluid mt-3" alt="" srcset="" />

                                        </div>

                                        <div class="col-md-9 col-9">

                                            <a href="" class="float-left t-sos">

                                                <h3>@TESTSOSIALMEDIA</h3>

                                            </a>

                                        </div>

                                    </div> -->

                                </div>

                            </div>

                            <div class="col-md-6 col-10 ml-auto mr-auto">

                                <img src="<?= BASEURL ?>assets/assetsfs/img/lampu.png" alt="" srcset=""

                                    class="img-fluid" />

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <br />

        <!-- end -->



        <!-- feed ig -->

        <section class="section-padding">

            <div class="container-fluid">

                <div class="section text-center">

                    <h2>FEED INSTAGRAM</h2>

                    <div class="col-md-9 ml-auto mr-auto">

                        <div class="row">

                            <?php 

                                   foreach ($data['feedig'] as $fi) {

                                  ?>

                            <div class="col-md-4">

                                <div class="card">

                                    <!-- <blockquote class="instagram-media"

                                        data-instgrm-permalink="https://www.instagram.com/p/CS5xn3lFhS-/?utm_source=ig_embed&utm_campaign=loading"

                                        data-instgrm-version="13"

                                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">

                                        <div style="padding:16px;"> <a

                                                href="https://www.instagram.com/p/CS5xn3lFhS-/?utm_source=ig_embed&utm_campaign=loading"

                                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"

                                                target="_blank">

                                                <div style=" display: flex; flex-direction: row; align-items: center;">

                                                    <div

                                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">

                                                    </div>

                                                    <div

                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">

                                                        <div

                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">

                                                        </div>

                                                        <div

                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">

                                                        </div>

                                                    </div>

                                                </div>

                                                <div style="padding: 19% 0;"></div>

                                                <div

                                                    style="display:block; height:50px; margin:0 auto 12px; width:50px;">

                                                    <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"

                                                        xmlns="https://www.w3.org/2000/svg"

                                                        xmlns:xlink="https://www.w3.org/1999/xlink">

                                                        <g stroke="none" stroke-width="1" fill="none"

                                                            fill-rule="evenodd">

                                                            <g transform="translate(-511.000000, -20.000000)"

                                                                fill="#000000">

                                                                <g>

                                                                    <path

                                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">

                                                                    </path>

                                                                </g>

                                                            </g>

                                                        </g>

                                                    </svg>

                                                </div>

                                                <div style="padding-top: 8px;">

                                                    <div

                                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">

                                                        View this post on Instagram</div>

                                                </div>

                                                <div style="padding: 12.5% 0;"></div>

                                                <div

                                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">

                                                    <div>

                                                        <div

                                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">

                                                        </div>

                                                        <div

                                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">

                                                        </div>

                                                        <div

                                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">

                                                        </div>

                                                    </div>

                                                    <div style="margin-left: 8px;">

                                                        <div

                                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">

                                                        </div>

                                                        <div

                                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">

                                                        </div>

                                                    </div>

                                                    <div style="margin-left: auto;">

                                                        <div

                                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">

                                                        </div>

                                                        <div

                                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">

                                                        </div>

                                                        <div

                                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">

                                                        </div>

                                                    </div>

                                                </div>

                                                <div

                                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">

                                                    <div

                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">

                                                    </div>

                                                    <div

                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">

                                                    </div>

                                                </div>

                                            </a>

                                            <p

                                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">

                                                <a href="https://www.instagram.com/p/CS5xn3lFhS-/?utm_source=ig_embed&utm_campaign=loading"

                                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"

                                                    target="_blank">A post shared by Fortuna Steel (@fortunasteel)</a>

                                            </p>

                                        </div>

                                    </blockquote>

                                    <script async src="//www.instagram.com/embed.js"></script> -->

                                    <?= html_entity_decode($fi['embedlink']) ?>

                                </div>

                            </div>

                            <?php

                                }

                                ?>

        </section>

        <!-- end -->



        <!-- HUBUNGI KAMI -->

        <section class="section-padding" id="hubungi-kami">

            <div class="container-fluid bg-grey">

                <div class="section text-center">

                    <h2>HUBUNGI KAMI</h2>

                    <div class="col-lg-10 ml-auto mr-auto">

                        <div class="row">

                            <?php 

                                    foreach ($data['hubungikami'] as $hk) :

                                ?>



                            <div class="col-md-3">

                                <div class="card">

                                    <img src="<?= BASEURL ?>assets/assetsfs/img/01. Main Banner.jpg"

                                        class="card-img-top" alt="..." />

                                    <div class="card-body">

                                        <h5 class="card-title"><?= $hk['nama'] ?></h5>

                                        <p class="card-text">

                                            <?= $hk['alamat'] ?>

                                        </p>

                                        <a href="<?= $hk['linkwa'] ?>" target="_blank" class="btn btn-success"><i

                                                class="fa fa-whatsapp"></i> Whatsapp

                                            Now!!!</a>

                                    </div>

                                </div>

                            </div>

                            <?php 

                                endforeach;

                            ?>

                            <!-- <div class="col-md-3">

                                <div class="card">

                                    <img src="<?= BASEURL ?>assets/assetsfs/img/01. Main Banner.jpg"

                                        class="card-img-top" alt="..." />

                                    <div class="card-body">

                                        <h5 class="card-title">KARTASURA</h5>

                                        <p class="card-text">

                                            Some quick example text to build on the card title and

                                            make up the bulk of the card's content.

                                        </p>

                                        <a href="#" class="btn btn-success"><i class="fa fa-whatsapp"></i> Whatsapp

                                            Now!!!</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="card">

                                    <img src="<?= BASEURL ?>assets/assetsfs/img/01. Main Banner.jpg"

                                        class="card-img-top" alt="..." />

                                    <div class="card-body">

                                        <h5 class="card-title">KARTASURA</h5>

                                        <p class="card-text">

                                            Some quick example text to build on the card title and

                                            make up the bulk of the card's content.

                                        </p>

                                        <a href="#" class="btn btn-success"><i class="fa fa-whatsapp"></i> Whatsapp

                                            Now!!!</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="card">

                                    <img src="<?= BASEURL ?>assets/assetsfs/img/01. Main Banner.jpg"

                                        class="card-img-top" alt="..." />

                                    <div class="card-body">

                                        <h5 class="card-title">KARTASURA</h5>

                                        <p class="card-text">

                                            Some quick example text to build on the card title and

                                            make up the bulk of the card's content.

                                        </p>

                                        <a href="#" class="btn btn-success"><i class="fa fa-whatsapp"></i> Whatsapp

                                            Now!!!</a>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- END -->



        <!-- floating wa -->

        <div id="container-floating">

            <?php

             

                   $a = 1;

                   $b = 1;

                   $c = 1;

                   foreach ($data['hubungikami'] as $hk) {

                       ?>

            <div class="nds nd<?= $a++; ?>">

                <a href="<?= $hk['linkwa'] ?>" class="buttons l-nds" tooltip="Twitter"><i class="fa fa-whatsapp"></i>

                </a>

            </div>

            <div class="sdn sd<?= $b++ ?>">

                <a href="<?= $hk['linkwa'] ?>" class="buttons l-sdn">Outlet <?= $c++ ?></a>

            </div>

            <?php

                   }

            ?>

            <!-- <div class="nds nd2">

                <a href="#" class="buttons l-nds" tooltip="Linkedin">

                    <i class="fa fa-whatsapp"></i>

                </a>

            </div>

            <div class="sdn sd2">

                <a href="" class="buttons l-sdn">Outlet 4</a>

            </div> -->

            <!-- 

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

            <div id="floating-button">

                <div id="floating-btn2">

                    <p class="text-wa">Hubungi Kami</p>

                </div>

                <p class="plus"><i class="fa fa-whatsapp"></i></p>

                <img class="close"

                    src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png" />

            </div>

        </div>

        <!-- end -->

    </div>

    <footer class="footer footer-default">

        <div class="container">

            <div class="copyright">

                &copy;

                <script>

                document.write(new Date().getFullYear());

                </script>

                , Copyright by

            </div>

        </div>

    </footer>

    <!--   Core JS Files   -->

    <script src="<?= BASEURL ?>assets/assetsfs/js/core/jquery.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL ?>assets/assetsfs/js/core/popper.min.js" type="text/javascript"></script>

    <script src="<?= BASEURL ?>assets/assetsfs/js/core/bootstrap-material-design.min.js" type="text/javascript">

    </script>

    <script src="<?= BASEURL ?>assets/assetsfs/js/plugins/moment.min.js"></script>

    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->

    <script src="<?= BASEURL ?>assets/assetsfs/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->

    <script src="<?= BASEURL ?>assets/assetsfs/js/plugins/nouislider.min.js" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->

    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->

    <script src="<?= BASEURL ?>assets/assetsfs/js/material-kit.js?v=2.0.7" type="text/javascript"></script>

    <script src="<?= BASEURL ?>assets/assetsfs/js/owl.carousel.min.js"></script>

    <script src="<?= BASEURL ?>assets/assetsfs/js/smoothscroll.js"></script>

    <script src="<?= BASEURL ?>assets/assetsfs/js/custom.js"></script>

</body>



</html>