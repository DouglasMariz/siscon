<?php

class Externo_UsuarioController extends Siscon_Controller_Action_Abstract
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
        $form = new Externo_Model_AcessoModel();
        $this->view->form = $form->cadastrarForm();
    }
    
     public function cadastrarAction()
    {
         $dados = $this->_request->getPost();
         $dadosUsuario = new Externo_Model_UsuarioModel();
         var_dump($dadosUsuario);
         exit;
         $dadosUsuario->cadastrar($dados);
    }
}

