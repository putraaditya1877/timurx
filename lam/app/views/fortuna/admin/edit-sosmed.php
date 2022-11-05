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
       <?php 
        //  var_dump($data['sosmed']);
         $id             = $data['sosmed']['id'];
         $namaakun       = $data['sosmed']['namaakun'];
         $link           = $data['sosmed']['link'];
         $iconsosmed     = $data['sosmed']['iconsosmed'];
   
   ?>


       <div class="row">
           <div class="col-md-12">
               <div class="card custom-border-top box-card">
                   <form class="form-horizontal" action="<?= BASEURL ?>sosmed/_prosesedit" method="post">
                       <div class="card-body">
                           <h4 class="card-title">Form Sosial Media</h4>
                           <div class="row">
                               <div class="form-group row col-md-4">
                                   <label class="col-sm-12 col-form-label">Logo Sosial Media yang digunakan</label>
                                   <div class="col-sm-12">
                                       <select class="select2 form-control shadow-none" style="width: 60%; height: 36px"
                                           id="iconsosmed" name="iconsosmed">
                                           <!-- <option>--Pilih Icon--</option> -->
                                           <option value="1">Instagram</option>
                                           <option value="2">Facebook</option>
                                           <option value="3">Yotube</option>
                                       </select>
                                       <input type="hidden" id="idiconsosmed" name="idiconsosmed"
                                           value="<?= $iconsosmed  ?>">
                                       <!-- <div class="row">
                                           <div class="col-sm-12">
                                               <input type="file" id="image-sosmed" onchange="previewImageSosmed();" />
                                           </div>
                                           <div class="col-sm-12 mt-3">
                                               <img id="image-sosmed-preview"
                                                   src="https://via.placeholder.com/400C/O https://placeholder.com/"
                                                   alt="image preview" width="250" />
                                           </div>
                                       </div> -->
                                   </div>
                               </div>
                               <div class="form-group row col-md-4">
                                   <label for="akun" class="col-sm-3 text-end control-label col-form-label">Nama
                                       Akun</label>
                                   <div class="col-sm-9">
                                       <input type="text" class="form-control" id="akun" name="akun"
                                           value="<?= $namaakun ?>" placeholder="Ketik Disini" />
                                   </div>
                               </div>
                               <div class="form-group row col-md-4">
                                   <label for="link" class="col-sm-3 text-end control-label col-form-label">Link ke
                                       Sosial Media</label>
                                   <div class="col-sm-9">
                                       <!-- <input type="text" class="form-control" id="link" placeholder="Ketik Disini" /> -->
                                       <textarea name="link" id="link" cols="30" rows="3"><?= $link ?></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="border-top">
                           <input type="hidden" name="id" value="<?= $id ?>">
                           <div class="card-body">
                               <button type="submit" class="btn btn-success float-right mb-4">
                                   Submit
                               </button>
                               <a href="<?= BASEURL?>sosmed" class="btn btn-danger float-right mr-2">Kembali</a>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>

   <!-- ============================================================== -->
   <!-- End Container fluid  -->
   <!-- ============================================================== -->