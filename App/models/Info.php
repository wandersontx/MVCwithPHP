<?php
namespace App\Models;

class Info{

	protected $db;

	//\PDo -> indica se tratar de uma classe propria do PHP
	public function __construct(\PDO $db){
		$this->db = $db;
	}

	public function getInfo(){
		$query = "select titulo, descricao from tb_info";
		return $this->db->query($query)->fetchAll();
	}
}
?>