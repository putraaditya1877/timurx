<?php 
class Tentangkami_model
{
    private $table = 'tentangkami';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

     public function getTentangKamiById($id){

      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

      $this->db->bind('id', $id);
      return $this->db->single();
  }

    public function getTentangkami()
    {
        $this->db->query('SELECT * FROM ' . $this->table .' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function tambahTentangKami($data)
    {
        $query = "INSERT INTO tentangkami (baris,isikonten,fotolayanan,idtoko, tanggalbuat) 
                VALUES
                (:cek,:deskripsi, :fotoLayanan, :idtoko, :tanggalbuat)";

        $this->db->query($query);
        $this->db->bind('cek', $data['cek']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('fotoLayanan', $data['fotoLayanan']);
        $this->db->bind('idtoko', '1');
        $this->db->bind('tanggalbuat', $data['tanggalbuat']);
       
      

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateTentangById($data){

    $query = "UPDATE tentangkami SET baris=:cek, isikonten=:deskripsi, fotolayanan=:fotoLayanan, tanggalupdate=:tanggalupdate, idtoko=:idtoko
    WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('cek', $data['cek']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('fotoLayanan', $data['fotoLayanan']);
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    $this->db->bind('idtoko', '1');
    
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusById($id){

      $query = "DELETE FROM " . $this->table . " WHERE id=:id";
      
     $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
    return $this->db->rowCount();
  }


}