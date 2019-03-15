<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/31
 * Time: 13:07
 */

function smarty_modifier_mystyle($str,$fontsize="3",$fontcolor="green"){
    return "<font color={$fontcolor} size={$fontsize}>".$str.'</font>';

}