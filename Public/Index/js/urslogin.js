$(function () {
	window.ursConfig = {
			productkey: '1dd143c50baa32228d62bd2fde007b4d',
			swidth: '217',
		    product : 'yyd',                //【必须】使用的产品ID，如urs
		    promark : 'BHHeXmu',            //【必须】【申请】申请的组件ID，被分派ID
		    host : 'yuedu.163.com',        //【必须】所在的域名
		    isHttps : 1,                    //【可选】是否使用HTTPS协议，默认为1.详细请看下表。    
		    includeBox : 'login-container', //【可选】内嵌模式需要插入的Dom ID
		    skin : 1,                       //【可选】皮肤：0、空=灰，1=红,2=橙，3=绿,4=蓝，其他样式可使用【cssDomain+cssFiles】自定义实现，此时此参数失效，相关样式须在自定义样式内实现
		    page : 'login',                 //【可选】首屏，注册:register，登录:login，根据实际情况填入，
		    prdomain : '',          //【可选】当产品需要指定登入域名时传入预填域名如@163.com邮箱
		    placeholder : {account:'邮箱帐号(含手机邮箱)',pwd:'6-16位密码，区分大小写'},//【可选】用于更换相应placeholder的提示语
		    needUnLogin : 1 ,               //【可选】是否需要十天免登按钮，默认为0
		    defaultUnLogin:0,               //【可选】十天免登初始化状态，默认为0
		    needQrLogin : 0 ,               //【可选】是否需要二维码登录，默认为0
		    toolName : "邮箱大师",      //【可选，依赖参数needQrLogin】自定义扫码工具，默认：邮箱大师App
		    toolUrl : "http://mail.163.com/dashi/?from=urs",
		                                    //【可选，依赖参数needQrLogin】 自定义扫码工具的下载地址，默认：http://mail.163.com/dashi/?from=urs
		    needPrepare: 1,                 //【可配】是否需要预加载（针对弹框式，在产品方DOM加载完成后初始化加载组件先行资源，保证登录响应显示时间在50ms内，会有一定的带宽占用，按需配置）
		    needanimation : 1,              //【可选】 是否需要反转动画,默认为1，0无动画
		    coverBackground : "background:-webkit-radial-gradient(center,rgba(0,0,0,0.3),#000 75%);",
		                                                    //【可选】 弹框模式下，自定义覆盖层的背景色，此实例值为渐变样式，部分样式低版本浏览器无效果，此值将被传入ID为'x-discover'遮罩层的样式内
		    iframeShowAnimation : "showAnimation.5s",       //【可选】弹窗模式下，自定义弹窗弹出动画，此实例值为渐大样式，“showAnimation”为自定义动画的名字，低版本浏览器无效果
		    single : 1,                     //【可选】是否只用注册、登录中一个模块，1是，0否；
		                                    //【注】page='login'&single=1,注册按钮为跳转至reg.163.com
		                                    //【注】page='register'&single=1,无登录按钮
		    notFastReg : 0,                 //【可选】和single功能相似，相当于single=1
		    regUrl : 'http://reg.163.com/reg/reg0_new.jsp?product=easyread&amp;url=http://yuedu.163.com/index.do', 
		                                    //【可选，依赖single/notFastReg】产品自定义注册入口，需要自定义注册重定向的页面时，首先须single制1或notFastReg制1
		    oauthLoginConfig : [],                              //【可选】 三方登录，格式如上，name表示名，仅限【yixin,qq,weixin,weibo,renren】,url为相应三方登录地址，如有产品需要其他三方可通过【嵌入组合模式】实现
		    terms : [
		        { 'name' : '《自定义服务条款01》', 'url' : 'http://reg.163.com/agreement.shtml' },
		        { 'name' : '《自定义服务条款02》', 'url' : 'http://reg.163.com/agreement.shtml' }
		    ],                              //【注册页必选】 自定义服务条款和协议，可设置多个，格式如上，如不传则为默认设置，注意具有法律效益的服务条款必须传入
		    cssDomain : 'http://yuedust.yuedu.126.net/assets/css/',
		    // cssDomain : 'http://test.yuedu.bst2.126.net/assets/css/', 
		                                                    //【可选】 自定义样式的地址，注意：必须是绝对路径，即含有完整的‘http：//’‘https://’协议头
		    cssFiles : 'ursLogin.css?v5',                   //【绑定cssDomain】 自定义样式文件:使用样式覆盖方式进行样式自定义
		    frameSize : {'width':250,'height':230},         //【可选】 当使用自定义样式窗体在加载后宽高改变导致初始化位置不居中，会出现漂移现象，传入框体加载后的实际宽高，是为了在初始化时保证框体居中，而非改变窗体大小
		    logincb : function(_username,_isOther){
            	// alert('用户名:'+_username);
            	// alert('是否第三方登录:' + _isOther);
            	if(typeof(targetUrl) != 'undefined'){
            		location.href = targetUrl;
            	}else{
            		location.reload();
            	}
            },                 //【可选】登录成功后回调，也可使用外部注入方式
		    regcb : function(username){},                   //【可选】注册成功后回调，也可使用外部注入方式
		    errMsg : ''              //【可选】可在初始化的时候加载自定义的错误，比如“你的登录状态失效，请重新登录”
		 
		};
	//20160825 将之前的进入官网即开始请求urs登录组件改为点击登录才开始请求，故注释以下代码
	// var ursLogin = new URS(ursConfig);
	var refreshPage = function () {
		location.reload();
	}

	window.YD = {};
	YD.popTip = function(str) {
		var structure = '<div id="J_FIXED" class="m-tipss" style="display:none;"><div id="J_TIPS" class="inner"></div></div>';
		if($('#J_FIXED').length == 0){
			$('body').prepend(structure);
		}
		var _tip = str, box = $('#J_TIPS');
		box.empty().html(_tip);
		box.parent().fadeIn(300).delay(3000).fadeOut(300);
	};
	/*******************打开弹窗********************/
	YD.openLayer = function(_id, mask){
		var box = $(_id),bWidth = box.width(), bHeight = box.height(), winWidth = $(window).width(),winHeight = $(window).height();
		var maskSwitch = mask == 'off' ? 'off' : 'on';
		setTimeout(function(){
			if (maskSwitch == 'on') {
				YD.createMask();
			}
		},60);
		var st = $(document).scrollTop(), toff = (winHeight - bHeight)/2 + st, loff = (winWidth - bWidth)/2;
		box.css({'top':toff,'left':loff,'z-index':8999}).show();
		$('.j-close', box).unbind().click(function(e){
			e.preventDefault();
			box.trigger('hide');
			box.hide();
			if($('.m-mask').length !== 0){
				$('.m-mask').hide();
			}
		});
	}
	/*******************浮层遮罩********************/
	YD.createMask = function(){
		if($('.m-mask').length === 0){
			var mask = $('<div class="m-mask" style="display:block;"></div>');
			mask.height($(document).height());
			//mask.width($('body').width());
			mask.insertAfter($('.g-doc'));
		}else{
			$('.m-mask').eq(0).height($(document).height()).show();
		}
	};

	window.mobiReg = {};
	mobiReg.callbackReg = function(code){
		switch (code){
			case 0 :
			refreshPage();
			break;

			case -1005 :
			YD.popTip('密码不匹配，请重新输入密码');
			break;

			case 900 :
			YD.popTip('手机验证码失效，请重新发送验证码');
			break;

			case 901 :
			YD.popTip('手机验证码错误，请检查');
			break;

			case 400 :
			YD.popTip('此号码已注册，请直接登录');
			break;

			case 905 :
			YD.popTip('手机号码格式错误，请检查');
			break;

			default :
			YD.popTip('出错了，请稍后再试');
			break;
		}
	};
	mobiReg.callbackPass = function (code) {
		switch (code){
			case 0 :
			YD.popTip('密码修改成功');
			$('#login-layer').hide();
			location.reload();
			break;

			case -1005 :
			YD.popTip('密码不匹配，请重新输入密码');
			break;

			case 900 :
			YD.popTip('手机验证码失效，请重新发送验证码');
			break;

			case 901 :
			YD.popTip('手机验证码错误，请检查');
			break;

			case -1004 :
			YD.popTip('此号码尚未注册，请检查');
			break;

			case 905 :
			YD.popTip('手机号码格式错误，请检查');
			break;

			default :
			YD.popTip('出错了，请稍后再试');
			break;
		}
	}

	function YueduLogin(options) {
		this.eventBind();
		if(options){
			if(options.targetUrl){
				window.targetUrl = options.targetUrl;
			}
		}
	}

	YueduLogin.prototype.init = function() {

	};
	YueduLogin.prototype.showEmailLogin = function() {
		if(!$('#x-URS-iframe').length){
			$('#login-layer .content').html('<div class="m-loginwrap">\
									            <div class="m-login" id="login-container" style="width: 220px; height: 227px;"></div>\
									            <div class="m-loginswitch">\
									                <h6>其他帐号登录：</h6>\
									                <ul>\
									                    <li class="sj"><a><span class="login-icon"></span><div>手机号</div></a></li>\
									                    <li class="xl xllogin"><a><span class="login-icon"></span><div>新浪微博</div></a></li>\
									                    <li class="tx txlogin"><a><span class="login-icon"></span><div>腾讯微博</div></a></li>\
									                    <li class="wx wxlogin"><a><span class="login-icon"></span><div>微信</div></a></li>\
									                </ul>\
									            </div>\
									        </div>');
			ursLogin = new URS(ursConfig);
		}
		var loginLayer = $('#login-layer');
		loginLayer.attr('class', 'm-login-layer m-login-layer-wy').find('h4').text('网易邮箱登录');
		if($('.m-loginswitch li.wy').length){
			$('.m-loginswitch li.wy').attr('class', 'sj').find('div').text('手机号');
		}
		loginLayer.show();
	}
	YueduLogin.prototype.showMobileLogin = function() {
		var loginLayer = $('#login-layer'),
			htmlStr;
		if(loginLayer.find('#login-container').length){
			htmlStr = 	  '<iframe name="cellPhoneLoginTarget" style="display:none;">\
						     #document\
							   <html>\
							     <head></head>\
							     <body></body>\
							   </html>\
						   </iframe>\
						   <form action="https://yuedu.163.com/cellPhoneLogin.do" method="post" target="cellPhoneLoginTarget">\
						       <input type="hidden" name="operation" value="login">\
						       <div class="row" style="z-index:99999;margin-bottom:16px;">\
						           <div>\
						               <div class="cxt-input"><span class="ipt-wrap"><input type="text" name="cellPhone" class="ipt" autocomplete="off" placeholder="手机号码登录"></span></div>\
						           </div>\
						       </div>\
						       <div class="row"><span class="ipt-wrap"><input type="password" placeholder="登录密码" class="ipt" name="password"></span></div>\
						       <div class="row-3 errortip" style="display:none;"></div>\
						       <div class="row row-1">\
						           <input id="mobiLogCookie" type="checkbox" name="remember_me">\
						           <label for="mobiLogCookie" class="auto">两周内自动登录</label><a class="j-mobilereg" type="pw">忘记密码？</a></div>\
						       <div class="row j-checkarea" style="display:none;">\
						           <input type="text" placeholder="验证码" class="ipt checkcodeipt" name="checkCode"><img width="60" height="30" class="checkcodeimg"></div>\
						       <div class="row row-2">\
						           <button><span>登录</span></button>\
						       </div>\
						       <div class="row"><a class="wyt j-mobilereg">没有帐号？免费注册</a></div>\
						   </form>';
			$('.m-loginswitch li.sj').attr('class', 'wy').find('div').text('邮箱登录');
			loginLayer.find('#login-container').html(htmlStr);
		}else{
			htmlStr = 	  '<div class="m-loginwrap">\
						       <div class="m-login" id="login-container">\
								   <iframe name="cellPhoneLoginTarget" style="display:none;">\
								       #document\
									   <html>\
									     <head></head>\
									     <body></body>\
									   </html>\
								   </iframe>\
								   <form action="https://yuedu.163.com/cellPhoneLogin.do" method="post" target="cellPhoneLoginTarget">\
								       <input type="hidden" name="operation" value="login">\
								       <div class="row" style="z-index:99999;margin-bottom:16px;">\
								           <div>\
								               <div class="cxt-input"><span class="ipt-wrap"><input type="text" name="cellPhone" class="ipt" autocomplete="off" placeholder="手机号码登录"></span></div>\
								           </div>\
								       </div>\
								       <div class="row"><span class="ipt-wrap"><input type="password" placeholder="登录密码" class="ipt" name="password"></span></div>\
								       <div class="row-3 errortip" style="display:none;"></div>\
								       <div class="row row-1">\
								           <input id="mobiLogCookie" type="checkbox" name="remember_me">\
								           <label for="mobiLogCookie" class="auto">两周内自动登录</label><a class="j-mobilereg" type="pw">忘记密码？</a></div>\
								       <div class="row j-checkarea" style="display:none;">\
								           <input type="text" placeholder="验证码" class="ipt checkcodeipt" name="checkCode"><img width="60" height="30" class="checkcodeimg"></div>\
								       <div class="row row-2">\
								           <button><span>登录</span></button>\
								       </div>\
								       <div class="row"><a class="wyt j-mobilereg">没有帐号？免费注册</a></div>\
								   </form>\
							   </div>\
							   <div class="m-loginswitch">\
							       <h6>其他帐号登录：</h6>\
							       <ul>\
							           <li class="wy"><a><span class="login-icon"></span><div>邮箱登录</div></a></li>\
							           <li class="xl xllogin"><a><span class="login-icon"></span><div>新浪微博</div></a></li>\
							           <li class="tx txlogin"><a><span class="login-icon"></span><div>腾讯微博</div></a></li>\
							           <li class="wx wxlogin"><a><span class="login-icon"></span><div>微信</div></a></li>\
							       </ul>\
							   </div>\
						   </div>';
			loginLayer.find('.content').html(htmlStr);
		}
		
		loginLayer.attr('class', 'm-login-layer m-login-layer-mb').find('h4').text('手机号登录');
		loginLayer.show();
	};
	YueduLogin.prototype.sinaLogin = function() {
		window.open('https://api.weibo.com/oauth2/authorize?client_id=3626227865&response_type=code&state=&redirect_uri=http%3A%2F%2Fyuedu.163.com%2FweiboCallback.do%3Fsite%3D1%26from%3Dlogin%26fromHttps%3Dfalse&forcelogin=false&display=', 'sinaLoginWindow')
	};
	YueduLogin.prototype.tencentLogin = function() {
		window.open('https://open.t.qq.com/cgi-bin/oauth2/authorize?client_id=801078487&response_type=code&state=&redirect_uri=http%3A%2F%2Fyuedu.163.com%2FweiboCallback.do%3Fsite%3D4%26from%3Dlogin%26fromHttps%3Dfalse&forcelogin=false', 'tencentWeiboLoginWindow')
	};
	YueduLogin.prototype.weixinLogin = function() {
		window.open('https://open.weixin.qq.com/connect/qrconnect?response_type=code&state=&redirect_uri=http%3A%2F%2Fyuedu.163.com%2FweiboCallback.do%3Fsite%3D7%26from%3Dlogin%26fromHttps%3Dfalse&scope=snsapi_login&appid=wxc662b4239bb6644e', 'weixinLoginWindow')
	};
	YueduLogin.prototype.logout = function(target) {
		if (target) {
		  location.href = "http://" + window.location.host + "/logoutRedir.do?target=" + encodeURIComponent(target);
		} else {
		  location.href = "http://" + window.location.host + "/logout";
		}
	};
	YueduLogin.prototype.checkMobile = function() {
		var loginLayer = $('#login-layer');
		var layerTitle = '';
		var type = loginLayer.data('type');
		if(type == 'mobileForget'){
			layerTitle = '手机号找回密码';
		}else{
			layerTitle = '手机号注册';
		};
		
		loginLayer.attr('class', 'm-login-layer m-login-layer-mb');
		loginLayer.find('h4').text(layerTitle);
		loginLayer.find('.content').html('<div class="m-regwrap">\
											<div class="m-regstep-1">\
											  <p>需要验证你的手机号码，该号码不会对其他人公开</p>\
											  <p style="display: none;" id="mobileCodeTip"><em></em></p>\
											  <p class="check-code">\
											      <input type="text" class="text J_CheckCodeInput">\
											      <img src="/captcha.do">\
											  </p>\
											  <p class="inputpara">\
											    <input type="text" placeholder="请输入手机号码">\
											    <a class="next j-getma">获取验证码</a>\
											  </p>\
											</div>\
											<div class="m-regback">\
											  <a class="backtolog">&lt;&lt;返回登录</a>\
											</div>\
										  </div>');
	};
	YueduLogin.prototype.eventBind = function() {
		var self = this;

		self.errorCode = [];
		self.errorCode['-1001'] = '对不起，您的验证码过期。';
		self.errorCode['-1002'] = '对不起，您的验证码无效。';
		self.errorCode['-1003'] = '对不起，此号码已注册。';
		self.errorCode['-1004'] = '对不起，此号码尚未注册。';
		self.errorCode['-1005'] = '对不起，您的密码错误。';
		self.errorCode['-1'] = '对不起，您的图形验证码错误。';
		self.errorCode['900'] = '对不起，您的手机验证码失效。';
		self.errorCode['901'] = '对不起，您的手机验证码错误。';
		self.errorCode['902'] = '对不起，您的短信请求次数超过限制。';
		self.errorCode['905'] = '对不起，您的手机号码格式错误。';
		self.errorCode['-769'] = '参数错误。';

		var loginLayer = $('#login-layer');

		var startTimer = function () {
			var timeRemain = 59;
			self.Timer = setInterval(function () {
				var timeToShow = '';
				if(timeRemain > 9){
					timeToShow = '00:' + timeRemain;
				}else{
					timeToShow = '00:0' + timeRemain;
				}
				$('.m-regwrap .timer').text(timeToShow);
				timeRemain--;
				if(timeRemain < 0) {
					$('.j-ReGetma').removeClass('blocked');
					clearInterval(self.Timer);
				}
			}, 1000)
		}
		//关闭按钮
		loginLayer.on('click', 'a.j-close', function () {
			loginLayer.hide();
		})
		//6个登录方式
		loginLayer.on('click', 'li.sj', function () {
			self.showMobileLogin();
			$(this).attr('class', 'wy').html('<a><span class="login-icon"></span><div>邮箱登录</div></a>')
		}).on('click', 'li.wy', function () {
			self.showEmailLogin();
			$(this).attr('class', 'sj').html('<a><span class="login-icon"></span><div>手机号</div></a>')
		}).on('click', 'li.xl', function () {
			self.sinaLogin();
		}).on('click', 'li.tx', function () {
			self.tencentLogin();
		}).on('click', 'li.wx', function () {
			self.weixinLogin();
		});

		//手机登录中的忘记密码按钮
		loginLayer.on('click', '.j-mobilereg[type="pw"]', function () {
			loginLayer.data('type', 'mobileForget');
			self.checkMobile();
		})
		//手机号注册按钮
		loginLayer.on('click', '.wyt.j-mobilereg', function () {
			loginLayer.data('type', 'mobileReg');
			self.checkMobile();
		})
		//返回登录按钮
		loginLayer.on('click', '.backtolog', function () {
			self.showMobileLogin();
		})
		
		//获取验证码按钮
		loginLayer.on('click', '.j-getma', function () {
			if($(this).hasClass('disable')) return;
			var phoneNumber = $('.inputpara input').val();
			var code = $('.J_CheckCodeInput').val();
			if(code.length < 4){
				$('#mobileCodeTip em').text('请输入如图所示的验证码')
				$('#mobileCodeTip').show();
			}else if(phoneNumber.length != 11 || phoneNumber[0] != '1'){
				$('#mobileCodeTip em').text('请输入正确的手机号码')
				$('#mobileCodeTip').show();
			}else{
				loginLayer.data('phoneNumber', phoneNumber);
				/** @type {number} 1:手机号注册，2:手机用户密码重置 */
				var type = loginLayer.data('type') === 'mobileReg' ? 1 : 2;
				$.ajax({
					url: '/cellPhoneAccount.do',
					type: 'POST',
					data: {
						operation : 'verifyCode',
						type: type,
						cellPhone: phoneNumber,
						code: code
					},
					success: function (response) {
						if(response.resultCode === 0){
							var htmlStr =  '<p><span>已经向手机号</span><span>'+ phoneNumber +'</span><span>发送验证短信</span></p>\
										    <p style="display:none;" id="mobileCodeTip"><em></em></p>\
										    <p class="inputpara">\
										        <input type="text" placeholder="请输入验证码"><a class="next j-sendma">下一步</a>\
										    </p>\
										    <p style="margin:10px 0 0 0;">\
										    	<a class="link changecell">选择其他手机号码</a><span class="sep">|</span><a class="link j-ReGetma blocked">重新获取验证码</a><span class="timer">00:60</span>\
										    </p>'
							$('.m-regstep-1').html(htmlStr);
							startTimer();
						}else{
							$('#mobileCodeTip em').text(self.errorCode[response.resultCode]);
							$('#mobileCodeTip').show();
							if(response.resultCode === -1){
								$('.check-code img').trigger('click');
								$('.J_CheckCodeInput').val('').focus();
							}
						}
					},
					error: function () {
						
					}
				})
			}
		})
		//重新获取验证码
		loginLayer.on('click', '.j-ReGetma', function () {
			var link = $(this);
			if(!link.hasClass('blocked')){
				link.addClass('blocked');
				var type = loginLayer.data('type') === 'mobileReg' ? 1 : 2;
				var phoneNumber = loginLayer.data('phoneNumber');
				$.ajax({
					url: '/cellPhoneAccount.do',
					type: 'POST',
					data: {
						operation : 'verifyCode',
						type: type,
						cellPhone: phoneNumber
					},
					success: function (response) {
						if(response.resultCode === 0){
							startTimer();
						}else{
							$('#mobileCodeTip em').text(self.errorCode[response.resultCode]);
							$('#mobileCodeTip').show();
						}
					},
					error: function () {
						
					}
				})
			}
		})
		//选择其他手机号码
		loginLayer.on('click', '.changecell', function () {
			if(self.Timer) clearInterval(self.Timer);
			self.checkMobile();
		})
		//输入验证码的下一步按钮
		loginLayer.on('click', '.next.j-sendma', function () {
			var verifyCode = $('.inputpara input').val();
			var type = loginLayer.data('type') === 'mobileReg' ? 1 : 2;
			var phoneNumber = loginLayer.data('phoneNumber');
			
			$.ajax({
				url: '/cellPhoneAccount.do',
				type: 'POST',
				data: {
					operation: 'checkCode',
					type: type,
					cellPhone: phoneNumber,
					verifyCode : verifyCode
				},
				success: function (response) {
					if(response.resultCode === 0){
						var signature = response.signature;
						var cellPhone = response.cellPhone;
						var verifyCode = response.verifyCode;
						if(type === 1){
							//注册
							var htmlStr =   '<div>\
										        <iframe name="cellPhoneRegTarget" style="display:none;"></iframe>\
										        <form id="cellPhoneRegForm" action="https://yuedu.163.com/cellPhoneAccount.do" method="post" target="cellPhoneRegTarget">\
										            <div class="m-regstep-2">\
										                <input type="hidden" name="operation" value="register">\
										                <input type="hidden" name="cellPhone" value="'+ cellPhone +'">\
										                <input type="hidden" name="verifyCode" value="'+ verifyCode +'">\
										                <input type="hidden" name="signature" value="'+ signature +'">\
										                <div>\
										                    <p><span>设置昵称</span><em class="j-warning0" style="display: none;">昵称长度2-15字符</em></p>\
										                    <p>\
										                        <input class="nickname" type="text" placeholder="请输入2-15个字的昵称" name="nickName">\
										                    </p>\
										                    <p>性别</p>\
										                    <p><span class="gender" style="margin:0 90px 0 0;"><input type="radio" name="gender" value="1" id="male" checked=""><label for="male">男</label></span><span class="gender"><input type="radio" name="gender" value="0" id="female"><label for="female">女</label></span></p>\
										                </div>\
										                <div>\
										                    <p><span>设置密码</span><em class="j-warning1" style="display:none;">密码长度不少于6位</em></p>\
										                    <p>\
										                        <input class="pw pw-f" type="password" placeholder="不少于6位" name="password">\
										                    </p>\
										                    <p><span>确认密码</span><em class="j-warning2" style="display:none;">两次密码不一致</em></p>\
										                    <p>\
										                        <input class="pw pw-s" type="password" placeholder="不少于6位" name="passwordConfirm">\
										                    </p>\
										                </div>\
										                <p>\
										                    <a class="done j-done-1">完成</a>\
										                </p>\
										                <p><em class="reg-result" style="display:none;"></em></p>\
										            </div>\
										        </form>\
										    </div>\
										    <div class="m-regback"><a class="backtolog">&lt;&lt;返回登录</a></div>';
							$('.m-regwrap').html(htmlStr);

							var regFormValid = {
								nickname: false,
								password1: false,
								password2: false
							} 

							$('#cellPhoneRegForm .nickname').on('input propertychange', function () {
								var target = $(this);
								var inputVal = target.val();
								if(inputVal.length < 2 || inputVal.length > 15){
									$('em.j-warning0').show();
								}else{
									$('em.j-warning0').hide();
									regFormValid.nickname = true;
								}
							})
							$('#cellPhoneRegForm .pw-f').on('input propertychange', function () {
								var target = $(this);
								var inputVal = target.val();
								if(inputVal.length < 6){
									$('em.j-warning1').show();
								}else{
									$('em.j-warning1').hide();
									regFormValid.password1 = true;
								}
							})
							$('#cellPhoneRegForm .pw-s').on('input propertychange', function () {
								var target = $(this);
								var inputVal = target.val();
								if(inputVal !== $('.pw-f').val()){
									$('em.j-warning2').show();
								}else{
									$('em.j-warning2').hide();
									regFormValid.password2 = true;
								}
							})
							$('#cellPhoneRegForm .j-done-1').on('click', function () {
								if(regFormValid.nickname && regFormValid.password1 && regFormValid.password2){
									$('#cellPhoneRegForm').submit();
								}
							})
						}else{
							//重置密码
							var htmlStr =  '<div>\
										        <iframe name="cellPhoneRegTarget" style="display:none;"></iframe>\
										        <form id="cellPhoneRepwdForm" action="https://yuedu.163.com/cellPhoneAccount.do" method="post" target="cellPhoneRegTarget">\
										            <div class="m-regstep-2">\
										                <input type="hidden" name="operation" value="modifyPassword">\
										                <input type="hidden" name="cellPhone" value="'+ cellPhone +'">\
										                <input type="hidden" name="verifyCode" value="'+ verifyCode +'">\
										                <input type="hidden" name="signature" value="'+ signature +'">\
										                <div>\
										                    <p><span>设置密码</span><em class="j-warning1" style="display:none;">密码长度不少于6位</em></p>\
										                    <p>\
										                        <input class="pw pw-f" type="password" placeholder="不少于6位" name="password">\
										                    </p>\
										                    <p><span>确认密码</span><em class="j-warning2" style="display:none;">两次密码不一致</em></p>\
										                    <p>\
										                        <input class="pw pw-s" type="password" placeholder="不少于6位" name="passwordConfirm">\
										                    </p>\
										                </div>\
										                <p>\
										                    <a class="done j-done-1" disabled="">完成</a>\
										                </p>\
										                <p><em class="reg-result" style="display:none;"></em></p>\
										            </div>\
										        </form>\
										    </div>\
										    <div class="m-regback"><a class="backtolog">&lt;&lt;返回登录</a></div>';
							$('.m-regwrap').html(htmlStr);

							var changePwdFormValid = {
								password1: false,
								password2: false
							} 

							$('#cellPhoneRepwdForm .pw-f').on('input propertychange', function () {
								var target = $(this);
								var inputVal = target.val();
								if(inputVal.length < 6){
									$('em.j-warning1').show();
								}else{
									$('em.j-warning1').hide();
									changePwdFormValid.password1 = true;
								}
							})
							$('#cellPhoneRepwdForm .pw-s').on('input propertychange', function () {
								var target = $(this);
								var inputVal = target.val();
								if(inputVal !== $('.pw-f').val()){
									$('em.j-warning2').show();
								}else{
									$('em.j-warning2').hide();
									changePwdFormValid.password2 = true;
								}
							})
							$('#cellPhoneRepwdForm .j-done-1').on('click', function () {
								if(changePwdFormValid.password1 && changePwdFormValid.password2){
									$('#cellPhoneRepwdForm').submit();
								}
							})
						}
						
					}else{
						$('#mobileCodeTip em').text(self.errorCode[response.resultCode]);
						$('#mobileCodeTip').show();
					}
				}
			})
		})
		//刷新图形验证码
		loginLayer.on('click', '.check-code img', function () {
			$(this).attr('src', '/captcha.do?'+new Date().getTime());
		})
	};
	window.YueduLogin = YueduLogin;
	/**
	 * 兼容老的登录函数
	 * @method login163
	 * @deprecated 请勿在新页面中使用
	 */
	window.login163 = function (targetUrl) {
	  var yueduLogin = new YueduLogin({ targetUrl: targetUrl });
	  yueduLogin.showEmailLogin();
	};
	/**
	 * 兼容老的退出函数
	 * @method log163out
	 * @deprecated 请勿在新页面中使用
	 */
	window.log163out = function (target) {
	  var yueduLogin = new YueduLogin();
	  yueduLogin.logout(target);
	};

	//手机号登录回调，在cellPhone登录模板中用到
	var mobileCallback = function(result) {
		targeturl = $("input[name^='loginTargetUrl']");
		if(result === 'success'){
			if(targeturl.length > 0 && targeturl.val().length > 0){
				window.location.href = targeturl.val();
			}else{
				refreshPage();
			}
		} else if(result === 'notRegistered') {
			$('#login-container .errortip').text('手机号未注册').show();
		} else if(result === 'authenticationFailed') {
			$('#login-container .errortip').text('密码错误').show();
		} else if(result === 'notRegisteredNeedCode') {
			$('#login-container .errortip').text('手机号未注册').show();
			refreshCheckCode();
		} else if(result === 'authFailNeedCode') {
			$('#login-container .errortip').text('密码错误').show();
			refreshCheckCode();
		} else if(result === 'errorCaptcha') {
			$('#login-container .errortip').text('验证码错误').show();
			refreshCheckCode();
		} else {
			$('#login-container .errortip').text('错误').show();
		}
	}

	function refreshCheckCode() {
		if ($(".j-checkarea .checkcodeimg").length) {
			$(".j-checkarea .checkcodeimg").attr("src", "/captcha.do?d=" + (new Date()).getTime());
		} else {
			$(".j-checkarea").append('<img src="/captcha.do?d=' + (new Date()).getTime() +'" width="60" height="30" class="checkcodeimg"/>');
		}
		$(".j-checkarea").show();
	}

	//第三方登录回调中用到，weiboAuthorized.ftl中
	var externalTempLogin = function(str){
		$('body').append(innerHTML);
		var tip = $('#J_NickTip');
		if(str){
			$('#J_NickIpt').val(str);
		}
		eventBind();
		var logbox = document.getElementById('$_qLoginDivNew');
		if(logbox) logbox.style.zIndex = 4999;
		YD.openLayer('#J_NickName');
	};

	var externalFormalLogin = function(){
		var	targeturl = $("input[name^='loginTargetUrl']");
		if(targeturl.length > 0 && targeturl.val().length > 0){
			window.location.href = targeturl.val();
		}else{
			refreshPage();
		}
	}

	YD.Header = {};
	YD.Header.mobileCallback = mobileCallback;
	YD.Header.externalTempLogin = externalTempLogin;
	YD.Header.externalFormalLogin = externalFormalLogin;
})

/* 统一登陆字段 cms页用来判断是否登陆*/
+function() {
	var _info = {
        isLogin: !1,
        userId: null
	};
	var _p_info = $.cookie("P_INFO");
	var _s_info = $.cookie("S_INFO");
  	if(_p_info){
    	_p_info = _p_info.split("|");
    	_info.userId = _p_info[0];
    	if(_p_info[2] == 1|| _p_info[2] == 0 && _s_info) _info.isLogin=!0
  	}
	window.G_USER = _info;
}();
