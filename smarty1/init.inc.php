<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/28
 * Time: 15:23
 */
date_default_timezone_set("PRC");
define("ROOT",str_replace("\\","/",dirname(__FILE__))."/");
//echo ROOT;
include ROOT."./libs/Smarty.class.php";

$smarty=new Smarty();
//设置模板template目录
$smarty->setTemplateDir(ROOT."views/");
$smarty->setCompileDir(ROOT."comps/");
$smarty->addTemplateDir(ROOT."templates/");
//设置插件目录
$smarty->addPluginsDir(ROOT."myplugins/");
//设置自动检测空格
$smarty->auto_literal=true;
//设置分隔符
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";



