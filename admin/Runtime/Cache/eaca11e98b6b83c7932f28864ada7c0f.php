<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title>错误信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ($publicCss); ?>" rel="stylesheet" type="text/css">
</head>
<body>
<div style="width:100%;text-align:center" >
<table class="error"  cellpadding=0 cellspacing=0 >
	<tr>
		<td height='5'  class="topTd" ></td>
	</tr>
	<tr class="row" >
		<th  class="tCenter red"><img SRC='../Public/images/update.gif' class='img' align='absmiddle' BORDER='0'> <?php echo (nl2br(htmlspecialchars($error))); ?></th>
	</tr>
	<tr>
		<td height='5'  class="topTd" ></td>
	</tr>
	<tr>
		<td class="tCenter row" >
		您可以选择 [ <a href="<?php echo ($FCS["SERVER"]["PHP_SELF"]); ?>">重试</a> ] [ <a href="javascript:history.back()">返回</a> ] 或者 [ <a href="__URL__?m=index&a=index">回到首页</a> ]</td>
	</tr>
	<tr>
		<td height='5'  class="bottomTd"></td>
	</tr>
</table>
<div class='logo'> ThinkPHP <sup style='color:gray;font-size:9pt'><?php echo (THINK_VERSION); ?></sup><span style='color:silver'> { Fast,Compatible & Simple OOP PHP Framework }</span>
</div>
</body>
</html>