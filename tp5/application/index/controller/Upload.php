<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/11
 * Time: 19:44
 */
namespace app\index\controller;
use  think\Controller;
use think\Image;
use think\Request;
class Upload extends Controller {

    public function index(){
        return $this->fetch();
    }
    public function up(Request $request){
        $file=$request->file('file2');
        print_r($file);


        $result=$this->validate(['file2'=>$file],['file2'=>'requir|image'],['file2.require'=>'请选择上传文件','file2.image'=>'非法图片文件']);

        if (true!=$result){
            $this->error($result);
        }else{

        }

        $info=$file->rule('date')->move(ROOT_PATH.'pulic'.DS.'uploads');

    }

}