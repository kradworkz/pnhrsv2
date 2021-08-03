<nav class="navbar navbar-expand-lg navigation fixed-top sticky navy" v-if="content == 'register'">
    <div class="container">
        <a class="navbar-logo" href="index.php">
            <img src="assets/images/logo-dark.png" alt="" height="19" class="logo-dark">
            <img src="assets/images/logo-light.png" alt="" height="19" class="logo-light">
        </a>

        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="fa fa-fw fa-bars"></i>
        </button>
    
        <div class="collapse navbar-collapse" id="topnav-menu-content">
            <ul class="navbar-nav ms-auto" id="topnav-menu" >
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>