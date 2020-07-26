<header class="" style="background-color: #283E4A">
    <div class="container mx-auto">
        <nav class="navbar navbar-expand-sm">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="/images/logo.png">
            </a>

            <form class="form-inline my-1 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Me
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('profile', auth()->user())}}">My Profile</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <input type="submit" value="Log Out" class="dropdown-item">
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>
