<?php 
class Testimoni_model
{
    private $table = 'testimoni';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

     public function getTestimoniById($id){

      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

      $this->db->bind('id', $id);
      return $this->db->single();
  }

    public function getAllTestimoni()
    {
        $this->db->query('SELECT * FROM ' . $this->table .' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function tambahTestimoni($data)
    {
        $query = "INSERT INTO testimoni (nama,perkerjaan,isitestimoni,gambar,idtoko, tanggalbuat) 
                VALUES
                (:nama, :perkerjaan,:testimoni, :gambarTestimoni, :idtoko, :tanggalbuat)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('perkerjaan', $data['perkerjaan']);
        $this->db->bind('testimoni', $data['testimoni']);
        $this->db->bind('gambarTestimoni', $data['gambarTestimoni']);
        $this->db->bind('idtoko', '1');
        $this->db->bind('tanggalbuat', $data['tanggalbuat']);
       

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateTestimoniById($data){

    $query = "UPDATE testimoni SET nama=:nama, perkerjaan=:perkerjaan, isitestimoni=:testimoni, gambar=:gambarTestimoni ,tanggalupdate=:tanggalupdate, idtoko=:idtoko
    WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('perkerjaan', $data['perkerjaan']);
    $this->db->bind('testimoni', $data['testimoni']);
    $this->db->bind('gambarTestimoni', $data['gambarTestimoni']);
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    $this->db->bind('idtoko', '1');
    
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusTestimoniById($id){

      $query = "DELETE FROM " . $this->table . " WHERE id=:id";

     $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
    return $this->db->rowCount();
  }


}