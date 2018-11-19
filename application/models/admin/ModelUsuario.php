<?php
class ModelUsuario extends CI_Model {
    public function insert($user) {
        return $this->db->insert('user', $user);
    }
    public function selecionarUsuarios() {
        $resultado = $this->db->get('user');
        return $resultado->result();
    }
    
     public function selecionarTodosUsuarios() {
        $resultado = $this->db->get('user');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
     public function selecionarUnicoUsuario($idUsuario) {
        $resultado = $this->db->query("select * from user where id_user = '$idUsuario'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    
      public function selecionarRelatorioUnicoUsuario1($idUsuario) {
        $resultado = $this->db->query("SELECT COUNT(*)as quantidade FROM atendimento WHERE idusuario = '$idUsuario'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    public function selecionarRelatorioUnicoUsuario3($idUsuario) {
        $resultado = $this->db->query("SELECT COUNT(*)as quantidade FROM evento WHERE idusuario = '$idUsuario'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    public function selecionarRelatorioUnicoUsuario2($idUsuario,$data1,$data2) {
        $resultado = $this->db->query("SELECT COUNT(*)as quantidade FROM atendimento WHERE idusuario = '$idUsuario' AND dataAtendimento BETWEEN '$data1' AND '$data2'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
      public function selecionarRelatorioUnicoUsuario4($idUsuario,$data1,$data2) {
        $resultado = $this->db->query("SELECT COUNT(*)as quantidade FROM evento WHERE idusuario = '$idUsuario' AND dataInicioEvento BETWEEN '$data1' AND '$data2'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
   
    
    
    public function excluirUsuario($idUsuario) {
        $this->db->where('id_user', $idUsuario);
        return $this->db->delete('user');
    }
    
      public function alterarUsuario($usuario, $idUsuario) {
        $this->db->where('id_user', $idUsuario);
        return $this->db->update('user', $usuario);
    }
    
    
}