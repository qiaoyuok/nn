<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">var element = new Image();Object.defineProperty(element,'id',{get:function(){window.location.href="/404.html"}});console.log(element);</script>
<script type="text/javascript">window.console && window.console.log && (console.log("同学~\n更多精品源码请上源码社区 www.iabug.com?"),console.log("%c更多精品源码请上源码社区 www.iabug.com", "color:red"))</script>
<div style="position: fixed;width:100%;height:100%;top:0;left:0;background: #000;z-index: 101" id="loading"ng-show="bottomSelectId==2">
<img src="/files/images/common/loading.gif" style="top: 40%;position: absolute;left: 50%;margin-left: -45px;margin-top: -45px;" />
</div>
<script type="text/javascript">
  var newNum = "";
  var per = window.innerWidth / 530;
    var globalData = {
        "card":"<?php echo ($user["fk"]); ?>",
        "isNotyMsg":'0',
        "notyMsg":'',
        "notyTime":'0',
        "notySpeed":8000,
        "baseUrl": window.location.origin+"/",
        "openId": "",
        "dealerNum": "2",
        "guideId":"<?php echo ($user["id"]); ?>",
    };
    var userData = {
        "accountId": "<?php echo ($user["id"]); ?>",
        "nickname": "<?php echo ($user["nickname"]); ?>",
        "avatar": "<?php echo ($user["img"]); ?>",
        "card": "<?php echo ($user["fk"]); ?>",
        "isManageOn":<?php echo ($user["sfgl"]); ?>,
        "userCode":"<?php echo ($user["id"]); ?>",
        "isAuthPhone":"0",
        "authCardCount":"10",
        "phone":"",
        "password":"",
        "myCode":"<?php echo ($user["id"]); ?>",
        "isMember":"1",
        "isGuideManager":"<?php echo ($maccountid["id"]); ?>",
        "guideName":"<?php echo ($maccountid["nickname"]); ?>の公会",
        "guideId":"<?php echo ($user["id"]); ?>",
    };
        var muserData = {
           "accountId": "<?php echo ($user["maccountid"]); ?>",
            "userCode":"<?php echo ($user["id"]); ?>",
            "inviteGameUrl":"",
    };
    var configData = {
        "appId": "wxf2f8ebd089a8846a",
        "timestamp": "1551973904",
        "nonceStr": "67ca0de29464c61be42e3d95466825c9",
        "signature": "1fe79bff56911c568bce2ff2aa8583ff528aa874",
    };
    var userDataHeight = window.innerWidth * 0.1617 ;
    var myTeamHeight = window.innerWidth *  0.1375 ;
    userDataHeight = window.innerWidth * 0.1617 ;
    myTeamHeight = window.innerWidth *  0.1375 ;
    viewOffsetCount = 1;
    var myAccounts = [];
</script> 
<html ng-app="app">
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <title><?php echo ($user["nickname"]); ?>|麒麟大厅</title>
    <link rel="stylesheet" href="/files/css/loading.css">
    <link rel="stylesheet" href="/files/css/alert.css">
    <link rel="stylesheet" href="/files/css/centerwx.css">
    <script type="text/javascript" src="/files/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/files/js/angular.min.js"></script>
    <script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="/files/js/fastclick.js"></script>
    <script type="text/javascript" src="/files/js/jquery.marquee.min.js"></script>
    <script type="text/javascript" src="/files/js/clipboard.min.js"></script>
    <script type="text/javascript" src="/files/js/vue.min.js" ></script>
    <script type="text/javascript" src="/files/js/vue-resource.min.js" ></script>
    <script type="text/javascript" src="/files/js/toolall.js"></script>
    <script type="text/javascript" src="/files/js/scroll/swiper.min.js"></script>
    <script type="text/javascript" src="/files/js/rem.js"defer="defer"></script>
</head>
	<script type="text/javascript">
tSpeed = 300 //切换速度300ms
//内容滚动			
  var scrollSwiper = new Swiper('.scroll', {
  	//65是头部的高
  	//36是top地址和搜索的高
  	slidesOffsetBefore: 0,
  	direction: 'vertical',
  	freeMode: true,
  	slidesPerView: 'auto',
	
  });
    </script>
