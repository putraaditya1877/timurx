<?php 

class testimoni extends Controller{

  

    public function __construct(){

      

        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {

        //    Flasher::setFlash('Session anda telah','habis','red');

          header('Location:'.BASEURL);

        }

            date_default_timezone_set("Asia/Jakarta");



    }



    public function index(){

        $data['banner']         = $this->model('Home_model')->getBannerById();

        $data['judul']          = 'Testimoni | '.$data['banner']['judulwebsite'];

        $data['testimoni']      = $this->model('Testimoni_model')->getAllTestimoni();



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/testimoni', $data);

       $this->view('fortuna/template/footer');

    }



    public function tambah(){

      

        //*Upload Gambar

        $gambarTestimoni        = $_FILES['gambarTestimoni']['name'];  

        $dirLok                 = BASELOKSAVE.'/assets/upload/';

        $waktu                  = time();



        $path1            = $_FILES['gambarTestimoni']['tmp_name']; //lokasi file awal

        chmod($path1, 0644);

        $type1            = $_FILES['gambarTestimoni']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename1        = $_FILES['gambarTestimoni']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'TS-' . $waktu . $rendomString2;



        //*gambarTestimoni

        rename($path1, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        // CompresImage::compressImage($dirLok . $rendomString2, $dirLok . $rendomString2, 70);

        

        $data  = [

                        "nama"              => htmlspecialchars($_POST['nama']),

                        "perkerjaan"        => htmlspecialchars($_POST['perkerjaan']),

                        "testimoni"          => htmlspecialchars($_POST['testimoni']),

                        "gambarTestimoni"    => $rendomString2,

                        "tanggalbuat"        => date("Y-m-d H:i:s")

        ];    



        $testimoni = $this->model('Testimoni_model')->tambahTestimoni($data);

        if ($testimoni) {

           

              Flasher::setFlash('Data berhasil','ditambah','green');

              header('Location:'.BASEURL.'testimoni');

              exit;

          }

    }



    public function edit($id){

        $data['banner']              = $this->model('Home_model')->getBannerById();

        $data['judul']               = 'Edit Tentang Kami | '.$data['banner']['judulwebsite'];

        $data['detailtestimoni']    = $this->model('Testimoni_model')->getTestimoniById($id);



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/edit-testimoni', $data);

       $this->view('fortuna/template/footer');

    }



    public function _prosesedit(){

    $gambarTestimoni        = $_FILES['gambarTestimoni']['name'];  

    $dirLok                 = BASELOKSAVE.'/assets/upload/';

    $waktu                  = time();

        

    // echo 'Hello';

    // die();

    if ($gambarTestimoni) {

        $path1            = $_FILES['gambarTestimoni']['tmp_name']; //lokasi file awal

        chmod($path1, 0644);

        $type1            = $_FILES['gambarTestimoni']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename1        = $_FILES['gambarTestimoni']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'TS-' . $waktu . $rendomString2;



        //*gambarTestimoni

        rename($path1, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        $data  = [

                        "id"                => $_POST["id"],

                        "nama"              => htmlspecialchars($_POST['nama']),

                        "perkerjaan"        => htmlspecialchars($_POST['perkerjaan']),

                        "testimoni"          => htmlspecialchars($_POST['testimoni']),

                        "gambarTestimoni"    => $rendomString2,

                        "tanggalupdate"      => date("Y-m-d H:i:s")

        ];    

        $testimoni = $this->model('Testimoni_model')->updateTestimoniById($data);



        if ($testimoni) {

             $fotoTestimoniPrev         = $_POST['testimoniPrev'];

             $fotoTestimoniPrev         = $dirLok . $fotoTestimoniPrev;

             unlink($fotoTestimoniPrev);



              Flasher::setFlash('Data berhasil','diupdate','green');

              header('Location:'.BASEURL.'testimoni');

              exit;

          }

        }else {

       $data  = [

                        "id"                => $_POST["id"],

                        "nama"              => htmlspecialchars($_POST['nama']),

                        "perkerjaan"        => htmlspecialchars($_POST['perkerjaan']),

                        "testimoni"          => htmlspecialchars($_POST['testimoni']),

                        "gambarTestimoni"    => $_POST['testimoniPrev'],

                        "tanggalupdate"      => date("Y-m-d H:i:s")

        ];   

            $testimoni = $this->model('Testimoni_model')->updateTestimoniById($data);



        if ($testimoni) {

        

              Flasher::setFlash('Data berhasil','diupdate','green');

              header('Location:'.BASEURL.'testimoni');

              exit;

          }

        }





    }



    public function hapus($id){

       $dirLok                 = BASELOKSAVE.'/assets/upload/';

       

        $data['detailtestimoni']   = $this->model('Testimoni_model')->getTestimoniById($id);



        $testimoni = $this->model('Testimoni_model')->hapusTestimoniById($id);

        

        if ($testimoni) {

                 $fototestimoni          = $data['detailtestimoni']['gambar'];

                 $fototestimoni          = $dirLok . $fototestimoni;

                 unlink($fototestimoni);

                 Flasher::setFlash('Data berhasil','dihapus','red');

                 header('Location:'.BASEURL.'testimoni');

                 exit;

            }

            



    }





}