<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/5
 * Time: 11:45
 */
namespace app\admin\controller;

use think\Controller;

use think\Request;

use think\Db;


class Hello extends Controller {

    function index(){
        echo "Hello controller";
        return $this->fetch();
    }

}