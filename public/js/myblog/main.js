// By Author Tiaohuaren
// 2018年1月26日21点39分
// 入口文件
//	
	
		var dropdown = function() {

        $('.dropdown').mouseenter(function(){

            var $this = $(this);
            $this
                .find('.jkly-dropdown')
                .css('display', 'block')
                .addClass('animated-fast fadeInUpMenu');

        }).mouseleave(function(){
            var $this = $(this);

            $this
                .find('.jkly-dropdown')
                .css('display', 'none')
                .removeClass('animated-fast fadeInUpMenu');
        });

    };
		$(document).ready(function(){	
			$("#home-content").css({"width":$("#content-width").css("width"),
											"marginLeft":$("#content-margin").css("marginLeft"),
											"height":770
			});
			swal({
				title:'新年快乐！',
				text:'恭祝大家在新的一年里身体健康、万事如意、阖家欢乐！狗年一直都能汪汪汪(旺)！',
				timer:20000,
				showConfirmButton:true
			});
			/*想实现滚动监听，但是失败了，原生的scroll和Bootstrap框架的都不能用
			$(".btn1").click(function(){
			//alert($("#weather-carousel").scrollTop()+" px");
			$("#jkly-page").scrollTop(200);
			});
			$("#weather-carousel").scroll(function(){
				$("#span-cover").text($("#weather-carousel").scrollTop());
				
				
			});
			*/
		});
			//给背景重置margin值但是现在也不需要了；
		/*$(window).resize(function() {  
			var width = $("#content-width").css("width");
			$("#home-content").css({"width":width,
											"marginLeft":$("#content-margin").css("marginLeft")
			}); 
		  
		  
		}); */

		/*function hidenav(){
				$("#jkly-nav").hide( "pulsate", 0, 1000);
				$(".slide-nav").css({"top":0});
				$(".nav__list").css({"height":"77.7vh"});
			};
		
		function shownav(){		
				$("#jkly-nav").show( "pulsate", 0, 1000);
				$(".slide-nav").css({"top":75});
				$(".nav__list").css({"height":"69.5vh"});
			};
			用来隐藏导航条的代码不过现在已经被下面的代码代替了
			*/
		function changemusic(){
				
				$("#musicbar").toggle("slide",0,1000);
		}
		function changetopnav(){
				$("#jkly-nav").toggle( "pulsate", 0, 1000);
				var slidebartop = $("#slidebar").css("top");
				if(slidebartop=="75px"){
					$(".slide-nav").css({"top":0});
					$(".nav__list").css({"height":"77.7vh"});
				}else{
					
					$(".slide-nav").css({"top":75});
					$(".nav__list").css({"height":"69.5vh"});
				}
			
		}
		
		var openMenu = function() {
			var menu = document.querySelector('.nav__list');
			var burger = document.querySelector('.burger');
			var doc = $(document);
			var l = $('.scrolly');
			var panel = $('.panel');
			var vh = $(window).height();
			burger.classList.toggle('burger--active');
			menu.classList.toggle('nav__list--active');
		};
		
		$(function(){
			//实现加载动画，但是不知道为什么除了fold其他动画都不能用；2018年2月19日20点21分add:引入ui类后就可以用了；
			$( "#jkly-nav" ).show( "pulsate", 0, 1000);
			$( "#time-container" ).show( "fold", 0, 1000);
			$( "#weather-carousel" ).show( "fold", 0, 1000);
			$( "#home-content" ).show("blind",0,1000);
			//轮播图
			$('#weather-carousel').carousel({
				  interval: 3000
			})
			/*框架的滚动监听；
			$("#myScrollspy").scrollspy();
			$('#myScrollspy').on('activate.bs.scrollspy', function () {
			var currentItem = $(".nav li.active > a").text();
			$(".panes").html("目前您正在查看 - " + currentItem);
			})*/
			SetTime();
			dropdown();
    });
//引入天气插件的js方法
//天气插件的两个js文件会导致jQuery-ui无法运行，已暂停使用；
    /*var icons = new Skycons({"color": "#FFD700"}),
        list  = [
            "clear-day"
        ],
        i;

    for(i = list.length; i--; )
        icons.set(list[i], list[i]);

    icons.play();
	
    var icons = new Skycons({"color": "#f5f5f5"}),
        list  = [
            "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

    for(i = list.length; i--; )
        icons.set(list[i], list[i]);

    icons.play();*/
//时间插件的js方法，经测试这个方法在这里初始化会造成页面卡顿，正考虑其他解决办法；
    /*function GetRTime() {
        var EndTime = new Date('2018/01/27 22:54:00');//这里设置你预定的时间
        var NowTime = new Date();
        var t = EndTime.getTime() - NowTime.getTime();
        var d = Math.floor(t / 1000 / 60 / 60 / 24);
        var h = Math.floor(t / 1000 / 60 / 60 % 24);
        var m = Math.floor(t / 1000 / 60 % 60);
        var s = Math.floor(t / 1000 % 60);

        document.getElementById("t_d").innerHTML = d;
        document.getElementById("t_h").innerHTML = h;
        document.getElementById("t_m").innerHTML = m;
        document.getElementById("t_s").innerHTML = s;
        if (s == "0" && m == "0" && h == "0" && d == "0") {
            alert('时间到啦！')
        }
        setInterval(GetRTime, 0);
    }*/
//2.实现秒表功能，实现时 分 秒 毫秒 点击1开始计时，2结束计时；

    
		//发现在用户切换到其他界面后，浏览器为了节约资源把计时器给停了，正在寻求高级写法！


