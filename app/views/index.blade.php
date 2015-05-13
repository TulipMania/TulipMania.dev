<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tulip Mania !</title>

<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 	<h1 align="center">Tulip Mania!</h1>
		<div id="background-wrap">
		    <div class="x1">
		        <div class="cloud"></div>
		    </div>

		    <div class="x2">
		        <div class="cloud"></div>
		    </div>

		    <div class="x3">
		        <div class="cloud"></div>
		    </div>
		</div>


    <div id="container" class="center-block">
    <div id="tabbox">
    <a href="#" id="signup" class="tab signup">Signup</a>
    <a href="#" id="login" class="tab select">Login</a>
    </div>
    <div id="panel">
    <div id="loginbox">
          {{ Form::open(array('action' => 'HomeController@checkLogin')) }}
              <br>
              {{ Form::text('user_input',Input::old('user_input'), array('class' => 'zocial-dribbble', 'id' =>"user_input", 'name' => "user_input", 'placeholder' => "User")) }}
              {{ Form::password('password', array('class' => 'zocial-dribbble', 'id' =>"password", 'name' => "password", 'placeholder' => "Password")) }}
                <input type="submit" value="Login"/>
          {{ Form::close() }}

    </div>

    <div id="signupbox">
            {{ Form::open(array('action' => 'HomeController@signUp')) }}

               {{ Form::text('newEmail',Input::old('newEmail'), array('class' => 'zocial-dribbble', 'id' =>"newEmail", 'name' => "newEmail", 'placeholder' => "Enter your E-mail")) }}             

              {{ Form::text('newUser',Input::old('newUser'), array('class' => 'zocial-dribbble', 'id' =>"newUser", 'name' => "newUser", 'placeholder' => "Select a username")) }}

              {{ Form::text('newPass',Input::old('newPass'), array('class' => 'zocial-dribbble', 'id' =>"newPass", 'name' => "newPass", 'placeholder' => "create a password")) }}

              {{ Form::text('confirmPass',Input::old('confirmPass'),array('class' => 'zocial-dribbble', 'id' =>"confirmPass", 'name' => "confirmPass", 'placeholder' => "Confirm your password")) }}

                <input type="submit" value="Sign Up"/>

            {{ Form::close() }}

    </div>
    </div>
    </div>
          <div style="display:block" class="pull-right">
            @foreach($errors->all() as $message)
                <span class="alert alert-danger">{{ $message }}</span>
            @endforeach
          </div>
            @if (Session::has('successMessage'))
                <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif
    <div class="canvasContainer">
        <canvas class="contextCanvas" id='canvas' height="300" width="500"></canvas>
        <canvas id="layer2" style="z-index:2;position:absolute;left:0px;top:0px;" height="300px" width="500"></canvas>
    </div>
<script src="https://cdn.rawgit.com/brehaut/color-js/master/color.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/index.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>