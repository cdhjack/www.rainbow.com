<?php /* Smarty version Smarty-3.1.5, created on 2014-09-18 14:32:09
         compiled from "D:\www\www.yoti-app.com\trunk\admin/templates/coach_password_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283715416b2a7a8b0c7-55342173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fdb1af5b37b1165932969d85362d3e1aff99c2f' => 
    array (
      0 => 'D:\\www\\www.yoti-app.com\\trunk\\admin/templates/coach_password_form.tpl',
      1 => 1411021927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283715416b2a7a8b0c7-55342173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5416b2a7b35b6',
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'item' => 0,
    'title' => 0,
    'site_url' => 0,
    'backUrl' => 0,
    'coachInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416b2a7b35b6')) {function content_5416b2a7b35b6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
  <div class="breadcrumb">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['item']->value['separator'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a>
		<?php } ?>       
      </div>
    <div class="box">
    <div class="heading">
      <h1><img src="view/image/user.png" alt="" /> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
      <div class="buttons"><a onclick="$('#form').submit();" class="button">保存</a><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
admin/coach.php<?php echo $_smarty_tpl->tpl_vars['backUrl']->value;?>
" class="button">取消</a></div>
    </div>
    <div class="content">
      <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
admin/coachaction.php" method="post" enctype="multipart/form-data" id="form">
	  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['coachInfo']->value['ID'];?>
" />
	  <input type="hidden" name="act" value="updatepassword" />
        <table class="form">
          <tr>
            <td> &nbsp;&nbsp;&nbsp;教练：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['coachInfo']->value['rname'];?>
</td>
          </tr>
          <tr>
            <td><span class="required">*</span> 新密码：</td>
            <td><input type="password" name="password" value=""  />
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> 确认密码：</td>
            <td><input type="password" name="confirm" value="" />
              </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>