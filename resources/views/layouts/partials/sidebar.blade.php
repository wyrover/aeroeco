<div class="company__block">
    <h3 class="text-center">{{$company->company}}</h3>
    <p class="text-center">
        {!! HTML::image("vault/{$company->id}/logo.png", 'Logo', ['style' => 'width:120px; height: auto;']) !!}
    </p>
</div>
<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
    {{--DASHBOARD--}}
    <li>
        <a href="/home"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> DASHBOARD</a>
    </li>
    {{--ASSET OWNER--}}
    <li>
        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-plane fa-stack-1x"></i></span> ASSET OWNER</a>
        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="/projects/create"><span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x"></i></span>New Project</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-pencil fa-stack-1x"></i></span>Edit Project</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-clock-o fa-stack-1x"></i></span>Modify Arrivals</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-folder fa-stack-1x"></i></span>Closed Projects</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-bookmark fa-stack-1x"></i></span>GTA Contract</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-money fa-stack-1x"></i></span>Bids</a></li>
        </ul>
    </li>
    {{--BUYER--}}
    <li>
        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-truck fa-stack-1x "></i></span> BUYER</a>
        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-question-circle fa-stack-1x"></i></span>link1</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-question-circle fa-stack-1x"></i></span>link2</a></li>
        </ul>
    </li>
    {{--ADMIN--}}
    <li>
        <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-lock fa-stack-1x "></i></span> ADMIN</a>
        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="#">link1</a></li>
            <li><a href="#">link2</a></li>
        </ul>
    </li>
    {{--SALES--}}
    <li>
        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-bar-chart fa-stack-1x "></i></span> SALES</a>
        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="#">link1</a></li>
            <li><a href="#">link2</a></li>
        </ul>
    </li>
    {{--TECH--}}
    <li>
        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span> TECH</a>
        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="#">link1</a></li>
            <li><a href="#">link2</a></li>
        </ul>
    </li>
    {{--VENDOR--}}
    <li>
        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-bar-chart fa-stack-1x "></i></span> VENDOR</a>
        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="#">link1</a></li>
            <li><a href="#">link2</a></li>
        </ul>
    </li>
</ul>