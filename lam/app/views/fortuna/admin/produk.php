  <!-- Bread crumb and right sidebar toggle -->

  <!-- ============================================================== -->

  <div class="page-breadcrumb">

      <div class="row">

          <div class="col-12 d-flex no-block align-items-center">

              <h4 class="page-title">Form Produk</h4>

              <div class="ml-auto text-right">

                  <nav aria-label="breadcrumb">

                      <ol class="breadcrumb">

                          <li class="breadcrumb-item"><a href="#">Home</a></li>

                          <li class="breadcrumb-item active" aria-current="page">

                              Produk

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

      <div class="row">

          <div class="col-md-12">

              <div class="card custom-border-top box-card">

                  <form class="form-horizontal" action="<?= BASEURL ?>produk/tambah" method="post"

                      enctype="multipart/form-data">

                      <div class="row">

                          <div class="col-md-6">

                              <div class="card-body">

                                  <h4 class="card-title">Produk</h4>

                                  <div class="form-group row">

                                      <label for="fname" class="col-sm-2 text-end control-label col-form-label">Nama

                                          Produk</label>

                                      <div class="col-sm-10">

                                          <input type="text" class="form-control" id="namaproduk" name="namaproduk"

                                              placeholder="Ketik Disini" />

                                      </div>

                                  </div>



                                  <div class="form-group row">

                                      <label for="cono1"

                                          class="col-sm-2 text-end control-label col-form-label">Deskripsi</label>

                                      <div class="col-sm-10">

                                          <textarea class="form-control" rows="5" placeholder="Ketik Disini"

                                              id="deskripsi" name="deskripsi"></textarea>

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

                                              <input type="file" id="gambarProduk" name="gambarProduk"

                                                  onchange="previewImageProdukT();" required />

                                          </div>

                                          <div class="col-sm-6">

                                              <img id="gambarProdukPrev"

                                                  src="https://via.placeholder.com/200C/O https://placeholder.com/"

                                                  alt="image preview" width="250" />

                                          </div>

                                      </div>

                                  </div>

                              </div>

                          </div>

                      </div>

                      <div class="border-top">

                          <div class="card-body">

                              <button type="submit" class="btn btn-success float-right">Submit</button>

                              <button type="reset" class="btn btn-danger float-right mb-4 mr-2" id="resetbtn"

                                  name="reset">Reset</button>

                          </div>

                      </div>

                  </form>

              </div>

          </div>

      </div>

      <div class="row">

          <div class="col-md-12">

              <div class="card custom-border-top box-card">

                  <form class="form-horizontal" action="<?= BASEURL ?>produk/editBrosur" method="post"

                      enctype="multipart/form-data">

                      <div class="row">

                          <div class="col-md-12">

                              <div class="card-body">

                                  <h4 class="card-title">Upload Brosur</h4>

                                  <!-- <label class="col-sm-12 col-form-label">Foto</label> -->

                                  <div class="col-sm-12">

                                      <div class="row">

                                          <div class="col-sm-6">

                                              <input type="file" name="brosurProduk" accept=".pdf, .jpeg, .png"

                                                  required />

                                              <br>

                                              <span>

                                                  

                                              </span>

                                          </div>

                                          <input type="hidden" name='id' value="<?= $data['brosurProduk'][0]['id'] ?>">

                                          <input type="hidden" name='filebrosur'

                                              value="<?= $data['brosurProduk'][0]['filebrosur'] ?>">



                                      </div>

                                  </div>

                              </div>

                          </div>

                      </div>

                      <div class="border-top">

                          <div class="card-body">

                              <button type="submit" class="btn btn-success float-right">Submit</button>

                          </div>

                      </div>

                  </form>

              </div>

          </div>

      </div>

      <div class="row">

          <div class="col-md-12">

              <form action="">

                  <div class="card custom-border-top box-card">

                      <div class="card-body">

                          <h4 class="card-title">Preview</h4>

                          <div class="control-group">

                              <div class="controls mb-3">

                                  <div class="main_input_box">

                                      <?php Flasher::flash();  ?>

                                  </div>

                              </div>

                          </div>

                          <table class="table" id="exa5">

                              <thead>

                                  <tr>

                                      <th>No</th>

                                      <th>Nama Produk</th>

                                      <th>Deskripsi</th>

                                      <th>Foto</th>

                                      <th>Action</th>

                                  </tr>

                              </thead>

                              <?php 

                                if (count($data['produk'])) {

                                    $count = 1;

                                    foreach ($data['produk'] as $ts) {

                                    // var_dump($ts);

                                

                                   

                              ?>

                              <tbody>
                                  <td><?= $count++; ?></td>
                                  <td><?= $ts['namaproduk'] ?></td>
                                  <td width="40%"><?= $ts['deskripsi'] ?></td>
                                  <td><img src="<?= BASEURL ?>assets/upload/produk/<?= $ts['gambarproduk'] ?>"
                                          alt="Gambar Testimoni" width="100"></td>
                                  <td>
                                      <a href="<?= BASEURL ?>produk/edit/<?= $ts['id'] ?>"><i
                                              class="mdi mdi-pencil"></i>
                                          Edit</a> ||
                                      <a onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')"
                                          href="<?= BASEURL ?>produk/hapus/<?= $ts['id'] ?>"><i
                                              class="mdi mdi-delete"></i>Hapus</a>
                                  </td>
                              </tbody>

                              <?php

                                    }

                                }else {

                                    echo "

                                         <tbody>

                                           <td colspan='6' style='text-align:center'>Data tidak ada</td>

                                         </tbody>

                                    ";

                                }

                              ?>

                          </table>

                      </div>

                      <!-- <div class="card-footer">

                          <button type="submit" class="btn btn-success float-right">Submit</button>

                      </div> -->

                  </div>

              </form>

          </div>

      </div>

  </div>