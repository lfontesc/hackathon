<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso extends CI_Controller {
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Acesso/login');
        }
    }
    public function login($alert = null) {
        if ($this->session->userdata('logado')) {
            redirect('Acesso/index');
        }
        $dados = null;
        if ($alert != null) {
            $dados['alert'] = $this->msg($alert);
        }
        $this->load->view('login', $dados);
    }


    public function index() {
        $this->verificar_sessao();
        $this->load->Model('admin/ModelPoste','',TRUE);
        $dados['totalPoste'] = $this->ModelPoste->totalPoste();
        $dados['totalDispo'] = $this->ModelPoste->totalDispo();
        $dados['listaPostes'] = $this->ModelPoste->selecionarTodosMap();
        $dados['postes'] = $this->ModelPoste->totalPoste();
       // $dados['totalRegular'] = $this->ModelPoste->totalRegular();
        //$dados['totalIrre'] = $this->ModelPoste->totalIrre();
        $this->load->view('commons/topo');
        $this->load->view('index', $dados);
        $this->load->view('commons/footer',$dados);
       
    }

    public function LogarAll() {
        $this->load->Model('admin/ModelAcesso','',TRUE);
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        if ($this->input->post('tipoUsuario') == "e") {
            $user = $this->ModelAcesso->loginUsuario($login, $senha);
            if (count($user) === 1) {
                $dados['id_user'] = $user[0]->id_user;
                $dados['username'] = $user[0]->username;
                $dados['tipoUsuario'] = 0;
                $dados['logado'] = TRUE;
                $this->session->set_userdata($dados);
                redirect("Acesso/index");
            } else {
                redirect("Acesso/login/2");
            }
        } else if ($this->input->post('tipoUsuario') == 'c') {
            if (count($user) === 1) {
                $dados['id_user'] = $user[0]->id_user;
                $dados['username'] = $user[0]->username;
                $dados['tipoUsuario'] = 1;
                $dados['logado'] = TRUE;
                $this->session->set_userdata($dados);
                redirect("Acesso/index/");
            } else {
                redirect("Acesso/login/2");
            }
        }
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect("Acesso/login/");
    }
    public function msg($alert) {
        $str = '';
        if ($alert == 1) {
            $str = 'success- Login realizado com sucesso!';
        } else if ($alert == 2) {
            $str = 'danger-Não foi possível entrar. Verifique o login e a senha e tente novamente!';
        } else {
            $str = null;
        }
        return $str;
    }
}