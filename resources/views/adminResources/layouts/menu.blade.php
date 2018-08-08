<div class="sidebar-collapse"> <!--menu-->
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="{{ asset('adminpublic/img/profile_small.jpg') }}"/>
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">ADMIN</strong>
                                </span>

                                <span class="text-muted text-xs block">
                                    Tukang Jagal
                                </span>
                            </span>
                        </a>
            </div>
            <div class="logo-element">
                WBS
            </div>
        </li> <!--profil-->
        <li class="active">
            <a href="{{ route('admin.dashboard') }}"><i class="fa fa-money"></i> <span class="nav-label">Dashboard</span></a>
        </li>
        <li>
            <a href="{{ route('manage.korupsi') }}"><i class="fa fa-money"></i> <span class="nav-label">Korupsi</span></a>
        </li> <!--actived menu-->
        <li>
            <a href="{{ route('manage.gratifikasi') }}"><i class="fa fa-briefcase"></i> <span class="nav-label">Gratifikasi</span></a>
        </li>
        <li>
            <a href="{{ route('manage.benturan') }}"><i class="fa fa-times"></i> <span class="nav-label">Benturan Kepentingan</span></a>
        </li>

    </ul>
</div>