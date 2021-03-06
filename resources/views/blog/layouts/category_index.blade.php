@extends('blog.layouts.master')

@section('page-header')
    <header class="intro-header" style="background-image: url('{{ page_image($page_image)  }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-kg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $title }}</h1>
                        <hr class="small">
                        <h2 class="subheading">{{ $subtitle }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {{-- The posts --}}
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="{{ $post->categoryUrl($category) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>

                            @if($post->subtitle)
                                <h3 class="post-subtitle">{{ $post->subtilte }}</h3>
                            @endif
                        </a>
                        <h5><a href="?category={{$post->category->category}}"> {{ $post->category->category }}</a></h5>
                        <p class="post-meta">

                            Posted on {{ $post->published_at->format('F j, Y') }}

                            @if($post->tags->count())
                                in
                                {!! join(', ', $post->tagLinks()) !!}
                            @endif
                        </p>
                    </div>
                    <hr>
                @endforeach

                {{-- The Pager --}}
                <ul class="pager">
                    {{-- Reverse Direction --}}
                    @if($reverse_direction)
                        @if($posts->currentPage() > 1)
                            <li class="previous">
                                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                                    <i class="fa fa-long-arrow-left fa-lg"></i>
                                    Previous {{ $categoryUrl->category }} Posts
                                </a>
                            </li>
                        @endif
                        @if($posts->hasMorePages())
                            <li class="next">
                                <a href="{!! $posts->nextPageUrl() !!}">Next {{ $category->category }}
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                        @endif
                    @else
                        @if($posts->currentPage() > 1)
                            <li class="previous">
                                <a href="{!! $posts->url($posts->currentPage() - 1 ) !!}">
                                    <i class="fa fa-long-arrow-left fa-lg"></i>
                                    Newer {{ $category ? $category->category : '' }} Posts
                                </a>
                            </li>
                        @endif
                        @if($posts->hasMorePages())
                            <li class="next">
                                <a href="{!! $posts->nextPageUrl() !!}">
                                    Older {{ $category ?  $category->category : '' }} Posts
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection