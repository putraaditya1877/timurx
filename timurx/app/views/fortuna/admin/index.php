 <!-- ============================================================== -->
 <!-- Bread crumb and right sidebar toggle -->
 <!-- ============================================================== -->
 <div class="page-breadcrumb">
     <div class="row">
         <div class="col-12 d-flex no-block align-items-center">
             <h4 class="page-title">Utama</h4>
             <div class="ml-auto text-right">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">
                             Utama
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
     <!-- Sales Cards  -->
     <!-- ============================================================== -->
     <?php 
             
                     $id               =  $data['banner']['id'];
                     $judulwebsite     =  $data['banner']['judulwebsite'];
                     $logoperusahaan   =  $data['banner']['logoperusahaan'];
                     $iconperusahaan   =  $data['banner']['iconperusahaan'];
                 ?>
     <div class="col-md-6">
         <div class="card">
             <div class="card-body custom-border-top box-card">
                 <h4>Form Input</h4>
                 <div class="control-group">
                     <div class="controls mb-3">
                         <div class="main_input_box">
                             <?php Flasher::flash();  ?>
                         </div>
                     </div>
                 </div>
                 <form action="home/edit" method="post" enctype="multipart/form-data">
                     <div class="form-group row col-sm-12">
                         <label for="akun" class="col-sm-3 text-end control-label col-form-label">Nama Akun</label>
                         <div class="col-sm-9">
                             <input type="text" class="form-control" id="judulwebsite" name="judulwebsite"
                                 value="<?= $judulwebsite ?>" placeholder="Ketik Disini" required />
                         </div>

                         <div class="form-group row col-sm-12">
                             <div class="col-sm-6">
                                 <label class="col-form-label">Logo Perusahaan</label>
                                 <input type="file" id="logoP" name="logoperusahaan" onchange="previewImage1();" />
                             </div>
                             <div class="col-sm-6 mt-3">
                                 <img id="logoPrev" class="mr-auto ml-auto" width='100'
                                     src="<?= BASEURL ?>assets/upload/<?= $logoperusahaan; ?>" alt="image preview" />
                                 <input hidden name="logopPrev" value="<?= $logoperusahaan ?>">
                             </div>
                             <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
                         </div>

                         <div class="form-group row col-sm-12">
                             <div class="col-sm-6">
                                 <label class="col-form-label">Icon Perusahaan</label>
                                 <input type="file" id="iconP" name='iconperusahaan' onchange="previewImage2();" />

                             </div>
                             <div class="col-sm-6 mt-3">
                                 <img id="iconPrev" class="mr-auto ml-auto" width='100'
                                     src=" <?= BASEURL ?>assets/upload/<?= $iconperusahaan; ?>" alt="image preview" />
                                 <input hidden name="iconpPrev" value="<?= $iconperusahaan ?>">
                             </div>
                             <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
                         </div>
                     </div>
                     <div class="border-top">
                         <div class="card-body">
                             <input type="hidden" name='id' value="<?=  $id; ?>">
                             <button type="submit" name='simpan' class="btn btn-success float-right mb-4">
                                 Submit
                             </button>
                         </div>
                     </div>

                 </form>

             </div>
         </div>
     </div>
 </div>