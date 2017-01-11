if(navigator.userAgent.toLowerCase().indexOf("compatible; msie") != -1)
{
    var location = document.location;
}

/* (function(id){if(window.adIdList == null || window.adIdList == undefined){window.adIdList = [];}var a = window.adIdList;a[a.length] = id;})(840973201); */
jQuery(function(){
    var getAdIdList = function()
    {
        var ids = [];

        if(window.adIdList != null && window.adIdList != undefined)
        {
            for(var i = 0, length = window.adIdList.length; i < length; i++)
            {
                ids[ids.length] = window.adIdList[i];
            }
        }

        var scripts = document.getElementsByTagName("script");

        for(var i = 0, length = scripts.length; i < length; i++)
        {
            var src = scripts[i].src;

            if(src != null && src != undefined && src.length > 0)
            {
                var k = src.lastIndexOf("/");

                if(k > -1)
                {
                    var name = src.substring(k + 1);

                    if(name.length > 3 && name.substring(name.length - 3).toLowerCase() == ".js")
                    {
                        name = name.substring(0, name.length - 3);

                        if(isNaN(parseInt(name)) == false)
                        {
                            ids[ids.length] = name;
                        }
                    }
                }
            }
        }

        var a = [];
        var map = {};

        for(var i = 0; i < ids.length; i++)
        {
            map["a" + ids[i]] = "1";
        }

        for(var i in map)
        {
            a[a.length] = i.substring(1);
        }

        return a;
    };

    var getAdClickHtml = function(ids)
    {
        var buffer = [];
        var prefix = "adMshow_";

        for(var i = 0, length = ids.length; i < length; i++)
        {
            var value = window[prefix + ids[i]];

            if(typeof(value) != "undefined" && value == true)
            {
                buffer[buffer.length] = "<iframe src=\"http://ad.zongheng.com/adClickStat.php?cId=" + ids[i] + "\" scrolling=\"no\" frameborder=\"0\" width=\"0\" height=\"0\"></iframe>";
            }
        }

        return buffer.join("\r\n");
    };

    if(navigator.userAgent.toLowerCase().indexOf("compatible; msie") != -1)
    {
        var ids = getAdIdList();

        if(ids.length > 0)
        {
            var e = document.createElement("div");
            e.style.display = "none";
            e.innerHTML = getAdClickHtml(ids);
            document.body.appendChild(e);
        }
    }
});