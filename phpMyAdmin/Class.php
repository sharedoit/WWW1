<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/15
 * Time: 14:16
 */

class People
{
    public $name="daliang";
    public $age="28";
    public $sex="男";
    public $height="1.75cm";
    public $eye="big";
    function doFan(){
        return "dofan";
    }
    function doJW(){
        return "doJW";
    }
}
$bf1=new People();

echo $bf1->name;