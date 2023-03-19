<!-- NOTES:
Problem w/ this waterfall plugin:
- fadein (forcibly fixed with the code from pull request in https://github.com/bingdian/waterfall)
- !! infinite scroll cant load properly when there's inner scroll
-->
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>finitescroll</title>
    <link rel="stylesheet" href="css/waterfall.css">
</head>
<body>
<div id="header">
    <h1>finitescroll</h1>
</div>
<div class="waterfall">
    <div id="waterfall-container"></div>
</div>
<div>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab doloremque mollitia deserunt incidunt totam cupiditate corrupti perspiciatis debitis. Tempora ratione atque enim quo quasi? Aperiam assumenda cum culpa esse illo.</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt porro ducimus eveniet expedita fugiat sit, reiciendis magnam, atque quo placeat facilis ab aut quae, dolore deleniti? Ipsum sequi numquam optio.</p>
</div>

<!-- Waterfall implementation using the jquery plugin 
by bingdian in https://wlog.cn/waterfall/ -->
<!-- Waterfall Template -->
<script type="text/x-handlebars-template" id="waterfall-tpl">
{{#result}}
    <div class="waterfall-item" style="opacity:0;filter:alpha(opacity=0); ">
        <img src="{{image}}" width="auto" height="auto" />
    </div>
{{/result}}
</script>

<!-- Include js dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js" integrity="sha512-RNLkV3d+aLtfcpEyFG8jRbnWHxUqVZozacROI4J2F1sTaDqo1dPQYs01OMi1t1w9Y2FdbSCDSQ2ZVdAC8bzgAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/waterfall.min.js"></script>

<!-- Define Waterfall -->
<script>
$('#waterfall-container').waterfall({
    itemCls: 'waterfall-item',
    colWidth: 222,  
    gutterWidth: 15,
    gutterHeight: 15,
    isFadeIn: true,
    isAnimated: true,
    checkImagesLoaded: false,
    bufferPixel: -200,
    path: function(page) {
        return 'json/data1.json?page=' + page;
    }
});
</script>

</body>
</html>