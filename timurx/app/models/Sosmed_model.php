<?php 
class Sosmed_model
{
    private $table = 'sosialmedia';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllSosmed()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    //*Join ke table icons untuk tampilkan ke web
     public function getAllSosmedJoin()
    {
        $this->db->query('SELECT * FROM sosialmedia JOIN iconsosmed ON (sosialmedia.iconsosmed=iconsosmed.id)');
        return $this->db->resultSet();
    }
 
     public function getSosmedById($id){

      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

      $this->db->bind('id', $id);
      return $this->db->single();
  }




    public function updateSosmed($data){

    $query = "UPDATE sosialmedia SET iconsosmed=:iconsosmed, namaakun=:akun, link=:link,tanggalupdate=:tanggalupdate, idtoko=:idtoko
    WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('iconsosmed', $data['iconsosmed']);
    $this->db->bind('akun', $data['akun']);
    $this->db->bind('link', $data['link']);
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    $this->db->bind('idtoko', '1');
    
    $this->db->execute();
    return $this->db->rowCount();
  }

  


}