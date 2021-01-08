<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-center">
                <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
            </div>
        </li>

        <!-- Search Form -->
        <li>
            <form class="search-form" role="search">
                <div class="md-form mt-0 waves-light">
                    <input type="text" class="form-control py-2" placeholder="Search">
                </div>
            </form>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">

                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="w-fa fas fa-tachometer-alt"></i>Dashboards<i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="../dashboards/v-1.html" class="waves-effect">Version 1</a>
                            </li>
                            <li>
                                <a href="../dashboards/v-2.html" class="waves-effect">Version 2</a>
                            </li>
                            <li>
                                <a href="../dashboards/v-3.html" class="waves-effect">Version 3</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('admin.connection.index') }}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Connection</a>
                </li>

            </ul>
        </li>
        <!-- Side navigation links -->

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
