<html>
    <body>
    	<div id="money"> 
			Bank: ƒ{{{ Auth::user()->money }}}
		</div>
	        <div class="container">

	        @if($story_id == "s_grounds" || $story_id == "s_intro" )
	        	<a href="{{{ action('HomeController@showField')}}}">Return Home</a>
	        @endif

	        @if($story_id == "s_intro")
	           	<p>{{{ substr($body, 0,138).Auth::user()->username.substr($body, 151,422)}}}</p>
	        @else
	        	<p>{{{$body}}}</p>
	        @endif
	              <a href="{{{ action('HomeController@showAdventureTemplate', [$nextScenario]) }}}">{{{ $next_headers }}}</a>
	           	<br>
	        </div>
    </body>
</html>

