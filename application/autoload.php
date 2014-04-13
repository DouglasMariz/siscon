<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

set_include_path(get_include_path(). PATH_SEPARATOR . realpath('..\library\Zend'));
require_once 'Zend\Loader\Autoloader.php';
Zend_Loader_Autoloader::getInstance();
