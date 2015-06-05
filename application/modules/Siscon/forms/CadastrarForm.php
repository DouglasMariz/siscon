<?php

class Siscon_Form_CadastrarForm extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setAction('cadastrar')->setMethod('POST');
        
        $this->addDisplayGroup(array(
        $this->createElement('text', 'cpf')
            ->setLabel('CPF: ')
            ->setRequired(TRUE)
            ->setAttrib('required', true),
        $this->createElement('text', 'nome')
            ->setLabel('Nome: ')
            ->setRequired(TRUE)
            ->setAttrib('required', true),
        $this->createElement('text', 'email')
            ->setLabel('Email: ')
            ->setRequired(TRUE)
            ->setAttrib('required', true),
        $this->createElement('password', 'senha')
            ->setLabel('Senha: ')
            ->setRequired(TRUE)
            ->setAttrib('required', true),
        $this->createElement('password', 'confirmarsenha')
            ->setLabel('Confirmar Senha: ')
            ->setRequired(TRUE)
            ->setAttrib('required', true),
        $this->createElement('submit', 'enviar')
            ->setLabel('Cadastrar')
        ), 'cadastrar');
        return $this;
    }
}

