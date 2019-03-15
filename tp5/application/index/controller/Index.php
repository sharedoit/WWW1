<?php

namespace app\index\controller;

use think\Controller;
use think\Cookie;
use think\Request;
use think\Db;
use think\Session;
use think\Url;
use think\db\Query;
use app\index\model\Users;
//use think\Paginator;

class Index extends Controller
{
    public function index($name = 'xiaoming')
    {

         echo 'hello world';
//      sql插入数据
//        $result=Db::execute("insert into tp_user(username,sex) values ('php','good')");
//        dump($result);
//      跟新数据
//        $result=Db::execute("update tp_user set username='pp' where id=13");
        //       删除
//         $result=Db::execute('delete from tp_user where id=13');
//       查询
//        $result=Db::query("select * from tp_user where id=13");
//        清空表
//        $result=Db::execute('TRUNCATE table tp_user');
        //显示数据库有哪些表
//          $result=Db::query('show tables from thinkphp');

        /*数据绑定 ？ 号占位符*/
//         Db::execute('insert into tp_user(username,sex) values (?,?)',['thinkphp',1]);
//         $result=Db::query('select * from tp_user where id=?',[15]);
        /*数据绑定 ：占位符*/
//        Db::execute('insert into tp_user(username,sex) values (:username,:sex)',['username'=>'daliang','sex'=>'1']);
//        $result=Db::query('select * from tp_user where id=:id',['id'=>17]);

        /*链式操作*/
//        Db::table('tp_user')->insert(['username'=>'c++','sex'=>'0']); //更新数据库
//        Db::table('tp_user')->where('id','14')->update(['username'=>'jjjjj']);//修改
//        Db::table('tp_user')->where('id','14')->delete();//删除
//        $result = Db::table('tp_user')->where('id', '10')->select();//查询
//        dump($result);
//          print_r($result);
//        Db::name('user')->where('id','2')->delete();
        /*----------------------------------------------------*/
//          $list=Db::name('user')->where('id',1)
//              ->field('id,username')->order('id','desc')
//              ->limit(10)->select();
//          print_r($list);
        /*-----------------------事务支持 InnoDB--------------------------------*/
//        Db::transaction(function (){
//            Db::name('user')->delete(8);
//            Db::name('user')->insert(['id'=>4,'username'=>'xiaoming2','sex'=>'0']);
//        });
        /*----------------------- TP5 数据查询----------------------------------*/
//        $result=Db::name('user')->where('id','4')->find();
        /*>=,<=,<>,in between*/
//        $result=Db::name('user')->where('id','<>','4')->select();
//        $result=Db::name('user')->where('id','in',[1,4,10,15])->select();
//        $result=Db::name('user')->where('id','between',[1,9])->select();
        /*查询字段为空*/
//        $result=Db::name('user')->where('username','null')->select();
        /*多字段差选*/
//        $result=Db::name('user')->where('id','>=','4')
//            ->where('username','like','%ph%')->select();
//        $result=Db::name('user')
//            ->where('username','like','%p%')
//            ->where('id',['in',[1,20]],['>=',4],'or')
//           ->limit(2)
//            ->select();
        /*批量查询*/
//        $result = Db::name('user')
//            ->where([
//                'username'=>['like','%a%'],
//                'id'=>[['in',['1,20,15,18']],['>=','10'],'or']
//                ])->select();
//      /*------------Query对象------------*/
//        $query=new Query();
//        $query->name('user')->where('id','>','10')
//            ->where('username','like','%p%');
//        $result=Db::select($query);
//        dump($result);
        /*-----行 列------*/
//        $name=Db::name('user')->where('id','15')->value('username');
//        $name=Db::name('user')->where('sex','0')
//            ->column('username','id');

        /*        $name=Db::name('user')->where('sex','1')
                    ->column('*','id');*/
        /*----------------聚合差选---------------count max min------------*/
//        $count=Db::name('user')->where('sex','0')->min('id')

        /*-------------------占位符差选---------------------------------*/
//        $result=Db::name('user')
//            ->where("id>:id and username like :name",['id'=>10,'name'=>'%php'])
//            ->select();

//        dump($result);
//        print_r($this->request->param());
//        $data = Db::name('user')->find();
//        $this->assign('data', $data);
//        $this->assign('name', $name);
//        return $this->fetch();


    }

