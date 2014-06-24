<?php

class Externo_AcessoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $form = new Externo_Model_AcessoModel();
        $this->view->form = $form->acesso();
    }


}

