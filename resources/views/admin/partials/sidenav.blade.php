<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @if (auth()->user()->role == 'admin')
                    <div class="sb-sidenav-menu-heading">Administrator</div>

                    <a class="nav-link" href="{{ route('users') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Users
                    </a>
                    <a class="nav-link" href="{{ route('admin.messages') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelope-open-text"></i></div>
                        Messages
                    </a>
                @endif
                <div class="sb-sidenav-menu-heading">Content</div>
                <a class="nav-link" href="{{ route('admin.categories') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Categories
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.pages') }}">All pages</a>
                        <a class="nav-link"
                            href="{{ route('admin.pages', ['categs' => config('custominfo.info-cat')]) }}">Info
                            Pages</a>
                        <a class="nav-link" href="{{ route('admin.pages', ['published' => 1]) }}">Published</a>
                        <a class="nav-link" href="{{ route('admin.pages', ['published' => 2]) }}">Drafts</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth"
                            aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError"
                            aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: {{ auth()->user()->name }}</div>
            <div class="small">User role: <b>{{ auth()->user()->role }}</b></div>

        </div>
    </nav>
</div>
