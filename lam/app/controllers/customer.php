<?php
class customer extends Controller
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
        $data['banner']             = $this->model('Home_model')->getBannerById();
        $data['judul']              = 'customer | ' . $data['banner']['judulwebsite'];
        // $id = '1';
        $data['customer']           = $this->model('Customer_model')->getAllCustomer();
        //*BrosurCustomer
        $data['brosurcustomer']     = $this->model('Customer_model')->getAllBrosurCustomer();
        // var_dump($data['customer']);
        $this->view('fortuna/template/header', $data);
        $this->view('fortuna/admin/customer', $data);
        $this->view('fortuna/template/footer');
    }

    public function tambah()
    {
        //*Upload Gambar
        $gambarcustomer         = $_FILES['gambarcustomer']['name'];
        $dirLok                 = BASELOKSAVE . '/assets/upload/customer/';
        $waktu                  = time();
        $path1                  = $_FILES['gambarcustomer']['tmp_name']; //lokasi file awal

        chmod($path1, 0644);
        $type1                  = $_FILES['gambarcustomer']['type']; // tipe file (jpg/jpeg/png/dll)
        $filename1              = $_FILES['gambarcustomer']['name']; //[NamaFile].[TipeFile] (contoh.jpg)

        //*membuat karakter random
        $char2                  = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rendomString2          = substr(str_shuffle($char2), 0, 10);
        $rendomString2          = 'CST-' . $waktu . $rendomString2;

        //*gambarProduk
        rename($path1, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru

        // CompresImage::compressImage($dirLok . $rendomString2, $dirLok . $rendomString2, 70);
        $data  = [
            "namacustomer"            => htmlspecialchars($_POST['namacustomer']),
            "deskripsi"               => htmlspecialchars($_POST['deskripsi']),
            "gambarcustomer"          => $rendomString2,
            "tanggalbuat"             => date("Y-m-d H:i:s")
        ];
        $customer = $this->model('Customer_model')->tambahcustomer($data);
        var_dump($customer);

        if ($customer) {
            Flasher::setFlash('Data berhasil', 'ditambah', 'green');
            header('Location:' . BASEURL . 'customer');
            exit;
        }
    }
    public function edit($id)
    {
        $data['banner']         = $this->model('Home_model')->getBannerById();
        $data['judul']          = 'customer | ' . $data['banner']['judulwebsite'];
        // $id = '1';
        // $data['produk']      = $this->model('Produk_model')->getAllProduk();
        $data['customer']       = $this->model('customer_model')->getCustomerById($id);
        $this->view('fortuna/template/header', $data);
        $this->view('fortuna/admin/detail-customer', $data);
        $this->view('fortuna/template/footer');
    }

    public function _prosesedit()
    {
        $fotocustomer            = $_FILES['fotocustomer']['name'];
        $dirLok                 = BASELOKSAVE . '/assets/upload/customer/';
        $waktu                  = time();
        if ($fotocustomer) {

            //*fotoCustomer
            $path2       = $_FILES['fotocustomer']['tmp_name']; //lokasi file awal
            chmod($path2, 0644);

            $type2       = $_FILES['fotocustomer']['type']; // tipe file (jpg/jpeg/png/dll)
            $filename2   = $_FILES['fotocustomer']['name']; //[NamaFile].[TipeFile] (contoh.jpg)

            //*membuat karakter random
            $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $rendomString2   = substr(str_shuffle($char2), 0, 10);
            $rendomString2   = 'CST-' . $waktu . $rendomString2;

            //*fotoCustomer
            rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
            $data  = [
                "id"                => htmlspecialchars($_POST['id']),
                "namacustomer"      => htmlspecialchars($_POST['namacustomer']),
                "deskripsi"         => htmlspecialchars($_POST['deskripsi']),
                "fotocustomer"      => $rendomString2,
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];
            $detailcustomer = $this->model('Customer_model')->updateDetailCustomer($data);
            if ($detailcustomer) {
                $customerPrev         = $_POST['gambarcustomerPrev'];
                $customerPrev         = $dirLok . $customerPrev;
                unlink($customerPrev);
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:' . BASEURL . 'customer');
                exit;
            }
        } else {
            $data  = [
                "id"                => htmlspecialchars($_POST['id']),
                "namacustomer"      => htmlspecialchars($_POST['namacustomer']),
                "deskripsi"         => htmlspecialchars($_POST['deskripsi']),
                "fotocustomer"      => htmlspecialchars($_POST['gambarcustomerPrev']),
                "tanggalupdate"     => date("Y-m-d H:i:s")
            ];

            //die();

            $detailcustomer = $this->model('Customer_model')->updateDetailCustomer($data);
            if ($detailcustomer) {
                Flasher::setFlash('Data berhasil', 'diupdate', 'green');
                header('Location:' . BASEURL . 'customer');
                exit;
            }
        }
    }

    public function hapus($id)
    {
        $dirLok                     = BASELOKSAVE . './assets/upload/customer/';
        $data['detailcustomer']     = $this->model('customer_model')->getCustomerById($id);
        $customer = $this->model('customer_model')->hapusCustomerById($id);
        if ($customer) {
            $fotocustomer           = $data['detailcustomer']['gambarcustomer'];
            $fotocustomer           = $dirLok . $fotocustomer;
            unlink($fotocustomer);
            Flasher::setFlash('Data berhasil', 'dihapus', 'red');
            header('Location:' . BASEURL . 'customer');
            exit;
        }
    }

    public function editBrosur()
    {
        //$brosurProduk            = $_FILES['brosurProduk']['name'];
        $fileB = (object) @$_FILES['brosurcustomer'];

        //cek ukuran file
        if ($fileB->size >= 1048576) {
            Flasher::setFlash('File Brosur tidak boleh lebih', 'dari 1MB', 'red');
            header('Location:' . BASEURL . 'customer');
            exit;
        }
        $dirLok                 = BASELOKSAVE . '/assets/upload/brosur/';
        $waktu                  = time();

        //*fotoProduk
        $path2       = $_FILES['brosurcustomer']['tmp_name']; //lokasi file awal
        chmod($path2, 0644);
        $type2       = $_FILES['brosurcustomer']['type']; // tipe file (jpg/jpeg/png/dll)
        $filename2   = $_FILES['brosurcustomer']['name']; //[NamaFile].[TipeFile] (contoh.jpg)

        //*membuat karakter random
        $char2           = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rendomString2   = substr(str_shuffle($char2), 0, 10);
        $rendomString2   = 'BRS-' . $waktu . $rendomString2;

        //*brosurProduk
        rename($path2, $dirLok . $rendomString2); //ubah nama file dan pindahkan fil dari tmp ke folder baru
        $data  = [
            "id"                => htmlspecialchars($_POST['id']),
            "brosurcustomer"    => $rendomString2,
            "tanggalupdate"     => date("Y-m-d H:i:s")
        ];
        $brosurcustomer = $this->model('customer_model')->updateBrosurCustomer($data);
        if ($brosurcustomer) {
            $customerPrev         = $_POST['filebrosur'];
            $customerPrev         = $dirLok . $customerPrev;
            unlink($customerPrev);
            Flasher::setFlash('Data Brosur berhasil', 'diupdate', 'green');
            header('Location:' . BASEURL . 'customer');
            exit;
        }
    }
}
