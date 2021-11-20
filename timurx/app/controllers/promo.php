<?php 

class promo extends Controller{

  

    public function __construct(){

      

        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {

        //    Flasher::setFlash('Session anda telah','habis','red');

          header('Location:'.BASEURL);

        }

            date_default_timezone_set("Asia/Jakarta");



    }



    public function index(){

        $data['banner']         = $this->model('Home_model')->getBannerById();

        $data['judul']          = 'Promo | '.$data['banner']['judulwebsite'];

        $id = '1';

        $data['promo']         = $this->model('Promo_model')->getPromoById($id);



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/promo', $data);

       $this->view('fortuna/template/footer');

    }



    public function _prosesedit(){

    

    $Gambarpromo            = $_FILES['promo']['name'];

    $dirLok                 = BASELOKSAVE.'/assets/upload/';

    $waktu                  = time();

        

    // echo 'Hello';

    // die();

    if ($Gambarpromo) {

        //*iconperusahaan

        $path2       = $_FILES['promo']['tmp_name']; //lokasi file awal

        chmod($path2, 0644);

        $type2       = $_FILES['promo']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename2   = $_FILES['promo']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'PR-' . $waktu . $rendomString2;



        //*promo

        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        $data  = [

                "promo"             => $rendomString2,

                "tanggalupdate"     => date("Y-m-d H:i:s"),

                "idtoko"            => '1'

        ];    

        $promo = $this->model('Promo_model')->updatePromo($data);

        if ($promo) {

             $promoPrev         = $_POST['promoPrev'];

             $promoPrev         = $dirLok . $promoPrev;

             unlink($promoPrev);



              Flasher::setFlash('Data berhasil','diupdate','green');

              header('Location:'.BASEURL.'promo');

              exit;

          }

        }

    }







}