<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/21
 * Time: 18:08
 */
class Triangle extends Shape {

    private $bian1;
    private $bian2;
    private $bian3;

    function __construct($arr=array())
    {
        if (!empty($arr)){
            $this->bian1=$arr['bian1'];
            $this->bian2=$arr['bian2'];
            $this->bian3=$arr['bian3'];
        }
        $this->name="三角形";
    }

    function area()
    {
        // TODO: Implement area() method.
        $p=($this->bian1+$this->bian2+$this->bian3)/2;
        $s=sqrt($p*($p-$this->bian1)*($p-$this->bian2)*($p-$this->bian3));
        return $s;

    }
    function zhou()
    {
        // TODO: Implement zhou() method.

        return $this->bian1+$this->bian2+$this->bian3;
    }
    function view()
    {
        // TODO: Implement view() method.

        $form='<form action="index.php?action=triangle" method="post">';
        $form.=$this->name.'第一边：<input type="text" name="bian1" value="'.$_POST['bian1'].'"/><br>';
        $form.=$this->name.'第二边：<input type="text" name="bian2" value="'.$_POST['bian2'].'"/><br>';
        $form.=$this->name.'第三边：<input type="text" name="bian3" value="'.$_POST['bian3'].'"/><br>';
        $form.='<input type="submit" name="dosubmit" value="计算"><br>';
        $form.='</form>';
        echo $form;

    }


    function yan($arr)
    {
        // TODO: Implement yan() method.
        $bj=true;
        if ($arr['bian1']<0){
            echo "边1不能小于零";
            $bj=false;
        }
        if ($arr['bian2']<0){
            echo "边2不能小于零";
            $bj=false;
        }
        if($arr['bian3']<0){
            echo "边3不能小于零";
            $bj=false;
        }
        if(($arr['bian1']+$arr['bian2']<$arr['bian3'])||($arr['bian3']+$arr['bian1']<$arr['bian2'])||
        ($arr['bian2']+$arr['bian3']<$arr['bian1'])){

            echo "连边之和必须大于第三边";
            $bj=false;


        }


        return $bj;
    }

}