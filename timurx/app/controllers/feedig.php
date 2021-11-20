<?php 
class feedig extends Controller{
  
    public function __construct(){
      
        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {
        //    Flasher::setFlash('Session anda telah','habis','red');
          header('Location:'.BASEURL);
        }
            date_default_timezone_set("Asia/Jakarta");

    }

    public function index(){
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Feed IG | '.$data['banner']['judulwebsite'];
     
        $data['feedig']         = $this->model('Feedig_model')->getAllFeedig();

        // var_dump($data['listtentangkami']);
       $this->view('fortuna/template/header', $data);
       $this->view('fortuna/admin/feedig', $data);
       $this->view('fortuna/template/footer');
    }
    public function tutotialEmbed(){
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Tutorial Embed Link Feed IG | '.$data['banner']['judulwebsite'];
     
        
       $this->view('fortuna/template/header', $data);
       $this->view('fortuna/admin/embediglink');
       $this->view('fortuna/template/footer');
    }

     public function edit($id){
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Feed IG | '.$data['banner']['judulwebsite'];
     
        $data['feedig']         = $this->model('Feedig_model')->getFeedigById($id);
     

       $this->view('fortuna/template/header', $data);
       $this->view('fortuna/admin/edit-feedig', $data);
       $this->view('fortuna/template/footer');
    }

    public function _prosesedit(){
        $data  = [
                "id"                      => $_POST["id"],
                "listfeed"                => $_POST["listfeed"],
                "link"                    => htmlspecialchars($_POST['link']),
                "tanggalupdate"           => date("Y-m-d H:i:s")
        ];    
        $feedig = $this->model('Feedig_model')->updateFeedig($data);
        if ($feedig) {
              Flasher::setFlash('Data berhasil','diupdate','green');
              header('Location:'.BASEURL.'feedig');
              exit;
          }
        }
     }