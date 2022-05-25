<!-- NAVBAR -->
@php
    // define variables for translation and menus
    // as menu link is not translatable from UI we did 2 additional menus for ru and en
    // it is not good, but it is quick resolution. Otherwise we can override menubuilder veiw
    $locale = Session::get('locale');
    $hamburgerMenu = ($locale == 'az' || $locale == '')?"hamburgerNavbar":"hamburgerNavbar_foreign".$locale;
@endphp

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
                                {{menu("Logo", "components.logo")}}
                                <div class="footer-menu">
                                    <div class="row">
                                        {{menu($hamburgerMenu, "components.hamburgerNavbar")}}
                                        <div class="col-5 col-lg-12 col-sm-4 bigsearch">
                                            {{menu("search", "components.search")}}
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
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target=".navbar-collapse" aria-controls="navbar-collapse"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    {{--{{menu("dropDownMenu", "components.dropDownMenu")}}--}}
                                    {{menu($hamburgerMenu, "components.dropDownMenu")}}
                                </div>
                                <div class="nav-search">
                                    <span id="search"><i class="fas fa-search"></i></span>
                                </div>
                                <!-- Search end -->

                                <div class="search-block" style="display: none;">
                                    <form action="{{route('news')}}">
                                        <label for="search-field" class="w-100 mb-0">
                                            <input type="text" class="form-control" name="search" id="search-field"
                                                   placeholder="Axtar">
                                        </label>
                                        <span class="search-close">&times;</span>
                                    </form>

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
