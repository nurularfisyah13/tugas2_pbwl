<?php

class PelangganModel {
	
	private $table = 'tb_pelanggan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPelanggan()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getPelangganById($pel_id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE pel_id=:pel_id');
		$this->db->bind('pel_id',$pel_id);
		return $this->db->single();
	}

	public function tambahPelanggan($data)
	{
		$query = "INSERT INTO pelanggan (pel_id_gol, pel_no, pel_nama, pel_alamat, pel_hp, pel_ktp, pel_seri, pel_meteran, pel_id_user) VALUES(:pel_id_gol, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_id_user)";
		$this->db->query($query);
		$this->db->bind('pel_id_gol', $data['pel_id_gol']);
		$this->db->bind('pel_no', $data['pel_no']);
		$this->db->bind('pel_nama', $data['pel_nama']);
		$this->db->bind('pel_alamat', $data['pel_alamat']);
		$this->db->bind('pel_hp', $data['pel_hp']);
		$this->db->bind('pel_ktp', $data['pel_ktp']);
		$this->db->bind('pel_seri', $data['pel_seri']);
		$this->db->bind('pel_meteran', $data['pel_meteran']);
		$this->db->bind('pel_id_user', $data['pel_id_user']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataPelanggan($data)
	{
		$query = "UPDATE pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_id_user=:pel_id_user WHERE pel_id=:pel_id";
		$this->db->query($query);
		$this->db->bind('pel_id',$data['pel_id']);
		$this->db->bind('pel_id_gol', $data['pel_id_gol']);
		$this->db->bind('pel_no', $data['pel_no']);
		$this->db->bind('pel_nama', $data['pel_nama']);
		$this->db->bind('pel_alamat', $data['pel_alamat']);
		$this->db->bind('pel_hp', $data['pel_hp']);
		$this->db->bind('pel_ktp', $data['pel_ktp']);
		$this->db->bind('pel_seri', $data['pel_seri']);
		$this->db->bind('pel_meteran', $data['pel_meteran']);
		$this->db->bind('pel_id_user', $data['pel_id_user']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deletePelanggan($pel_id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE pel_id=:pel_id');
		$this->db->bind('pel_id',$pel_id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariPelanggan()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}