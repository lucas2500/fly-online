<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('email');
		$this->load->library('session');
		$this->load->library('table');

		$this->load->model('fly_model', 'fly');
		$this->load->model('financeiro_model', 'fly2');

	}

	public function index(){

		$this->load->view('home');
		$this->load->view('modal');


	}

	public function Erro(){

		$data['msg'] = $this->session->flashdata('msg');
		$this->load->view('home');
		$this->load->view('erro', $data);
		$this->load->view('modal');

	}

	public function sendEmail(){

		$config['protocol'] = 'mail'; 
		$config['wordwrap'] = TRUE; 
		$config['validate'] = TRUE;
		
		$this->email->initialize($config);

		$data['nome'] = $this->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');
		$data['assunto'] = $this->input->post('assunto');
		$data['MSG'] = $this->input->post('MSG');

		if($data['email'] != NULL){

			$this->email->from($data['email'], $data['nome']);
			$this->email->to('contato@flysoftwares.com');

			$this->email->subject($data['assunto']);
			$this->email->message($data['MSG']. "||"."Contato: ".$data['telefone']);

			$this->email->from($data['email'], $data['nome']);
			$this->email->to('contato@flysoftwares.com');

			$this->email->subject($data['assunto']);
			$this->email->message($data['MSG']. "||"."Contato: ".$data['telefone']);

			$this->email->send();
			
			$data2['nome'] = $this->input->post('nome');
			$data2['telefone'] = $this->input->post('telefone');
			$data2['email'] = $this->input->post('email');

			$query = $this->fly->consultarEmail($data2['email']);

			$this->email->send();
			
			$data2['nome'] = $this->input->post('nome');
			$data2['telefone'] = $this->input->post('telefone');
			$data2['email'] = $this->input->post('email');

			$query = $this->fly->consultarEmail($data2['email']);

			if($query == NULL){

				$this->fly->insertContato($data2);

			}


		} else{

			redirect("principal/index");
		}

		$this->email->send();

	} 

	public function flyOnline(){

		$this->loggedIn();

		$email = $this->session->userdata('email');

		$dados['nome'] = $this->fly->getUser($email);
		$dados['cliente'] = $this->fly->getCliente();
		$dados['email'] = $this->fly->getEmails();
		$dados['contrato'] = $this->fly2->getContratos();
		$dados['pagamento'] = $this->fly2->getPagamentos();
		$dados['compras'] = $this->fly2->getContas();
		$dados['rend'] = $this->fly2->getRendimento();
		$dados['msg'] = $this->session->flashdata('msg');

		$this->load->view('nav', $dados);
		$this->load->view('flyOnline');

	}


	public function flyOnline2(){

		$this->loggedIn();

		$email = $this->session->userdata('email');

		$dados['nome'] = $this->fly->getUser($email);
		// $dados['cliente'] = $this->fly->getCliente();
		// $dados['email'] = $this->fly->getEmails();

		$this->load->view('flyOnline2', $dados);

	}


	public function cadUser(){

		$data['nome'] = $this->input->post('nome');
		$data['cadEmail'] = $this->input->post('cadEmail');
		$data['empresa'] = $this->input->post('empresa');
		$data['permissao'] = $this->input->post('permissao');
		$data['cadSenha'] = (sha1($this->input->post('cadSenha')));


		$query = $this->fly->validarEmail($data['cadEmail']);

		if($query == NULL){

			$this->fly->insertUser($data);

			echo "Usuário cadastrado com sucesso!!";

		} else{

			echo "Este email já foi cadastrado em nosso sistema, utilize outro.";
		}

	}

	public function deleteCliente(){

		$data['codigo'] = $this->input->post('codigo');

		$this->fly->deleteCliente($data['codigo']);

	}


	public function Login(){

		$email = $this->input->post('email');  
		$senha = (sha1($this->input->post('senha')));

		$query = $this->fly->Logar($email, $senha);

		if($query != NULL){

			$session_data = array('email'=> $email );  
			$this->session->set_userdata($session_data);

			if($query->permissao == "adm"){
				redirect("principal/flyOnline");

			} else{

				redirect("principal/flyOnline2");
			}
			

		} else{

			$this->session->set_flashdata('msg', 'Email e/ou senha incorretos');
			redirect("principal/Erro");
			
		} 
	}

	public function recSenha(){

		$config['protocol'] = 'mail'; 
		$config['wordwrap'] = TRUE; 
		$config['validate'] = TRUE;
		
		$this->email->initialize($config);

		$data['EMAIL'] = $this->input->post('EMAIL');
		$data2['token'] = $this->input->post('token');

		$query = $this->fly->validarEmail($data['EMAIL']);

		if($query != NULL){

			$this->email->from('contato@flysoftwares.com', 'Suporte FLY Softwares');
			$this->email->to($data['EMAIL']);

			$this->email->subject('Recuperação de senha');
			$this->email->message("Prezado usuário, seu token para redefinição de senha é: ".$data2['token']);

			$this->email->send();

			$this->fly->insertToken($data2);

			$this->session->set_flashdata('msg', 'Enviamos um token de redefinição para o seu email.');
			redirect("principal/Erro");


		} else{

			$this->session->set_flashdata('msg', 'Este email não foi cadastrado em nosso sistema, tente novamente.');
			redirect("principal/Erro");

		}

	}

	public function recSenhaOnline(){

		$config['protocol'] = 'mail'; 
		$config['wordwrap'] = TRUE; 
		$config['validate'] = TRUE;
		
		$this->email->initialize($config);

		$data['email'] = $this->input->post('email');
		$data2['token'] = $this->input->post('token');

		$query = $this->fly->validarEmail($data['email']);

		if($query != NULL){

			$this->email->from('contato@flysoftwares.com', 'Suporte FLY Softwares');
			$this->email->to($data['email']);

			$this->email->subject('Recuperação de senha');
			$this->email->message("Prezado usuário, seu token para redefinição de senha é: ".$data2['token']);

			$this->email->send();

			$this->fly->insertToken($data2);

			echo "Acabamos de lhe enviar um email contendo seu token.";

		} else{

			echo "Este email não foi cadastrado em nosso sistema, tente novamente.";
		}

	}

	public function mudarSenha(){


		$token['token'] = $this->input->post('token');
		$senha['cadSenha'] = (sha1($this->input->post('cadSenha')));

		$query = $this->fly->checkToken($token['token']);

		if($query != NULL){

			$query2 = $this->fly->validarEmail($this->input->post('cadEmail'));

			if($query2 != NULL){

				$this->fly->updateSenha($senha, $this->input->post('cadEmail'));
				$this->fly->deleteToken($token['token']);

				$this->session->set_flashdata('msg', 'Sua senha foi alterada com sucesso!!');
				redirect("principal/erro");

			} else{

				$this->session->set_flashdata('msg', 'Este email não foi cadastrado em nosso sistema, tente novamente.');
				redirect("principal/Erro");
			}

		} else{

			$this->session->set_flashdata('msg', 'Por favor insira um token válido.');
			redirect("principal/Erro");
		}

	}

	public function mudarSenhaOnline(){

		$token['token'] = $this->input->post('token');
		$senha['cadSenha'] = (sha1($this->input->post('cadSenha')));

		$query = $this->fly->checkToken($token['token']);

		if($query != NULL){

			$query2 = $this->fly->validarEmail($this->input->post('cadEmail'));

			if($query2 != NULL){

				$this->fly->updateSenha($senha, $this->input->post('cadEmail'));
				$this->fly->deleteToken($token['token']);

				echo "Sua senha foi alterada com sucesso!!";

			} else{

				echo "Este email não foi cadastrado em nosso sistema, tente novamente.";
			}

		} else{

			echo "Por favor insira um token válido!!";
		}

	}

	public function getClienteDetail(){

		$data['clienteID'] = $this->input->post('clienteID');

		$query = $this->fly->consultarDetalhes($data['clienteID']);

		if($query != NULL){

			$template = array(
				'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-bordered">'
			);

			$this->table->set_template($template);

			$this->table->set_heading(array('Nome', 'Telefone'));

			$this->table->add_row($query->nome, $query->telefone);

			echo $this->table->generate();

		} else{

			echo "Vázio";
		}

	}

	public function loggedIn(){

		if($this->session->userdata('email') == NULL){

			redirect("principal/index");
		}

	}

	public function Logout(){

		$this->session->unset_userdata('email');

		redirect("principal/index");
	}

}
