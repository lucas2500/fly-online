<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fly_model extends CI_model {


	public function insertUser($dados=NULL){

		if($dados != NULL):

			$this->db->insert('usuario', $dados);
		endif;

	}

	public function insertContato($dados=NULL){

		if($dados != NULL):

			$this->db->insert('email', $dados);
		endif;

	}

	public function consultarEmail($dados=NULL){

		if($dados != NULL):

			$query = $this->db->get_where('email', array('email' => $dados));

			return $query->row();
		endif;

	}

	public function consultarDetalhes($dados=NULL){

		if($dados != NULL):

			$this->db->select('email');
			$this->db->select('telefone');
			$this->db->select('nome');
			$query = $this->db->get_where('email', array('ID' => $dados));

			return $query->row();
		endif;

	}

	public function getCliente(){

		$this->db->select('nome');
		$this->db->select('cadEmail');
		$this->db->select('empresa');
		$this->db->select('permissao');
		$this->db->select('ID');
		$this->db->order_by('nome', 'ASC');
		$query = $this->db->get('usuario');

		return $query->result();

	}

	public function getEmails(){

		$this->db->order_by('nome', 'ASC');
		$query = $this->db->get('email');
		
		return $query->result();	

	}


	public function deleteCliente($ID=NULL){

		if($ID != NULL):
			
			$this->db->delete('usuario', array('ID' => $ID));
		endif;

	}


	public function Logar($email=NULL, $senha=NULL){

		if($email != NULL && $senha != NULL):

			$this->db->where('cadEmail', $email);
			$this->db->where('cadSenha', $senha);
			$query = $this->db->get('usuario');

			return $query->row();

		endif;

	}

	public function insertToken($dados=NULL){

		if($dados != NULL):

			$this->db->insert('Codigos', $dados);
		endif;


	}

	public function checkToken($dados=NULL){

		if($dados != NULL):

			$query = $this->db->get_where('Codigos', array('token'=>$dados));

			return $query->row();
		endif;
	}



	public function deleteToken($dados=NULL){

		if($dados != NULL):

			$this->db->delete('Codigos', array('token'=> $dados));
		endif;

	}

	public function updateSenha($dados=NULL, $email=NULL){

		if($dados != NULL && $email != NUll):

			$this->db->update('usuario', $dados, array('cadEmail'=> $email));
		endif;

	}

	public function validarEmail($dados=NULL){

		if($dados != NULL):

			$this->db->select('cadEmail');
			$query = $this->db->get_where('usuario', array('cadEmail'=> $dados));

			return $query->row();
		endif;

	}

	public function getUser($email=NULL){

		if($email != NULL):

			$this->db->select('nome');
			$query = $this->db->get_where('usuario', array('cadEmail'=>$email));

			return $query->row();
		endif;


	}

}


