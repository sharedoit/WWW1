<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/5
 * Time: 10:57
 */
namespace app\test\controller;
use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller {
    public function index($name='hello'){

    $data=Db::name('user')->find();


    $this->assign("data",$data);
    $this->assign('name',$name);
    echo '<pre>';
        var_dump($data);
    echo '</pre>';
    return $this->fetch();

    }

}