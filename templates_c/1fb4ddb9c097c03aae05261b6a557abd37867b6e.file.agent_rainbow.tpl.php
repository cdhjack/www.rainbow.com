<?php /* Smarty version Smarty-3.1.5, created on 2017-07-24 17:29:13
         compiled from "D:\www\www.rainbow.com//templates/agent\agent_rainbow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:335359759565926c63-72896592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb4ddb9c097c03aae05261b6a557abd37867b6e' => 
    array (
      0 => 'D:\\www\\www.rainbow.com//templates/agent\\agent_rainbow.tpl',
      1 => 1500888545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '335359759565926c63-72896592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_597595659e2b2',
  'variables' => 
  array (
    'agent_arr' => 0,
    'rechargeArr' => 0,
    'item' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597595659e2b2')) {function content_597595659e2b2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.error {
    color: #e22;
}
</style>
<div class="agent-public-header">
    <a href="index.html" class="return"></a>
    <div class="headline">我的彩虹币</div>
</div>
    
<div class="agent-rainbow">
    <dl class="agent-rainbow-top">
    	<dt><img src="<?php echo $_smarty_tpl->tpl_vars['agent_arr']->value['avatar'];?>
" /></dt>
        <dd class="dd-one">我的彩虹币</dd>
        <dd class="dd-two"><?php echo $_smarty_tpl->tpl_vars['agent_arr']->value['balance'];?>
</dd>
    </dl>
    
    
    <!--<form action="#" method="post">
    	<div class="amount"><input type="text" placeholder="输入充币数量" />个</div>
        <input type="button" value="确认充币" class="btn affirm-indent" />
    </form>-->
    
    <form action="#" method="post">
    	<div class="amount"><input type="text" name="amount_1" id="amount_1" placeholder="输入彩红币数量" />个</div>
        <span id="form-amount_1-error" class="error"></span>
        <div class="amount"><input type="text" name="reamount_1" id="reamount_1" placeholder="确认输入彩红币数量" />个</div>
        <span id="form-reamount_1-error" class="error"></span>
        <input type="hidden" name="agent_id" id="agent_id" value="<?php echo $_smarty_tpl->tpl_vars['agent_arr']->value['id'];?>
" />
        <input type="button" value="请求充币" class="btn" id="button-regcharge-1"/>
    </form>
    
    <div class="agent-rainbow-recoder">
    	<div class="title"><span>上次充币记录</span></div>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rechargeArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <dl>
        	<dt><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['tx'];?>
" /></dt>
            <dd class="dd-one">
            	<ul>
                	<li>充币：<?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</li>
                    <li>状态：<span <?php if ($_smarty_tpl->tpl_vars['item']->value['status']!=0){?>class="red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['status_name'];?>
</span></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['item']->value['order_time_name'];?>
：<?php echo $_smarty_tpl->tpl_vars['item']->value['order_time'];?>
</li>
                </ul>
            </dd>
            <!--<dd class="dd-two"><a href="#">确认订单</a></dd>-->
        </dl>
       <?php } ?> 
        <!--<dl>
        	<dt><img src="../images/img001.png" /></dt>
            <dd class="dd-one">
            	<ul>
                	<li>充币：15000</li>
                    <li>状态：<span class="red">已完成</span></li>
                    <li>时间：2017.12.12 15:30</li>
                </ul>
            </dd>
            <dd class="dd-two"><a href="#" class="gray">完成订单</a></dd>
        </dl>-->
    </div>
    
</div><!--/agent-rainbow-->

<!--确认充币弹出-->
<div class="rainbow-popup">
	<ul>
    	<li><span>充币数量</span></li>
        <li><b id="confirm_rainbow_num">150000</b></li>
        <li>代理商：<?php echo $_smarty_tpl->tpl_vars['agent_arr']->value['nickname'];?>
</li>
        <li>手机号：<?php echo $_smarty_tpl->tpl_vars['agent_arr']->value['mobile'];?>
<!--  微信号：1856458222--></li>
    </ul>
    <input type="button" value="确认订单" class="btn" style="cursor:pointer;" id="button-confirm-1"/>
</div><!--/rainbow-popup-->
<script type="text/javascript">
//各个输入框js验证
function checkInput(id){
	var obj = $('#'+id);
	var error_obj = $('#form-'+id+'-error');
	switch(id){		
		case 'amount_1':
			if(obj.val()==''){				
				error_obj.html('请输入彩红币数量');
				return false;
			}
			else if(isNaN(obj.val())){
				error_obj.html('彩虹币必须为数字');
				return false;
			}
			else if(obj.val()<0){
				error_obj.html('彩虹币不能为负数');
				return false;
			}
			else{
				error_obj.html('');
				return true;
			}			
			break;
		case 'reamount_1':
			if(obj.val()==''){				
				error_obj.html('请输入确认彩红币数量');
				return false;
			}
			else if(obj.val()!==$('#amount_1').val()){
				error_obj.html('两次输入的彩红币数量不一致');
				return false;
			}
			else{
				error_obj.html('');
				return true;
			}		
			break;
		default:
			return true;
			break;	
	}
}
function checkButtonRechargeForm(){
	var flag = 0;
	if(!checkInput('amount_1')){
		flag = flag + 1;
	}
	if(!checkInput('reamount_1')){
		flag = flag + 1;
	}
	if(flag > 0){
		return false;
	}
	return true;
}
//代理商请求充值
$('#button-regcharge-1').bind('click', function() {
	if(!checkButtonRechargeForm()){
		return false;
	}
	else{
		//给确认订单中彩虹币赋值
		$('#confirm_rainbow_num').html($('#amount_1').val());
		//显示确认订单	
		$(".rainbow-popup").show();
	}
});

//代理商请求充值确认提交
$('#button-confirm-1').bind('click', function() {
	if(!checkButtonRechargeForm()){
		return false;
	}
	var agent_id_value = $('#agent_id').val();
	var amount_1_value = $('#amount_1').val();
	$.ajax({
		url: '<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
agent/agentRechargeAction.php',
		type: 'post',
		dataType: 'json',
		data:{"agent_id":agent_id_value,
		"amount_1":amount_1_value
		},
		beforeSend: function() {
			$('#button-confirm-1').attr('disabled', true);
			//$('#button-confirm-1').before('<div class="attention"><img src="view/image/loading.gif" alt="" /> 请等待！</div>');
		},
		complete: function() {
			$('#button-confirm-1').attr('disabled', false);
		},
		success: function(data) {
			if(data.REV == 1){
				alert(data.MSG);
				window.location.reload(); 
			}
			else{
				$(".rainbow-popup").hide();//隐藏确认订单层，显示错误信息
				$('#form-'+data.INPUTID+'-error').html(data.MSG);
			}
		}
	});
});
</script>
</body>
</html>


<?php }} ?>