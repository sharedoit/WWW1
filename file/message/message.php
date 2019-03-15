<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/27
 * Time: 16:03
 */
date_default_timezone_set("PRC");
header("Content-Type:text/html;charset=utf8");
$filename = "message.txt";
if (isset($_POST["dosubmit"])) {
    echo "用户提交了<br>";
    print_r($_POST);
    echo "<hr>";
//字段的分隔符使用|| 换行分割符号[n]
    $mess = $_POST["username"] . "||" . time() . "||" . $_POST["title"] . "||" . $_POST["content"] . "[n]";
    echo $mess . "<br>";
//写消息
    writemessage($filename, $mess);

}
//读消息
if (file_exists("message.txt")) {

    readmessage("message.txt");
}
function writemessage($filename, $mess)
{
    //打开文件
    $fp = fopen($filename, "a");
    if (flock($fp,LOCK_EX)){  //锁定
        fwrite($fp, $mess);
        flock($fp,LOCK_UN);  //释放
    }else{
        echo "写入锁定失败！！";
    }

    //关闭文件
    fclose($fp);
}

//自定义读取函数
function readmessage($filename)
{
//    $mess=file_get_contents($filename);
    $mess="";
    $fp=fopen($filename,"r");

    //资源形式读取文件

    if (flock($fp,LOCK_SH)){
        while (!feof($fp)){
            $mess.=fread($fp,1024);
        }

        flock($fp,LOCK_UN);
    }


    ////////////////////////////
    echo "原始读取字符串：".$mess."<br>";
    $mess= rtrim($mess,"[n]");
    echo "截取读取字符串：".$mess."<br>";
    $arrmess=explode("[n]",$mess);
    echo "<hr>";
    foreach ($arrmess as $m){


        $str1=explode("||",$m);
        list($username,$dt,$title,$content)=$str1;
        echo "用户:<b>".$username."</b>时间：".date("Y-m-d H:i:s",$dt)."主题是：".$title."内容：".$content."<br><hr><br>";

    }
    fclose($fp);
}


?>
<form action="message.php" method="post">
    用户名：<input type="text" name="username" value=""/><br>
    标 题：<input type="text" name="title" value=""/><br>
    内 容：<textarea name="content" cols="40" rows="4"></textarea><br>
    <input type="submit" name="dosubmit" value="留言"/><br>
</form>
