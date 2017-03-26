
<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="#" class="simple-text">
            Admin Panel
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li {{ Request::is('pages*') ? 'class=active' : '' }}>
                <a href="{{ route('backend.pages') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Pages</p>
                </a>
            </li>
            <li {{Request::is('banner*') ? 'class=active' : '' }}>
                <a href="{{ route('backend.banner') }}">
                    <i class="material-icons">satellite</i>
                    <p>Banner</p>
                </a>
            </li>
            <li {{ Request::is('job*') ? 'class=active' : ''}}>
                <a href="{{ route('backend.job') }}">
                <i class="material-icons">comment</i>
                <p>Job</p>
                </a>
            </li>
            <li {{ Request::is('client*') ? 'class=active' : ''}}>
                <a href="{{ route('backend.client') }}">
                    <i class="material-icons">comment</i>
                    <p>Client</p>
                </a>
            </li>
            <li {{ Request::is('review*') ? 'class=active' : ''}}>
                <a href="{{ route('backend.review') }}">
                    <i class="material-icons">comment</i>
                    <p>Review</p>
                </a>
            </li>
            <li {{ Request::is('application*') ? 'class=active' : ''}}>
                <a href="{{ route('backend.application') }}">
                    <i class="material-icons">comment</i>
                    <p>Application</p>
                </a>
            </li>

        </ul>
    </div>
</div>
<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li>
                            <a href="{{ route('admin.logout') }}"><strong>Log out</strong></a>
                        </li>
                        <li>
                            <a href="{{ route('backend.changepassword') }}"><strong>Change Password</strong></a>
                        </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
