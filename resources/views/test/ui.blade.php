
    <link href="css/myblog/jQuery-ui.css" rel="stylesheet">
    <script src="js/myblog/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
    <style>
        .toggler { width: 500px; height: 200px; }
        #button { padding: .5em 1em; text-decoration: none; }
        #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
        #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
    </style>
    <script>
        $(function() {
            // 运行当前选中的特效
            function runEffect() {
                // 从中获取特效类型
                var selectedEffect = $( "#effectTypes" ).val();

                // 大多数的特效类型默认不需要传递选项
                var options = {};
                // 一些特效带有必需的参数
                if ( selectedEffect === "scale" ) {
                    options = { percent: 0 };
                } else if ( selectedEffect === "size" ) {
                    options = { to: { width: 200, height: 60 } };
                }

                // 运行特效
                $( "#effect" ).hide( selectedEffect, options, 1000, callback );
            };

            // 回调函数
            function callback() {
                setTimeout(function() {
                    $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
                }, 1000 );
            };

            // 根据选择菜单值设置特效
            $( "#button" ).click(function() {
                runEffect();
                return false;
            });
        });
    </script>

<div class="toggler">
    <div id="effect" class="ui-widget-content ui-corner-all">
        <h3 class="ui-widget-header ui-corner-all">隐藏（Hide）</h3>
        <p>
            Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
        </p>
    </div>
</div>

<select name="effects" id="effectTypes">
    <option value="blind">百叶窗特效（Blind Effect）</option>
    <option value="bounce">反弹特效（Bounce Effect）</option>
    <option value="clip">剪辑特效（Clip Effect）</option>
    <option value="drop">降落特效（Drop Effect）</option>
    <option value="explode">爆炸特效（Explode Effect）</option>
    <option value="fold">折叠特效（Fold Effect）</option>
    <option value="highlight">突出特效（Highlight Effect）</option>
    <option value="puff">膨胀特效（Puff Effect）</option>
    <option value="pulsate">跳动特效（Pulsate Effect）</option>
    <option value="scale">缩放特效（Scale Effect）</option>
    <option value="shake">震动特效（Shake Effect）</option>
    <option value="size">尺寸特效（Size Effect）</option>
    <option value="slide">滑动特效（Slide Effect）</option>
</select>

<a href="#" id="button" class="ui-state-default ui-corner-all">运行特效</a>