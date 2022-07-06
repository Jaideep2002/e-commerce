<!DOCTYPE html>
<html>
  <head>
    <title>Admin login form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .box{
            width:600px;
            margin:0 auto;
            border: 1px solid #ccc;
        }
    </style>
  </head>
  <body>
      <br />
      <div class="container box">
          @if (isset(Auth::user()->adminid))
          <div class="alert alert-danger success-block">
              <strong>Welcome {{Auth::user()-> adminid}}</strong><br />
              <a href="{{ url('main/logout')}}">Logout</a>
          </div>
          @else
          <script>window.location="/main";</script>
          @endif
      </div>
  </body>
</html>