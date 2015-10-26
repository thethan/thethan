<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ut-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="author" content="{{ config('blog.author') }}">

    <title>{{ $title or config('blog.title') }}</title>
    {{-- Styles--}}

    <link rel="stylesheet" href="{{ elixir('assets/css/blog.css') }}">
    @yield('styles')
    <style>
        #slide-1 .bcg {
            /*background-image: none;*/
        }
    </style>
    {{-- HTML5 SHim and Respond.js for IE8 Support --}}
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="sizing()" >
{{--@include('blog.partials.page-nav')--}}

{{--@yield('page-header')--}}
{{--@yield('content')--}}

{{--@include('blog.partials.page-footer')--}}

<main>
    <section id="slide-1" class="container bcg"
             style="background: url(/assets/img/homepage.jpg); position: relative;"
             data-top="background-position: 50% -50px; top:0px;"
             data-top-bottom="background-position: 50% -369px; top:85px;"
            >
        <div class=" homeSlide"
             data-top="background-position: 50% -50px;"
             data-top-bottom=""
             data-anchor-target="#slide-1">
        </div>
    </section>
    <div id="slide-2" style="position:relative;">
        <nav class="navbar navbar-default" id="nav"
             style="margin-top: 0px;z-index: 200; "
             data-0="position:fixed; top:80%;"
             data-150-top="top:20%;"
             data-edge-strategy="set"
             data-anchor-target="#slide-2">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"
                       style="position: absolute;"
                       data-700-top="position:fixed; top:400px;"
                            {{--data-151-top="position:absolute; top:151px;"--}}
                       data-150-top="position:fixed;top:150px"
                       data-anchor-target="#slide-2 #nav">{{ $title }}</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!--placeholder div to prevent jumpy content when nav gets pinned-->
        {{--<div style=""--}}
             {{--data-0="display:block;height:30em;background: tan;top:-13em; position: relative; z-index:15;"--}}
             {{--data-40p-top="display:none;top:-1em"--}}
             {{--data-anchor-target="#nav"--}}
             {{--data-edge-strategy="set">&nbsp;</div>--}}

    </div>
        <div id="slide-3" style="min-height: 600px;">
            <div class="hidden-sm hidden-xs"
                 data-0="position:relative;padding-top:2em;"
                 data-50p-top="top:.5em;"
                 data-top="" data-anchor-target="#slide-3">
                <div class="hsContainer">
                    <div class="hsContent">
                        <h4 class="md-hidden"
                            data-center="opacity: 0; padding:1em;" data--200-bottom="opacity: 1" data-206-top="opacity: 0; " data-106-top="opacity: 0" data-anchor-target="#slide-3 h2"> Scroll Down For More</h4>
                    </div>
                </div>
            </div>
            <div data-0="position:relative;padding-top:15em; min-height:13em;"
                 data-50p-top="top:.5em;"
                 data-top=""  data-anchor-target="#slide-3">
                <div class="hsContainer">
                    <div class="hsContent">
                        <h2 data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1; "  data-anchor-target="#slide-3 h2">Master blade</h2>
                        <p data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1" data-anchor-target="#slide-3 h2">Here we are changing the background color from blue to black. Text is fading in at 206 pixels from the bottom and fading out 106 pixels from the top.</p>
                    </div>
                </div>
            </div>
        </div>


</main>
<script src="/assets/js/imageLoaded.js?v=<?php echo time();?>"></script>

{{-- Scripts --}}
<script src="{{ elixir('assets/js/blog.js') }}"></script>
@yield('scripts')

<script type="text/javascript">
//    var io = this.io ^= 1;
//    $('body').css({overflowY: io ? 'scroll' : 'hidden'});
//    var h = window.innerHeight;
//    var w = window.innerWidth;
//    var docWidth = document.documentElement.clientWidth || document.body.clientWidth;

var io = this.io ^= 1;
$('body').css({overflowY: io ? 'scroll' : 'hidden'});
var h = window.innerHeight;
var w = window.innerWidth;
var docWidth = document.documentElement.clientWidth || document.body.clientWidth;
console.log(w);
console.log(docWidth);
$('#slide-2').width(docWidth);
//$('#slide-1 .hsContent').height(h).width(w);
var body_height = $('body').height();
console.log(body_height);

imagesLoaded(document.querySelector('#slide-1'), function(){
    console.log('all images loaded');
});

window.onresize = function (event) {
    var h = window.innerHeight;
    var w = window.innerWidth;
    var docWidth = document.documentElement.clientWidth || document.body.clientWidth;
    $('#slide-2').width(docWidth);
    $('#slide-3').width(docWidth);
    if (docWidth <= 760) {
        skrollr.init().destroy();
        $('#nav').addClass(' navbar-fixed-top');
//        $('#slide_3').width(docWidth);
//        $('#slide-1').css({
//            'position': 'fixed',
//            'bottom': '0',
//            'height': '0px'
//        });
//        $('#slide-2').css({'position': 'fixed', 'bottom': '0', 'height': '55%', 'overflow-y': 'scroll'});
//        $('#slide-2 header').css({'position': 'fixed', 'top': '0px'});
//        $('#slide-3').css({'opacity': 1});
//        $('#slide-1').css({'position': 'fixed', 'bottom': '0', 'height': '0px'});
//        $('#slide-2').css({'position': 'fixed', 'bottom': '0'});
//        $('#slide-3').css({'overflow-x': 'scroll'});
//        $('#slide-3').css({'opacity': 1});
    }
    else {
        skrollr.init(
                {forceheight:false}
        );
    }
};


function sizing() {
    console.log(docWidth);
    if (docWidth <= 760) {
        skrollr.init().destroy();
        $('#nav').addClass(' navbar-fixed-top');

//        $('#slide_3').width(docWidth);
//        $('#slide-1').css({
//            'position': 'fixed',
//            'bottom': '0',
//            'height': '0px'
//        });
//        $('#slide-2').css({'position': 'static', 'bottom': '0', 'height': '55%', 'overflow-y': 'scroll'});
//        $('#slide-2 #nav').css({'position': 'static', 'top': '0px'});
//        $('#slide-3').css({'opacity': 1});
        $('#slide-1').css({'background': "url(/assets/img/homepage.jpg) center center 100%"});
    }
    else {
        skrollr.init({
                forceHeight: false
            }
        );

    }


}

//skrollr.init(
//        {
//            forceHeight: false
//         //edgeStrategy='set'
//        });

</script>
<script src="{{ asset('/assets/js/main.js') }}?v=<?php echo time();?>"></script>


</body>
</html>