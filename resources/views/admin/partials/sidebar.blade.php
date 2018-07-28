<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow bg-black-op-10">
                <div class="content-header-section text-center align-parent">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Main Navigation -->
            <div class="content-side content-side-full">
                <!--
                Mobile navigation, desktop navigation can be found in #page-header

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                -->
                <ul class="nav-main">
                    <li>
                        <a href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                    </li>
                    <li class="nav-main-heading">Layout</li>
                    <li class="open">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                        <ul>
                            <li>
                                <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                            </li>
                            <li>
                                <a class="active" href="bd_variations_hero_image_3.html">Hero Image 3</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Other Pages</li>
                    <li>
                        <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                    </li>
                    <li>
                        <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                    </li>
                </ul>
            </div>
            <!-- END Side Main Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
