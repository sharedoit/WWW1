<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/29
 * Time: 9:43
 */
include "init.inc.php";
//$smarty->assign("title","this is title");
//$smarty->assign("content","hello world!!!!!!!!!!!");

$smarty->assign(array("title"=>"this is  title","content"=>"hello world*********"));
$var="this is a demo 2018";
$smarty->assign("var",$var);
$smarty->assign("name","北方编程");
//function fontstyle($str,$fontsize="3",$fontcolor="green"){
//    return "<font color={$fontcolor} size={$fontsize}>".$str.'</font>';
//
//}
//$smarty->registerPlugin("modifier","aa","fontstyle");
////preg_replace("//","str",$text)


function regreplace($test,$zz,$str){
    return preg_replace($zz,$str,$test);
}
//$smarty->addPluginsDir("modifier","zz","regreplace");


$smarty->display("test.tpl");