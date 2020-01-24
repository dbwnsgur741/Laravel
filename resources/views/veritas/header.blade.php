<!-- As a heading -->

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                <a class="navbar-brand" href="/veritas">Veritas</a>
            </span>
        </div>
    </nav>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="/veritas"><i class="menu-icon icon-dashboard"></i>고객별투자현황
                                </a></li>
                        </ul>
                        <!--/.widget-nav-->
                        <ul class="widget widget-menu unstyled">
                            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>계정관리 </a>
                                <ul id="togglePages" class="collapse unstyled">
                                    <li><a href="/veritas"><i class="icon-inbox"></i>사용자 </a></li>
                                    <li><a href="/veritas"><i class="icon-inbox"></i>투자자 </a></li>
                                </ul>
                            </li>
                        </ul>
                        <!--/.widget-nav-->
                        <ul class="widget widget-menu unstyled">
                            <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-cog">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>관리주체별 </a>
                                <ul id="togglePages2" class="collapse unstyled">
                                    <li><a href="/veritas"><i class="icon-inbox"></i>채권영업(영업부) </a></li>
                                    <li><a href="/bonds"><i class="icon-inbox"></i>투자관리(투자부) </a></li>
                                    <li><a href="/veritas"><i class="icon-inbox"></i>채권관리(관리부) </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="contents">
                        @yield('contents')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
