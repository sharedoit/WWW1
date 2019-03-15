<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/6
 * Time: 21:23
 */

namespace app\index\validate;
//use think\Model;
use think\Validate;

/*************验证器********************/
class Users extends Validate
{
//    protected $rule = [
//        ['nickname', 'require|min:5'], //require 必须要填写 min:5 最小长度
//        ['email', 'email', '邮箱格式错误'],
////        ['email', 'checkMail:www.tp-shop.cn', '格式错误'],
//        ['birthday', 'dateFormat:Y-m-d', '生日格式错误']
//
//    ];
///********验证邮箱格式 是否错误************/
////    protected function checkMail($value,$rule){
////        $result=strstr($value,$rule);
////        if ($result){
////            return true;
////        }else{
////            return "邮箱必须含有 $rule 域名";
////        }
////    }





}