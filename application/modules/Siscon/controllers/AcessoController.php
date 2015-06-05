<?php


class Siscon_AcessoController extends Siscon_Controller_Action_Abstract
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
//        $testeDto = new Siscon_testeDto();
//        dump($testeDto);exit
        $acessoModel = new Siscon_Model_AcessoModel();
        $this->view->form = $acessoModel->login();
    }
    
    public function postDispatch()
    {
        include_once APPLICATION_PATH . '/traits/postdispatch.php';
        parent::postDispatch();
    }
    
    public function recuperarSenhaAction()
    {
        $dados = $this->getRequest()->getParams();
    }
    
    public function loginAction()
    {
        $usuario = $this->getAllParams();
        dump($usuario);exit;
    }
}
