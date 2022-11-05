   <!-- Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <div class="page-breadcrumb">
       <div class="row">
           <div class="col-12 d-flex no-block align-items-center">
               <h4 class="page-title">Form Banner</h4>
               <div class="ml-auto text-right">
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">
                               Banner
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
        $id         = $data['banner']['id'];
        $judul      = $data['banner']['judulbanner'];
        $subjudul   = $data['banner']['subjudul'];
        $deskripsi  = $data['banner']['deskripsi'];
        $fotobg     = $data['banner']['fotobackground'];

        ?>


       <div class="row">
           <div class="col-md-12">
               <div class="card custom-border-top box-card">
                   <form class="form-horizontal" action="banner/edit" method="post" enctype="multipart/form-data">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="card-body">
                                   <h4 class="card-title">Form Ubah bagian Banner</h4>
                                   <br>
                                   <div class="control-group">
                                       <div class="controls mb-3">
                                           <div class="main_input_box">
                                               <?php Flasher::flash();  ?>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="judul1" class="col-sm-3 text-end control-label col-form-label">Judul</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control" id="judul1" name="judul" placeholder="Ketik disini" value="<?= $judul; ?>" />
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="judul2" class="col-sm-3 text-end control-label col-form-label">Sub
                                           judul</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control" id="subjudul" name="subjudul" placeholder="Ketik disini" value="<?= $subjudul;  ?>" />
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Deskripsi</label>
                                       <div class="col-sm-9">
                                           <textarea class="form-control" rows="5" name="deskripsi" placeholder="Ketik disini"><?= $deskripsi  ?></textarea>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <br>
                               <br>
                               <div class="card-body">
                                   <label class="col-sm-12 col-form-label">Foto BackGround</label>
                                   <div class="col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-6">
                                               <input type="file" id="fotobg" name="fotobg" onchange="previewImageBG();" />
                                           </div>
                                           <div class="col-sm-6">
                                               <img id="fotoBgPrev" src="<?= BASEURL ?>assets/upload/<?= $fotobg ?>" alt="image preview" width="250" />
                                               <input type="hidden" name="fotobgPrev" value="<?= $fotobg ?>">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="border-top">
                           <div class="card-body">
                               <input type="hidden" name="id" value="<?= $id ?>">
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