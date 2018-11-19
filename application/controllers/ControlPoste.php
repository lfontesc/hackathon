<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ControlPoste extends CI_Controller {

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
    public function cadastroPoste() {
        $this->load->Model('admin/modelUsuario', '', TRUE);
        $info['user'] = $this->modelUsuario->selecionarUsuarios();
        $this->verificar_sessao();
        $this->load->view('commons/topo');
        $this->load->view('cadPoste',$info);
        $this->load->view('commons/footer');
    }
    public function gravar() {
        $this->verificar_sessao();
        $this->load->Model('admin/ModelUsuario', '', TRUE);
        $this->load->Model('admin/ModelPoste','',TRUE);
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $this->load->Model('admin/modelAcesso', '', TRUE);
        //id, mn_municipio, n_cabos, longitude, latitude, dt_cad, dt_ult_visita, id_user
        $poste = array(
            'nm_municipio' => $this->input->post('nm_municipio'),
            'n_cabos' => $this->input->post('n_cabos'),
            'longitude' => $this->input->post('longitude'),
            'latitude' => $this->input->post('latitude'),
            'dt_cad' => $date,
            'dt_ult_visita' => $this->input->post('dt_ult_visita'),
            'id_user' => $this->input->post('id_user')
        );

            $id_poste = $this->input->post('id_poste');
      
            if ($this->ModelPoste->insert($poste)) {
                        echo "<script> alert('Poste cadastrado com sucesso!');</script>";
                        $this->cadastroPoste();
                    } else {
                        echo "<script> alert('Não deu certo!');</script>";
                    }

                    
    }
    public function listaPostes() {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
        $dados['poste'] = $this->modelPoste->selecionarTodosPostes();
        $this->load->view('commons/topo');
        $this->load->view('listaPostes',$dados);
        $this->load->view('commons/footer');
    }
    public function DadosUnicoPoste($id_poste) {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
        $dados['poste'] = $this->modelPoste->selecionarUnicoPoste($id_poste);
        $this->load->view('commons/topo');
        $this->load->view('unicoPoste',$dados);
        $this->load->view('commons/footer');
    }
    public function excluirPoste($id_poste) {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
      
            $this->modelPoste->excluirPoste($id_poste);
            echo "<script> alert('Poste excluido com sucesso');</script>";
            $this->listaPostes();
        
    }
    public function editarPoste($id_poste) {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
        $dados['poste'] = $this->modelPoste->selecionarUnicoPoste($id_poste);
        $this->verificar_sessao();
        $this->load->view('commons/topo');
        $this->load->view('cadPoste.php',$dados);
        $this->load->view('commons/footer');
    }

    public function listaPostesDispo() {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
        $dados['poste'] = $this->modelPoste->selecionarTodosPostesDispo();
        $this->load->view('commons/topo');
        $this->load->view('listaPostes',$dados);
        $this->load->view('commons/footer');
    }

    public function listaPostesIrreg() {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
        $dados['poste'] = $this->modelPoste->selecionarTodosPostesIrreg();
        $this->load->view('commons/topo');
        $this->load->view('listaPostes',$dados);
        $this->load->view('commons/footer');
    }

    public function listaPosteReg() {
        $this->verificar_sessao();
        $this->load->Model('admin/modelPoste', '', TRUE);
        $dados['poste'] = $this->modelPoste->selecionarTodosPostesReg();
        $this->load->view('commons/topo');
        $this->load->view('listaPostes',$dados);
        $this->load->view('commons/footer');
    }
}