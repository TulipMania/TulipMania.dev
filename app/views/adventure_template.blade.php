<html>
    <body>
        <div class="container">
           	<p>{{{$body}}}</p>

              <a href="{{{ action('HomeController@showAdventureTemplate', [$nextScenario]) }}}">{{{ $next_headers }}}</a>
           	<br>
        </div>
    </body>
</html>
