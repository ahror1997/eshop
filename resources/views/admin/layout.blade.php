<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EShop | Admin Panel</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{asset("assets/admin/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/admin/dist/css/adminlte.min.css")}}">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выход</a></li>
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                    </form>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="/" class="brand-link">
                    <img src="{{asset("assets/admin/dist/img/AdminLTELogo.png")}}" alt="AdminPanel" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminPanel</span>
                </a>
                <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset("assets/admin/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->name}}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route("admin.categories.index")}}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Категория</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("admin.products.index")}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>Продукт</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
            </aside>

            @yield("content")

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2014-2023 <a href="#">EShop</a>.</strong> All rights reserved.
            </footer>
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>
        <script src="{{asset("assets/admin/plugins/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}"></script>
        <script src="{{asset("assets/admin/dist/js/adminlte.min.js")}}"></script>
        <script>
            $(function () {
                bsCustomFileInput.init();
            });
        </script>
    </body>
</html>
