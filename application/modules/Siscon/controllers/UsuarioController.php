<?php

class Siscon_UsuarioController extends Siscon_Controller_Action_Abstract
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function cadastrarFormAction()
    {
        $form = new Siscon_Model_AcessoModel();
        $this->view->form = $form->cadastrarForm();
    }
    
     public function cadastrarAction()
    {
         $dados = $this->_request->getPost();
         $dadosUsuario = new Siscon_Model_UsuarioModel();
         $dadosUsuario->cadastrar($dados);
    }
}

