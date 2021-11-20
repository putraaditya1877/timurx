<?php 
class Promo_model
{
    private $table = 'promo';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPromo()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function getPromoById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updatePromo($data){

    $query = "UPDATE promo SET gambarpromo=:promo, idtoko=:idtoko, tanggalupdate=:tanggalupdate
    WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', '1');
    $this->db->bind('promo', $data['promo']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    
    $this->db->execute();
    return $this->db->rowCount();

    }
}