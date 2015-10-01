<ul class="nav navbar-nav">
    <li>
        <a href="/">Blog Home</a>
    </li>
    @if(Auth::check())
        <li @if(Request::is('admin/post*')) class="active" @endif>
            <a href="/admin/post">Posts</a>
        </li>
        <li @if(Request::is('admin/tag*')) class="active" @endif>
            <a href="/admin/tag">Tags</a>
        </li>
        <li @if(Request::is('admin/category*')) class="active" @endif>
            <a href="/admin/category">Categories</a>
        </li>
        <li @if(Request::is('admin/upload*')) class="active" @endif>
            <a href="/admin/upload">Uploads</a>
        </li>
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Pages <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="/admin/pages/index">Index</a></li>
                <li><a href="/admin/pages/clips-and-stuff">Clips and Stuff</a></li>
                <li><a href="/admin/pages/resume">Resume</a></li>
                <li><a href="/admin/pages/news">News</a></li>
                <li><a href="/admin/pages/gallery">Index</a></li>
                <li><a href="/admin/pages/contact">contact</a></li>
            </ul>
        </li>
    @endif
</ul>

<ul class="nav navbar-nav navbar-right">
    @if(Auth::guest())
        <li>
            <a href="/auth/login">Login</a>
        </li>
    @else
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
        </li>
    @endif
</ul>