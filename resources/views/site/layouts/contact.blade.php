@extends('blog.layouts.master',
    ['title' => $page->title,
    'meta_description' => $page->meta_description ?: config('blog.description')
    ]
 )

@section('page-header')
    <header class="intro-header" style="background-image: url( {{ page_image($post->page_image) }} );">
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

@endsection