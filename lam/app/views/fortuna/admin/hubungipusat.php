 <!-- ============================================================== -->
 <!-- Bread crumb and right sidebar toggle -->
 <!-- ============================================================== -->
 <div class="page-breadcrumb">
     <div class="row">
         <div class="col-12 d-flex no-block align-items-center">
             <h4 class="page-title">Hubungi Pusat</h4>
             <div class="ml-auto text-right">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">
                             Hubungi Pusat
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
        $nomorwa     =  $data['hubungipusat']['nomorwa'];            
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
                 <form action="hubungipusat/_prosesedit" method="post">
                     <div class="form-group row col-sm-12">
                         <label for="akun" class="col-sm-3 text-end control-label col-form-label">Nomor WhatsApp Kantor
                             Pusat</label>
                         <div class="col-sm-9">
                             <input type="number" maxlength="2" class="form-control" id="nomorwa" name="nomorwa"
                                 value="<?= $nomorwa ?>" placeholder="Ketik Disini" required />
                         </div>

                     </div>
                     <div class="border-top">
                         <div class="card-body">

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