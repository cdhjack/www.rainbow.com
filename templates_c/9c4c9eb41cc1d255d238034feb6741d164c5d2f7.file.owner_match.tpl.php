<?php /* Smarty version Smarty-3.1.5, created on 2017-08-14 14:39:26
         compiled from "D:\www\www.rainbow.com//templates/owner\owner_match.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240645991459edc0e88-57936903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4c9eb41cc1d255d238034feb6741d164c5d2f7' => 
    array (
      0 => 'D:\\www\\www.rainbow.com//templates/owner\\owner_match.tpl',
      1 => 1502576348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240645991459edc0e88-57936903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'matchArr' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5991459ee8ae1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5991459ee8ae1')) {function content_5991459ee8ae1($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="owner-public-header">
    <a href="index.html" class="return"></a>
    <div class="headline">我的比赛</div>
    <a href="owner_history.html" class="ctrul">历史</a>
</div>
    
<div class="owner-event">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matchArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<div class="event-box">
    	<dl>
        	<dt><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar'];?>
" /></dt>
            <dd>
            	<h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
彩红屋【<?php echo $_smarty_tpl->tpl_vars['item']->value['red_packet_amount'];?>
彩虹币】</a></h1>
                <ul>
                	<li>手机号：<?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</li>
                    <li>群人数：<span><?php echo $_smarty_tpl->tpl_vars['item']->value['friend_count'];?>
位</span></li>
                </ul>
            </dd>
        </dl>
        <div class="event-bar">
        	<div class="event-bar-lt">
            	<div class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['join_match_num'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['red_packet_num'];?>
【<?php echo $_smarty_tpl->tpl_vars['item']->value['red_packet_amount'];?>
币】</div>
            	<progress class="progress1" string="12" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['progress'];?>
" max="100"></progress>
            </div>
            <div class="event-bar-rt"><a href="../user/room2.html">查 看<br />游 戏</a></div>
        </div>
    </div><!--/event-box-->
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
        暂无赛事信息
    <?php } ?>    
</div><!--/owner-addEvent-->

<div class="event-footer">
	<a href="owner_addEvent.html">+添加新赛事</a>
</div><!--/event-footer-->
</body>
</html>


<?php }} ?>