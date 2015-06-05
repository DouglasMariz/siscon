<?php

class Externo_Model_UsuarioModel extends Siscon_Model_Abstract
{
    public function __construct()
    {
        parent::__construct();
    }
    
    private function login($cpf, $senha)
    {
        $db = $this->getInvokeArg('bootstrap')->getResource('db');

        
        $authAdapter = new Zend_Auth_Adapter_DbTable($db    );
        $authAdapter->setTableName('clientes')
        ->setIdentityColumn('cpf')
        ->setCredentialColumn('senha')
        ->setIdentity($cpf)
        ->setCredential(Application_Model_Cliente::criptografar($senha));

        $select = $authAdapter->getDbSelect();
        $select->where('is_ativo = true');
        $resultado = $authAdapter->authenticate();

        if ($resultado->isValid())
        {
            $contents = $authAdapter->getResultRowObject(null,'senha');
            Zend_Auth::getInstance()->getStorage()->write($contents);
            return true;
        }
        else
        {
            foreach ($resultado->getMessages() as $message)
            {
                   $message = 'teste';
                $this->_flashMessenger->addMessage($message);
            }
            return false;
        }
    }
    
    public function cadastrar($dados) 
    {
//        $db = Zend_Db::factory('PDO_MYSQL', array( 
//                  'host' => 'localhost', 
//                  'username' => 'douglas', 
//                  'password' => '123', 
//                  'dbname' => 'siscon' 
//              ));
//
//        Zend_Db_Table_Abstract::setDefaultAdapter($db);
        $usuario = new Externo_Model_DbTable_Usuario();
        var_dump($usuario);
        exit;
        

        $dadosUsuario['num_cpf'] = $dados['cpf'];
        $dadosUsuario['ds_nome'] = $dados['nome'];
        $dadosUsuario['email'] = $dados['email'];
        $dadosUsuario['senha'] = $dados['senha'];

        $usuario->insert($dadosUsuario);
    }

}

