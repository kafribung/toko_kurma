<!-- nav -->
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="tel:082250168195" class="mr-2"><span class="fa fa-phone mr-1"></span> 0822 5016 8195</a>
                    <a href="mailto:dandi@soppeng.com"><span class="fa fa-paper-plane mr-1"></span> dandi@soppeng.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="reg">
                    <p class="mb-0"><a href="/register" class="mr-2">Sign Up</a> <a href="/login">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Pa'balu <span>Kurma</span></a>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item {{Request()->is('beranda') ? 'active' : ''}}"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item {{Request()->is('about') ? 'active' : ''}}"><a href="/about" class="nav-link">About</a></li>  
                @else
                    <li class="nav-item {{Request()->is('beranda') ? 'active' : ''}}"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item {{Request()->is('about') ? 'active' : ''}}"><a href="/about" class="nav-link">About</a></li> 
                    <li class="nav-item {{Request()->is('beranda/create') ? 'active' : ''}}"><a href="/beranda/create" class="nav-link">Add Data</a></li>
                @endguest
                
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->