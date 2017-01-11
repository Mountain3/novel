<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <!-- start 页面直出变量 -->
    
    <!-- end 页面直出变量 -->
    <meta charset="UTF-8">
    <title>《斗破苍穹》_天蚕土豆著_玄幻_起点中文网</title>
    <meta name="description" content="斗破苍穹,斗破苍穹小说阅读.玄幻小说斗破苍穹由作家天蚕土豆创作,起点小说提供斗破苍穹首发最新章节及章节列表,斗破苍穹最新更新尽在起点中文网">
    <meta name="keywords" content="斗破苍穹">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    <meta name="baiduspider" content="all">
    <!-- <meta http-equiv="mobile-agent" content="format=wml; url=http://m.qidian.com/book/showbook.aspx?bookid=1209977">
    <meta http-equiv="mobile-agent" content="format=xhtml; url=http://m.qidian.com/book/showbook.aspx?bookid=1209977">
    <meta http-equiv="mobile-agent" content="format=html5; url=http://m.qidian.com/book/showbook.aspx?bookid=1209977"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit" />

    <script>
        document.domain = 'qidian.com';
    </script>
    <!-- start speedTimer[var, zero] -->
    <script>
        var speedTimer = [],
        speedZero = new Date().getTime();
    </script>
    <!-- end speedTimer[var, zero] -->

    <!-- start M与PC互跳 -->
    <script>
        function getCookie(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
            arr = document.cookie.match(reg);
            if (arr){
                return arr[2];
            }else {
                return null;
            }
        }
        // tf = 1 用户选择，留在PC
        if (getCookie('tf') != 1) {
            if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){
                window.location.href="//m.qidian.com/book/1209977";
            }
        }else{
            // M站设置了一年，这里fixed
            setCookie('tf', 1, 'qidian.com', '/', 0);
        }
    </script><!-- end M与PC互跳 -->

    <script>
    //遇到cookie tf=1的话留在本站，否则跳转移动站
    if (getCookie('tf') != 1) {
        //判断是以下设备后跳转到m站
        if (navigator.userAgent.match(/(iPhone|iPod|Android)/i)) {
            location.href = "//m.qidian.com"
        }
    }else {
        // M站设置了一年，这里fixed
        setCookie('tf', 1, 'qidian.com', '/', 0);
    }

    // start 防劫持
    //设置cookie
    function setCookie(name, value, domain, path, expires) {
        if(expires){
            expires = new Date(+new Date() + expires);
        }
        var tempcookie = name + '=' + escape(value) +
                ((expires) ? '; expires=' + expires.toGMTString() : '') +
                ((path) ? '; path=' + path : '') +
                ((domain) ? '; domain=' + domain : '');

        //Ensure the cookie's size is under the limitation
        if(tempcookie.length < 4096) {
            document.cookie = tempcookie;
        }
    }

    //获取cookie
    function getCookie(name) {
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

        if (arr = document.cookie.match(reg))

            return (arr[2]);
        else
            return null;
    }

    //创建并发送请求
    function createSender(url){
        var img = new Image();
        img.onload = img.onerror = function(){
            img = null;
        };
        img.src = url;
    };

    (function(){
        /*
         *防劫持逻辑所需参数在此处设置参数即可
         *cookieName:用于记录连续被劫持的次数，为防止死循环，cookie值为3以上则不进行url重置
         *cookieDomain:cookie所在的域
         *reportUrl:非连续性劫持时上报的接口地址【如无需上报，可不填】
         *reportUrl2：连续性劫持时上报的接口地址【如无需上报，可不填】
         */
        var cookieName = 'hiijack';
        var cookieDomain = '.qidian.com';
        var reportUrl = '//book.qidian.com/ajax/safe/hiijackReport?times=1&_csrfToken='+ getCookie('_csrfToken')||'';
        var reportUrl2 = '//book.qidian.com/ajax/safe/hiijackReport?times=3&_csrfToken='+ getCookie('_csrfToken')||'';

        //判断是否被iframe
        if (top.location !== self.location) {
            //用于记录被劫持的次数
            var countHijack;

            //如果未设置cookie，则需要set一下cookie，否则获取此cookie的值
            if(!getCookie(cookieName)){
                setCookie(cookieName,0 ,cookieDomain, '', 30*24*60*60*1000);
                countHijack = 0;
            }else{
                countHijack = parseInt(getCookie(cookieName));
            }

            //如果连续被劫持的次数大于等于3次，则发请求上报此情况,否则上报非连续性的情况,同时累加被劫持次数、重置当前url
            if(countHijack >= 3){
                reportUrl2 && reportUrl2!='' && createSender(reportUrl2);
            }else{
                reportUrl && reportUrl!=''&& createSender(reportUrl);
                countHijack ++;
                setCookie(cookieName, countHijack ,cookieDomain, '', 30*24*60*60*1000);
                top.location = self.location;
            }
        }
        //每次成功进入页面则计数清0
        setCookie(cookieName, 0 ,cookieDomain, '', 30*24*60*60*1000);
    })();
    //end 防劫持
</script>

