<?php
///**
// * Created by PhpStorm.
// * User: hynet
// * Date: 2019/1/6
// * Time: 15:13
// */
namespace app\index\model;

use think\Model;
use think\Db;
use think\Request;
use think\db\Query;
use app\index\model\Comment;

class Users extends Model
{

    /*读取器  写入器*/
//    protected function getNickNameAttr($name1){
//        echo '<hr>';
//        return 'nickname:'.$name1;
//    }
//    protected function getRegTimeAttr($regtime,$data)
//    {
//        echo '<hr>';
//        dump($data);
//        return '原先值：' . $regtime . '=======' . date('Y-m-d', $regtime) . '<br/>';
//
//    }
//
//    protected function getEmailAttr($a, $data)
//    {
//        echo '<br/>';
//        echo 'a:';
//        dump($a);
//        echo '<br>';
//        echo 'data:';
//        dump($data);
//
//        echo '<hr>';
//        return "你的邮箱:$a----你的密码{$data['password']}";
//    }
//
//    protected function setRegTimeAttr($value){
//
//        echo '-----------------setRegTimeAttr-------------------------<br/>';
//        echo $value;
//        return strtotime($value);
//    }

/*********************转换自动完成******************/
protected $type=array(
    'birthday'=>'timestamp:Y-m-d H:m:s',
//    'nickname'=>'serialize',



);
/*******************自动完成 insert update auto****************************/
//protected $insert=array(
//    'nickname'=>'world',
//    'sex'=>'0',
//);
//
//protected $update=array(
//    'sex'=>1,
//    'nickname'=>'shuangshuang',
//
//);


/*******************************查询范围*******************************/
protected function scopeEmail($query){

    $query->where('email','tpshop@tpshop.cn');
//    echo 'scope';




}


protected function scopeLevel($query){
    $query->where('level',1);
}

    /********全局查询范围*************/





    /****************一对多模型**********************/

    public function comm(){
        return $this->hasMany('comment','uid','user_id');
}

}
