<?php

class Application_Form_IndexForm extends Zend_Form
{

    public function init()
    {
        $form = new Zend_Form_Element_Password('pass');
        $this->addElement($form);
        
        $this->addElement('text', 'nome', array('label' => 'Nome: '));
        
        $element = new Zend_Form_Element_Text("title", array(
                    "label" => "Title: ",
                ));
        
        $element->setRequired(true);
        $this->addElement($element);
    }
}