<!-- <link rel="shortcut icon" type="image/x-icon" href="//qidian.gtimg.com/qd/favicon/qd_icon.0.2.ico">
<link rel="Bookmark" type="image/x-icon" href="//qidian.gtimg.com/qd/favicon/qd_icon.0.2.ico"> -->

    
<link rel="stylesheet" data-ignore="true" href="/project/Public/Details/css/vote_popup.0.33.css" />
  
</head>
<body>



<div class="wrap">
    

    <!-- start 固定导航条 样式和首页不同，非跟随页面滚动 -->
    
<!-- start 固定顶部导航条 -->
<div id="pin-nav" class="pin-nav-wrap need-search" data-l1="40">
    <div class="box-center cf">
        <div class="nav-list site-nav fl">
            <ul>
                <li class="site"><a class="pin-logo" href="//www.qidian.com" data-eid="qd_A43"><span></span></a>
                    <div class="dropdown">
                        <a href="http://www.qdmm.com" target="" data-eid="qd_A44">起点女生网</a>   
                    </div>
                </li>
                <li><a href="" target="" data-eid="qd_A47">玄幻</a></li>
                <li><a href="" target="" data-eid="qd_A48">都市</a></li>
                <li><a href="" target="" data-eid="qd_A49">仙侠</a></li>
                <li><a href="" target="" data-eid="qd_A50">科幻</a></li>
                <li><a href="" target="" data-eid="qd_A56">游戏</a></li>
                <li><a href="" target="" data-eid="qd_A52">历史</a></li>
                <li><a href="" target="_blank" data-eid="qd_A53">排行</a></li>
                <li class="more"><a href="javascript:" id="top-nav-more" target="" data-eid="qd_A54">更多<span></span></a>
                    <div class="dropdown">
                        <a href="" target="_blank" data-eid="qd_A169">全部作品</a>
                        <a href="" target="" data-eid="qd_A51">奇幻</a>
                        <a href="" target="" data-eid="qd_A57">武侠</a>
                        <a href="" target="" data-eid="qd_A58">灵异</a>
                        <a href="" target="" data-eid="qd_A59">军事</a>
                        <a href="" target="" data-eid="qd_A60">职场</a>
                        <a href="" target="" data-eid="qd_A61">体育</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav-list min-user fr">
            <ul>
                <li id="min-search">
                    <form id="formUrl" action="//se.qidian.com" method="get" target="_blank">
                        <label id="pin-search" for="topSearchSubmit" data-eid="qd_A62"><em class="iconfont">&#xe60d;</em>
                        </label>
                        <input id="pin-input" class="pin-input hide" type="text" name="kw" placeholder="长乐歌">
                        <input class="submit-input" type="submit" id="topSearchSubmit" data-eid="qd_A62">
                    </form>
                </li>
                <li class="line"></li>
                <!-- 未登录 -->
                <li class="sign-out">
                    <a id="pin-login" href="javascript:" data-eid="qd_A64">登录</a>
                    <a class="reg" href="//passport.qidian.com/reg.html?appid=10&areaid=1&target=iframe&ticket=1&auto=1&autotime=30&returnUrl=http%3A%2F%2Fwww.qidian.com" target="_blank">注册</a>
                </li>
                <!-- 登录后 -->
                <li class="sign-in hidden">
                    <a href="//me.qidian.com/Index.aspx" target="_blank" data-eid="qd_A65"><i id="nav-user-name"></i><span></span></a>
                    <div class="dropdown">
                        <a href="//me.qidian.com/msg/lists.aspx?page=1" target="_blank" data-eid="qd_A66">消息(<i id="top-msg">0</i>)</a>
                        <a href="//me.qidian.com/account/charge.aspx" target="_blank" data-eid="qd_A67">充值</a>
                        <a href="//me.qidian.com/Index.aspx" target="_blank" data-eid="qd_A68">个人中心</a>
                        <a href="//www.qidian.com/help/kf" target="_blank" data-eid="qd_A69">客服中心</a>
                        <a id="exit" href="javascript:" data-eid="qd_A70">退出</a>
                    </div>
                </li>
                <li class="line"></li>
                <li class="book-shelf" id="top-book-shelf">
                    <a href="//me.qidian.com/bookCase/bookCase.aspx" target="_blank" data-eid="qd_A63"><em class="iconfont">&#xe60c;</em><i>我的书架
                    </i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end 固定顶部导航条 -->
    <!-- end 固定导航条 样式和首页不同，非跟随页面滚动 -->

    <!-- start 页面顶部背景，含有面包屑导航，斜阴影边框 -->
    
<!-- start 书详情页顶部背景 -->

<div id="j-topHeadBox" class="top-bg-op-box " data-cookie="1" style="background-image:url('/project/Public/Details/images/6a07f5ae8b1d4062a2da0c7851f9576e.gif')" data-l1="1">
    <a class="jumpWrap"  target="_blank" data-eid="qd_G100" data-qd_dd_p1="1">
    <img src="/project/Public/Details/images/5b687095bd584c56924c25064e2be6eb.gif" style="width:1280px;height:180px;margin:0px;">
        <span class="op-tag"></span>
    </a>
    

    

