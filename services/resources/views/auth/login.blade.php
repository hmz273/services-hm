<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style1.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Document</title>
</head>
<body>
    <img class="wave" src="{{asset('assets/img/wave.png')}}">
	<div class="container1">
		<div class="img1">
			<img src="{{asset('assets/img/bg.svg')}}">
		</div>
		<div class="login-content1">
			<form class="fr" accept="{{route('login')}}" method="POST" >
				@csrf
				<img src="{{asset('assets/img/avatar.svg')}}">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input  name="email" id="email" type="email" class="input" :value="old('email')" required autofocus>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input name="password" id="password" type="password" class="input" required autocomplete="current-password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
                <a href="/" class="a">Back Home</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/js/main1.js')}}"></script>
</body>
</html>