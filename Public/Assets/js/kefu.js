(function(){
    var a = [];
    a[a.length] = "<div id=\"sidekf\">";
    a[a.length] = "    <div class=\"tel\" style=\"display: none;\"><span>Tel:</span>010-84933768</div>";
    a[a.length] = "    <div class=\"lnk\">";
    a[a.length] = "    <a class=\"sidekf_sina\" target=\"_blank\" href=\"http://e.weibo.com/zonghengzhongwen?type=0\"></a>";
    a[a.length] = "    <a class=\"sidekf_tx\" target=\"_blank\" href=\"http://e.t.qq.com/zonghengcom\"></a>";
    a[a.length] = "    <a class=\"sidekf_qq\" href=\"http://wpa.qq.com/msgrd?v=1&uin=965151179&site=qq&menu=yes\" target=\"_target\"></a>";
    a[a.length] = "    <a href=\"http://bbs.zongheng.com/forumdisplay.php?fid=22\" target=\"_blank\" class=\"sidekf_bbs\"></a>";
    a[a.length] = "    <a href=\"mailto:zhkf@zongheng.com\" class=\"sidekf_mail\"></a>";
    a[a.length] = "    <a href=\"" + Domain.hostName + "/help/index.html\" class=\"sidekf_help\" target=\"_blank\"></a>";
    a[a.length] = "    </div>";
    a[a.length] = "    <div class=\"ovh\"></div>";
    a[a.length] = "</div>";
    document.write(a.join(""));
})();

jQuery(function(){
    jQuery("#sidekf").hover(function(){
        jQuery("#sidekf .tel").show();
        jQuery(this).animate({left: "0px"}, 200);
    }, function(){
        jQuery("#sidekf .tel").hide();
        jQuery(this).animate({left: "-110px"}, 200);
    });
});