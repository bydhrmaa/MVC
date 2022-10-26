<?php

class Example_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM nama_tabel;");
        return $this->db->resultSet();
    }

    public function tambah($data)
    {
        $query = "INSERT INTO nama_tabel VALUES ('', field2, field3)";

        $this->db->query($query);
        $this->db->bind('field2', $data['form2']);
        $this->db->bind('field3', $data['form3']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubah($data)
    {
        $query = "UPDATE nama_tabel SET field1 = :form1, field2 = :form2, field3 = :form3 WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('field1', $data['form1']);
        $this->db->bind('field2', $data['form2']);
        $this->db->bind('field3', $data['form3']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM nama_tabel WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
