<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/27
 * Time: 14:53
 */
//打开资源
$fp=fopen("demo.txt","a");
//var_dump($fp);
//fwrite($fp,"www.baidu.com\n");

//读一个字符
/*
 while (!feof($fp)){
    echo fgetc($fp);
}*/

    //读一行
/*
while (!feof($fp)){
    echo fgets($fp)."<br>";
}
*/
//读取指定长度
//echo fread($fp,10);

//文件长度
//    echo filesize("demo.txt");
//关闭资源
echo ftell($fp)."<br>";

fwrite($fp,"hello world");

//fseek($fp,4);
//echo ftell($fp)."<br>";
//echo fread($fp,11)."<br>";
//echo ftell($fp);
//echo "<hr>";
//fseek($fp,-4,SEEK_END);
//echo fread($fp,3);
//rewind($fp);
//echo "<hr>";
//echo ftell($fp);



fclose($fp);