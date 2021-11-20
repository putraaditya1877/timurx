  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->

<style >
.switch {
  position: relative;
  display: inline-block;
}

.switch input {display:none;}

.slider {
width: 50px;
height: 20px;
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ca2222;
-webkit-transition: .4s;
transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 10px;
  width: 10px;
  left: 2px;
  bottom: 5px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(55px);
  -ms-transform: translateX(55px);
  transform: translateX(35px);
}

.on
{
  display: none;
}

.on, .off
{
  color: white;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 10px;
  font-family: Verdana, sans-serif;
}

input:checked+ .slider .on
{display: block;}

input:checked + .slider .off
{display: none;}

/*--------- END --------*/

/* Rounded sliders */
.slider.round {
  border-radius: 10px;
}

.slider.round:before {
  border-radius: 50%;}
</style>


  <div class="page-breadcrumb">
      <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Customer</h4>
              <div class="ml-auto text-right">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">
                              Customer
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
                  <form class="form-horizontal" action="<?= BASEURL ?>customer/tambah" method="post"
                      enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="card-body">
                                  <h4 class="card-title">Customer</h4>
                                  <div class="form-group row">
                                      <label for="fname" class="col-sm-2 text-end control-label col-form-label">Nama Customer</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="namacustomer" name="namacustomer"
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
                                              <input type="file" id="gambarcustomer" name="gambarcustomer"
                                                  onchange="previewImageCustomerT();" required />
                                          </div>
                                          <div class="col-sm-6">
                                              <img id="gambarcustomerPrev"
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
                          <table id="exampleTable" class="table table-bordered" style="width: 100%">
                              <thead id="thead">
                                  <tr>
                                      <th>No</th>
                                      <th>Nama Customer</th>
                                      <th>Deskripsi</th>
                                      <th>Foto</th>
                                      <th>Status Top</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <?php 
                                if (count($data['customer'])) {
                                    $count = 1;
                                    foreach ($data['customer'] as $ts) {
                                    // var_dump($ts);                           
                              ?>
                              <tbody id="tableBodyData">
                                  <td><?= $count++; ?></td>
                                  <td><?= $ts['namacustomer'] ?></td>
                                  <td width="40%"><?= $ts['deskripsi'] ?></td>
                                  <td><img src="<?= BASEURL ?>assets/upload/customer/<?= $ts['gambarcustomer'] ?>"
                                          alt="Gambar Testimoni" width="100"></td>
                                    <td> 
                                    <!-- <label class="switch">
                                        <input type="checkbox" id="togBtn">
                                            <div class="slider round"> -->
                                            <?php
                                                if($ts['statustop']==1){
                                                    echo "<p style='color: green'>active</p>";
                                                    //"<span class='on'>ON</span>";
                                        }
                                            else{
                                                    echo  "<p style='color: red'>inactive</p>";
                                                  //"<span class='off'>OFF</span>";
                                            }
                                            ?>
                                            </div>
                                            </label></td>
                                    <td>
                                      <a href="<?= BASEURL ?>customer/edit/<?= $ts['id'] ?>"><i
                                              class="mdi mdi-pencil"></i>
                                          Edit</a> ||
                                      <a onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')"
                                          href="<?= BASEURL ?>customer/hapus/<?= $ts['id'] ?>"><i
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