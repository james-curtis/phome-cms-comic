<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();
//验证权限
CheckLevel($logininid,$loginin,$classid,"ingroup");
$enews=ehtmlspecialchars($_GET['enews']);
$postword='增加';
$url="<a href='ListInGroup.php".$ecms_hashur['whehref']."'>管理来自渠道</a>&nbsp;->&nbsp;增加来自渠道";
if($enews=="EditInGroup")
{
	$gid=(int)$_GET['gid'];
	$postword='修改';
	$r=$empire->fetch1("select * from {$dbtbpre}enewsingroup where gid='$gid'");
	$url="<a href='ListInGroup.php".$ecms_hashur['whehref']."'>管理来自渠道</a>&nbsp;->&nbsp;修改来自渠道：<b>".$r[gname]."</b>";
}
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>来自渠道</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td height="25">位置：<?=$url?></td>
  </tr>
</table>
<form name="form1" method="post" action="ListInGroup.php">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td width="21%" height="25"><?=$postword?>来自渠道</td>
      <td width="79%" height="25"><input name="enews" type="hidden" id="enews" value="<?=$enews?>"> 
        <input name="gid" type="hidden" id="gid" value="<?=$gid?>"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">渠道名称</td>
      <td height="25"> <input name="gname" type="text" id="gname" value="<?=$r[gname]?>" size="30">      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">分润比例</td>
      <td height="25">
          <input name="number" type="number" id="number" min="1"  max="100" value="<?=$r[number]?>" size="30">
          &nbsp;&nbsp;请输入1-100的数字
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">扣量比例</td>
      <td height="25">
          <input name="kou" type="number" id="kou" min="0" max="100" value="<?=$r[kou]?>" size="30">
          &nbsp;&nbsp;请输入0-100的数字
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">起扣金额</td>
      <td height="25">
          <input name="money" type="number" min="0" id="money" value="<?=$r[money]?>" size="30">
          &nbsp;&nbsp;请输入大于0的数字
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">显示排序</td>
      <td height="25"> <input name="myorder" type="text" id="myorder" value="<?=$r[myorder]?>" size="30">        <font color="#666666">(值越小越前面)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
