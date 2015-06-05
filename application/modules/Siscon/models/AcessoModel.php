<?php

class Externo_Model_AcessoModel
{
    public function login()
    {
        $acessoForm = new Externo_Form_AcessoForm();
        return $acessoForm->formLogin();
    }
    
    public function cadastrarForm()
    {
        $form = new Externo_Form_CadastrarForm();
        return $form;
    }
}

