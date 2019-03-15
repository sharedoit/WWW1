<?php
/* Smarty version 3.1.33, created on 2018-12-31 16:42:00
  from 'D:\myphp_www\PHPTutorial\WWW\smarty1\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c29d65845bc79_76571809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b74b2b1afc5f41e9e0bb1ddd50332e0e3c06d4' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\smarty1\\views\\test.tpl',
      1 => 1546245717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/foot.tpl' => 1,
  ),
),false)) {
function content_5c29d65845bc79_76571809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\myphp_www\\PHPTutorial\\WWW\\smarty1\\myplugins\\modifier.mystyle.php','function'=>'smarty_modifier_mystyle',),1=>array('file'=>'D:\\myphp_www\\PHPTutorial\\WWW\\smarty1\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),2=>array('file'=>'D:\\myphp_www\\PHPTutorial\\WWW\\smarty1\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),));
echo '<?php
';?>/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/28
 * Time: 13:57
 */

<html>
<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><br>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <?php echo $_smarty_tpl->tpl_vars['var']->value;?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['var']->value;?>
<br>
        ________________________________________<br>
        <?php echo smarty_modifier_mystyle($_smarty_tpl->tpl_vars['var']->value,20,'red');?>
<br>

        <?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_html_select_time(array(),$_smarty_tpl);?>
<br>

    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:public/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><br><?php }
}
