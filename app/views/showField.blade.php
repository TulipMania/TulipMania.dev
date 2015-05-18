<!DOCTYPE html>
<html>
<head>
	<title>SHOWFIELD</title>
	<link rel="stylesheet" type="text/css" href="/css/showField.css">
</head>
<body>
	@if (Session::has('errorMessage'))
        <script type="text/javascript">
        alert("{{{ Session::get('errorMessage') }}}");
        </script>
    @endif

	<div id="storeModal" class="modal">
		<div id="store">
			<a href="#close" title="Close" class="close">X</a>
			<h1>Welcome to the store, young chap!</h1>
			<h2>What would you like?</h2>
			<div id="store_table">	
				<table>
						<tr>
						<th>Item</th>
						<th>Description</th>
						<th>Price</th>
						<th></th>
						</tr>

						@foreach($storeItems as $item)

						<tr>
						{{ Form::open(array('action' => 'HomeController@insertItem', Auth::user()->id)) }}	
							<td><input type ="submit" id="item" name="item" value ="{{{$item->name}}}"/></td>
						
							<td>{{{$item->description}}}</td>
							<td>ƒ {{{$item->price}}}</td>
							<input type ="number" id="cost" name="cost" value ="{{$item->price}}" readonly="true" hidden/>
						{{Form::close()}}
						</tr>

						@endforeach
				</table>			
			</div>
		</div>	
	</div>

	<div id="inventoryModal" class="modal">
		<div id="inventory">
			<a href="#close" title="Close" class="close">X</a>
			<h1>Welcome to YOUR INVENTORY!</h1>
			<div id="inventory_table">	
				<table>
						<tr>
						<th>Item</th>
						<th>Description</th>
						<th></th>
						</tr>
						@foreach($userItems as $item)

						<tr>
							<td>{{{$item->name}}}</td>
							<td>{{{$item->description}}}</td>
						</tr>

						@endforeach
				</table>			
			</div>
		</div>	
	</div>

	{{-- @for($i = 1; $i < 10; $i++)        --}}
		<div id="moundModal" class="modal">
			<div id="seeds">
				<a href="#close" title="Close" class="close">X</a>
				<h1>MOUNDS OF MOUNDS!</h1>
				<div id="seed_table">	
						@if($userSeeds)
							{{ Form::open(array('action' => array('HomeController@plant', 'method' => 'PUT')))}}
							@foreach($userSeeds as $seed)
								{{{$seed->name}}} 
								{{ Form::radio('seedID', $seed->id) }}
								<br>
							@endforeach
								{{ Form::hidden('mound', '', ['id' => "mound"]) }}
								{{ Form::hidden('userID', Auth::user()->id) }}

								{{ Form::submit('Plant') }}
							{{ Form::close() }}	
						@elseif(false)

						@else
							<p>You have no seeds to plant!</p>
						@endif
				</div>
			</div>	
		</div>
	{{-- @endfor --}}

	<a href="#inventoryModal" id="inventory">
		Inventory
	</a>

	<div id="money"> 
		Bank: ƒ{{{ Auth::user()->money }}}
	</div>

	<div id="userModel">
		<div id="userModelHead" class="modelPart">
			hat
		</div>
		<br>
		<div id="userModelTorso" class="modelPart">
			shirt
		</div>
		<br>
		<div id="userModelLegs" class="modelPart">
			pants
		</div>
	</div>

	<div id="fields">
		<div id="fieldRow1" class="fieldRow">
			<a href="#moundModal" id="mound1" class="mound">
				{{{ null }}}
			</a>
			<a href="#moundModal" id="mound2" class="mound">
				{{{ null }}}
			</a>
			<a href="#moundModal" id="mound3" class="mound">
				{{{ null }}}
			</a>
		</div>
		<br>

		<div id="fieldRow2" class="fieldRow">
			<a href="#moundModal" id="mound4" class="mound">
				{{{ null }}}
			</a>
			<a href="#moundModal" id="mound5" class="mound">
				{{{ null }}}
			</a>
			<a href="#moundModal" id="mound6" class="mound">
				{{{ null }}}
			</a>
		</div>
		<br>

		<div id="fieldRow3" class="fieldRow">
			<a href="#moundModal" id="mound7" class="mound">
				{{{ null }}}
			</a>
			<a href="#moundModal" id="mound8" class="mound">
				{{{ null }}}
			</a>
			<a href="#moundModal" id="mound9" class="mound">
				{{{ null }}}
			</a>
		</div>
	</div>

	<div id="buttons">
		<a href="#storeModal" class="fieldButton">Store</a>
		<br>
		<br>
		<br>
		<a href="{{{ action('HomeController@showAdventureTemplate', ['s_grounds']) }}}" class="fieldButton">Adventure Time!</a>
		<br>
		<br>
		<br>
		<a href="/" class="fieldButton">Logout</a>
	</div>	

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$(".mound").click(function(){
		$("#mound").attr('value', $(this).attr('id'));
	})
</script>
	
</body>
</html>