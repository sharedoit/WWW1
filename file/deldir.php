<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/27
 * Time: 12:29
 */
function deldir($file)
{
    //是否存在文件
    if (file_exists($file)) {
        echo "存在文件$file<br>";
        if (!is_dir($file)) {
            echo "不存在" . $file . "目录<br>";
        }

        //文件直接删除
        if (is_file($file)) {

        echo "存在文件1111111111111：" . $file . "<br>";
        unlink($file);
        }
//            echo "存在".$file."目录<br>";

        //存在目录
        if (is_dir($file)) {
                //打开文件自愿
                $dir = opendir($file);


            //读取文件资源
            while ($filename = readdir($dir)) {
                if ($filename != "." && $filename != "..") {
                    $filename = $file . "/" . $filename;
//                    echo $filename."<br>";
                    if (is_dir($filename)) {

                        echo "目录：" . $filename . "<br>";
                        deldir($filename);

                    } else {
                        echo "文件：" . $filename . "<br>";
                        unlink($filename);

                    }
                }
            }


            //关闭文件资源
            closedir($dir);
            rmdir($file);
        }
    }else{
        echo "不存在文件：".$file."<br>";
    }
}
deldir("a");
deldir("b");
deldir("c");
deldir("d");
deldir("e");