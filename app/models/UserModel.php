<?php

class UserModel {
	
	private $table = 'tb_users';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getUserById($user_id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id');
		$this->db->bind('user_id',$user_id);
		return $this->db->single();
	}

	public function tambahUser($data)
	{
		$query = "INSERT INTO tb_users (user_email,user_password,user_nama,user_alamat,user_hp,user_pos,user_role,user_aktif) VALUES(:user_email,:user_password,:user_nama,:user_alamat,:user_hp,:user_pos,:user_role,:user_aktif)";
		$this->db->query($query);
		$this->db->bind('user_email',$data['user_email']);
		$this->db->bind('user_password',md5($data['user_password']));
		$this->db->bind('user_nama', $data['user_nama']);
		$this->db->bind('user_alamat', $data['user_alamat']);
		$this->db->bind('user_hp', $data['user_hp']);
		$this->db->bind('user_pos', $data['user_role']);
		$this->db->bind('user_aktif', $data['user_aktif']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cekUsername(){
		$user_email = $_POST['user_email'];
		$this->db->query("SELECT * FROM tb_users WHERE user_email = :user_email");
		$this->db->bind('user_email', $user_email);
		return $this->db->single();
	}

	public function updateDataUser($data)
	{
		if(empty($_POST['password'])) {
			$query = "UPDATE tb_users SET user_nama=:user_nama WHERE user_id=:user_id";
			$this->db->query($query);
			$this->db->bind('user_id',$data['user_id']);
			$this->db->bind('user_nama',$data['user_nama']);
		} else {
			$query = "UPDATE user SET nama=:nama, password=:password WHERE user_id=:user_id";
			$this->db->query($query);
			$this->db->bind('user_id',$data['user_id']);
			$this->db->bind('user_email',$data['user_email']);
		    $this->db->bind('user_password',md5($data['user_password']));
		    $this->db->bind('user_nama', $data['user_nama']);
		    $this->db->bind('user_alamat', $data['user_alamat']);
		    $this->db->bind('user_hp', $data['user_hp']);
		    $this->db->bind('user_pos', $data['user_role']);
		    $this->db->bind('user_aktif', $data['user_aktif']);
		}
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteUser($user_id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE user_id=:user_id');
		$this->db->bind('user_id',$user_id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariUser()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}