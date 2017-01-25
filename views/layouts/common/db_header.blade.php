<header class="header">
    <div class="header-block header-block-collapse hidden-lg-up">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    {{--<div class="header-block header-block-search hidden-sm-down">--}}
    {{--<form role="search">--}}
    {{--<div class="input-container">--}}
    {{--<i class="fa fa-search"></i>--}}
    {{--<input type="search" placeholder="Search">--}}
    {{--<div class="underline"></div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}

    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="notifications new">
                <a href="" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <sup>
                        <span class="counter">0</span>
                    </sup>
                </a>
                <div class="dropdown-menu notifications-dropdown-menu">
                    {{--@if(Auth::user()->unread_messages->count())--}}
                        {{--<ul class="notifications-container">--}}
                            {{--<li>--}}
                                {{--<a href="{!! url('contact_message_reply', Auth::user()->unread_messages[0]->id) !!}" class="notification-item">--}}
                                    {{--<div class="img-col">--}}
                                        {{--<div class="img glyphicon fa fa-user fa-2x"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="body-col">--}}
                                        {{--<h6>--}}
                                            {{--<span class="accent">--}}
                                                {{--{!! Auth::user()->unread_messages[0]->from_user->name . ' ' . Auth::user()->unread_messages[0]->from_user->surname !!}--}}
                                            {{--</span>--}}
                                            {{--{!! '(' .  Auth::user()->unread_messages[0]->subject . ')' !!}--}}
                                        {{--</h6>--}}
                                        {{--<p class="text-info">--}}
                                            {{--{!!  html_entity_decode(Auth::user()->unread_messages[0]->message) !!}--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--@endif--}}
                    <footer>
                        <ul>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </footer>
                </div>
            </li>
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img fa fa-user fa-2x"></div>
                    <span class="name">
                        {!! Auth::user()->name !!}
    			    </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    {!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-user icon']).' Profile', ['href' => '#', 'class' => 'dropdown-item']) !!}
                    <div class="dropdown-divider"></div>
                    {!! Html::tag('a', Html::tag('i', '', ['class' => 'fa fa-bell icon']).' Notifications', ['href' => '#', 'class' => 'dropdown-item']) !!}
                    <div class="dropdown-divider"></div>
                    {!! Form::open(['url' => url('logout')]) !!}
                    {!! Html::tag('button', Html::tag('i', '', ['class' => 'fa fa-power-off icon']).' Logout', ['type' => 'submit', 'class' => 'dropdown-item']) !!}
                    {!! Form::close() !!}
                </div>
            </li>
        </ul>
    </div>
</header>