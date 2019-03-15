<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/index.php/User/search" method="post">
    用户名：<input type="text" name="username" value=""/>
    性  别：男<input type="radio" name="sex" value="1"/>女<input type="radio"  name="sex"  value="0"/>
    <input type="submit" value="查询">
</form>

<table width="500" border="1" align="left">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>sex</th>
        <th>操作</th>
    </tr>

    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td><?php echo ($vo["sex"]); ?></td>
            <td>操作</td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>
</body>
</html>