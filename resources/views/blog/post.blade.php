<html>
<head>
    <title>{{ $post->title }}</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">

    <h1>{{$post->title}}</h1>
    <h5> {{ $post->published_at->format('M j, Y g:i') }}</h5>
    <hr>
    {!! $post->content !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        &laquo; Back
    </button>
</div>
</body>
</html>