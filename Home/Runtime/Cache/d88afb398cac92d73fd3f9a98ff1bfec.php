<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modify</title>
    <script>
        window.onload=function () {
            if (<?php echo ($data["sex"]); ?>==0){
                document.getElementsByName('sex')[1].checked='checked';


            }else{
                document.getElementsByName('sex')[0].checked='checked';
            }
        }


    </script>
</head>
<body>
<form action="/ThinkPHP/index.php/User/updata" method="post">
    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
    姓名：<input type="text" name="username" value="<?php echo ($data["username"]); ?>">
    性别：<input type="radio" name="sex" value="1"><input type="radio" name="sex" value="0">
    <input type="submit" value="提交修改">
</form>
</body>
</html>