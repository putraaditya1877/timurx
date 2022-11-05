<?php 
class layanan extends Controller{

    public function __construct(){
        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {
        //    Flasher::setFlash('Session anda telah','habis','red');
          header('Location:'.BASEURL);
        }
            date_default_timezone_set("Asia/Jakarta");
    }
    public function index(){
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Layanan | '.$data['banner']['judulwebsite'];
        $data['layanan']         = $this->model('Layanan_model')->getAllLayanan();
        // var_dump($data['listtentangkami']);
       $this->view('fortuna/template/header', $data);
       $this->view('fortuna/admin/layanan', $data);
       $this->view('fortuna/template/footer');
    }
    public function edit($id){
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Layanan | '.$data['banner']['judulwebsite'];
        $data['layanan']        = $this->model('Layanan_model')->getLayananById($id);
        // var_dump($data['listtentangkami']);
       $this->view('fortuna/template/header', $data);
       $this->view('fortuna/admin/detail-layanan', $data);
       $this->view('fortuna/template/footer');
    }
    public function _prosesedit(){
    $gambarlayanan          = $_FILES['gambarLayanan']['name'];
    $dirLok                 = BASELOKSAVE.'/assets/upload/';
    $waktu                  = time();
    // echo 'Hello';
    // die();
    if ($gambarlayanan) {
        //*gambarlayanan
        $path2       = $_FILES['gambarLayanan']['tmp_name']; //lokasi file awal
         chmod($path2, 0644);
        $type2       = $_FILES['gambarLayanan']['type']; // tipe file (jpg/jpeg/png/dll)
        $filename2   = $_FILES['gambarLayanan']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 
        //*membuat karakter random
        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rendomString2   = substr(str_shuffle($char2), 0, 10);
        $rendomString2   = 'L-' . $waktu . $rendomString2;
        //*gambarlayanan
        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
        $data  = [
                "id"                => $_POST["id"],
                "judullayanan"      => $_POST["judullayanan"],
                "deskripsi"         => $_POST["deskripsi"],
                "gambarLayanan"     => $rendomString2,
                "tanggalupdate"     => date("Y-m-d H:i:s")
                // "idtoko"            => '1'
        ];    
        $layanan = $this->model('Layanan_model')->updateLayanan($data);
        if ($layanan) {
             $gambarLayananPrev         = $_POST['gambarLayananPrev'];
             $gambarLayananPrev         = $dirLok . $gambarLayananPrev;
             unlink($gambarLayananPrev);
              Flasher::setFlash('Data berhasil','diupdate','green');
              header('Location:'.BASEURL.'layanan');
              exit;
          }
        }else {
            $data  = [
                "id"                => $_POST["id"],
                "judullayanan"      => htmlspecialchars($_POST["judullayanan"]),
                "deskripsi"         => htmlspecialchars($_POST["deskripsi"]),
                "gambarLayanan"     => $_POST['gambarLayananPrev'],
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];   
            $layanan = $this->model('Layanan_model')->updateLayanan($data);
            if ($layanan) {
                 Flasher::setFlash('Data berhasil','diupdate','green');
                 header('Location:'.BASEURL.'layanan');
                 exit;
            }
        }
    }
}