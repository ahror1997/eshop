<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminPanel | Вход</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{asset("assets/admin/plugins/fontawesome-free/css/all.css")}}">
        <link rel="stylesheet" href="{{asset("assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/admin/dist/css/adminlte.min.css")}}">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/"><b>EShop</b></a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Логин</p>
                    <form action="{{route("login")}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a href="{{route("register")}}" class="text-center">Регистрация</a>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Вход</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{asset("assets/admin/plugins/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/admin/dist/js/adminlte.min.js")}}"></script>
    </body>
</html>
