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
            {{--COLLAPSER--}}
            <li class="active" >
                <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
                    &nbsp;<span class="fa fa-bars"></span>
                </button>
            </li>
            {{--NOTIFICATOR--}}
            <li class="dropdown hidden-xs">
                <notificator></notificator>
            </li>
            {{--MESSENGER--}}
            <li class="dropdown hidden-xs">
                <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    @if(count($messages) > 0)
                        <span class="count">
                            {{count($messages)}}
                        </span>
                    @endif
                </a>
                <ul class="dropdown-menu notifications-list messages-list">
                    <li class="pointer">
                        <div class="pointer-inner">
                            <div class="arrow"></div>
                        </div>
                    </li>
                    <li class="item-header">
                        You have {{count($messages)}} new messages
                    </li>
                    @foreach($messages as $msg)
                        <li class="item">
                            <a href="#">
                                <img src="{{ Gravatar::src($msg->email) }}" alt="Gravatar" style="height: 40px; width: auto;"/>
                                <span class="content">
                                    <span class="content-headline">
                                        {{$msg->sender}}
                                    </span>
                                    <span class="content-text">
                                        {!! str_limit($msg->message, 80) !!}
                                    </span>
                                </span>
                            </a>
                        </li>
                    @endforeach
                    <li class="item-footer">
                        {!! link_to_route('my_messages', $title='View all messages') !!}
                    </li>
                </ul>
            </li>
        </ul>
        {{--PROFILE BLOCK--}}
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
                            <a href="/profile">
                                <i class="fa fa-user">&nbsp;</i>&nbsp;Profile
                            </a>
                        </li>
                        <li>
                            <a href="/preferences">
                                <i class="fa fa-cog">&nbsp;</i>&nbsp;Settings
                            </a>
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