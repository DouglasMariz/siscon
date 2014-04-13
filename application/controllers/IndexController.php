<?php
require_once (realpath(dirname(__FILE__) . '\..\autoload.php'));
class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $config = new Zend_Config_Ini('../application/configs/application.ini', 'database');
        $db = Zend_Db::factory($config->adapter, $config->params);
        $select = new Zend_Db_Select($db);
        $select->from('filial');
        $registros = $db->fetchAll($select);
        $dados = array();
        foreach ($registros as $valor) {
            $dados = $valor;
        }
        $this->view->exibir = implode("-", $dados);
        
    }


}

