<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ControlUsuario extends CI_Controller {
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Acesso/login');
        }
    }
    public function index() {
        $this->verificar_sessao();
        $this->load->Model('admin/modelUsuario', '', TRUE);
        $info['user'] = $this->modelUsuario->selecionarUsuarios();
        $this->load->view('commons/topo');
        $this->load->view('index');
        $this->load->view('commons/footer');
    
    }
    public function cadastroUsuario() {
        $this->verificar_sessao();
        $this->load->view('commons/topo');
        $this->load->view('cadUsuario');
        $this->load->view('commons/footer');
    }
    public function gravar() {
        $this->verificar_sessao();
        $this->load->Model('admin/ModelUsuario', '', TRUE);
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $this->load->Model('admin/modelAcesso', '', TRUE);
        $user = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'id_tipouser' => $this->input->post('id_tipouser'));
            $id_user = $this->input->post('id_user');
      
            if ($this->ModelUsuario->insert($user)) {
                        echo "<script> alert('Usuario cadastrado com sucesso!');</script>";
                        $this->cadastroUsuario();
                    } else {
                        echo "<script> alert('Não deu certo!');</script>";
                    }

                    
    }
    public function listaUsuarios() {
        $this->verificar_sessao();
        $this->load->Model('admin/modelUsuario', '', TRUE);
        $dados['user'] = $this->modelUsuario->selecionarTodosUsuarios();
        $this->load->view('commons/topo');
        $this->load->view('listaUsuarios',$dados);
        $this->load->view('commons/footer');
    }
    public function DadosUnicoUsuario($idUsuario) {
        $this->verificar_sessao();
        $this->load->Model('admin/modelUsuario', '', TRUE);
        $dados['user'] = $this->modelUsuario->selecionarUnicoUsuario($idUsuario);
        $this->load->view('commons/topo');
        $this->load->view('unicoUsuario',$dados);
        $this->load->view('commons/footer');
    }
    public function excluirUsuario($idUsuario) {
        $this->verificar_sessao();
        $this->load->Model('admin/modelUsuario', '', TRUE);
      
            $this->modelUsuario->excluirUsuario($idUsuario);
            echo "<script> alert('Usuario excluido com sucesso');</script>";
            $this->listaUsuarios();
        
    }
    public function editarUsuario($idUsuario) {
        $this->verificar_sessao();
        $this->load->Model('admin/modelUsuario', '', TRUE);
        $dados['user'] = $this->modelUsuario->selecionarUnicoUsuario($idUsuario);
        $this->verificar_sessao();
        $this->load->view('commons/topo');
        $this->load->view('cadUsuario.php',$dados);
        $this->load->view('commons/footer');
    }
}