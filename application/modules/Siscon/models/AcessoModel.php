<?php

class Siscon_Model_AcessoModel
{
    public function login()
    {
        $acessoForm = new Siscon_Form_AcessoForm();
        return $acessoForm->formLogin();
    }
    
    public function cadastrarForm()
    {
        $form = new Siscon_Form_CadastrarForm();
        return $form;
    }
}

