<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
    {{--DASHBOARD--}}
    <li>
        <a href="/home"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> DASHBOARD</a>
    </li>

    @if( $user->can_sell || $user->role_id == 2 )
        {{--ASSET OWNER--}}
        <li>
            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-plane fa-stack-1x"></i></span> ASSET OWNER</a>
            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                <li><a href="/projects"><span class="fa-stack fa-lg pull-left"><i class="fa fa-table fa-stack-1x"></i></span>Projects</a></li>
            </ul>
        </li>
    @endif

    @if( $user->role_id == 2 || $user->role_id == 10 || $user->role_id == 11 || $user->role_id == 12 || $user->role_id == 13)
        {{--BUYER--}}
        <li>
            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-truck fa-stack-1x "></i></span> BUYER</a>
            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                <li><a href="/auctions"><span class="fa-stack fa-lg pull-left"><i class="fa fa-hourglass fa-stack-1x"></i></span>Auctions</a></li>
                <li><a href="/market"><span class="fa-stack fa-lg pull-left"><i class="fa fa-credit-card fa-stack-1x"></i></span>ADC Market</a></li>
                <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list-alt fa-stack-1x"></i></span>WishList</a></li>
            </ul>
        </li>
    @endif

    @if( $user->is_admin || $user->role_id == 2)
        @if($user->role_id == 2 || $user->role_id == 4)
            {{--COMPANY ADMIN--}}
            <li>
                <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-lock fa-stack-1x "></i></span> COMPANY ADMIN</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="/companies/{{Auth::user()->company_id}}/profile"><span class="fa-stack fa-lg pull-left"><i class="fa fa-pencil-square fa-stack-1x"></i></span>Edit Profile</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-newspaper-o fa-stack-1x"></i></span>Subscription</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-pie-chart fa-stack-1x"></i></span>Analytics</a></li>
                </ul>
            </li>
        @endif
        @if($user->role_id == 2 || $user->role_id == 5)
            {{--TECH ADMIN--}}
            <li>
                <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cogs fa-stack-1x "></i></span> TEAMS ADMIN</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="/techs"><span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x"></i></span>Personnel</a></li>
                    <li><a href="/workscopes"><span class="fa-stack fa-lg pull-left"><i class="fa fa-line-chart fa-stack-1x"></i></span>WorkScopes</a></li>
                    <li><a href="/workscopes"><span class="fa-stack fa-lg pull-left"><i class="fa fa-calendar fa-stack-1x"></i></span>Arrivals</a></li>
                </ul>
            </li>
        @endif
    @endif

    @if( $user->role_id == 2 || $user->role_id == 6 || $user->role_id == 8)
        {{--SALES--}}
        <li>
            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-bar-chart fa-stack-1x "></i></span> SALES/SUPPORT</a>
            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                <li><a href="/projects"><span class="fa-stack fa-lg pull-left"><i class="fa fa-table fa-stack-1x"></i></span>Projects</a></li>
                <li><a href="/companies"><span class="fa-stack fa-lg pull-left"><i class="fa fa-building fa-stack-1x"></i></span>Companies</a></li>
            </ul>
        </li>
    @endif

    @if( $user->role_id == 2 || $user->role_id == 7)
        {{--TECH--}}
        <li>
            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span> TEAM LEADERS</a>
            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                <li><a href="/teams"><span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x"></i></span>Teams</a></li>
                <li><a href="worktickets"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ticket fa-stack-1x"></i></span>WorkTickets</a></li>
            </ul>
        </li>
    @endif

    @if( $user->role_id == 2 || $user->role_id == 14)
        {{--VENDOR--}}
        <li>
            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-briefcase fa-stack-1x "></i></span> VENDOR</a>
            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-question-circle fa-stack-1x"></i></span>link1</a></li>
                <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-question-circle fa-stack-1x"></i></span>link2</a></li>
            </ul>
        </li>
    @endif
</ul>