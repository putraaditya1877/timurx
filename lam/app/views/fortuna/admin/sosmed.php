  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Sosial Media</h4>
              <div class="ml-auto text-right">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">
                              Sosial Media Info
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
      <div class="card">
          <div class="card-body custom-border-top box-card">
              <h4>Form Layanan</h4>
              <div class="control-group">
                  <div class="controls mb-3">
                      <div class="main_input_box">
                          <?php Flasher::flash();  ?>
                      </div>
                  </div>
              </div>
              <div class="auto-num">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>List Sosial Media</th>
                              <th>Last Update</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                            // var_dump($data['sosmed']);
                            foreach ($data['sosmed'] as $sm) {
                                // var_dump($sm);
                                $id             = $sm['id'];
                                $namaakun       = $sm['namaakun'];
                                $lastUpdate     = date_create($sm['tanggalupdate']);
                                $lastUpdate     = date_format($lastUpdate, 'Y-m-d');

                          ?>
                          <tr>
                              <td></td>
                              <td><?= $namaakun ?></td>
                              <td><?= DateFormat::tgl_indo($lastUpdate) ?></td>
                              <td>
                                  <a href="<?= BASEURL ?>sosmed/edit/<?= $id ?>" class="btn btn-info rounded btn-sm"><i
                                          class="mdi mdi-pencil"></i> Edit</a>
                              </td>
                          </tr>
                          <?php
                            }
                          ?>
                          <!-- <tr>
                              <td></td>
                              <td>Sosial media 2</td>
                              <td>12 Agustus 2021</td>
                              <td>
                                  <a href="edit-sosmed.php" class="btn btn-info rounded btn-sm"><i
                                          class="mdi mdi-pencil"></i> Edit</a>
                              </td>
                          </tr> -->
                          <!-- <tr>
                              <td></td>
                              <td>Sosial media 3</td>
                              <td>12 Agustus 2021</td>
                              <td>
                                  <a href="edit-sosmed.php" class="btn btn-info rounded btn-sm"><i
                                          class="mdi mdi-pencil"></i> Edit</a>
                              </td>
                          </tr> -->
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->