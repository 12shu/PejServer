<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=GB2312" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>�ҵ�PC����</title> 
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />   
  <link href="css/base.css" rel="stylesheet" type="text/css" />
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script> 
  <script src="js/own.js"></script>
 </head> 
 
 <body>
 
 <div class="container-fluid">
 <div class="row-fluid">

<div class="col-md-3"><h1 class="title">PC ����</h1>
	<div class="list-group">
	<a href="#" class="list-group-item active list1">����״̬</a>
	<a href="#" class="list-group-item list2">��ݹ���</a>
	<a href="#" class="list-group-item list3">����ִ��</a>
	<a href="#" class="list-group-item list4">�ļ�����</a>
	</div>
</div>
<div class="col-md-9">
	<div class="right-1" >	
		<?php include("./plugin/console.php");?>
	</div>
	<div class="right-2" style="display:none">	
		<?php include("./plugin/quick.php");?>
	</div>
	<div class="right-3" style="display:none">	
		<?php include("./plugin/cmd.php");?>
	</div> 
	<div class="right-4" style="display:none">	
		<?php include("./plugin/file.php");?>
	</div> 
</div> 

</div>
</div>
 
 
   </body>
 </html>	