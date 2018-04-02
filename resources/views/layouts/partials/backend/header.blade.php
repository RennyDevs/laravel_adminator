{{-- ### $Topbar ### --}}
<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            {{-- ### Boton de abrir y cerrar el menu ### --}}
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
            {{-- ### Boton de abrir y cerrar busqueda ### --}}
            <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                    <i class="search-icon ti-search pdd-right-10"></i>
                    <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
            </li>
            {{-- ### Boton de    busqueda ### --}}
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Buscar...">
            </li>
        </ul>
        <ul class="nav-right">
            {{-- ### notificaciones ### --}}
            <li class="notifications dropdown">
                <span class="counter bgc-red">3</span>
                <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown">
                    <i class="ti-bell"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB">
                        <i class="ti-bell pR-10"></i>
                        <span class="fsz-sm fw-600 c-grey-900">Notificaciones</span>
                    </li>
                    <li>
                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                            <li>
                                <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                    <div class="peer mR-15">
                                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="logo_user">
                                    </div>
                                    <div class="peer peer-greed">
                                        <span>
                                            <span class="fw-500">John Doe</span>
                                            <span class="c-grey-600">le gustó tu <span class="text-dark">post</span> </span>
                                        </span>
                                        <p class="m-0">
                                            <small class="fsz-xs">Hace 5 minutos.</small>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pX-20 pY-15 ta-c bdT">
                        <span>
                            <a href="" class="c-grey-600 cH-blue fsz-sm td-n">Ver todas las notificaciones <i class="ti-angle-right fsz-xs mL-10"></i></a>
                        </span>
                    </li>
                </ul>
            </li>
            {{-- ### Correos ### --}}
            <li class="notifications dropdown">
                <span class="counter bgc-blue">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                    <i class="ti-email"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB">
                        <i class="ti-email pR-10"></i>
                        <span class="fsz-sm fw-600 c-grey-900">Correos</span>
                    </li>
                    <li>
                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                            <li>
                                <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                    <div class="peer mR-15">
                                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                    </div>
                                    <div class="peer peer-greed">
                                        <div>
                                            <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                    <p class="fw-500 mB-0">John Doe</p>
                                                </div>
                                                <div class="peer">
                                                    <small class="fsz-xs">Hace 5 minutos.</small>
                                                </div>
                                            </div>
                                            <span class="c-grey-600 fsz-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pX-20 pY-15 ta-c bdT">
                        <span>
                            <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">Ver todos los Correos <i class="fs-xs ti-angle-right mL-10"></i></a>
                        </span>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-white">{{ Auth::user()->name }}</span>
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                    <li>
                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-settings mR-10"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-power-off mR-10"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
