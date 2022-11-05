<?php 

class hubungikami extends Controller{

  

    public function __construct(){

      

        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {

        //    Flasher::setFlash('Session anda telah','habis','red');

          header('Location:'.BASEURL);

        }

            date_default_timezone_set("Asia/Jakarta");



    }



    public function index(){

        $data['banner']         = $this->model('Home_model')->getBannerById();

        $data['judul']          = 'Hubungi Kami | '.$data['banner']['judulwebsite'];

        $data['hubungikami'] = $this->model('Hubungikami_model')->getAllHubungikami();



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/hubungikami', $data);

       $this->view('fortuna/template/footer');

    }



    public function tambah(){

      

        //*Upload Gambar

        $fotoOutlet            = $_FILES['fotoOutlet']['name'];  

        $dirLok                 = BASELOKSAVE.'/assets/upload/outlet/';

        $waktu                  = time();



        $path1            = $_FILES['fotoOutlet']['tmp_name']; //lokasi file awal

        chmod($path1, 0644);

        $type1            = $_FILES['fotoOutlet']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename1        = $_FILES['fotoOutlet']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'OTL-' . $waktu . $rendomString2;



        //*fotoOutlet

        rename($path1, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        $data  = [

                    //    "id"                 => $_POST['id'],

                       "nama"               => htmlspecialchars($_POST["nama"]),

                       "alamat"             => htmlspecialchars($_POST["alamat"]),

                       "link"               => htmlspecialchars($_POST["link"]),

                       "fotoOutlet"         => $rendomString2,

                       "tanggalbuat"        => date("Y-m-d H:i:s")

        ];    

        // var_dump($data);

        // die();

        $hubungikami = $this->model('Hubungikami_model')->tambahHubungikami($data);

        if ($hubungikami) {

           

              Flasher::setFlash('Data berhasil','ditambah','green');

              header('Location:'.BASEURL.'hubungikami');

              exit;

          }

    }



    public function edit($id){

        $data['banner']              = $this->model('Home_model')->getBannerById();

        $data['judul']               = 'Edit Hubungi Kami | '.$data['banner']['judulwebsite'];

        $data['hubungikami']        = $this->model('Hubungikami_model')->getHubungikamiById($id);



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/edit-hubungikami', $data);

       $this->view('fortuna/template/footer');

    }



    public function _prosesedit(){

    $fotoOutlet1            = $_FILES['fotoOutlet1']['name'];

       $dirLok              = BASELOKSAVE.'/assets/upload/outlet/';

    $waktu                  = time();

        

    // echo 'Hello';

    // die();

    if ($fotoOutlet1) {

        //*fotoOutlet1

        $path2       = $_FILES['fotoOutlet1']['tmp_name']; //lokasi file awal

         chmod($path2, 0644);

        $type2       = $_FILES['fotoOutlet1']['type']; // tipe file (jpg/jpeg/png/dll)

        $filename2   = $_FILES['fotoOutlet1']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 



        //*membuat karakter random

        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $rendomString2   = substr(str_shuffle($char2), 0, 10);

        $rendomString2   = 'OTL-' . $waktu . $rendomString2;



        //*fotoOutlet1

        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        $data  = [

                       "id"                 => $_POST['id'],

                       "nama"               => htmlspecialchars($_POST["nama"]),

                       "alamat"             => htmlspecialchars($_POST["alamat"]),

                       "link"               => htmlspecialchars($_POST["link"]),

                       "fotoOutlet1"         => $rendomString2,

                       "tanggalupdate"        => date("Y-m-d H:i:s")

        ];     



        $hubungikami = $this->model('Hubungikami_model')->updateHubungikamiById($data);



        if ($hubungikami) {

             $fotoOutletPrev1         = $_POST['fotoOutletPrev1'];

             $fotoOutletPrev1         = $dirLok . $fotoOutletPrev1;

             unlink($fotoOutletPrev1);



              Flasher::setFlash('Data berhasil','diupdate','green');

              header('Location:'.BASEURL.'hubungikami');

              exit;

          }

        }else {

           $data  = [

                       "id"                 => $_POST['id'],

                       "nama"               => htmlspecialchars($_POST["nama"]),

                       "alamat"             => htmlspecialchars($_POST["alamat"]),

                       "link"               => htmlspecialchars($_POST["link"]),

                       "fotoOutlet1"        => $_POST['fotoOutletPrev1'],

                       "tanggalupdate"      => date("Y-m-d H:i:s")

        ];    

            $hubungikami = $this->model('Hubungikami_model')->updateHubungikamiById($data);

            

            if ($hubungikami) {

                 Flasher::setFlash('Data berhasil','diupdate','green');

                 header('Location:'.BASEURL.'hubungikami');

                 exit;

            }

            

        }





    }



    public function hapus($id){

        $dirLok                 = BASELOKSAVE.'/assets/upload/outlet/';

        $data['hubungikami']   = $this->model('Hubungikami_model')->getHubungikamiById($id);

    

        $hubungikami = $this->model('Hubungikami_model')->hapusHubungiById($id);

        

        if ($hubungikami) {

                 $hubungikamiX         = $data['hubungikami']['gambaroutlate'];

                 $hubungikamiX         = $dirLok . $hubungikamiX;

                 unlink($hubungikamiX);

                 Flasher::setFlash('Data berhasil','dihapus','red');

                 header('Location:'.BASEURL.'hubungikami');

                 exit;

            }

            

    }





}