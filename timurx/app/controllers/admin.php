<?php 
class admin extends Controller{

   
    public function index(){
        $data['judul']      = 'Login';
       $this->view('auth/login', $data);
    }
      function _login()
    {
       
        $email      = $_POST['email'];
        $password   = md5($_POST['password']);

        //Parsing ke model untuk dicek
        $user           = $this->model('AuthFS_model')->cekUser($email, $password);
        $userSession    = $this->model('AuthFS_model')->setSession($email, $password);
        
        // var_dump($userSession[0]['idtoko']);
        // die();
        if ($user) {
            // Cek idwebsite
                // echo 'ini website Fortuna';
                $_SESSION['nama']        = $userSession[0]['nama'];
                $_SESSION['userid']      = $userSession[0]['iduser'];
                $_SESSION['email']       = $userSession[0]['email'];
                $_SESSION['idtoko']      = '1';
                $_SESSION['status']      = 'logged';          
                if ( $_SESSION['idtoko']    == '1' && $_SESSION['status']  == 'logged' ) {
                
                    header('Location:'.BASEURL.'home');
                }
         }else {
            Flasher::setFlash('Email atau passowrd','salah','red');
            header('Location:'.BASEURL.'admin');
        }
    }
    
    public function logout() {
        unset($_SESSION['idtoko']);
        unset($_SESSION['nama']);
        unset($_SESSION['userid']);
        unset($_SESSION['email']);
        unset($_SESSION['status']);
        Flasher::setFlash('Anda berhasil','logout','red');
        header('Location:'.BASEURL.'admin');

    }

}