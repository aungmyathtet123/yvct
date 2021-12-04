<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href=""><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <li>
                        <a href="{{ route('backend.dashboard') }}" aria-expanded="true"><i class="fa fa-tachometer" aria-hidden="true"></i><span>
                                Dashboard
                            </span></a>

                    </li>

                    <li>
                        <a href="{{ route('backend.sitesetting.index') }}" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>
                                Site setting
                            </span></a>
                        {{-- <ul class="collapse">
                            <li><a href="index.html">one Sidebar</a></li>
                            <li><a href="index3-horizontalmenu.html">two Sidebar</a></li>
                        </ul> --}}
                    </li>

                    <li>
                        <a href="{{ route('backend.article.index') }}" aria-expanded="true"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>
                               Article
                            </span></a>
                            <ul class="collapse">
                                @foreach ($types as $type )
                                <li><a href=" {{ route('backend.showdata',$type->id) }}">@if($type->id==1)
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    &nbsp;&nbsp;{{ $type->name }}</a></li>
                                @elseif($type->id==2)
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                &nbsp;&nbsp;{{ $type->name }}</a></li>
                                @else
                                <i class="fa fa-users" aria-hidden="true"></i>
                                &nbsp;&nbsp;{{ $type->name }}
                            </a></li>
                                @endif
                                @endforeach
                            </ul>

                    </li>


                    <li>
                        <a href="#" aria-expanded="true"><i class="fa fa-picture-o" aria-hidden="true"></i><span>
                                Gallery
                            </span></a>

                    </li>

                    <li>
                        <a href="#" aria-expanded="true"><i class="fa fa-video-camera" aria-hidden="true"></i><span>
                                video
                            </span></a>

                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>
