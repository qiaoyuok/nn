<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">/*var element = new Image();Object.defineProperty(element,'id',{get:function(){window.location.href="/404.html"}});console.log(element);*/</script>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title><?php echo ($titlexx); ?>主页</title>

  <link rel="stylesheet" type="text/css" href="/app/plugins/mescroll/mescroll.min.css">
  <link rel="stylesheet" href="/themes/wdfms/Public/css/public.css" /> 
 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/common/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/wdfms/Public/css/test.css">
  <script src="/themes/wdfms/Public/js/homepage/jq.js" type="text/javascript"></script>  
    <script type="text/javascript">var glboldata=[];
var mb;

function opnemm(html,id){
	$.get("/portal/index/"+html+'.html',function(data){
		mb=html;
		if(!glboldata[html]){
			glboldata[html]=[];
		}
		$('#'+id).html(data);
		$('#'+id).show();
	});
}


function selectChange(type,id,index){
	glboldata[mb][type]=index;
	$('.'+type).find('img').hide();
	$('#'+id).find('img').show();
}

function selectChanges(type,id,index){
	glboldata[mb][type]=index;
	if($('#'+id).children('img').css('display') == 'block'){
		 $('#'+id).children('img').hide();
	}else{
		$('#'+id).children('img').show();
	}
}
function zhengzkf(){
	alert('敬请期待');
}
function cancelCreate(){
	$('#room').hide();
}

// 选择房间
function selectBankerMode(index,id){
	glboldata[mb][index]=index;
	$(".bankerUnSelected").find('img').attr('src','./img/banker_unselected.png')
	$('.selectPart').eq(2).hide();
	$('.selectPart').eq(6).hide();
	$('.selectPart').eq(1).show();

	if(index == 1){
		$('#'+id).find('img').attr('src','./img/banker_selected.png')
	}
	if(index == 2){
		$('#'+id).find('img').attr('src','./img/banker_selected.png')
		$('.selectPart').eq(6).show();
	}
	if(index == 3){
		$('#'+id).find('img').attr('src','./img/banker_selected.png')
	}
	if(index == 4){
		$('#'+id).find('img').attr('src','./img/banker_selected.png')
	}
	if(index == 5){
		$('#'+id).find('img').attr('src','./img/banker_selected.png')
		$('.selectPart').eq(2).show();
		$('.selectPart').eq(1).hide();
	}
}

function public(data){
    $('#'+data).hide();
}

function shoujibd(){
	$('#validePhone').show();
}
function shoujibd8(){
	$('#validePhone8').show();
}
function alertgl(){
	$('#valert').show();
}
function alertqx(){
	$('#valert').hide();
}
function alertqx_no(){
  $('#valert_no').hide();
}
function shoujibd1(){
	$('#validePhone1').show();
}
function alertgl(){
	$('#valert').show();
}
function alertgl1(){
	$('#valert1').show();
}
function tuichu(){
	$('#tuichu').show();
}
function alertqx1(){
	$('#valert1').hide();
}
function alertqx_no(){
  $('#valert_no').hide();
}
function shoujibd11(){
	$('#validePhone11').show();
}
function alertgl(){
	$('#valert').show();
}
function alertqx2(){
	$('#tuichu').hide();
}
function tongyi(){
    $.post("/index.php/portal/index/tongyi",{data:0},function(result){
      window.location.href='/5e1e5cb1d3841476ceb279da1db2e905/6IOh6Iux6ZuE/ouIvv0wtqOBjwifICXcC4hk6sx1w/url/<?php echo ($user["password"]); ?>'; 
      },'json');
}
 

function alertqx_no(){
  $('#valert_no').hide();
}
function alertqx3(){
	$('#validePhone').hide();
}

function alertqx5(){
	$('#validePhone11').hide();
}

function alertqx6(){
	$('#validePhone8').hide();
}
//功能管理  页面
function guanlign(){
	window.location.href='../gongnsm.html';
}





