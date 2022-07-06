<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/png" href="\dist\img\favicon.png"/>
  <!-- Google Analytics -->
  <link rel="shortcut icon" type="image/png" href="\dist\img\favicon.png" />
  <script src='../../../../google_analytics_auto.js'></script>
<link rel="stylesheet" type="text/css" href="\dist\css\change.css"/>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
    <div class="mainDiv">
                <div class="cardStyle">
                <a href="{{url('home/dashboard')}}"><button class = "button_style">Go To Dashboard</button></a>
                <h2 class="formTitle">
                Change Your Password!
                </h2>
                    <div class="inputDiv">
                            <label class="inputLabel" for="password">Current Password</label>
                            <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                    </div>

                    <div class="inputDiv">
                            <label class="inputLabel" for="password">New Password</label>
                            <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                    </div>
      
                    <div class="inputDiv">
                            <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                            <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                        
                    </div>
                    <div class="buttonWrapper">
                            <button id="submitButton"  class="submitButton pure-button pure-button-primary      ">Continue</button>
                        </form>
                </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="\dist\js\change.js"></script>
<script>
$( "#submitButton" ).click(function() {
$ .alert("Your Password is successfully changed! ", {type: 'success',title:'Success Message',icon:'glyphicon glyphicon-pencil',minTop: 50});
});
</script>

              
</body>
</html>
