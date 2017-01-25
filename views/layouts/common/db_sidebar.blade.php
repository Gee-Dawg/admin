
@php ($action = explode('@', Route::getCurrentRoute()->getActionName())[1])

<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                Logo here
                {{--@if(Auth::user()->super_user)--}}
                    {{--Actoevents Logo--}}
                {{--@else--}}
                    {{--@if(Auth::user()->company->logo_path)--}}
                        {{--{!! Html::tag('img', '', ['class' => 'img', 'height' => 50, 'alt' => Auth::user()->company->name . ' logo', 'src' => url(Auth::user()->company->logo_path)]) !!}--}}
                    {{--@endif--}}
                    {{--{!! Html::tag('a', 'Preview', ['href' => url('client_details', Auth::user()->company->id), 'target' => '_blank']) !!}--}}
                {{--@endif--}}
            </div>
        </div>
        <nav class="menu">
            <ul class="nav metismenu" id="sidebar-menu">
                <li class="menu-item {!! ($action === 'dashboard') ? 'active' : '' !!}">
                    <a href="{!! url('/dashboard') !!}"> <i class="fa fa-home"></i> Dashboard </a>
                </li>
                {{--@if(Auth::user()->super_user)--}}
                    {{--<li class="menu-item {!! ($action === 'user_list' || $action === 'user_edit' || $action === 'user_add') ? 'active open' : '' !!}">--}}
                        {{--<a href=""> <i class="fa fa-th-large"></i> User Management <i class="fa arrow"></i> </a>--}}
                        {{--<ul>--}}
                            {{--<li class="{!! ($action === 'user_list') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', 'User List', ['href' => url('user_list'), 'class' => 'pointer']) !!}--}}
                            {{--</li>--}}
                            {{--<li class="{!! ($action === 'user_add') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', 'New User', ['href' => url('user_add')]) !!}--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="menu-item {!! ($action === 'company_list') ? 'active' : '' !!}">--}}
                        {{--<a href="{!! url('/company_list') !!}"> <i class="fa fa-list-alt"></i> Client List </a>--}}
                    {{--</li>--}}
                    {{--<li class="menu-item {!! ($action === 'event_list' || $action === 'event_add') ? 'active open' : '' !!}">--}}
                        {{--<a href=""> <i class="fa fa-th-list"></i> Event Management <i class="fa arrow"></i> </a>--}}
                        {{--<ul>--}}
                            {{--<li class="{!! ($action === 'event_list') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', 'Event List', ['href' => url('event_list'), 'class' => 'pointer']) !!}--}}
                            {{--</li>--}}
                            {{--<li class="{!! ($action === 'event_add') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', 'New Event', ['href' => url('event_add')]) !!}--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@else--}}
                    {{--<li class="menu-item {!! ($action === 'basic' || $action === 'services' || $action === 'mission' || $action === 'vision' || $action === 'objectives') ? 'active open' : '' !!}">--}}
                        {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-th-large']).' My Company '.Html::tag('i', '', ['class' => 'fa arrow']), ['href' => '#']) !!}--}}
                        {{--<ul>--}}
                            {{--<li class="menu-item {!! ($action === 'basic') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-archive']).' Basic Information', ['href' => url('basic')]) !!}--}}
                            {{--</li>--}}
                            {{--<li class="menu-item {!! ($action === 'services') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-list-alt']).' My Services', ['href' => url('services')]) !!}--}}
                            {{--</li>--}}
                            {{--<li class="menu-item {!! ($action === 'mission') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-list-alt']).' My Mission', ['href' => url('mission')]) !!}--}}
                            {{--</li>--}}
                            {{--<li class="menu-item {!! ($action === 'vision') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-list-alt']).' My Vision', ['href' => url('vision')]) !!}--}}
                            {{--</li>--}}
                            {{--<li class="menu-item {!! ($action === 'objectives') ? 'active' : '' !!}">--}}
                                {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-list-alt']).' My Objectives', ['href' => url('objectives')]) !!}--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="menu-item {!! ($action === 'contacts') ? 'active' : '' !!}">--}}
                        {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-phone']).' My Contacts', ['href' => url('contacts')]) !!}--}}
                    {{--</li>--}}
                    {{--<li class="menu-item {!! ($action === 'specials') ? 'active' : '' !!}">--}}
                        {{--{!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-list-alt']).' Specials', ['href' => url('specials')]) !!}--}}
                    {{--</li>--}}
                {{--@endif--}}

            </ul>
        </nav>
    </div>
    <footer class="sidebar-footer">
        <ul class="nav metismenu" id="customize-menu">
            <li>
                <ul>
                    <li class="customize">
                        <div class="customize-item">
                            <div class="row customize-header">
                                <div class="col-xs-4"></div>
                                <div class="col-xs-4"><label class="title">fixed</label></div>
                                <div class="col-xs-4"><label class="title">static</label></div>
                            </div>
                            <div class="row hidden-md-down">
                                <div class="col-xs-4"><label class="title">Sidebar:</label></div>
                                <div class="col-xs-4">
                                    <label>
                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label>
                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4"><label class="title">Header:</label></div>
                                <div class="col-xs-4">
                                    <label>
                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label>
                                        <input class="radio" type="radio" name="headerPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4"><label class="title">Footer:</label></div>
                                <div class="col-xs-4">
                                    <label>
                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label>
                                        <input class="radio" type="radio" name="footerPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="customize-item">
                            <ul class="customize-colors">
                                <li><span class="color-item color-red" data-theme="red"></span></li>
                                <li><span class="color-item color-orange active" data-theme="orange"></span></li>
                                <li><span class="color-item color-green" data-theme=""></span></li>
                                <li><span class="color-item color-seagreen" data-theme="seagreen"></span></li>
                                <li><span class="color-item color-blue" data-theme="blue"></span></li>
                                <li><span class="color-item color-purple" data-theme="purple"></span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href=""> <i class="fa fa-cog"></i> Customize </a>
            </li>
        </ul>
    </footer>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>