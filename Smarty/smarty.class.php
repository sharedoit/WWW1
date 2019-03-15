<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/26
 * Time: 10:38
 */
class Smarty{
    private $vars=array();

    //第一个 向模板中分配变量
    //有两个参数，一个参数是模板中的变量名，一个是分配给它的变量值
    public function assign($varname,$varvalue){
        $this->vars[$varname]=$varvalue;

    }

    //加载制定的模板，并显示
    //有一个参数，参数就是模板的文件名
    public function display($tplname){
        $html=file_get_contents($tplname);
        $zz='/\{\s*\$([a-zA-Z_]\w*)\s*\}/';
        $rep="<?php echo \$this->vars['\\1'];?>";
        $newhtml=preg_replace($zz,$rep,$html);
        file_put_contents($tplname.".php",$newhtml);
        include $tplname.".php";

    }
}