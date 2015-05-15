<html>
    <body>
        <div class="container">
           	<p>{{{$body}}}</p>
           	<br>
           	@foreach($leads_to as $nextScene => $next)
           		<a href="{{{ action('HomeController@showAdventureTemplate', [$next]) }}}">{{{ $next_headers[$next] }}}</a>
           		<br>
           	@endforeach
        </div>
    </body>
</html>
