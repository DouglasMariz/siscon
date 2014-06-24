<?php

class Externo_Model_AcessoModel
{
    public function acesso() {
        $form = new Externo_Form_AcessoForm();
        return $form->formAcesso();
    }
}