</div>
<div class="top-bg-box  hidden" id="j-topBgBox" style="background-image:url('images/5b687095bd584c56924c25064e2be6eb.gif')">
    <span class="back-to-op" data-eid="qd_G106">热门游戏</span>
</div>

<!-- end 书详情页顶部背景 -->

<!-- start 面包屑导航 -->
<div class="crumbs-nav center990  top-op" data-l1="1">
    
    <span>
    <!-- <a href="//www.qidian.com" data-eid="qd_G01">首页</a><em class="iconfont">&#xe621;</em>
    <a href="//xuanhuan.qidian.com" target="_blank" data-eid="qd_G02">玄幻频道</a><em class="iconfont">&#xe621;</em>
    <a href="http://a.qidian.com/?chanId=21&subCateId=73" target="_blank">异世大陆</a><em class="iconfont">&#xe621;</em>
    <a href="//book.qidian.com/info/1209977">斗破苍穹</a> -->
    </span>
</div>
<!-- end 面包屑导航 -->


<!-- start 透明边框-->
<div class="border-shadow ">
    <!-- start 斜切阴影 -->
    <span></span>
    <span></span>
    <!-- end 斜切阴影 -->
</div>
<!-- end 透明边框-->
    <!-- end 页面顶部背景，含有面包屑导航，斜阴影边框 -->

    <!-- start 书详情容器-->
    <div class="book-detail-wrap center990">
        <!-- start 书详情-->
        <div class="book-information cf" data-l1="2">
    <!-- start 标志 -->
    

    <!-- end 标志 -->

    <!-- start 书封 -->
    <div class="book-img">
        <a class="J-getJumpUrl" id="bookImg" href="" data-eid="qd_G09" data-bid="1209977" data-firstchapterjumpurl=""><img src="/project/Public/Book/<?php echo ($book['bookpic']); ?>"></a>
    </div>
    <!-- end 书封 -->

    
    <!-- start 书信息 -->
    <div class="book-info ">
        <h1><em><?php echo ($book['bookname']); ?></em><span><a class="writer" href="//me.qidian.com/authorIndex.aspx?id=1019021" target="_blank" data-eid="qd_G08"><?php echo ($book['bookauthor']); ?></a> 著</span></h1>
        <p class="tag"><span class="blue">
            <?php if($book['bookfinish'] == 1): ?>完结<?php else: ?>连载<?php endif; ?>
        </span>
            
            <?php if($book['BookCommend'] == 1): ?><span class="blue">推荐</span><?php endif; ?>
            
            
            <?php if($book['booknew'] == 1): ?><span class="blue">新书</span><?php endif; ?>
            
           <!--  <a href="//xuanhuan.qidian.com" class="red" target="_blank" data-eid="qd_G10">玄幻</a> -->
            
        </p>
        
        <p class="intro">心潮澎湃，无限幻想，迎风挥击千层浪，少年不败热血！</p>
        <p><em>529.77</em><cite>万字</cite><i>|</i><em>14999.95</em><cite>万总点击<span>&#183;</span>会员周点击628</cite><i>|</i><em>663.23</em><cite>万总推荐<span>&#183;</span>周299</cite></p>
        
        <p><a class="red-btn J-getJumpUrl " href="" id="readBtn" data-eid="qd_G03" data-bid="1209977" data-firstchapterjumpurl="">免费试读</a><a class="blue-btn add-book" id="addBookBtn" href="javascript:" data-eid="qd_G05" data-bookId="1209977" data-bid="1209977">加入书架</a>            
        </p>
        
    </div>
    <!-- end 书信息 -->

    
    <!-- start 评价 -->
    <div class="comment-wrap">
        <div id="commentWrap">
            <!-- start 预加载 -->
          <!--   <div class="load-score">
                <div class="la-ball-pulse">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div> -->
            <!-- end 预加载 -->

            <!-- start 拿到数据后显示 -->
           <!--  <div class="j_getData">
                <h4 id="j_bookScore"><span><cite id="score1">0</cite><em>.</em></span><i id="score2">0</i></h4>
                <p id="j_userCount"><span></span>人评价</p>
            </div> -->
            <!-- end 拿到数据后显示 -->
        </div>

        <!-- <h5>我要评价</h5> -->
        <div class="score-mid" id="scoreBtn" data-score="" data-comment="0" data-eid="qd_G12">  
            <img src="/project/Public/Details/picture/star-off.0.1.png">   
            <img src="/project/Public/Details/picture/star-off.0.1.png">   
            <img src="/project/Public/Details/picture/star-off.0.1.png">  
            <img src="/project/Public/Details/picture/star-off.0.1.png"> 
            <img src="/project/Public/Details/picture/star-off.0.1.png">     
        </div>
    </div>
    <!-- end 评价 -->

    <!-- start 订阅 手机阅读 -->
   <!--  <div class="take-wrap">
        <a class="blue download" id="download" href="javascript:" data-eid="qd_G14">下载
    </a>
    </div> -->
    <!-- end 订阅 手机阅读 -->
    
