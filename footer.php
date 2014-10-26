<div class="row">
    <div class="col-md-12 text-cenleft copyright">CopyRight &copy; 素年锦时 - 2014 All Right Reserved. <br><small class="footer-info">浙江省永康市第一高级中学<br>2012届-高三（8）/高二（8）/高一（11）班同学会 <br>Created By ChenQuan Tested By ZhaoAng WangYikai  HuLina</small></div>
    
</div>
            </div>
        <script>
        jQuery(function($) {
            $('#sky').jQlouds({
                wind: true
            });
        });
         $("#submit_time").click(function() {
            nameval = $("#name").val();
            startval = $("#starttime").val();
            endval = $("#endtime").val();
            var _json = jQuery.param({
                "name": nameval,
                "starttime": startval,
                "endtime":endval
            });
            $.post("inserttime.php", _json, function(result) {
                $("#judgearea").html(result);
            });
        });
        //document.ontouchmove = function(e){ e.preventDefault(); }; //文档禁止 touchmove事件
        //禁用iphone地址栏
// 该函数由Simon Willison编写,它只有一个参数,该参数表示被调用的函数名(在页面加载完毕时执行的函数的名字)
    function addLoadEvent(func) {
        var oldOnload = window.onload;
        if (typeof window.onload != 'function') {
            window.onload = func;
        }
        else {
            window.onload = function() {
                oldOnload();
                func();
            }
        }
    }
  // 添加Load事件处理
    addLoadEvent(hideMenu);
    function hideMenu() {
        setTimeout("window.scrollTo(0, 0)", 1);
    }
    </script>
</body>

</html>