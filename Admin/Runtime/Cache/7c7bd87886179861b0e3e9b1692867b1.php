<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<style>
#verifyImg{
	position: absolute;
	top: 137px;
	cursor: pointer;
}
</style>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" align="center" cellspacing="1" cellpadding="1" bgcolor="#D6D6D6">
  <tr>
    <td height="19" background="__PUBLIC__/admin/images/tbg.gif" bgcolor="#E7E7E7"> 
      <table width="96%" border="0" cellspacing="0" cellpadding="1">
        <tr> 
          <td width="24%" style="padding-left:10px;"><b><strong>修改密码</strong></b> </td>
        </tr>
      </table></td>
</tr>
<tr>
    <td height="180" align="center" valign="top" bgcolor="#FFFFFF">
	<form name="form1" action="__URL__/changePwd" method="post">
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
  <input name='uid' value='<?php echo ($uid); ?>' type="hidden"/>
          <tr> 
            <td width="16%" height="30" align="center">旧密码：</td>
            <td width="84%"  style="text-align:left;"><input name="oldpwd" type="password" id="oldpwd" size="16" style="width:200px" /></td>
          </tr>
          <tr bgcolor="#F9FAF3"> 
            <td height="30" align="center">新密码：</td>
            <td style="text-align:left;"><input name="newpwd" type="password" id="newpwd" size="16" style="width:200px" /></td>
          </tr>
          <tr> 
            <td height="30" align="center">确认密码：</td>
            <td style="text-align:left;"><input name="confirmpwd" type="password" id="confirmpwd" size="16" style="width:200px" /> </td>
          </tr>
          <tr bgcolor="#F9FAF3"> 
            <td height="30" align="center">验证码：</td>
            <td style="text-align:left;"><input name="verify" type="text" size="10" maxlength="4" id="verify" /><img class="code" id="verifyImg" src="__GROUP__/Public/verify" onclick="show(this);" alt="点击刷新验证码" title="点击刷新验证码" /> </td>
          </tr>
          <tr> 
            <td height="30">&nbsp;</td>
            <td><input type="submit" name="Submit" value=" 提交 " class="coolbg np" />&nbsp;<input type="button" name="back" onclick="document.form1.reset();" value=" 重置 " class="coolbg np" /></td>
          </tr>
        </table>
      </form>
      <script language="JavaScript">
function show(obj){
obj.src="__GROUP__/Public/verify/random/"+Math.random();
}
document.login.account.focus();
</script>
	  </td>
</tr>
</table>
</body>
</html>