<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/adventureTemplate.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	</head>
    <body>
    	<div id="money"> 
			<i class="fa fa-money"></i> ƒ{{{ Auth::user()->money }}}
		</div>
	        <div class="container" id="story">

	        @if($story_id == "s_grounds" || $story_id == "s_intro" )
	        	<a href="{{{ action('HomeController@showField')}}}"><i class="fa fa-home"></i></a>
	        @endif

	           	<p>{{$body}}</p>

	              <a href="{{{ action('HomeController@showAdventureTemplate', [$nextScenario]) }}}">{{{ $next_headers }}}</a>
	           	<br>
	        </div>
    </body>
</html>
