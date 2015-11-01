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

        #slide-3 {
            background: -webkit-linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* For Firefox 3.6 to 15 */
            background: linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* Standard syntax */
            position: relative;

        }

        .scroll {
            position: relative;
            top: -11em;
        }

        #slide-1 {
            padding-left: 0px;
            padding-right: 0px;
            background: rgba(102, 133, 62, 1);
        }

        .homeSlide {
            background-position: 50% 50%;
            background-image: url({!! $page->page_image !!});
            background-repeat: no-repeat;
            background-size: cover;
            background-color: -webkit-linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* For Safari 5.1 to 6.0 */
            background-color: -o-linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* For Opera 11.1 to 12.0 */
            background-color: -moz-linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* For Firefox 3.6 to 15 */
            background-color: linear-gradient(rgba(102, 133, 62, 0) 0%, rgba(102, 133, 62, 1) 10%); /* Standard syntax */
            display: block;

            height: 100%;
        }
    </style>
    {{-- HTML5 SHim and Respond.js for IE8 Support --}}
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body onload="sizing()">
{{--@include('blog.partials.page-nav')--}}

{{--@yield('page-header')--}}
{{--@yield('content')--}}

{{--@include('blog.partials.page-footer')--}}

<main>
    <section id="slide-1" class="container bcg"
             style="position: relative;"
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
             data-150-top="top:17%;"
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
                       style="position: absolute; margin-left:150px;"
                       data-700-top="position:fixed; top:400px;"
                            {{--data-151-top="position:absolute; top:151px;"--}}
                       data-150-top="position:fixed;top:180px"
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
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

    </div>
    <div id="slide-3" style="min-height: 600px;">
        <div class="hidden-sm hidden-xs"
             data-0="position:relative;padding-top:2em;"
             data-50p-top="top:.5em;"
             data-top="" data-anchor-target="#slide-3">
            <div class="hsContainer">

            </div>
        </div>
        <div data-0="position:relative;padding-top:15em; min-height:13em;"
             data-50p-top="top:.5em;"
             data-top="" data-anchor-target="#slide-3">
            <div class="hsContainer">
                <div class="hsContent">
                    <h2 data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1; "
                        data-anchor-target="#slide-3 h2">{{$page->title}}</h2>
                        {{ $page->content_html  }}

                </div>
            </div>
        </div>
    </div>


</main>
<script src="{{ elixir('assets/js/blog.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>

{{-- Scripts --}}
<script src="{{ asset('/assets/js/main.js') }}"></script>

@yield('scripts')
<script>

</script>

<script type="text/javascript">
    var io = this.io ^= 1;
    $('body').css({overflowY: io ? 'scroll' : 'hidden'});
    var h = window.innerHeight;
    var w = window.innerWidth;
    var docWidth = document.documentElement.clientWidth || document.body.clientWidth;


    $('#slide-2').width(docWidth);
    var body_height = $('body').height();
    console.log(body_height);

    imagesLoaded(document.querySelector('#slide-1'), function () {
        //  console.log('all images loaded');
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
            $('.homeSlide').css({'min-height':'450px'});
        }
        else {
            skrollr.init(
                    {forceheight: true}
            );
        }
    };


    function sizing() {
        console.log(docWidth);
        if (docWidth <= 760) {
            skrollr.init().destroy();
            $('#nav').addClass(' navbar-fixed-top');

//            $('#slide-1').css({'background': "url(/assets/img/homepage.jpg) center center 100%"});
            $('.homeSlide').css({'min-height':'450px'});
        }
        else {
            skrollr.init({
                forceHeight: false
            });
        }
    }

</script>


</body>
</html>