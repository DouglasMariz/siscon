<?php
/**
 * Siscon Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license, you can get it at www.fgsl.eti.br.
 *
 * @category   Siscon
 * @package    Siscon_Controller
 * @subpackage Siscon_Controller_Action_Interface
 * @copyright  Copyright (c) 2012 Douglas Thyago Mariz de Assis (http://www.siscon.com.br)
 * @license   New BSD License
 * @version    1.0.0
 */
/**
 * Siscon_Controller_Interface
 */
interface Siscon_Controller_Action_Interface
{
	/**
	 * @param string $action
	 * @param string $controller
	 * @param string $module	  
	 * @return string
	 */
	public function getUrl($action = null,$controller = null ,$module = null);
}