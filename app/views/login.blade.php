<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dokumen Manajemen Sistem :: Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('assets/css/backend/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('assets/css/backend/sb-admin.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ route('signin') }}" autocomplete="on">
                            <fieldset>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <input class="form-control" id="email" placeholder="E-mail" name="email" type="email" autofocus value="{{ Input::old('email') }}">
                                    {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="{{ Input::old('password') }}">
                                    {{ $errors->first('password', '<span class="help-block">:message</span>') }}
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember-me" id="remember-me" type="checkbox" value="1">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Masuk</button>
                                <!-- <a href="{{ URL::to('admin') }}" class="btn btn-lg btn-success btn-block">Masuk</a> -->
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script type="text/javascript" src="{{ asset('assets/js/backend/jquery-1.10.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script type="text/javascript" src="{{ asset('assets/js/backend/sb-admin.js') }}"></script>
</body>

</html>
