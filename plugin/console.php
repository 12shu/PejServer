
<h1>����״̬</h1>
	<blockquote>
	<p>������ʾ���Ļ�����Ϣ��Ȩ��</p>
	</blockquote>
	<table class="table table-striped">
	<tr>
	<td>����IP</td>
	<td><?php echo $_SERVER['REMOTE_ADDR']?></td>
	</tr>
	<tr>
	<td>�û�Ȩ��</td>
	<td><?php system(whoami)?></td>
	</tr>
	<tr>
	<td>�ڴ�����</td>


	<td><?php echo memory_get_usage()?>MB</td>
	</tr><tr>
	<td>����ʱ��</td>
	<td><?php $myRuntime =explode(",", exec('uptime')); print $myRuntime[0];?></td>
	</tr>	
	</table>