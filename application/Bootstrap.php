<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initNamespaces() {
        Zend_Loader_Autoloader::getInstance()->registerNamespace('SISCon');
//        Zend_Loader_Autoloader::getInstance()->getRegisteredNamespaces();
    }
    
    protected function _initDoctype() {
        //init the view
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');

        //Load global stylesheets
        $view->headLink()->appendStylesheet('../../../lib/bootstrap/css/bootstrap.min.css');

        //Load Scripts
        $view->headScript()->prependFile('../../../lib/bootstrap/js/bootstrap.min.js')
            ->headScript()->prependFile('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js')
            ->headScript()->prependFile("http://code.jquery.com/jquery-latest.js");
    }
    
    protected function _initViewHelpers()
    {
        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        $view->doctype('XHTML1_STRICT');
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');
        $view->headTitle()->setSeparator(' - ');
        $view->headTitle('SISCon');
    }
   
    protected function _initLayoutHelper()
    {
        $this->bootstrap('frontController');
        $layout = Zend_Controller_Action_HelperBroker::addHelper(new SISCon_LayoutLoader());
    }
   
    protected function _initAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array(
        'namespace' => 'Externo',
        'basePath' => APPLICATION_PATH . '\modules\externo'
        ));

        // Iniciando o autoloader para recuperar dados do banco
        $loader = Zend_Loader_Autoloader::getInstance();
        $loader->setFallbackAutoloader(true);

        return $autoloader;
    }
    
    protected function _initDB()
    {
//        var_dump($db);
//        exit;
        
//        $db = Zend_Db::factory('PDO_MYSQL', array( 
//                  'host' => 'localhost', 
//                  'username' => 'root', 
//                  'password' => '', 
//                  'dbname' => '' 
//              )); 
//
//       Zend_Db_Table_Abstract::setDefaultAdapter($db); 
//        
//        $dbConfig = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini'); 
//        $dbAdapter = Zend_Db::factory($dbConfig->_adapter, array(
//            'host'     => $dbConfig->hostname,
//            'username' => $dbConfig->username,
//            'password' => $dbConfig->password,
//            'dbname'   => $dbConfig->dbname
//        ));
//        var_dump($dbAdapter);
//        exit;
//
//        My_Db_Table_Abstract::setDefaultAdapter($db);
//
//        Zend_Registry::set('db', $db);
//
//
//        if (APPLICATION_ENV == 'development') {
//            $profiler = new Zend_Db_Profiler_Firebug('All DB Queries');
//            $profiler->setEnabled(true);
//            $dbAdapter->setProfiler($profiler);
//        }
    }
}
