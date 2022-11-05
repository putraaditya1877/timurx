<?php 
class Web extends Controller{
    public function index(){
        $data['banner']     = $this->model('Home_model')->getBannerById();
        $data['judul']      = $data['banner']['judulwebsite'];

        //*Brosur
        $data['brosur']      = $this->model('Produk_model')->getAllBrosurProduk();

        //*Get Data Dari Model TENTANG KAMI 
       $data['tentangkami']      = $this->model('Tentangkami_model')->getTentangkami();
      
       //*Get Data Dari Model PROMO
      $data['promo']      = $this->model('Promo_model')->getAllPromo();

        //*Get Data Dari Model Produk_model
         $data['produk']   = $this->model('Produk_model')->getAllProduk();
      //   var_dump($data['produk']);

      //*Get Data Dari Model topcustomer_model
      $data['topcustomer']   = $this->model('topcustomer_model')->getAllstatustopCustomer();
      //   var_dump($data['topcustomer']);

      //*Get Data Dari Model customer_model
      $data['customer']   = $this->model('Customer_model')->getAllCustomer();
      //   var_dump($data['customer']);

         //*Get Data Dari Model Layanan_model
        $data['layanan']         = $this->model('Layanan_model')->getAllLayanan();
  
        //*Get Data Dari Model Testimoni
        $data['testimoni']      = $this->model('Testimoni_model')->getAllTestimoni();

        //*Get Data Dari Model Sosial Media
        $data['sosmed']      = $this->model('Sosmed_model')->getAllSosmedJoin();

        //*Get Data Dari FEED INSTAGRAM 
        $data['feedig']      = $this->model('Feedig_model')->getAllFeedig();
        
        //*Get Data Dari HUBUNGI KAMI 
        $data['hubungikami'] = $this->model('Hubungikami_model')->getAllHubungikami();

        //*Get Data Dari HUBUNGI PUSAT 
        $data['hubungipusat'] = $this->model('Hubungipusat_model')->getHubungipusatById();

        $this->view('fortuna/index', $data);
    }
}