</div>
        <!-- end 书详情-->

        <!-- start 区块导航 -->
        <div class="content-nav-wrap cf" data-l1="3">
            <div class="nav-wrap fl">
                <ul>
                    <li class="act"><a class="lang" id="j-bookInfoPage" href="javascript:" data-eid="qd_G15">作品信息</a></li>
                    <li class="j_catalog_block"><a class="lang" href="javascript:" id="j_catalogPage" data-eid="qd_G16">目录<i><span id="J-catalogCount"></span></i></a></li>
                    <li class="j_discussion_block"><a class="lang" href="//forum.qidian.com/NewForum/List.aspx?BookId=1209977" target="_blank" data-eid="qd_G17">作品讨论<i><span id="J-discusCount"></span></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end 区块导航 -->

        <!--start 目录模块-->
        <div class="catalog-content-wrap hidden" id="j-catalogWrap" data-l1="14">
            <!--start 置顶按钮-->
            <div class="go-top">
                <div class="go-top-wrap">
                    <a href="#" class="icon-go-top"><em class="iconfont" data-eid="qd_G72">&#xe66b;</em></a>
                </div>
            </div>
            <!--end 置顶按钮-->
            
            <div class="loading">
                <div class="la-ball-pulse">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
        </div>
        <!--end 目录模块-->

        <!-- start 作品和作家简介 -->
        <div class="book-content-wrap cf">
            <!-- start 左边区块 -->
            <div class="left-wrap fl">
                <!-- start 作品内容简介 -->
                <div class="book-intro">
                    <p style="text-align:center;"><?php echo ($book['bookpro']); ?></p>
                    <!-- <p class="tag-wrap" data-l1="4">作者自定义标签:
                        <a class="tags" href="//a.qidian.com/?tag=热血" target="_blank" data-eid="qd_G70">热血</a>
                        
                    </p> -->
                    
                </div>
                <!-- end 作品内容简介 -->

                
                <!-- start 粉丝互动 -->
                <div class="fans-zone" data-l1="5">
                    <h3 class="lang">粉丝互动</h3>
                    <div class="fans-interact cf">
                        <dl>
                            <!-- start 月票、推荐票 -->
                            <dd>
                                <!-- start 月票 推荐票切换 -->
                                <h4 id="ticket-Tab">
                                    
                                    <a class="lang act" href="javascript:" data-eid="qd_G20">月票</a><em>|</em>
                                    
                                    <a class="lang " href="javascript:" data-eid="qd_G21">推荐票
                                    
                                    </a>
                                </h4>
                                <!-- end 月票 推荐票切换 -->

                                <!-- start 票数/排名 -->
                                <div class="action-wrap" id="ticket-wrap">
                                    
                                    <!-- start 月票 -->
                                    <div class="ticket month-ticket">
                                        <p>本月票数</p>
                                        <p class="num"><i id="monthCount">563</i></p>
                                        
                                        <p>排名271<i>&#183;</i>还差<em>
                                    0
                                    
                                     </em>票追上前一名</p>
                                        
                                        <div class="icon-box month">
                                            <span></span>
                                            <b></b>
                                        </div>
                                        <a class="red-radius-btn" id="monthBtn" href="javascript:" data-showtype="1" data-eid="qd_G22"><em class="iconfont">&#xe63f;</em>投月票</a>
                                        <p class="tip"><cite>1</cite>张月票=<cite>100</cite>点粉丝值</p>
                                    </div>
                                    <!-- end 月票 -->
                                    
                                    <!-- start 推荐票 -->
                                    <div class="ticket rec-ticket hidden">
                                        <p>本周票数</p>
                                        <p class="num"><i id="recCount">299</i></p>
                                        
                                        <p>排名776<i>&#183;</i>还差<em>
                                            0
                                            
                                        </em>票追上前一名</p>
                                        
                                        <div class="icon-box rec">
                                            <span></span>
                                            <b></b>
                                        </div>
                                        <a class="red-radius-btn" id="recBtn" href="javascript:" data-showtype="2" data-eid="qd_G23"><em class="iconfont">&#xe63e;</em>投推荐票</a>
                                    </div>
                                    <!-- end 推荐票 -->
                                </div>
                                <!-- end 票数/排名 -->
                            </dd>
                            <!-- end 月票、推荐票 -->

                            <dd class="line"></dd>

                            <!-- start 打赏 -->
                            <dd>
                                <h4 class="lang"><span class="act">打赏</span></h4>
                                <div class="action-wrap">
                                    <!-- start 打赏 -->
                                    <div class="ticket">
                                        <p>本周打赏人数</p>
                                        <p class="num"><i class="rewardNum" id="rewardNum">7</i></p>
                                        
                                        <p>今日<em id="todayNum">2</em>人打赏</p>
                                        
                                        <div class="icon-box money">
                                            <span></span>
                                            <b></b>
                                        </div>
                                        <a class="red-radius-btn" id="rewardBtn" href="javascript:" data-showtype="3" data-eid="qd_G24"><em class="iconfont">&#xe635;</em>打赏作者</a>
                                        <p class="tip"><cite>100</cite>起点币=<cite>100</cite>点粉丝值</p>
                                    </div>
                                    <!-- end 打赏 -->
                                </div>
                            </dd>
                            <!-- end 打赏 -->

                            <dd class="line"></dd>

                            <!-- start 粉丝-->
                            <dd>
                                <h4 class="lang"><span>我的粉丝等级</span></h4>
                                <!-- start 粉丝信息 -->
                                
                                <!-- start 未登录状态 -->
                                <div class="fans-rank login-out mb20 cf " id="noLogin" data-login="0">
                                    <div class="user-photo fl">
                                        <a href="//me.qidian.com" target="_blank">
                                            <img src="/project/Public/Details/picture/default_user.0.2.png">
                                        </a>
                                    </div>
                                    <div class="fans-info">
                                        <p><a class="blue" id="login-btn" href="javascript:" data-eid="qd_G28">登录</a>查看粉丝等级</p>
                                    </div>
                                </div>
                                <!-- end 未登录状态 -->

                                <!-- start 登录后状态 -->
                                <div class="fans-rank login-in mb20 cf hidden" id="loginIn" data-login="1">
                                    <div class="user-photo fl">
                                        <a href="//me.qidian.com" id="myUserIcon"  target="_blank">
                                            <img src="/project/Public/Details/picture/default_user.0.2.png">
                                            <span class="user-level" id="userLevel"></span>
                                        </a>
                                    </div>
                                    <div class="fans-info hidden" id="haveLv">
                                        <p>我的排名<b class="red">--</b>名</p>
                                        <p>还差<span id="Lnterval">--</span>粉丝值升级</p>
                                    </div>
                                    <div class="fans-info hidden" id="noLv">
                                        <p>暂无粉丝等级</p>
                                        <p id="levelUp">对本书消费可提升等级</p>
                                    </div>
                                </div>
                                <!-- end 登录后状态 -->

                                <!-- end 粉丝信息 -->

                                <!-- start 本书粉丝动态 -->
                                <div class="fans-dynamic">
                                    <h4 class="lang"><span>本书粉丝动态</span></h4>
                                    

                                    <!-- start 粉丝动态 -->
                                    <div class="fans-slide-wrap">
                                        <div class="scroll-div" id="scrollDiv">
                                            <ul class="fans-slide">
                                            
                                            <li data-rid="1" class="">
                                                <em class="rec"></em><a href="//me.qidian.com/friendIndex.aspx?id=214792793" target="_blank" data-eid="" title="浩海凡尘">浩海凡尘</a><span>投了</span>1张推荐票
                                            </li>
                                            
                                            <li data-rid="2" class="">
                                                <em class="rec"></em><a href="//me.qidian.com/friendIndex.aspx?id=226816670" target="_blank" data-eid="" title="这是凌楠的头像">这是凌楠的头像</a><span>投了</span>3张推荐票
                                            </li>
                                            
                                            <li data-rid="3" class="">
                                                <em class="month"></em><a href="//me.qidian.com/friendIndex.aspx?id=220228526" target="_blank" data-eid="" title="书友160724230131151">书友160724230131151</a><span>投了</span>2张月票
                                            </li>
                                            
                                            <li data-rid="4" class="">
                                                <em class="rec"></em><a href="//me.qidian.com/friendIndex.aspx?id=220228526" target="_blank" data-eid="" title="书友160724230131151">书友160724230131151</a><span>投了</span>1张推荐票
                                            </li>
                                            
                                            <li data-rid="5" class="">
                                                <em class="rec"></em><a href="//me.qidian.com/friendIndex.aspx?id=216241631" target="_blank" data-eid="" title="冰若天霜">冰若天霜</a><span>投了</span>2张推荐票
                                            </li>
                                            
                                            <li data-rid="6" class="">
                                                <em class="rec"></em><a href="//me.qidian.com/friendIndex.aspx?id=215860204" target="_blank" data-eid="" title="蜘蛛侠联盟">蜘蛛侠联盟</a><span>投了</span>2张推荐票
                                            </li>
                                            
                                            <li data-rid="7" class="">
                                                <em class="month"></em><a href="//me.qidian.com/friendIndex.aspx?id=227941809" target="_blank" data-eid="" title="书友170109112459959">书友170109112459959</a><span>投了</span>1张月票
                                            </li>
                                            
                                            <li data-rid="8" class="">
                                                <em class="money"></em><a href="//me.qidian.com/friendIndex.aspx?id=214797326" target="_blank" data-eid="" title="犀利哥系我">犀利哥系我</a><span>打赏</span>100起点币
                                            </li>
                                            
                                            <li data-rid="9" class="">
                                                <em class="money"></em><a href="//me.qidian.com/friendIndex.aspx?id=227464074" target="_blank" data-eid="" title="缘起缘灭人不语">缘起缘灭人不语</a><span>打赏</span>100起点币
                                            </li>
                                            
                                            <li data-rid="10" class="">
                                                <em class="month"></em><a href="//me.qidian.com/friendIndex.aspx?id=227861233" target="_blank" data-eid="" title="书友170107152000499">书友170107152000499</a><span>投了</span>1张月票
                                            </li>
                                            
                                            <li data-rid="11" class="">
                                                <em class="month"></em><a href="//me.qidian.com/friendIndex.aspx?id=220862404" target="_blank" data-eid="" title="来自凡间的老虎">来自凡间的老虎</a><span>投了</span>1张月票
                                            </li>
                                            
                                            <li data-rid="12" class="">
                                                <em class="month"></em><a href="//me.qidian.com/friendIndex.aspx?id=227892434" target="_blank" data-eid="" title="书友20170108054221541">书友20170108054221541</a><span>投了</span>2张月票
                                            </li>
                                            
                                            <li data-rid="13" class="high-light">
                                                <em class="money"></em><a href="//me.qidian.com/friendIndex.aspx?id=442492" target="_blank" data-eid="" title="ewffeee">ewffeee</a><span>打赏</span>10000起点币
                                            </li>
                                            
                                            <li data-rid="14" class="">
                                                <em class="money"></em><a href="//me.qidian.com/friendIndex.aspx?id=227703685" target="_blank" data-eid="" title="yyppqqtt">yyppqqtt</a><span>打赏</span>100起点币
                                            </li>
                                            
                                            <li data-rid="15" class="">
                                                <em class="money"></em><a href="//me.qidian.com/friendIndex.aspx?id=216151653" target="_blank" data-eid="" title="樱娮">樱娮</a><span>打赏</span>100起点币
                                            </li>
                                            
                                        </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- end 粉丝动态 -->
                                </div>
                                <!-- end 本书粉丝动态 -->
                            </dd>
                            <!-- end 粉丝-->
                        </dl>
                    </div>
                </div>
                <!-- end 粉丝互动 -->
                <!--start 广告-->
                
                <div class="games-op-wrap" data-l1="17">
                    <!--start 中部左侧广告 1-->
                    <div class="left-game">
                        
                        <!-- start 预加载 -->
                        <div class="la-ball-pulse">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- end 预加载 -->
                        <!-- start flash广告 -->
                       
                        <embed src="/project/Public/Details/flash/164d998f435e475283bd3059bcc15896.swf" quality="high" wmode="transparent" type="application/x-shockwave-flash" autostart="1"></embed>
                        <!-- end flash广告 -->
                        
                    </div>
                    <!--end 中部左侧广告 1-->

                    <!--start 中部左侧广告 2-->
                    <div class="right-game">
                        
                        <!-- start 预加载 -->
                        <div class="la-ball-pulse">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <!--end 中部左侧广告 2-->
                </div>
                
                <!--end 广告-->
                
                <!-- start 喜欢这本书的人还喜欢 -->
               <!--  <div class="like-more mb30 cf" data-l1="6">
                    <h3 class="lang">喜欢这本书的人还喜欢</h3>
                    <ul>
                        
                        <li data-rid="1">
                            <div class="book-img" title="大主宰">
                                <a href="//book.qidian.com/info/2750457" target="_blank" data-eid="qd_G30" data-bid="2750457"><img class="lazy" src="/project/Public/Details/picture/default_book.0.2.png" data-original="//qidian.qpic.cn/qdbimg/349573/2750457/90" alt="大主宰"></a>
                            </div>
                            <h4><a href="//book.qidian.com/info/2750457" target="_blank" title="大主宰" data-eid="qd_G29" data-bid="2750457">大主宰</a></h4>
                            <p>89%的用户读过</p>
                        </li>
                        
                        <li data-rid="2">
                            <div class="book-img" title="一念永恒">
                                <a href="//book.qidian.com/info/1003354631" target="_blank" data-eid="qd_G30" data-bid="1003354631"><img class="lazy" src="/project/Public/Details/picture/default_book.0.2.png" data-original="//qidian.qpic.cn/qdbimg/349573/1003354631/90" alt="一念永恒"></a>
                            </div>
                            <h4><a href="//book.qidian.com/info/1003354631" target="_blank" title="一念永恒" data-eid="qd_G29" data-bid="1003354631">一念永恒</a></h4>
                            <p>95%的用户读过</p>
                        </li>
                        
                        <li data-rid="3">
                            <div class="book-img" title="玄界之门">
                                <a href="//book.qidian.com/info/3676417" target="_blank" data-eid="qd_G30" data-bid="3676417"><img class="lazy" src="/project/Public/Details/picture/default_book.0.2.png" data-original="//qidian.qpic.cn/qdbimg/349573/3676417/90" alt="玄界之门"></a>
                            </div>
                            <h4><a href="//book.qidian.com/info/3676417" target="_blank" title="玄界之门" data-eid="qd_G29" data-bid="3676417">玄界之门</a></h4>
                            <p>97%的用户读过</p>
                        </li>
                        
                        <li data-rid="4">
                            <div class="book-img" title="雪鹰领主">
                                <a href="//book.qidian.com/info/3513193" target="_blank" data-eid="qd_G30" data-bid="3513193"><img class="lazy" src="/project/Public/Details/picture/default_book.0.2.png" data-original="//qidian.qpic.cn/qdbimg/349573/3513193/90" alt="雪鹰领主"></a>
                            </div>
                            <h4><a href="//book.qidian.com/info/3513193" target="_blank" title="雪鹰领主" data-eid="qd_G29" data-bid="3513193">雪鹰领主</a></h4>
                            <p>83%的用户读过</p>
                        </li>
                        
                        <li data-rid="5">
                            <div class="book-img" title="龙王传说">
                                <a href="//book.qidian.com/info/3681560" target="_blank" data-eid="qd_G30" data-bid="3681560"><img class="lazy" src="/project/Public/Details/picture/default_book.0.2.png" data-original="//qidian.qpic.cn/qdbimg/349573/3681560/90" alt="龙王传说"></a>
                            </div>
                            <h4><a href="//book.qidian.com/info/3681560" target="_blank" title="龙王传说" data-eid="qd_G29" data-bid="3681560">龙王传说</a></h4>
                            <p>99%的用户读过</p>
                        </li>
                        
                        <li data-rid="6">
                            <div class="book-img" title="不朽凡人">
                                <a href="//book.qidian.com/info/1003307568" target="_blank" data-eid="qd_G30" data-bid="1003307568"><img class="lazy" src="/project/Public/Details/picture/default_book.0.2.png" data-original="//qidian.qpic.cn/qdbimg/349573/1003307568/90" alt="不朽凡人"></a>
                            </div>
                            <h4><a href="//book.qidian.com/info/1003307568" target="_blank" title="不朽凡人" data-eid="qd_G29" data-bid="1003307568">不朽凡人</a></h4>
                            <p>91%的用户读过</p>
                        </li>
                        
                    </ul>
                </div> -->
                <!-- end 喜欢这本书的人还喜欢 -->
                
                <!-- start 书友评价 -->
                <div class="user-commentWrap" data-l1="8">
                    <div class="user-comment-wrap book-friend">
                        <!-- start 热门最新列表切换 -->
                        <div class="comment-head cf">
                            <h3 class="lang"><a class="send blue j_forumBtn" href="//forum.qidian.com/NewForum/Post.aspx?forumId=1209977" target="_blank" data-eid="qd_G35">我要发帖</a><a class="send blue j_commentBtn hidden" id="goComment" href="javascript:" data-comment="1" data-eid="qd_G33">我要评价</a><span class="j_godiscuss act">作品讨论区</span><i class="grey">|</i><span class="j_gocomment" data-eid="qd_G113">书友评价</span></h3>
                            <div class="sort-box hidden" id="sortBox"><a class="act" href="javascript:" data-order="2" data-eid="qd_G31">热门</a><span>·</span><a href="javascript:" data-order="0" data-eid="qd_G32">最新</a><span class="grey">|</span></div>
                        </div>
                        <!-- end 热门最新列表切换 -->

                        <!-- start 预加载 -->
                      <div class="userCommentWrap"  id="userCommentWrap" data-l1="7">
                          <div class="la-ball-pulse">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>
                          
                      </div>
                       
                        </div>
                        <!-- end 作品讨论区 -->
                    </div>
                </div>
                <!-- end 书友评价 -->


            </div>
            <!-- end 左边区块 -->
            <!-- start 右边区块 -->
            <!-- <div class="right-wrap fr"> -->
                <!-- start 作家相关信息 -->
                <!-- <div class="author-state mb10">
                    <div class="author-info"> -->
                        <!-- start 作家基本信息 -->
                       <!--  <div class="info-wrap nobt" data-l1="9">
                            <div class="author-photo" id="authorId" data-authorid="1019021">
                                <a href="//me.qidian.com/authorIndex.aspx?id=1019021" target="_blank" data-eid="qd_G38">
                                    <img src="/project/Public/Details/picture/0a68d851f0b44314817d6d0efcd6cb57.gif">
                                </a>
                                
                                <span class="platina">白金</span>
                                
                            </div>
                            <p>
                            <a href="//me.qidian.com/authorIndex.aspx?id=1019021" target="_blank">天蚕土豆
                            </a>
                            <a class="god-light lv3" href="http://t.qidian.com/Dszg/DszgDetail.php?authorId=1019021" title="大神之光：已经有1144人获得" target="_blank" data-eid="qd_G39">    
                            </a>
                                
                            </p>
                            
                            <p class="">阅文集团白金作家，网络文学代表人物之一，浙江省网络作家协会副主席，富豪榜作家。

                                <cite class="iconfont blue j_infoUnfold" title="展开介绍"></cite>
                            </p>
                            
                        </div> -->
                        <!-- end 作家基本信息 -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- end 作家相关信息 -->
            <!-- </div> -->
            <!-- end 右边区块 -->

        </div>
        <!-- end 作品和作家简介 -->

    </div>
    <!-- end 书详情容器-->

    <!-- start 页脚 -->
    <!-- start 页脚 -->
