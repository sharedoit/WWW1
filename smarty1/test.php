<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/28
 * Time: 13:33
 */
date_default_timezone_set("PRC");
include "./libs/smarty.class.php";


$smarty=new Smarty();
$smarty->setTemplateDir("./views");
$smarty->setCompileDir("comps");
$smarty->addTemplateDir("./demo");

//定界符号使用空格
$smarty->auto_literal=false;

//设置定界符号
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";



$smarty->assign("title","this is a demo");
$smarty->assign("content","this is content  ..........");
$smarty->display("test.tpl");


