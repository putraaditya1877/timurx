<?php 
class produk extends Controller
{
    public function __construct()
    {
        if ($_SESSION['idtoko'] != '1' && $_SESSION['status'] != 'logged') {
            //    Flasher::setFlash('Session anda telah','habis','red');
            header('Location:'.BASEURL);
        }
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Produk | '.$data['banner']['judulwebsite'];
        // $id = '1';
        $data['produk']         = $this->model('Produk_model')->getAllProduk();
        //*BrosurProduk
        $data['brosurProduk']   = $this->model('Produk_model')->getAllBrosurProduk();

        // var_dump($data['produk']);
        $this->view('fortuna/template/header', $data);
        $this->view('fortuna/admin/produk', $data);
        $this->view('fortuna/template/footer');
    }

    public function tambah()
    {
        //*Upload Gambar
        $gambarProduk          = $_FILES['gambarProduk']['name'];
        $dirLok                = BASELOKSAVE.'/assets/upload/produk/';
        $waktu                 = time();
        $path1                 = $_FILES['gambarProduk']['tmp_name']; //lokasi file awal
        chmod($path1, 0644);
        $type1                 = $_FILES['gambarProduk']['type']; // tipe file (jpg/jpeg/png/dll)
        $filename1             = $_FILES['gambarProduk']['name']; //[NamaFile].[TipeFile] (contoh.jpg)

        //*membuat karakter random
        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rendomString2   = substr(str_shuffle($char2), 0, 10);
        $rendomString2   = 'PRD-' . $waktu . $rendomString2;

        //*gambarProduk
        rename($path1, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        // CompresImage::compressImage($dirLok . $rendomString2, $dirLok . $rendomString2, 70);
        $data  = [
                        "namaproduk"              => htmlspecialchars($_POST['namaproduk']),
                        "deskripsi"               => htmlspecialchars($_POST['deskripsi']),
                        "gambarProduk"            => $rendomString2,
                        "tanggalbuat"             => date("Y-m-d H:i:s")
        ];
        $produk = $this->model('Produk_model')->tambahProduk($data);
        if ($produk) {
            Flasher::setFlash('Data berhasil', 'ditambah', 'green');
            header('Location:'.BASEURL.'produk');
            exit;
        }
    }

    public function edit($id)
    {
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'Produk | '.$data['banner']['judulwebsite'];
        // $id = '1';
        // $data['produk']         = $this->model('Produk_model')->getAllProduk();
        $data['produk']         = $this->model('Produk_model')->getProdukById($id);
        $this->view('fortuna/template/header', $data);
        $this->view('fortuna/admin/detail-produk', $data);
        $this->view('fortuna/template/footer');
    }

    public function _prosesedit()
    {
        $fotoProduk            = $_FILES['fotoProduk']['name'];
        $dirLok                 = BASELOKSAVE.'/assets/upload/';
        $waktu                  = time();
        if ($fotoProduk) {

            //*fotoProduk
        $path2       = $_FILES['fotoProduk']['tmp_name']; //lokasi file awal
        chmod($path2, 0644);
        $type2       = $_FILES['fotoProduk']['type']; // tipe file (jpg/jpeg/png/dll)
        $filename2   = $_FILES['fotoProduk']['name']; //[NamaFile].[TipeFile] (contoh.jpg)

        //*membuat karakter random
            $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString2   = substr(str_shuffle($char2), 0, 10);
            $rendomString2   = 'PRD-' . $waktu . $rendomString2;

            //*fotoProduk
        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
        $data  = [
                "id"                => htmlspecialchars($_POST['id']),
                "namaproduk"        => htmlspecialchars($_POST['namaproduk']),
                "deskripsi"         => htmlspecialchars($_POST['deskripsi']),
                "fotoProduk"        => $rendomString2,
                "tanggalupdate"     => date("Y-m-d H:i:s")
        ];
            $detailProduk = $this->model('Produk_model')->updateDetailProduk($data);
            if ($detailProduk) {
                $produkPrev         = $_POST['gambarprodukPrev'];
                $produkPrev         = $dirLok . $produkPrev;
                unlink($produkPrev); //hapus dan mengganti gambar yang baru
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:'.BASEURL.'produk');
                exit;
            }
        } else {
            $data  = [
                "id"                => htmlspecialchars($_POST['id']),
                "namaproduk"        => htmlspecialchars($_POST['namaproduk']),
                "deskripsi"         => htmlspecialchars($_POST['deskripsi']),
                "fotoProduk"        => htmlspecialchars($_POST['gambarprodukPrev']),
                "tanggalupdate"     => date("Y-m-d H:i:s")
        ];
            $detailProduk = $this->model('Produk_model')->updateDetailProduk($data);
            if ($detailProduk) {
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:'.BASEURL.'produk');
                exit;
            }

        }

    }

    public function hapus($id)
    {
        $dirLok                 = BASELOKSAVE.'/assets/upload/produk/';
        $data['detailProduk']   = $this->model('Produk_model')->getProdukById($id);
        $produk = $this->model('Produk_model')->hapusProdukById($id);  
        if ($produk) {
            $fotoproduk          = $data['detailProduk']['gambarproduk'];
            $fotoproduk          = $dirLok . $fotoproduk;
            unlink($fotoproduk);
            Flasher::setFlash('Data berhasil', 'dihapus', 'red');
            header('Location:'.BASEURL.'produk');
            exit;
        }
    }

    public function editBrosur()
   {
        //$brosurProduk            = $_FILES['brosurProduk']['name'];
        $fileB = (object) @$_FILES['brosurProduk'];
        //cek ukuran file
        if ($fileB->size >= 1048576 ) {
              Flasher::setFlash('File Brosur tidak boleh lebih', 'dari 1MB', 'red');
                header('Location:'.BASEURL.'produk');
                exit;  
        }
  
        $dirLok                 = BASELOKSAVE.'/assets/upload/brosur/';
        $waktu                  = time();

        //*fotoProduk
        $path2       = $_FILES['brosurProduk']['tmp_name']; //lokasi file awal
         chmod($path2, 0644);
        $type2       = $_FILES['brosurProduk']['type']; // tipe file (jpg/jpeg/png/dll)
        $filename2   = $_FILES['brosurProduk']['name']; //[NamaFile].[TipeFile] (contoh.jpg)

        //*membuat karakter random
            $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString2   = substr(str_shuffle($char2), 0, 10);
            $rendomString2   = 'BRS-' . $waktu . $rendomString2;

            //*brosurProduk
        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
        $data  = [
                "id"                => htmlspecialchars($_POST['id']),
                "brosurProduk"        => $rendomString2,
                "tanggalupdate"     => date("Y-m-d H:i:s")
        ];
            $brosurProduk = $this->model('Produk_model')->updateBrosurProduk($data);
            if ($brosurProduk) {
                $produkPrev         = $_POST['filebrosur'];
                $produkPrev         = $dirLok . $produkPrev;
                unlink($produkPrev);
                Flasher::setFlash('Data Brosur berhasil', 'diupdate', 'green');
                header('Location:'.BASEURL.'produk');
                exit;
            }
    }
}