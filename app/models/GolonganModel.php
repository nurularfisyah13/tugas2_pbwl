<?php

class GolonganModel {
	
	private $table = 'tb_golongan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllGolongan()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getGolonganById($gol_id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE gol_id=:gol_id');
		$this->db->bind('gol_id',$gol_id);
		return $this->db->single();
	}

	public function tambahKategori($data)
	{
		$query = "INSERT INTO golongan (gol_nama) VALUES(:gol_nama)";
		$this->db->query($query);
		$this->db->bind('gol_nama',$data['gol_nama']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataGolongan($data)
	{
		$query = "UPDATE golongan SET gol_nama=:gol_nama WHERE gol_id=:gol_id";
		$this->db->query($query);
		$this->db->bind('gol_id',$data['gol_id']);
		$this->db->bind('gol_nama',$data['gol_nama']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteGolongan($gol_id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE gol_id=:gol_id');
		$this->db->bind('gol_id',$gol_id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariGolongan()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE gol_nama LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}