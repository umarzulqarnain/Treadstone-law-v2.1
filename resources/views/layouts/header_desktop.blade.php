


    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Find your files..." />
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
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
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                @if(auth()->user()->image== null)
                                    <img src="images/icon/avatar-01.jpg"  alt="{{ auth()->user()->name }} profile image">
                                @else
                                    <img src="{{ url('uploads/profile_pictures/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }} profile image">
                                @endif
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" style="font-size: 13px;" href="#">{{ auth()->user()->name }} </a>
                                <a class="js-acc-btn"  style="display: block;font-size: 10px;margin-top: -4px;color: #61697e;" href="#">{{ auth()->user()->type }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            @if(auth()->user()->image== null)
                                                <img src="images/icon/avatar-01.jpg"  alt="{{ auth()->user()->name }} profile image">
                                            @else
                                                <img src="{{ url('uploads/profile_pictures/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }} profile image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ auth()->user()->name }}  {{ auth()->user()->last_name }} </a>
                                        </h5>
                                        <span class="email">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>

                                <div class="account-dropdown__footer">

                                    <a  onclick="event.preventDefault();
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
    </div>


