<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/6
 * Time: 20:33
 */

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use think\Model;
use think\Validate;
use app\index\model\Users;
use app\index\model\Comment;

//use app\index\validate\Users;


class User extends Controller
{

    public function index()
    {


    }

    /**************Create方法创建视图*******************/
    public function create()
    {

        return view();
//       return view('user/create');
    }

    public function add()
    {
        $users = new Users();
        if ($users->validate(true)->save(input('post.'))) {

            return '用户[' . $users->nickname . ':' . $users->user_id . ']新增功能';

        } else {
            return $users->getError();
        }

//       echo 'add';

    }

    public function test()
    {
        $username = $this->param('username');
        /********判断名称是否为空*********/
//       if (empty($username)){
//           echo '名称不能为空';
//       }
        $email = $this->param('email');
        $birthday = $this->param('birthday');
    }
/**********一对多关联**************/
    public function test19()
    {
        $user = Users::get(1);
        echo $user->nickname.'<br/>';
//        print_r($user->comm);
       $comm=$user->comm();
        foreach ($user->comm as $comm){
            echo $comm->username;
        }

    }


}