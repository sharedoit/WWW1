<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<H1>Hello <?php echo ($data); ?></H1>
<hr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>----<?php echo ($vo["username"]); ?>----<?php echo ($vo["sex"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>