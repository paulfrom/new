<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理平台</title>
<script type="text/javascript" src="__PUBLIC__/js/ThinkAjax.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/CheckForm.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/mootools.js"></script>
 <script language="JavaScript">
<!--
var PUBLIC	 =	 '__PUBLIC__';
ThinkAjax.image = [	 '__PUBLIC__/Images/loading2.gif', '__PUBLIC__/Images/ok.gif','__PUBLIC__/Images/update.gif' ]
ThinkAjax.updateTip	=	'登录中～';
function loginHandle(data,status){
if (status==1)
{
$('result').innerHTML	=	'<span style="color:blue"><img SRC="__PUBLIC__/Images/ok.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="" align="absmiddle" > 登录成功！3 秒后跳转～</span>';
$('form1').reset();
window.location = '__URL__';
}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	overflow:hidden;
}
.STYLE3 {color: #528311; font-size: 12px; }
.STYLE4 {
	color: #42870a;
	font-size: 12px;
}
-->
</style></head>

<body>
<form method='post' name="login" id="form1" >
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#e5f6cf">&nbsp;</td>
  </tr>
  <tr>
    <td height="608" background="__PUBLIC__/images/login_03.gif"><table width="862" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="266" background="__PUBLIC__/images/login_04.gif">&nbsp;</td>
      </tr>
      <tr>
        <td height="95"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="424" height="95" background="__PUBLIC__/images/login_06.gif">&nbsp;</td>
            <td width="183" background="__PUBLIC__/images/login_07.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="21%" height="30"><div align="center"><span class="STYLE3">用户</span></div></td>
                <td width="79%" height="30"><input type="text" name="userName" id="userName"  style="height:18px; width:130px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"/></td>
              </tr>
              <tr>
                <td height="30"><div align="center"><span class="STYLE3">密码</span></div></td>
                <td height="30"><input type="password" name="password" id="password"  style="height:18px; width:130px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"/></td>
              </tr>
              <tr>
                <td height="30">&nbsp;</td>
                <input type="hidden" name="ajax" value="1">
                <td height="30"><img src="__PUBLIC__/images/dl.gif" width="81" height="22" border="0" usemap="#Map"></td>
                 </tr>
            </table></td>
            <td width="255" background="__PUBLIC__/images/login_08.gif">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="247" valign="top" background="__PUBLIC__/images/login_09.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22%" height="30">&nbsp;</td>
            <td width="56%">&nbsp;</td>
            <td width="22%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="44%" height="20">&nbsp;</td>
                <td width="56%" class="STYLE4">版本 2008V1.0 </td>
              </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#a2d962">&nbsp;</td>
  </tr>
</table>
</form>

<map name="Map"><area shape="rect" coords="3,3,36,19" href="javascript:ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result')"><area shape="rect" coords="40,3,78,18" href="javascript:$('form1').reset();"></map></body>
</html>