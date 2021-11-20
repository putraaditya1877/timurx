<?php 
class Home_model{ 
 private $table = 'banner';
   private $db;
   public function __construct(){
        $this->db = new Database;
   }
  public function getBannerById(){
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', '1');
      return $this->db->single();
  }
  public function updateBanner($data){
    $query = "UPDATE banner SET judulwebsite=:judulwebsite, iconperusahaan=:iconperusahaan, logoperusahaan=:logoperusahaan, idtoko=:idtoko, tanggalupdate=:tanggalupdate  
    WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', '1');
    $this->db->bind('judulwebsite', $data['judulwebsite']);
    $this->db->bind('iconperusahaan', $data['iconperusahaan']);
    $this->db->bind('logoperusahaan', $data['logoperusahaan']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);  

    $this->db->execute();
    return $this->db->rowCount();
  } 

  public function updateBanner1($data){
    $query = "UPDATE banner SET judulbanner=:judul, subjudul=:subjudul, deskripsi=:deskripsi, fotobackground=:fotobg, idtoko=:idtoko, tanggalupdate=:tanggalupdate  
    WHERE id=:id";
    $this->db->query($query);
    // $this->db->bind('id', $data['id']);
    $this->db->bind('id', '1');
    $this->db->bind('judul', $data['judul']);
    $this->db->bind('subjudul', $data['subjudul']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('fotobg', $data['fotobg']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);  

    $this->db->execute();
    return $this->db->rowCount();
  }



}