@extends('site.layouts.master',
    ['title' => $page->title,
    'meta_description' => $page->meta_description ?: config('blog.description')
    ]
 )

@section('styles')
<style>

    #content {
    /*width:960px;*/
    background:#eee;
    /*border:1px solid #444;*/
    margin:1em auto;
    }

    #nav {
    display:block;
    padding:0;
    margin:0;
    width:100%;
    /*width:960px;*/
        background: #f8f8f8;
    }
    h1 {
        height: 80%;
    }
    #nav > li {
    display:inline-block;
    padding:1em;
    margin:0;
    }
    .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
        font-family: gnatfont;
    }
    </style>
@endsection

@section('scripts')

@endsection

@section('page-header')
    <header class="intro-header" style="background-image: url({{ page_image($page->page_image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
                    <div class="page--heading">
                        <h1>{{ $page->title }}</h1>
                        <h2 class="subheading">{{ $page->subheading }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $page->content_html !!}
                </div>
            </div>
        </div>
    </section>
   {{-- <aside>
        <div class="container">
            <div class="row">
                <ul>
                    @foreach ($indexLinks as $link)
                    <li class="col-sm-4">
                        <h3> {{$link->title}}</h3>
                            {!! $link->content !!}
                        <a class="btn btn-home" href="{{ route($link->link) }}"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </aside>--}}
@endsection