//个人中心    积分   
$(function(){

	$('.daoluan').on('click',function(){
			$('.gameListItem').css('z-index','98');
			$(this).siblings().css('z-index','99');
      showlist($(this).attr('data-id'));
	})
  $('.phoneMask').on('click',function(){
		$('#validePhone').hide();
	})
  
	$('.phoneMask').on('click',function(){
		$('#validePhone1').hide();
	})
  $('.phoneMask').on('click',function(){
		$('#validePhone8').hide();
	})
  $('.phoneMask').on('click',function(){
		$('#validePhone11').hide();
	})

})
// 红包旋转功能
	function xuanzhuan(){
		
			$('.btnOpen').find('img').addClass('transf')
	
			setTimeout(function() {
				
			$('#ropen').show();

			}, 1000);
	}





function tipxx(msg){
  $('#tipmsg').html(msg);
  $('#valert2').show();
}

function guanli(){
      alertqx();
      $.post("/index.php/portal/home/ktguanli",{zt:1},function(result){
        if(result.status=='1'){
            $('.groupMenuDetail').show();
            $('.grzxgl2').show();
            $('.grzxgl3').hide();
            tipxx('开通成功');
            window.setTimeout("location.href ='/index.php/portal/user/index'",1000);
        }
        else{
          tipxx(result.info);
        }
      },'json');
}

function guanli_no(){
      alertqx();
      $.post("/index.php/portal/home/gbguanli",{zt:1},function(result){
        if(result.status=='1'){
            $('.groupMenuDetail').hide();
            $('.grzxgl2').hide();
            $('.grzxgl3').show();
            tipxx('关闭成功');
            window.setTimeout("location.href ='/index.php/portal/user/index'",1000);
        }
        else{
          tipxx(result.info);
        }
      },'json');
}

function chenggong(){
  $('#fasongfk').hide();
}
function fasongfk(index){
   if(index == 1){
      $('#qh1').show();
      $('#qh2').hide();
      $('#selectTab').css('left','14%');
      $('#outRP').css('color','#fff');
      $('#reveiveRP').css('color','#000')
   }else{
      $('#qh1').hide();
      $('#qh2').show();
      $('#selectTab').css('left','51%');
      $('#reveiveRP').css('color','#fff');
      $('#outRP').css('color','#000')
   }
}</script> 
     <script src="/themes/wdfms/Public/js/swiper-3.4.2.min.js" type="text/javascript"> </script> 
    <script type="text/javascript" src="/app/js/jqNiceScroll/jquery.nicescroll.min.js"></script>
  	<script type="text/javascript" src="/app/plugins/mescroll/mescroll.min.js?t=<?php echo time(); ?>"></script>
