<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action
{
    public function index()
    {
        /*创建实例化对象
         * */
//      $m=new Model('user');
        $m = M('user');


        /* C方法：
         * create 创建数据
         *
         * */

//        $m->username = "haha";
//        $m->sex = "0";
//        //返回新添加id号
//        $idnum = $m->add();

        /* U方法：
         *  updata数据
         * */
//        $data['id']=1;
//        $data['username']='php';
//        //返回影像行数
//        $count = $m->save($data);

        /*
         * R法方：READ 读取数据库
         * */
        $arr = $m->select();
//        $arr = $m->find(1);
//        $getfield = $m->where('id=2')->getField("username");

        /* D方法：
         * delete 删除数据
         * */
//         $m->where('id>3')->delete();


        //赋值变量
        $this->assign("data", $arr);
        //显示
        $this->display();

    }

    /*
     * 删除数据
     * */
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

    public function show()
    {
//        $m=M('user');
//        $arr1=$m->select();
        echo '<pre>';
//        print_r($arr1);
        echo '<pre>';
        /*
         * s数组查询
         *
         * LIKE
         *
         *    NOTLIKE
         *
         * BETWEEN
         *
         *    NOT BETWEEN
         * IN
         *   NOT IN
         *
         *
         *
         * */
//        $data['sex']=0;
//        $data['username']='haha';
//        $data['_logic']='or';
//        $data['id']=array('GT',6);  //GT great 大于
//        $data['id']=array('lt',6);  //LT limite小于
//        $data['id']=array('eq',10); //EQ equite等于
//        $data['id']=array('egt',4); //EGT 大于等于
//        $data['id']=array('elt',10); //ELT 小于等于
//        $data['id']=array('neq',10); //NEQ 不等于
//        $data['id']=array('between',array(5,10)); //between 5-7之间
//        $data['id']=array('not between',array(5,10)); //不再什么区间，not between 必须有空格
//        $data['id']=array('in',array(5,8,6,10)); //in 再什么里
//        $data['id']=array('not in',array(5,8,10));// not in 不再什么中
//        $data['username']=array('like','%ah%'); //模糊查询 %通配符
//        $data['username']=array('notlike','%ha%');
//        $data['username']=array('like',array('%a%','%m%'),'or'); //多条件模糊查询 or and
        /*
         * TEST
         * */
//        $data['id']=array('between',array(4,10));

        /*q区间查询*/
//        $data['id']=array(array('lt',4),array('gt',10),'or');   //区间查询
//        $data['username']=array(array('like','%ha%'),array('like','da%'),'haha','or');
        /*
         * count()
         * max()
         * */
        /*统计查询*/
//        $c=$m->where($data)->count();
//        $cmax=$m->max('id');
//        $cmin=$m->min('id');
//        $cavg=$m->avg('id');
//        $csum=$m->sum('id');
//        echo "总记录条数：".$c."<br>";
//        echo "最大记录：".$cmax."<br>";
//        echo "最小记录：".$cmin."<br>";
//        echo "平均数：".$cavg."<br>";
//        echo "总和：".$csum."<br>";

        /*SQL直接查询
         *query  主要处理读取数据
         *excute  用于更新和写入操作
        */
        $m = M();

//        $query = "insert into tp_user('username') values('xiaohai')";
        $rinsert=$m->execute("insert into tp_User('sex') values ('1')");
        $result = $m->query("select * from tp_user ");


        /*查询语句*/
//        $arr=$m->where($data)->select();
        var_dump($rinsert);
        var_dump($result);

        $this->display();
    }
}