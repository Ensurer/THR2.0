<!DOCTYPE html>
<head>
    <title>极客凌云</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- 引入 Bootstrap -->
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!--主要样式css文件-->
    <link href="{{URL::asset('css/myblog/style.css')}}" rel="stylesheet" >
    <link href="/css/myblog/animate.css" rel="stylesheet">
    <link href="/css/myblog/font-awesome.min.css" rel="stylesheet">
    <script src="/js/org/weather/jquery-2.1.4.min.js"></script>
    {{--Sweetalert --}}
    <link href="/css/org/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="/js/org/sweetalert/sweetalert.min.js"></script>
</head>
<body>
<div id="jkly-page">
    @include('navbar')
    @include('location')
    @yield('blog')
    @include('footer')
</div>
</body>
<script src="/js/bootstrap/bootstrap.min.js"></script>
{{--入口文件--}}
<script src="/js/myblog/main.js" type="text/javascript"></script>
</html>
