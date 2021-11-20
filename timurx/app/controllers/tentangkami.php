<?php 

class tentangkami extends Controller{

  

    public function __construct(){

      

        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {

        //    Flasher::setFlash('Session anda telah','habis','red');

          header('Location:'.BASEURL);

        }

            date_default_timezone_set("Asia/Jakarta");



    }



    public function index(){

        $data['banner']         = $this->model('Home_model')->getBannerById();

        $data['judul']          = 'Tentang Kami | '.$data['banner']['judulwebsite'];

        $data['listtentangkami'] = $this->model('Tentangkami_model')->getTentangkami();



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/tentangKami', $data);

       $this->view('fortuna/template/footer');

    }



    public function tambah(){

      

        //*Upload Gambar

        $fotoLayanan            = $_FILES['fotoLayanan']['name'];  

        $dirLok                 = BASELOKSAVE.'/assets/upload/';

        $waktu                  = time();



        $path1            = $_FILES['fotoLayanan']['tmp_name']; //lokasi file awal

        chmod($path1, 0644);

        $type1            = $_FILES['fotoLayanan']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename1        = $_FILES['fotoLayanan']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'FL-' . $waktu . $rendomString2;



        //*fotoLayanan

        rename($path1, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        

        //cek apakah cekbox di ceklis

        if (htmlspecialchars($_POST["cek"])) {

            $baris  = 'khusus-1-baris';

        }else {

            $baris  = '';

        }



        $data  = [

                    //    "id"                 => $_POST['id'],

                       "deskripsi"          => htmlspecialchars($_POST["deskripsi"]),

                       "cek"                => $baris,

                       "fotoLayanan"        => $rendomString2,

                       "tanggalbuat"        => date("Y-m-d H:i:s")

        ];    



        $tentangKami = $this->model('Tentangkami_model')->tambahTentangKami($data);

        if ($tentangKami) {

           

              Flasher::setFlash('Data berhasil','ditambah','green');

              header('Location:'.BASEURL.'tentangkami');

              exit;

          }

    }



    public function edit($id){

        $data['banner']              = $this->model('Home_model')->getBannerById();

        $data['judul']               = 'Edit Tentang Kami | '.$data['banner']['judulwebsite'];

        $data['detailtentangkami']   = $this->model('Tentangkami_model')->getTentangKamiById($id);



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/edit-tentangKami', $data);

       $this->view('fortuna/template/footer');

    }



    public function _prosesedit(){

    $fotoLayanan            = $_FILES['fotoLayanan']['name'];

    $dirLok                 = BASELOKSAVE.'/assets/upload/';

    $waktu                  = time();



    if (htmlspecialchars($_POST["cek"])) {

            $baris  = 'khusus-1-baris';

        }else {

            $baris  = '';

        }

        

    // echo 'Hello';

    // die();

    if ($fotoLayanan) {

        //*iconperusahaan

        $path2       = $_FILES['fotoLayanan']['tmp_name']; //lokasi file awal

        chmod($path2, 0644);

        $type2       = $_FILES['fotoLayanan']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename2   = $_FILES['fotoLayanan']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'FL-' . $waktu . $rendomString2;



        //*fotoLayanan

        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

     



        $data  = [

                "id"                => $_POST["id"],

                "cek"               => $baris,

                "deskripsi"         => htmlspecialchars($_POST["deskripsi"]),

                "fotoLayanan"       => $rendomString2,

                "tanggalupdate"     => date("Y-m-d H:i:s")

        ];    

        $tentangkami = $this->model('Tentangkami_model')->updateBannerById($data);

        if ($tentangkami) {

             $fotolayananPrev         = $_POST['fotolayananPrev'];

             $fotolayananPrev         = $dirLok . $fotolayananPrev;

             unlink($fotolayananPrev);



              Flasher::setFlash('Data berhasil','diupdate','green');

              header('Location:'.BASEURL.'tentangkami');

              exit;

          }

        }else {

         $data  = [

                "id"                => $_POST["id"],

                 "cek"               => $baris,

                "deskripsi"         => htmlspecialchars($_POST["deskripsi"]),

                "fotoLayanan"       => $_POST['fotolayananPrev'],

                "tanggalupdate"     => date("Y-m-d H:i:s")

        ];  

            $tentangkami = $this->model('Tentangkami_model')->updateTentangById($data);

            if ($tentangkami) {

                 Flasher::setFlash('Data berhasil','diupdate','green');

                 header('Location:'.BASEURL.'tentangkami');

                 exit;

            }

            

        }





    }



    public function hapus($id){

       $dirLok                 = BASELOKSAVE.'/assets/upload/';

       

        $data['detailtentangkami']   = $this->model('Tentangkami_model')->getTentangKamiById($id);



        $tentangkami = $this->model('Tentangkami_model')->hapusById($id);

        

        if ($tentangkami) {

                $fotolayanan =   $data['detailtentangkami']['fotolayanan'];

                 $fotolayanan         = $dirLok . $fotolayanan;

                 unlink($fotolayanan);

                 Flasher::setFlash('Data berhasil','dihapus','red');

                 header('Location:'.BASEURL.'tentangkami');

                 exit;

            }

            



    }





}