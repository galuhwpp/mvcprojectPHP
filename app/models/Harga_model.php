<?php


class Harga_model
{

    private $table = 'dft_harga';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHarga()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getHargaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' Where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
