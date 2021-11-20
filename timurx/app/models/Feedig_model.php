<?php 
class Feedig_model
{
    private $table = 'feedig';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllFeedig()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
 
     public function getFeedigById($id){

      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

      $this->db->bind('id', $id);
      return $this->db->single();
  }




    public function updateFeedig($data){

    $query = "UPDATE feedig SET listfeed=:listfeed, embedlink=:link,tanggalupdate=:tanggalupdate, idtoko=:idtoko
    WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('listfeed', $data['listfeed']);
    $this->db->bind('link', $data['link']);
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    $this->db->bind('idtoko', '1');
    
    $this->db->execute();
    return $this->db->rowCount();
  }

  


}