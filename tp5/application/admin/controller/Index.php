<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/5
 * Time: 10:33
 */
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller
{
    public function index($name='xiaoming')
    {
        print_r($this->request->param());
        $data=Db::name('user')->find();
        $this->assign('data',$data);
        $this->assign('name',$name);

        return $this->fetch();

    }
}
