<?php
/**
 * Siscon Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license, you can get it at www.siscon.com.br.
 *
 * @category   Siscon
 * @package    Siscon_Db
 * @subpackage Siscon_Db_Table_Row
 * @copyright  Copyright (c) 2014 Douglas Thyago Mariz de Assis (http://www.siscon.com.br)
 * @license   New BSD License
 * @version    1.0.0
 */

/**
 * Siscon_Db_Table_Row_Abstract
 */
class Siscon_Db_Table_Row_Abstract extends Zend_Db_Table_Row_Abstract
{
	/**
	 * Namespace used in relationship methods
	 * @var string
	 */
	protected static $_dbTableNamespace =  'Application_Model_DbTable_';

	/**
	 * Used by __call() method
	 * @var array
	 */
	protected static $_realMethods = array(
			array(
					'pattern'	=> 'findParentBy',
					'target'	=> 'findParentRow'
			),
			array(
					'pattern'	=> 'findDependentsBy',
					'target'	=> 'findDependentRowset'
			)
	);

	public static function setDbTableNamespace($dbTableNamespace)
	{
		self::$_dbTableNamespace = $dbTableNamespace;
	}

	/**
	 * Adds features for __call() method
	 * Strucuture of $realMethods: array(array('pattern'=>'[alias method]','target'=>'[real method]'), ... )
	 * @param array $realMethods
	 */
	public static function setRealMethods(array $realMethods)
	{
		self::$_realMethods = $realMethods;
	}

	/**
	 * This method allows that you call findParentRow() or findDependentRowset() without passing related DbTable name
	 * @param string $method
	 * @param array $arguments
	 */
	public function __call($method,$arguments)
	{
		foreach(self::$_realMethods as $realMethod)
		{
			$matches = array();
			$dbTable = self::$_dbTableNamespace . str_replace($realMethod['pattern'], '', $method);
			preg_match("/({$realMethod['pattern']})/", $method,$matches);

			if (!empty($matches))
			{
				return call_user_func_array(array($this,$realMethod['target']), array($dbTable));
			}
		}
	}

}