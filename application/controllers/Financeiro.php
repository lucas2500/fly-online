<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('table');
		$this->load->helper('download');

		$this->load->model('financeiro_model', 'fly2');

	}


	public function lancarContrato(){

		$path = "./uploads/";
		if ( ! is_dir($path)){
			mkdir($path, 0777, $recursive = true);
		}

		$configUpload['upload_path']   = $path;
		$configUpload['allowed_types'] = 'jpg|png|pdf';
			// $configUpload['remove_spaces'] = TRUE;
			// $config['overwrite'] = TRUE;
		$configUpload['encrypt_name']  = FALSE;
		$this->upload->initialize($configUpload);

		if ($this->upload->do_upload('comprovante')){

			$file = $this->upload->data();

			$data2['nome'] = $file['raw_name'].$file['file_ext'];

			$data['empresa'] = $this->input->post('empresa');
			$data['emailEmpresa'] = $this->input->post('emailEmpresa');
			$data['telEmpresa'] = $this->input->post('telEmpresa');
			$data['celular1'] = $this->input->post('celular1');
			$data['celular2'] = $this->input->post('celular2');
			$data['nomeContrato'] = $this->input->post('nomeContrato');
			$data['dtContrato'] = $this->input->post('dtContrato');
			$data['dtVencimento'] = $this->input->post('dtVencimento');
			$data['celular1'] = $this->input->post('celular1');
			$data['comprovante'] = $data2['nome'];

			$this->fly2->insertContrato($data);

			$this->session->set_flashdata('msg', 'Contrato lançado com sucesso!!');
			redirect('principal/flyonline');

		} else{

			$this->session->set_flashdata('msg', 'Não foi possível fazer o upload do arquivo!!');
			redirect('principal/flyonline');

		}

	}


	public function lancarPagamento(){

		$path = "./uploads/";
		if ( ! is_dir($path)){
			mkdir($path, 0777, $recursive = true);
		}

		$configUpload['upload_path']   = $path;
		$configUpload['allowed_types'] = 'jpg|png|pdf';
			// $configUpload['remove_spaces'] = TRUE;
			// $config['overwrite'] = TRUE;
		$configUpload['encrypt_name']  = FALSE;
		$this->upload->initialize($configUpload);

		if ($this->upload->do_upload('recibo')){

			$file = $this->upload->data();

			$data2['nome'] = $file['raw_name'].$file['file_ext'];

			$data['nEmpresa'] = $this->input->post('nEmpresa');
			$data['nContrato'] = $this->input->post('nContrato');
			$data['dtPGMT'] = $this->input->post('dtPGMT');
			$data['valor'] = $this->input->post('valor');
			$data['recibo'] = $data2['nome'];

			$this->fly2->insertPagamento($data);

			$this->session->set_flashdata('msg', 'Pagamento lançado com sucesso!!');
			redirect("principal/flyonline");

		} else{

			$this->session->set_flashdata('msg', 'Não foi possível fazer o upload do arquivo!!');
			redirect('principal/flyonline');

		}

	}

	public function lancarConta(){

		$path = "./uploads/";
		if ( ! is_dir($path)){
			mkdir($path, 0777, $recursive = true);
		}

		$configUpload['upload_path']   = $path;
		$configUpload['allowed_types'] = 'jpg|png|pdf';
			// $configUpload['remove_spaces'] = TRUE;
			// $config['overwrite'] = TRUE;
		$configUpload['encrypt_name']  = FALSE;
		$this->upload->initialize($configUpload);

		if ($this->upload->do_upload('reciboCompra')){

			$file = $this->upload->data();

			$data2['nome'] = $file['raw_name'].$file['file_ext'];

			$data['estabelecimento'] = $this->input->post('estabelecimento');
			$data['dtCompra'] = $this->input->post('dtCompra');
			$data['valorCompra'] = $this->input->post('valorCompra');
			$data['reciboCompra'] = $data2['nome'];

			$this->fly2->insertConta($data);

			$this->session->set_flashdata('msg', 'Compra registrada com sucesso!!');
			redirect("principal/flyonline");

		} else{

			$this->session->set_flashdata('msg', 'Não foi possível fazer o upload do arquivo!!');
			redirect('principal/flyonline');

		}

	}

	public function lancarRendimento(){

		$data['dtLancamento'] = $this->input->post('dtLancamento');
		$data['totalMensal'] = $this->input->post('totalMensal');
		$data['statusMensal'] = $this->input->post('statusMensal');

		$this->fly2->insertRendimento($data);

		$this->session->set_flashdata('msg', 'Rendimento lançado com sucesso!!');
		redirect('principal/flyonline');

	}


	public function consultContrato(){

		$data['ID'] = $this->input->post('ID');

		$query = $this->fly2->getContrato($data['ID']);

		if($query != NULL){
			
			echo "<div align='left'>";
			echo "<h4><strong>Nome do contrato: </strong>".$query->nomeContrato."</h4>";
			echo "<h4><strong>Email do contratante: </strong>".$query->emailEmpresa."</h4>";
			echo "</div>";

			$template = array(
				'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-bordered">'
			);

			$this->table->set_template($template);

			$this->table->set_heading(array('Telefone', 'Celular 1', 'Celular2'));

			$this->table->add_row($query->telEmpresa, $query->celular1, $query->celular2);

			echo $this->table->generate();

			$this->table->set_heading(array('Assinatura', 'Pagamento'));

			$this->table->add_row($query->dtContrato, $query->dtVencimento);

			echo $this->table->generate();

		} else{

			echo "Vázio";
		}
	}


	public function consultPagamento(){

		$data['ID'] = $this->input->post('ID');

		$query = $this->fly2->getPagamento($data['ID']);

		if($query != NULL){

			$template = array(
				'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-bordered">'
			);

			$this->table->set_template($template);

			$this->table->set_heading(array('Contratante', 'Valor'));

			$this->table->add_row($query->nEmpresa, 'R$ '.$query->valor);

			echo $this->table->generate();

		} else{

			echo "Vázio";
		}
	}


	public function baixarRecibo($ID=NULL){

		if($ID == NULL){

			redirect("principal/flyonline");
		}

		$query = $this->fly2->consultRecibo($ID);

		if($query != NULL){

			$file = $query->recibo;

			force_download('./uploads/'.$file, NULL);
		}
	}


	public function baixarContrato($ID=NULL){

		if($ID == NULL){

			redirect("principal/flyonline");
		}

		$query = $this->fly2->consultContrato($ID);

		if($query != NULL){

			$file = $query->comprovante;

			force_download('./uploads/'.$file, NULL);
		}

	}

	public function deleteContrato($ID=NULL){

		if($ID == NULL){

			redirect("principal/flyonline");
		}

		$query = $this->fly2->consultContrato($ID);

		if($query != NULL){

			$this->fly2->encerrarContrato($ID);

			$file = $query->comprovante;

			unlink('./uploads/'.$file);

			$this->session->set_flashdata('msg', 'Contrato encerrado com sucesso!!');
			redirect("principal/flyonline");

		}

	}


	public function reciboCompra($ID=NULL){

		if($ID == NULL){

			redirect('principal/flyonline');
		}

		$query = $this->fly2->consultCompra($ID);

		if($query != NULL){

			$file = $query->reciboCompra;

			force_download('./uploads/'.$file, NULL);
		}

	}

}
