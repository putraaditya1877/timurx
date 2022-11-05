            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Layanan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Layanan
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Konten -->
                <!-- ============================================================== -->
                <?php 
                    // var_dump($data['layanan']);
                    $id                    = $data['layanan']['id'];
                    $judullayanan          = $data['layanan']['listlayanankami'];
                    $deskripsi             = $data['layanan']['deskripsi'];
                    $gambarLayanan         = $data['layanan']['gambarlayanan'];
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card custom-border-top box-card">
                            <form class="form-horizontal" action="<?= BASEURL ?>layanan/_prosesedit" ethod="post"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h4 class="card-title">Form Ubah bagian Produk</h4>
                                            <br>
                                            <div class="form-group row">
                                                <label for="judul1"
                                                    class="col-sm-3 text-end control-label col-form-label">Nama
                                                    Barang</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="judullayanan"
                                                        name="judullayanan" placeholder="Ketik disini"
                                                        value="<?= $judullayanan ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1"
                                                    class="col-sm-3 text-end control-label col-form-label">Deskripsi
                                                    Produk</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="5" placeholder="Ketik disini"
                                                        name="deskripsi"><?= $deskripsi ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <br>
                                        <div class="card-body">
                                            <label class="col-sm-12 col-form-label">Foto Produk</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="file" id="gambarLayanan" name="gambarLayanan"
                                                            onchange="previewImageLayanan();" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img id="gambarLayananPrev"
                                                            src="<?= BASEURL ?>assets/upload/<?= $gambarLayanan ?>"
                                                            alt="image preview" width="250" />
                                                    </div>
                                                    <input type="hidden" name="gambarLayananPrev"
                                                        value="<?= $gambarLayanan?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <button type="submit" class="btn btn-success float-right mb-4">
                                            Submit
                                        </button>
                                        <a href="<?= BASEURL?>layanan"
                                            class="btn btn-danger float-right mr-2">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->