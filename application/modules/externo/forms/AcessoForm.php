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
        $this->addAttribs(array('id' => 'login'));
//        $form = new Zend_Form_Element_Password('pass', array('label' => 'Senha: '));
        $this->addElement('text', 'usuario', array('label' => 'Usuário: '));
        $this->addElement('password', 'senha', array('label' => 'Senha: '));
        $this->addElement('submit', 'entrar', array('label' => 'Entrar'));
        
//        $form->setRequired(true);
//        $this->addElement($form);
        return $this;
    }
}

