<?php
/* Smarty version 3.1.33, created on 2018-12-28 15:00:54
  from 'D:\myphp_www\PHPTutorial\WWW\smarty1\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c25ca263b1f48_54025772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a44c56f06d3d939020fe456d59abb8904553358f' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\smarty1\\views\\test.tpl',
      1 => 1545980454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/foot.tpl' => 1,
  ),
),false)) {
function content_5c25ca263b1f48_54025772 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title>{$title}</title>
    </head>
    <body>
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>
        <?php echo '<script'; ?>
>
            function demo() {

            }
            if (true){

            }

        <?php echo '</script'; ?>
>

    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:public/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><br><?php }
}
