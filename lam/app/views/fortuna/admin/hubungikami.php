 <!-- ============================================================== -->
 <!-- Bread crumb and right sidebar toggle -->
 <!-- ============================================================== -->
 <div class="page-breadcrumb">
     <div class="row">
         <div class="col-12 d-flex no-block align-items-center">
             <h4 class="page-title">HUBUNGI KAMI</h4>
             <div class="ml-auto text-right">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">
                             HUBUNGI KAMI
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
             <div class="card">
                 <form class="form-horizontal" action="<?= BASEURL ?>hubungikami/tambah" method="post"
                     enctype="multipart/form-data">
                     <div class="card-body">
                         <h4 class="card-title">Form Input</h4>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group row">
                                     <label for="fname"
                                         class="col-sm-3 text-end control-label col-form-label">Nama</label>
                                     <div class="col-sm-9">
                                         <input type="text" class="form-control" id="nama" name="nama"
                                             placeholder="Ketik Disini" />
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Alamat
                                         Lengkap</label>
                                     <div class="col-sm-9">
                                         <textarea class="form-control" rows="5" placeholder="Ketik disini" id="alamat"
                                             name="alamat"></textarea>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="fname" class="col-sm-3 text-end control-label col-form-label">No
                                         WhatsApp Me</label>
                                     <div class="col-sm-9">
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text" id="basic-addon1">https://wa.me/</span>
                                             </div>
                                             <input type="number" class="form-control" placeholder="contoh:62812345678"
                                                 aria-label="link" name="link" aria-describedby="basic-addon1">
                                         </div>

                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group row">
                                     <label class="col-sm-12 col-form-label">Foto Outlet</label>
                                     <div class="col-sm-12">
                                         <div class="row">
                                             <div class="col-sm-6">
                                                 <input type="file" id="fotoOutlet" name="fotoOutlet"
                                                     onchange="previewImageOutlet();" required />
                                             </div>
                                             <div class="col-sm-6">
                                                 <img id="fotoOutletPrev"
                                                     src="https://via.placeholder.com/400C/O https://placeholder.com/"
                                                     alt="image preview" width="250" />
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="border-top">
                         <div class="card-body">
                             <button type="submit" class="btn btn-success float-right mb-3">
                                 Submit
                             </button>
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
                                     <th>Nama</th>
                                     <th>Alamat</th>
                                     <th>Link WA</th>
                                     <th>Foto</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <?php 
                                if (count($data['hubungikami'])) {
                                    $count = 1;
                                    foreach ($data['hubungikami'] as $hbi) {
                                    // var_dump($hbi);
                                
                                   
                              ?>
                             <tbody>
                                 <td><?= $count++; ?></td>
                                 <td><?= $hbi['nama'] ?></td>
                                 <td width="30%"><?= $hbi['alamat'] ?></td>
                                 <td><a href="https://wa.me/<?= $hbi['linkwa'] ?>"
                                         target="_blank">https://wa.me/<?= $hbi['linkwa'] ?></a></td>
                                 <td><img src="<?= BASEURL ?>assets/upload/outlet/<?= $hbi['gambaroutlate'] ?>"
                                         alt="Gambar Testimoni" width="100"></td>
                                 <td>
                                     <a href="<?= BASEURL ?>hubungikami/edit/<?= $hbi['id'] ?>"><i
                                             class="mdi mdi-pencil"></i>
                                         Edit</a> ||
                                     <a onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')"
                                         href="<?= BASEURL ?>hubungikami/hapus/<?= $hbi['id'] ?>"><i
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
     </div </div>
     <!-- ============================================================== -->
     <!-- End Container fluid  -->
     <!-- ============================================================== -->