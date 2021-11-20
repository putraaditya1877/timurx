<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Form Feed IG</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Feed IG
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

    $id           = $data['feedig']['id'];
    $listfeed     = $data['feedig']['listfeed'];
    $link        = $data['feedig']['embedlink'];
    
    ?>
    <div class="card">
        <form action="<?= BASEURL?>feedig/_prosesedit" method="post">
            <div class="card-body custom-border-top box-card">
                <h4>Form Layanan</h4>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-2 text-end control-label col-form-label">List Feed</label>
                    <div class="col-sm-10">
                        <input type="text" name="listfeed" class="form-control" value="<?= $listfeed ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-2 text-end control-label col-form-label">Embed Instagram</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="link" rows="30"><?= $link ?></textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <button type="submit" class="btn btn-success float-right mb-3">
                        Submit
                    </button>
                    <a href="<?= BASEURL?>feedig" class="btn btn-danger float-right mr-2">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->