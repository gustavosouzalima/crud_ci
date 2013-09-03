<?php

class Persons_model extends CI_Model {
 
	private $table= 'persons';
 
    function __construct() {
        parent::__construct();
    }
 
    function get_by_id( $id ){
        $this->db->where('id', $id);
        return $this->db->get($this->table);
    }
 
    function lists() {
        $query = $this->db->get($this->table);
        return $query->result();
    }
 
    function colunas_banco() {
        $data = $this->db->list_fields('persons');
        return $data;
    }

    function listar_especifico($campo) {
        $query = $this->db->get('persons');
        if (!$query->result()){
            return $query->result();
        }
        foreach($query->result() as $retorno) {
            $data[] = $retorno->$campo;
        }

        return $data;
	}
 
    function save( $data ) {
        return $this->db->insert($this->table, $data);
    }
 
    function update( $id, $data ) {
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
    }
 
	function delete( $id ){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}