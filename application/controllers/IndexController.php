<?php
require_once (realpath(dirname(__FILE__) . '\..\autoload.php'));
class IndexController extends Zend_Controller_Action
{

    public function init()
    {
         $this->_helper->_layout->setLayout('layout_interno');
    }

    public function indexAction()
    {
        // action body
        $form = new Application_Form_IndexForm();
//        $this->view->form = $form;
//        $this->view->exibir = implode("-", $dados);
    }
}