    public function hello($name = 'haha')
    {
        $request = Request::instance();
        echo $request->url(); //获取当前URL地址
        echo '<br>';
        echo $this->request->url();
        echo '<br>';
        echo $this->request->bind('user_name', '张三2222');
        echo '<br>';
        echo $this->request->user_name;
        echo '<br>';
        echo request()->url();
        echo '<br>';
        print_r($this->request->param());
        echo '<br>';
        echo $this->request->param('name');
        echo '<br>';
        print_r(input()); //简便$this->request->param();
        echo '<br>';
        echo input('name');
        echo '<br>';
        /*param方法支持变量过滤和默认值*/
        echo $this->request->param('name', 'haha', 'strtolower');
        /*制定获取参数*/
        echo '<br>';
        echo '===================request===================<br>';
        echo 'GET参数';
        print_r($request->get());
        echo '<br>';
        echo 'Get参数：name：';
        print_r($request->get('name'));
        echo '<br>';
        echo 'POST参数：name：';
        print_r($request->post('name'));
        echo '<br>';
        echo 'cookie参数：name';
        print_r($request->cookie('name'));
        echo '<br>';
        echo '上传文件信息：image';
        print_r($request->file('image'));
        echo '<br>';
        echo '========================input==================<br>';
        echo 'GET参数';
        print_r(input('get.'));
        echo '<br>';
        print_r(input('get.name'));
        echo '<br>';
        print_r(input('post.name'));
        echo '<br>';

        echo '=======================其他参数================<br>';
        echo '请求方法：' . $request->method() . '<br>';
        echo '访问ip：' . $request->ip() . '<br>';
        echo '是否AJax请求：' . ($request->isAjax() ? '是' : '否') . '<br>';
        echo '当前域名:' . $request->domain() . '<br>';
        echo '当前入口文件:' . $request->baseFile() . '<br>';
        echo '包含域名的完整url:' . $request->url(true) . '<br>';
        echo 'URL地址的参数信息:' . $request->query() . '<br>';
        echo 'URL地址中 不含QUERY_STRING:' . $request->baseUrl() . '<br>';
        echo 'URL地址中的pathinfo信息：' . $request->pathinfo() . '<br>';
        echo 'Url地址中的后缀信息：' . $request->ext() . '<br>';
        echo '=========request当前模块/控制器/操作信息===========<br>';
        echo '模块：' . $request->module() . '<br>';
        echo '控制器：' . $request->controller() . '<br>';
        echo '方法：' . $request->action() . '<br>';


    }

    public function hello2()
    {

//        echo '模块控制器方法：'.$this->request->module().'|'.$this->request->controller().'|'. $this->request->action();

        $data = ['name' => 'thinkphp', 'status' => '1'];

//        return json($data);         //json输出
//        return json($data,201);
//        return xml($data);          //xml输出

        /*模板输出*/
//        $this->assign('name','渲染，模板');
//        return $this->fetch('index/index2');


    }

    /*respose 跳转信息*/
    public function hello3()
    {
        /*提示正确，跳转到到 action 方法*/
//        $this->success('答案正确','hello');
//        $this->error('错误','/admin/hello/index?name=111');
//        $this->redirect('http://www.tp-shop.cn');
    }

    public function url()
    {
        echo url('url2', 'a=1&b=2');
        echo '<br>';
        echo url('url3', 'c=3&d=4');
        echo '<br>';

    }

    public function url2()
    {

    }

    public function url3()
    {

    }


