/*
author:yfgeek
website:www.yfgeek.com
version:beta1
*/
function sleep(n) { //n��ʾ�ĺ�����
            var start = new Date().getTime();
            while (true) if (new Date().getTime() - start > n) break;
        }  
$(function() {
	var n;
	n=0;
	
//��Ŀ�л�	
	function listit(num){
		var numstring=".right-" + num;
		var liststring=".list" + num;		
		$(numstring).siblings().hide();
		$(liststring).siblings().removeClass("active");
		$(numstring).fadeIn();
		$(liststring).addClass("active");
	};
	$(".list-group-item").each(function(i){
    $(this).click(function() {
	listit(i+1);
	});	
	});

//��ҳ�л�
	$(".next").click(function() {
		$(".page1").hide();
		$(this).siblings().removeClass("active");
		$(".page2").fadeIn();
		$(".page2").addClass("active");
	});	 
	$(".previous").click(function() {
		$(".page2").hide();
		$(this).siblings().removeClass("active");
		$(".page1").fadeIn();
		$(".page1").addClass("active");
	});	 
//����ִ��
	$(".btn-cmd").click(function() {
	$.get("plugin/cmd-run.php", {command:$(".txt-cmd").val()},
	function(data){
    $(".text-cmd").html(data);
	});
	});

//ȡ���ػ�
	$(".btn-cancelst").click(function() {
	$.get("plugin/cmd-run.php", { command:"shutdown -a"} );
	$.get("plugin/shutdown-time.php", {shutdown:"s",time:"0",timex:"0"} );		
	$(this).hide();
	$(".btn-shutdown").show();
	$(".modal-case3").hide();	
	$(".modal-case4").show();
	});
	
//ȡ������	
	$(".btn-rcancelst").click(function() {
	$.get("plugin/cmd-run.php", { command:"shutdown -a"} );
	$.get("plugin/shutdown-time.php", {shutdown:"r",time:"0",timex:"0"} );		
	$(".btn-rshutdown").show();
	$(".modal-case1").hide();	
	$(".modal-case2").show();
	$(this).hide();
	});	

//��ȡ����
var timen=1000;
var interval,shutdowntime,ifshutdown,timexn;
	
function ifsetshutdown(){
	var d = new Date();	
	var ifshut;
	var shutdowntimes;
	$.getJSON("tmp/time.json",function(json){ 
	shutdowntimes = json.time;
	//alert(shutdowntimes);
	});
	//alert(shutdowntimes);//�β�ʵ�δ��ݴ�������
	if(shutdowntimes > d.getTime() ) {ifsetshutdown() = true} else {return false};	
}

function run(){
	$.getJSON("tmp/time.json",function(data){ 
	ifshutdown = data["shutdown"];
	shutdowntime = data["time"];
	timexn = data["timex"];	
    interval=setInterval(gettimeprogross,timen);	
	});

}
	
function gettimeprogross(){
	var d = new Date();	
	var timem = (shutdowntime - d.getTime())/1000 ;
	var timeleft = (100- timem/timexn*100) + "%" ;
	$(".label-time").html(timem.toFixed(0));
	$(".untiltime").css("width",timeleft);
}
//�����ʱ�ػ���ť	

	if(ifsetshutdown()){
	$(".btn-shutdown").hide();		
	$(".btn-cancelst").show();	
	$(".modal-case4").hide();	
	$(".modal-case3").show();
	}
	
	
//��ʱ�ػ�	
	$(".btn-shutdown").click(function() {
	var shutdownstring;
	var d=new Date();
	var untiltime;
	var timex;		
	timex = $(".txt-time").val() * 60;
	untiltime=timex*1000+d.getTime();
	shutdownstring = "shutdown -s -t " + timex;
	$.get("plugin/cmd-run.php", { command:shutdownstring} );
	$.get("plugin/shutdown-time.php", {shutdown:"s",time:untiltime,timex:timex} );	
	run();
	$(".btn-cancelst").show();	
	$(this).hide();
	$(".modal-case4").hide();	
	$(".modal-case3").show();
	});
//��ʱ����	
	$(".btn-rshutdown").click(function() {
	var shutdownstring;
	var d=new Date();
	var untiltime;
	var timex;	
	timex = $(".txt-rtime").val() * 60;
	untiltime=timex*1000+d.getTime();
	shutdownstring = "shutdown -r -t " + timex;
	$.get("plugin/cmd-run.php", { command:shutdownstring} );
	$.get("plugin/shutdown-time.php", {shutdown:"r",time:untiltime,timex:timex} );	
	run();	
	$(this).hide();
	$(".btn-rcancelst").show();
	$(".modal-case2").hide();	
	$(".modal-case1").show();
	});

//���̹���	
	$("#process").click(function() {
	$.get("plugin/cmd-run.php",{command:"tasklist"},
	function(data){
	$(".text-tasklist").html(data);
	});	
	});

//��������	
	$(".btn-process").click(function() {
	var processstring;
	processstring = "taskkill /f /im " + $(".txt-process").val() + ".exe";
	$.get("plugin/cmd-run.php", { command:processstring} );
	$("#process").click;
	});

//��ͼ	
	$(".btn-shot").click(function() {
	$(".imgshot").append("�������ɽ�ͼ,���Ժ�...");		
	$.get("plugin/cmd-run.php", { command:"webserver.exe -shot"} );
	sleep(800);
	$(".imgshot").html("<a href=plugin/shot.jpg target=_blank ><img src=plugin/shot.jpg?hash=" + Math.random() + " class=img-responsive id=shots></a>");
	});
	
//�鿴��ͼ��Ϻ�ɾ����ͼ	
	$(".btn-delshot").click(function() {
	$.get("plugin/cmd-run.php", { command:"del shot.jpg"} );
	$.get("plugin/cmd-run.php", { command:"del shot.bmp"} );
	});	

//teamviewer����	
	$(".btn-team").click(function() {
	var processstring;
	processstring = "taskkill /f /im Teamviewer.exe";
	$(".text-team").append("���ڽ���Teamviewer\n"); 
	$.get("plugin/cmd-run.php", { command:processstring} );	
	$(".text-team").append("�ɹ�����Teamviewer\n");
	});		
	$(".btn-team-on").click(function() {
	$.get("plugin/cmd-run.php", { command:"webserver.exe -team"} );	
	$(".text-team").append("�ɹ�����Teamviewer\n");
	});		
	
//��������	
	$(".volup").click(function() {
	$.get("plugin/cmd-run.php", { command:"webserver.exe -volup"} );	
	$(".volmute").html("����");
	});		
	$(".voldown").click(function() {
	$.get("plugin/cmd-run.php", { command:"webserver.exe -voldown"} );
	$(".volmute").html("����");
	});		
	$(".volmute").click(function() {
	$.get("plugin/cmd-run.php", { command:"webserver.exe -volmute"} );
	if(n%2==0){$(".volmute").html("������")}else{$(".volmute").html("����")}
	n=n+1;
	});		
//������Ļ	
	$(".btn-lock").click(function() {
	$.get("plugin/cmd-run.php", { command:"webserver.exe -lock"} );	
	$(".lckscreen").html("Զ�̵�����Ļ������");
	});			
});