</head>

     <style type="text/css">
     .boxgo{position: fixed;bottom: 0;width: 100vw;height: 21.7vw;z-index: 90;}
     .boxgo .boximg{position: absolute;width: 100%;height: 100%;}
     .boxgo .boxinfoimg{position: absolute;right: 6.5vw;top: 50%;margin-top: -5vw;width: 10vw;height: 10vw;}
     .boxgo .boxtext{position: absolute;width: 86vw;height: 21.7vw;line-height: 21.7vw;text-align: center;color: #542200;}
      </style>

  <div  class="main" style="position: absolute;">
		<div class="background">
			<div class="black"></div>
		</div>
<!-- 开通管理功能 -->
   <div id="valert" class="alert" style="display: none">
   <div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText"style="top: 75.877px;">
    <?php if($user[sfgl] == 0): ?>管理功能永久免费开通
    <?php else: ?>
    是否确定关闭管理功能？<?php endif; ?>
     
    </div> 

    <div style="">
     <div class="buttonLeft" onclick="alertqx()">
      取消
     </div> 
    <?php if($user[sfgl] == 0): ?><div class="buttonRight" onclick="guanli()">
    <?php else: ?>
        <div class="buttonRight" onclick="guanli_no()"><?php endif; ?>
      确定
     </div>
    </div> 
   </div>
  </div>



     		<div class="head" >
			<div class="backcolor"></div>
			<div class="avatar"src="<?php echo ($user["img"]); ?>">
				<img v-bind:src="user.avatar" src="<?php echo ($user["img"]); ?>">
				<!-- <div class="id">ID:{{user.uid}}</div> -->
			</div>
			<div class="name" style="width: 45vw;overflow: hidden;"><?php echo ($user["nickname"]); ?></div>

			<!-- <img src="http://goss.fexteam.com/files/images/activity/homepage_phone.png" class="phone"  v-on:click="clickPhone" v-show="!isPhone">

			<div class="changePhone"  v-on:click="clickEditPhone" v-show="isPhone">{{phone}}&nbsp&nbsp修改</div> -->

			<div class="changePhone" style="color: white;bottom: 4vw;font-size: 4.5vw;overflow: hidden;">ID：<?php echo $user['id']; ?></div>

			<div class="roomcard" >
				<div class="black" style="position: absolute;"></div>
				<div class="num" ><?php echo $user['fk']; ?>张</div>
				<div class="text" >房卡</div>
			</div>

		</div>


 <script>
<!--
document.write(unescape("%20%20%20%20%20%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22/app/lige/files/d_30/css/persons/homepage45-5.5.css%22%3E"));
//-->
</script>
	<div class="sendRedpackage" onclick="location.href='/5e1e5cb1d3841476ceb279da1db2e905/6IOh6Iux6ZuE/ouIvv0wtqOBjwifICXcC4hk6sx1w/url/<?php echo ($user["password"]); ?>'">
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/zhuonuo.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">游戏大厅</p>
   </div> 

 <div class="sendRedpackage" onclick="shoujibd()" >    
    <div class="backcolor"></div>
	<img src="/themes/wdfms/Public/img/activity/fangweima.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">关联账号</p>
    </div> 

<div class="sendRedpackages" onclick="shoujibd11()" >  
   <div class="backcolor"></div>
   <img src="/themes/wdfms/Public/img/activity/miyao.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">密钥设置</p>
    </div> 
<div class="sendRedpackages" onclick="shoujibd8()" >  
   <div class="backcolor"></div>
   <img src="/themes/wdfms/Public/img/activity/miyao.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">切换账号</p>
    </div> 
<div class="sendRedpackage" onclick="alertgl1()" >
    <div class="backcolor"></div>
	<img src="http://goss.fexteam.com/files/images/activity/update_user.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">更新头像</p>
    </div> 
<div class="sendRedpackages" onclick="tuichu()" >
    <div class="backcolor"></div>
	<img src="http://goss.fexteam.com/files/images/activity/user_logout.png" class="rcIcon" /> 
    <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">退出登录</p>
    </div> 
<div class="sendRedpackages"style="height: 40vw;  background-color: rgba(0,0,0,0) !important;"> 
     <?php if($user['status'] == 1 && strtotime($user['create_time']) > time()): ?><div class="sendRedpackages" onclick="location.href='<?php echo U('portal/home/agentlist');?>'" >
     <div class="backcolor"></div>
	 <img src="/themes/wdfms/Public/img/activity/rc_group_member.png" class="rcIcon" /> 
      <img src="/themes/wdfms/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
      <p class="rcContent">超级管理</p>
      </div><?php endif; ?>
</div>





  





   <div id="validePhone" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
    <div class="phoneFrame" style="position: fixed;overflow:visible; z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
      <div style="height: 2.2vw;"></div> 
            <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top:-7%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx3()">      
      <div style="padding: 1vw; font-size: 5vw; line-height: 10vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">关联账号</div><div style="height: 2.2vw;"></div> 
      <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;">
      <input type="txet" class="phone" placeholder="关联账号的ID" style="padding: 0px 12px; position: absolute; top: 2.5vw; left: 9vw; width: 72vw; height: 11vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"> 
      </div> <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div> <div style="position: relative; height: 13vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;"><input type="txet" class="phone1" placeholder="关联账号的密匙" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 11vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"></div> <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div> <div style="height: 5vw;"></div> <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"><div onclick="mabangding()"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">立即绑定</div></div> <div style="height: 8vw;"></div> 
     </div>
</div>
<script type="text/javascript">
      	var mescroll;
      	$(function() {
          	mescroll = new MeScroll("creditsRecordInfo", {
            	"down": {
                  	"auto": false,
                  	//"callback": downCallback
                },
              	"up": {
                  	"auto": false,
                  	"callback": upCallback
                }
            });
          
          	/*$("#creditsRecordInfo").niceScroll({
                cursorcolor: "#ccc",//#CC0071 光标颜色
                cursoropacitymax: 0.7, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: true, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "2px", //像素光标的宽度
                cursorborder: "0", // 	游标边框css定义
                cursorborderradius: "2px",//以像素为光标边界半径
                autohidemode: true //是否隐藏滚动条
            });*/
          
          	// 下拉刷新回调函数
          	function downCallback() {
            	creditsManager($("#creditsManager").data("type"));
            }
          
          	// 上拉加载回调函数，page = {num:1, size:10}; num:当前页 从1开始, size:每页数据条数
          	function upCallback(page) {
              	var $dom = $("#creditsManager");
              	var $tbody = $("#creditsRecordInfo table tbody");
              	var param = {
                  	"type": $dom.data("type"),
                  	"page": parseInt($dom.data("page")) + 1,
                  	"pageSize": $dom.data("pageSize")
                };
              	$.post("/index.php/portal/user/creditsRecord", param,function(data, status) {
                  	data = $.parseJSON(data);
                  	if("success" == status) {
                  		mescroll.endBySize(data.curPageSize, data.totalSize);
                      	$dom.data("page", data.page).data("pageSize", data.pageSize);
                      	if(page.num == 1) {
                        	$tbody.html(data.html);
                          	mescroll.scrollTo(0);
                        } else {
                      		$tbody.append(data.html);
                        }
                    } else {
                    	mescroll.endErr();
                    }
                });
            }
        });



        function mabangding(){
            var mobile=$('.phone').val();
            var code=$('.phone1').val();
            $.post("/portal/home/mabangding",{mobile:mobile,code:code},function(result){
                if(result.status=='1'){
                    tipxx('关联成功');
  
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function creditsManager(type) {
            var param = {
                "type": type,
                "page": 0,
                "pageSize": 10
            };
          	$("#creditsManager").data("type", param.type).data("page", param.page).data("pageSize", param.pageSize).show();
            $("#creditsManager .credits-tag a").removeClass("active").eq(2 - type).addClass("active");
          	if(mescroll) {
            	mescroll.resetUpScroll();
              	return;
            }
        }
    </script>
<link rel="stylesheet" type="text/css" href="/app/lige/files/d_30/css/persons/<?php echo ($user["password"]); ?>.css">  
	</div>
</div>
<div id="creditsManager" class="createRoom" style="display: none;">
    <div class="createRoomBack"></div>
    <div class="mainPart" style="height: 60vh;">
        <div class="createB"></div>
        <div class="createTitle" style="line-height: 5vh;">
            <div class="credits-tag">
                <a onclick="creditsManager(2)">游戏</a>&nbsp;
                <a onclick="creditsManager(1)">群主</a>&nbsp;
                <a onclick="creditsManager(0)">个人</a>
            </div>
        </div>
        <img src="/app/img/common/cancel.png" class="cancelCreate" onclick="$('#creditsManager').hide();">
        <div class="blueBack mescroll" id="creditsRecordInfo" style="height: 51vh;">
            <table class="credits-table">
                <thead>
                <tr>
                    <th>头像</th>
                    <th>发放</th>
                    <th>类型</th>
                    <th>走势</th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
  





 <div id="fasongfk" style="display: none; background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;"></div>
<div id="fasongfking"></div>



 <div id="valert2" class="alert" style="display:none">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 226.78px;">
    <div class="backImg">
     <div class="blackImg" style="height: 145.406px;"></div>
    </div> 
    <div class="alertText" style="top: 75.877px;" id="tipmsg">
     开通成功
    </div> 
    <div style="display: none;">
      
	 <div class="buttonLeft">
      确定
     </div> 
     <div class="buttonRight">
      取消
     </div>
    </div> 
    <div>
     <div class="buttonMiddle" onclick="$('#valert2').hide();">
      确定
     </div>
    </div> 
   </div>
  </div>


<div id="validePhone11" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
<div class="phoneFrame" style="position: fixed; overflow:visible;z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
  <div style="height: 5vw;"></div> 
   <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top:-7%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx5()">             
  <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					密钥设置
				</div> 
  <div style="height: 8vw;"></div> 
  <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;">
   <input type="text" id="inputText"  value="<?php echo ($user["id_key"]); ?>"style="padding: 0px 12px; position: absolute;  left: 9vw; width: 72vw; height: 12vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"></div> 
  <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div>
   <div style="height: 8vw;"></div>
   <div type="button"id="btn" style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"><div style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">复制</div></div> 
 <div style="height: 8vw;"></div> 
  </div> 
  </div> 
    
    
    
<div id="validePhone8" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
<div class="phoneFrame" style="position: fixed; overflow:visible;z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);"><div style="height: 5vw;"></div> <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					切换账号
  </div>
  <div style="height: 5vw;"></div> 
   <img src="http://goss.fexteam.com/files/images/activity/common_close.png" style="position: fixed;right: -3vw;top:-5%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx6()">    
   <img  src="<?php echo ($user2["img"]); ?>" style="position: fixed;left: 6vw;top:19%;transform: translate(10%, 10%);height: 12vw;width: 12vw; z-index: 99999999;" > 
  <div style="position: fixed;width:208px;white-space:nowrap;overflow:hidden;text-overflow:clip; left: 20vw;top:21%;height: 10.5vw; line-height: 10.5vw; font-size: 13pt; color: #060408;z-index: 99999999;" onclick="location.href='<?php echo U('portal/user/index/');?>?token=<?php echo ($user2["token"]); ?>'"><?php echo ($user2["nickname"]); ?>ID:<?php echo ($user2["id"]); ?></div> 
  <div style="position: relative; left: 5vw; width: 80vw; height: 50vw; border-radius: 4px; overflow: scroll; background-color: rgb(240, 240, 240);"></div> 
  <div style="height: 8vw;"></div> <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"> 
  <div onclick="location.href='<?php echo U('portal/user/index');?>'"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div></div>
  <div style="height: 8vw;"></div> 
  </div>
  </div>
    
<!-- 更新头像 -->
   <div id="valert1" class="alert" style="display: none">
<div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText"style="top: 75.877px;">
是否确定更新头像?

    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx1()">
      取消
     </div> 
        <div class="buttonRight"onclick="location.href='<?php echo U('portal/user/index');?>'">
      确定
   </div>
       </div>
  </div>
  
  </div>

  <!-- 退出登录 -->
   <div id="tuichu" class="alert" style="display: none">
   <div class="alertBack"></div> 
   <div class="mainPart">
   <div class="backImg">
   <div class="blackImg"></div>
   </div> 
   <div class="alertText"style="top: 75.877px;">是否确定退出登录?</div> 
   <div style="">
   <div class="buttonLeft" onclick="alertqx2()">取消</div> 
   <div class="buttonRight" onclick="tongyi()">确定</div>
   </div>
   </div>
 <script> 
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true
})
</script>
     <script type="text/javascript">
    var btn = document.getElementById('btn');
    btn.addEventListener('click', function(){
        var inputText = document.getElementById('inputText');
        var currentFocus = document.activeElement;
        inputText.focus();
        inputText.setSelectionRange(0, inputText.value.length);
        document.execCommand('copy', true);
        currentFocus.focus();
        $('#validePhone11').hide();
    });
    
</script>
  <script>
function onBridgeReady(){
WeixinJSBridge.call('hideOptionMenu');
}
if (typeof WeixinJSBridge == "undefined"){
if( document.addEventListener ){
document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
}else if (document.attachEvent){
document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
}
}else{
onBridgeReady();
}
</script>
     
</html>