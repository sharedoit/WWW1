<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/21
 * Time: 15:52
 */

//这是一个形状的抽象类，定义子类必须实现的方法
abstract class Shape{
//    形状的名称
   public $name;
//    面积
    abstract function area();
//    周长
    abstract function zhou();
//    图形表单界面
    abstract function view();
//    验证
    abstract function yan($arr);


}