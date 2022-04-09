<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function inicio(){
        $this->db->from('pagina');
        $this->db->where('id',2);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function servicios(){
        $this->db->from('pagina');
        $this->db->where('id',3);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}

?>
