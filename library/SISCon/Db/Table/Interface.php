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
 * @subpackage Siscon_Db_Table
 * @copyright  Copyright (c) 2014 Douglas Thyago Mariz de Assis (http://www.siscon.com.br)
 * @license   New BSD License
 * @version    1.0.0
 */

/**
 * Siscon_Db_Table_Interface
 */
interface Siscon_Db_Table_Interface
{
	public function getKeyValue(array $data);
	public function getTypeElement($fieldName);
	public function getFieldLabel($fieldName);
	public function getSelectOptions($fieldName, $where);
	public function getCastValue($fieldName,$value);
	public function getFieldKey();
	public function getFieldNames();
	public function getSearchField();
	public function getOrderField();
	public function isLocked($fieldName);
	public function getCustomSelect($where,$order,$limit);
	public function fetchAllAsArray($select);	
}