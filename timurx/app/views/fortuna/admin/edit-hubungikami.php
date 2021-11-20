 <!-- ============================================================== -->
 <!-- Bread crumb and right sidebar toggle -->
 <!-- ============================================================== -->
 <div class="page-breadcrumb">
     <div class="row">
         <div class="col-12 d-flex no-block align-items-center">
             <h4 class="page-title">EDIT HUBUNGI KAMI</h4>
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
     <?php 
    // var_dump($data['hubungikami']);
    $id             = $data['hubungikami']['id'];
    $nama           = $data['hubungikami']['nama'];
    $alamat         = $data['hubungikami']['alamat'];
    $linkwa         = $data['hubungikami']['linkwa'];
    $gambaroutlate  = $data['hubungikami']['gambaroutlate'];
    
    
    ?>

     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <form class="form-horizontal" action="<?= BASEURL ?>hubungikami/_prosesedit" method="post"
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
                                             placeholder="Ketik Disini" value="<?= $nama ?>" />
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Alamat
                                         Lengkap</label>
                                     <div class="col-sm-9">
                                         <textarea class="form-control" rows="5" placeholder="Ketik disini" id="alamat"
                                             name="alamat"><?= $alamat ?></textarea>
                                     </div>
                                 </div>
                                 <!-- <div class="form-group row">
                                     <label for="fname" class="col-sm-3 text-end control-label col-form-label">Link
                                         WhatsApp Me</label>
                                     <div class="col-sm-9">
                                         <textarea class="form-control" placeholder="Ketik Disini" rows="5"
                                             name="link"><?= $linkwa ?></textarea>
                                         <span><b>Contoh: https://wa.me/08123456789</b></span>
                                     </div>
                                 </div> -->
                                 <div class="form-group row">
                                     <label for="fname" class="col-sm-3 text-end control-label col-form-label">No
                                         WhatsApp Me</label>
                                     <div class="col-sm-9">
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text" id="basic-addon1">https://wa.me/</span>
                                             </div>
                                             <input type="number" class="form-control" placeholder="contoh:0812345678"
                                                 aria-label="link" name="link" value="<?= $linkwa ?>"
                                                 aria-describedby="basic-addon1">
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
                                                 <input type="file" id="fotoOutlet1" name="fotoOutlet1"
                                                     onchange="previewEditImageOutlet();" />
                                             </div>
                                             <div class="col-sm-6">
                                                 <img id="fotoOutletPrev1"
                                                     src="<?= BASEURL ?>assets/upload/outlet/<?= $gambaroutlate ?>"
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
                             <input type="hidden" name="id" value="<?= $id ?>">
                             <input type="hidden" name="fotoOutletPrev1" value="<?= $gambaroutlate ?>">
                             <button type="submit" class="btn btn-success float-right mb-3">
                                 Submit
                             </button>
                             <a href="<?= BASEURL?>hubungikami" class="btn btn-danger float-right mr-2">Kembali</a>
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