<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="format-detection" content="telephone=no" />
<meta name="msapplication-tap-highlight" content="no" />
<meta http-equiv="Pragma" content="public" />
<meta http-equiv="Cache-Control" content="public" />
  <title><?php echo ($room["roomid"]); ?>号三公房间</title> 
  <link rel="stylesheet" type="text/css" href="/app/css/bullshop.css" /> 
  <link rel="stylesheet" type="text/css" href="/app/css/sangong-1.0.0.css">
  <link rel="stylesheet" type="text/css" href="/app/css/common/alert-1.1.css">
  <link rel="stylesheet" type="text/css" href="/app/css/public1.css"> 
  <link rel="stylesheet" type="text/css" href="/app/css/sangong6.css" /> 
   <link rel="stylesheet" href="/app/css/app.css" /> 
  <script src="/app/js/homepage/jq.js" type="text/javascript"></script> 
   <script src="/app/js/clipboard.min.js"type="text/javascript"></script>
  <script type="text/javascript" src="https://gameoss.fexteam.com/files/js/fastclick.js"></script> 
<style>
  .mainPart{
    position: relative;
    height: auto;
  }
  .alert .mainPart .id{
    position: relative;
  }
.alert .mainPart .alertText{
  position: relative;
}

.alert .mainPart{
  height: auto;
}
.liurenniuniu-Text{
  width: 100% !important;
  }
  .liurenniuniu-ziti{
    width: 100% !important;
  }



