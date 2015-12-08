<nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="fa fa-bars"></span>
        </button>
        <a class="navbar-brand" href="#">
            {!! HTML::image('images/inner_logo.png', 'Logo') !!}
        </a>
    </div><!-- navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="fa fa-bars"></span></button></li>
            <li class="dropdown hidden-xs">
                <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="count">{{count($notifications)}}</span>
                </a>
                <ul class="dropdown-menu notifications-list">
                    <li class="pointer">
                        <div class="pointer-inner">
                            <div class="arrow"></div>
                        </div>
                    </li>
                    <li class="item-header">
                        You have {{count($notifications)}} new notifications
                    </li>
                    @foreach($notifications as $nts)
                        <li class="item">
                            <a href="#">
                                <i class="fa fa-{{$nts->type->icon}}"></i>
                                <span class="content">{{$nts->message}}</span>
                            </a>
                        </li>
                    @endforeach
                    <li class="item-footer">
                        <a href="#">
                            View all notifications
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown hidden-xs">
                <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="count">8</span>
                </a>
                <ul class="dropdown-menu notifications-list messages-list">
                    <li class="pointer">
                        <div class="pointer-inner">
                            <div class="arrow"></div>
                        </div>
                    </li>
                    <li class="item first-item">
                        <a href="#">
                            {!! HTML::image('img/samples/messages-photo-1.png') !!}
										<span class="content">
											<span class="content-headline">
												George Clooney
											</span>
											<span class="content-text">
												I am not sure where the trace documentation has gone. Do you know of a source where I can...
											</span>
										</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            {!! HTML::image('img/samples/messages-photo-2.png') !!}
										<span class="content">
											<span class="content-headline">
												Emma Watson
											</span>
											<span class="content-text">
												Although I have better offers, I will accept your proposal given that you will be...
											</span>
										</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            {!! HTML::image('img/samples/messages-photo-3.png') !!}
										<span class="content">
											<span class="content-headline">
												Robert Downey Jr.
											</span>
											<span class="content-text">
												I am no longer interested. I have another source for my needs that is much more economic but I hope...
											</span>
										</span>
                        </a>
                    </li>
                    <li class="item-footer">
                        <a href="#">
                            View all messages
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- PROFILE BLOCK -->
        <div class="nav-no-collapse pull-right" id="header-nav">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown profile-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Gravatar"/>
                            <span class="hidden-xs">
                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                            </span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="#"><i class="fa fa-user">&nbsp;</i>Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cog"></i>&nbsp;Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o"></i>&nbsp;Messages</a>
                        </li>
                        <li>
                            <a href="/auth/logout"><i class="fa fa-power-off"></i>&nbsp;Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- bs-example-navbar-collapse-1 -->
</nav>