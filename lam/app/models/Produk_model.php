<?php 
class Produk_model
{
    private $table = 'produk';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
     public function getAllProduk()
    {
        $this->db->query('SELECT * FROM ' . $this->table .' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getProdukById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahProduk($data)
    {
        $query = "INSERT INTO produk (namaproduk,deskripsi,gambarproduk,idtoko, tanggalbuat) 
                VALUES
                (:namaproduk, :deskripsi,:gambarProduk, :idtoko, :tanggalbuat)";
        $this->db->query($query);
        $this->db->bind('namaproduk', $data['namaproduk']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambarProduk', $data['gambarProduk']);
        $this->db->bind('idtoko', '1');
        $this->db->bind('tanggalbuat', $data['tanggalbuat']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDetailProduk($data){
    $query = "UPDATE produk SET namaproduk=:namaproduk, deskripsi=:deskripsi, gambarproduk=:fotoProduk, idtoko=:idtoko, tanggalupdate=:tanggalupdate
    WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('namaproduk', $data['namaproduk']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('fotoProduk', $data['fotoProduk']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);

    $this->db->execute();
    return $this->db->rowCount();
    }

    public function hapusProdukById($id){
      $query = "DELETE FROM " . $this->table . " WHERE id=:id";
     $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
    return $this->db->rowCount();
  }

  //*BrosurProduk
  public function getAllBrosurProduk()
    {
        $this->db->query('SELECT * FROM brosur WHERE idtoko="1" ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function updateBrosurProduk($data){
    $query = "UPDATE brosur SET filebrosur=:brosurProduk, idtoko=:idtoko, tanggalupdate=:tanggalupdate
    WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('brosurProduk', $data['brosurProduk']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);
 
    $this->db->execute();
    return $this->db->rowCount();
    }
}