<link rel="stylesheet" type="text/css" href="/css/org/music/audio.css">
<body style="height: 588px">
<div class="audio-box" id="musicbar">
    <div class="audio-container">
        <div class="audio-cover"></div>
        <div class="audio-view">
            <h3 class="audio-title">未知歌曲</h3>
            <div class="audio-body">
                <div class="audio-backs">
                    <div class="audio-this-time">00:00</div>
                    <div class="audio-count-time">00:00</div>
                    <div class="audio-setbacks">
                        <i class="audio-this-setbacks">
                            <span class="audio-backs-btn"></span>
                        </i>
                        <span class="audio-cache-setbacks">
							</span>
                    </div>
                </div>
            </div>
            <div class="audio-btn">
                <div class="audio-select">
                    <div class="audio-prev"></div>
                    <div class="audio-play"></div>
                    <div class="audio-next"></div>
                    <div class="audio-menu"></div>
                    <div class="audio-volume"></div>
                </div>
                <div class="audio-set-volume">
                    <div class="volume-box">
                        <i><span></span></i>
                    </div>
                </div>
                <div class="audio-list">
                    <div class="audio-list-head">
                        <p>☺随心听</p>
                        <span class="menu-close">关闭</span>
                    </div>
                    <ul class="audio-inline">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="/js/org/music/audio.js"></script>
<script type="text/javascript">
    $(function(){
        var song = [
            {
                'cover' : '/images/org/music-images/cover7.jpg',
                'src' : '{{URL::asset('music/Martell、Steerner - Sky (Radio Edit).mp3')}}',
                'title' : '测试音乐个别暂且不支持播放(有bug,心塞555~~)-sky.mp3'
            },
            {
                'cover' : '/images/org/music-images/cover7.jpg',
                'src' : '{{URL::asset('music/Crazy Frog - Axel F.mp3')}}',
                'title' : 'Crazy Frog - Axel F'
            },
            {
                'cover' : '/images/org/music-images/cover5.jpg',
                'src' : '{{URL::asset('music/Crayon Pop - Uh-ee.mp3')}}',
                'title' : 'Crayon Pop - Uh-ee'
            },
            {
                'cover' : '/images/org/music-images/cover3.jpg',
                'src' : '{{URL::asset('music/Galantis - Hunter.mp3')}}',
                'title' : 'Galantis - Hunter'
            },
            {
                'cover' : '/images/org/music-images/cover3.jpg',
                'src' : '{{URL::asset('music/EXID.mp3')}}',
                'title' : 'EXID - 위아래'
            },
            {
                'cover' : '/images/org/music-images/cover1.jpg',
                'src' : '{{URL::asset('music/Blue Stahli - Shotgun Senorita.mp3')}}',
                'title' : 'Blue Stahli - Shotgun Senorita'
            },
            {
                'cover' : '/images/org/music-images/cover1.jpg',
                'src' : '{{URL::asset('music/PSY、CL - DADDY.mp3')}}',
                'title' : 'PSY、CL - DADDY'
            },
            {
                'cover' : '/images/org/music-images/cover1.jpg',
                'src' : '{{URL::asset('music/Daz Sampson - Teenage Life.mp3')}}',
                'title' : 'Daz Sampson - Teenage Life'
            },
            {
                'cover' : '/images/org/music-images/cover1.jpg',
                'src' : '{{URL::asset('music/Virtual Riot - Energy Drink.mp3')}}',
                'title' : 'Virtual Riot - Energy Drink'
            },
            {
                'cover' : '/images/org/music-images/cover1.jpg',
                'src' : '{{URL::asset('music/日本ACG - 蓄勢 ~GEAR UP~.mp3')}}',
                'title' : '日本ACG - 蓄勢 ~GEAR UP~'
            }
            {{--@foreach()
            {
                'cover' : '',
                'src'   : '',
                'title' : ''
            }
            @endforeach--}}
        ];

        var audioFn = audioPlay({
            song : song,
            autoPlay : false  //是否立即播放第一首，autoPlay为true且song为空，会alert文本提示并退出
        });

        /* 向歌单中添加新曲目，第二个参数true为新增后立即播放该曲目，false则不播放 */
        audioFn.newSong({
            'cover' : '/images/org/music-images/cover4.jpg',
            'src' : '{{URL::asset('music/刘洋 - 千年等一回 (小黄人版).mp3')}}',
            'title' : '刘洋 - 千年等一回 (小黄人版)'
        },false);

        /* 暂停播放 */
        //audioFn.stopAudio();

        /* 开启播放 */
        //audioFn.playAudio();

        /* 选择歌单中索引为3的曲目(索引是从0开始的)，第二个参数true立即播放该曲目，false则不播放 */
        //audioFn.selectMenu(3,true);

        /* 查看歌单中的曲目 */
        //console.log(audioFn.song);

        /* 当前播放曲目的对象 */
        //console.log(audioFn.audio);
    });
</script>