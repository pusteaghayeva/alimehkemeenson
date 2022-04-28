<!-- NAVBAR -->
<header class="">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <nav class="nav-side col-1 col-md-1 col-sm-1">
                <div class="sub-menu">
                    <span class="sub-menu-circle"></span>
                    <a href="#" class="sub-menu-link">
                            <span id="menu-open" class="sub-menu-icon">
                                <span class="menu-bar menu-bar-1"></span>
                            <span class="menu-bar menu-bar-2"></span>
                            <span class="menu-bar menu-bar-3"></span>
                            </span>
                    </a>
                </div>
                <div class="sub-menu-overlay">

                    <footer>
                        <div class="row">
                            <div class=" col-12 footer-menus  ">
                                <a href="/" class="footer-logo">
                                    <img src="assets/img/logo.png" class="logo-img" alt="">
                                    <p class="logo-text">Naxçıvan Muxtar Respublikası Ali Məhkəməsi</p>
                                </a>
                                <div class="footer-menu">
                                    <div class="row">

                                        {{menu("hamburgerNavbar", "components.hamburgerNavbar")}}
                                        <div class="col-5 col-lg-12 col-sm-4 bigsearch">
                                            <form class="form-inline">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Axtar..." aria-label="Search">
                                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Axtar</button>
                                            </form>
                                        </div>
                                        <hr>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </footer>

                </div>
            </nav>


            <nav class="site-navigation navbar-fixed col-11 col-md-11">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    {{menu("dropDownMenu", "components.dropDownMenu")}}
                                </div>
                                <div class="nav-search">
                                    <span id="search"><i class="fas fa-search"></i></span>
                                </div>
                                <!-- Search end -->

                                <div class="search-block" style="display: none;">
                                    <label for="search-field" class="w-100 mb-0">
                                        <input type="text" class="form-control" id="search-field" placeholder="Axtar">
                                    </label>
                                    <span class="search-close">&times;</span>
                                </div>
                                <!-- Site search end -->
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->


                </div>
                <!--/ Container end -->
            </nav>
        </div>
    </div>
</header>
<!--NAVBAR END-->