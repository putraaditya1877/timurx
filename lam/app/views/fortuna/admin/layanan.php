 <!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Form Layanan</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Produk
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
    <div class="card">
        <div class="card-body custom-border-top box-card">
            <h4>Form Layanan</h4>
            <div class="control-group">
                <div class="controls mb-3">
                    <div class="main_input_box">
                        <?php Flasher::flash();  ?>
                    </div>
                </div>
            </div>
            <div class="auto-num">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>List Layanan</th>
                            <th>Last Update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($data['layanan'] as $ly) {
                            $id             = $ly['id'];
                            $layanan        = $ly['listlayanankami'];
                            $lastUpdate     = date_create($ly['tanggalupdate']);
                            $lastUpdate     = date_format($lastUpdate, 'Y-m-d'); 
                            ?>
                        <tr>
                            <td></td>
                            <td><?= $layanan ?></td>
                            <td><?= DateFormat::tgl_indo($lastUpdate) ?></td>
                            <td>
                                <a href="layanan/edit/<?= $id ?>" class="btn btn-info rounded btn-sm"><i
                                        class="mdi mdi-pencil"></i> Edit</a>
                            </td>
                        </tr>
                        <?php
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->