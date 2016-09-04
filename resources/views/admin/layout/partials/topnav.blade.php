Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                {{-- TODO:Insert Logo --}}
                <a class="navbar-brand" href="{{url(config('whyte.project.admin_dashboard_route'))}}">
                {{config('whyte.project.name')}}</a>

            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!--call search-->
                    {{-- @include('admin.layout.partials.call_search') --}}
                    <!--notification-->
                    {{-- @include('admin.layout.partials.notification') --}}
                    <!--tasks-->
                    {{-- @include('admin.layout.partials.tasks') --}}
                    
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="body">
                               <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">input</i>Sign Out</a></li>
                            </li>
                        </ul>
                    </li>


                    {{-- Call right sidebar --}}
                    {{-- <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar