{{-- Navigation --}}
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        {{-- Drand and Toggle Grouped for mobile display--}}
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-main">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">{{ config('blog.name') }}</a>
        </div>

        {{-- Collect the nav links, forms and other contetn for toggling--}}
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>