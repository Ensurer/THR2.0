<link rel="stylesheet" href="/css/org/weather/carousel-style.css">
<div id="weather-carousel" class="carousel slide" style="display: none ">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#weather-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#weather-carousel" data-slide-to="1"></li>
        <li data-target="#weather-carousel" data-slide-to="2"></li>
        <li data-target="#weather-carousel" data-slide-to="3"></li>
        <li data-target="#weather-carousel" data-slide-to="4"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img style="width: 100%" src="/images/org/weather-images/1.jpg" />
            <div class="caption">
                <div class="w3layouts-info">
                    <div class="w3layouts-info-top">
                        <h3>17°c</h3>
                        <h4>Rainy</h4>
                        <p>San Francisco</p>
                    </div>
                    <canvas id="rain" width="40" height="40"></canvas>
                    <div class="w3layouts-info-bottom">
                        <h5>February 1 , 2018</h5>
                        <p>Monday</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img style="width: 100%" src="/images/org/weather-images/3.jpg" />
            <div class="caption">
                <div class="w3layouts-info">
                    <div class="w3layouts-info-top">
                        <h3>12°c</h3>
                        <h4>Rainy</h4>
                        <p>San Francisco</p>
                    </div>
                    <canvas id="sleet" width="40" height="40"></canvas>
                    <div class="w3layouts-info-bottom">
                        <h5>February 2 , 2018</h5>
                        <p>Tuesday</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img style="width: 100%" src="/images/org/weather-images/5.jpg" />
            <div class="caption">
                <div class="w3layouts-info">
                    <div class="w3layouts-info-top">
                        <h3>20°c</h3>
                        <h4>Cloudy</h4>
                        <p>San Francisco</p>
                    </div>
                    <canvas id="cloudy" width="40" height="40"></canvas>
                    <div class="w3layouts-info-bottom">
                        <h5>February 3 , 2018</h5>
                        <p>Wednesday</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img style="width: 100%" src="/images/org/weather-images/4.jpg" />
            <div class="caption">
                <div class="w3layouts-info">
                    <div class="w3layouts-info-top">
                        <h3>22°c</h3>
                        <h4>Sunny</h4>
                        <p>San Francisco</p>
                    </div>
                    <canvas id="partly-cloudy-day" width="40" height="40"></canvas>
                    <div class="w3layouts-info-bottom">
                        <h5>February 4 , 2018</h5>
                        <p>Thursday</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img style="width: 100%" src="/images/org/weather-images/2.jpg" />
            <div class="caption">
                <div class="w3layouts-info">
                    <div class="w3layouts-info-top">
                        <h3>-5°c</h3>
                        <h4>Snowy</h4>
                        <p>San Francisco</p>
                    </div>
                    <canvas id="snow" width="40" height="40"></canvas>
                    <div class="w3layouts-info-bottom">
                        <h5>February 5 , 2018</h5>
                        <p>Friday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#weather-carousel"
       data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#weather-carousel"
       data-slide="next">&rsaquo;</a>
</div>
