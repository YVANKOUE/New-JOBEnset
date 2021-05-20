<!-- Main header start -->
<header style="background-color:white; color:white; height:80px;" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mt-2">
            <a class="navbar-brand logo" href="index.html">
                <img src="{{asset('assets/logo.png')}}" style="margin: -100px; margin-right: 100px;"  alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Annonces
                        </a>
                        <ul class="dropdown-menu dm-2" aria-labelledby="navbarDropdownMenuLink10">
                           
                            <li><a class="dropdown-item" href="{{route('annonce')}}"> Ajouter une annonces</a></li>
                        </ul>
                        <ul class="dropdown-menu dm-2" aria-labelledby="navbarDropdownMenuLink10">
                           
                            <li><a class="dropdown-item" href="{{route('listesAnnonce.index')}}"> Details annonces</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                           
                                </div>
                               
                
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact us
                        </a>
                       
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ni-2">
                        <a class="nav-link" href="{{route('login')}}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item ni-2">
                        <a class="nav-link deffold" href="#">
                            /
                        </a>
                    </li>
                    <li class="nav-item ni-2">
                        <a class="nav-link" href="{{route('register')}}">
                            Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('listesAnnonce.create')}}" style="background-color:#ef1945;color:white; border-radius: 8px 8px 8px 8px;" class="nav-link link-color ml-5"><i class="flaticon-plus"></i> Post a Jobs</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
