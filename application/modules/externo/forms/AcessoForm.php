<?php

class Externo_Form_AcessoForm extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
    }
    
    public function formAcesso() {
        $this->setAction('interno')
        ->setMethod('POST');
        
        $this->addDisplayGroup(array(
            $this->createElement('text', 'usuario')
                    ->setLabel('Usuário')
                    ->setRequired(true)
                    ->setAttrib('required', true),
            $this->createElement('password', 'senha')
                    ->setLabel('Senha: ')
                    ->setRequired(true)
                    ->setAttrib('required', true),
            $this->createElement('submit', 'entrar')
            ->setLabel('Entrar')
                ), 'login'
            );
        return $this;
    }
}

