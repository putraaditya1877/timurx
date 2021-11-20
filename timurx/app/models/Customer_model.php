<?php 
class Customer_model
{
    private $table = 'customer';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllCustomer()
    {
        $this->db->query('SELECT * FROM ' . $this->table .' ORDER BY id DESC');
        return $this->db->resultSet();
    }
   
    public function getCustomerById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
   
    public function tambahCustomer($data)
    {
        $query = "INSERT INTO customer (namacustomer, deskripsi, gambarcustomer, idtoko, tanggalbuat) 
                VALUES (:namacustomer, :deskripsi, :gambarcustomer, :idtoko, :tanggalbuat)";
        $this->db->query($query);
        $this->db->bind('namacustomer', $data['namacustomer']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambarcustomer', $data['gambarcustomer']);
        $this->db->bind('idtoko', '1');
        $this->db->bind('tanggalbuat', $data['tanggalbuat']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function updateDetailCustomer($data){
    $query = "UPDATE customer SET namacustomer=:namacustomer, deskripsi=:deskripsi, gambarcustomer=:fotocustomer, idtoko=:idtoko, tanggalupdate=:tanggalupdate
    WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('namacustomer', $data['namacustomer']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('fotocustomer', $data['fotocustomer']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);

    $this->db->execute();
    return $this->db->rowCount();
    }
    
    public function hapusCustomerById($id){
      $query = "DELETE FROM " . $this->table . " WHERE id=:id";
     $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
    return $this->db->rowCount();
  }
  
  //*BrosurProduk
  public function getAllBrosurCustomer()
    {
        $this->db->query('SELECT * FROM brosur WHERE idtoko="1" ORDER BY id DESC');
        return $this->db->resultSet();
    }
    public function updateBrosurCustomer($data){
    $query = "UPDATE brosur SET filebrosur=:brosurcustomer, idtoko=:idtoko, tanggalupdate=:tanggalupdate
    WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('brosurcustomer', $data['brosurcustomer']);
    $this->db->bind('idtoko', '1');
    $this->db->bind('tanggalupdate', $data['tanggalupdate']);

    $this->db->execute();
    return $this->db->rowCount();
    }
}