<script type="text/javascript">
    var app=angular.module('app',[]);
  
    app.controller("myCtrl", function($scope,$http) {
        FastClick.attach(document.body);
        $scope.gotopage=function(){
            window.location.href = "/5e1e5cb1d3841476ceb279da1db2e905/6IOh6Iux6ZuE/ouIvv0wtqOBjwlfICXcC4hk6sx1w/url/index";
        }
        $scope.gotozj=function(){
            window.location.href = "http://tt.sjrcrld.cn/game/playRoomList";
        }
        $scope.gotored=function(){
            window.location.href = "http://tt.sjrcrld.cn/ay/rp";
        }
        $scope.gotoerweima=function(){
            window.location.href='erweima';
        }
        $scope.width=window.innerWidth;
        $scope.userInfo={
            "id":"<?php echo ($user["id"]); ?>",
            "name":"<?php echo ($user["nickname"]); ?>",
            "avatar":"<?php echo ($user["img"]); ?>",
            "card":"<?php echo ($user["fk"]); ?>",
            "roomCard":"<?php echo ($user["fk"]); ?>",
            "url":window.location.origin,
            "token":"<?php echo ($user["token"]); ?>",
            "maccountid":"<?php echo ($user["maccountid"]); ?>",
        }
             $scope.img={
               "bull":"/files/images/gameicon/qn/icon_bull6.png",
               "laibull":"/files/images/gameicon/qn/icon_laibull.png",
               "sangong":"/files/images/gameicon/qn/icon_sangong.png",
               "flower":"/files/images/gameicon/qn/icon_flower.png",
               "landlord":"/files/images/gameicon/qn/icon_landlord.png",
               "majiang":"/files/images/gameicon/qn/icon_majiang.png",
               "paijiu":"/files/images/gameicon/qn/icon_paijiu.png",
               "erbagang":"/files/images/gameicon/qn/icon_erbagang.png",
               "yxx":"/files/images/gameicon/qn/icon_yxx.png",
               "dcx":"/files/images/gameicon/qn/icon_dcx.png",
               "dxbull":"/files/images/gameicon/qn/icon_dxbull.png",
               "s13s":"/files/images/gameicon/qn/icon_s13s.png",
               "title":"/files/images/gameicon/qn/title.png",
               "bj":"/files/images/gameicon/qn/bj.jpg",
               "infonew":"/files/images/gameicon/qn/infonew.png",
        }

  	$scope.dealerNum = "2";
    $scope.guideName ="<?php echo ($maccountid["nickname"]); ?>の公会";      
    $scope.bottomSelectId = 2; //默认打开游戏大厅
 $scope.Multiplehallshow=function(){
  $('#Multiplehall').show();
        }
  $scope.Multiplehallhide=function(){
 $('#Multiplehall').hide();
        }
   
        var socketStatus=0;
        $(".main").show();
        $("#loading").hide();
        $scope.activity=new Array();
        $scope.isShowAlert=false;
        $scope.alertType=0;
        $scope.alertText="";
        $scope.showAlert=function(type,text){
            $(".alertText").css("top","90px")
            $scope.alertType=type;
            $scope.alertText=text;
            $scope.isShowAlert=true;

            setTimeout(function() {
                $scope.$apply();
            }, 0);

            setTimeout(function(){
                var wHeight = window.innerHeight;
                var alertHeight = $(".alertText").height();
                var textHeight = $(".alertText").height();

                if (alertHeight < wHeight * 0.15) {
                    alertHeight = wHeight * 0.15;
                }

                if (alertHeight > wHeight * 0.8) {
                    alertHeight = wHeight * 0.8;
                }

                var mainHeight = alertHeight + wHeight * (0.022 + 0.034) * 2 + wHeight * 0.022 + wHeight * 0.056;
                if (type == 8) {
                    mainHeight = mainHeight - wHeight * 0.022 - wHeight * 0.056
                }

                var blackHeight = alertHeight + wHeight * 0.034 * 2;
                var alertTop = wHeight * 0.022 + (blackHeight - textHeight) / 2;

                $(".alert .mainPart").css('height', mainHeight + 'px');
                $(".alert .mainPart").css('margin-top', '-' + mainHeight / 2 + 'px');
                $(".alert .mainPart .backImg .blackImg").css('height', blackHeight + 'px');
                $(".alert .mainPart .alertText").css('top', alertTop + 'px');

                $scope.$apply();
            },0)
        }
            $scope.home=function() {
            var baseUrl="/";
            var url=baseUrl+"index.php/portal/index/get_manager";
            ajax({url:url,
                data:{"account_id":userData.accountId, "maccount_id":userData.accountId},
                success:function(content){
                    console.log("content: ", content);
                }
            });
        var url=baseUrl+"5e1e5cb1d3841476ceb279da1db2e905/6IOh6Iux6ZuE/ouIvv0wtqOBjwifICXcC4hk6sx1w/url/index";
        window.location.href = url;
    }
        $scope.closeAlert=function(){
            if($scope.alertType==1){
                $scope.isShowAlert=false;
                if(!$scope.is_connect){
                    $scope.is_connect=true;
                }
            }
            else{
                $scope.isShowAlert=false;
            }
        }

        $scope.getAuthcodeHttp=function(phone){
            $http({
                url:'http://tt.sjrcrld.cn/account/getMobileSms',
                method: 'POST',
                headers:{
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                data:{
                    "phone":phone,
                    "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                },
            }).success(function(data){

                if (data.result==0) {
                    setTimeout(function() {
                        $scope.authcodeTime = 60;
                        authcodeTimer();
                        $scope.authcodeType = 2;
                    }, 0);

                } else {
                    alert(data.result_message)
                }
            }).error(function(data){
                console.log(data);
            });
        };

        $scope.bindPhoneHttp=function(phone,authcode){
            $http({
                url:'http://tt.sjrcrld.cn/account/checkSmsCode',
                method: 'POST',
                headers:{
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                data:{
                    "phone":phone,
                    "code":authcode,
                    "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                },
            }).success(function(data){

                if(data.result==0){
                    setTimeout(function() {
                        $scope.isAuthPhone = 0;
                        $scope.phone = $scope.sPhone;

                        if (data.data.account_id != $scope.userInfo.id) {
                            $scope.showAlert(23,data.result_message);
                        } else {
                            $scope.showAlert(6,data.result_message);
                        }

                        $scope.userInfo.card = parseInt($scope.userInfo.card) + parseInt(data.data.card_count);

                        $scope.sPhone = '';
                        $scope.sAuthcode = '';
                        $scope.$apply();
                    }, 0);
                } else{
                    setTimeout(function() {
                        $scope.showAlert(6,data.result_message);
                        $scope.$apply();
                    }, 0);
                }
            }).error(function(data){
                setTimeout(function() {
                    $scope.authcodeTime = 0;
                    $scope.showAlert(6,"绑定失败");
                    $scope.$apply();
                }, 0);
            });
        };

        $scope.isAuthPhone = "0";
        $scope.phone = "";
        $scope.sPhone='';
        $scope.sAuthcode='';
        $scope.authcodeType=1;
        $scope.authcodeText='发送验证码';
        $scope.authcodeTime=60;
        $scope.phoneType=1;
        $scope.phoneText='绑定手机';
        $scope.showGotomain=0;
        $scope.userAccountId=<?php echo ($user["id"]); ?>; //自己公会ID
	    $scope.muserAccountId=<?php echo ($user["maccountid"]); ?>; //当前公会ID
	    $scope.inputUrl='';

        setTimeout(function() {
            $scope.$apply();
        }, 100);

        $scope.finishBindPhone = function () {
            window.location.href=window.location.href+"&id="+10000*Math.random();
        };

        $scope.reloadView = function () {
            window.location.href=window.location.href+"&id="+10000*Math.random();
        };

        $scope.bindPhone = function () {
            var validPhone = checkPhone($scope.sPhone);
            var validAuthcode = checkAuthcode($scope.sAuthcode);

            if (validPhone == false) {
                setTimeout(function() {
                    $scope.showAlert(6,'手机号码有误，请重填');
                }, 0);

                return;
            }

            if (validAuthcode == false) {
                setTimeout(function() {
                    $scope.showAlert(6,'验证码有误，请重填');
                }, 0);

                return;
            }

            $scope.bindPhoneHttp($scope.sPhone,$scope.sAuthcode);
        };

        $scope.hideBindPhone = function () {
            $('#validePhone').css('display','none');
        };

        $scope.getAuthcode = function () {
            if ($scope.authcodeType != 1) {
                return;
            }

            var color = $('#authcode').css('background-color');

            if (color != 'rgb(64, 112, 251)') {
                return;
            }

            var validPhone = checkPhone($scope.sPhone);

            if (validPhone == false) {
                setTimeout(function() {
                    $scope.showAlert(6,'手机号码有误，请重填');
                }, 10);

                return;
            }

            $scope.getAuthcodeHttp($scope.sPhone);
        };

        $scope.phoneChange = function () {
            var result = checkPhone($scope.sPhone);
            if (result) {
                $('#authcode').css('background-color','rgb(64,112,251)');
            } else {
                $('#authcode').css('background-color','lightgray');
            }
        };

        function checkPhone(phone) {

            if (!(/^1(3|4|5|7|8)\d{9}$/.test(phone))) {
                return false;
            } else {
                return true;
            }
        };

        function checkAuthcode(code) {
            if (code == '' || code == undefined) {
                return false;
            }

            var reg = new RegExp("^[0-9]*$");
            if (!reg.test(code)) {
                return false;
            } else {
                return true;
            }
        };

        var authcodeTimer = function authcodeTimer() {
            if ($scope.authcodeTime <= 0) {
                $scope.authcodeText = '发送验证码';
                $scope.authcodeTime = 60;
                $scope.authcodeType = 1;
                return;
            }

            $scope.authcodeTime = $scope.authcodeTime - 1;
            $scope.authcodeText = $scope.authcodeTime + 's';

            setTimeout(function() {
                $scope.$apply();
            }, 0);

            setTimeout(function () {
                authcodeTimer();
            }, 1000);
        };

        //广播
        $scope.isShowNoty = true;
        $scope.notyMsg = '平台已启用浏览器密匙登录功能,使用QQ 微信 闲聊登陆的用户请在 个人中心 密匙设置 复制保存当前ID的密匙,在链接被封的情况下 可以使用浏览器进行登陆游戏!';

        setTimeout(function () {
            if (globalData.isNotyMsg != undefined && globalData.isNotyMsg != null) {
                $scope.notyMsg = globalData.notyMsg;
                if (globalData.isNotyMsg == 1) {
                    $scope.isShowNoty = true;
                    setTimeout(function () {
                        $scope.isShowNoty = false;
                        $scope.$apply();
                    }, globalData.notyTime * 1000);
                    $scope.$apply();
                }
            } else {
                globalData.isNotyMsg = 0;
            }

            $('#marquee').marquee({
                //speed in milliseconds of the marquee
                duration: globalData.notySpeed,
                //gap in pixels between the tickers
                gap: 50,
                //time in milliseconds before the marquee will start animating
                delayBeforeStart: 0,
                //'left' or 'right'
                direction: 'left',
                //true or false - should the marquee be duplicated to show an effect of continues flow
                duplicated: true
            });

        }, 50);


        $scope.is_operation=false;
        $scope.is_operationLogo=false;
        $scope.waiting=function(){
            $scope.is_operation=true;
            setTimeout(function(){
                if($scope.is_operation){
                    $scope.is_operation=false;
                    $scope.showAlert(6,"创建房间失败，请重新创建")
                }
            },15000)
        };
        $scope.socket_url="";
        $scope.socket_type="";
        $scope.connectSocket=function(socket,type){
            $scope.socket_url=socket;
            $scope.socket_type=type;
            $scope.ws = new WebSocket(socket);

            $scope.ws.onopen = function(){
                $scope.is_operation=true;
                var tiao=setInterval(function(){
                    socketStatus=socketStatus+1;
                    $scope.ws.send("@");
                    if(socketStatus>5||socketStatus>5){
                    console.log("心跳包停止");  
                    clearInterval(tiao);
                    }
                },4000);
                console.log("socketOpen");

                if(type==1){	//斗牛 6、9、12、10
                    $scope.ws.send(JSON.stringify({
                        "act":"gamedn",
                        "account_id":$scope.userInfo.id,
                        "session":$scope.userInfo.token,
                        "url":$scope.userInfo.url,
                        "maccountid":$scope.userInfo.maccountid,
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "ticket_type":$scope.createInfo.bullx.ticket_type,
                            "score_type":$scope.createInfo.bullx.score_type,
                            "bet_type":$scope.createInfo.bullx.bet_type,
                            "rule_type":$scope.createInfo.bullx.rule_type,
                            "is_cardfive":$scope.createInfo.bullx.is_cardfive,
                            "is_cardbomb":$scope.createInfo.bullx.is_cardbomb,
                            "is_cardtiny":$scope.createInfo.bullx.is_cardtiny,
                            "is_cardfour":$scope.createInfo.bullx.is_cardfour,
                            "is_flush":$scope.createInfo.bullx.is_flush,
                            "is_calabash":$scope.createInfo.bullx.is_calabash,
                            "is_straight":$scope.createInfo.bullx.is_straight,
                            "is_sequence":$scope.createInfo.bullx.is_sequence,
                            "banker_mode":$scope.createInfo.bullx.banker_mode,
                            "banker_score_type":$scope.createInfo.bullx.banker_score,
                            "ready_time":$scope.createInfo.bullx.ready_time,
                            "grab_time":$scope.createInfo.bullx.grab_time,
                            "bet_time":$scope.createInfo.bullx.bet_time,
                            "show_time":$scope.createInfo.bullx.show_time,
                            //房间人数类型
                            "max_count_type":$scope.createInfo.bullx.max_count_type,
                            "is_laizi":0,
                        }
                    }));
                } else if(type==4){ //扎金花 6、9
                    $scope.ws.send(JSON.stringify({
                        "act":"gamezjh",
                        "account_id":$scope.userInfo.id,
                        "session":$scope.userInfo.token,
                        "url":$scope.userInfo.url,
                        "maccountid":$scope.userInfo.maccountid,
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            //房间人数
                            "max_count_type":$scope.createInfo.flower.max_count_type,
                            'default_score': $scope.createInfo.flower.default_score,
                            'chip_type': $scope.createInfo.flower.chip_type,
                            'disable_pk':$scope.createInfo.flower.disable_pk,
                            'disable_look':$scope.createInfo.flower.disable_look,
                            'upper_limit':$scope.createInfo.flower.upper_limit,
                            'pk_score': $scope.createInfo.flower.pk_score,
                            'look_score': $scope.createInfo.flower.look_score,
                            'ticket_type':$scope.createInfo.flower.ticket_type,
                            'pk_round':$scope.createInfo.flower.pk_round,
                        }
                    }));
                }else if(type==5){
                    $scope.ws.send(JSON.stringify({
                        "act":"gamesg",
                        "account_id":$scope.userInfo.id,
                        "session":$scope.userInfo.token,
                        "url":$scope.userInfo.url,
                        "maccountid":$scope.userInfo.maccountid,
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "ticket_type":$scope.createInfo.sangong.ticket_type,
                            "score_type":$scope.createInfo.sangong.score_type,
                            //房间人数
                            "max_count_type":$scope.createInfo.sangong.max_count_type,
                            "is_cardjoker":$scope.createInfo.sangong.is_cardjoker,
                            "is_cardbao9":$scope.createInfo.sangong.is_cardbao9,
                            "banker_mode":$scope.createInfo.sangong.banker_mode,
                            "banker_score_type":$scope.createInfo.sangong.banker_score,
                        }
                    }));
                }else if(type==6){
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"3068032",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "banker_mode":$scope.createInfo.erbagang.banker_mode,
                            "chip_type":$scope.createInfo.erbagang.chip_type,
                            "banker_score_type":$scope.createInfo.erbagang.score_type,	 //上庄分数类型
                            "rule_type":$scope.createInfo.erbagang.rule_type,
                            "ticket_count":$scope.createInfo.erbagang.ticket_count,  //消耗门票数
                        }
                    }));
                }else if(type==7){
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"3068033",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "ticket_count":$scope.createInfo.landlord.ticket_count,
                            "base_score":$scope.createInfo.landlord.base_score,
                            "ask_mode":$scope.createInfo.landlord.ask_mode,
                        }
                    }));
                }else if(type==8){
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"306803",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "joker":$scope.createInfo.majiang.joker,
                            "horse_count":$scope.createInfo.majiang.horse_count,
                            "qianggang":$scope.createInfo.majiang.qianggang,
                            "chengbao":$scope.createInfo.majiang.chengbao,
                            "ticket_count":$scope.createInfo.majiang.ticket_count,
                        }
                    }));
                }
                else if(type==9){
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"306803",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            'chip_type': $scope.createInfo.xiaxie.chip_type,
                            'ticket_type':$scope.createInfo.xiaxie.ticket_type,
                            'rule_value1':$scope.createInfo.xiaxie.rule_value1,
                            'upper_limit':$scope.createInfo.xiaxie.upper_limit,
                        }
                    }));
                }
                else if(type==10){
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"306803",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "ticket_type":$scope.createInfo.paijiu.ticket_type,
                            "score_type":$scope.createInfo.paijiu.score_type,
                            "banker_mode":$scope.createInfo.paijiu.banker_mode,
                        }
                    }));
                }
                else if(type==12){
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"306803",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "ticket_type":$scope.createInfo.dxbull.ticket_type,
                            "bet_type":$scope.createInfo.dxbull.bet_type,
                            "is_cardfive":$scope.createInfo.dxbull.is_cardfive,
                            "is_cardbomb":$scope.createInfo.dxbull.is_cardbomb,
                            "is_cardtiny":$scope.createInfo.dxbull.is_cardtiny,
                        }
                    }));
                }
                else if(type==13){  //大吃小
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"306803",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "max_count_type":$scope.createInfo.dcx.max_count_type,
                            "ticket_type":$scope.createInfo.dcx.ticket_type,
                            "bet_type":$scope.createInfo.dcx.bet_type,
                            "is_cardjoker":$scope.createInfo.dcx.is_cardjoker,
                            "is_cardbao9":$scope.createInfo.dcx.is_cardbao9,
                        }
                    }));
                }
                else if(type==14){  //赖子牛牛
                    console.log($scope.createInfo.laibull);
                    $scope.ws.send(JSON.stringify({
                        "act":"gamelzdn",
                        "account_id":$scope.userInfo.id,
                        "session":$scope.userInfo.token,
                        "url":$scope.userInfo.url,
                        "maccountid":$scope.userInfo.maccountid,
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "max_count_type":$scope.createInfo.laibull.max_count_type,
                            "ticket_type":$scope.createInfo.laibull.ticket_type,
                            "score_type":$scope.createInfo.laibull.score_type,
                            "bet_type":$scope.createInfo.laibull.bet_type,
                            "rule_type":$scope.createInfo.laibull.rule_type,
                            "is_cardfive":$scope.createInfo.laibull.is_cardfive,
                            "is_cardbomb":$scope.createInfo.laibull.is_cardbomb,
                            "is_cardtiny":$scope.createInfo.laibull.is_cardtiny,
                            "is_cardfour":$scope.createInfo.laibull.is_cardfour,
                            "is_flush":$scope.createInfo.laibull.is_flush,
                            "is_calabash":$scope.createInfo.laibull.is_calabash,
                            "is_straight":$scope.createInfo.laibull.is_straight,
                            "is_sequence":$scope.createInfo.laibull.is_sequence,
                            "banker_mode":$scope.createInfo.laibull.banker_mode,
                            "banker_score_type":$scope.createInfo.laibull.banker_score,
                            "ready_time":$scope.createInfo.laibull.ready_time,
                            "grab_time":$scope.createInfo.laibull.grab_time,
                            "bet_time":$scope.createInfo.laibull.bet_time,
                            "show_time":$scope.createInfo.laibull.show_time,
                            "is_laizi":1
                        }
                    }));
                }
                else if(type==16){  //十三水
                    console.log($scope.createInfo.s13s);
                    $scope.ws.send(JSON.stringify({
                        "operation":"CreateRoom",
                        "account_id":"306803",
                        "session":"NjRmNDJhNDA3MTRhYWE0MWJjNzRkOTgyYWFlNTYzZDY=",
                        "data":{
                            "data_key":Date.parse(new Date())+randomString(5),
                            "ticket_type":$scope.createInfo.s13s.ticket_type,
                            "score_type":$scope.createInfo.s13s.score_type,
                            "ready_time":$scope.createInfo.s13s.ready_time,
                            "think_time":$scope.createInfo.s13s.think_time,
                            "banker_mode":4,
                            "max_count_type":2,
                        }
                    }));
                }

            };

          
          	$scope.gogames=function() {
            window.location.href = muserData.inviteGameUrl;
                }
            $scope.ws.onmessage = function(evt){
                if(evt.data=="@"){
                    socketStatus=0;
                    return 0;
                }
                var obj = eval('(' + evt.data + ')');
                if (obj.result==1){
                    $scope.is_operation=false;
                    $scope.showAlert(1,obj.result_message);
                } else if (obj.result == 0){
                    $scope.createInfo.isShow=0;
                    $(".main").css({'overflow':'visible','position': 'static',});
                    $("body").scrollTop($scope.scrolltop);
                    muserData.inviteGameUrl=obj.data.room_number;
                    $scope.is_operation=false;
                    $scope.showAlert(34,"麒麟区:"+obj.result_message);
                }  else if (obj.result == -201){
                    $scope.is_operation=false;
                    $scope.showAlert(31,obj.result_message);
                }  else {
                    $scope.is_operation=false;
                    $scope.showAlert(6,obj.result_message);
                }
            };
            $scope.ws.onclose = function(evt){
                console.log("ws closed");
                if($scope.is_operation){
                    $scope.connectSocket($scope.socket_url,$scope.socket_type);
                } else {
                    return 0;
                }
                //	window.location.reload();
            }
            $scope.ws.onerror = function(evt){console.log("WebSocketError!");};
        }

        $scope.createInfo={
            "isShow":-1,
            "bullx":localStorage.bullx?JSON.parse(localStorage.bullx):{
                "max_count_type":2,   // 1六人房  2九人房  3十二人  4十人
                "ticket_type":1,
                "score_type":1,
                "rule_type":2,   //规则 1: 牛牛x3牛九x2牛八x2      2: 牛牛x4牛九x3牛八x2牛七x2
                "is_laizi":0,      //是否有赖子
                "is_cardfive":1, //牌型 五花牛(5倍)  1表示默认勾选
                "is_cardbomb":1, //牌型 炸弹牛(6倍)
                "is_cardtiny":1, //牌型 五小牛(8倍)
                "is_cardfour":1,
                "is_flush":1,
                "is_calabash":1,
                "is_straight":1,
                "is_sequence":1,
                "banker_mode":2, //模式 2 明牌抢庄
                "banker_score":4,
                "bet_type":2,
                "banker1":"unselected",
                "banker2":"selected",
                "banker3":"unselected",
                "banker4":"unselected",
                "banker5":"unselected",
                "ready_time":'10',
                "grab_time":'10',
                "bet_time":'10',
                "show_time":'10'
            },

            "flower":localStorage.flower?JSON.parse(localStorage.flower):{
                "max_count_type":1,   // 1六人房  2九人房
                'chip_type': 1,
                'default_score': 4,
                'chip_type': 1,
                'disable_look': 0,
                'disable_pk': 0,
                'upper_limit': 1000,
                'pk_score': 0,
                'look_score': 0,
                'ticket_type': 1,
                'pk_round': 1,
                "ready_time":'10',
                "bet_time":'15',
            },
            "sangong":localStorage.sangong?JSON.parse(localStorage.sangong):{
                "ticket_type":1,
                "score_type":1,
                "max_count_type":1,   // 1六人房  2九人房
                "is_cardjoker":1, //天公x10,雷公x7,地公x5  1表示默认勾选
                "is_cardbao9":1,  //暴玖x9				 1表示默认勾选
                "banker_mode":1, //模式 2 明牌抢庄 4经典
                "banker_score":4,
                "banker1":"unselected",
                "banker2":"unselected",
                "banker4":"selected",
            },
            "erbagang":localStorage.erbagang?JSON.parse(localStorage.erbagang):{
                "banker_mode":1,  //模式 1 自由抢庄
                "score_type":1,   //上庄分数类型
                "chip_type":1,   //筹码组选项
                "rule_type":2,    //规则
                "ticket_count":1,
                "banker1":"selected",
                "banker2":"unselected",
            },
            "landlord":localStorage.landlord?JSON.parse(localStorage.landlord):{
                "ticket_count":1,
                "base_score":1,
                "ask_mode":1,
            },
            "majiang":localStorage.majiang?JSON.parse(localStorage.majiang):{
                "joker":0,
                "horse_count":0,
                "qianggang":0,
                "ticket_count":1,
                "chengbao":0,
            },
            "xiaxie": localStorage.xiaxie?JSON.parse(localStorage.xiaxie) : {
                'chip_type': 1,
                'ticket_type': 1,
                'rule_value1': 1,
                'upper_limit': 100,
            },
            "paijiu":localStorage.paijiu?JSON.parse(localStorage.paijiu):{
                "ticket_type":1,
                "score_type":1,
                "banker_mode":2, //模式 2 明牌抢庄
                "banker1":"unselected",
                "banker2":"selected",
            },
            //大吃小牛牛 默认建房选项
            "dxbull":localStorage.dxbull?JSON.parse(localStorage.dxbull):{
                "ticket_type":1,
                "bet_type":1,
                "is_cardfive":1, //牌型 五花牛(5倍)  1表示默认勾选
                "is_cardbomb":1, //牌型 炸弹牛(6倍)
                "is_cardtiny":1, //牌型 五小牛(8倍)
            },
            //大吃小 默认建房选项
            "dcx":localStorage.dcx?JSON.parse(localStorage.dcx):{
                "max_count_type":1,   // 1九人房  2十二人房
                "ticket_type":1,
                "bet_type":1,
                "is_cardjoker":0, //天公x10,雷公x7,地公x5  1表示默认勾选
                "is_cardbao9":0,  //暴玖x9                 1表示默认勾选
            },
            //赖子牛牛 默认建房选项
            "laibull":localStorage.laibull?JSON.parse(localStorage.laibull):{
                "max_count_type":2,   // 1六人房   2九人房  3十二人房
                "ticket_type":1,
                "score_type":1,
                "rule_type":2,   //规则 1: 牛牛x3牛九x2牛八x2      2: 牛牛x4牛九x3牛八x2牛七x2
                "is_cardfive":1, //牌型 五花牛(5倍)  1表示默认勾选
                "is_cardbomb":1, //牌型 炸弹牛(6倍)
                "is_cardtiny":1, //牌型 五小牛(8倍)
                "is_cardfour":1,
                "is_flush":1,
                "is_calabash":1,
                "is_straight":1,
                "is_sequence":1,
                "banker_mode":2, //模式 2 明牌抢庄
                "banker_score":0,
                "bet_type":2,
                "banker1":"unselected",
                "banker2":"selected",
                "ready_time":'10',
                "grab_time":'10',
                "bet_time":'10',
                "show_time":'10'
            },
            //十三水 默认建房选项
            "s13s": localStorage.s13s ? JSON.parse(localStorage.s13s) : {
                "ticket_type":1,
                "score_type":1,
                "ready_time":'10',
                "think_time":'30',
            },
        }

        $scope.selectChange=function(type,num){
            if($scope.createInfo.isShow==1){
                if(type==1){
                    $scope.createInfo.bullx.score_type=num;
                } else if(type==2){
                    $scope.createInfo.bullx.rule_type=num;
                } else if(type==3){
                    switch(num){
                        case 1:
                            $scope.createInfo.bullx.is_cardfour=($scope.createInfo.bullx.is_cardfour+1)%2;
                            break;
                        case 2:
                            $scope.createInfo.bullx.is_cardfive=($scope.createInfo.bullx.is_cardfive+1)%2;
                            break;
                        case 3:
                            $scope.createInfo.bullx.is_straight=($scope.createInfo.bullx.is_straight+1)%2;
                            break;
                        case 4:
                            $scope.createInfo.bullx.is_flush=($scope.createInfo.bullx.is_flush+1)%2;
                            break;
                        case 5:
                            $scope.createInfo.bullx.is_calabash=($scope.createInfo.bullx.is_calabash+1)%2;
                            break;
                        case 6:
                            $scope.createInfo.bullx.is_cardbomb=($scope.createInfo.bullx.is_cardbomb+1)%2;
                            break;
                        case 7:
                            $scope.createInfo.bullx.is_sequence=($scope.createInfo.bullx.is_sequence+1)%2;
                            break;
                        case 8:
                            $scope.createInfo.bullx.is_cardtiny=($scope.createInfo.bullx.is_cardtiny+1)%2;
                            break;
                        case 9:
                            $scope.createInfo.bullx.is_laizi=($scope.createInfo.bullx.is_laizi+1)%2;
                            break;
                    }
                }
                else if(type==4){
                    $scope.createInfo.bullx.ticket_type=num;
                } else if (type == 5) {
                    $scope.createInfo.bullx.banker_score=num;
                } else if(type==6){
                    $scope.createInfo.bullx.bet_type=num;
                } else if(type==7){
                    $scope.createInfo.bullx.max_count_type=num;
                }
            } else if($scope.createInfo.isShow==4){
                if(type==1){
                    $scope.createInfo.flower.max_count_type=num;
                } else if(type==2){
                    $scope.createInfo.flower.default_score=num;
                } else if(type==3){
                    $scope.createInfo.flower.chip_type=num;
                } else if(type==4){
                    if (num == 1) {
                        $scope.createInfo.flower.disable_look=($scope.createInfo.flower.disable_look+1)%2;
                    } else if (num == 2) {
                        $scope.createInfo.flower.disable_pk=($scope.createInfo.flower.disable_pk+1)%2;
                    }
                } else if(type==5){
                    $scope.createInfo.flower.upper_limit=num;
                } else if(type==6){
                    $scope.createInfo.flower.pk_score=num;
                } else if(type==7){
                    $scope.createInfo.flower.look_score=num;
                } else if(type==8){
                    $scope.createInfo.flower.ticket_type=num;
                }else if(type==9){
                    $scope.createInfo.flower.pk_round=num;
                }
            } else if($scope.createInfo.isShow==5){	//三公
                if(type==1){
                    $scope.createInfo.sangong.score_type=num;
                }else if(type==2){
                    $scope.createInfo.sangong.max_count_type=num;
                }
                else if(type==3){
                    if(num==1)
                        $scope.createInfo.sangong.is_cardjoker=($scope.createInfo.sangong.is_cardjoker+1)%2;
                    else if(num==2)
                        $scope.createInfo.sangong.is_cardbao9=($scope.createInfo.sangong.is_cardbao9+1)%2;
                }
                else if(type==4){
                    $scope.createInfo.sangong.ticket_type=num;
                } else if (type == 5) {
                    $scope.createInfo.sangong.banker_score=num;
                }
            } else if($scope.createInfo.isShow==6){
                if(type==1){
                    $scope.createInfo.erbagang.score_type=num;
                }
                else if(type==2){
                    $scope.createInfo.erbagang.chip_type=num;
                }
                else if(type==3){
                    $scope.createInfo.erbagang.rule_type=num;
                }
                else if(type==4){
                    $scope.createInfo.erbagang.ticket_count=num;
                }
            } else if($scope.createInfo.isShow==7){
                if (type==1) {
                    $scope.createInfo.landlord.base_score = num;
                } else if (type==2) {
                    $scope.createInfo.landlord.ask_mode = num;
                } else if(type==3) {
                    $scope.createInfo.landlord.ticket_count = num;
                }
            } else if($scope.createInfo.isShow==8){
                if(type==1){
                    $scope.createInfo.majiang.joker=num;
                }
                else if(type==2){
                    $scope.createInfo.majiang.horse_count=num;
                }
                else if(type==3){
                    $scope.createInfo.majiang.qianggang=($scope.createInfo.majiang.qianggang+1)%2;
                }
                else if(type==4){
                    $scope.createInfo.majiang.ticket_count=num;
                }
                else if(type==5){
                    $scope.createInfo.majiang.chengbao=($scope.createInfo.majiang.chengbao+1)%2;
                }
            } else if($scope.createInfo.isShow==9){
                if(type==1){
                    $scope.createInfo.xiaxie.chip_type=num;
                } else if(type==2){
                    if (num == 1) {
                        $scope.createInfo.xiaxie.rule_value1 = ($scope.createInfo.xiaxie.rule_value1+1)%2;
                    }
                }
                else if(type==3){
                    $scope.createInfo.xiaxie.ticket_type=num;
                }
                else if(type==4){
                    $scope.createInfo.xiaxie.upper_limit=num;
                }
            } else if($scope.createInfo.isShow==10){
                if(type==1){
                    $scope.createInfo.paijiu.score_type=num;
                }else if(type==4){
                    $scope.createInfo.paijiu.ticket_type=num;
                }
            } else if($scope.createInfo.isShow==12){
                if(type==1){
                    $scope.createInfo.dxbull.bet_type=num;
                }
                else if(type==3){
                    if(num==1)
                        $scope.createInfo.dxbull.is_cardfive=($scope.createInfo.dxbull.is_cardfive+1)%2;
                    else if(num==2)
                        $scope.createInfo.dxbull.is_cardbomb=($scope.createInfo.dxbull.is_cardbomb+1)%2;
                    else if(num==3)
                        $scope.createInfo.dxbull.is_cardtiny=($scope.createInfo.dxbull.is_cardtiny+1)%2;
                }
                else if(type==4){
                    $scope.createInfo.dxbull.ticket_type=num;
                }
            } else if($scope.createInfo.isShow==13){
                if(type==1){
                    $scope.createInfo.dcx.bet_type=num;
                } else if(type==3){
                    if(num==1)
                        $scope.createInfo.dcx.is_cardjoker=($scope.createInfo.dcx.is_cardjoker+1)%2;
                    else if(num==2)
                        $scope.createInfo.dcx.is_cardbao9=($scope.createInfo.dcx.is_cardbao9+1)%2;
                } else if(type==4){
                    $scope.createInfo.dcx.ticket_type=num;
                } else if(type==6){
                    $scope.createInfo.dcx.max_count_type=num;
                }
            } else if($scope.createInfo.isShow==14){
                if(type==1){
                    $scope.createInfo.laibull.score_type=num;
                }
                else if(type==2){
                    $scope.createInfo.laibull.rule_type=num;
                }
                else if(type==3){
                    switch(num){
                        case 1:
                            $scope.createInfo.laibull.is_cardfour=($scope.createInfo.laibull.is_cardfour+1)%2;
                            break;
                        case 2:
                            $scope.createInfo.laibull.is_cardfive=($scope.createInfo.laibull.is_cardfive+1)%2;
                            break;
                        case 3:
                            $scope.createInfo.laibull.is_straight=($scope.createInfo.laibull.is_straight+1)%2;
                            break;
                        case 4:
                            $scope.createInfo.laibull.is_flush=($scope.createInfo.laibull.is_flush+1)%2;
                            break;
                        case 5:
                            $scope.createInfo.laibull.is_calabash=($scope.createInfo.laibull.is_calabash+1)%2;
                            break;
                        case 6:
                            $scope.createInfo.laibull.is_cardbomb=($scope.createInfo.laibull.is_cardbomb+1)%2;
                            break;
                        case 7:
                            $scope.createInfo.laibull.is_sequence=($scope.createInfo.laibull.is_sequence+1)%2;
                            break;
                        case 8:
                            $scope.createInfo.laibull.is_cardtiny=($scope.createInfo.laibull.is_cardtiny+1)%2;
                            break;
                    }
                }
                else if(type==4){
                    $scope.createInfo.laibull.ticket_type=num;
                } else if (type == 5) {
                    $scope.createInfo.laibull.max_count_type=num;
                } else if(type==6){
                    $scope.createInfo.laibull.bet_type=num;
                }
            } else if($scope.createInfo.isShow==16){
                if(type==1){
                    $scope.createInfo.s13s.score_type=num;
                }
                else if(type==4){
                    $scope.createInfo.s13s.ticket_type=num;
                }
            }
        }
        $scope.createBullx=function(){
        if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=1;
        }
        $scope.createFlower=function(){
        if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=4;
            if($scope.createInfo.flower.ready_time == undefined){
                $scope.createInfo.flower.ready_time = '10';
                $scope.createInfo.flower.bet_time = '15';
            }
        }
        $scope.createSangong=function(){
        if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=5;
        }
        $scope.createErba=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=6;
        }
        $scope.createLandlord=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=7;
        }
        $scope.createMajiang=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=8;
        }
        $scope.createXiaxie=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=9;
        }
        $scope.createPaijiu=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=10;
        }
        $scope.createDxBull=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=12;
        }
        $scope.createDcx=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=13;
        }
        $scope.createLaiBull=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            document.getElementById("media").play();
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=14;
        }

        $scope.createS13s=function(){
          if(!userData.isGuideManager) {
        $scope.isShowAlert = true;
        $scope.alertText = "你将进入自己的公会";
        $scope.alertType = 32;
        return;}
            $(".createRoom .mainPart").css('height','');
            $(".createRoom .mainPart .blueBack").css('height','');
            $scope.createInfo.isShow=16;
        }

        $scope.selectBankerMode6 = function (type) {
            $scope.createInfo.bullx.banker1 = "unselected";
            $scope.createInfo.bullx.banker2 = "unselected";
            $scope.createInfo.bullx.banker3 = "unselected";
            $scope.createInfo.bullx.banker4 = "unselected";
            $scope.createInfo.bullx.banker5 = "unselected";
            $scope.createInfo.bullx['banker'+type] = "selected";
            $scope.createInfo.bullx.banker_mode = type;
        };

        $scope.selectBankerModeSangong = function (type) {
            $scope.createInfo.sangong.banker1 = "unselected";
            $scope.createInfo.sangong.banker2 = "unselected";
            $scope.createInfo.sangong.banker4 = "unselected";
            $scope.createInfo.sangong['banker'+type] = "selected";
            $scope.createInfo.sangong.banker_mode = type;
        };
        $scope.selectBankerModeErbagang = function (type) {
            if (type == 1) {
                $scope.createInfo.erbagang.banker1 = "selected";
                $scope.createInfo.erbagang.banker2 = "unselected";
            } else if (type == 2) {
                $scope.createInfo.erbagang.banker1 = "unselected";
                $scope.createInfo.erbagang.banker2 = "selected";
            }
            $scope.createInfo.erbagang.banker_mode = type;
        };

        $scope.selectBankerModePaijiu = function (type) {
            $scope.createInfo.paijiu.banker1 = "unselected";
            $scope.createInfo.paijiu.banker2 = "unselected";
            $scope.createInfo.paijiu['banker'+type] = "selected";
            $scope.createInfo.paijiu.banker_mode = type;
        };

        $scope.selectBankerModeLaibull = function (type) {
            $scope.createInfo.laibull.banker1 = "unselected";
            $scope.createInfo.laibull.banker2 = "unselected";
            $scope.createInfo.laibull['banker'+type] = "selected";
            $scope.createInfo.laibull.banker_mode = type;
        };

        $scope.createCommit = function () {
            if ($scope.userInfo.card!=0){
                if($scope.is_operation){
                    return 0;
                }

                $scope.waiting();

                switch($scope.createInfo.isShow){
                    case 1:
                        $scope.connectSocket("ws://tt.sjrcrld.cn:7451/gamedn", $scope.createInfo.isShow);
                        localStorage.bullx = JSON.stringify($scope.createInfo.bullx);
                        break;
                    case 4:
                        $scope.connectSocket("ws://tt.sjrcrld.cn:7451/gamezjh", $scope.createInfo.isShow);
                        localStorage.flower = JSON.stringify($scope.createInfo.flower);
                        break;
                    case 5:
                        $scope.connectSocket("ws://tt.sjrcrld.cn:7451/gamesg", $scope.createInfo.isShow);
                        localStorage.sangong = JSON.stringify($scope.createInfo.sangong);
                        break;
                    case 6:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gaeeebk", $scope.createInfo.isShow);
                        localStorage.erbagang = JSON.stringify($scope.createInfo.erbagang);
                        break;
                    case 7:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gameddz", $scope.createInfo.isShow);
                        localStorage.landlord = JSON.stringify($scope.createInfo.landlord);
                        break;
                    case 8:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gamemj", $scope.createInfo.isShow);
                        localStorage.majiang = JSON.stringify($scope.createInfo.majiang);
                        break;
                    case 9:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gamexx", $scope.createInfo.isShow);
                        localStorage.xiaxie = JSON.stringify($scope.createInfo.xiaxie);
                        break;
                    case 10:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gamepj", $scope.createInfo.isShow);
                        localStorage.paijiu = JSON.stringify($scope.createInfo.paijiu);
                        break;
                    case 12:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gamedxdn", $scope.createInfo.isShow);
                        localStorage.dxbull = JSON.stringify($scope.createInfo.dxbull);
                        break;
                    case 13:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gamedcx", $scope.createInfo.isShow);
                        localStorage.dcx = JSON.stringify($scope.createInfo.dcx);
                        break;
                    case 14:
                        $scope.connectSocket("ws://tt.sjrcrld.cn:7451/gamelzdn", $scope.createInfo.isShow);
                        localStorage.laibull = JSON.stringify($scope.createInfo.laibull);
                        break;
                    case 16:
                        $scope.connectSocket("ws://Websocket.fzrks.com:10016/gamesss", $scope.createInfo.isShow);
                        localStorage.s13s = JSON.stringify($scope.createInfo.s13s);
                        break;
                }
            } else {
                $scope.showAlert(1,"门票不足");
            }
        }
        $scope.cancelCreate=function(){
            $scope.createInfo.isShow=0;
            document.getElementById("close").play();
            $(".main").css({
                'overflow':'visible',
                'position': 'static',
            });
            $("body").scrollTop($scope.scrolltop);
        };
     $scope.isShowShop=false
	$scope.showShop=function(){	
		return 0;	
		//alert('hello');
		$scope.select=1;
		$scope.ticket_count=20;
		
		$scope.isShowShop=true;
		setTimeout(function(){$(".shop .shopBody").animate({"height":$scope.width*1.541+"px"});},0);
	}
	$scope.hideShop=function(){		
		$(".shop .shopBody").animate({"height":0},function(){
			$scope.isShowShop=false;
			$scope.$apply();
		})		
	}		
	$scope.select=1;
	$scope.ticket_count=20;
	$scope.selectCard=function(num,count){
		$scope.select=num;
		$scope.ticket_count=count;
	};
	$scope.isShowShopLoading=false;
	$scope.gotoUrl=function(){
		$scope.showGotoMain=1;
	};
	$scope.hideGotoUrl=function(){
		$scope.showGotoMain=0;
	};
	$scope.gotoCopyUrl=function(){
		if($scope.inputUrl!="") {
			var str = $scope.inputUrl;
			var i = str.indexOf("http");
			if(i != -1) {
				str = str.substring(i);
			}
			window.location.href=str;
		}
	};

    $scope.showGuides = 0;
    $scope.openShowGuides=function() {
        $scope.showGuides = 1;
    };  
    $scope.closeShowGuides=function() {
        $scope.showGuides = 0;
    };
    $scope.gotoGuide=function(manager_id) {
      muserData.accountId=manager_id;
      $scope.showGuides = 0;
            var baseUrl="/";
            var url=baseUrl+"index.php/portal/index/get_manager";
            ajax({url:url,
                data:{"account_id":userData.accountId, "maccount_id":manager_id},
                success:function(content){
                    console.log("content: ", content);
                }
            });
        var url=baseUrl+"5e1e5cb1d3841476ceb279da1db2e905/6IOh6Iux6ZuE/ouIvv0wtqOBjwifICXcC4hk6sx1w/url/index";
        window.location.href = url;
    };

    $scope.toGameScore=function() {
        var baseUrl="/";
        var url=baseUrl+"index.php/portal/home/gerenzxkafangchaxun";
        window.location.href = url;
    };
      
        $scope.Wpay=function() {
        var baseUrl="/";
        var url=baseUrl+"index.php/portal/home/pay";
        window.location.href = url;
    };


    $scope.showSendCards = 0;
    $scope.sendCardsResult = false;
    $scope.openShowSendCards=function() {
        $scope.showSendCards = 1;
    	$scope.sendCardsResult = false;
    };

    $scope.closeShowSendCards=function() {
        $scope.showSendCards = 0;
    	$scope.sendCardsResult = false;
    };
    $scope.searchSendCards=function(elemName) {
        var baseUrl="/";
        var url=baseUrl+"index.php/portal/index/search_account";
        var sendCardsAccountId = document.getElementById(elemName).value;
        ajax({url:url,
            data:{"account_id":sendCardsAccountId},
            success:function(content){
                console.log("content: ", content);
                var data = JSON.parse(content);
		$scope.sendCardsResult = data;
                $scope.$apply();
		if(document.getElementById("sendCardsNote")) {
			if(data["has"]) {
				document.getElementById("sendCardsNote").style.display="none";
			}
			else {
				document.getElementById("sendCardsNote").style.display="block";
				document.getElementById("sendCardsNote").innerText="账号不存在";
			}
		}
		if(document.getElementById("addMemberNote")) {
			if(data["has"]) {
				document.getElementById("addMemberNote").style.display="none";
			}
			else {
				document.getElementById("addMemberNote").style.display="block";
				document.getElementById("addMemberNote").innerText="账号不存在";
			}
		}
            }
        });
    };
    $scope.sendCardsFunc=function() {
        if($scope.sendCardsResult==false || $scope.sendCardsResult['has']==false) {
		document.getElementById("sendCardsNote").style.display="block";
		document.getElementById("sendCardsNote").innerText="请先搜索用户";
		return;
	}
        var baseUrl="/";
        var url=baseUrl+"f/send_cards";
        var sendCardsNum = document.getElementById("sendCardsNum").value;
	sendCardsNum = parseInt(sendCardsNum);
	if(!Number.isInteger(sendCardsNum) || sendCardsNum <= 0 || sendCardsNum > $scope.userInfo.roomCard) {
		document.getElementById("sendCardsNote").style.display="block";
		document.getElementById("sendCardsNote").innerText="输入正确房卡数量";
		return;
	}
	document.getElementById("sendCardsNote").style.display="none";
        var sendCardsAccountId = $scope.sendCardsResult["account_id"];
        ajax({url:url,
            data:{"account_id":$scope.userInfo.id, "num":sendCardsNum, "add_account_id":sendCardsAccountId},
            success:function(content){
                console.log("content: ", content);
                var data = JSON.parse(content);
		if(data["bl"]) {
			$scope.userInfo.roomCard = $scope.userInfo.roomCard - sendCardsNum;
			appData.roomCard = appData.roomCard - sendCardsNum;
			showPointReulst(3);
		}
		else {
			showPointReulst(4);
		}
                $scope.$apply();
            }
        });
    }

    $scope.showAddMember = 0;
    $scope.openShowAddMember=function() {
        $scope.showAddMember = 1;
    	$scope.sendCardsResult = false;
    };  
    $scope.closeShowAddMember=function() {
        $scope.showAddMember = 0;
    	$scope.sendCardsResult = false;
    };
    $scope.addMemberFunc=function() {
        if($scope.sendCardsResult==false || $scope.sendCardsResult['has']==false) {
		document.getElementById("addMemberNote").style.display="block";
		document.getElementById("addMemberNote").innerText="请先搜索用户";
		return;
	}
        var baseUrl="/";
        var url=baseUrl+"index.php/portal/index/add_member";
        var sendCardsAccountId = $scope.sendCardsResult["account_id"];
        var addMemberName = document.getElementById("addMemberName").value;
        ajax({url:url,
            data:{"account_id":$scope.userInfo.id, "add_account_id":sendCardsAccountId, "name":addMemberName},
            success:function(content){
                console.log("content: ", content);
                var data = JSON.parse(content);
		if(data["bl"]) {
        		$scope.showAddMember = 0;
    			$scope.sendCardsResult = false;
			showPointReulst(3);
		}
		else {
			document.getElementById("addMemberNote").style.display="block";
			document.getElementById("addMemberNote").innerText=data['msg'];
			showPointReulst(4);
		}
                $scope.$apply();
            }
        });
    }

    //退出公会
    $scope.quitGuideFunc=function(manager_id) {
        var baseUrl="/";
        var url=baseUrl+"index.php/portal/index/quit_guide";
        ajax({url:url,
            data:{"manager_id":manager_id, "account_id":userData.accountId},
            success:function(content){
                console.log("content: ", content);
                var data = JSON.parse(content);
		if (data["bl"]) {
			showPointReulst(3);
        		$scope.showGuides = 0;
			if(manager_id == muserData["accountId"]) {
        			setTimeout(function(){
        				window.location.href="/5e1e5cb1d3841476ceb279da1db2e905/6IOh6Iux6ZuE/ouIvv0wtqOBjwifICXcC4hk6sx1w/url/index";
				},1000)
			}
			else {
				changeBottomSelectFunc(1);
			}
		}
		else {
			showPointReulst(4);
			console.log(data["msg"]);
		}
            }
        });
    };



    $scope.allRoom=JSON.parse("[]");
    $scope.allGuides=JSON.parse("[]");
    $scope.timer = null;
    function changeBottomSelectFunc(index) {
        $scope.bottomSelectId=index;
        if(index == 1) {
            if ($scope.timer != null) {
                return;
            }
                var startIndex = 0;
                $scope.timer = setInterval(function() {
                var elem = document.getElementById("Rotation360");
                    elem.style.transform = "rotate("+ (startIndex) +"deg)";
                    startIndex += 1.2;
                }, 0);
                setTimeout(function() {
                clearInterval($scope.timer);
                $scope.timer = null;
                }, 1200);
            var baseUrl="/";
            var url=baseUrl+"index.php/portal/index/getAllRoom";
            ajax({url:url,
                data:{"account_id":userData.accountId, "maccount_id":muserData.accountId},
                success:function(content){
                    //console.log("content: ", content);
                    var data = JSON.parse(content);
                    $scope.allRoom = data["rooms"];
                    $scope.allGuides = data["allGuides"];
                    $scope.guideName = data["guide_name"];
                    $scope.$apply();
                }
            });
        }
    };
    setTimeout(function() {
        if(userData.accountId != muserData.accountId) {
            changeBottomSelectFunc(1);
        }
    }, 100);
    $scope.changeBottomSelect=function(index){
        document.getElementById("media").play();
        $scope.isShowAlert=false;
        changeBottomSelectFunc(index);
        $scope.showAlert(1,"温馨提示：平台已启用浏览器秘钥登陆功能，用户可以到个人中心，秘钥设置，复制保存当前ID秘钥，当连接被封的情况下，可以使用浏览器打开输入当前秘钥进行游戏登陆！");
    };
    $scope.gotoRoom=function(fun_name, room_number) {
        if(!userData.isMember) {
            $scope.isShowAlert = true;
            $scope.alertText = "未加入公会";
            $scope.alertType = 33;
            return;
        }
        url = "/" + fun_name + "/" + room_number,
        window.location.href = url;
    };

})
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
    function fix_font() {
        var u = navigator.userAgent, app = navigator.appVersion;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //g
        var isIOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid) {
            //这个是安卓操作系统
            console.log('an');
        }
        if (isIOS) {
            //这个是ios操作系统
            console.log('ios');
            $('.selectPart').addClass('font_big');
        }
    }
    fix_font()
