<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/21
 * Time: 15:59
 */
//这个类是矩形类，这个类按形状规范实现
class Rect extends Shape {

    private $width;
    private $height;

    function __construct($arr=array())
    {
        if (!empty($arr)){
            $this->width=$arr['width'];
            $this->height=$arr['height'];
        }

        $this->name="矩形";
    }

    function area()
    {
        // TODO: Implement area() method.
        return $this->height*$this->width;
    }
    function zhou()
    {
        // TODO: Implement zhou() method.
        return 2*($this->width+$this->height);
    }
    function view()
    {
        // TODO: Implement view() method.
        $form='<form action="index.php?action=rect" method="post">';
        $form.=$this->name.'的宽：<input type="text" name="width" value="'.$_POST['width'].'"/><br>';
        $form.=$this->name.'的高：<input type="text" name="height" value="'.$_POST['height'].'"/><br>';
        $form.='<input type="submit" name="dosubmit" value="计算"><br>';
        $form.='</form>';
        echo $form;

    }
    function yan($arr)
    {
        if ($arr['width']<0){
            echo $this->name."宽度不能为0";
            $bg=false;
        }

        if($arr['height']<0){
            echo $this->name."高度不能为0";
            $bg=false;

    }

    return $bg=true;
        // TODO: Implement yan() method.
    }
}