<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset("assets/plugins/bootstrap/bootstrap.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/font-awesome/css/font-awesome.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/plugins/pace/pace-theme-big-counter.css") }}" rel="stylesheet" />
   <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/css/main-style.css") }}" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="../../img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login as administrator</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="Email or Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="{{ url('/admin/') }}" class="btn btn-lg btn-default btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="{{ asset("assets/plugins/jquery-1.10.2.js") }}"></script>
    <script src="{{ asset("assets/plugins/bootstrap/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/plugins/metisMenu/jquery.metisMenu.js") }}"></script>

</body>

</html>