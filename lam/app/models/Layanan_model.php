<?php 
class Layanan_model
{
    private $table = 'layanankami';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllLayanan()
    {
        $this->db->query('SELECT * FROM ' . $this->table .' ORDER BY id DESC');
        return $this->db->resultSet();
    }
    public function getLayananById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function updateLayanan($data){
    $query = "UPDATE layanankami SET listlayanankami=:judullayanan, deskripsi=:deskripsi ,gambarlayanan=:gambarLayanan, idtoko=:idtoko, tanggalupdate=:tanggalupdate
    WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('judullayanan', $data['judullayanan']);
    $this->db->bind('gambarLayanan', $data['gambarLayanan']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
    $this->db->execute();
    return $this->db->rowCount();
    }
}