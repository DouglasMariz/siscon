<?php

class Externo_AcessoController extends Siscon_Controller_Action_Abstract
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $acessoModel = new Externo_Model_AcessoModel();
        $this->view->form = $acessoModel->login();
    }
    
    public function postDispatch()
    {
        include_once APPLICATION_PATH . '/traits/postdispatch.php';
        parent::postDispatch();
    }
    
    public function recuperarSenhaAction()
    {
        
    }
    
    public function loginAction()
    {
        $usuario = $this->getAllParams();
        dump($usuario);exit;
    }
}
