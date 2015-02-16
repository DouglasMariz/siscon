<?php

class Externo_Model_AcessoModel
{
    public function login()
    {
        $form = new Externo_Form_AcessoForm();
        return $form->formLogin();
    }
    
    public function cadastrarForm()
    {
        $form = new Externo_Form_CadastrarForm();
        return $form;
    }
}

