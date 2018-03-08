<link rel="stylesheet" href="/css/org/time/time-style.css" type="text/css" media="" />


<div id="time-container">
    <ul class="time-top-buttons" > <!-- drag and toggle buttons-->
        <li><a class="trigger" id="time-hide" onclick="TimeHide()">toggle me</a></li>
        <li><a class="drag" id="runEffect">drag me with your mouse</a></li>
    </ul><!--end top-buttons-->
    <div id="time-totoggle">
        <div id="time-homepage" >
            <a class="time-logo" href="#"><img src="/images/logo.png" alt="logo" /></a>
            <h1><span>逝者如斯夫，不舍昼夜</span></h1>
            <div id="time-countdown" class="time-hascountdown">
                <div style="display: inline-block">
                    <div class="time-item">
                        <p id="t_d">0</p>Days
                    </div>
                    <div class="time-item">
                        <p id="t_h">0</p>
                        Hours
                    </div>
                    <div class="time-item">
                        <p id="t_m">0</p>
                        Minutes
                    </div>
                    <div class="time-item">
                        <p id="t_s">0</p>
                        Seconds
                    </div>
                </div>
            </div>
            <div id="time-description">
                <div id="time-hold"></div>
                <form method="post" action="" name="" id="descriptionform">
                    <input type="text" name="email" placeholder="Enter your email address " id="time-subtime" />
                    <input type="submit" name="send" value="Subscribe" id="time-subsubmit" />
                </form>
            </div>
            <ul class="time-bottom-buttons">
                <li><a class="time-info">I show some info</a></li>
                <li><a class="time-contact">I reveal the contact form</a></li>
            </ul><!--end buttons-->
        </div><!--end homepage-->
        <div><!--end totoggle-->
        </div><!--end container-->
    </div>
</div>

<script>
    function SetTime(){
        var oDay = document.getElementById("t_d");
        var oHours = document.getElementById("t_h");
        var oMinutes = document.getElementById("t_m");
        var oSeconds = document.getElementById("t_s");
        var Btn2 = document.getElementsByClassName("time-info");
        var LoveDay = new Date();

        var ms=0;
        var sec=0;
        var min=0;
        var hour=0;
        var day = 0;
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
    function StopTimer(){
        clearInterval(timer);

    }
</script>