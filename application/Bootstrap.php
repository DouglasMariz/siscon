<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initNamespaces() {
        Zend_Loader_Autoloader::getInstance()->registerNamespace('SISCon');
    }
    
    protected function _initDoctype() {
        //init the view
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');

        //Load global stylesheets
        $view->headLink()->appendStylesheet('../lib/bootstrap/css/bootstrap.min.css');

        //Load Scripts
        $view->headScript()->prependFile('../lib/bootstrap/js/bootstrap.min.js')
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
   
    protected function _initResourceAutoloader()
    {
        $resourceloader = new Zend_Loader_Autoloader_Resource (array( 
        'namespace' => 'Externo', 
        'basePath' => APPLICATION_PATH . '\modules\externo' 
       )); 

        $resourceloader->addResourceType('form', 'forms', 'Form')
                ->addResourceType('model', 'models', 'Model')
                ->addResourceType('dbtable', 'models\DbTable', 'Model_DbTable');
        
        return $resourceloader;
    }
}
