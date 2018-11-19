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
    
    
}