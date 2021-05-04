<!-- Demo header-->
<section class="header text-center bg-light">
    <div class="container-fluid">
        <header class="py-2 bg-light">
            <strong class="text-muted h6 mb-0 font-weight-bold text-uppercase">Better Corporate Directors, Better Boards, Better Business</strong>
        </header>
    </div>
</section>


<!-- Sticky navbar-->
<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Institute of Corporate Directors Zimbabwe</strong>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            </a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Membership</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nc-icon nc-chart-pie-35"></i> {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item @if($activePage ?? '' == 'register') active @endif">
                            <a href="{{ route('register') }}" class="nav-link">
                                <i class="nc-icon nc-badge"></i> {{ __('Register') }}
                            </a>
                        </li>
                        <li class="nav-item @if($activePage ?? '' == 'login') active @endif">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> {{ __('Login') }}
                            </a>
                        </li> 
                </ul>
            </div>
        </div>
    </nav>
</header>