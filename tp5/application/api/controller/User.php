<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/9
 * Time: 15:34
 */
namespace app\api\controller;

use think\Controller;
use think\Db;
use think\Url;
use app\index\model\Users;
use app\index\validate;
class User extends Controller {
    function index(){

    }

//    public function test32($id=0){
//        $user=Users::get($id);
//        if ($user){
//            return json($user);
//        }else{
//            return json(['error'=>'用户不存在',404]);
//        }
//    }

    public function test33($id=0){
        $user=Users::get($id);
        if ($user){
            return json(array(
                'status'=>1,
                  'msg'=>'查询成功',
                    'data'=>$user

                  )
            );
        }else{
            return json(array(
                'status'=>-1,
                'msg'=>'用户不存在',
                'data'=>''
            ));
        }
    }
}
