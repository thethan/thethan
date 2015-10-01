<html>
<head>
    <title>{{config('blog.title')}}</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">

    <h1>{{ config('blog.title') }}</h1>
    <h5> Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
                <em>( {{ $post->published_at }} )</em>

                    {!! str_limit($post->content) !!}
                    @if(strlen($post->content) > 100)
                        </p>
                    @endif
            </li>
        @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
</div>
</body>
</html>