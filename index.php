<?php include("header.php");?>
<div class="col-md-3 lft"><h3 class="title"><?php echo $_SERVER["SERVER_NAME"] ?></h3>
	<div class="list-group lists">
	<a href="#" class="list-group-item active list1">����״̬</a>
	<a href="#" class="list-group-item list2">��ݹ���</a>
	<a href="#" class="list-group-item list3">����ִ��</a>
	<a href="#" class="list-group-item list4">�ļ�����</a>
	<a href="#" class="list-group-item list5">������</a>
	</div>
</div>
<div class="col-md-9">
	<div class="right-1" >	
		<?php include("plugin/console.php");?>
	</div>
	<div class="right-2" style="display:none">	
		<?php include("plugin/quick.php");?>
	</div>
	<div class="right-3" style="display:none">	
		<?php include("plugin/cmd.php");?>
	</div> 
	<div class="right-4" style="display:none">	
		<?php include("plugin/file.php");?>
	</div> 
	<div class="right-5" style="display:none">	
		<?php include("plugin/file.php");?>
	</div> 
</div> 

</div>
</div>

<?php include("footer.php");?>
