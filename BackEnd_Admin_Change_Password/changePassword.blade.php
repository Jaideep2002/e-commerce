{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="\dist\css\style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change Password </div>
                    <br>
                    <br>
                    
       
                    <div class="card-body">
                        <form method="POST" action="{{ route('change.password') }}">
                            @csrf 
       
                             @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                             @endforeach 
      
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
      
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                </div>
                            </div>
      
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
      
                                <div class="col-md-6">
                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                </div>
                            </div>
      
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
        
                                <div class="col-md-6">
                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                </div>
                            </div>
       
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Password
                                    </button>
                                </div>
                            </div>
                        </form>
    
                        <div class="alert alert-danger success-block">
                            <a href="{{ url('/home/login/dashboard') }}"><h2 style="color: black" style="text-align: center" >Go Back to DashBoard</h2></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <link rel="shortcut icon" type="image/png" href="\dist\img\favicon.png"/>
   <!-- Google Analytics -->
   <link rel="shortcut icon" type="image/png" href="\dist\img\favicon.png" />
   <script src='../../../../google_analytics_auto.js'></script>
 <link rel="stylesheet" type="text/css" href="\dist\css\change.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

 </head>
 <body>
     <div class="mainDiv">
                 <div class="cardStyle">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
                         
                 <h2 class="formTitle">
                 Change Your Password!
                 </h2>
                 
                     <div class="inputDiv">
                             <label class="inputLabel" for="password">Current Password</label>
                             <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                             <i class="far fa-eye" id="togglePassword" style="float: right; margin-left: 465px;  margin-top: -25px;  position: relative;z-index: 2;"></i>

                            </div>
 
                     <div class="inputDiv">
                             <label class="inputLabel" for="password">New Password</label>
                             <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                             <i class="far fa-eye" id="togglePassword1" style="float: right; margin-left: 465px;  margin-top: -25px;  position: relative;z-index: 2;"></i>

                            </div>
       
                     <div class="inputDiv">
                             <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                             <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                             <i class="far fa-eye" id="togglePassword2" style="float: right; margin-left: 465px;  margin-top: -25px;  position: relative;z-index: 2;"></i>

                     </div>
                     <div class="buttonWrapper">
                        <button id="submitButton"  class="submitButton pure-button pure-button-primary">Update</button>
                    </form>
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="\dist\js\change.js"></script>

    
 
    <script type="text/javascript">
    
var c = <?php echo count($errors) ?>;

 $( "#submitButton" ).click(function() {


 
    if (  c == 0 )  {
   
       
         $.alert("Your Password is successfully changed! ", {type: 'success',title:'Success Message',icon:'glyphicon glyphicon-pencil',minTop: 50});
        
        
    }   
});
    </script>
                         </form>
                         <script>
                            const togglePassword = document.querySelector('#togglePassword');
              const password = document.querySelector('#password');
            
              togglePassword.addEventListener('click', function (e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });
            </script>

<script>
    const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#new_password');

togglePassword1.addEventListener('click', function (e) {
// toggle the type attribute
const type1 = password1.getAttribute('type') === 'password' ? 'text' : 'password';
password1.setAttribute('type', type1);
// toggle the eye slash icon
this.classList.toggle('fa-eye-slash');
});
</script>

<script>
    const togglePassword2 = document.querySelector('#togglePassword2');
const password2 = document.querySelector('#new_confirm_password');

togglePassword2.addEventListener('click', function (e) {
// toggle the type attribute
const type2 = password2.getAttribute('type') === 'password' ? 'text' : 'password';
password2.setAttribute('type', type2);
// toggle the eye slash icon
this.classList.toggle('fa-eye-slash');
});
</script>

            
         </div>
         </div>
               
 </body>
 </html>