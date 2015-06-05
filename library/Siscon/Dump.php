<?php
/**
 * Helper destinado a facilitar debug com backtrace
 * 
 * @package Application
 * @subpackage Controller.Helper
 * @name Application_Controller_Helper_Dump
 * @author Caio Lucena <caio@voxtecnologia.com.br
 * @since 2011-03-22
 **/
class Application_Controller_Helper_Dump extends Zend_Controller_Action_Helper_Abstract
{
    /**
     * Metodo de saida do trace para debug, monta por linha a informação de arquivo / linha
     * 
     * @name dump
     * @author Caio Lucena <caio@voxtecnologia.com.br
     * @since 2011-03-22
     * @access public
     * @param mixed
     * @param boolean
     * @return void
     **/
    public function dump( $param, $exit = false )
    {
       $trace = array();
       $backtrace = debug_backtrace();
       
            $totalCall = sizeof($backtrace);
            for ($i=0; $i<$totalCall; $i++) {
                if(!$i)                  $trace[$i] = "&nbsp;+";
                elseif($i+1==$totalCall) $trace[$i] = "&nbsp;\\";
                else                     $trace[$i] = "&nbsp;|";
                $trace[$i] .= str_repeat("-", $totalCall-$i);
                if (!isset($backtrace[$i]['file']))
                    $backtrace[$i]['file'] = '';
                if (!isset($backtrace[$i]['line']))
                    $backtrace[$i]['line'] = '';
                $trace[$i] .= "> {$backtrace[$i]['file']}::<i>{$backtrace[$i]['line']}</i>\n";
            }
            
        echo '<pre>[<b> TRACE ROUTE </b>]<br />';
        foreach($trace as $indice => $value) echo $value;
        echo "<br />[<b> VALUE </b>]<br />";
        # Alterado para utilizar o Zend_Debug
        # @author Genison Junior <genison@voxtecnologia.com.br>
        # @since 1.6.0
        Zend_Debug::dump($param);
        echo '<hr /></pre>';
        if($exit) exit();
    }

    /**
     * Esse metodo é uma alias,implementada através do pattern "strategy", 
     * onde permite que o helper seja tratado como metodo do helper broker
     * 
     * @name direct
     * @author Caio Lucena <caio@voxtecnologia.com.br
     * @since 2011-03-22
     * @access public
     * @param mixed
     * @param boolean
     * @return void
     **/
    public function direct( $param, $exit = false )
    {
        $this->dump($param, $exit);
    }
}