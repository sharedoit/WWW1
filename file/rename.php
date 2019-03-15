<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/27
 * Time: 13:20
 */
/*
 * 拷贝目录函数
 * $dirsrc 原目录
 * $dirto  目标目录
 * */
function copydir($dirsrc,$dirto){
    //如果原来的文件存在，是不是一个目录
    if (file_exists($dirto)){
        echo "存在目标目录<br>";
        if (!is_dir($dirto)){
            echo "目标不是一个目录，不能拷贝<br>";
            exit();
        }
    }else{
        mkdir($dirto);
    }

    //打开原目录复制
    $dir=opendir($dirsrc);
    while ($filename=readdir($dir)){
        if ($filename!="."&&$filename!=".."){
            echo $filename."<br>";
            $srcfile=$dirsrc."/".$filename;//原文件
            $tofile=$dirto."/".$filename; //目标文件
            if (is_dir($srcfile)){
                    copydir($srcfile,$tofile); //递归处理
            }else{
                copy($srcfile,$tofile);
            }
        }

    }

    closedir($dir);



}



copydir("a","d:/hello");