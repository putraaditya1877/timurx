<?php
class home extends Controller
{
    public function __construct()
    {
        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {
            //    Flasher::setFlash('Session anda telah','habis','red');
            header('Location:' . BASEURL);
        }
        date_default_timezone_set("Asia/Jakarta");
    }
    public function index()
    {
        $data['banner']     = $this->model('Home_model')->getBannerById();
        $data['judul']      = 'Dashboard | ' . $data['banner']['judulwebsite'];
        $this->view('fortuna/template/header', $data);
        $this->view('fortuna/admin/index', $data);
        $this->view('fortuna/template/footer');
    }
    public function edit()
    {
        //*Upload Gambar
        $logoperusahaan         = $_FILES['logoperusahaan']['name'];
        $iconperusahaan         = $_FILES['iconperusahaan']['name'];
        $dirLok                 = BASELOKSAVE . '/assets/upload/';
        $waktu                  = time();
        if ($logoperusahaan && $iconperusahaan) {
            //*logoperusahaan
            $path1       = $_FILES['logoperusahaan']['tmp_name']; //lokasi file awal
            chmod($path1, 0644);
            $type1       = $_FILES['logoperusahaan']['type']; // tipe file (jpg/jpeg/png/dll)
            $filename1   = $_FILES['logoperusahaan']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 
            //*iconperusahaan
            $path2       = $_FILES['iconperusahaan']['tmp_name']; //lokasi file awal
            chmod($path2, 0644);
            $type2       = $_FILES['iconperusahaan']['type']; // tipe file (jpg/jpeg/png/dll)
            $filename2   = $_FILES['iconperusahaan']['name']; //[NamaFile].[TipeFile] (contoh.jpg)
            //*membuat karakter random
            $char1           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString1   = substr(str_shuffle($char1), 0, 10);
            $rendomString1   = 'LG-' . $waktu . $rendomString1;
            //*membuat karakter random
            $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString2   = substr(str_shuffle($char2), 0, 10);
            $rendomString2   = 'IP-' . $waktu . $rendomString2;
            //*FOTO1
            rename($path1, $dirLok . $rendomString1); //ubah nama file dan pindahkan fil dari tmp ke folder baru
            // CompresImage::compressImage($dirLok . $rendomString1, $dirLok . $rendomString1, 50); //Kompres file dari Temporary ke   
            //*FOTO2
            rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
            // CompresImage::compressImage($dirLok . $rendomString2, $dirLok . $rendomString2, 50); //Kompres file dari Temporary ke 
            $data  = [
                //    "id"                 => $_POST['id'],
                "judulwebsite"       => $_POST['judulwebsite'],
                "logoperusahaan"     => $rendomString1,
                "iconperusahaan"     => $rendomString2,
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];
            $banner = $this->model('Home_model')->updateBanner($data);
            if ($banner) {
                $logoP         = $_POST['logopPrev'];
                $iconP         = $_POST['iconpPrev'];
                $logoPHapus    = $dirLok . $logoP;
                $iconPHapus    = $dirLok . $iconP;
                unlink($logoPHapus);
                unlink($iconPHapus);
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:' . BASEURL . 'home');
                exit;
            }
        } else if ($logoperusahaan) {
            //*logoperusahaan
            $path1       = $_FILES['logoperusahaan']['tmp_name']; //lokasi file awal
            chmod($path1, 0644);
            $type1       = $_FILES['logoperusahaan']['type']; // tipe file (jpg/jpeg/png/dll)
            $filename1   = $_FILES['logoperusahaan']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 
            //*membuat karakter random
            $char1           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString1   = substr(str_shuffle($char1), 0, 10);
            $rendomString1   = 'LG-' . $waktu . $rendomString1;
            //*logoperusahaan
            rename($path1, $dirLok . $rendomString1); //ubah nama file dan pindahkan fil dari tmp ke folder baru
            $data  = [
                //   "id"                 => $_POST['id'],
                "judulwebsite"       => $_POST['judulwebsite'],
                "logoperusahaan"     => $rendomString1,
                "iconperusahaan"     => $_POST['iconpPrev'],
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];
            $banner = $this->model('Home_model')->updateBanner($data);
            if ($banner) {
                $logoP         = $_POST['logopPrev'];
                $logoPHapus    = $dirLok . $logoP;
                unlink($logoPHapus);
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:' . BASEURL . 'home');
                exit;
            }
        } elseif ($iconperusahaan) {
            //*iconperusahaan
            $path2       = $_FILES['iconperusahaan']['tmp_name']; //lokasi file awal
            chmod($path2, 0644);
            $type2       = $_FILES['iconperusahaan']['type']; // tipe file (jpg/jpeg/png/dll)
            $filename2   = $_FILES['iconperusahaan']['name']; //[NamaFile].[TipeFile] (contoh.jpg) 
            //*membuat karakter random
            $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString2   = substr(str_shuffle($char2), 0, 10);
            $rendomString2   = 'IP-' . $waktu . $rendomString2;
            //*iconperusahaan
            rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
            $data  = [
                //    "id"                 => $_POST['id'],
                "judulwebsite"       => $_POST['judulwebsite'],
                "logoperusahaan"     => $_POST['logopPrev'],
                "iconperusahaan"     => $rendomString2,
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];
            $banner = $this->model('Home_model')->updateBanner($data);
            if ($banner) {
                $iconP         = $_POST['iconpPrev'];
                $iconPHapus    = $dirLok . $iconP;
                unlink($iconPHapus);
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:' . BASEURL . 'home');
                exit;
            }
        } else {
            $data  = [
                //  "id"                 => $_POST['id'],
                "judulwebsite"       => $_POST['judulwebsite'],
                "logoperusahaan"     => $_POST['logopPrev'],
                "iconperusahaan"     => $_POST['iconpPrev'],
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];
            $banner = $this->model('Home_model')->updateBanner($data);
            if ($banner) {
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:' . BASEURL . 'home');
                exit;
            }
        }
    }
}
