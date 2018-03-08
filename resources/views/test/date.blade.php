{{--}}<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>最简单的一个网页倒计时代码 时间到期后会显示出提醒内容 收藏版</title>
    <style>
        *{ margin:0; padding:0; list-style:none;}
        body{ font-size:18px; text-align:center;}
        .time{ height:30px; padding:200px;}
    </style>
</head>
<body>
<div class="time">
    <span id="t_d">00天</span>
    <span id="t_h">00时</span>
    <span id="t_m">00分</span>
    <span id="t_s">00秒</span>
    <span id="daoqi"></span>
</div>



<script>
    function GetRTime(){
        var EndTime= new Date('2018/01/24 22:54:00');//这里设置你预定的时间
        var NowTime = new Date();
        var t =EndTime.getTime() - NowTime.getTime();
        var d=Math.floor(t/1000/60/60/24);
        var h=Math.floor(t/1000/60/60%24);
        var m=Math.floor(t/1000/60%60);
        var s=Math.floor(t/1000%60);

        document.getElementById("t_d").innerHTML = d + "天";
        document.getElementById("t_h").innerHTML = h + "时";
        document.getElementById("t_m").innerHTML = m + "分";
        document.getElementById("t_s").innerHTML = s + "秒";
        if(s=="0" && m=="0" && h=="0" && d=="0"){
            document.getElementById("daoqi").innerHTML ="时间到了，是时候做xxx了";//这里设置到期时间后的提醒内容
            document.getElementById("daoqi").style.color="red";}
    }
    setInterval(GetRTime,0);

</script>


</body>
</html>
--}}
<script type="text/javascript">
    //2.实现秒表功能，实现时 分 秒 毫秒 点击1开始计时，2结束计时；
    var oDay = document.getElementById("t_d");
    var oHours = document.getElementById("t_h");
    var oMinutes = document.getElementById("t_m");
    var oSeconds = document.getElementById("t_s");
    var Btn2 = document.getElementsById("stoptimer");
    var LoveDay = new Date();

    var ms=0;
    var sec=0;
    var min=0;
    var hour=0;
    var day = 0;
    function SetTime(){
        timer=setInterval(function(){
            oDay.innerHTML = day;
            oHours.innerHTML = hour;
            oMinutes.innerHTML = min;
            oSeconds.innerHTML = sec;
            //oDiv.innerHTML=time;
            ms=ms+50;
            if(ms>999){
                ms=0;
                sec++;
            }
            if(sec>59){
                sec=0;
                min++;
            }
            if(min>59){
                min=0;
                hour++;
            }
            if(hour>23){
                hour=0;
                day++;
            }

        },50)
    }
    Btn2.onclick=function(){
        clearInterval(timer);
    }
</script>