            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Top Customer</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Top Customer
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
                    //var_dump($data['customer']);
                    $id                    = $data['topcustomer']['id'];
                    $namacustomer          = $data['topcustomer']['namacustomer'];
                    $deskripsi             = $data['topcustomer']['deskripsi'];
                    $gambarcustomer        = $data['topcustomer']['gambarcustomer'];
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card custom-border-top box-card">
                        <form class="form-horizontal" action="<?= BASEURL ?>topcustomer/_prosesedit" method="post"
                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h4 class="card-title">Form Ubah bagian Top Customer</h4>
                                            <br>
                                            <div class="form-group row">
                                            <label class="control-label col-sm-3 droptop">Nama Customer </label>
                                                <div class="col-sm-9">
                                                    <select class="form-control droptop" 
                                                        name="droptop" data-id="droptop" id="droptop">
                                                        
                                                        <option  class="form-control droptop" 
                                                        name="droptop" data-id="droptop" id="droptop"><?= $namacustomer ?></option>
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska</option>
                        </optgroup>
                                                    </select> 
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="cono1"
                                                    class="col-sm-3 text-end control-label ol-form-label">Deskripsi
                                                    </label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="5" placeholder="Ketik isini"
                                                        id="deskripsi" name="deskripsi"><?= $deskripsi ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                                    <div class="col-sm-6">
                                                        <img id="gambarcustomerPrev"
                                                            src="<?= BASEURL ?>assets/upload/customer/<?= $gambarcustomer ?>"
                                                            alt="image preview" width="250" />
                                                    </div>
                                                    <input type="hidden" name="gambarcustomerPrev"
                                                        value="<?= $gambarcustomer?>">
                                                </div>
                                            </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <button type="submit" class="btn btn-success float-right mb-4">
                                            Submit
                                        </button>
                                        <a href="<?= BASEURL?>topcustomer"
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