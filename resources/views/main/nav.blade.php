<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MINI-mark</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Products Catagories<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/itview')}}">IT & Accessories</a></li>
                            <li><a href="{{url('/mobview')}}">Mobile & Accessories</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="soc"><a href="http://www.google.com"><span class="fa fa-google"></span></a></li>
                    <li class="soc"><a href="http://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
                    <li class="soc"><a href="http://www.twitter.com"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="{{url('/admin/compani')}}">For Sales</a></li>
                    @if(Auth::check())
                        <li><a href="{{url('/admin/compani/itorder')}}">Orders List</a></li>
                        @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Members<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @if(Auth::check())
                                <li><a href="{{url('/logout')}}">LogOut</a></li>
                                @else
                                <li><a href="{{url('/register')}}">Register</a></li>
                                <li><a href="{{url('/login')}}">Login</a></li>
                                @endif
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>