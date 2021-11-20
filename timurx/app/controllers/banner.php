<?php 

class banner extends Controller{

  

    public function __construct(){

      

        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {

        //    Flasher::setFlash('Session anda telah','habis','red');

           header('Location:'.BASEURL);

        }

            date_default_timezone_set("Asia/Jakarta");

        



    }



    public function index(){

        $data['banner']    = $this->model('Home_model')->getBannerById();

        $data['judul']      = 'Banner | '.$data['banner']['judulwebsite'];



       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/banner', $data);

       $this->view('fortuna/template/footer');

    }



    public function edit(){

        //*Upload Gambar

        $fotobg                 = $_FILES['fotobg']['name']; 

        $dirLok                 = BASELOKSAVE.'/assets/upload/';

        $waktu                  = time();



        if ($fotobg ) {

            //*fotobg

        $path1       = $_FILES['fotobg']['tmp_name']; //lokasi file awal

         chmod($path1, 0644);

        $type1       = $_FILES['fotobg']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename1   = $_FILES['fotobg']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 

        

        //*membuat karakter random

        $char1           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString1   = substr(str_shuffle($char1), 0, 10);

        $rendomString1   = 'FB-' . $waktu . $rendomString1;

       

        rename($path1, $dirLok . $rendomString1); //ubah nama file dan pindahkan fil dari tmp ke folder baru

               

     

         $data  = [

                    //    "id"                 => $_POST['id'],

                       "judul"              => $_POST['judul'],

                       "subjudul"           => $_POST['subjudul'],

                       "deskripsi"          => $_POST['deskripsi'],

                       "fotobg"             => $rendomString1,

                       "tanggalupdate"      => date("Y-m-d H:i:s")

        ];

                   

        $banner = $this->model('Home_model')->updateBanner1($data);

        if ($banner) {

            $fotobgPrev         = $dirLok.$_POST['fotobgPrev'];

            unlink($fotobgPrev);

         

            Flasher::setFlash('Data berhasil','diupdate','green');

            header('Location:'.BASEURL.'banner');

            exit;

            }

        }else {

        $data  = [

                    //    "id"                 => $_POST['id'],

                       "judul"              => $_POST['judul'],

                       "subjudul"           => $_POST['subjudul'],

                       "deskripsi"          => $_POST['deskripsi'],

                       "fotobg"             => $_POST['fotobgPrev'],

                       "tanggalupdate"      => date("Y-m-d H:i:s")

        ];

            $banner = $this->model('Home_model')->updateBanner1($data);

            if ($banner) {

                 Flasher::setFlash('Data berhasil','diupdate','green');

                 header('Location:'.BASEURL.'banner');

                 exit;

            }

            

        }

    }

    

}