<div class="footer">
    <!--start 友情链接-->
    <div class="box-center cf">
        <div class="friend-link">
            <em><cite>友情链接：</cite></em>
                <a href="//www.qidian.com">起点中文网</a>
                <a href="//www.qdmm.com/Default.aspx" target="_blank">起点女生网</a>
               
        </div>
        <!--end 友情链接-->
        <!--start 页脚菜单-->
        <div class="footer-menu dib-wrap">
            <a href="//www.qidian.com/about/intro" target="_blank">关于起点</a>
            <a href="//www.qidian.com/about/contact" target="_blank">联系我们</a>
            <a href="http://join.book.qq.com/index.html" target="_blank">加入我们</a>
            <a href="//www.qidian.com/help/index/2" target="_blank">帮助中心</a>
            <a href="http://bbs.qidian.com/list/53" target="_blank">提交建议</a>
            <a href="http://wwwploy.qidian.com/help/about_link.aspx" target="_blank">合作伙伴</a>
            <a href="http://bbs.qidian.com" target="_blank">起点论坛</a>
            <a href="http://shop.qidian.com/Index.aspx" target="_blank">起点商城</a>
        </div>
        <!--end 页脚菜单-->
        <!--start 版权-->
        <div class="copy-right">
            <p><span>Copyright &copy; 2002-2017 www.qidian.com All Right Reserved</span>版权所有 上海玄霆娱乐信息科技有限公司</p>
            <p>上海玄霆娱乐信息科技有限公司 增值电信业务经营许可证沪B2-20080046 沪网文[2015]0081-031 新出网证（沪）字010 沪ICP备08017520号-1</p>
            <p>请所有作者发布作品时务必遵守国家互联网信息管理办法规定，我们拒绝任何色情小说，一经发现，即作删除！客服电话：010-59357051</p>
            <p>本站所收录作品、社区话题、书库评论及本站所做之广告均属个人行为，与本站立场无关</p>
        </div>
        <!--end 版权-->

        
    </div>
