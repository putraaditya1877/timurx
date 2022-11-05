   <!-- Bread crumb and right sidebar toggle -->

   <!-- ============================================================== -->

   <div class="page-breadcrumb">

       <div class="row">

           <div class="col-12 d-flex no-block align-items-center">

               <h4 class="page-title">Form Konten Tentang Kami</h4>

               <div class="ml-auto text-right">

                   <nav aria-label="breadcrumb">

                       <ol class="breadcrumb">

                           <li class="breadcrumb-item"><a href="#">Home</a></li>

                           <li class="breadcrumb-item active" aria-current="page">

                               Tentang Kami

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

                   <form class="form-horizontal" action="tentangkami/tambah" method="post"

                       enctype="multipart/form-data">

                       <div class="card-body">

                           <h4 class="card-title">Konten</h4>

                           <div class="control-group">

                               <div class="controls mb-3">

                                   <div class="main_input_box">

                                       <?php Flasher::flash();  ?>

                                   </div>

                               </div>

                           </div>

                           <div class="row">

                               <div class="col-md-6">

                                   <div class="form-group row">

                                       <label for="cono1" class="col-sm-2 text-end control-label col-form-label">Isi

                                           Konten</label>

                                       <div class="col-sm-10">

                                           <textarea class="form-control" rows="5" placeholder="Ketik Disini"

                                               id="deskripsi" name="deskripsi"></textarea>

                                       </div>

                                   </div>

                                   <div class="form-group row">

                                       <label class="col-sm-2 text-end control-label col-form-label">Jumlah

                                           Baris</label>

                                       <div class="col-sm-4">

                                           &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input"

                                               id="customControlAutosizing1" name="cek" />

                                       </div>



                                   </div>

                                   <span>*Cek

                                       ketika ingin julmlah barisnya hanya 1.</span>

                               </div>





                               <div class="col-md-6">

                                   <div class="form-group">

                                       <label class="col-sm-12 col-form-label">Foto Layanan</label>

                                       <div class="col-sm-12">

                                           <input type="file" id="fotoLayanan" name="fotoLayanan"

                                               onchange="previewImageFL();" required />

                                       </div>

                                       <div class="col-sm-12 pt-2">

                                           <img id="fotoLayananPrev"

                                               src="https://via.placeholder.com/500x350C/O https://placeholder.com/"

                                               alt="image preview" width="300" />

                                           <!-- https://via.placeholder.com/500x350C/O https://placeholder.com/ -->

                                       </div>

                                   </div>

                               </div>

                           </div>



                       </div>

                       <div class="border-top">

                           <div class="card-body">

                               <!-- <button type="button" class="btn btn-info float-right mb-4" onclick="tambahDeskripsi()">

                                   Tambah

                               </button> -->

                               <button type="submit" class="btn btn-info float-right mb-4">

                                   Tambah

                               </button>

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

                       <div class="card-body auto-num">

                           <h4 class="card-title">Preview</h4>

                           <table class="table" id="exa3">

                               <thead>

                                   <tr>

                                       <th>No</th>

                                       <th>Deskripsi</th>

                                       <th>Foto</th>

                                       <th style="text-align:center">Status 1 Baris</th>

                                       <th>Action</th>

                                   </tr>

                               </thead>

                               <?php 

                                // $no = 1;

                                foreach ($data['listtentangkami'] as $tk) {

                                        //    var_dump($tk);

                                ?>

                               <tbody>

                                   <td></td>

                                   <td width="50%" style="text-align: justify"><?= $tk['isikonten'] ?></td>

                                   <td><img src="<?= BASEURL ?>assets/upload/<?= html_entity_decode($tk['fotolayanan']) ?>"

                                           alt="Foto Layanan" width="200"></td>

                                   <td style="text-align:center">

                                       <?php 

                                       if ($tk['baris']){

                                       $baris = 'checked';

                                       }else{

                                       $baris = '';

                                       }

                                     

                                     ?>

                                       <input type="checkbox" <?= $baris; ?> disabled>

                                   </td>

                                   <td>

                                       <a href="<?= BASEURL ?>tentangkami/edit/<?= $tk['id'] ?>"><i

                                               class="mdi mdi-pencil"></i>

                                           Edit</a> ||

                                       <a href="<?= BASEURL ?>tentangkami/hapus/<?= $tk['id'] ?>"

                                           onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')"><i

                                               class=" mdi mdi-delete"></i>Hapus</a>

                                   </td>

                               </tbody>

                               <?php

                                    }

                               ?>

                           </table>

                       </div>

                   </div>

               </form>

           </div>

       </div>

   </div>

   <!-- ============================================================== -->

   <!-- End Container fluid  -->