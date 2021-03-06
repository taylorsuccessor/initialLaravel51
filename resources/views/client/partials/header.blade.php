<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
    <button type="button" id="main-menu-toggle">
        <i class="navbar-icon fa fa-bars icon"></i>
        <span class="hide-menu-text">HIDE MENU</span>
    </button>

    <div class="navbar-inner">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">

                    {!! HTML::image('assets/'.config('mycp.layoutAssetsFolder').'/img/logo.png',app_name(),['style'=>'width:90px;height:28px;']) !!}

            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
                <i class="navbar-icon fa fa-bars"></i>
            </button>
        </div>

        <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
            <div>
                <div class="right clearfix">
                    <ul class="nav navbar-nav pull-right right-navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                <img src="data:image/jpeg;base64,{{ current_user()->getAvatar() }}" alt="">
                                <span>{{ current_user()->getName() }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href=" route('client.users.profile') ">
                                        <i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;
                                        {{ Lang::get('general.Profile') }}
                                    </a>
                                </li>

                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('client.auth.logout') }}">
                                        <i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;
                                        {{ Lang::get('general.Logout') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>