</div>
<!-- end 页脚 -->
    <!-- end 页脚 -->

</div>

<!-- start LBF lib -->
<script data-ignore="true" src="/project/Public/Details/js/lbf.js"></script>
<script>
    LBF.config({"paths":{"site":"//qidian.gtimg.com/qd/js","qd":"//qidian.gtimg.com/qd"},"vars":{"theme":"//qidian.gtimg.com/qd/css"},"combo":true,"debug":false});
    // 全局的通用数据都放g_data变量里
    var g_data = {};

    // 环境变量，会按照环境选择性打log
    g_data.envType = 'pro';

    // 用作统计PV
    var directCatalog = location.hash;

    //如果hash中有catalog，则优先展示目录页
    if (directCatalog.indexOf('Catalog') > 0) {
        g_data.pageId = 'qd_P_mulu';
    }else{
        g_data.pageId = 'qd_P_xiangqing';
    }

    // 当前页面路由
    g_data.domain = '//book.qidian.com';

    //环境域名
    g_data.domainSearch = 'se.qidian.com';

    //静态资源域名
    g_data.staticPath = '//qidian.gtimg.com/qd';

    //广告区flash标识
    g_data.gamesFlashOp = {
        middleLeft1:2,
            middleLeft2:2,
            middleRight:2
    };

    g_data.pageJson = {
        // 是否是VIP书籍，传入js，在弹窗时需要判断，如果不是VIP看不到月票Tab
        isVip:1,

        // 是否已登录，传入js，EJS后加载模板判断是否显示
        isLogin:0,

        // 是否签约作品，传入js，EJS后加载模板判断是否显示
        isSign:1,

        // 是否要送月票 传入js， EJS后加载模板判断使用
        noRewardMonthTic:0,

        // 获得bookId的json格式，传入js，EJS后加载模板中可以直接使用
        bookId:1209977,

        // 获得签约状态，传入js，EJS后加载弹窗下载使用
        signStatus:'Ａ级签约',

        //作家专区链接环境变量传入EJS模板
        mePreFix:'//me.qidian.com',

        //讨论区连接环境变量传入EJS模板
        forumPreFix:'//forum.qidian.com'
    }

    g_data.hasDirectData = 0;
    //获取讨论区数据的参数之一
    g_data.chanId = 21;
    //是否是推广图
    g_data.isRecom = 0;

