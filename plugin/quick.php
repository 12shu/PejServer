	<h1>��ݹ���</h1>
	<blockquote>
	<p>��ݹ���ϵͳ��ֱ������</p>
	</blockquote>
	<div class="row">
      <div class="col-xs-3 icon-every">
	  <a id="mute" href="#"><img src="images/mute.png" class="img-responsive hidden-xs"><br />	
	  <div class="icon-botton"><button type="button" class="btn btn-info">���Ծ���</button></div></a>
      </div>
      <div class="col-xs-3 icon-every">
	  <a id="process" data-toggle="modal" data-target="#msgprocess" href="#msgbox"><img src="images/process.png" class="img-responsive hidden-xs"><br />
	  <div class="icon-botton"><button type="button" class="btn btn-info">�رս���</button></div></a>
      </div>
      <div class="col-xs-3 icon-every">
	  <a id="shot" href="#"><img src="images/shot.png" class="img-responsive hidden-xs"><br />		  
	  <div class="icon-botton"><button type="button" class="btn btn-info">�鿴��ͼ</button></div></a>
      </div>
      <div class="col-xs-3 icon-every">
	  <a id="cam" href="#"><img src="images/cam.png" class="img-responsive hidden-xs"><br />		  
	  <div class="icon-botton"><button type="button" class="btn btn-info">����ͷ���</button></div></a>
      </div>	  
    </div>
	<br />
	<div class="row">
      <div class="col-xs-3 icon-every">
	  <a id="shutdown" href="#"><img src="images/teamviewer.png" class="img-responsive hidden-xs"><br />	 	  
	  <div class="icon-botton"><button type="button" class="btn btn-info">����Teamviewer</button></div></a>
      </div>
      <div class="col-xs-3 icon-every">
	  <a id="shutdown" href="#"><img src="images/wifi.png" class="img-responsive hidden-xs"><br />	  
	  <div class="icon-botton"><button type="button" class="btn btn-info">�ط�WIFI</button></div></a>
      </div>
      <div class="col-xs-3 icon-every">
	  <a id="shutdown" data-toggle="modal" data-target="#msgbox" href="#msgbox"><img src="images/shutdown.png" class="img-responsive hidden-xs"><br />
	  <div class="icon-botton"><button type="button" class="btn btn-info">��ʱ�ػ�</button></div></a>
      </div>
      <div class="col-xs-3 icon-every">
	  <a id="reboot" data-toggle="modal" data-target="#msgreboot" href="#msgreboot"><img src="images/reboot.png" class="img-responsive hidden-xs"><br />
	  <div class="icon-botton"><button type="button" class="btn btn-info">��ʱ����</button></div></a>
      </div>	  
    </div>
<!-- ��ʱ�ػ� -->
<div class="modal fade" id="msgbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">��ʱ�ػ�</h4>
      </div>
      <div class="modal-body">
	  	<div class="row">
	    <div class="col-xs-4 icon-every">
        <input type="text" class="form-control txt-time"  value="30" name="time">
		</div>
		<div class="col-xs-8 icon-every">
		<p class="input-p">���Ӻ�رռ����</p>
		</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-shutdown">�趨�ƻ�</button>
		<button type="button" class="btn btn-warning btn-cancelst">ȡ���ƻ�</button>		
        <button type="button" class="btn btn-default" data-dismiss="modal">�رմ���</button>
      </div>
    </div>
  </div>
</div>
<!-- ��ʱ���� -->
<div class="modal fade" id="msgreboot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">��ʱ����</h4>
      </div>
      <div class="modal-body">
	  	<div class="row">
	    <div class="col-xs-4 icon-every">
        <input type="text" class="form-control txt-rtime"  value="30" name="time">
		</div>
		<div class="col-xs-8 icon-every">
		<p class="input-p">���Ӻ����������</p>
		</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-rshutdown">�趨�ƻ�</button>
		<button type="button" class="btn btn-warning btn-cancelst">ȡ���ƻ�</button>		
        <button type="button" class="btn btn-default" data-dismiss="modal">�رմ���</button>
      </div>
    </div>
  </div>
</div>
<!-- �رճ��� -->
<div class="modal fade" id="msgprocess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">�رս���</h4>
      </div>
      <div class="modal-body">
	  	<textarea class="form-control text-tasklist" rows="10" readonly></textarea>
      </div>
      <div class="modal-footer">
        <div class="input-group input-process">
		<input type="text" class="form-control txt-process"  value="chrome">
		<span class="input-group-btn">
		<input name="submit_btn" type="submit"  class="btn btn-primary btn-process" value="����">
		</span>
		</div>
      </div>
    </div>
  </div>
</div>