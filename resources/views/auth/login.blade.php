<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets-backend/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets-backend/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Services Web
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets-backend/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets-backend/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="content" style="margin-top: 200px;">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-8 col-xl-4">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>