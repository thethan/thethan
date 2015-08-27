<ul class="nav navbar-nav">
    <li>
        <a href="/">Blog Home</a>
    </li>
    @if(Auth::check())
        <li @if(Request::is('/post*')) class="active" @endif>
            <a href="/admin/post">Posts</a>
        </li>
        <li @if(Request::is('/tag*')) class="active" @endif>
            <a href="/admin/tag">Tags</a>
        </li>
        <li @if(Request::is('/category*')) class="active" @endif>
            <a href="/admin/category">Categories</a>
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
                <li><a href="dashboard/user">Edit User</a></li>
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
        </li>
    @endif
</ul>