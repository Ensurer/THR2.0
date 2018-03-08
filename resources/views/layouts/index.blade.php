<!DOCTYPE html>
<head>
    <title>极客凌云</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- 引入 Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--主要样式css文件-->
    <link href="{{URL::asset('css/myblog/style.css')}}" rel="stylesheet" >
    <link href="/css/myblog/animate.css" rel="stylesheet">
    <link href="/css/myblog/font-awesome.min.css" rel="stylesheet">
    <script src="/js/org/weather/jquery-2.1.4.min.js"></script>
    {{--Sweetalert --}}
    <link href="/css/org/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="/js/org/sweetalert/sweetalert.min.js"></script>
</head>
<body data-spy="scroll" data-offset="0" data-target="#myScrollspy">
    <div id="jkly-page">
        @include('navbar')
        @include('slidebar')
        @include('home.cover')
            <div id="jkly-header">
                <div class="container" id="content-margin">
                    <div class="row row-pb-md" id="content-width">

                            <div class="col-md-12">

                                <ul id="gtco-post-list">
                                    <li class="one-half entry animate-box" data-animate-effect="fadeIn">
                                        @include('home.time')
                                    </li>
                                    <li class="one-half entry animate-box" data-animate-effect="fadeIn">
                                        <a href="#">
                                            <div class="entry-desc">
                                                <h3>什么是响应式Web设计</h3>
                                                <p>  响应式Web设计(Responsive Web design)的理念是：页面的设计与开发应当根据用户行为以及设备环境（系统平台、屏幕尺寸、屏幕定向等）进行相应的响应和调整。具体的实践方式由多方面组成，包括弹性网格和布局、图片、CSS media query的使用等。无论用户正在使用笔记本还是iPad，我们的页面都应该能够自动切换分辨率、图片尺寸及相关脚本功能等，以适应不同设备；换句话说，页面应该有能力去自动响应用户的设备环境。响应式网页设计就是一个网站能够兼容多个终端——而不是为每个终端做一个特定的版本。</p>
                                            </div>
                                        </a>
                                        <a href="#" class="post-meta">Blog  <span class="date-posted">4 days ago</span></a>
                                    </li>
                                    <li class="one-half entry animate-box" data-animate-effect="fadeIn">
                                        <a href="#">
                                            <div class="entry-desc">
                                                <h3>时间如水，四季如梭</h3>
                                                <p>  孔子说上面那句话的时候有个背景，故后人多用来指时间像流水一样不停的流逝，感慨人生世事变换之快，亦有惜时之意在其中，看看您浏览网页的时候又有多少时间偷偷溜走了呢？<br>  坐观庭前花开花谢，笑看天边云卷云舒。笑对人生的四季交替，平常心对待事物的变换。四季皆是好时节，它的交替不会影响人的心情。春有百花秋望月，夏有凉风冬观雪。<br>您的心情就像随时间不停交换的四季，我只是你生命中的一个过客而已...在多年以后，你是否还记得有这样一个我的存在？</p>
                                            </div>
                                        </a>
                                        <a href="#" class="post-meta">Blog  <span class="date-posted">4 days ago</span></a>
                                    </li>
                                    <li class="one-half entry animate-box" data-animate-effect="fadeIn">
                                        @include('home.carousel')
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            @include('footer')
    </div>
@include('music')
</body>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/myblog/smoothscroll.js"></script>
{{--入口文件--}}
<script src="/js/myblog/main.js" type="text/javascript"></script>
<script language="text/JavaScript">
    $("#home-content").attr('width','500px')
</script>
</html>
