<?php /* Smarty version Smarty-3.1.5, created on 2017-05-22 12:14:50
         compiled from "/data/home/byu1865080001/htdocs/admin/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040297925592265bae1b069-94692819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '701d8c89630de3972f5d4613a8653f9d74a91841' => 
    array (
      0 => '/data/home/byu1865080001/htdocs/admin/templates/login.tpl',
      1 => 1406853650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040297925592265bae1b069-94692819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_warning' => 0,
    'site_url' => 0,
    'remember_username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_592265baea827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592265baea827')) {function content_592265baea827($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
  <div class="box" style="width: 400px; min-height: 300px; margin-top: 40px; margin-left: auto; margin-right: auto;">
    <div class="heading">
      <h1><img src="view/image/lockscreen.png" alt="" /> 请输入您的登录信息。</h1>
    </div>
    <div class="content" style="min-height: 150px; overflow: hidden;">
	  <?php if ($_smarty_tpl->tpl_vars['error_warning']->value!=''){?>
      <div class="warning"><?php echo $_smarty_tpl->tpl_vars['error_warning']->value;?>
</div>
      <?php }?>
	  <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
admin/login.php" method="post" enctype="multipart/form-data" id="form">
	  <Input type="hidden" name="isweb" value="1">
        <table style="width: 100%;">
          <tr>
            <td style="text-align: center;" rowspan="4"><img src="view/image/login.png" alt="请输入您的登录信息。" /></td>
          </tr>
          <tr>
            <td>管理帐户：<br />
              <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['remember_username']->value;?>
" style="margin-top: 4px;" />
              <br />
              <br />
              安全密码：<br />
              <input type="password" name="password" value="" style="margin-top: 4px;" />
                            <!--<br />
              <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
admin/index.php?route=common/forgotten">忘记密码</a>-->
                            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="text-align: right;"><a onclick="$('#form').submit();" class="button">登录</a></td>
          </tr>
        </table>
	  </form>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#form input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#form').submit();
	}
});
//--></script> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>