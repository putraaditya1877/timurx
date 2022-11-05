<?php 
class Hubungipusat extends Controller{
  
    public function __construct(){
      
        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {
        //    Flasher::setFlash('Session anda telah','habis','red');
          header('Location:'.BASEURL);
        }
            date_default_timezone_set("Asia/Jakarta");

    }

    public function index(){
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Hubungi Pusat | '.$data['banner']['judulwebsite'];
        $data['hubungipusat'] = $this->model('Hubungipusat_model')->getHubungipusatById();

        // var_dump($data['hubungipusat']);
       $this->view('fortuna/template/header', $data);
       $this->view('fortuna/admin/hubungipusat', $data);
       $this->view('fortuna/template/footer');
    }


    // public function edit($id){
    //     $data['banner']              = $this->model('Home_model')->getBannerById();
    //     $data['judul']               = 'Edit Hubungi Kami | '.$data['banner']['judulwebsite'];
    //     $data['hubungikami']        = $this->model('Hubungikami_model')->getHubungikamiById($id);

        // var_dump($data['listtentangkami']);
    //    $this->view('fortuna/template/header', $data);
    //    $this->view('fortuna/admin/edit-hubungikami', $data);
    //    $this->view('fortuna/template/footer');
    // }

    public function _prosesedit(){
 
            $data  = [
                       "nomorwa"               => htmlspecialchars($_POST["nomorwa"]),
                       "tanggalupdate"      => date("Y-m-d H:i:s")
        ];    
            $hubungipusat = $this->model('Hubungipusat_model')->updateHubungipusatById($data);
            
            if ($hubungipusat) {
                 Flasher::setFlash('Data berhasil','diupdate','green');
                 header('Location:'.BASEURL.'hubungipusat');
                 exit;
            }
        
            
    }



}