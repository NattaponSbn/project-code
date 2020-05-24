<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <!-- Open Graph Meta-->
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <title>ICTSTORE</title>
    </head>
    <body class="app sidebar-mini " >
        <header class="app-header">
            <a href="homeBD" class="app-header__logo" >ICTSTORE</a>
            <!-- main.css-->
            <ul class="app-nav">
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="ค้นหาวิจัย โครงงาน วิทยานิพน">
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>
                <nav class="app-navmenu" >    
                    <li class="active1 menulink" ><a href="homeBD">หน้าเเรก</a></li>
                    <li class="active2 menulink"><a href="#">ค้นหาเเบบละเอียด</a></li>
                    <li class="active3 menulink"><a href="#">เกี่ยวกับ</a></li>
                    <li class="active4 menulink"><a href="#">ติดต่อ</a></li>
                </nav>
                <div class="navbar-dark layoutaccout">
                    <ul class="navbar-nav ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <ul class="navbar-nav ml-auto">
                                        @guest
                                            @if (Route::has('login'))
                                                <div class="front nav-item">
                                                    <a href="{{ route('login') }}" class="dropdown-item">เข้าสู่ระบบ</a>
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="dropdown-item">สมัครสมาชิก</a>
                                                    @endif
                                                </div>
                                            @endif
                                                @auth
                                                    <a href="{{ route('login') }}" class="dropdown-item">เข้าสู่ระบบ</a>
                                                    <a href="{{ route('register') }}" class="dropdown-item">สมัครสมาชิก</a>
                                                @endauth
                                            @else
                                                
                                                <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->username }} <span class="caret"></span>
                                                </a>
                                            
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('ออกจากระบบ') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                        @endguest
                                        
                                    </ul>
                                </div>
                        </li>
                    </ul>
                </div>
                <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
        </header>
            <div class="app-sidebar__overlay" data-toggle="sidebar" aria-label="Hide Sidebar"></div>
                <aside class="app-sidebar mage ">
                    <ul class="app-menu">
                        <li>
                            <div id="layoutSidenav">
                                <div id="layoutSidenav_nav">
                                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                        <div class="sb-sidenav-menu">
                                            <div class="nav">
                                                <div>
                                                    <button type="button" class="btn-control btn-default" ><a href="homeBD">ปริญญาตรี</a> </button>
                                                    <button type="button" class="btn-control btn-default" ><a href="homeMDD">ปริญญาเอก โท</a> </button>
                                                </div><br>
                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                                        > เว็บ
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                    </a>
                                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                                <a class="nav-link" href="#">ติดตาม</a>
                                                                <a class="nav-link" href="#">ดูเเละสุขภาพ</a>
                                                                <a class="nav-link" href="#">ไร่สวน</a>
                                                            </nav>
                                                    </div>

                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                                        >เว็บ&เว็บแอปพลิเคชั่น
                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                    </a>
                                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav ">
                                                            <a class="nav-link" href="#">ติดตาม</a>
                                                            <a class="nav-link" href="#">ดูเเละสุขภาพ</a>
                                                            <a class="nav-link" href="#">ไร่สวน</a>
                                                        </nav>
                                                    </div>
                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                                        >แอปพลิเคชั่น
                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                                    ></a>
                                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav">
                                                            <a class="nav-link" href="#">ติดตาม</a>
                                                            <a class="nav-link" href="#">ดูเเละสุขภาพ</a>
                                                            <a class="nav-link" href="#">ไร่สวน</a>
                                                        </nav>
                                                    </div>
                                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                                        >เกม
                                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                                    ></a>
                                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                        <nav class="sb-sidenav-menu-nested nav">
                                                            <a class="nav-link" href="#">ผจญภัย</a>
                                                            <a class="nav-link" href="#">ยุทธศาสตร์</a>
                                                            <a class="nav-link" href="#">ปริศนา</a>
                                                            <a class="nav-link" href="#">กีฬา</a>
                                                            <a class="nav-link" href="#">เเอ็กชัน</a>
                                                        </nav>
                                                    </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </li>
                    <style>
                        hr {
                            display: block;
                            unicode-bidi: isolate;
                            margin-inline-start: auto;
                            margin-inline-end: auto;
                            overflow: hidden;
                            border-style: inset;
                            border-width: 2px;
                            }
                    </style>
                    <p><hr></p>
                    
                    <div class="layoutlogre">
                        @if (Route::has('login'))
                            <div class="links front">
                                @auth
                                    <a href="addproject" class="view">สร้างผลงาน</a><br>
                                @else
                                    
                                @endauth
                            
                            </div>
                        @endif
                    </div>
                    </li>
                </ul>
                    
                </aside>

                <div>@yield('content')</div>

                
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        
        
    </body>
</html>