    public function testModel()
    {

//        $a=User::get(1);
//        print_r($a);
        $user = new User();
//     /*-------插入数据-----*/

//        $user->username='jquery';
//        $user->sex='1';
//        $user->save();
        /*-------数组插入数据--------*/
//        $userArr['username']='c++';
//        $userArr['sex']=0;
//        if ($result=User::create($userArr)){
//         echo '用户id：'.$result->id.' 用户名：'.$result->username.'性别：'.$result->sex;
//        }
        /*----------批量新增数据-----------------------*/
//        $list=[
//            ['username'=>'dongshuang','sex'=>1],
//            ['username'=>'jiaren','sex'=>0]
//
//        ];
//        if ($user->saveAll($list)){
//            echo "批量插入成功";
//        }

        /*---------------查询------------------*/
//        $user1=User::get(1);
//        echo $user1->username;
//        echo '<br>';
//        echo $user1->sex;
//        echo '<br>';
        /*-------对象用数组----------数组的形式访问----------------*/
//        $user2=User::get(15);
//        echo $user2['username'].'-----'.$user2['sex'].'<br/>';
//        /*--------------getBy**-------------------*/
//        $user=User::getByusername('java');
//        echo $user['username'];
//        echo $user['sex'];
        /*-------------如果不是主键，可以传入数组作为查询条件--------------------*/
//        $user=User::get(['username'=>'php','sex'=>0]);
//        echo $user['username'];
//        echo '<b/>';
//        echo $user['sex'];

        /*-------------where--------------------*/
//        $user=User::where(['username'=>'php'])->find();
//        echo $user['username'];
//        echo '<br/>';
//        echo $user['sex'];
//        echo '<br/>';
        /*--------------查询多个数据-----all方法--------------*/
//        $list=User::all();
//        $list=User::all('id'>=4);
//        $list=User::where('id','<=',20)->select();
//        dump($list);
//        foreach($list as $value){
//            echo 'ID:'.$value['id'].'-----username:'.$value['username']
//            .'--------Sex:'.$value->sex.'<br/>';
//        }


        /*-------------对数据库查询出来的数据更新--------------------*/
//        $user = User::get(1);
//        $user->username='sofeware';
//        $user->sex='1';
//        $user->id=null;
//        if (false !=$user->isUpdate(false)->save()){
//            return '跟新用户数据陈工';
//        }else{
//            return $user->getError();
//        }
        /*-----------------自定义更新数据----------------*/
//        $userArr['username']='worldhaha';
//        $userArr['sex']=0;
//        User::update($userArr,['id'=>1]);

        /*------------------删除---------------*/
//        $user=User::get(10);
//        $user->delete();
        /*-----------------destroy销毁--------------------*/
//        User::destroy('11');

        /*---------------------------------*/
        /*---------------------------------*/
    }

    public function readFun()
    {


        /********获取primarykey 1的数据*********/
        $user = Users::get(1);


        /****************读取数据*****************/
//        $name = $user->nickname . '<br/>';//自动检测getNickNameAttr法方
//            print_r($user->nickname);
//        echo $user->email.'<br/>';  //自动检测email getEmailAttr
//        echo $user->birthday.'<br>';
//        echo $user->reg_time.'<br/>';//自动检测时间 getRegTimeAttr
//        echo time('2018-1-8');


        /****************写入数据*****************/
//        $user->user_id='null';
//        $user->nickname=['a','b'];
////        $user->reg_time='2017-11-18';
//      $user->save();
//        $user=Users::get(1);
//        $user->email='55122@163.com';
//        $user->save();

//        Users::create(['email'=>'hello@163.com']);
    }

    /***************查询范围***********************/
    public function test16()
    {
//        $list=Users::scope('email,level')->select();
//        print_r($list);


//        $list=Users::scope('email');

         $list=Users:: scope('level')
//            $list=Users::scope(function ($query){
//
//                $query->order('user_id','desc');
//            })
        ->all();

        print_r($list);

    }
    public function test24(){
        $user=Users::get(1);
        /***转换成数据**/
//        dump($user->hidden(['nickname','sex'])->toArray());
        dump($user->visible(['nickname','sex'])->toArray());
        echo 'test24<br/>';


    }

    public function test25(){

        $list=Users::where('user_id','>',4)->select();
        $this->assign('list1',$list);
        $this->assign('count',count($list));


        return $this->fetch();
    }
    public function test26(){
        $list=Users::paginate(10 );
        $this->assign('list2',$list);
        $this->assign('count',count($list));
        return $this->fetch();

    }
    public function test40(){
//        session_start();
//        $_SESSION['a']="hello";
        echo '<br>';
//        Session::set('name','daliang','think2');
        echo Session::has('name');
//        Session::delete('name','think2');
        Session::clear('think2');
        print_r($_SESSION);
//        setcookie('aa',"world");

    }

    public function test39(){
        Session::set('name','hello');
        return $this->fetch();
    }
    public function test41(){
        Cookie::set('username','daliang','3600');
        echo Cookie::get('username');
    }


}
