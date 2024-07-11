<div id="overlayNav">
    <div id="mobileNavWrapper" class="nav-wrapper">
        <nav id="mobileNavigation">
            <div class="collection">
                <a href="/">
                    HOME
                </a>
            </div>

            <div class="collection">
                <a href="{{ route('aboutUs') }}">
                    ABOUT
                </a>
            </div>

            <div class="collection">
                <a href="{{ route('celebrities') }}">
                    CELEBRITIES
                </a>
            </div>

            <div class="collection">
                <a href="{{ route('contactUs') }}">
                    CONTACT
                </a>
            </div>

            <div class="collection">
                <a href="{{ route('vip-subscription') }}">
                    BECOME A VIP <i class='bx bxs-star bx-lg bx-burst gold' ></i>
                </a>
            </div>

            <div class="collection">
                <a href="{{ route('order') }}">
                    ORDER NOW
                </a>
            </div>
        </nav>
    </div>
</div>

<header id="header" role="banner">
    <div class="header-inner">
        <div id="logoWrapper" class="title-logo-wrapper" data-content-field="site-title">

            <h1 id="logoImage" class="tmpl-loading logo-image"><a href="/"><img
                        src="http://images.squarespace-cdn.com/content/v1/60e54653e526b236351f2f2f/366dd1ba-6834-4742-b9f7-3e73988ba398/E360+Logo.png?format=1500w"
                        alt="Entertainment 360" /></a></h1>

        </div><!-- comment the linebreak between these two elements because science
   --><label for="mobileNavToggle" class="mobile-nav-toggle-label show-on-scroll-mobile">
            <div class="top-bar"></div>
            <div class="middle-bar"></div>
            <div class="bottom-bar"></div>
        </label><!-- comment the linebreak between these two elements because science
   -->
        <div id="headerNav" class="tmpl-loading">

            <div id="mainNavWrapper" class="nav-wrapper desktop-nav-wrapper show-on-scroll">
                <nav id="mainNavigation" data-content-field="navigation">

                    <div class="collection">
                        <a href="/">
                            HOME
                        </a>
                    </div>

                    <div class="collection">
                        <a href="{{ route('aboutUs') }}">
                            ABOUT
                        </a>
                    </div>

                    <div class="collection">
                        <a href="{{ route('celebrities') }}">
                            CELEBRITIES
                        </a>
                    </div>

                    <div class="collection">
                        <a href="{{ route('contactUs') }}">
                            CONTACT
                        </a>
                    </div>

                    <div class="collection">
                        <a href="{{ route('aboutUs') }}">
                            BECOME A VIP <i class='bx bxs-star bx-md bx-burst' ></i>
                        </a>
                    </div>
                </nav>
            </div>
            <!-- style below blocks out the mobile nav toggle only when nav is loaded -->
            <style>
                .mobile-nav-toggle-label {
                    display: inline-block;
                }
            </style>
        </div>
    </div>
</header>