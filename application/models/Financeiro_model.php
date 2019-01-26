<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro_model extends CI_model {

	public function insertContrato($dados=NULL){

		if($dados != NULL):

			$this->db->insert('contrato', $dados);

			$this->db->cache_delete_all();
		endif;

	}


	public function insertPagamento($dados=NULL){

		if($dados != NULL):

			$this->db->insert('pagamento', $dados);

			$this->db->cache_delete_all();
		endif;

	}

	public function insertConta($dados=NULL){

		if($dados != NULL):

			$this->db->insert('contasPagar', $dados);

			$this->db->cache_delete_all();
		endif;

	}

	public function insertRendimento($dados=NULL){

		if($dados != NULL):

			$this->db->insert('rendimentoMensal', $dados);

			$this->db->cache_delete_all();
		endif;
	}


	public function getContratos(){

		$this->db->cache_on();

		$this->db->select('empresa');
		$this->db->select('ID');
		$this->db->select('comprovante');
		$this->db->select('nomeContrato');
		$this->db->order_by('empresa', 'ASC');
		
		$query = $this->db->get('contrato');

		return $query->result();

		$this->db->cache_off();

	}


	public function getContrato($ID=NULL){

		if($ID != NULL):

			$this->db->select('emailEmpresa');
			$this->db->select('telEmpresa');
			$this->db->select('celular1');
			$this->db->select('celular2');
			$this->db->select('nomeContrato');
			$this->db->select('dtContrato');
			$this->db->select('dtVencimento');

			$query = $this->db->get_where('contrato', array('ID' => $ID));

			return $query->row();
		endif;
	}

	public function getPagamentos(){

		$this->db->cache_on();

		$this->db->order_by('ID', 'DESC');

		$query = $this->db->get('pagamento');

		return $query->result();

		$this->db->cache_off();

	}
	

	public function getPagamento($ID=NULL){

		if($ID != NULL):

			$this->db->select('nEmpresa');
			$this->db->select('valor');
			$query = $this->db->get_where('pagamento', array('ID' => $ID));

			return $query->row();
		endif;

	}

	public function getContas(){

		$this->db->cache_on();

		$this->db->order_by('ID', 'DESC');
		$query = $this->db->get('contasPagar');

		return $query->result();

		$this->db->cache_off();
	}


	public function consultRecibo($ID=NULL){

		if($ID != NULL):

			$this->db->select('recibo');

			$query = $this->db->get_where('pagamento', array('ID' => $ID));

			return $query->row();
		endif;

	}


	public function consultContrato($ID=NULL){

		if($ID != NULL):

			$this->db->select('comprovante');

			$query = $this->db->get_where('contrato', array('ID' => $ID));

			return $query->row();
		endif;

	}

	public function encerrarContrato($ID=NULL){

		if($ID  != NULL):

			$this->db->where('ID', $ID);
			$this->db->delete('contrato');

			$this->db->cache_delete_all();
		endif;
	}


	public function consultCompra($ID=NULL){

		if($ID != NULL):

			$this->db->select('reciboCompra');
			$this->db->where('ID', $ID);

			$query = $this->db->get('contasPagar');

			return $query->row();
		endif;
	}

	public function getRendimento(){

		$this->db->cache_on();

		$this->db->order_by('ID', 'DESC');
		$this->db->select('dtLancamento');
		$this->db->select('totalMensal');
		$this->db->select('statusMensal');

		$query = $this->db->get('rendimentoMensal');

		return $query->result();

		$this->db->cache_off();
	}
}


