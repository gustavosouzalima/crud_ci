<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persons extends CI_Controller {
 
	function __construct() {
		parent::__construct();
		$this->load->model('persons_model');
	}
 
	function index() {
		$data['persons'] = $this->persons_model->lists();
		$data['coluna'] = $this->persons_model->colunas_banco();
		$this->load->view('persons_index', $data);

	}
 
	function validate(){
 
		$this->load->library('form_validation');
		$validacoes = array(
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|min_length[4]|max_length[45]'
			),
			array(
				'field' => 'email',
				'label' => 'E-mail',
				'rules' => 'trim|required|valid_email|max_length[45]'
			)
		);
		$this->form_validation->set_rules($validacoes);
 
		return $this->form_validation->run();
 
	}
 
	function add() {
 
		// realizo as validações			
		if( $this->validate() ){
 
			$data['name']  = $this->input->post('name');
			$data['email'] = $this->input->post('email');
 
			if ( !$this->persons_model->save($data) ) {
				echo 'Error';
			}else{
				redirect('persons/index/','refresh');
			}
		}
 
		$this->load->view('persons_add');
	}
 
	function listar() {
		$campo = $this->input->post('coluna');
		$arr = array(0 => "id", 1 => "name", 2 => "email");
		$data['campo'] = $arr[$campo];
		$data['persons'] = $this->persons_model->listar_especifico($data['campo']);
		if ( !$data ) {
			redirect('persons/index/','refresh');
		}
 
		$this->load->view('persons_listar', $data);
	}
 
	function edit( $id = null ) {
 
		//busca os dados 
		$person['person'] = $this->persons_model->get_by_id($id)->row();
 
		// realizo as validações		
		if( $this->validate() ){
 
			$id = $this->input->post('id');
 
			$data['id']    = $this->input->post('id');
			$data['name']  = $this->input->post('name');
			$data['email'] = $this->input->post('email');
 
			if ( !$this->persons_model->update($id, $data) ) {
				echo 'Error';
			}else{
				redirect('persons/index/','refresh');
			}
		}
 
		$this->load->view('persons_edit', $person);
	}
 
	function delete( $id ){
        $this->persons_model->delete($id);
        redirect('persons/index/','refresh');
    }
 
}