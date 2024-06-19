<div class="sidebar" data-color="green" data-image="{{ asset('img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://energyno.utic.ecosur.mx" class="simple-text logo-mini">
                {{ __('EG') }}
            </a>
            <a href="https://energyno.utic.ecosur.mx" class="simple-text logo-normal">
                {{ __('eGuard ECOSUR') }}
            </a>
        </div>
        <div class="user">
            <div class="photo">
                <img src="{{ auth()->user()->profilePicture() }}" />
            </div>
            <div class="info ">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>{{ auth()->user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini">{{ __('MP') }}</span>
                                <span class="sidebar-normal">{{ __('My Profile') }}</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini">{{ __('LG') }}</span>
                                <span class="sidebar-normal">{{ __('Log out') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href={{ route('home') }}>
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @can('manage-items', App\Models\User::class)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#EnergyManagement" @if($activeButton=='EnergyManagement' ) aria-expanded="true" @endif>
                    <i>
                        <img src="{{ asset('img/laravel.svg') }}" style="width:25px">
                    </i>
                    <p>
                        {{ __('Energyno Management') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse  @if($activeButton =='EnergyManagement') show @endif" id="EnergyManagement">
                    <ul class="nav">

                        @can('manage-users', App\Models\User::class)
                        <li class="nav-item @if($activePage == 'role') active @endif">
                            <a class="nav-link" href={{ route('role.index') }}>
                                <span class="sidebar-mini">{{ __('RM') }}</span>
                                <span class="sidebar-normal">{{ __('Role Managements') }}</span>
                            </a>
                        </li>
                        @endcan

                        @can('manage-users', App\Models\User::class)
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href={{route('user.index')}}>
                                <span class="sidebar-mini">{{ __('UM') }}</span>
                                <span class="sidebar-normal">{{ __('User Management') }}</span>
                            </a>
                        </li>
                        @endcan

                        @can('manage-items', App\Models\User::class)
                        <li class="nav-item @if($activePage == 'tag') active @endif">
                            <a class="nav-link" href={{route('tag.index')}}>
                                <span class="sidebar-mini">{{ __('TM') }}</span>
                                <span class="sidebar-normal">{{ __('Tag Management') }}</span>
                            </a>
                        </li>
                        @endcan

                        @can('manage-items', App\Models\User::class)
                        <li class="nav-item @if($activePage == 'location') active @endif">
                            <a class="nav-link" href={{route('location.index')}}>
                                <span class="sidebar-mini">{{ __('CM') }}</span>
                                <span class="sidebar-normal">{{ __('Location Management') }}</span>
                            </a>
                        </li>
                        @endcan

                        @can('manage-items', App\Models\User::class)
                        <li class="nav-item @if($activePage == 'device') active @endif">
                            <a class="nav-link" href={{route('device.index')}}>
                                <span class="sidebar-mini">{{ __('DM') }}</span>
                                <span class="sidebar-normal">{{ __('Device Management') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('manage-items', App\Models\User::class)
                        <li class="nav-item @if($activePage == 'tracking') active @endif">
                            <a class="nav-link" href={{route('tracking.index')}}>
                                <span class="sidebar-mini">{{ __('DTM') }}</span>
                                <span class="sidebar-normal">{{ __('Tracking Management') }}</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
            @endcan
        </ul>
    </div>
</div>