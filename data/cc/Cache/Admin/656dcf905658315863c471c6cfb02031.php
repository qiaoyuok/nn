<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?php echo L('ADMIN_CENTER');?></title>
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta name="robots" content="noindex,nofollow">
		<link href="/admin/themes/simplebootx/Public/assets/css/admin_login.css" rel="stylesheet" />
		<style>
			#login_btn_wraper{
				text-align: center;
			}
			#login_btn_wraper .tips_success{
				color:#fff;
			}
			#login_btn_wraper .tips_error{
				color:#DFC05D;
			}
			#login_btn_wraper button:focus{outline:none;}
		</style>
		<script>
			if (window.parent !== window.self) {
					document.write = '';
					window.parent.location.href = window.self.location.href;
					setTimeout(function () {
							document.body.innerHTML = '';
					}, 0);
			}
		</script>
		
	</head>
<body>
	<div class="wrap">
		<h1><a>管理中心</a></h1>
		<form method="post" name="login" action="<?php echo U('public/dologin');?>" autoComplete="off" class="js-ajax-form">
			<div class="login">
				<ul>
					<li>
						<input class="input" id="js-admin-name" name="username" type="text" placeholder="<?php echo L('USERNAME_OR_EMAIL');?>" title="<?php echo L('USERNAME_OR_EMAIL');?>" value="<?php echo cookie('admin_username');?>" data-rule-required="true"  data-msg-required=""/>
					</li>
					<li>
						<input class="input" id="admin_pwd" type="password" name="password" placeholder="<?php echo L('PASSWORD');?>" title="<?php echo L('PASSWORD');?>" data-rule-required="true"  data-msg-required=""/>
					</li>
					<!--<li class="verifycode-wrapper">
						<?php echo sp_verifycode_img('length=4&font_size=20&width=248&height=42&use_noise=1&use_curve=0','style="cursor: pointer;" title="点击获取"');?>
					</li>
					<li>
						<input class="input" type="text" name="verify" placeholder="<?php echo L('ENTER_VERIFY_CODE');?>" />
					</li>-->
				</ul>
				<div id="login_btn_wraper">
					<button type="submit" name="submit" class="btn js-ajax-submit" data-loadingmsg="<?php echo L('LOADING');?>"><?php echo L('LOGIN');?></button>
				</div>
			</div>
		</form>
	</div>
	<br><br><br><br>
    <center><a href="<?php echo base64_decode('aHR0cDovL3d3dy5jeG5kLmNvbS8='); ?>" class="ax" target="_blank"><?php echo base64_decode('5pu05aSa57K+5ZOB5rqQ56CB6K+35LiK5rqQ56CB56S+5Yy6'); ?></a></center>
 	<center><a href="<?php echo base64_decode('aHR0cDovL3d3dy5jeG5kLmNvbS8='); ?>" class="ax" target="_blank"><?php echo base64_decode('d3d3LmN4bmQuY29t'); ?></a></center>
	<style>.ax{color:#fff;width:300px;height:180px;margin:200px:auto;color:#fff;font-size:18x;text-decoration: none;}</style>

<script>
var GV = {
    ROOT: "/",
    WEB_ROOT: "/",
    JS_ROOT: "public/js/"
};
</script>
<script src="/public/js/wind.js"></script>
<script src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/common.js"></script>
<script>
;(function(){
	document.getElementById('js-admin-name').focus();
})();
</script>
</body>
</html>