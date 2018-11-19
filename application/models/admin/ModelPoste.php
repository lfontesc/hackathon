<?php
class ModelPoste extends CI_Model {

    public function insert($poste) {
        return $this->db->insert('poste', $poste);
    }
    public function selecionarPostes() {
        $resultado = $this->db->get('poste');
        return $resultado->result();
    }
    
     public function selecionarTodosPostes() {
        $resultado = $this->db->get('poste');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function selecionarTodosMap() {
        $resultado = $this->db->get('poste');
        if ($resultado->num_rows() > 0) {
            return $resultado->result_array();
        }
        return;
    }

     public function selecionarUnicoPoste($id_poste) {
        $resultado = $this->db->query("select * from poste where id_poste = '$id_poste'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
      
    public function excluirPoste($id_poste) {
        $this->db->where('id_poste', $id_poste);
        return $this->db->delete('poste');
    }
    
      public function alterarPoste($poste, $id_poste) {
        $this->db->where('id_poste', $id_poste);
        return $this->db->update('poste', $poste);
    }
    
    public function totalPoste() {
        $query = $this->db->query('SELECT * FROM poste');
        return $query->num_rows();
    }

    public function totalDispo() {
        $this->db->select();
        $this->db->from('poste');
        $this->db->where('n_cabos < 5');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selecionarTodosPostesDispo() {
        $resultado = $this->db->query("select * from poste where n_cabos < 5");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    public function listaPostesIrreg() {
        $resultado = $this->db->query("select * from poste where id_situacao != 4");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function listaPostesRegular() {
        $resultado = $this->db->query("select * from poste where id_situacao = 4");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function totalRegular() {
        $this->db->select();
        $this->db->from('poste');
        $this->db->where('id_situacao = 4');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function totalIrreg() {
        $this->db->select();
        $this->db->from('poste');
        $this->db->where('id_situacao != 4');
        $query = $this->db->get();
        return $query->num_rows();
    }
}