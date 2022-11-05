   <!-- Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <div class="page-breadcrumb">
       <div class="row">
           <div class="col-12 d-flex no-block align-items-center">
               <h4 class="page-title">Form Edit Konten Tentang Kami</h4>
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
       <?php 
//    var_dump($data['detailtentangkami']);

   $id              = $data['detailtentangkami']['id'];
   $isikonten       = $data['detailtentangkami']['isikonten'];
   $fotolayanan     = $data['detailtentangkami']['fotolayanan'];
   $baris           = $data['detailtentangkami']['baris'];
   if ($baris) {
       $baris = 'checked';
    }else {
       $baris = '';
       
   }

   
   ?>
       <div class="row">
           <div class="col-md-12">
               <div class="card custom-border-top box-card">
                   <form class="form-horizontal" action="<?= BASEURL ?>tentangkami/_prosesedit" method="post"
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
                                               id="deskripsi" name="deskripsi"><?= $isikonten ?></textarea>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-2 text-end control-label col-form-label">Jumlah
                                           Baris</label>
                                       <div class="col-sm-4">
                                           &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input"
                                               id="customControlAutosizing1" name="cek" <?= $baris; ?> />
                                       </div>

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label class="col-sm-12 col-form-label">Foto Layanan</label>
                                       <div class="col-sm-12">
                                           <input type="file" id="fotoLayanan" name="fotoLayanan"
                                               onchange="previewImageFL();" />
                                       </div>
                                       <div class="col-sm-12 pt-2">
                                           <img id="fotoLayananPrev"
                                               src="<?= BASEURL ?>assets/upload/<?= $fotolayanan ?>" alt="image preview"
                                               width="300" />
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
                               <input type="hidden" name="id" value="<?= $id ?>">
                               <input type="hidden" name="fotolayananPrev" value="<?= $fotolayanan ?>">
                               <button type="submit" class="btn btn-info float-right mb-4">
                                   Submit
                               </button>
                               <a href="<?= BASEURL?>tentangkami" class="btn btn-danger float-right mr-2">Kembali</a>

                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

   </div>
   <!-- ============================================================== -->
   <!-- End Container fluid  -->