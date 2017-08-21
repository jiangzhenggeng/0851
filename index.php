<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录
@ini_set('memory_limit', '512M');
define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
if( isset($_GET['areaid'])){
    $_COOKIE['areaid'] = $_GET['areaid'];
    $areaid = $GLOBALS['areaid'] = $_GET['areaid'] = $_COOKIE['areaid'];
    setcookie('areaid',$areaid,time()+99999999,'/');
}else{
    $areaid = $GLOBALS['areaid'] = $_GET['areaid'] = $_COOKIE['areaid'];
}

define('AREAID',$areaid);

include PHPCMS_PATH.'/phpcms/base.php';
ini_set('display_errors',1);
error_reporting(E_ALL);
define('DEF_IMG','/statics/css/gzsjqt/images/default-img.jpg');
pc_base::creat_app();


