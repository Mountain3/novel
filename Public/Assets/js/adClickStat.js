jQuery(function() {
    var getPid = function(){
        var pid = document.body.getAttribute("_pgid");
        if (pid) {
            return pid;
        }else{
            return 0;
        }
    }
    var adListener = function() {
        var adPosition = jQuery(this).attr("adPosition");
        var adGroup = jQuery(this).attr("adGroup");
        if (adPosition != null && adGroup != null) {
            var handler = function() {
                var zhlogdata = {
                    sg:"ad"+adPosition,
                    cat:"zh_ad",
                    fr:$.cookie("zhffr"),
                    uid:$.cookie("ZHID"),
                    url:encodeURIComponent(location.href),
                    ds:window.screen.width+"x"+window.screen.height,
                    pageid:getPid()
                }
                var s="";
                for (var i in zhlogdata) {
                    s+="&"+i+"="+zhlogdata[i]
                }
                (new Image).src = "http://ad.zongheng.com/avote.php?ap=" + adPosition;
                (new Image).src = "http://log.zongheng.com/advisit/" + adGroup + "/" + adPosition;
                (new Image).src = 'http://h5.log.zongheng.com/zhweb/h.gif?v=pc'+s+'&rnd='+(+new Date);
            };
            setTimeout(handler, 1000);
        }
    };
    var addEventListener = function(target, type, handler) {
        if (target.attachEvent) {
            target.attachEvent("on" + type, handler);
        } else if (target.addEventListener) {
            target.addEventListener(type, handler, false);
        } else {
            target["on" + type] = handler;
        }
    };
    var bindAsListener = function(object, handler) {
        return function() {
            handler.apply(object, arguments);
            return true;
        };
    };
    jQuery(".adClickCss").each(function() {
        var nodeName = this.nodeName.toLowerCase();
        if (nodeName != "object") {
            jQuery(this).click(adListener);
        } else {
            var method = bindAsListener(this, adListener);
            addEventListener(this, "mousedown", method);
        }
    });
});