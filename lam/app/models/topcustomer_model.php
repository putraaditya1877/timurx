<?php 
class topcustomer_model
{
    private $table = 'customer';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllstatustopCustomer()
    {
        $this->db->query('SELECT * FROM ' . $this->table .' WHERE statustop="1"');
        return $this->db->resultSet();
    }
    
    public function getAllstatustopCustomer2()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function gettopCustomerById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // public function getCustomerBystatustop($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE statustop=."1"');
    //     $this->db->bind('statustop', $id);
    //     return $this->db->single();
    // }

    public function updateDetailtopCustomer($data){
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
        public function gettopCustomerByIdx($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE namacustomer=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    }