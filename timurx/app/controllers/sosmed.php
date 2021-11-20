<?php 

class sosmed extends Controller{

  

    public function __construct(){

      

        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {

        //    Flasher::setFlash('Session anda telah','habis','red');

          header('Location:'.BASEURL);

        }

            date_default_timezone_set("Asia/Jakarta");



    }



    public function index(){

        $data['banner']         = $this->model('Home_model')->getBannerById();

        $data['judul']          = 'Sosial Media | '.$data['banner']['judulwebsite'];

     

        $data['sosmed']         = $this->model('Sosmed_model')->getAllSosmed();



        // var_dump($data['listtentangkami']);

       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/sosmed', $data);

       $this->view('fortuna/template/footer');

    }



     public function edit($id){

        $data['banner']         = $this->model('Home_model')->getBannerById();

        $data['judul']          = 'Sosial Media | '.$data['banner']['judulwebsite'];

        // $id = '1';

        $data['sosmed']         = $this->model('Sosmed_model')->getSosmedById($id);

        // $data['iconsosmed']     = $this->model('Sosmed_model')->getIconSosmed();



       $this->view('fortuna/template/header', $data);

       $this->view('fortuna/admin/edit-sosmed', $data);

       $this->view('fortuna/template/footer');

    }



    public function _prosesedit(){

        $data  = [

                "id"                => $_POST["id"],

                "iconsosmed"        => htmlspecialchars($_POST['iconsosmed']),

                "akun"              => htmlspecialchars($_POST['akun']),

                "link"              => htmlspecialchars($_POST['link']),

                "tanggalupdate"     => date("Y-m-d H:i:s")

        ];    

        $sosmed = $this->model('Sosmed_model')->updateSosmed($data);

        if ($sosmed) {

              Flasher::setFlash('Data berhasil','diupdate','green');

              header('Location:'.BASEURL.'sosmed');

              exit;

          }

        }

    }