<?php
class ModelAcesso extends CI_Model {
    public function loginUsuario($login, $senha) {
    	
        $this->db->where('username', $login);
		$this->db->where('password', $senha);
		return $this->db->get('user')->result();
    }
    
    
    public function buscaloginUsuario($login){
        $this->db->where('username',$login);
        return $this->db->get('user')->result();
        
    }
   
}