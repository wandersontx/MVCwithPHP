<?php
namespace App\Models;

class Produto{

	protected $db;

	//\PDo -> indica se tratar de uma classe propria do PHP
	public function __construct(\PDO $db){
		$this->db = $db;
	}

	public function getProdutos(){
		$query = "select id, descricao, preco from tb_produtos";
		return $this->db->query($query)->fetchAll();
	}
}

?>