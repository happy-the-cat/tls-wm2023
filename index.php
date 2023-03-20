<!DOCTYPE html>
<html lang="en">
<?php require_once 'modules/head.php'; ?>
<body>
    <?php require_once 'modules/header.php'; ?>
    <!--TO DO-->


    <!-- Vox Populi -->
    <div class="vox-populi">
        <div class="waterfall">
            <div id="waterfall-container"></div>
        </div>
    </div>
    
    <!-- For testing purposes. Remove this later. -->
    <div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab doloremque mollitia deserunt incidunt totam cupiditate corrupti perspiciatis debitis. Tempora ratione atque enim quo quasi? Aperiam assumenda cum culpa esse illo.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt porro ducimus eveniet expedita fugiat sit, reiciendis magnam, atque quo placeat facilis ab aut quae, dolore deleniti? Ipsum sequi numquam optio.</p>
    </div>


    <!-- SCRIPTS -->
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

    <!-- Include JS Dependencies -->
    <?php require_once 'modules/dependencies.php'; ?>

    <!-- Define Waterfall (must include waterfall before this) -->
    <script>
    $('#waterfall-container').waterfall({
        itemCls: 'waterfall-item',
        colWidth: 215,  
        gutterWidth: 15,
        gutterHeight: 15,
        isFadeIn: true,
        isAnimated: true,
        checkImagesLoaded: false,
        bufferPixel: -200,
        path: function(page) {
            return '../json/data.json?page=' + page;
        }
    });
    </script>
</body>
</html>
