@extends('layouts.frame')
@section('blog')
    <style>

    </style>
    <script src="/js/blog/modernizr.custom.js"></script>
    <div id="jkly-header">
        <div class="container" id="content-margin">
            <div class="row row-pb-md" id="content-width">
                <div class="col-md-12">
                    <ul id="gtco-post-list">
                        <li class="two-third entry animate-box" data-animate-effect="fadeIn">
                            <a href="single.html">
                                {{--
                                    图片<div class="entry-img" style="background-image: url(images/img_10.jpg"></div>
                                --}}
                                <div class="entry-desc">
                                    @foreach($article as $v)
                                        {{--开始输出文章--}}
                                        <div class="post_box grid mask" style="min-height: 300px">
                                            <figure>
                                            <div class="header">
                                                <h2><a href="#">{{$v->art_title}}</a></h2>
                                                <div class="tag"><strong>Tags:</strong> <a href="#">{{$v->art_tag}}</a></div>
                                                <span class="posted_date">
                                                    {{$v['month']}}  {{$v['day']}}
                                                    <strong>{{$v['year']}}</strong>
                                                </span>
                                            </div>
                                            <div class="pb_right" >
                                                <img src="/images/blog/templatemo_image_01.jpg" alt="image" />
                                                <p style="">{{$v->art_description}}</p>
                                                <div class="comment" style="width: 100%;float: left;"><a href="">阅读量:<span class="dot-color">({{$v->art_view}})</span></a></div>
                                            </div>
                                                <figcaption>
                                                    <h5>MOBILE UI KIT</h5>
                                                    <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a>
                                                </figcaption>
                                                <!-- /figcaption -->
                                            </figure>
                                        </div>
                                    @endforeach
                                        <div class="green-black" id="pager">
                                            <span class="disabled" }}>当前页:</span>
                                            <span class="current">{{$article->currentPage()}}</span>
                                            @if($article->currentPage()!=1)
                                                <a href={{$article->previousPageUrl()}}> < Last</a>
                                            @endif
                                            @if($article->lastPage()>5)
                                                @if($article->lastPage()-$article->currentPage() > 5)

                                                    @for($i=$article->currentPage();$i<=$article->currentPage()+5;$i++)
                                                        <a href={{URL::asset("blog/articles/?page=$i")}}>{{$i}} </a>
                                                    @endfor

                                                @else
                                                    @for($i=$article->currentPage()-(5-($article->lastPage()-$article->currentPage()));$i<=$article->lastPage();$i++)
                                                        <a href={{URL::asset("blog/articles/?page=$i")}}>{{$i}} </a>
                                                    @endfor
                                                @endif
                                            @else
                                                @for($i=1;$i<=$article->lastPage();$i++)
                                                    <a href={{URL::asset("blog/articles/?page=$i")}}>{{$i}} </a>
                                                @endfor
                                            @endif
                                            @if($article->hasMorePages())
                                                <a href={{$article->nextPageUrl()}}>Next  > </a>
                                            @endif
                                            <span class="disabled" }}>总页数:</span>
                                            <span class="current">{{$article->lastPage()}}</span>
                                            <input type="number" id="jump" onblur="jump()">
                                            <a href="#" id="url">跳转</a>
                                            <script language="javascript" type="text/javascript">
                                                function jump() {
                                                    $page = parseInt($('#jump').val());

                                                    if ($page >  {{$article->lastPage()}})
                                                    {
                                                        $page =  {{$article->lastPage()}};

                                                    }
                                                    else if($page<=0){
                                                        swal({
                                                            title: "警告!",
                                                            text: "页数不能为负数哦,换个数字试试吧(ˉ▽ˉ);",
                                                            icon: "warning"
                                                        });
                                                    }
                                                    $('#url').attr("href", "{{URL::asset("blog/articles/?page=")}}" + $page);
                                                }
                                            </script>
                                        </div>
                                </div>
                            </a>
                            {{--
                                底部链接
                                <a href="single.html" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
                            --}}
                        </li>
                        <li class="one-third entry animate-box" data-animate-effect="fadeIn">
                            <a href="single.html">
                                <div class="entry-desc sidebar_box " style="min-height: 300px;margin-bottom: 0px;">
                                        <h3>Categories</h3>
                                        <div class="sb_content">
                                            <ul class="sidebar_menu">
                                                <li><a href="#">CSS Techniques</a></li>
                                                <li><a href="#">Web Design Tips</a></li>
                                                <li><a href="#">Best Wallpapers</a></li>
                                                <li><a href="#">Free Fonts</a></li>
                                                <li><a href="#">Photoshop Tutorials</a></li>
                                                <li><a href="#">3D Animation Tutorials</a></li>
                                            </ul>
                                        </div>
                               </div>
                            </a>

                            <a href="single.html">
                                <div class="entry-desc sidebar_box" style="min-height: 300px;margin-bottom: 0px;">
                                    <h3>Categories</h3>
                                    <div class="sb_content">
                                        <ul class="sidebar_menu">
                                            <li><a href="#">CSS Techniques</a></li>
                                            <li><a href="#">Web Design Tips</a></li>
                                            <li><a href="#">Best Wallpapers</a></li>
                                            <li><a href="#">Free Fonts</a></li>
                                            <li><a href="#">Photoshop Tutorials</a></li>
                                            <li><a href="#">3D Animation Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>


                            <a href="single.html">
                                <div class="entry-desc sidebar_box" style="min-height: 300px;margin-bottom: 0px;">
                                    <h3>Categories</h3>
                                    <div class="sb_content">
                                        <ul class="sidebar_menu">
                                            <li><a href="#">CSS Techniques</a></li>
                                            <li><a href="#">Web Design Tips</a></li>
                                            <li><a href="#">Best Wallpapers</a></li>
                                            <li><a href="#">Free Fonts</a></li>
                                            <li><a href="#">Photoshop Tutorials</a></li>
                                            <li><a href="#">3D Animation Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>

                            <a href="single.html">
                                <div class="entry-desc sidebar_box" style="min-height: 300px;margin-bottom: 0px;">
                                    <h3>Categories</h3>
                                    <div class="sb_content">
                                        <ul class="sidebar_menu">
                                            <li><a href="#">CSS Techniques</a></li>
                                            <li><a href="#">Web Design Tips</a></li>
                                            <li><a href="#">Best Wallpapers</a></li>
                                            <li><a href="#">Free Fonts</a></li>
                                            <li><a href="#">Photoshop Tutorials</a></li>
                                            <li><a href="#">3D Animation Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection