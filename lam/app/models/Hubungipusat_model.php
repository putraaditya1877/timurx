<?php 
class Hubungipusat_model
{
    private $table = 'hubungipusat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

     public function getHubungipusatById(){

      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

      $this->db->bind('id', '1');
      return $this->db->single();
  }

    // public function getAllHubungikami()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }

    // public function tambahHubungikami($data)
    // {
    //     $query = "INSERT INTO hubungikami (nama,alamat,linkwa,gambaroutlate,idtoko, tanggalbuat) 
    //             VALUES
    //             (:nama, :alamat, :link, :fotoOutlet, :idtoko, :tanggalbuat)";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('alamat', $data['alamat']);
    //     $this->db->bind('link', $data['link']);
    //     $this->db->bind('fotoOutlet', $data['fotoOutlet']);
    //     $this->db->bind('idtoko', '1');
    //     $this->db->bind('tanggalbuat', $data['tanggalbuat']);
       

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    public function updateHubungipusatById($data){

    $query = "UPDATE hubungipusat SET nomorwa=:nomorwa ,tanggalupdate=:tanggalupdate, idtoko=:idtoko
    WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', '1');
    $this->db->bind('nomorwa', $data['nomorwa']);
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    $this->db->bind('idtoko', '1');
    
    $this->db->execute();
    return $this->db->rowCount();
  }

//   public function hapusHubungiById($id){

//       $query = "DELETE FROM " . $this->table . " WHERE id=:id";

//      $this->db->query($query);
//       $this->db->bind('id', $id);
//       $this->db->execute();
//     return $this->db->rowCount();
//   }


}