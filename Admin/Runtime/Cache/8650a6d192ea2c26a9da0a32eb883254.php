<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6" align="center">
  <form name="form1" action="" method="post">
    <tr> 
      <td height="28" colspan="5" background='__PUBLIC__/admin/images/tbg.gif'>
       <table width="96%" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td width="24%" style="padding-left:10px;"><b>角色管理</b> </td>
          <td width="76%" align="right"><b>
          	<a href="__URL__/add"><u>增加新角色</u></a>
          	|
            <a href="__GROUP__/Users/index"><u>管理系统用户</u></a>
          	</b>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr bgcolor="#FBFCE2" align="center" > 
      <td width="7%" height="24">ID</td>
      <td width="20%">角色名称</td>
      <td width="10%">状态</td>
      <td width="20%">备注</td>
      <td width="35%">管理操作</td>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align="center" bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td height="24"> 
        <?php echo ($data["id"]); ?>
      </td>
      <td height="24">
      	<?php echo ($data["name"]); ?>
      </td>
      <td height="24">
      	<?php if(($data["status"]) == "1"): ?><img src="__PUBLIC__/admin/images/ok.png"/><?php else: ?><img src="__PUBLIC__/admin/images/no.png"/><?php endif; ?>
      </td>
      <td height="24">
      	<?php echo ($data["remark"]); ?>
      </td>
      <td>
        <a href='__URL__/project/rid/<?php echo ($data["id"]); ?>'>权限设定</a>|
        <a href='__URL__/edit/rid/<?php echo ($data["id"]); ?>'>编辑</a>|
      	<a href='javascript:sdel("__URL__/del/rid/<?php echo ($data["id"]); ?>");'>删除</a>|
      <a href='__GROUP__/Users/index/rid/<?php echo ($data["id"]); ?>'>用户列表[<?php echo ($data["usernum"]); ?>]</a>
      </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr> 
      <td height="24" colspan="5" bgcolor="#F9FCEF">&nbsp;</td>
    </tr>
  </form>
</table>
</body>
</html>