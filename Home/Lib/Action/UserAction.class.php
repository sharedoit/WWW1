<?php

/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/1
 * Time: 10:47
 */
class UserAction extends Action
{
    public function index()
    {
        $m = M('user');
        $arr = $m->select();
        $this->assign('data', $arr);
        echo "<pre>";
//        var_dump($arr);
        echo "</pre>";
        $this->display();
    }
    /******************************************/
    /*搜索模块*/
    public function search()
    {

//        var_dump($_POST);
        $m = M('user');
        if (isset($_POST['username'])&&$_POST['username']!=null){
            $data['username'] = array('like',"%{$_POST['username']}%");
        }
        if (isset($_POST['sex'])&&$_POST['sex']!=null){
            $data['sex']=array('eq',$_POST['sex']);
        }

        $data['_logic']='and';
        $arr = $m->where($data)->select();

        $this->assign('data',$arr);
        $this->display('index');

//        var_dump($arr);

    }


    /****************************************/


    public function del()
    {
        $m = M('user');
        $id = $_GET['id'];
        $count = $m->delete($id);
        if ($count > 0) {
            $this->success("数据删除成功");
        } else {
            $this->error("数据删除失败");
        }
    }

    /*
     * 显示修改页面
     * */
    public function modify()
    {
        $id = $_GET['id'];
        $m = M('user');
        $arr = $m->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function updata()
    {
        $m = M('user');
        $data['id'] = $_POST['id'];
        $data['username'] = $_POST['username'];
        $data['sex'] = $_POST['sex'];

        $count = $m->save($data);
        if ($count > 0) {
            $this->success("数据更新成功");
        } else {
            $this->error("数据更新失败");
        }
    }


}