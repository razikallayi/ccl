    <!--Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
       {{--          <div class="image">
                    <img src="{{url(config('whyte.project.logo'))}}" width="48" height="48" alt="User" />
                </div> --}}
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Name{{--Auth::name--}}</div>
                    <div class="email">{{time()}}</div>
                    {{-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    @include('admin.layout.partials.sidemenu')
                </ul>
            </div>

            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; {{ date('Y') }} <a target="_blank" href="{{config('whyte.admin.copyright_link')}}">{{config('whyte.admin.copyright')}}</a>.
                </div>
                {{-- <div class="version">
                    <b>Version: </b> 1.0.3
                </div> --}}
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar