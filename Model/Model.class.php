<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2019/1/4
 * Time: 18:47
 */
class Model{
    private $tabName=null;
    function __construct($tabName)
    {
        $this->tabName=$tabName;
        mysql_connect('localhost','root','root');
        mysql_select_db('thinkphp');
    }

    function select(){
        $arr=array();
        $sql="select * from tp_".strtolower($this->tabName);
        $result=mysql_query($sql);
//        var_dump($result);
        if ($result && mysql_num_rows($result)>0){
            while ($res=mysql_fetch_assoc($result)){
                    $arr[]=$res;
            }
        }


        return $arr;
    }
}

$m=new Model('user');
$arr=$m->select();
var_dump($arr);