.gongg{
  position: absolute;
    left: 0% !important;
    width: 100%;
    height: 11vh;
    font-size: 2.2vh;
    display: none;
    z-index: 99;
    height: 100%;
    color: white;
    font-size: 2.2vh;
    text-align: center;
    line-height: 10vh;
}



 

 .lishijilu{
         position: relative;background:url(http://goss.fexteam.com/files/images/common/alert3.png) 0% 0% / 100% 100% no-repeat;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 15px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }
}
@media screen and (max-width: 320px) {
    .lishijilu{
         position: relative;background: #a2befc;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 12px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }

}
        .tableLogo{
        position: absolute;
    width: 30vw;
    top: 47.5vh;
    left: 34vw;
  } 
  

</style>

  <script src="/app/js/homepage/home.js" type="text/javascript"></script>
     <script type="text/javascript" src="/app/js/base64.js"></script>
<script src="/app/js/app.js" type="text/javascript"></script>
<script src="/app/js/game3.js" type="text/javascript"></script> 
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>


<script>
$(function() {  
   // FastClick.attach(document.body);  
});

function randomString(len) {
    len = len || 32;
    var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';    /****默认去掉了容易混淆的字符oOLl,9gq,Vv,Uu,I1****/
    var maxPos = $chars.length;
    var pwd = '';
    for (i = 0; i < len; i++) {
        pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
    }
    return pwd;
}

  var url =window.location.href+'&skin=<?php echo ($user["password"]); ?>';//用户要分享的网址
  var title  = '<?php echo ($room["roomid"]); ?>号三公房间';//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/app/erba.png';//分享的图片
  //var desc = '模式<?php echo ($room['wfname']); if($room['df']): ?>底分：<?php echo ($room['df']); endif; if($room['gz2']): ?>规则： <?php if(is_array($room['gz2'])): foreach($room['gz2'] as $key=>$one): echo ($one); endforeach; endif; endif; ?> ';//分享的描述信息
   var desc = 'http://'+window.location.hostname+'/jf/sag/'+randomString(12);
    WeChat(url,title,shareimg,desc);

</script>

 </head> 
 <body> 
 
  <div id="app-main" class="main" style="position: relative; width: 100%; margin: 0px auto; background: rgb(255, 255, 255); height:100%;">
   <div style="position: absolute; background-color: rgba(0, 0, 0, 0.8); width: 100%; height: 7vh; line-height: 7vh; color: white; font-size: 2.5vh; overflow: hidden; z-index: 9998; display: none;">
    <img src="/app/img/alert_icon.png" style="position: absolute; top: 1.5vh; left: 3vw; width: 4vh; height: 4vh;" />
   </div> 








  <img src="/app/sangong6.png" style="display: none">
  <img src="/app/dyj.png" style="display: none">
  <div id="overtime" style="display: none">
   <canvas id="myCanvas" width="800" height="1297" style="display: none"></canvas>
  </div>
      <?php $fangzhu=M('user')->find($room['uid']); ?>
      <script type="text/javascript">
          window.fangzhu = {
              "nickname" : "<?php echo ($fangzhu["nickname"]); ?>",
              "skinname" : "<?php echo ($skin[$fangzhu['password']]); ?>"
          };
      </script>
<?php if($room['endtime'] > 0): $mapxx=array(); $mapxx['uid']=$user['id']; $mapxx['room']=$room['id']; if(M('user_room')->where($mapxx)->find()){ ?>
    <script type="text/javascript">
        var data={};
        data.id=<?php echo ($room['roomid']); ?>;
        data.zjs=<?php echo ($room['zjs']); ?>;
        data.time='<?php echo (date("Y-m-d H:i:s",$room['time'])); ?>';
        data.user=<?php echo ($room['overxx']); ?>;
        <?php $overxx=json_decode($room['overxx'],true); foreach($overxx as $key=>$value){ $nickname=base64_encode(usernickname($value[id])); echo 'data.user["'.$key.'"]["nickname"]="'.$nickname.'";'; } ?>
        overroom(data);
    </script>

   <?php } else{ ?>
  <div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">房间已经关闭</div> 
     
     
   </div>
  </div>
  <?php } exit(); endif; ?>


<?php if($fzuser['sfgl'] && (!$mayuser[$user['id']])): ?><div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style="height: 82%;"></div>
    </div> 
    <div class="alertText" style="top: 45%;" id="tipmsg">无法加入，请联系管理员。</div> 
     
     
   </div>
  </div>

  <?php exit(); endif; ?>

<?php if(count($room['userlist']) >= 6 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 31%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style=" height: 59%;"></div>
    </div> 
    <div class="alertText" style="top: 35%;" id="tipmsg">房间人数已满</div> 
     <div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">
     返回首页
    </div>
     
   </div>
  </div>

  <?php exit(); endif; ?>

   <div class="roomCard">
    <img src="/app/img/game/roomCard.png" /> 
    <div class="num">
     <div class='sangong6-fk'></div> 
     <div class='sangong6-fk1' id="fknum"><?php echo ($user['fk']); ?>张</div>
    </div>
   </div>

   <div class="round" style="" id="jsxx">
    <?php echo ($room["js"]); ?>&nbsp;/&nbsp;<?php echo ($room["zjs"]); ?>局
   </div> 
<style>    
 .fuzhi {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 109;
    color: #fff;
    font-family: simHei;
}
.fuzhi .fuzhiBack {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.8;
    position: absolute;
}
.fuzhi .fuzhiPart {
    position: relative;
    top: 45%;
    left: 52.5%;
    margin-top: -19vh;
    margin-left: -22.5vh;
    width: 45vh;
    height: 38vh;
}
.fuzhi .fuzhiPart .fuzhiImg {
    position: absolute;
    width: 93%;
    height: 90%;
    border-radius: 1.5vh;
    border: 0.1vh solid #de51f1;
    top: 0;
    left: 0;
    background: #6d4ba8;
}
.fuzhi .fuzhiPart .fuzhiImg .fuzhiiImg {
    position: absolute;
    width: 90%;
    height: 22.5vh;
    line-height: 25vh;
    border-radius: 1.5vh;
    border: 0.1vh solid #ae71cb;
    top: 2.2vh;
    left: 2.2vh;
    background: #190d2d;
} 
.fuzhi .fuzhiPart .alertText {
    position: absolute;
    width: 100%;
    line-height: 3.5vh;
    font-size: 2.2vh;
    width: 36vh;
    left: 46%;
    margin-left: -18vh;
    top: 5.6vh;
    text-align: center;
}  
.fuzhi .fuzhiPart .buttonLeft {
    position: absolute;
    width: 100%;
    line-height: 6vh;
    height: 5.6vh;
    font-size: 2.5vh;
    width: 17vh;
    left: 2vh;
    bottom: 5.5vh;
    text-align: center;
    background: url(http://goss.fexteam.com/files/common/images/cencelR.png);
    background-size: 100%;
}
.fuzhi .fuzhiPart .buttonRight {
    position: absolute;
    width: 100%;
    line-height: 6vh;
    height: 5.6vh;
    font-size: 2.5vh;
    width: 30vh;
    right: 5vh;
    bottom: 5.5vh;
    text-align: center;
    background: url(http://goss.fexteam.com/files/common/images/copybtn.png);
    background-size: 100%;
}  
.zhuonuo{position: fixed;top: 10px;right: 15px;width: 80px;height: 29px;z-index: 199;border: none;}  
#room_str{position:fixed;top:-300px;}
.copyUrl{position: fixed;right: 15px;width: 80px;height: 29px;z-index: 199;border: none;position: absolute; width: 100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 17vh;right: 5vh;bottom: 5.5vh;text-align: center;background: url(http://goss.fexteam.com/files/common/images/copybtn.png);background-size: 100%;}
#copyUrl{ position:fixed;top:-300px;}
.attention{font-size: 30px background-color: black;opacity: 0.5;color: white;position:fixed;bottom:45%;z-index: 999; left: 37%;border-radius: 10px; width: 120px;height: 120px;line-height: 30px;background:url("/app/wancheng.png");background-size:100%;display:none;}  
</style> 
<script>   
function fuzhilianjie(){
	$('#fuzhilianjiee').show();
}
function guanbi(){
	$('#fuzhilianjiee').hide();
}  
</script>    
<textarea id="room_str" value=""><?php echo ($titlexx); ?>区 房间号：<?php echo ($room["roomid"]); ?>房间链接<?php echo ($room["dwz"]); ?></textarea>
<textarea id="copyUrl" value=""></textarea>
<div class="attention"></div>
<img src="/app/33fz.png" class="zhuonuo" onclick="fuzhilianjie()"/> 
<div id="fuzhilianjiee" class="fuzhi" style="display: none;">
<div class="fuzhiBack" onclick="guanbi()"></div>
   <div class="fuzhiPart">
    <div class="fuzhiImg">
     <div class="fuzhiiImg"></div>
    </div> 
    <div class="alertText" style="top: 45px;">
<?php echo ($titlexx); ?>区  房间号：<?php echo ($room["roomid"]); ?> <br /><br /> 房间链接<?php echo ($room["dwz"]); ?></div>  
    <div style="">
     <div class="buttonLeft" onclick="guanbi()">    
     </div> 
        <div class="copyUrl" data-clipboard-action="copy" data-clipboard-target="#copyUrl" onclick="guanbi()">  
  </div>
   </div>
    </div>
     </div> 

   <img src="/app/img/sangong/footer_bull.png" usemap="#planetmap" class="bottom" /> 
   <img src="/app/img/sangong/icon_game_rule.png" class="bottomGameRule" style="z-index: 110;" onclick="opnemm('fangjian_gz1','vroomRule')"/> 
   <img src="/app/img/sangong/icon_sound61.png" class="bottomGameIntro" style="z-index: 110;" onclick="opnemm('fangjian_yinyue','vaudioRoom')"/>   
   <img src="/app/img/sangong/icon_game_message.png" class="bottomGameMessage"  onclick="opnemm('fangjian_kj','message')"/> 
   <img src="/app/img/sangong/btn_play_rule.png" class="bottomGameHistory" onclick="wanfas()" style="z-index: 110;" />
    <img id='wanfa' src="/app/img/sangong/ruleImg.png" alt="" style="position:fixed;top: 0;bottom: 0;left: 0;right: 0;margin: auto;width: 100%;height: 100%;display: none;z-index: 999;" onclick="wanfass()">
   <div class="myCardType" style="overflow: hidden;">
    <div id="df" style="overflow: hidden;">
     底分：<?php echo ($room["df"]); ?>
    </div>
   </div> 



  <div id="messageSay"></div>
  
  <div id="tishi" class="alert" style="display: none;"></div>   
  <div id="vaudioRoom" class="audioRoom" style="display: none;"></div> 
  <div id="vroomRule" class="createRoom" style="display: none;"></div>
  <div id='message' class="message" style="display: none;"></div> 





   <div id="table" class="table" style="position: relative; width:100%; height:100%; z-index: 80; overflow: hidden;">
    <img src="/app/img/sangong/table6.jpg" class="tableBack" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" />


    <div  style="position: absolute; top: 19.5%; left: 19%; width: 62%; height: 55.5%;">
        <div class="cardDeal" id="userfp"></div> 
          <div class="myCards" style="display: none;"></div> 
      <div class="myCards" style="display: none;"></div>
      <div class="myCards" style="display: none;"></div>
    </div> 




    <div class="cardOver" style="position: absolute; top: 19.5%; left: 19%; width: 62%; height: 55.5%; overflow: hidden;"></div> 
    <!---->



    <div id="memberRobText"></div>
    <div id="memberFreeRobText"></div>
    
    <div id="memberTimesText"></div> 
    <div id="memberTimesText2"></div> 
    
    <div id='memberBull'></div>



    <div id="memberScoreText1"></div>

    <div id="member"></div> 

    <div id="jinbi"></div> 
    
  
   

  <div id="divRobBankerText" class='sangong-Text'></div> 
    


    <div id="" class="clock" style="position: absolute; top: 38%; left: 0;right: 0;margin: auto; width: 40px; height: 42px; display: none;">
     <img src="/app/img/sangong/bull_clock.png" style="position: absolute; width: 100%; height: 100%;" /> 
     <p style="position: absolute; top: 0px; left: 0px; width: 40px; height: 42px; color: white; text-align: center; line-height: 42px;" id="djs"></p>
    </div> 


    <div id="operationButton" style="top: 54%;"></div>
  </div> 
















  <script>
    function joinroom(){
      $("#valert").remove();
      token='<?php echo ($token); ?>';
      room='<?php echo ($room["id"]); ?>';
      var dkxx='<?php echo ($room["dk"]); ?>';
     load('show');
     if(dkxx){
      connect(dkxx);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
    }
  </script>
<?php if(count($room['userlist']) >= 6 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 31%;margin-top: -113.39px;">
    <div class="backImg">
     <div class="blackImg" style=" height: 59%;"></div>
    </div> 
    <div class="alertText" style="top: 35%;" id="tipmsg">房间人数已满</div> 
     <div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">
     返回首页
    </div>
     
   </div>
  </div>

  <?php exit(); endif; ?>

<?php if((count($room['userlist']) > 0 && $room['js'] == 0) || ($room['js'] > 0 && !$room['userlist'][$user['id']])): ?><div id="valert" class="alert">
   <div class="alertBack"></div> 
   <div class="mainPart" style="margin-top: -24vh;">
    <div class="backImg">
     <div class="blackImg" style=" height: 77%;"></div>
    </div> 
    <div class="id">
     <img src="/app/img/ID.png" /> 
     <div class="text">
       你的<?php echo ($skin[$fangzhu['password']]); ?>ID:<?php echo ($user["id"]); ?>
     </div>
      </div>
     <div class="alertText" style="top: 1vh;">
     <div class="rull" style="font-size: 2.2vh;line-height:2.9vh;">
       模式
      <a><?php echo ($room['wfname']); ?></a> <br />
      <?php if($room['df']): ?>底分：
      <a><?php echo ($room['df']); ?></a> 
      <br /><?php endif; ?>
      <?php if($room['gz2']): ?>规则： 
      <a><?php if(is_array($room['gz2'])): foreach($room['gz2'] as $key=>$one): echo ($one); endforeach; endif; ?></a> 
      <br /><?php endif; ?> 
            
       局数： 
      <a><?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡 </a> 

     </div> 
     <div style="margin-bottom: 9.5vh;">
      房间中有<?php foreach($room['userlist'] as $key=>$one){ if(!$indexxx) { $indexxx=1; } else{ echo ','; } echo username($key); } ?>,是否加入？
     </div>
    </div> 
    
<div style="position: relative;
    width: 100%;
    height: 5vh;
        top: -2vh;">
     <div class="buttonLeft" onclick="location.href='/'" style="    top: 0;
    bottom: 0;
    margin: auto;">
      创建房间
     </div> 
     <div class="buttonRight" onclick="joinroom()" style="   top: 0;
    bottom: 0;
    margin: auto;">
      加入游戏
     </div>
   </div>
  </div> 
</div>
<?php else: ?>
<script>
  joinroom();
</script><?php endif; ?> 








<audio onended="mp3playandpause('audio1');" id="audio1" src="/app/video/audio1.m4a"></audio>
<audio onended="mp3playandpause('point0');" id="point0" src="/app/video/point0.m4a"></audio>
<audio onended="mp3playandpause('point1');" id="point1" src="/app/video/point1.m4a"></audio>
<audio onended="mp3playandpause('point2');" id="point2" src="/app/video/point2.m4a"></audio>
<audio onended="mp3playandpause('point3');" id="point3" src="/app/video/point3.m4a"></audio>
<audio onended="mp3playandpause('point4');" id="point4" src="/app/video/point4.m4a"></audio>
<audio onended="mp3playandpause('point5');" id="point5" src="/app/video/point5.m4a"></audio>
<audio onended="mp3playandpause('point6');" id="point6" src="/app/video/point6.m4a"></audio>
<audio onended="mp3playandpause('point7');" id="point7" src="/app/video/point7.m4a"></audio>
<audio onended="mp3playandpause('point8');" id="point8" src="/app/video/point8.m4a"></audio>
<audio onended="mp3playandpause('point9');" id="point9" src="/app/video/point9.m4a"></audio>

<audio onended="mp3playandpause('point10');" id="point10" src="/app/video/point10.m4a"></audio>
<audio onended="mp3playandpause('point11');" id="point11" src="/app/video/point11.m4a"></audio>
<audio onended="mp3playandpause('point12');" id="point12" src="/app/video/point12.m4a"></audio>
<audio onended="mp3playandpause('point13');" id="point13" src="/app/video/point13.m4a"></audio>
<audio onended="mp3playandpause('point14');" id="point14" src="/app/video/point14.m4a"></audio>
<audio onended="mp3playandpause('point15');" id="point15" src="/app/video/point15.m4a"></audio>
<audio onended="mp3playandpause('point16');" id="point16" src="/app/video/point16.m4a"></audio>

<audio onended="mp3playandpause('mp3daojishi');" id="mp3daojishi" src="/app/video/daojishi.mp3"></audio>
<audio onended="mp3playandpause('mp3gold');" id="mp3gold" src="/app/video/gold.mp3"></audio>
<audio onended="mp3playandpause('mp3kaiju');" id="mp3kaiju" src="/app/video/kaiju.mp3"></audio>
<audio onended="mp3playandpause('mp3xiazhu');" id="mp3xiazhu" src="/app/video/xiazhu.mp3"></audio>
<audio onended="mp3playandpause('fapai');" id="fapai" src="/app/video/audio1.m4a"></audio>

<audio onended="mp3playandpause('message1');" id="message1" src="/app/message/message1.mp3"></audio>
<audio onended="mp3playandpause('message2');" id="message2" src="/app/message/message2.mp3"></audio>
<audio onended="mp3playandpause('message3');" id="message3" src="/app/message/message3.mp3"></audio>
<audio onended="mp3playandpause('message4');" id="message4" src="/app/message/message4.mp3"></audio>
<audio onended="mp3playandpause('message5');" id="message5" src="/app/message/message5.mp3"></audio>
<audio onended="mp3playandpause('message6');" id="message6" src="/app/message/message6.mp3"></audio>
<audio onended="mp3playandpause('message7');" id="message7" src="/app/message/message7.mp3"></audio>
<audio onended="mp3playandpause('message8');" id="message8" src="/app/message/message8.mp3"></audio>
<audio onended="mp3playandpause('message9');" id="message9" src="/app/message/message9.mp3"></audio>
<audio onended="mp3playandpause('message10');" id="message10" src="/app/message/message10.mp3"></audio>
<audio onended="mp3playandpause('message11');" id="message11" src="/app/message/message11.mp3"></audio>


<audio id="background" src="/app/video/background8.mp3" ></audio>
<!--下注抢庄-->
<audio onended="mp3playandpause('xia1');" id="xia1" src="/app/video/zhuang/1.mp3"></audio>
<audio onended="mp3playandpause('xia2');" id="xia2" src="/app/video/zhuang/2.mp3"></audio>
<audio onended="mp3playandpause('xia4');" id="xia4" src="/app/video/zhuang/4.mp3"></audio>
<audio onended="mp3playandpause('xia5');" id="xia5" src="/app/video/zhuang/5.mp3"></audio>
<audio onended="mp3playandpause('qiangzhuang');" id="qiangzhuang" src="/app/video/zhuang/qiangzhuang.mp3"></audio>
<audio onended="mp3playandpause('buqiang');" id="buqiang" src="/app/video/zhuang/buqiang.mp3"></audio>

<script>




function over(msg){
  var html='<div id="valert2" class="alert">';
  html=html+'<div class="alertBack"></div> '; 
  html=html+'<div class="mainPart" style="height: 31%;margin-top: -113.39px;">'; 
  html=html+'<div class="backImg">'; 
  html=html+'<div class="blackImg" style="height: 59%;"></div>'; 
  html=html+'</div> '; 
  html=html+'<div class="alertText" style="top: 35%;" id="tipmsg">'+msg+'</div>'; 
  html=html+'<div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">返回首页</div> </div></div>'; 
  $('body').html(html);
}
var overscroll = function(el) {
  el.addEventListener('touchstart', function() {
    var top = el.scrollTop
      , totalScroll = el.scrollHeight
      , currentScroll = top + el.offsetHeight;
    //If we're at the top or the bottom of the containers
    //scroll, push up or down one pixel.
    //
    //this prevents the scroll from "passing through" to
    //the body.
    if(top === 0) {
      el.scrollTop = 1;
    } else if(currentScroll === totalScroll) {
      el.scrollTop = top - 1;
    }
  });
  el.addEventListener('touchmove', function(evt) {
    //if the content is actually scrollable, i.e. the content is long enough
    //that scrolling can occur
    if(el.offsetHeight < el.scrollHeight)
      evt._isScroller = true;
  });
}
document.body.addEventListener('touchmove', function(evt) {
  //In this case, the default behavior is scrolling the body, which
  //would result in an overflow.  Since we don't want that, we preventDefault.
  if(!evt._isScroller) {
    evt.preventDefault();
  }
});

var context = new (window.AudioContext || window.webkitAudioContext)();
var source = [];
var audioBuffer = [];

    function mp3play(id){
      if(id!='background' &&　mp3open==2){
        return false;
      }
        //document.getElementById(id).play();
        if(!audioBuffer[id]){
           loadAudioFile(id);
        }
        if(source[id]){
           if(typeof(source[id].stop)=='function'){
             source[id].stop();
           }
          source[id]=null;
        }
        source[id] = context.createBufferSource();
        source[id].buffer = audioBuffer[id];
        if(id=='background'){
            source[id].loop = true;
        }
        else{
          source[id].loop = false;
        }
        source[id].connect(context.destination);
        source[id].start(0); //立即播放
    }
    function mp3pause(id){
        //document.getElementById(id).pause();
        if (source[id]) {
          source[id].loop = false;
          source[id].stop(); //立即停止
          source[id]=null;
        }
    }

    function mp3playandpause(id){
        mp3play(id);
        mp3pause(id);
    }


function initSound(arrayBuffer,id) {
    context.decodeAudioData(arrayBuffer, function(buffer) { //解码成功时的回调函数
        audioBuffer[id] = buffer;
    }, function(e) { //解码出错时的回调函数
        console.log('Error decoding file', e);
    });
}


function loadAudioFile(id) {
    var url=$('#'+id).attr('src');
    var xhr = new XMLHttpRequest(); //通过XHR下载音频文件
    xhr.open('GET', url, true);
    xhr.responseType = 'arraybuffer';
    xhr.onload = function(e) { //下载完成
        initSound(this.response,id);
    };
    xhr.send();
}


    function audioAutoPlay(id){
        loadAudioFile(id);
    }

function muiscready(){
    audioAutoPlay('audio1');
    audioAutoPlay('point0');
    audioAutoPlay('point1');
    audioAutoPlay('point2');
    audioAutoPlay('point3');
    audioAutoPlay('point3');
    audioAutoPlay('point4');
    audioAutoPlay('point5');
    audioAutoPlay('point6');
    audioAutoPlay('point7');
    audioAutoPlay('point8');
    audioAutoPlay('point9');
    audioAutoPlay('point10');
    audioAutoPlay('point11');
    audioAutoPlay('point12');
    audioAutoPlay('point13');
    audioAutoPlay('point14');
    audioAutoPlay('point15');
    audioAutoPlay('point16');
    audioAutoPlay('background');

    audioAutoPlay('mp3daojishi');
    audioAutoPlay('mp3gold');
    audioAutoPlay('mp3kaiju');
    audioAutoPlay('mp3xiazhu');

    audioAutoPlay('fapai');



    audioAutoPlay('message1');
    audioAutoPlay('message2');
    audioAutoPlay('message3');
    audioAutoPlay('message4');
    audioAutoPlay('message5');
    audioAutoPlay('message6');
    audioAutoPlay('message7');
    audioAutoPlay('message8');
    audioAutoPlay('message9');
    audioAutoPlay('message10');
    audioAutoPlay('message11');


    audioAutoPlay('xia1');
    audioAutoPlay('xia2');
    audioAutoPlay('xia4');
    audioAutoPlay('xia5');
    audioAutoPlay('qiangzhuang');
    audioAutoPlay('buqiang');
if(bgmp3open==1){
setTimeout(function(){
    mp3pause('background');
    mp3play('background');
},2000)
}
 if(bgmp3open==2){
     mp3pause('background');
  }
}

        

// document.addEventListener("WeixinJSBridgeReady", function () {
//           mp3play('background');
// }, false);
// document.addEventListener('YixinJSBridgeReady', function() {
//           mp3play('background');      
// }, false);




function onBridgeReady(){
 WeixinJSBridge.invoke('getNetworkType',{},
    function(e){
        //WeixinJSBridge.log(e.err_msg);
         mp3play('mp3daojishi');  
      });
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


muiscready();

  $.fn.BindClipboard = $.fn.BindClipboard || function(toolTip, target) {
		var options = {};
		if(target) {
			options = {
				"target": function(trigger) {
					console.log(trigger);
					return $(target)[0];
				}
			};
		}
		new ClipboardJS($(this)[0], options).on("success", function(e) {
			$(toolTip).fadeIn().fadeOut(3000);
			console.log(e);
		}).on("error", function(e) {
			$(toolTip).hide();
			console.log(e);
		});
	}
	// 调用clipboard
	$(".copyUrl").BindClipboard(".attention", "#room_str");
    
  
    

</script>
<div class="phoneFrame" id="phoneFrame" style="display: block;position: fixed;z-index: 10000;width: 100%;transform: translate(0, 0);background-color: rgba(0, 0, 0, 0);text-align: center;color: white;overflow: initial;height: 100%;top: 0;left: 0;max-width: 100%;border-radius: 0;">
    <div class="diyphone" style="width: 90vw;height: 112vw;vertical-align: middle;top: 13%;position: absolute;left: 5%;text-align: center;">
  <div style="width: 90vw;height: 112vw;"><img src="/images/bind/bind_bg.png" style="position: absolute; top: 2vw; left: 0px; width: 90vw; height: 110vw;"> <img src="/images/bind/bind_title.png" style="position: absolute; top: 0vw; left: 50%; margin-left: -25vw; width: 50vw; height: 12.5vw;">
    <div style="position: absolute; top: 16vw; left: 5vw; width: 80vw; height: 20vw; background: rgb(68, 54, 116); border-radius: 1vw;">
      <div style="position: absolute; top: 2vw; width: 100%; height: 10vw; line-height: 10vw; color: white; text-align: center;"> 为了游戏安全，神兽更新防伪登录系统 </div>
      <div style="position: absolute; top: 9vw; width: 100%; height: 10vw; line-height: 10vw; color: white; text-align: center;"> 需要您设置一次登录信息 </div>
    </div>
    <div style="position: absolute; top: 39vw; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white; border-width: 0px; border-top-style: solid; border-color: rgb(188, 191, 242);">
      <input type="number" placeholder="输入11位手机号" style="padding: 0px 12px; position: absolute; top: 1vw; left: 5vw; width: 50vw; height: 12vw; line-height: 6.5vw; border-style: solid; border-width: 1px; border-radius: 0.5vh; border-color: rgb(188, 191, 242); background-color: rgb(188, 191, 242); font-size: 4vw; -webkit-appearance: none;">
      <div id="loginauthcode" style="position: absolute; top: 1vw; left: 58vw; width: 27vw; height: 12vw; line-height: 12vw; background-color: rgba(211, 211, 211, 0); font-size: 3.5vw; border-radius: 0.5vh; color: white;"><img src="/images/bind/bind_btn_disable.png" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"> <!---->
        <div style="position: absolute; top: 0px; width: 100%; height: 100%; color: rgb(17, 19, 44);"> 发送验证码 </div>
        <!----></div>
    </div>
    <div style="position: absolute; top: 53vw; height: 4vw; line-height: 4vw; color: rgb(255, 135, 135); font-size: 3.5vw; text-align: left; margin-left: 5vw;"> </div>
    <div style="position: absolute; top: 57vw; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white; border-width: 0px; border-top-style: solid; border-color: rgb(188, 191, 242);">
      <input type="number" placeholder="输入4位验证码" style="padding: 0px 12px; position: absolute; top: 1vw; left: 5vw; width: 80vw; height: 12vw; line-height: 6.5vw; border-style: solid; border-width: 1px; border-radius: 0.5vh; border-color: rgb(188, 191, 242); background-color: rgb(188, 191, 242); font-size: 4vw; -webkit-appearance: none;">
    </div>
    <div style="position: absolute; top: 71vw; height: 4vw; line-height: 4vw; color: rgb(255, 135, 135); font-size: 3.5vw; text-align: left; margin-left: 5vw;"> </div>
    <div style="position: absolute; top: 75vw; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white; border-width: 0px; border-top-style: solid; border-color: rgb(188, 191, 242);">
      <input type="text" placeholder="输入6-18位英文或数字密钥" style="padding: 0px 12px; position: absolute; top: 1vw; left: 5vw; width: 80vw; height: 12vw; line-height: 6.5vw; border-style: solid; border-width: 1px; border-radius: 0.5vh; border-color: rgb(188, 191, 242); background-color: rgb(188, 191, 242); font-size: 4vw; -webkit-appearance: none;">
    </div>
    <div style="position: absolute; top: 89vw; height: 4vw; line-height: 4vw; color: rgb(255, 135, 135); font-size: 3.5vw; text-align: left; margin-left: 5vw;"> </div>
    <div style="position: absolute; bottom: 4vw; left: 50%; margin-left: -15vw; width: 30vw; height: 10.3vw; display: flex; border-radius: 2vw;"><img src="/images/bind/btn_ok.png" style="position: absolute; width: 100%; height: 100%;" onclick="closephoneFrame();"></div>
  </div>
  <!----> <img src="/images/bind/quit.png" style="position: absolute; top: 1vw; right: -3vw; width: 10vw; height: 10vw;" onclick="closephoneFrame();"></div>
</div>
<script src="/app/js/tanchuang.js" type="text/javascript"></script>
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
</body>
<script>
setTimeout("jzy.style.display='none'",100);
</script>
   	<div style="position: fixed;width:100%;height:100%;top:0;left:0;background: #000;z-index:9999999;" id="jzy">
		<div class="load4">
			<div class="loader">Loading...</div>
		</div>
		<div style="color: #999;position: absolute;bottom: 3vh;text-align: center;font-size: 3vw;width: 100%;">
			抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br>
			适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
		</div>
	</div>
</html>