  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Edit Testimoni</h4>
              <div class="ml-auto text-right">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">
                              Edit Testimoni
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
    //  var_dump($data['detailtestimoni']);
     $id            = $data['detailtestimoni']['id'];
     $nama            = $data['detailtestimoni']['nama'];
     $perkerjaan      = $data['detailtestimoni']['perkerjaan'];
     $testimoni       = $data['detailtestimoni']['isitestimoni'];
     $gambarTestimoni = $data['detailtestimoni']['gambar'];
    
    ?>

      <div class="row">
          <div class="col-md-12">
              <div class="card custom-border-top box-card">
                  <form class="form-horizontal" action="<?= BASEURL ?>testimoni/_prosesedit" method="post"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="card-body">
                                  <h4 class="card-title">Testimoni</h4>
                                  <div class="form-group row">
                                      <label for="fname"
                                          class="col-sm-2 text-end control-label col-form-label">Nama</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="nama" name="nama"
                                              placeholder="Ketik Disini" value="<?= $nama ?>" />
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="fname"
                                          class="col-sm-2 text-end control-label col-form-label">Pekerjaan</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="perkerjaan" name="perkerjaan"
                                              placeholder="Ketik Disini" value="<?= $perkerjaan ?>" />
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="cono1" class="col-sm-2 text-end control-label col-form-label">Isi
                                          Pesan Testimoni</label>
                                      <div class="col-sm-10">
                                          <textarea class="form-control" rows="5" placeholder="Ketik Disini"
                                              id="testimoni" name="testimoni"><?= $testimoni ?></textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="card-body">
                                  <label class="col-sm-12 col-form-label">Foto</label>
                                  <div class="col-sm-12">
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <input type="file" id="gambarEditTestimoni" name="gambarTestimoni"
                                                  onchange="previewImageEditTestimoni();" />
                                          </div>
                                          <div class="col-sm-6">
                                              <img id="gambarEditTestimoniPrev"
                                                  src="<?= BASEURL ?>assets/upload/<?= $gambarTestimoni ?>"
                                                  alt="image preview" width="200" />
                                          </div>
                                          <input type="hidden" name="testimoniPrev" value="<?= $gambarTestimoni ?>">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="border-top">
                          <div class="card-body">
                              <input type="hidden" name="id" value="<?= $id ?>">
                              <button type="submit" class="btn btn-success float-right mb-4">Submit</button>
                              <a href="<?= BASEURL?>testimoni" class="btn btn-danger float-right mr-2">Kembali</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  </div>