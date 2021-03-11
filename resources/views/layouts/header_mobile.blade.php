



    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <!--<a class="logo" href="index.html">-->
                <!--<img src="images/icon/logo.png" alt="CoolAdmin" />-->
                <!--</a>-->
                <button  id="myelement" style="right: 60px">
                            <span class="hamburgersss hamburger-box">
                                <i  class="fa fa-search"></i>
                            </span>
                </button>

                <button  style="right: 10px" class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
                <div class="noti-wrap" style="position:absolute;right: 110px" >
                    <div class="noti__item js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="quantity">3</span>
                        <!--<div class="notifi-dropdown js-dropdown">-->
                        <!--<div class="notifi__title">-->
                        <!--<p>You have 3 Notifications</p>-->
                        <!--</div>-->
                        <!--<div class="notifi__item">-->
                        <!--<div class="bg-c1 img-cir img-40">-->
                        <!--<i class="zmdi zmdi-email-open"></i>-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>You got a email notification</p>-->
                        <!--<span class="date">April 12, 2018 06:50</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="notifi__item">-->
                        <!--<div class="bg-c2 img-cir img-40">-->
                        <!--<i class="zmdi zmdi-account-box"></i>-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>Your account has been blocked</p>-->
                        <!--<span class="date">April 12, 2018 06:50</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="notifi__item">-->
                        <!--<div class="bg-c3 img-cir img-40">-->
                        <!--<i class="zmdi zmdi-file-text"></i>-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>You got a new file</p>-->
                        <!--<span class="date">April 12, 2018 06:50</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="notifi__footer">-->
                        <!--<a href="#">All notifications</a>-->
                        <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="account-wrap" style="margin-left: 30px">
                    <div class="account-item clearfix js-item-menu">
                        <div class="image">
                            <img src="{{ asset('images/icon/avatar-01.jpg') }}" alt="John Doe" />
                        </div>

                        <div class="account-dropdown-mobile js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{ asset('images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</a>
                                    </h5>
                                    <span class="email">{{ auth()->user()->email }}</span>
                                </div>
                            </div>

                            <div class="account-dropdown__footer">
                                <a   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                                    <i class="zmdi zmdi-power"></i>Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar-mobile">

        <header class="header-desktop-mobile">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Find your files..." />

                        </form>

                    </div>
                </div>
            </div>
        </header>



    </nav>



