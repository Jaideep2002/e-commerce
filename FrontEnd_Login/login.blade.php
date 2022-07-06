<!DOCTYPE html>
<html>
  <head>
    <title>Log in to Zuccedd Admin Page</title>
	<link rel="shortcut icon" type="image/png" href="\dist\images\header\favicon.png" />
    <!-- Google Analytics -->
	<link rel="shortcut icon" type="image/png" href="\dist\images\header\favicon.png" />
	<script src='../../../../google_analytics_auto.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;	
        font-family: Raleway, sans-serif;
    }
    body {
	background: lavender;
}
.container {
	display: grid;
	align-items: stretch;
	justify-content: center;
	min-height: 100vh;
	width: 205vh;
	background: white;
	background-repeat: no-repeat ;
	background-size: 100%;
}

.screen {		
	background: white;		
	position: relative;	
	height: 440px;
	width: 440px;	
	outline-style:solid;
	outline-width: thin;
	border-radius: 30px;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 520px;
	padding:80px;
	padding-top: 60px;
}

.login__field {
	padding: 10px 30px 6px 19px;	
	position: sticky;
	width: 340px;
	/* outline-style:solid;
	outline-width: thin;	 */
}
.login__icon {
	position: absolute;
	top: 3	10px;
	color: #7875B5;
}

.login__input {
	border: black;
	border-bottom: 3px solid black;
	background: none;
	padding: 16px;
	padding-left: 60px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}
::placeholder { /* Microsoft Edge */
 color: Black;
 opacity: 1;
}
.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: black;
	border-bottom-color: darkgray;
	color: Black;
}

.login__submit {
	background-color: blueviolet;
	font-size: 17px;
	margin-top: 29px;
	/* /* padding-left: 10px; */
	padding-bottom: 5px; 
	border-radius: 16px;
	border: 5px ;
	font-weight: 600;
	display: stretch;
	/* align-items: center; */
	width: 50%;
	color: white;
	/* box-shadow: 0px 2px 2px Black; */
	cursor: pointer;
	transition: .1s;
	-ms-transform: translate(-90%, -50%);
  	transform: translate(+22%, -30%);
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	background-color: darkorchid;
	border-color: blueviolet;
	outline: blueviolet;
	color: white;
	box-shadow: 0 12px 20px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button__icon {
	font-size: 20px;
	padding-left: 2px;
	margin-left: auto;
	color: Black;
}

.login_for{
	padding-top:10px;
	padding-left:74px;
	/* color: white; */
	background-color: white;
	width: 250px;
	font-weight: 900;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 46%;
}

</style>
</head>
<body>
<div class="container">
<div class = "center" >	
<img src="dist\images\header\zucced1.png" width= "200" height = "68" alt="Zuccedd">
</div>
	<div class="screen">
		<div class="screen__content">
            @if (isset(Auth::user()->adminid))
            <script>window.location="/main/successlogin";</script>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if (count($errors)>0) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

			{{-- <div class="imgcontainer">
				<img src="https://media.istockphoto.com/vectors/user-icon-flat-isolated-on-white-background-user-symbol-vector-vector-id1300845620?k=20&m=1300845620&s=612x612&w=0&h=f4XTZDAv7NPuZbG0habSpU0sNgECM0X7nbKzTUta3n8=" width="80" height="80" class="avatar">
			  </div> --}}

			<form class="login" action="{{url('/main/checklogin')}}" method="POST">
                {{ csrf_field() }}
                <div class="login__field">
			</br>
		
                    <input autocorrect = "off" autocapitalize = "off" autocomplete = "on" type="text" class="login__input"placeholder="Enter Admin ID" name="adminid" />
                </div>
				<div class="login__field">
				<input type="password" class="login__input" id="id_password" autocomplete="current-password" placeholder="Enter Password" name="password" />
					<i class="far fa-eye" id="togglePassword" style="margin-left: -40px; cursor: pointer;"></i>
				</div>
					<button class="button login__submit">
						<span class="button__text">Log In</span>
						<!-- <i class="button__icon fas fa-chevron-right"></i> -->
					</button>
			</br>
					<div class = "login_for" >
          			<a href="#" >forgot password?</a>	
			</div>	
			</form>
			<script>
				const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
		</div>
		<!-- <div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		 -->
	</div>
</div>
</body>
</html>