</script>
<script>
    LBF.use(['lib.jQuery', 'monitor.SpeedReport', 'qd/js/book_details/index.0.66.js'], function ($, SpeedReport, Index) {

        // 页面逻辑入口
        new Index({});

        $(window).on('load.speedReport', function () {
            // speedTimer[onload]
            speedTimer.push(new Date().getTime());
            var f1 = 7718, // china reading limited's ID
                f2 = 219, // site ID
                f3 = 37; // page ID
            // chrome & IE9 Performance API
            SpeedReport.reportPerformance({
                flag1: f1,
                flag2: f2,
                flag3IE: f3,
                flag3Chrome: f3,
                rate:0.1,
                url: '//isdspeed.qidian.com/cgi-bin/r.cgi'
            });
            // common speedTimer:['dom ready', 'onload']
            var speedReport = SpeedReport.create({
                flag1: f1,
                flag2: f2,
                flag3: f3,
                start: speedZero,
                rate:0.1,
                url: '//isdspeed.qidian.com/cgi-bin/r.cgi'
            });
            // chrome & IE9 Performance API range 1~19, common speedTimer use 20+
            for (var i = 0; i < speedTimer.length; i++) {
                speedReport.add(speedTimer[i], i + 20)
            }
            // http://isdspeed.qq.com/cgi-bin/r.cgi?flag1=7718&flag2=224&flag3=1&1=38&2=38&…
            speedReport.send();
        })
    });
    // speedTimer[dom ready], put it before </body>
    speedTimer.push(new Date().getTime());
</script>

<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

</body>
</html>