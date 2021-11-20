      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title">Form Promo</h4>
                  <div class="ml-auto text-right">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">
                                  Promo
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
      <div class="container-fluid mb-2">
          <!-- ============================================================== -->
          <!-- Konten -->
          <!-- ============================================================== -->
          <?php 
              $promoPrev = $data['promo']['gambarpromo'];
            ?>
          <div class="row">
              <div class="col-md-12">
                  <div class="card custom-border-top box-card">
                      <form class="form-horizontal" action="<?= BASEURL ?>promo/_prosesedit" method="post"
                          enctype="multipart/form-data">
                          <div class="card-body">
                              <h4 class="card-title">Form Promo</h4>
                              <div class="control-group">
                                  <div class="controls mb-3">
                                      <div class="main_input_box">
                                          <?php Flasher::flash();  ?>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-8">
                                      <div class="row">
                                          <label class="col-sm-12 col-form-label">Foto Layanan</label>
                                          <div class="col-sm-6">
                                              <input type="file" id="promo" name="promo"
                                                  onchange="previewImagePromo();" />
                                          </div>
                                          <div class="col-sm-6">
                                              <img id="promoPrev" src="<?= BASEURL ?>assets/upload/<?= $promoPrev; ?>"
                                                  alt="image preview" width="500" />
                                          </div>
                                          <input type="hidden" name="promoPrev" value="<?= $promoPrev?>">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="border-top">
                              <div class="card-body">
                                  <button type="submit" class="btn btn-success float-right mb-4">
                                      Submit
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->