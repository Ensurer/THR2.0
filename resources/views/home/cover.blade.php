<header id="jkly-header" class="jkly-cover" role="banner" style="background-image:url(images/img_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-left">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                        <span class="date-post"> Date </span>
                        <h1 class="mb30"><a href="#">Hello! I am Huang Yuxuan<span class="dot-color">.</span></a></h1>
                        <p><a href="#time-container" data-target=".bs-js-navbar-scrollspy" class="text-link smoothScroll" style="color: #F73859;">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    #jkly-header,
    #jkly-counter,
    .jkly-bg {
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
        position: relative;
    }

    .jkly-bg {
        background-size: cover;
        background-position: center center;
        position: relative;
        width: 100%;
        float: left;
        position: relative;
    }

    #jkly-header .date-post {
        display: block;
        color: rgba(255, 255, 255, 0.5);
        font-size: 15px;
        text-transform: uppercase;
    }
    #jkly-header a {
        color: white;
    }
    #jkly-header a:hover {
        color: white;
    }

    .jkly-cover {
        height: 900px;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        float: left;
        width: 100%;
    }
    .jkly-cover .overlay {
        z-index: 0;
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(39, 41, 43, 0.7);
    }
    .jkly-cover > .jkly-container {
        position: relative;
        z-index: 10;
    }
    @media screen and (max-width: 768px) {
        .jkly-cover {
            height: 600px;
        }
    }
    .jkly-cover .display-t,
    .jkly-cover .display-tc {
        z-index: 9;
        height: 700px;
        display: table;
        width: 100%;
    }
    @media screen and (max-width: 768px) {
        .jkly-cover .display-t,
        .jkly-cover .display-tc {
            height: 600px;
        }
    }
    .jkly-cover.jkly-cover-sm {
        height: 600px;
    }
    @media screen and (max-width: 768px) {
        .jkly-cover.jkly-cover-sm {
            height: 400px;
        }
    }
    .jkly-cover.jkly-cover-sm .display-t,
    .jkly-cover.jkly-cover-sm .display-tc {
        height: 600px;
        display: table;
        width: 100%;
    }
    @media screen and (max-width: 768px) {
        .jkly-cover.jkly-cover-sm .display-t,
        .jkly-cover.jkly-cover-sm .display-tc {
            height: 400px;
        }
    }
    #jkly-header .display-tc, #jkly-counter .display-tc, .jkly-cover .display-tc {
        display: table-cell !important;
        vertical-align: middle;
    }
    #jkly-header .display-tc h1, #jkly-counter .display-tc h1, .jkly-cover .display-tc h1 {
        margin-bottom: 0px;
        margin-top: 0;
        font-size: 60px;
        line-height: 1.1;
        font-family: "Crimson Text", Arial, sans-serif;
        font-weight: 300;
    }
</style>