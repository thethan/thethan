@extends('blog.layouts.master',
    ['title' => $post->title,
    'meta_description' => $post->meta_description ?: config('blog.description')
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
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $page->content_html !!}
                </div>
            </div>
        </div>
    </article>

    {{-- Works--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {{-- The posts --}}
                @foreach($works as $work)
                    <div class="post-preview">

                        <h2 class="post-title">{{ $work->title }}</h2>


                        <p class="post-meta">

                            Posted on {{ $work->date->format('F j, Y') }}

                        </p>
                        <div class="workContent">
                            {!! $work->content !!}
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