</script>  
<style>
    .f-cb:after{
        display:block;
        visibility:hidden;
        clear:both;
        height:0;
        overflow:hidden;
        content:'.';
    }
    *{padding: 0;margin:0;}a {text-decoration: none;color: #fff;}ul {list-style: none;}input{border: none;outline:none}body{font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', 微软雅黑, Arial, sans-serif;cursor: default;}
    img{border: none;}
    .main{width: 100%;position:relative;margin:0 auto;}
    .roomCard{position: absolute;top:0;right:0;width: 26%;}
    .roomCard .img1{position: relative;float: left;z-index: 50;}
    .roomCard .img2{position: absolute;top:0;z-index: 51}
    .roomCard .num{position: relative;background: #273151;color:#fff;font-size: 3.5vw;border-radius:4vw;padding: 1vw 4vw;float: left;margin-left: -3vw;z-index: 49;}

    .user{position: absolute;top:0;left:0;width: 50%;}
    .user .avatar{border: 1px solid #b495d8;border-radius:5px;float: left;position: relative;z-index: 50;}
    .user .name{color: #fff;font-size: 3.5vw;border-radius:3.5vw;padding: 1vw 4vw;background:#273151;margin-left: -3vw;float: left;position: relative;z-index: 49;}

    .createRoom{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 108;}
    .createRoom .createRoomBack{width: 100%;height:100%;background: #000;opacity:0.6;}
    /* top:38%;left:50%;margin-top:-24vh;margin-left: -22.5vh; */
    .createRoom .mainPart{width: 80%; position: absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}
    .createRoom .mainPart .createB{position: absolute;width: 100%;height:100%;top:0%;left:0%;background: #634fa6;border: 1px solid #a684f2;border-radius:10px; }
    .createRoom .mainPart .createTitle{position:relative;height:0.7rem;text-align: center;margin-bottom: 0.3rem;}
    .createRoom .mainPart .createTitle img{position:relative;height:0.5rem;margin-top: 0.3rem;}
    .createRoom .mainPart .cancelCreate{    width: 0.8rem;    height: 0.8rem;   top: -0.2rem;    right: -0.2rem;    position: absolute;}
    .createRoom .mainPart .createCommit{position: relative;margin-top: 0.37rem;bottom: 0.22rem;line-height: 0.9rem;height:0.86rem;font-size: 14px;width: 2.7rem;left:50%;margin-left:-1.35rem;text-align: center;background:url("/files/images/common/button2.png");background-size:100%;color: #fff;}
    .createRoom .mainPart .blueBack{ overflow-x: hidden;width: 94%;background:#111431;border-radius:4px;margin:0 auto;position: relative;padding: 0 0 0.15vh 0;}
    .createRoom .mainPart .blueBack .selectPart{width:100%;margin-top:0.05rem;line-height:0.6rem;font-size:14px;position: relative;color:#111431;background: #bbbff1;
        background-size: 100% 300%;border-radius:0px;font-family:simHei; padding: 0.1rem 0 0.1rem 0;}
    .createRoom .mainPart .blueBack .selectPart .selectTitle{float: left;width:20%;text-align: right;color:#000;font-weight: bolder;font-size:14px !important;}
    .createRoom .mainPart .blueBack .selectPart .selectList{float: right; width: 80%}
    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem{float: left;position:relative;margin-left:0.25rem !important; }
    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectBox{float: left;height:0.3rem;width:0.31rem;border:1px solid #1d1045;border-radius:2px;background:#78899d;margin-top:0.15rem;position: relative; }
    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem img{position: absolute;width: 0.45rem;height:0.45rem;left: 0;top:0;}
    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem .selectText{float: left;margin-left: 0.1rem;}

    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem .text{float: left;margin-left: 0.1rem;}
    .createRoom .mainPart .blueBack .selectPart .selectList .selectItem select
    {
        appearance:none;
        -moz-appearance:none;
        -webkit-appearance:none;
        text-indent: 0.22rem;
        position: relative;;
        width: 1.2rem;
        height:0.54rem;
        left: 0.1rem;
        top:0.1rem;
        background-size: 100% 100%;
        background-image: url("/files/images/common/btnselect.png");
    }
    .zjhTitle{text-align:center; width: 94% !important;margin-left: 3%;}
    .zjhTitle p {position:relative;}
    .zjhTitle p:nth-child(2){padding-top:0.1rem}
    .bankerSelected{box-sizing: border-box; position: relative; float:left;width: 1.2rem;height: 1rem;border-style: solid;border-width: 0;color: #653604;text-align: center;font-size: 1.8vh;overflow: hidden;    border-right: solid 3px #634fa6;}
    .bankerSelected .img{position: absolute;top: 0;left: 0;width: 100%;height:100%;border-style: solid;border-width: 0.5px;border-color: #392c62;}
    .bankerUnSelected{box-sizing: border-box; position: relative;float:left;width: 1.2rem;height: 1rem;border-style: solid;border-width: 0;color: #000;text-align: center;font-size: 1.8vh;overflow: hidden;    border-right: solid 3px #634fa6;}
    .bankerUnSelected .img{position: absolute;top: 0;left: 0;width: 100%;height:1.2rem;border-style: solid;border-width: 0.5px;border-color: #e8c007;}
    .bankerSelected p:nth-child(2),.bankerSelected p:nth-child(3),.bankerUnSelected p:nth-child(2),.bankerUnSelected p:nth-child(3){
        font-size:12px !important;
    }
    .entrance{height:230vw;z-index: 1111}
  .entrance .img1{top:25vw;left:8.5vw;background: url({{img.bull}})}
    .entrance .img2{top:25vw;right:8.5vw;background: url({{img.laibull}})}
    .entrance .img3{top:70vw;left:8.5vw;background: url({{img.sangong}})}
    .entrance .img4{top:70vw;right:8.5vw;background: url({{img.flower}})}
    .entrance .img5{top:115vw;left:8.5vw;background: url({{img.landlord}})}
    .entrance .img6{top:115vw;right:8.5vw;background: url({{img.majiang}})}
    .entrance .img7{top:160vw;left:8.5vw;background: url({{img.paijiu}})}
    .entrance .img8{top:160vw;right:8.5vw;background: url({{img.erbagang}})}
    .entrance .img9{top:205vw;left:8.5vw;background: url({{img.yxx}})}
    /*.entrance .img10{top:205vw;right:8.5vw;background: url({{img.dcx}})}
    .entrance .img11{top:250vw;left:8.5vw;background: url({{img.dxbull}})}
    .entrance .img12{top:250vw;right:8.5vw;background: url({{img.s13s}})}*/
    .entrance .img{position: absolute;width: 37.2vw;height:41.2vw;background-size:37.2vw 41.2vw;border-radius:2vw;}


    /*alert*/
    .alert .mainPart .backImg{
        background: url(//files/images/hall/navli-bj.png) no-repeat center;
        background-size: 100% 300%;
        border: 0.1vh solid #3e3e3e;
    }
    .alert .mainPart .backImg .blackImg{
        background: #2f2f2f;
        border: 0.1vh solid #d4aa00;
    }
    .copy-tip {
        background: rgba(0, 0, 0, .6);
        color: #fff;
        position: fixed;
        bottom: 16.6rem;
        font-size: .9rem;
        border-radius: 5px;
        padding: 10px;
        left: 50%;
        transform: translate(-50%, 0);
        z-index: 89;
    }

    #room_str {
        position: fixed;
        top: -300px;
    }

    .zhuonuo {
        position: fixed;
        right: 4.4rem;
        width: 2.6rem;
        z-index: 1;
        top: 1.7rem;
    }

    #dialog {
        position: fixed;
        width: 300px;
        height: 150px;
        padding: 10px;
        box-sizing: border-box;
        background: #fff;
        font-size: 16px;
        left: 50%;
        top: 50%;
        margin-left: -150px;
        margin-top: -75px;
        border-radius: 10px;
        z-index: 99;
    }

    #dialog .main {
        word-wrap: break-word;
        word-break: normal;
    }

    #dialog .other {
        text-align: center;
        margin-top: 38px
    }

    #dialog img {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 35px;
    }


  
  #app-game #tables-guides .box {
    position: absolute;
    top: 12vw;
    left: 5vw;
    width: 90%;
    border-radius: 1.5vw;
    background: #fff;
}

#app-game #tables-guides .box .title {
    text-align: center;
    line-height: 16vw;
    font-size: 4.5vw;
}

#app-game #tables-guides .box .groupList {
    width: 80vw;
    margin: 0 auto;
    border-radius: 1.5vw;
    max-height: 90vw;
    overflow: scroll;
}

#app-game #tables-guides .box .groupList .groupItem {
    height: 14vw;
    margin-top: .5vw;
    background: #f1f1f1;
    font-size: 4vw;
    color: #177ad7;
}

#app-game #tables-guides .box .groupList .groupItem .name {
    float: left;
    line-height: 14vw;
    margin-left: 3vw;
}
    /*yh*/
    .createRoom .mainPart.yh {
        padding: 3vw;
        border: 0.5vw solid #9d9d9e;
        -webkit-border-radius: 2vw;
        border-radius: 2vw;
        background-color: rgba(255,255,255,.2);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        -webkit-transform: translate(-50%, -50%) !important;
    }
    .createRoom .mainPart.yh .createB {
        width: 96%;
        height: 96%;
        top: 2%;
        left: 2%;
        position: absolute;
        background-color: #d1e2f6;
        border-radius: .0768rem;
    }
    .createRoom .mainPart.yh .blueBack {
        width: 95%;
        border-radius: 4px;
        margin: 0 auto;
        position: relative;
        padding: 0.5vh 0 0.8vh 0;
        background:none;
        border: 0 solid #efc92d;
    }
    .createRoom .mainPart.yh .blueBack .selectPart {
        width: 100%;
        margin-top: 1vh;
        line-height: 4.5vh;
        font-size: 0.24rem;
        position: relative;
        color: #374994;
        background-color: rgb(225,249,255);
        background-size: 100% 300%;
        border-radius: 10px;
        /* font-family: simHei; */
        padding: 0.5vh 0;
        box-shadow: 0 0.5vw 0.5vw #abc8ed;
        background-image:none;
    }
    .createRoom .mainPart.yh .blueBack .selectPart.font_big{
        font-size: 0.34rem;
    }
    .createRoom .mainPart.yh .bankerUnSelected,.createRoom .mainPart.yh .bankerSelected{
        color:#fde449;
    }
    .createRoom .mainPart.yh .bankerUnSelected img,.createRoom .mainPart.yh .bankerSelected img{
        border:none;
    }
    .createRoom .mainPart.yh .blueBack .selectPart .selectList .selectItem .selectBox {
        border: 1px solid #4c98ff;
        background: #e1f9ff;
    }
    .createRoom .mainPart.yh .blueBack .selectPart .selectTitle{
        color: #374994;
    }
    .createRoom .mainPart.yh .createTitle{
        display:none;
    }
    .createRoom .mainPart .blueBack .selectPart{
        font-size: 0.28rem;
    }
    .createRoom .mainPart .blueBack .selectPart.font_big{
        font-size: 0.34rem;
    }

    .createRoom .mainPart.yh .createB{
        display:none;
    }
    .createRoom .mainPart.yh .createB.yh{
        display:block !important;
        width: 96%;
        height: 96%;
        top: 2%;
        left: 2%;
        position: absolute;
        background-color: #d1e2f6;
        border-radius: .0768rem;
        border:none;
    }
    .createRoom .mainPart.yh .createB.yh:before {
        content: '';
        position: absolute;
        top: 2%;
        left: 1.5%;
        width: 96%;
        height: 96%;
        border: .0144rem solid #95b8e1;
        -webkit-border-radius: .024rem;
        -moz-border-radius: .024rem;
        border-radius: .024rem;
        z-index: 0;
    }
    .createRoom .mainPart.yh .mask-icon {
        position: absolute;
        width: 0.6rem;
        height: 0.6rem;
    }
    .createRoom .mainPart.yh .mask-icon.mask-top {
        top: 2%;
        left: 2%;
        background: url(/files/images/index/mask-top.jpg) no-repeat;
        background-size: 100% 100%;
    }
    .createRoom .mainPart.yh .mask-icon.mask-right {
        top: 2%;
        right: 2%;
        background: url(/files/images/index/mask-right.jpg) no-repeat;
        background-size: 100% 100%;
    }
    .createRoom .mainPart.yh .mask-icon.mask-bottom {
        bottom: 1.5%;
        right: 2%;
        background: url(/files/images/index/mask-bottom.jpg) no-repeat;
        background-size: 100% 100%;
    }
    .createRoom .mainPart.yh .mask-icon.mask-left {
        bottom: 1.5%;
        left: 2%;
        background: url(/files/images/index/mask-left.jpg) no-repeat;
        background-size: 100% 100%;
    }
    .createRoom .mainPart .createCommit{
        margin-top: 20px;
        background: url(/files/images/common/button2.png);
        background-size: 100%;
        text-align: center;
        height:7vh;
        background-repeat: no-repeat;
    }
    .phone-number-box {
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 100;
        background-color: rgba(0, 0, 0, .8);
    }

    .phone-number-box input {
        border: none;
        outline: none;
        background: none;
    }

    .phone-number-box .phone-number {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 80%;
        background: rgba(255, 255, 255, .2) url(/files/images/newgame/phone-number-bg1.png) repeat-x left bottom;
        background-size: auto .5520rem;
        -webkit-border-radius: .0720rem;
        -moz-border-radius: .0720rem;
        border-radius: .0720rem;
    }

    .phone-number-box .phone-number-content {
        height: 1.5360rem;
        margin: .0720rem;
        background-color: #fff2d8;
        -webkit-border-radius: .0720rem;
        -moz-border-radius: .0720rem;
        border-radius: .0720rem;
    }

    .phone-number-box .phone-number .tips-text {
        padding: 0.5rem 0 0.5rem 0;
        color: #844830;
        text-align: center;
        font-size: 1rem;
    }

    .phone-number-box .phone, .phone-number-box .phone-code {
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 80%;
        height: 2rem;
    }

    .phone-number-box .phone {
        top: 2.5rem;
    }

    .phone-number-box .phone-code {
        top: 1.0560rem;
    }

    .phone-number-box .phone-code input, .phone-number-box .phone input {
        position: absolute;
        width: 100%;
        height: 2rem;
        background: #ebc1a8;
        padding: 0 .1440rem;
        -webkit-border-radius: .2rem;
        -moz-border-radius: .2rem;
        border-radius: .2rem;
        color: #fff;
        font-size: 0.8rem;
    }

    input::-webkit-input-placeholder {
        color: #fff;
        opacity: 1;
    }

    .phone-number-box .phone-code input {
        padding-right: 1.2000rem;
    }

    .phone-number-box .phone-btn2, .phone-number-box .phone-btn {
        position: absolute;
        top: 0;
        right: 0;
        width: .9120rem;
        height: .3840rem;
        line-height: .3840rem;
        vertical-align: middle;
        text-align: center;
        color: #fff;
        font-size: .132rem;
    }

    .phone-number-box .phone-btn {
        background: url(/files/images/newgame/phone-btn.png) no-repeat;
        background-size: 100% 100%;
    }

    .phone-number-box .phone-btn2 {
        color: #dcdcdc;
        background: url(/files/images/newgame/phone-btn1.png) no-repeat;
        background-size: 100% 100%;
    }

    .phone-number-box .phone-sure {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0.5rem;
        margin: 0 auto;
        width: 32%;
        height: 2rem;
        background: url(/files/images/newgame/btn.png) no-repeat;
        background-size: 100% 100%;
        font-family: 黑体;
        color: #feead2;
        font-size: 0.8rem;
        border-radius: .5rem;
    }

    .phone-number-box .close-window {
        position: absolute;
        top: -0.5rem;
        right: -0.5rem;
        width: 2rem;
        height: 2rem;
        background: url(/files/images/newgame/game-close.png) no-repeat 0 0 / 100% 100%;
    }
    .notice{display:none;}
    .flower_tip{
        color: #fff;
    }
</style>
<style>
.master {
    position:fixed; z-index:98; top:0px; left:0px; width:100%; height:100%; background-color:rgba(0, 0, 0, 0.5);
}
.mycode{
    width: 90vw; height: 280px; position: fixed; top: 50%; left: 50%; margin-top: -140px; margin-left: -45vw;
    z-index: 99; background: #fff; border-radius: 3px;
}
.myclose{
    font-size:30px; color:#ccc; height:25px; line-height:25px;float:right; padding:0vh 2vw;
}
.codetitle{
    width:90vw;float:left; height:35px; line-height:35px; font-size:18px;color:#333;text-align:center; margin-top:0vh;
}
.codetxt{
    width:70vw; float:left; height:46px; line-height:46px; text-align:center;border:none;
    border:#ccc solid 1px; margin-left:10vw; margin-top:40px; font-size:18px;
}
.codebtn{
    background-color: #2ec4fc;width:70vw;margin-left:10vw; margin-top:40px;height:46px; line-height:46px;text-align:center;border:none;
    border-radius:1vw; color:#fff; font-size:18px;
}

.my-account{
    width: 90vw; height: 350px; position: fixed; top: 50%; left: 50%; margin-top: -175px; margin-left: -45vw;
    z-index: 99; background: #fff; border-radius: 3px;
}
.accountbody{
    width:80%; float:left; height:170px; margin-top:20px; margin-left:10%; 
}
.accountbtn{
    background-color: #2ec4fc;width:70vw;margin-left:10vw; margin-top:20px;height:46px; line-height:46px;text-align:center;border:none;
    border-radius:1vw; color:#fff; font-size:18px;
}
.cB{color:#6e80a6;}
.c6{color:#666;}
.fs16{font-size:16px;}
.w{width:100%;}
.hidd{overflow:hidden}
.fl{float:left;}
.cora{color:orange}


*{padding: 0;margin:0;}a {text-decoration: none;color: #fff;}ul {list-style: none;}input{border: none;outline:none}body{font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', 微软雅黑, Arial, sans-serif;cursor: default;}
img{border: none;}
.main{width: 100%;position:relative;margin:0 auto;}
.roomCard{position: absolute;top:0;right:0;width: 26%;}
.roomCard .img1{position: relative;float: left;z-index: 50;}
.roomCard .img2{position: absolute;top:0;z-index: 51}
.roomCard .num{position: relative;background: #273151;color:#fff;font-size: 3.5vw;border-radius:4vw;padding: 1vw 4vw;float: left;margin-left: -3vw;z-index: 49;}

.recharge{position: absolute;top:5vw;right:30%;width: 22vw;height: 8vw;z-index: 51;}

.user{position: absolute;top:0;left:0;width: 50%;}
.user .avatar{border: 1px solid #b495d8;border-radius:5px;float: left;position: relative;z-index: 50;}
.user .name{color: #fff;font-size: 3.5vw;border-radius:3.5vw;padding: 1vw 4vw;background:#273151;margin-left: -3vw;float: left;position: relative;z-index: 49;}

.shop{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 112;}	
.shop .shopBack{width: 100%;height:100%;background: #000;opacity:0.6;}	
.shop .shopBody{width: 100%;position: absolute;bottom: 0;left:0;height: 0; }	
.shop .shopBody .shopReturn{width: 15%;float: left;margin-top:6.3%;margin-left:5%;position: relative;}	
.shop .shopBody .shopBuy{width: 34%;float: right;margin-top:8.3%;margin-right:33%;position: relative;}	
.shop .shopBody .shopGoods{width: 34%;position: relative;padding: 3px;}	
.shop .shopBody .shopGoods img{width: 100%;border-radius: 10px;}	
.shop .shopBody .shopGoods .title{position: absolute;top: 3;font-size: 14px;left: 0;width: 100%;text-align: center;color: #fff;}	
.shop .shopBody .shopGoods .price{position: absolute;bottom: 3;font-size: 20px;left: 0;width: 100%;text-align: center;color: #f1c818;line-height: 36px;}
.shop .shopBody .goodsBack{border:3px solid #fada23;padding: 0;border-radius: 14px;}
.shop .shopBody .goodsBack .title{top: 0;}	
.shop .shopBody .goodsBack .price{bottom: 0;}
.shop .shopBody .goodsBack .background{position: absolute;top:0;left: 0;width:100%;height:100%;background:#fada23;opacity:.15; }
.shop .shopBody .shopGoods1{margin-top:39%;margin-left: 11.2%;float: left;}	
.shop .shopBody .shopGoods2{margin-top:39%;margin-right: 11.2%;float: right;}	
.shop .shopBody .shopGoods3{margin-top:7.2%;margin-left: 11.2%;float: left;}	
.shop .shopBody .shopGoods4{margin-top:7.2%;margin-right: 11.2%;float: right;}
.shop .shopLoading{width: 100%;position: absolute;left: 0;top:0;height: 100%;z-index: 9;}


.alert{position: fixed;width: 100%;height:100%;top:0;left:0;z-index: 111;color: #fff;font-family: simHei;}
.alert .alertBack{width: 100%;height:100%;background: #000;opacity:0.8;position: absolute;}
.alert .mainPart{position: relative;top: 45%;left: 50%;margin-top:-19vh ;margin-left:-22.5vh ;width: 45vh;height:38vh; }
/*.alert .mainPart .backImg{position: relative;width:100%;height:100%;border-radius: 10px;}*/
.alert .mainPart .alertText{position: absolute;width:100%;line-height: 3.5vh;font-size: 2.5vh;width: 36vh;left:50%;margin-left:-18vh;top: 12.6vh;text-align: center;}
.alert .mainPart .buttonMiddle{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;left:50%;margin-left:-9vh;bottom:2.2vh;text-align: center;background:url("/files/d_2/images/game/button2.png");background-size:100%;}
.alert .mainPart .buttonLeft{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;left:3vh;bottom:2.2vh;text-align: center;background:url("/files/d_2/images/game/button1.png");background-size:100%;}
.alert .mainPart .buttonRight{position: absolute;width:100%;line-height: 6vh;height: 5.6vh;font-size: 2.5vh;width: 18vh;right:3vh;bottom:2.2vh;text-align: center;background:url("/files/d_2/images/game/button2.png");background-size:100%;}
.alert .mainPart .backImg{position: absolute;width:100%;height:100%;border-radius: 1.5vh;border:0.1vh solid #de51f1;top:0;left:0;background: #6d4ba8;}
.alert .mainPart .backImg .blackImg{position: absolute;width:40.6vh;height:25vh;border-radius: 1.5vh;border:0.1vh solid #ae71cb;top:2.2vh;left:2.2vh;background: #190d2d;}

.createRoom .mainPart .blueBack .selectPart .selectList .selectItem .text{float: left;margin-left: 0.5vh;}
.createRoom .mainPart .blueBack .selectPart .selectList .selectItem select
{
    appearance:none;
    -moz-appearance:none;
    -webkit-appearance:none;
    text-indent: 1.5vh;
    position: relative;;
    width: 8vh;
    height:3.6vh;
    left: 0.3vh;
    top:0.5vh;
    background-size: 100% 100%;
    background-image: url("/files/images/common/btnselect.png");
}


/* 血拼金花新增提示框样式 */
.alertTip{position: fixed;width: 40%;height:20%;top:40%;left:30%;z-index: 111;}
.alertTip .alertTipBG{width: 100%;height:100%;background: #000;opacity:0.5;position: absolute;border-radius: 2vh}
.alertTip img{position: absolute; margin-left: 15%;}
.alertTip .alertTipText{position: absolute;bottom: 2vh;width: 100%; text-align: center;color: #fff;font-family: simHei;}

#app-main .delete{position: fixed;top:0;left:0;width:100%;height: 100%;z-index: 16;}

#app-main .delete .box{position: absolute;top:25vw;left:5vw;width:90%;height: 78vw;border-radius:1.5vw;background: #fff;}
#app-main .delete .box .title{text-align: center;line-height: 16vw;font-size: 4.5vw;}
#app-main .delete .box .info{line-height: 10vw;font-size: 4vw;width: 70vw;margin-left: 10vw;margin-top: 4vw;}
#app-main .delete .box .info img{height: 10vw;width:10vw;float: left;}
#app-main .delete .box .info .name{float: left;margin-left: 3vw}
#app-main .delete .box input{margin-left: 10vw;width: 66vw;background: #f0f0f2;border-radius:1.5vw;height: 11vw;margin-top:5vw;padding: 0 2vw;font-size: 4vw;}
#app-main .delete .box .button{margin-left: 25vw;width: 40vw;background: #ff5555;color: #fff;border-radius:1.5vw;height: 11vw;margin-top:10vw;text-align: center;line-height: 11vw;font-size: 3.6vw;}
#app-person .delete .box .note{position: absolute;width: 70vw;left:10vw;color: #ff5555;font-size:3vw;}


#app-game #tables-guides .box {
    position: absolute;
    top: 12vw;
    left: 5vw;
    width: 90%;
    border-radius: 1.5vw;
    background: #fff;
}

#app-game #tables-guides .box .title {
    text-align: center;
    line-height: 16vw;
    font-size: 4.5vw;
}

#app-game #tables-guides .box .groupList {
    width: 80vw;
    margin: 0 auto;
    border-radius: 1.5vw;
    max-height: 90vw;
    overflow: scroll;
}

#app-game #tables-guides .box .groupList .groupItem {
    height: 14vw;
    margin-top: .5vw;
    background: #f1f1f1;
    font-size: 4vw;
    color: #177ad7;
}

#app-game #tables-guides .box .groupList .groupItem .name {
    float: left;
    line-height: 14vw;
    margin-left: 3vw;
}

#tables-sendcards .box {
    position: absolute;
    top: 25vw;
    left: 5vw;
    width: 90%;
    height: 78vw;
    border-radius: 1.5vw;
    background: #fff;
}

#tables-sendcards .box .title {
    text-align: center;
    line-height: 16vw;
    font-size: 4.5vw;
}

#tables-sendcards .box .note {
    position: absolute;
    width: 70vw;
    left: 10vw;
    color: #ff5555;
    font-size: 3vw;
}

#tables-sendcards .box .info {
    line-height: 10vw;
    font-size: 4vw;
    width: 70vw;
    margin-left: 10vw;
    margin-top: 4vw;
}

#tables-sendcards .box .button {
    margin-left: 25vw;
    width: 40vw;
    background: #ff5555;
    color: #fff;
    border-radius: 1.5vw;
    height: 11vw;
    margin-top: 10vw;
    text-align: center;
    line-height: 11vw;
    font-size: 3.6vw;
}

#tables-sendcards .box input {
    margin-left: 10vw;
    width: 66vw;
    background: #f0f0f2;
    border-radius: 1.5vw;
    height: 11vw;
    margin-top: 5vw;
    padding: 0 2vw;
    font-size: 4vw;
}

#tables-sendcards .box .info .name {
    float: left;
    margin-left: 3vw;
}

#tables-addmember .box {
    position: absolute;
    top: 25vw;
    left: 5vw;
    width: 90%;
    height: 78vw;
    border-radius: 1.5vw;
    background: #fff;
}

#tables-addmember .box .title {
    text-align: center;
    line-height: 16vw;
    font-size: 4.5vw;
}

#tables-addmember .box input {
    margin-left: 10vw;
    width: 66vw;
    background: #f0f0f2;
    border-radius: 1.5vw;
    height: 11vw;
    margin-top: 5vw;
    padding: 0 2vw;
    font-size: 4vw;
}

#tables-addmember .box .note {
    position: absolute;
    width: 70vw;
    left: 10vw;
    color: #ff5555;
    font-size: 3vw;
}

#tables-addmember .box .info {
    line-height: 10vw;
    font-size: 4vw;
    width: 70vw;
    margin-left: 10vw;
    margin-top: 4vw;
}

#tables-addmember .box .info .name {
    float: left;
    margin-left: 3vw;
}

#tables-addmember .box .button {
    margin-left: 25vw;
    width: 40vw;
    background: #ff5555;
    color: #fff;
    border-radius: 1.5vw;
    height: 11vw;
    margin-top: 10vw;
    text-align: center;
    line-height: 11vw;
    font-size: 3.6vw;
}



</style>
<body ng-controller="myCtrl" style="background: #000;" >
<div id="dialog" style="display:none">
    <img src="/files/images/common/quit.png" onclick="fuzhiMain.closeDialog()">
    <p id="main" class="main"></p>
    <p class="other">
        请手动复制
    </p>
</div>

<span class="copy-tip" id="tips" style="display:none">已复制到剪贴板</span>

<textarea id="room_str" readonly="readonly"></textarea>

<audio id="backMusic" ng-show="false" autostart="false" src="http://goss.fexteam.com/files/audio/center/maodou.m4a"></audio>
<audio id="media" ng-show="false" autostart="false" src="http://goss.fexteam.com/files/audio/center/button.m4a"></audio>
<audio id="close" ng-show="false" autostart="false" src="http://goss.fexteam.com/files/audio/center/close.m4a"></audio>
  <!--游戏大厅-->
<div class="main" style="display: none;height:180%" ng-show="bottomSelectId==2">
    <div style="width: 100%;height: 100%;position: fixed;top:0;left:0;background: url({{img.bj}});background-size:100vw 100vh;"></div>
    <img src="{{img.title}}" style="position: fixed;right: 20px;top: 10px;z-index: 99;width:12%">
    <div style="width:60vw;position: fixed;height:17vw;top:2vw;left:5vw;z-index:99;background: url({{img.infonew}}) no-repeat center;background-size:100% 100%;opacity: 0.9">
        <div style="top:0;left:0;width: 70%;position: absolute;z-index:99; height:72.39999999999999;">
            <div class="circle" style="width:15vw;height:15vw;padding:6px;margin-top:-0.5vw;margin-left:-0.5vw;">
                <img ng-src="{{userInfo.avatar}}" style="border-radius:50%;float: left;position: relative;z-index: 50;width:15vw;height:15vw;"  />
            </div>
            <div style="color: #fff;font-size: 3vw;position: absolute;z-index: 49;top:2vw;left:21vw;width:25vw;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;height: 7vw;line-height: 7vw;" >{{userInfo.name}}
            </div>
        </div>
        <div style="top:0;left:18vw;width: 48%;position:absolute;z-index:99;" >
            <img style="position: relative;float: left;z-index: 50;height:7.2vw;margin-top:8.2vw;" src="/files/images/hall/card.png" />
            <div style="position: relative;color:#ffb306;font-size: 3vw;border-radius:3vw;padding: .8vw 2vw;float: left;margin-left: -8px;z-index: 49;margin-top:9vw; background: rgba(0,0,0,0.5);" >{{userInfo.card}}张</div>
        </div>
        <img src="/files/images/hall/icon_page.png" style="position: absolute;right: 5vw;top: 3.5vw;height: 10.5vw;width: 10.3vw;z-index: 999;" ng-click="gotopage()">
    </div>

        <div style="position: fixed; top: 5vw; right: 22vw; width: 10vw; height: 15.6vw; z-index: 99;">
            <img src="http://goss.fexteam.com/files/centerwx/images/lobby_shenshou_switch.png" style="position: absolute; width: 100%; height: 100%;" ng-click="Multiplehallshow()">
        </div>

      <div id="Multiplehall" style="display: none; position: fixed; width: 100vw; height: 100vh; z-index: 9999; top: 0px;">
      <div style="position: absolute; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.65);" ng-click="Multiplehallhide()">
       </div> 
      <div style="position: absolute; width: 100vw; top: 20%;">
              <img src="http://goss.fexteam.com/files/h5/index/shenshou_lobby_1.png" style="position: absolute; left: 8vw; width: 40vw; height: 40vw;"> 
              <img src="http://goss.fexteam.com/files/h5/index/lobby_checked_1.png" style="position: absolute; left: 8vw; width: 40vw; height: 40vw;" ng-click="Multiplehallhide()"> 
              <img src="http://goss.fexteam.com/files/h5/index/zhongyou_lobby.png" style="position: absolute; right: 8vw; width: 40vw; height: 40vw;"> 
              <img src="http://goss.fexteam.com/files/h5/index/waiting2.png" style="position: absolute; right: 8vw; width: 40vw; height: 40vw;">  
              <img src="http://goss.fexteam.com/files/h5/index/lobby_checked_1.png" style="position: absolute; right: 8vw; width: 40vw; height: 40vw; display: none;"> 
              <img src="http://goss.fexteam.com/files/h5/index/maodou.png" style="position: absolute; left: 8vw; width: 40vw; height: 40vw; top: 50vw;"> 
              <img src="http://goss.fexteam.com/files/h5/index/waiting2.png" style="position: absolute; left: 8vw; width: 40vw; height: 40vw; top: 50vw;"> 
              <img src="http://goss.fexteam.com/files/h5/index/dasheng.png" style="position: absolute; right: 8vw; width: 40vw; height: 40vw; top: 50vw;"> 
              <img src="http://goss.fexteam.com/files/h5/index/waiting2.png" style="position: absolute; right: 8vw; width: 40vw; height: 40vw; top: 50vw;">
      </div>
       </div>  


    <div class="entrance">
        <div class="img1 img" ng-click="createBullx()"></div>
        <div class="img2 img" ng-click="createLaiBull()"></div>
        <div class="img3 img" ng-click="createSangong()"></div>
        <div class="img4 img" ng-click="createFlower()"></div>
        <div class="img5 img" ng-click="createLandlord()"></div>
        <div class="img6 img" ng-click="createMajiang()"></div>
        <div class="img7 img" ng-click="createPaijiu()"></div>
        <div class="img8 img" ng-click="createErba()"></div>
        <div class="img9 img" ng-click="createXiaxie()"></div>
        <div class="img10 img" ng-click="createDcx()"></div>
        <div class="img11 img" ng-click="createDxBull()"></div>
        <div class="img12 img" ng-click="createS13s()"></div>
    </div>

    <!--<div ng-show="isShowNoty" style="position: absolute;background-color: rgba(0,0,0,0.8);width: 100%;height: 7vh;line-height: 7vh;color: white;font-size: 2.5vh;overflow: hidden;z-index: 9998;">
        <img style="position: absolute;top: 1.5vh;left: 3vw;width: 4vh;height: 4vh;" src="/files/images/common/laba.png">
    </div>-->
    <div ng-show="isShowNoty" id="marquee" style="position: absolute;top: 0;left: 12vw;background-color: rgba(0,0,0,0);width: 88vw;height: 7vh;line-height: 7vh;color: white;font-size: 2.5vh;overflow: hidden;z-index: 9999;">
        {{notyMsg}}
    </div>

    <div class="alert" ng-show="isShowAlert">
        <div class="alertBack"></div>
        <div class="mainPart">
            <div class="backImg">
                <div class="blackImg"></div>
            </div>
            <div class="alertText" >{{alertText}}</div>
            <div ng-show="alertType==1">
                <div class="buttonMiddle" ng-click="closeAlert()">确定</div>
            </div>
            <div ng-show="alertType==2">
                <div class="buttonLeft" ng-click="home()">返回首页</div>
                <div class="buttonRight" ng-click="createRoom()">创建房间</div>
            </div>
            <div ng-show="alertType==3">
                <div class="buttonLeft" ng-click="home()">返回首页</div>
                <div class="buttonRight" ng-click="closeAlert()">取消</div>
            </div>
            <div ng-show="alertType==4">
                <div class="buttonLeft" ng-click="createRoom()">创建房间</div>
                <div class="buttonRight" ng-click="sitDown()">加入游戏</div>
            </div>
            <div ng-show="alertType==5">
                <div class="buttonMiddle" ng-click="getCards()">领取</div>
            </div>
            <div ng-show="alertType==6">
                <div class="buttonMiddle" ng-click="closeAlert()">确定</div>
            </div>
            <div ng-show="alertType==23">
                <div class="buttonMiddle" ng-click="finishBindPhone()">确定</div>
            </div>
            <div ng-show="alertType==31">
                <div class="buttonMiddle" ng-click="reloadView()">确定</div>
            </div>
                <div ng-show="alertType==32">
                <div class="buttonLeft" ng-click="home()">我的大厅</div>
                <div class="buttonRight" ng-click="closeAlert()">取消</div>
            </div>          
                <div ng-show="alertType==33">
                <div class="buttonLeft" ng-click="home()">我的大厅</div>
                <div class="buttonRight" ng-click="closeAlert()">关闭</div>
            </div>
                <div ng-show="alertType==34">
                <div class="buttonLeft" ng-click="gogames()">进入游戏</div>
                <div class="buttonRight" ng-click="changeBottomSelect(1)">前往大厅</div>
            </div>
          
        </div>
    </div>

    <div class="createRoom" ng-show="createInfo.isShow>0">
    <div class="createRoomBack"></div>
    <div class="mainPart">
        <div class="createB"></div>

        <div class="createB yh" style='display:none;'><i class="mask-icon mask-top"></i> <i class="mask-icon mask-right"></i> <i class="mask-icon mask-bottom"></i> <i class="mask-icon mask-left"></i></div>


        <div class="createTitle">
            <img src="/files/images/common/txt_create.png" />
        </div>
        <img src="/files/images/common/cancel.png" class="cancelCreate" ng-click="cancelCreate()" />
        <!-- 斗牛选模式 -->
        <div class='zjhTitle f-cb' style="width: 100%" ng-if="createInfo.isShow==1">
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==3]"  ng-click="selectBankerMode6(3)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker3}}.png" class="img" style="border-top-left-radius:4px;">
                <p>牛牛</p>
                <p>上庄</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==5]"  ng-click="selectBankerMode6(5)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker5}}.png" class="img">
                <p>固定</p>
                <p>庄家</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==1]"  ng-click="selectBankerMode6(1)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker1}}.png" class="img">
                <p>自由</p>
                <p>抢庄</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==2]"  ng-click="selectBankerMode6(2)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker2}}.png" class="img">
                <p>明牌</p>
                <p>抢庄</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==4]"  ng-click="selectBankerMode6(4)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker4}}.png" class="img" style="border-top-right-radius:4px;">
                <p>通比</p>
                <p>牛牛</p>
            </div>
        </div>

        <!-- 三公选模式 -->
        <div class='zjhTitle f-cb' style="width: 100%"  ng-if="createInfo.isShow==5">
            <div style="width:33.333%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong.banker_mode==1]"  ng-click="selectBankerModeSangong(1)">
                <img ng-src="/files/images/common/mode_{{createInfo.sangong.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p>自由</p>
                <p>抢庄</p>
            </div>
            <div style="width:33.333%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong.banker_mode==4]" ng-click="selectBankerModeSangong(4)">
                <img ng-src="/files/images/common/mode_{{createInfo.sangong.banker4}}.png" class="img">
                <p>经典</p>
                <p>三公</p>
            </div>
            <div style="width:33.333%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.sangong.banker_mode==2]"  ng-click="selectBankerModeSangong(2)">
                <img ng-src="/files/images/common/mode_{{createInfo.sangong.banker2}}.png" class="img" style="border-top-right-radius:4px;">
                <p>明牌</p>
                <p>抢庄</p>
            </div>
        </div>
        <!-- 二八杠选模式 -->
        <div class='zjhTitle f-cb' style="width: 100%" ng-if="createInfo.isShow==6">
            <div style="width:50%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.erbagang.banker_mode==1]" ng-click="selectBankerModeErbagang(1)">
                <img ng-src="/files/images/common/mode_{{createInfo.erbagang.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p>自由</p>
                <p>抢庄</p>
            </div>
            <div style="width:50%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.erbagang.banker_mode==2]"  ng-click="selectBankerModeErbagang(2)">
                <img ng-src="/files/images/common/mode_{{createInfo.erbagang.banker2}}.png" class="img" style="border-top-right-radius:4px;">
                <p>固定</p>
                <p>庄家</p>
            </div>
        </div>

        <!-- 牌九选模式 -->
        <div class='zjhTitle f-cb' style="width: 100%"  ng-if="createInfo.isShow==10">
            <div style="width:50%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.paijiu.banker_mode==2]" ng-click="selectBankerModePaijiu(2)">
                <img ng-src="/files/images/common/mode_{{createInfo.paijiu.banker2}}.png" class="img" style="border-top-left-radius:4px;">
                <p>明牌</p>
                <p>抢庄</p>
            </div>
            <div style="width:50%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.paijiu.banker_mode==1]" ng-click="selectBankerModePaijiu(1)">
                <img ng-src="/files/images/common/mode_{{createInfo.paijiu.banker1}}.png" class="img" style="border-top-right-radius:4px;">
                <p>自由</p>
                <p >抢庄</p>
            </div>
        </div>

        <!-- 赖子牛牛选模式 -->
        <div class='zjhTitle f-cb' ng-if="createInfo.isShow==14">
            <div style="width:50%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.laibull.banker_mode==1]" ng-click="selectBankerModeLaibull(1)">
                <img ng-src="/files/images/common/mode_{{createInfo.laibull.banker1}}.png" class="img" style="border-top-left-radius:4px;">
                <p>自由</p>
                <p>抢庄</p>
            </div>
            <div style="width:50%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.laibull.banker_mode==2]"  ng-click="selectBankerModeLaibull(2)">
                <img ng-src="/files/images/common/mode_{{createInfo.laibull.banker2}}.png" class="img" style="border-top-right-radius:4px;">
                <p>明牌</p>
                <p>抢庄</p>
            </div>
        </div>

        <!-- 6人牛牛 -->
        <div class='zjhTitle f-cb'  ng-if="createInfo.isShow==15 || createInfo.isShow==17 || createInfo.isShow==18">
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==3]"  ng-click="selectBankerMode6(3)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker3}}.png" class="img" style="border-top-left-radius:4px;">
                <p>牛牛</p>
                <p>上庄</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==5]"  ng-click="selectBankerMode6(5)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker5}}.png" class="img">
                <p>固定</p>
                <p>庄家</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==1]" ng-click="selectBankerMode6(1)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker1}}.png" class="img">
                <p >自由</p>
                <p>抢庄</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==2]" ng-click="selectBankerMode6(2)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker2}}.png" class="img">
                <p>明牌</p>
                <p>抢庄</p>
            </div>
            <div style="width:20%" ng-class="{true: 'bankerSelected', false: 'bankerUnSelected'}[createInfo.bullx.banker_mode==4]"  ng-click="selectBankerMode6(4)">
                <img ng-src="/files/images/common/mode_{{createInfo.bullx.banker4}}.png" class="img" style="border-top-right-radius:4px;">
                <p>通比</p>
                <p>牛牛</p>
            </div>
        </div>

        <div class="blueBack">
            <div class="selectPart" style="top: 0px;height:4.5vh;padding: 0 0">
                <div class="selectTitle" style="top: 0;left: 0;width: 100%;height: 100%;font-size: 2vh; text-align: center;color: #efd0a4; background-color: #4e3f79;opacity: 1.0">
                    创建房间,游戏未进行,不消耗房卡
                </div>
            </div>
            <!-- 斗牛 -->
            <div ng-if="createInfo.isShow==1">
                <div class="selectPart f-cb">
                    <div class="selectTitle">人数：</div>
                    <div class="selectList">
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(7,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.max_count_type==1" />
                            <div class="selectText" >6人</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(7,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.max_count_type==2" />
                            <div class="selectText" >9人</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(7,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.max_count_type==4" />
                            <div class="selectText" >9人八倍</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(7,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.max_count_type==3 && createInfo.bullx.num!=3" />
                            <div class="selectText" >12人</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(8,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.max_count_type==5 && createInfo.bullx.num==3" />
                            <div class="selectText" >13人</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb"  ng-show="createInfo.bullx.max_count_type==5">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_straight==1" />
                            <div class="selectText" >顺子牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_calabash==1" />
                            <div class="selectText" >葫芦牛(7倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardtiny==1" />
                            <div class="selectText" >五小牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_sequence==1" />
                            <div class="selectText" >同花顺(10倍)</div>
                        </div>
                    </div>
                </div>



                <div class="selectPart f-cb" ng-show="createInfo.bullx.max_count_type!=5">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_straight==1" />
                            <div class="selectText" >顺子牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_calabash==1" />
                            <div class="selectText" >葫芦牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_sequence==1" />
                            <div class="selectText" >同花顺(9倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardtiny==1" />
                            <div class="selectText" >五小牛(10倍)</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">10局X1房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">12局X3房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==5">12局X3门票</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">20局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">24局X6房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==5">24局X6门票</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb" ng-if="createInfo.bullx.banker_mode==5">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==1" />
                            <div class="selectText" >无</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==2" />
                            <div class="selectText" >300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==3" />
                            <div class="selectText" >500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==4" />
                            <div class="selectText" >1000</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.bullx.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  style="margin-left: 1vh;">
                            <div class="text" style="float: left;">抢庄</div>
                            <select ng-model="createInfo.bullx.grab_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                    <div class="selectList" style="margin-left: 8vh;margin-top: .4vh">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">下注</div>
                            <select ng-model="createInfo.bullx.bet_time   ">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left: 1vh;">
                            <div class="text" style="float: left;">摊牌</div>
                            <select ng-model="createInfo.bullx.show_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="selectPart" style="height:4vh;" ng-show="createInfo.bullx.max_count_type==5">
                    <div class="selectTitle">特殊：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(9,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png"ng-show="createInfo.bullx.can_rub==1" />
                            <div class="selectText" >允许搓牌</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6人牛牛 -->
            <div ng-if="createInfo.isShow==15">
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:16vh;line-height:4.2vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_straight==1" />
                            <div class="selectText" >顺子牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_calabash==1" />
                            <div class="selectText" >葫芦牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_sequence==1" />
                            <div class="selectText" >同花顺(9倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardtiny==1" />
                            <div class="selectText" >五小牛(10倍)</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">10局X1房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">12局X3房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">12局X2房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">20局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">24局X6房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">24局X4房卡</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;" ng-if="createInfo.bullx.banker_mode==5">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==1" />
                            <div class="selectText" >无</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==2" />
                            <div class="selectText" >300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==3" />
                            <div class="selectText" >500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==4" />
                            <div class="selectText" >1000</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:9vh;line-height:4.5vh ">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.bullx.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  style="margin-left: 1vh;">
                            <div class="text" style="float: left;">抢庄</div>
                            <select ng-model="createInfo.bullx.grab_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                    <div class="selectList" style="margin-left: 8vh;margin-top: .4vh">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">下注</div>
                            <select ng-model="createInfo.bullx.bet_time   ">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left: 1vh;">
                            <div class="text" style="float: left;">摊牌</div>
                            <select ng-model="createInfo.bullx.show_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">特殊：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(9,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.can_rub==1" />
                            <div class="selectText" >允许搓牌</div>
                        </div>
                    </div>
                </div>
                <div class='notice'>创建房间，无人参与，半小时后返还房卡</div>
            </div>

            <!-- 10人牛牛 -->
            <div ng-if="createInfo.isShow==17">
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:16vh;line-height:4.2vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_straight==1" />
                            <div class="selectText" >顺子牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_calabash==1" />
                            <div class="selectText" >葫芦牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_sequence==1" />
                            <div class="selectText" >同花顺(9倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardtiny==1" />
                            <div class="selectText" >五小牛(10倍)</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">10局X1房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">12局X3房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">12局X2房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">20局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">24局X6房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">24局X4房卡</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;" ng-if="createInfo.bullx.banker_mode==5">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==1" />
                            <div class="selectText" >无</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==2" />
                            <div class="selectText" >300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==3" />
                            <div class="selectText" >500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==4" />
                            <div class="selectText" >1000</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:9vh;line-height:4.5vh ">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.bullx.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  style="margin-left: 1vh;">
                            <div class="text" style="float: left;">抢庄</div>
                            <select ng-model="createInfo.bullx.grab_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                    <div class="selectList" style="margin-left: 8vh;margin-top: .4vh">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">下注</div>
                            <select ng-model="createInfo.bullx.bet_time   ">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left: 1vh;">
                            <div class="text" style="float: left;">摊牌</div>
                            <select ng-model="createInfo.bullx.show_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">特殊：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(9,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.can_rub==1" />
                            <div class="selectText" >允许搓牌</div>
                        </div>
                    </div>
                </div>
                <div class='notice'>创建房间，无人参与，半小时后返还房卡</div>
            </div>

            <!-- 13人牛牛 -->
            <div ng-if="createInfo.isShow==18">
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:8vh;">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:16vh;line-height:4.2vh;">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_straight==1" />
                            <div class="selectText" >顺子牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_calabash==1" />
                            <div class="selectText" >葫芦牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_sequence==1" />
                            <div class="selectText" >同花顺(9倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.is_cardtiny==1" />
                            <div class="selectText" >五小牛(10倍)</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">10局X1房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">12局X3房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==5">12局X3房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==1">20局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==2">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==3">24局X6房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==4">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.bullx.max_count_type==5">24局X6房卡</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;" ng-if="createInfo.bullx.banker_mode==5">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==1" />
                            <div class="selectText" >无</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==2" />
                            <div class="selectText" >300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==3" />
                            <div class="selectText" >500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.banker_score==4" />
                            <div class="selectText" >1000</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:9vh;line-height:4.5vh ">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.bullx.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  style="margin-left: 1vh;">
                            <div class="text" style="float: left;">抢庄</div>
                            <select ng-model="createInfo.bullx.grab_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                    <div class="selectList" style="margin-left: 8vh;margin-top: .4vh">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">下注</div>
                            <select ng-model="createInfo.bullx.bet_time   ">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left: 1vh;">
                            <div class="text" style="float: left;">摊牌</div>
                            <select ng-model="createInfo.bullx.show_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="selectPart" style="height:4vh;">
                    <div class="selectTitle">特殊：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(9,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.bullx.can_rub==1" />
                            <div class="selectText" >允许搓牌</div>
                        </div>
                    </div>
                </div>
                <div class='notice'>创建房间，无人参与，半小时后返还房卡</div>
            </div>


            <!-- 炸金花 -->
            <div ng-if="createInfo.isShow==4">
                <div class="flower_tip" ng-show="createInfo.flower.max_count_type==1 && createInfo.flower.is_big_flower ==1" style="text-align: center;">去除小牌,只保留10,J,Q,K,A牌</div>
                <div class="flower_tip" ng-show="createInfo.flower.max_count_type==2 && createInfo.flower.is_big_flower ==1" style="text-align: center;">去除小牌,只保留8,9,10,J,Q,K,A牌</div>
                <div class="flower_tip" ng-show="createInfo.flower.max_count_type==3 && createInfo.flower.is_big_flower ==1" style="text-align: center;">去除小牌,只保留6,7,8,9,10,J,Q,K,A牌</div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">人数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(1,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.max_count_type==1" />
                            <div class="selectText" >6人房间</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(1,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.max_count_type==2" />
                            <div class="selectText" >9人房间</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(1,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.max_count_type==3" />
                            <div class="selectText" >12人房间</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==2" />
                            <div class="selectText" >2分</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==4" />
                            <div class="selectText" >4分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,8)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==8" />
                            <div class="selectText">8分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,10)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==10" />
                            <div class="selectText">10分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,16)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==16" />
                            <div class="selectText">16分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,20)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==20" />
                            <div class="selectText">20分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(2,40)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.default_score==40" />
                            <div class="selectText">40分</div>
                        </div>
       
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox"></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.chip_type==1"/>
                            <div class="selectText" >2/4,4/8,8/16,10/20</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(3,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.chip_type==2"/>
                            <div class="selectText" >2/4,5/10,10/20,20/40</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.disable_look==1" />
                            <div class="selectText" >首轮禁止看牌</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.disable_pk==1" />
                            <div class="selectText" >闷牌，全场禁止比牌</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.is_qp_tp_cur" />
                            <div class="selectText" >大赢家摊牌</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">上限：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,0)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.upper_limit==0" />
                            <div class="selectText" >无</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,500)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.upper_limit==500" />
                            <div class="selectText">500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,1000)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.upper_limit==1000" />
                            <div class="selectText">1000</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(5,2000)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.upper_limit==2000" />
                            <div class="selectText">2000</div>
                        </div>
                    </div>
                </div>

                <!--<div class="selectPart f-cb">
                    <div class="selectTitle">喜牌：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(10,0)" style="width: 45%;">
                            <select ng-model="createInfo.flower.joy_card_ths" ng-blur="blur()"  style="width: 100%;">
                                <option value="0">同花顺不收喜</option>
                                <option value="5">同花顺5分</option>
                                <option value="10">同花顺10分</option>
                                <option value="15">同花顺15分</option>
                                <option value="30">同花顺30分</option>
                            </select>
                        </div>
                        <div class="selectItem" ng-click="selectChange(10,5)"  style="width: 45%;">
                            <select ng-model="createInfo.flower.joy_card_bz" ng-blur="blur()" style="width: 100%;">
                                <option value="0">豹子不收喜</option>
                                <option value="10">豹子10分</option>
                                <option value="20">豹子20分</option>
                                <option value="30">豹子30分</option>
                                <option value="50">豹子50分</option>
                            </select>
                        </div>
                    </div>
                </div>-->

                <div class="selectPart f-cb">
                    <div class="selectTitle">比牌：</div>
                    <div class="selectList">
                        <div class="selectItem" style="margin-left: 1.8vh;" ng-click="selectChange(9,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_round==1" />
                            <div class="selectText" >>1轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 0.8vh;" ng-click="selectChange(9,3)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_round==3" />
                            <div class="selectText">>3轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 0.8vh;" ng-click="selectChange(9,5)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_round==5" />
                            <div class="selectText">>5轮</div>
                        </div>
                        <div class="selectItem" style="margin-left: 0.8vh;" ng-click="selectChange(9,7)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_round==7" />
                            <div class="selectText">>7轮</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">比牌：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,0)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_score==0" />
                            <div class="selectText" >0</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,100)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_score==100" />
                            <div class="selectText">100</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,300)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_score==300" />
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(6,500)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.pk_score==500" />
                            <div class="selectText">500</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">看牌：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(7,0)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.look_score==0" />
                            <div class="selectText" >0</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(7,100)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.look_score==100" />
                            <div class="selectText">100</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(7,300)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.look_score==300" />
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(7,500)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.look_score==500" />
                            <div class="selectText">500</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(8,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.flower.max_count_type==1">10局X1张房卡</div>
                            <div class="selectText" ng-show="createInfo.flower.max_count_type==2">12局X2张房卡</div>
                            <div class="selectText" ng-show="createInfo.flower.max_count_type==3">12局X3张房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(8,2)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.flower.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.flower.max_count_type==1">20局X2张房卡</div>
                            <div class="selectText" ng-show="createInfo.flower.max_count_type==2">24局X4张房卡</div>
                            <div class="selectText" ng-show="createInfo.flower.max_count_type==3">24局X6张房卡</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.flower.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">下注</div>
                            <select ng-model="createInfo.flower.bet_time   ">
                                <option value="10">10秒</option>
                                <option value="12">12秒</option>
                                <option value="14">14秒</option>
                                <option value="15">15秒</option>
                                <option value="18">18秒</option>
                                <option value="20">20秒</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 三公 -->
            <div class="bullRull" ng-if="createInfo.isShow==5">

                <div class="selectPart f-cb">
                    <div class="selectTitle">人数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.max_count_type==1" />
                            <div class="selectText" >6人房间</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.max_count_type==2" />
                            <div class="selectText" >9人房间</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.score_type==1"/>
                            <div class="selectText">1分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.score_type==2"/>
                            <div class="selectText">2分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.score_type==3" />
                            <div class="selectText">3分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.score_type==4" />
                            <div class="selectText">4分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.score_type==5" />
                            <div class="selectText">5分</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.rule_type==1" />
                            <div class="selectText" >三公x3,九点x2,八点x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.rule_type==2" />
                            <div class="selectText" >三公x5,九点x4,八点x3,七点x2</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem f-cb" style='margin-bottom:0.1rem;float:none;'  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.is_cardjoker==1" />
                            <div class="selectText" >天公x10,雷公x7,地公x5</div>
                        </div>
                            <div class="selectItem f-cb" style='margin-bottom:0.1rem;float:none;'  ng-click="selectChange(3,2)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.is_cardbao9==1" />
                                <div class="selectText" >暴玖x9</div>
                            </div>
                       
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==1">10局X1房卡</div>
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==2">12局X2房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==1">20局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==2">24局X4房卡</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb" ng-if="createInfo.sangong.banker_mode==5">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.banker_score==1" />
                            <div class="selectText" >无</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.banker_score==2" />
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==1">100</div>
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==2">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.banker_score==3" />
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==1">300</div>
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==2">500</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(5,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.sangong.banker_score==4" />
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==1">500</div>
                            <div class="selectText" ng-show="createInfo.sangong.max_count_type==2">1000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 二八杠 -->
            <div ng-if="createInfo.isShow==6">
                <div class="selectPart f-cb" ng-if="createInfo.erbagang.banker_mode==2">
                    <div class="selectTitle">上庄：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(1,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.score_type==1" />
                            <div class="selectText" >500分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(1,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.score_type==2" />
                            <div class="selectText" >1000分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(1,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.score_type==3" />
                            <div class="selectText" >1500分</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.score_type==4" />
                            <div class="selectText" >无限制</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb"  ng-if="createInfo.erbagang.banker_mode==1">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem"  ng-click="selectChange(2,0)">
                            <div class="selectBox"></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.chip_type==0"/>
                            <div class="selectText" >5,10,20,30</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox"></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.chip_type==1"/>
                            <div class="selectText" >10,20,30,50</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(2,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.chip_type==2"/>
                            <div class="selectText" >20,30,50,80</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(2,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.chip_type==3"/>
                            <div class="selectText" >30,50,80,100</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.rule_type==1" />
                            <div class="selectText" >无二八杠</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.rule_type==2" />
                            <div class="selectText" >二八杠2倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.rule_type==3" />
                            <div class="selectText" >二八杠3倍</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.ticket_count==1" />
                            <div class="selectText" >4局X1房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.erbagang.ticket_count==2" />
                            <div class="selectText" >8局X2房卡</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 斗地主 -->
            <div ng-if="createInfo.isShow==7">
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.base_score==1"/>
                            <div class="selectText">1分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.base_score==5"/>
                            <div class="selectText">5分</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,10)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.base_score==10" />
                            <div class="selectText">10分</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div style="height:4.5vh;">
                            <div class="selectItem" ng-click="selectChange(2,1)">
                                <div class="selectBox"></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.ask_mode==1" />
                                <div class="selectText">轮流问地主</div>
                            </div>
                        </div>
                        <div style="height:4.5vh;" >
                            <div class="selectItem" ng-click="selectChange(2,2)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.ask_mode==2" />
                                <div class="selectText">随机问地主</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.ticket_count==1" />
                            <div class="selectText" >6局X1张房卡</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.landlord.ticket_count==2" />
                            <div class="selectText" >12局X2张房卡</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 麻将 -->
            <div ng-if="createInfo.isShow==8">
                <div class="selectPart f-cb">
                    <div class="selectTitle">鬼牌：</div>
                    <div class="selectList" >
                        <div class="selectItem"  ng-click="selectChange(1,0)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.joker==0"/>
                            <div class="selectText">无鬼牌</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.joker==1"/>
                            <div class="selectText">翻牌当鬼</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.joker==2" />
                            <div class="selectText">红中当鬼</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.joker==3" />
                            <div class="selectText">红中当鬼(去掉风字)</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">抓马：</div>
                    <div class="selectList">
                        <div>
                            <div class="selectItem"ng-click="selectChange(2,0)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.horse_count==0" />
                                <div class="selectText">不跑马</div>
                            </div>
                            <div class="selectItem" ng-click="selectChange(2,2)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.horse_count==2"/>
                                <div class="selectText">2匹</div>
                            </div>
                            <div class="selectItem" ng-click="selectChange(2,4)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.horse_count==4"/>
                                <div class="selectText">4匹</div>
                            </div>
                        </div>
                        <div>
                            <div class="selectItem" ng-click="selectChange(2,6)" >
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.horse_count==6"/>
                                <div class="selectText">6匹</div>
                            </div>
                            <div class="selectItem" ng-click="selectChange(2,8)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.horse_count==8" />
                                <div class="selectText">8匹</div>
                            </div>
                            <div class="selectItem" ng-click="selectChange(2,1)">
                                <div class="selectBox" ></div>
                                <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.horse_count==1" />
                                <div class="selectText">爆炸马</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.qianggang==1" />
                            <div class="selectText">抢杠全包</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(5)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.chengbao==1" />
                            <div class="selectText">杠爆全包</div>
                        </div>
                    </div>

                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">房卡：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.ticket_count==1" />
                            <div class="selectText" >6局X1张房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.majiang.ticket_count==2" />
                            <div class="selectText" >12局X2张房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 鱼虾蟹 -->
            <div ng-if="createInfo.isShow==9">
                <div class="selectPart f-cb">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem"  ng-click="selectChange(1,1)">
                            <div class="selectBox"></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.chip_type==1"/>
                            <div class="selectText" >&nbsp;&nbsp;5，10，20，50</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.chip_type==2"/>
                            <div class="selectText" >10，20，50，100</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">上限：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,100)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.upper_limit==100" />
                            <div class="selectText">100</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,300)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.upper_limit==300" />
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" style="margin-left: 1.5vh;" ng-click="selectChange(4,500)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.upper_limit==500" />
                            <div class="selectText">500</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem" ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.rule_value1==1" />
                            <div class="selectText" >三个相同5倍，两个相同3倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.ticket_type==1" />
                            <div class="selectText">12局X2张房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" > </div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.xiaxie.ticket_type==2" />
                            <div class="selectText">24局X4张房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 牌九 -->
            <div ng-if="createInfo.isShow==10">
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.paijiu.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectText" >至尊10倍,双天双地双人8倍,对子6倍,天王地王5倍,天杠地杠天高九地高九4倍,九点3倍,八点2倍</div>
                        </div>

                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectText" >丁三牌和二四牌可互换使用</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.ticket_type==1" />
                            <div class="selectText" >12局X2房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.paijiu.ticket_type==2" />
                            <div class="selectText" >24局X4房卡</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 大吃小斗牛 -->
            <div ng-if="createInfo.isShow==12">
                <div class="selectPart f-cb">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.bet_type==1"/>
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.bet_type==2"/>
                            <div class="selectText">500</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.bet_type==3" />
                            <div class="selectText">1000</div>
                        </div>

                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.is_cardfive==1" />
                            <div class="selectText" >五花牛</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.is_cardtiny==1" />
                            <div class="selectText" >五小牛</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.ticket_type==1" />
                            <div class="selectText" >12局X2房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dxbull.ticket_type==2" />
                            <div class="selectText" >24局X4房卡</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 大吃小 -->
            <div class="bullRull" ng-if="createInfo.isShow==13">
                <div class="selectPart f-cb">
                    <div class="selectTitle">人数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.max_count_type==1" />
                            <div class="selectText" >9人房间</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.max_count_type==2" />
                            <div class="selectText" >12人房间</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">筹码：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.bet_type==1"/>
                            <div class="selectText">300</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.bet_type==2"/>
                            <div class="selectText">500</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.bet_type==3" />
                            <div class="selectText">1000</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.is_cardjoker==1" />
                            <div class="selectText" >天公x10,雷公x7,地公x5</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.is_cardbao9==1" />
                            <div class="selectText" >暴玖x9</div>
                        </div>

                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.dcx.max_count_type==1">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.dcx.max_count_type==2">12局X3房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.dcx.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.dcx.max_count_type==1">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.dcx.max_count_type==2">24局X6房卡</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 赖子斗牛 -->
            <div ng-if="createInfo.isShow==14">

                <div class="selectPart f-cb">
                    <div class="selectTitle">人数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(5,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.max_count_type==2" />
                            <div class="selectText" >9人房间</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(5,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.max_count_type==3" />
                            <div class="selectText" >12人房间</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.laibull.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">下注：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(6,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.bet_type==1" />
                            <div class="selectText" >1/2/4/5倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.bet_type==2" />
                            <div class="selectText" >1/3/5/8倍</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(6,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.bet_type==3" />
                            <div class="selectText" >2/4/6/10倍</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">规则：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(2,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.rule_type==1" />
                            <div class="selectText" >牛牛x3牛九x2牛八x2</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(2,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.rule_type==2" />
                            <div class="selectText" >牛牛x4牛九x3牛八x2牛七x2</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">牌型：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(3,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_cardfour==1" />
                            <div class="selectText" >四花牛(4倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_cardfive==1" />
                            <div class="selectText" >五花牛(5倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,3)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_straight==1" />
                            <div class="selectText" >顺子牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_flush==1" />
                            <div class="selectText" >同花牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_calabash==1" />
                            <div class="selectText" >葫芦牛(6倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,6)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_cardbomb==1" />
                            <div class="selectText" >炸弹牛(8倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,7)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_sequence==1" />
                            <div class="selectText" >同花顺(9倍)</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(3,8)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.is_cardtiny==1" />
                            <div class="selectText" >五小牛(10倍)</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.ticket_type==1" />
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==2">12局X2房卡</div>
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==3">12局X3房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.laibull.ticket_type==2" />
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==2">24局X4房卡</div>
                            <div class="selectText" ng-show="createInfo.laibull.max_count_type==3">24局X6房卡</div>
                        </div>
                    </div>
                </div>
                <div class="selectPart f-cb">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.laibull.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  style="margin-left: 1vh;">
                            <div class="text" style="float: left;">抢庄</div>
                            <select ng-model="createInfo.laibull.grab_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                    <div class="selectList" style="margin-left: 8vh;margin-top: .4vh">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">下注</div>
                            <select ng-model="createInfo.laibull.bet_time   ">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem" style="margin-left: 1vh;">
                            <div class="text" style="float: left;">摊牌</div>
                            <select ng-model="createInfo.laibull.show_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 十三水 -->
            <div ng-if="createInfo.isShow==16">
                <div class="selectPart f-cb">
                    <div class="selectTitle">底分：</div>
                    <div class="selectList" >
                        <div class="selectItem" ng-click="selectChange(1,1)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.score_type==1"/>
                            <div class="selectText">1</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,2)" ng-show="createInfo.s13s.banker_mode!=4">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.score_type==2"/>
                            <div class="selectText">2</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,3)" >
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.score_type==3" />
                            <div class="selectText">3</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,4)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.score_type==4" />
                            <div class="selectText">4</div>
                        </div>
                        <div class="selectItem" ng-click="selectChange(1,5)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.score_type==5" />
                            <div class="selectText">5</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">局数：</div>
                    <div class="selectList">
                        <div class="selectItem"  ng-click="selectChange(4,1)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.ticket_type==1" />
                            <div class="selectText" >12局X2房卡</div>
                        </div>
                        <div class="selectItem"  ng-click="selectChange(4,2)">
                            <div class="selectBox" ></div>
                            <img src="/files/images/common/tick.png" ng-show="createInfo.s13s.ticket_type==2" />
                            <div class="selectText" >24局X4房卡</div>
                        </div>
                    </div>
                </div>

                <div class="selectPart f-cb">
                    <div class="selectTitle">时间：</div>
                    <div class="selectList">
                        <div class="selectItem"  >
                            <div class="text" style="float: left;">准备</div>
                            <select ng-model="createInfo.s13s.ready_time">
                                <option value="5">5秒</option>
                                <option value="6">6秒</option>
                                <option value="7">7秒</option>
                                <option value="8">8秒</option>
                                <option value="9">9秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                        <div class="selectItem"  style="margin-left: 1vh;">
                            <div class="text" style="float: left;">理牌</div>
                            <select ng-model="createInfo.s13s.think_time">
                                <option value="30">30秒</option>
                                <option value="20">20秒</option>
                                <option value="15">15秒</option>
                                <option value="10">10秒</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="createCommit" ng-click="createCommit()" >确定</div>
        </div>
    </div>

    <!-- 绑定手机号码 -->
    <div id="validePhone" ng-show="isAuthPhone==1">
        <div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" ng-click="hideBindPhone()"></div>
        <div class="phoneFrame" style="position: fixed;z-index: 99;width: 80vw;max-width: 80vw; top: 50%; left: 50%;-webkit-transform:translate(-50%,-60%); background-color: #fff; text-align: center; border-radius: 8px; overflow: hidden;opacity: 1; color: white;">
            <div style="height: 2.2vw;"></div>

            <div style="padding: 0vh;font-size: 3.5vw; line-height: 8vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;" >
                验证手机号，门票可找回。
            </div>
            <div style="height: 2.2vw;"></div>
            <div style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">

                <input  ng-input="phoneChange()" ng-model="sPhone" type="number" name="phone" placeholder="输入手机号" style="padding:0 12px 0 12px;position: absolute;top:  2.5vw;left: 4vw;width: 48vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;">
                <div id="authcode" ng-click="getAuthcode()" style="position: absolute;top:  2.5vw;right: 4vw; width: 22vw;height: 10vw;line-height: 10vw;background-color: rgb(211,211,211);font-size: 3.5vw;border-radius: 0.5vh;color: white;">
                    {{authcodeText}}
                </div>
             </div>
            <div style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">

                <input  ng-model="sAuthcode" type="number" name="phone1" placeholder="输入验证码" style="padding:0 12px 0 12px;position: absolute;top: 1vw;left: 4vw;width: 72vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;">

            </div>
            <div style="height: 2.2vw;"></div>
            <div style="position: relative; left: 4vw;width: 72vw;line-height: 10vw; font-size: 4vw;display: flex;border-radius: 2vw;" ng-click="bindPhone()">
                <div style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;">立即绑定</div>
            </div>
            <div style="height: 4vw;"></div>
        </div>
    </div>
     

<div style="position: fixed;width:100%;height:100%;top:0;left:0;background: #000;z-index: 100000" id="loading"ng-show="is_operation && is_operationLogo"><img src="/files/images/common/loading.gif" style="top: 40%;position: absolute;left: 50%;margin-left: -45px;margin-top: -45px;" /></div>
<style>.waiting{position: fixed;width:100%;height:100%;top:0;left:0;z-index: 111;}.waiting .waitingBack{position: fixed;width:100%;height:100%;top:0;left:0;background: #000;opacity:.5;}</style>
    <div class="waiting" ng-show="is_operation">
        <div class="waitingBack"></div>
        <div class="load4">
            <div class="loader">Loading...</div>
        </div>
    </div>
</div>
      <!-- 底部 -->
    <div id="guiding" class="guiding">
        <div id="bottom111" class="bottom">
            <img src="/files/images/index/main_tab.png" style="position: absolute; bottom: 0px; height: 9vw; left: 5vw; width: 90vw;">
            <div class="item selected item11" style="left: 4vw;" ng-if="bottomSelectId==1">
                <img src="/files/images/index/tab_1.png" style="left: 8vw; height: 9vw; margin-top: 5vw; width: 30vw;">   <img src="/files/images/index/tab_icon_1.png">
            </div>
            <div class="item item11" style="left: 4vw;" ng-if="bottomSelectId!=1" ng-click="changeBottomSelect(1)">
                <img src="/files/images/index/tab_icon_11.png" style="height: 10vw; margin-top: 0vw; width: 10vw; margin-left: -5.5vw;"> <!---->
            </div>

            <div class="item selected item21" style="left: 33%;" ng-if="bottomSelectId==2">
                <img src="/files/images/index/tab_2.png" style="margin-top: 5vw; width: 30vw; height: 9vw; left: 9vw;">   <img src="/files/images/index/tab_icon_2.png">
            </div>
            <div class="item item21" style="left: 33%;" ng-if="bottomSelectId!=2" ng-click="changeBottomSelect(2)">
                <img src="/files/images/index/tab_icon_22.png" style="height: 10vw; margin-top: 0vw; width: 10vw; margin-left: -5.5vw;"> <!---->
            </div>

            <div class="item selected item31" style="left: 62%;" ng-if="bottomSelectId==3">
                <img src="/files/images/index/tab_3.png" style="margin-top: 5vw; width: 30vw; height: 9vw; left: 11vw;">  <img src="/files/images/index/tab_icon_3.png">
            </div>
            <div class="item item31" style="left: 62%;" ng-if="bottomSelectId!=3" ng-click="changeBottomSelect(3)">
                <img src="/files/images/index/tab_icon_33.png" style="height: 10vw; margin-top: 0vw; width: 10vw; margin-left: -5.5vw;"> <!---->
            </div>
        </div>
    </div>

    <!-- 公会 -->
    <div id="app-game" class="main ng-hide" style="width:100vw;height:100vh;position:fixed;z-index:1; background: url(/files/images/index/main_bg.jpg) #000 no-repeat;background-size:100% 100%;" ng-show="bottomSelectId==1">
     <div id="app-game" class="main" style="display: block;" ng-show="bottomSelectId==1"> 
        <div class="background" style="background: url(/files/images/index/main_bg.jpg) 0% 0% / 100vw 100vh;">
            <div class="black" style="background-color: rgba(0, 0, 0, 0);"></div>
        </div> 
        <div style="position: fixed; height: 8vh; background-color: rgba(0, 0, 0, 0); width: 100vw;">
            <img src="/files/images/index/lobby_top_bg.png" style="position: absolute; top: 1.5vh; left: 0px; width: 100vw; height: 5vh;"> 
            <div style="position: absolute; width: 100%; height: 100%; line-height: 8.5vh; text-align: center; font-size: 4vw; color: rgb(255, 228, 169);">
            {{guideName}}
            </div> 
            <div ng-click="openShowGuides()" style="position: absolute; top: 1vh; left: 4vw; height: 6vh; line-height: 6vh; text-align: left; color: white;">
		        <img src="/files/images/switch_icon.png" style="position: absolute; top: 50%; margin-top: -2vh; left: 1vh; height: 4vh; width: 4vh;">
		        <img src="/files/images/switch_text.png" style="position: absolute; top: 50%; margin-top: -1vh; left: 5.5vh; height: 2vh; width: 8vh;">
            </div> 
            <div ng-click="changeBottomSelect(1)" style="position: absolute; top: 1vh; right: 3vw; height: 6vh; line-height: 6vh; text-align: right; color: white;">
		        <img src="/files/images/refresh_icon.png" id="Rotation360" style="position: absolute; top: 50%; margin-top: -2vh; right: 1vh; height: 4vh; width: 4vh;">
		        <img src="/files/images/refresh_text.png" style="position: absolute; top: 50%; margin-top: -1vh; right: 5.5vh; height: 2vh; width: 4vh;">
            </div>
        </div> 
        <div class="alert11" style="display: none;">
            <div class="alertBack11"></div> 
            <div class="mainPart11" style="height: 30vh;">
                <div class="backImg11" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 1.5vh; border: 0.1vh solid rgb(222, 81, 241); background: rgb(109, 75, 168);">
                    <div class="blackImg11" style="height: 17vh;"></div>
                </div> 
                <img src="/files/images/index/quit.png" class="cancelCreate" style="position: absolute; top: -3.5vw; right: -3.5vw; width: 10vw; height: 10vw;"> 
                <div id="alertText11" class="alertText11" style="word-break: break-all; line-height: 10vh; display: none;"></div> 
                <div id="alertText11" class="alertText11" style="word-break: break-all; line-height: 4vh;"></div> 
                <div style="display: none;">
                    <div class="buttonMiddle11" style="background: url(/files/images/index/game_commit.png) 0% 0% / 100%;"></div>
                </div> 
                <div style="display: none;"><div class="buttonLeft11 activeButton11" style="background: url(/files/images/index/lobby_delete.png) 0% 0% / 100%;"></div> 
                    <div class="buttonRight11 activeButton11" style="background: url(/files/images/index/join_game.png) 0% 0% / 100%;"></div>
                </div> 
                <div style="display: none;">
                    <div class="buttonLeft11 activeButton11" style="background: url(/files/images/index/lobby_close.png) 0% 0% / 100%;"></div> 
                    <div class="buttonRight11 activeButton11" style="background: url(/files/images/index/game_commit.png) 0% 0% / 100%;"></div>
                </div> 
                <div style="display: none;">
                    <div class="buttonLeft11 activeButton11" style="background: url(/files/images/index/lobby_close.png) 0% 0% / 100%;"></div> 
                    <div class="buttonRight11 activeButton11" style="background: url(/files/images/index/game_commit.png) 0% 0% / 100%;"></div>
                </div>
            </div>
        </div> 
        <img src="/files/images/index/noroom_info_1.png" style="position: absolute; top: 25vh; left: 50%; margin-left: -40vw; width: 80vw; height: 8.68vw;" ng-show="allRoom.length==0"> 
        
        <div id="tables-guides" ng-if="showGuides==1" style="position: absolute; top: 56.16px; width: 100vw; height: 561.6px; overflow: scroll;">
        <div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" ng-click="closeShowGuides()"></div>
		<div class="box" style="transform: translate(-50%, -60%);z-index:99; top: 50%; left: 50%;">
			<img ng-click="closeShowGuides()" src="/files/images/common_close.png" style="position: absolute; top: -3vw; right: -3vw; width: 10vw; height: 10vw;">
			<div class="title">切换公会</div>
			<div class="groupList" style="max-height: 50vh;">
				<div ng-repeat="guideInfo in allGuides" class="groupItem" style="position: relative;">
					<div ng-click="gotoGuide(guideInfo.manager_id)" class="name" style="position: absolute; margin-left: 10vw; width: 70vw;">{{guideInfo.guide_name}}</div> 
					<img ng-if="guideInfo.manager_id==muserAccountId" src="/files/images/team_checked.png" style="position: absolute; margin-left: 2vw; width: 6vw; height: 6vw; margin-right: 3vw; margin-top: 4vw;">
					<img ng-click="quitGuideFunc(guideInfo.manager_id)" ng-if="guideInfo.manager_id!=userAccountId" src="/files/images/quit_team.png" style="position: absolute; margin-top: 3vw; width: 14.5vw; height: 8vw; right: 7vw; text-align: center; line-height: 8vw;">
				</div>
			</div>
			<div style="height: 8vw;"></div>
		</div>
        </div>
        
        <div id="tables-box" style="position: absolute; top: 56.16px; width: 100vw; height: 561.6px; overflow: scroll;">
            <div class="game111" style="position: relative; height: {{(allRoom.length+1)*48}}vw; transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1); transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">

                <div style="height: 4vh;"></div> 
                <div ng-repeat="roomInfo in allRoom | orderBy:'-time'" ng-click="gotoRoom(roomInfo.fun_name, roomInfo.room_id)" style="position: relative; left: 50%; margin-left: -44vw; width: 88vw; height: 48vw;">

                    <img src="/files/images/index/main_table{{roomInfo.max_count}}.png" style="position: absolute; left: 50%; margin-left: -44vw; width: 88vw; height: 48vw;"> 
                    <div ng-repeat="gamer in roomInfo.gamers">
                        <!-- 2人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==2&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 26vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==2&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 50vw;"> 
                        <!-- 3人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==3&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 18vw; left: 8vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==3&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 38vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==3&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 18vw; left: 70vw;"> 
                        <!-- 4人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==4&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 18vw; left: 8vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==4&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 26vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==4&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 50vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==4&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 18vw; left: 70vw;"> 
                        <!-- 6人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==6&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 18vw; left: 8vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==6&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 3vw; left: 13vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==6&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 29vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==6&&gamer.serial_num==4" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 47vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==6&&gamer.serial_num==5" class="table{{roomInfo.max_count}}" style="top: 3vw; left: 64vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==6&&gamer.serial_num==6" class="table{{roomInfo.max_count}}" style="top: 18vw; left: 70vw;"> 
                        <!-- 8人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 16vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==4" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 32vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==5" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 47vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==6" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 62vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==7" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==8&&gamer.serial_num==8" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 75vw;"> 
                        <!-- 9人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 15vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==4" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 27vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==5" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 39vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==6" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 51vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==7" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 63vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==8" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==9&&gamer.serial_num==9" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 75vw;"> 
                        <!-- 10人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 15vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==4" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 27vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==5" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 39vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==6" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 51vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==7" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 63vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==8" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==9" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==10&&gamer.serial_num==10" class="table{{roomInfo.max_count}}" style="top: 35vw; left: 40vw;"> 
                        <!-- 12人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 15vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==4" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 27vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==5" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 39vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==6" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 51vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==7" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 63vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==8" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==9" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==10" class="table{{roomInfo.max_count}}" style="top: 37vw; left: 63vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==11" class="table{{roomInfo.max_count}}" style="top: 35vw; left: 38vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==12&&gamer.serial_num==12" class="table{{roomInfo.max_count}}" style="top: 37vw; left: 15vw;"> 
                        <!-- 13人 -->
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==1" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==2" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 5vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==3" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 15vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==4" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 27vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==5" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 39vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==6" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 51vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==7" class="table{{roomInfo.max_count}}" style="top: 1vw; left: 63vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==8" class="table{{roomInfo.max_count}}" style="top: 10vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==9" class="table{{roomInfo.max_count}}" style="top: 25vw; left: 75vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==10" class="table{{roomInfo.max_count}}" style="top: 35vw; left: 62vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==11" class="table{{roomInfo.max_count}}" style="top: 35vw; left: 47vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==12" class="table{{roomInfo.max_count}}" style="top: 35vw; left: 32vw;"> 
                        <img src="{{gamer.headimgurl}}" ng-if="roomInfo.max_count==13&&gamer.serial_num==13" class="table{{roomInfo.max_count}}" style="top: 35vw; left: 15vw;"> 
                    </div>
                    <!---->

                    <div style="position: absolute; top: 8.5vw; left: 0.5vw; height: 24vw; line-height: 24vw; width: 88vw; text-align: center; color: rgb(255, 228, 169); font-size: 5vw; text-shadow: rgba(0, 0, 0, 0.6) 1px 1px 1px;">
                        {{roomInfo.game_name}}
                    <!-- 底分 -->
                    <span ng-if="roomInfo.game_type!=8&&roomInfo.game_type!=21&&roomInfo.game_type!=6" style="font-size: 5vw;">-底分:{{roomInfo.base_score}}</span>

                    </div> 

                    <div style="position: absolute; top: 15vw; left: 0.5vw; height: 24vw; line-height: 24vw; width: 88vw; text-align: center; color: rgb(255, 228, 169); font-size: 4vw; text-shadow: rgba(0, 0, 0, 0.8) 1px 1px 1px;">
                        <span style="font-size: 3vw;"></span>
                        
                    <!-- 房间号 -->
                    <span style="font-size: 4vw;">房间号:{{roomInfo.room_number}}</span>


                    <!-- 二分杠 -->
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==1&&roomInfo.chip_type==0" style="font-size: 3.3vw;">筹码：5,10,20,30</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==1&&roomInfo.chip_type==1" style="font-size: 3.3vw;">筹码：10,20,30,50</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==1&&roomInfo.chip_type==2" style="font-size: 3.3vw;">筹码：20,30,50,80</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==1&&roomInfo.chip_type>=3" style="font-size: 3.3vw;">筹码：30,50,80,100</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==2&&roomInfo.score_type==1" style="font-size: 3.3vw;">上庄：500分</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==2&&roomInfo.score_type==1" style="font-size: 3.3vw;">上庄：1000分</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==2&&roomInfo.score_type==1" style="font-size: 3.3vw;">上庄：1500分</span>
                    <span ng-if="roomInfo.game_type==8&&roomInfo.bankermode==2&&roomInfo.score_type==1" style="font-size: 3.3vw;">上庄：无限制</span>
                    <!-- 鱼虾蟹 -->
                    <span ng-if="roomInfo.game_type==21" style="font-size: 3.3vw;">上限：{{roomInfo.upperlimit}}</span>
                    <!-- 红中麻将 -->
                    <span ng-if="roomInfo.game_type==6&&roomInfo.horse==0" style="font-size: 3.3vw;">抓马：不抓马</span>
                    <span ng-if="roomInfo.game_type==6&&roomInfo.horse==1" style="font-size: 3.3vw;">抓马：爆炸马</span>
                    <span ng-if="roomInfo.game_type==6&&roomInfo.horse>0" style="font-size: 3.3vw;">抓马：{{roomInfo.horse}}匹</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="waiting" style="display: none;">
            <div class="waitingBack"></div> 
            <div class="load4">
                <div class="loader">退出中...</div>
            </div>
        </div> 
        <div class="alertB" style="display: none;">
            <div class="alertBackgroundB"></div> 
            <img src="/files/images/index/alert1.png" style="display: none;"> 
            <img src="/files/images/index/alert2.png"> 
            <div class="alertTextB"></div>
        </div>
    </div>
</div>
       <!-- 个人中心 -->
    <div class="main  ng-hide" id="app-main" style="position: fixed; 100vw;height:100vh;overflow: scroll;margin: 0 auto; background: url({{img.bj}}) #000 no-repeat;background-size:100% 100%;" ng-show="bottomSelectId==3">

        <!-- 提示框 -->
        <div class="alert" id="valert" v-show="isShowAlert">
            <div class="alertBack"></div>
            <div class="mainPart">
                <div class="backImg">
                    <div class="blackImg"></div>
                </div>
                <div class="alertText">{{alertText}}</div>
                <div v-show="alertType==3">
                    <div class="buttonLeft" v-on:click="closeAlert">确定</div>
                    <div class="buttonRight" v-on:click="closeAlert">取消</div>
                </div>
                <div v-show="alertType==7">
                    <div class="buttonMiddle" v-on:click="closeAlert">确定</div>
                </div>
                <div v-show="alertType==8">
                </div>
                <div v-show="alertType==23">
                    <div class="buttonMiddle" v-on:click="finishBindPhone()">确定</div>
                </div>
                <div v-show="alertType==24">
                    <div class="buttonLeft" v-on:click="finishManageOn()">确定</div>
                    <div class="buttonRight" v-on:click="closeAlert">取消</div>
                </div>
            </div>
        </div>
    <div class="delete" v-show="showChangeGuideName">
        <div class="greyBack"></div> 
        <div class="box" style="height: 60vw;">
            <img v-on:click="changeGuideNameFunc()" src="/files/images/index/common_close.png" style="position: absolute; top: -3vw; right: -3vw; width: 10vw; height: 10vw;"> 
            <div class="title">修改公会名</div> 
            <input placeholder="请输入公会名称" v-model:value="appData.guideName" style="position: absolute; margin-top: 6vw; width: 70vw;"> 
            <div class="note" style="position: absolute; top: 34vw; display: none;"></div> 
            <div v-on:click="dealChangeGuideName()" class="button" style="position: absolute; top: 42vw; margin-top: 0px; background-color: rgb(109, 125, 212);">确定修改</div>
        </div>
    </div>

        <!-- 用户头像 -->
        <div v-bind:style="viewStyle.user">
            <div v-bind:style="viewStyle.userAvatar">
                <img v-bind:src="user.avatar" v-bind:style="viewStyle.userAvatarImg">
            </div>
            <div v-bind:style="viewStyle.userName">
                {{user.nickname}}
            </div>

  
            <img src="/files/images/activity/homepage_phone.png" style="position: absolute;left: 27vw; bottom: 2vw;width: 27vw;height: 8vw;"  v-on:click="clickPhone"  v-show="!isPhone">

            <div style="position: absolute;left: 27vw; bottom: 2vw;width: 40vw;height: 7vw;font-size: 2.2vh;color: rgb(64,112,251);" v-on:click="clickEditPhone" v-show="isPhone">
                {{phone}}&nbsp&nbsp修改
            </div>


            <div style="position: absolute;bottom: 5vw;right: 4vw;width: 24vw;height: 18vw;border-width: 0.1vh;border-radius: 0.5vh;" >
            <img onclick="copyCut()" src="/files/images/copy_id.png" style="position: absolute; bottom: 3vw; height: 14vw; width: 14vw; right: 3vw;">
            <div style="position: absolute;left: 4vw; bottom: -5vw;width: 40vw;height: 7vw;font-size: 2.2vh;color: rgb(255, 255, 255);">
			ID:{{userData.accountId}}
            	</div>
            </div>
        </div>

        <!-- 充值房卡 -->
        <div v-bind:style="viewStyle.syncRedpackage" ng-click="Wpay(1)">
            <img src="http://goss.fexteam.com/files/h5/index/rp_icon.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">房卡充值<font style="color:orange;font-size:11pt">（扫码支付）</font></p>
        </div>

        <!-- 发送红包记录 -->
        <div v-bind:style="viewStyle.sendRedpackage" ng-click="openShowSendCards()">
            <img src="http://goss.fexteam.com/files/images/center/p_sendCard1.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">发送房卡</p>
            <p v-bind:style="viewStyle.rcContent2">{{roomCard}}张</p>
        </div>
        <!-- 查看红包记录 -->
        <div v-bind:style="viewStyle.redpackage" v-on:click="showRedpackageRecord">
            <img src="http://goss.fexteam.com/files/images/center/p_sendList1.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">卡包记录</p>
        </div>

        <!-- 查看游戏记录 -->
        <div v-bind:style="viewStyle.myGameRoom"  v-on:click="toGameScore">
            <img src="http://goss.fexteam.com/files/h5/index/score_detail_1.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">游戏记录<font style="color:orange;font-size:11pt">（我参与的）</font></p>
        </div>

        <!-- 开房查询 -->
        <div id="myTeamInfo" v-bind:style="viewStyle.myTeamInfo" v-on:click="showMyRoom">
            <img src="http://goss.fexteam.com/files/h5/index/room_search_1.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">开房查询<font style="color:orange;font-size:11pt">（我创建的）</font></p>
        </div>
        
        <!-- 设置防伪码 -->
        <div id="myCodeInfo" v-bind:style="viewStyle.myCodeDiv" v-on:click="showMyCode">
            <img src="/files/images/activity/mycode.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">设置防伪码</p>
            <p v-bind:style="viewStyle.rcContent2">{{myCode}}</p>
        </div>

        <!-- 管理功能 -->
        <div v-bind:style="viewStyle.manage" >
            <img src="http://goss.fexteam.com/files/h5/index/team_manager_1.png" v-bind:style="viewStyle.rcIcon">
            <img src="/themes/wdfms/Public/img/activity/rc_group_close.png" v-bind:style="viewStyle.btnOnOff"  v-on:click="openManage" v-show="!userData.isManageOn">
            <img src="/themes/wdfms/Public/img/activity/rc_group_open.png"  v-bind:style="viewStyle.btnOnOff"  v-on:click="closeManage" v-show="userData.isManageOn">
            <p v-bind:style="viewStyle.rcContent">群主管理</p>
        </div>

        <div v-bind:style="viewStyle.emptyDiv">
    </div>
        <div v-bind:style="viewStyle.guideNameDiv" v-show="userData.isManageOn" v-on:click="changeGuideNameFunc()">
            <img src="/files/images/index/guide_name.png" v-bind:style="viewStyle.rcIcon">
            <img src="/files/images/activity/rc_icon_rightarrow.png" v-bind:style="viewStyle.rcArrow">
            <p v-bind:style="viewStyle.rcContent">公会名称</p>
            <p v-bind:style="viewStyle.rcContent2">{{userData.guideName}}</p>
    </div>
        <div v-bind:style="viewStyle.manageDiv" v-show="userData.isManageOn">
                <div v-if="userData.isGuideManager" style="position: absolute;left: 0vw;width: 25vw;height: 25vw;" v-on:click="clickNew">
                <img src="http://goss.fexteam.com/files/h5/index/team_invite_1.png" style="position: absolute;top: 4vw;left: 7.5vw;width: 10vw;height: 10vw;">
                <div style="position: absolute;top: 6vw;left: 24vw;width: 0.2vw;height: 12vw;background-color: rgb(155,142,224);"></div>
                <div style="position: absolute;bottom: 0;width: 100%;height: 10vw;line-height: 10vw;font-size: 2vh;text-align: center;color: white;">
                邀请函
                </div>
            </div>
            <div v-if="userData.isGuideManager" style="position: absolute;left: 25vw;width: 25vw;height: 25vw;" ng-click="openShowAddMember()">
                <img src="/files/images/activity/new_member.png" style="position: absolute;top: 4vw;left: 7.5vw;width: 10vw;height: 10vw;">
                <div style="position: absolute;top: 6vw;left: 24vw;width: 0.2vw;height: 12vw;background-color: rgb(155,142,224);"></div>
                <div style="position: absolute;bottom: 0;width: 100%;height: 10vw;line-height: 10vw;font-size: 2vh;text-align: center;color: white;">
                    添加成员
                </div>
            </div>
            <div v-if="userData.isGuideManager" style="position: absolute;left: 50vw;width: 25vw;height: 25vw;" v-on:click="clickGroupMember">
                <img src="/files/images/activity/members.png" style="position: absolute;top: 4vw;left: 7.5vw;width: 10vw;height: 10vw;">
                <div style="position: absolute;top: 6vw;left: 23vw;width: 0.2vw;height: 12vw;background-color: rgb(155,142,224);"></div>
                <div style="position: absolute;bottom: 0;width: 100%;height: 10vw;line-height: 10vw;font-size: 2vh;text-align: center;color: white;">
                    公会成员
                </div>
            </div>
            <div v-if="!userData.isGuideManager" style="position: absolute;left: 0vw;width: 25vw;height: 25vw;" v-on:click="clickGroupMember">
                <img src="/files/images/activity/members.png" style="position: absolute;top: 4vw;left: 7.5vw;width: 10vw;height: 10vw;">
                <div style="position: absolute;top: 6vw;left: 23vw;width: 0.2vw;height: 12vw;background-color: rgb(155,142,224);"></div>
                <div style="position: absolute;bottom: 0;width: 100%;height: 10vw;line-height: 10vw;font-size: 2vh;text-align: center;color: white;">
                    公会成员
                </div>
            </div>
        </div>
        

        <!-- 绑定手机号码 -->
        <div id="validePhone" class="v-hide" style="z-index:999" v-show="isShowBindPhone">
            <div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" v-on:click="hideBindPhone"></div>
            <div class="phoneFrame" style="position: fixed;z-index: 99;width: 80vw;max-width: 80vw; top: 50%; left: 50%;-webkit-transform:translate(-50%,-60%); background-color: #fff; text-align: center; border-radius: 8px; overflow: hidden;opacity: 1; color: white;">
                <div style="height: 2.2vw;"></div>
                <div style="padding: 1vw;font-size: 4vw; line-height: 5vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;" v-if="isPhone">
                    <img src="/files/images/common/cancel.png" style="width:8vw; height:8vw;top: 12vw;position: absolute;right:1vw;margin-left: -45px;margin-top: -45px;" v-on:click="closePage()"/>
                    {{phoneText}}
                </div>
                <div style="padding: 0vh;font-size: 3.5vw; line-height: 8vw; word-wrap: break-word;word-break: break-all;color: #000;background-color: white;" v-if="!isPhone">
                <img src="/files/images/common/cancel.png" style="width:8vw; height:8vw;top: 12vw;position: absolute;right:1vw;margin-left: -45px;margin-top: -45px;" v-on:click="closePage()"/>
                绑定手机号，防止房卡丢失。
                </div>
                <div style="height: 2.2vw;"></div>
                <div v-if="!(phone!=''&&password=='')" style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
                    <input  v-on:input="phoneChangeValue()" v-model="sPhone" type="number" name="phone" placeholder="输入手机号" style="padding:0 12px 0 12px;position: absolute;top:  2.5vw;left: 4vw;width: 48vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;">
                    <div id="authcode" v-on:click="getAuthcode()" style="position: absolute;top:  2.5vw;right: 4vw; width: 22vw;height: 10vw;line-height: 10vw;background-color: rgb(211,211,211);font-size: 3.5vw;border-radius: 0.5vh;color: white;">
                        {{authcodeText}}
                    </div>
                </div>
                <div v-if="!(phone!=''&&password=='')" style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
                    <input  v-model="sAuthcode" type="number" name="phone1" placeholder="输入验证码" style="padding:0 12px 0 12px;position: absolute;top: 1vw;left: 4vw;width: 72vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;">
                    
                </div>
            
                <div style="position: relative;height: 15vw;word-wrap: break-word;word-break: break-all;color: #000;background-color: white;border-top: solid;border-color: #e6e6e6;border-width: 0px;">
                    <input  v-model="sPassword" type="password" name="phone1" placeholder="输入6-18位英文或数字密钥" style="padding:0 12px 0 12px;position: absolute;top: 1vw;left: 4vw;width: 72vw;height: 11vw;line-height: 6.5vw;border-style: solid;border-width: 1px;border-radius: 0.5vh;border-color: #e6e6e6;font-size: 4vw;-webkit-appearance: none;">
                </div>
                <div style="height: 2.2vw;"></div>
                <div style="position: relative; left: 4vw;width: 72vw;line-height: 10vw; font-size: 4vw;display: flex;border-radius: 2vw;" v-on:click="bindPhone()">
                    <div v-if="!(phone!=''&&password=='')" style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;">立即绑定</div>
                    <div v-if="(phone!=''&&password=='')" style="display: block;-webkit-box-flex:1;flex: 1;text-decoration: none;-webkit-tap-highlight-color:transparent;position: relative;margin-bottom: 0;color: rgb(255,255,255);border-top: solid;border-color: #e6e6e6;border-width: 0px;background-color: rgb(64,112,251);border-radius: 1vw;">立即设置</div>
                </div>
                <div style="height:4vw;"></div>
            </div>
        </div>

        <div id="myCode" style="display:none;" v-show="isShowMyCode">
            <div class="master"></div>
            <div class="mycode">
                <div class="myclose" v-on:click="hideMyCode">×</div>
                <div class="codetitle">防伪码设置</div>
                <input type="text" class="codetxt" placeholder="输入1-6个数字,字母或汉字" v-model="sMyCode" name="myCode">
                <input type="button" class="codebtn" value="确认" v-on:click="saveMyCode()">
            </div>
        </div>
    
        <div style="display:none;" v-show="isShowMyAccount">
            <div class="master"></div>
            <div class="my-account">
                <div class="myclose" v-on:click="hideMyAccount">×</div>
                <div class="codetitle">将选择账号的卡转到当前账号</div>
                <div class="accountbody">
                <table width=100% align=center border=0 cellspacing=0 cellpadding=0 id="myAccount" class="fl">
                    <tr height=30 v-for="account in myAccounts">
                        <td width=10% align=center;><input type="radio" v-model="sMyAccount" :value="account.account_id" style="height:18px;width:18px;"/></td>
                        <td width=65%><span class="cB fs16 fl w hidd">{{account.nickname}}</span></td>
                        <td width=25% align=center><span class="cora fs16">{{account.ticket_count}}</span> 张</td>
                    </tr>
                </table>
                </div>
                <input type="button" class="accountbtn" value="确认同步" v-on:click="saveAyncCard()">
            </div>
        </div>
    </div>


	<!-- 发送房卡 -->
	<div id="tables-sendcards" class="ng-hide" ng-show="showSendCards==1" style="position: absolute; top: 56.16px; width: 100vw; height: 561.6px; overflow: scroll;">
        	<div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" ng-click="closeShowSendCards()"></div>
		<div class="box" style="height: 100vw; z-index: 99;">
			<img ng-click="closeShowSendCards()" src="/files/images/common_close.png" style="position: absolute; top: -3vw; right: -3vw; width: 10vw; height: 10vw;">
			<div class="title">发送房卡</div>
			<div style="margin-left: 10vw; color: rgb(214, 88, 5); font-size: 4vw;">
                    房卡：{{userInfo.roomCard}}张
    			</div>
    			<div style="margin-top: 4vw; height: 11vw; background-color: rgb(240, 240, 242); border-radius: 1.5vw; margin-left: 10vw; width: 70vw;">
    				<div style="position: absolute; height: 11vw; line-height: 11vw; color: gray; margin-left: 2vw; font-size: 4vw;">放入房卡</div>
    				<input id="sendCardsNum" style="position: absolute; margin-top: 0px; margin-left: 20vw; width: 43vw; height: 11vw; text-align: right;">
    				<div style="position: absolute; height: 11vw; line-height: 11vw; color: gray; right: 12vw; font-size: 4vw;">张</div>
			</div>
			<div class="note" style="position: absolute; top: 38vw; display: none;"></div>
			<input id="sendCardsAccountId" placeholder="请输入ID" style="position: absolute; margin-top: 6vw; width: 46vw;">
			<div ng-click="searchSendCards('sendCardsAccountId')" style="position: absolute; margin-top: 6vw; right: 10vw; width: 20vw; height: 11vw; line-height: 11vw; background-color: rgb(255, 181, 0); border-radius: 1.5vw; text-align: center; color: white; font-size: 3.6vw;">
	                    搜索
			</div>
			<div id="sendCardsNote" class="note" style="position: absolute; top: 55vw;display:none">账号不存在</div>
			<div ng-if="sendCardsResult!=false&&sendCardsResult['has']==true" class="info" style="position: absolute; top: 56vw; width: 80vw;">
				<img src={{sendCardsResult['avatar_url']}} style="position: absolute; width: 14vw; height: 14vw;">
				<div class="name" style="position: absolute; left: 14vw; height: 7vw; line-height: 7vw; overflow: hidden;">{{sendCardsResult["nickname"]}}</div>
				<div class="name" style="position: absolute; top: 7vw; left: 14vw; height: 7vw; line-height: 7vw; overflow: hidden;">ID：{{sendCardsResult["account_id"]}}</div>
			</div>
			<div ng-click="sendCardsFunc()" class="button" style="position: absolute; top: 82vw; margin-top: 0px; background-color: rgb(109, 125, 212);">确定发送</div>
		</div>
        </div>

	<!-- 添加成员 -->
	<div id="tables-addmember" class="ng-hide" ng-show="showAddMember==1" style="position: absolute; top: 56.16px; width: 100vw; height: 561.6px; overflow: scroll;">
        	<div class="phoneMask" style="position: fixed;z-index: 98;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.5);" ng-click="closeShowAddMember()"></div>
		<div class="box" style="height: 91vw;z-index:99;">
			<img ng-click="closeShowAddMember()" src="/files/images/common_close.png" style="position: absolute; top: -3vw; right: -3vw; width: 10vw; height: 10vw;">
			<div class="title">添加成员</div>
			<input id="sendCardsAccountId2" placeholder="请输入ID" style="position: absolute; margin-top: 6vw; width: 46vw;">
			<div ng-click="searchSendCards('sendCardsAccountId2')" style="position: absolute; margin-top: 6vw; right: 10vw; width: 20vw; height: 11vw; line-height: 11vw; background-color: rgb(255, 181, 0); border-radius: 1.5vw; text-align: center; color: white; font-size: 3.6vw;">
                    搜索
    			</div>
    			<div id="addMemberNote" class="note" style="position: absolute; top: 34vw;display:none">请先搜索用户</div>
    			<div ng-if="sendCardsResult!=false&&sendCardsResult['has']==true" class="info" style="position: absolute; top: 35vw; width: 80vw;">
				<img src={{sendCardsResult['avatar_url']}} style="position: absolute; width: 14vw; height: 14vw;">
    				<div class="name" style="position: absolute; left: 14vw; height: 7vw; line-height: 7vw; overflow: hidden;">{{sendCardsResult["nickname"]}}</div>
    				<div class="name" style="position: absolute; top: 7vw; left: 14vw; height: 7vw; line-height: 7vw; overflow: hidden;">ID：{{sendCardsResult["account_id"]}}</div>
    			</div>
    			<input id="addMemberName" ng-if="sendCardsResult!=false&&sendCardsResult['has']==true" placeholder="请输入备注" style="position: absolute; top: 54vw; width: 70vw;">
    			<div ng-click="addMemberFunc()" class="button" style="position: absolute; top: 75vw; margin-top: 0px; background-color: rgb(109, 125, 212);">确定添加</div>
		</div>
        </div>

  <style>
.pointBag{}
.pointBox{
    filter:alpha(opacity=50); /*IE*/
    -moz-opacity:50; /*FireFox*/ 
    opacity:0.5;
    background:#000;
    border-radius:8px;
    width:160px;height:160px;position:fixed;top:50%;left:50%;margin-left:-80px;margin-top:-80px;
    z-index:999;
}
.pointIcon{
    position:fixed;top:50%;left:50%;margin-left:-42px;margin-top:-70px;z-index:999;
}
.pointTxt{
    position:fixed;top:50%;left:50%;text-align:center;color:#fff;font-size:18px; margin-top:30px; width:160px;margin-left:-80px;z-index:999;
}
.pointIcon2{
    position:fixed;top:50%;left:50%;float:left;margin-left:-50px;margin-top:-70px;z-index:999;
}
</style>
  <script type="text/javascript">
    //复制链接
    var pointIcon1="/files/images/copy/alert1.png" ;
    var pointIcon2="/files/images/copy/alert2.png" ;
    
    var shareTitle = "<?php echo ($user["nickname"]); ?>的麒麟ID:" ;
    var endvar = "&v="+randomString(32);
    var shareText = shareTitle+"<?php echo ($user["id"]); ?>";
    //var shareText ="<?php echo ($user["id"]); ?>";
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
    var copyCut = function(){
        if(navigator.userAgent.match(/(iPhone|iPod|iPad);?/i)){
            window.getSelection().removeAllRanges();//这段代码必须放在前面否则无效
            //var Url2=document.getElementById("biaoios");//要复制文字的节点
            const targetText = document.createTextNode(shareText);
            document.body.appendChild(targetText);
            var range = document.createRange();
            // 选中需要复制的节点
            range.selectNode(targetText);
            // 执行选中元素
            window.getSelection().addRange(range);
            // 执行 copy 操作
            if(document.execCommand('copy')){
                document.execCommand('copy');
                showPointReulst(1)
            }else showPointReulst(2);
            // 移除选中的元素
            window.getSelection().removeAllRanges();
            $(targetText).remove();
        }else{
            const input = document.createElement('input');
            document.body.appendChild(input);
            input.setAttribute('value', shareText);
            input.select();
            if (document.execCommand('copy')) {
                document.execCommand('copy');
                showPointReulst(1)
            }else showPointReulst(2);
            $(input).remove();
        }
    }
    
    var showPointReulst = function(type){ 
        $(".pointBag").remove();
        var htm="";
        if(type==1){
            htm = "<div class='pointBag'><div class='pointBox'></div><img src='"+pointIcon1+"' class='pointIcon'/><span class='pointTxt'>复制成功</span></div>";
        }else if(type==2){
            htm = "<div class='pointBag'><div class='pointBox'></div><img src='"+pointIcon2+"' class='pointIcon2'/><span class='pointTxt'>复制失败</span></div>";
        }else if(type==3){
            htm = "<div class='pointBag'><div class='pointBox'></div><img src='"+pointIcon1+"' class='pointIcon2'/><span class='pointTxt'>操作成功</span></div>";
        }else if(type==4){
            htm = "<div class='pointBag'><div class='pointBox'></div><img src='"+pointIcon2+"' class='pointIcon2'/><span class='pointTxt'>操作失败</span></div>";
        }
        $("body").append(htm);
        setTimeout(function(){$(".pointBag").remove();},1200)
    }
    
</script>
<script>
    wx.config({
        debug: false,
        appId: "wxdc850fa9430b1eb2",
        timestamp: "1549021493",
        nonceStr:"713bef81bbbabcb3b8c5403260dc1130",
        signature: "fc0b07ced851f3336909efc3a5784295efed0643",
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'hideMenuItems'
        ]
    });
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        // 通过下面这个API隐藏右上角按钮
        WeixinJSBridge.call('hideOptionMenu');
    });
</script>
</body>

<script>
var temporaryRepair = function (){
    var currentPosition,timer;
    var speed=1;//页面滚动距离
    timer = setInterval(function(){
        currentPosition=document.documentElement.scrollTop || document.body.scrollTop;
        currentPosition-=speed; 
        window.scrollTo(0,currentPosition);//页面向上滚动
        currentPosition+=speed; //speed变量
        window.scrollTo(0,currentPosition);//页面向下滚动
        clearInterval(timer);
    },1)
}
document.addEventListener("blur", function( event ) { 
    temporaryRepair(); 
}, true);
// 返回，强制刷新
window.onpageshow = function(event) {
      if (event.persisted) {
            window.location.reload()
      }
};
</script>
<!--新增v181207end-->

<script type="text/javascript" src="/files/js/roomcard/roomcard_vue_ks-1-30.js"></script>
</html>