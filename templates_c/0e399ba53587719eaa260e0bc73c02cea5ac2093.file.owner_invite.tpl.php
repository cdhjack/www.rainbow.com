<?php /* Smarty version Smarty-3.1.5, created on 2017-08-05 15:51:51
         compiled from "E:\www\www.rainbow.com//templates/owner\owner_invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2068359857917496f42-63559850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e399ba53587719eaa260e0bc73c02cea5ac2093' => 
    array (
      0 => 'E:\\www\\www.rainbow.com//templates/owner\\owner_invite.tpl',
      1 => 1501491447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2068359857917496f42-63559850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'code_arr' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_598579174ecb8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598579174ecb8')) {function content_598579174ecb8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="owner-public-header">
    <a href="index.html" class="return"></a>
    <div class="headline">房间邀请码</div>
</div>
    
<div class="owner-invitation">
	<div class="title"><span>您的房间邀请码</span></div>

    <div class="code">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['code_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    	<span><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>
        <?php } ?>
    </div>
    <h1><a href="#">赶快邀请您的好友加入吧！</a></h1>
</div><!--/owner-invitation-->
</body>
</html>


<?php }} ?>