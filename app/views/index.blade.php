<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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

      {{ Form::open(array('action' => 'HomeController@checkLogin')) }}
          <br>
          {{ Form::text('email',Input::old('email'), array('class' => 'zocial-dribbble', 'id' =>"email", 'name' => "email", 'placeholder' => "email")) }}
          {{ Form::password('password', array('class' => 'zocial-dribbble', 'id' =>"password", 'name' => "password", 'placeholder' => "Password")) }}
            <input type="submit" value="Login"/>
      {{ Form::close() }}
    
    <div class="canvasContainer">
        <canvas class="contextCanvas" id='canvas' height="300" width="500"></canvas>
    </div>

<script src="https://cdn.rawgit.com/brehaut/color-js/master/color.js"></script>
  <script src="js/index.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>