<?php

class Mahasiswa_model {

    private $table = 'mahasiswa';
    private $db;

public function __construct()
{
    $this->db = new database;
}

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultset();
    }
    public function getAllMahasiswaById($id)
{
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
}

    public function tambahdatamahasiswa($data)
    {
        $query = " INSERT INTO  mahasiswa VALUES('', :nama, :Nim, :prodi)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('Nim', $data['Nim']);
        $this->db->bind('prodi', $data['prodi']);

        $this->db->execute();

        return  $this->db->rowCount();
    }

}