<html>
    <body>
    	<div id="money"> 
			Bank: ƒ{{{ Auth::user()->money }}}
		</div>
	        <div class="container">

	        @if($story_id == "s_grounds" || $story_id == "s_intro" )
	        	<a href="{{{ action('HomeController@showField')}}}">Return Home</a>
	        @endif

	           	<p>{{$body}}</p>

	              <a href="{{{ action('HomeController@showAdventureTemplate', [$nextScenario]) }}}">{{{ $next_headers }}}</a>
	           	<br>
	        </div>
    </body>
</html>
