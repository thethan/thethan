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

    </style>
    {{-- HTML5 SHim and Respond.js for IE8 Support --}}
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/assets/js/imageLoaded.js"></script>
</head>
<body onload="sizing()">
{{--@include('blog.partials.page-nav')--}}

{{--@yield('page-header')--}}
{{--@yield('content')--}}

{{--@include('blog.partials.page-footer')--}}

<main>
    <section id="slide-1" class="row homeSlide">
        <div class="bcg"
             style="position:static"
             data-center="background-position: 50% -50px;"
             data-top-bottom="background-position: 50% -286px;"
             data-100-top="height:150;z-index:201;"
             data-anchor-target="#slide-1">
        </div>

        <div id="slide-2">
            <nav class="navbar navbar-default" id="nav"
                 data-0="position:relative; top:80%;"
                 data-150-top="position:fixed;top:20%;"
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
                           data-700-top="position:fixed; top:500px;"
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
            <div style="padding:2em;" data-0="display:none;" data-top-top="display:block;" data-anchor-target="#nav"
                 data-edge-strategy="set">&nbsp;</div>

            </div>
        </section>
{{--    <section id="slide-3">
        <div class="bcg" data-0="background-color:rgb(1,27,59);"
             style="position:static;"
             data-200-top="position:fixed; top:200px;" data-top="background-color:(0,0,0);"  data-anchor-target="#slide-3">
            <div class="hsContainer">
                <div class="hsContent">
                    <h2 data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1; " data-106-top="opacity: 0" data-anchor-target="#slide-3 h2">Fade me in and out</h2>
                    <p data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-3 h2">Here we are changing the background color from blue to black. Text is fading in at 206 pixels from the bottom and fading out 106 pixels from the top.</p>
                </div>
            </div>
        </div>
    </section>--}}
</main>

{{-- Scripts --}}
<script src="{{ elixir('assets/js/blog.js') }}"></script>
@yield('scripts')
{{--<script type="text/javascript">--}}
    {{--var io = this.io ^= 1;--}}
    {{--$('body').css({overflowY: io ? 'scroll' : 'hidden'});--}}
    {{--var h = window.innerHeight;--}}
    {{--var w = window.innerWidth;--}}
    {{--var docWidth = document.documentElement.clientWidth || document.body.clientWidth;--}}

    {{--$('#slide-2').width(docWidth);--}}
    {{--//$('#slide-1 .hsContent').height(h).width(w);--}}
    {{--var body_height = $('body').height();--}}


    {{--window.onresize = function (event) {--}}
        {{--var h = window.innerHeight;--}}
        {{--var w = window.innerWidth;--}}
        {{--var docWidth = document.documentElement.clientWidth || document.body.clientWidth;--}}
        {{--$('#slide-2').width(docWidth);--}}
        {{--$('#slide-3').width(docWidth);--}}
        {{--if (docWidth <= 760) {--}}
            {{--skrollr.init().destroy();--}}
            {{--$('#slide_3').width(docWidth);--}}
            {{--$('#slide-1').css({--}}
                {{--'position': 'fixed',--}}
                {{--'bottom': '0',--}}
                {{--'height': '0px'--}}
            {{--});--}}
            {{--$('#slide-2').css({'position': 'fixed', 'bottom': '0', 'height': '55%', 'overflow-y': 'scroll'});--}}
            {{--$('#slide-2 header').css({'position': 'fixed', 'top': '0px'});--}}
            {{--$('#slide-3').css({'opacity': 1});--}}
            {{--$('#slide-1').css({'position': 'fixed', 'bottom': '0', 'height': '0px'});--}}
            {{--$('#slide-2').css({'position': 'fixed', 'bottom': '0'});--}}
            {{--$('#slide-3').css({'overflow-x': 'scroll'});--}}
            {{--$('#slide-3').css({'opacity': 1});--}}
        {{--}--}}
        {{--else {--}}
            {{--skrollr.init(--}}

            {{--);--}}
        {{--}--}}
    {{--};--}}


    {{--function sizing() {--}}
        {{--console.log(docWidth);--}}
        {{--if (docWidth <= 760) {--}}
            {{--skrollr.init().destroy();--}}

            {{--$('#slide_3').width(docWidth);--}}
            {{--$('#slide-1').css({--}}
                {{--'position': 'fixed',--}}
                {{--'bottom': '0',--}}
                {{--'height': '0px'--}}
            {{--});--}}
            {{--$('#slide-2').css({'position': 'static', 'bottom': '0', 'height': '55%', 'overflow-y': 'scroll'});--}}
            {{--$('#slide-2 #nav').css({'position': 'static', 'top': '0px'});--}}
            {{--$('#slide-3').css({'opacity': 1});--}}
            {{--$('#slide-1 .bcg').css({'background': "url(/assets/img/homepage.jpg) center center 100%"});--}}
            {{--$('h5').css({'display': 'none'});--}}
            {{--$('#slide-3 .bcg').css({'opacity': 1});--}}
        {{--}--}}
        {{--else {--}}
            {{--skrollr.init(--}}
            {{--);--}}
            {{--$body = $('body');--}}
            {{--console.log($body);--}}

        {{--}--}}

        {{--$(document).ready(function () {--}}
            {{--console.log('width sizing');--}}
            {{--if ($(window).width() <= 767) {--}}
                {{--skrollr.init().destroy();--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}
    {{--;--}}
    {{--body_height = body_height/2;--}}
    {{--$('body').height(h -150);--}}

{{--</script>--}}
<script src="{{asset('/assets/js/imagesloaded.js')}}"></script>
<script src="{{ asset('/assets/js/main.js') }}">

</script>

</body>
</html>