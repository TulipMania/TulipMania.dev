<!DOCTYPE html>
<html>
<head>
	<title>SHOWFIELD</title>
	<link rel="stylesheet" type="text/css" href="/css/showField.css">
</head>
<body>
	@if (Session::has('errorMessage'))
        <script type="text/javascript">
        alert("{{ Session::get('errorMessage') }}");
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
						{{ Form::open(array('action' => 'GameController@insertItem', Auth::user()->id)) }}	
							<td><input type ="submit" id="item" name="item" value ="{{$item->name}}"/></td>
						
							<td>{{$item->description}}</td>
							<td>ƒ {{$item->price}}</td>
							<input type ="number" id="cost" name="cost" value ="{{$item->price}}" readonly="true" hidden/>
							<input type ="text" id="id" name="id" value ="{{$item->id}}" readonly="true" hidden/>
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
							<td>{{$item->name}}</td>
							<td>{{$item->description}}</td>
						</tr>

						@endforeach
				</table>			
			</div>
		</div>	
	</div>

	<div id="moundModal" class="modal">
		<div id="seeds">
			<a href="#close" title="Close" class="close">X</a>
			<h1>MOUNDS OF MOUNDS!</h1>
			<div id="seed_table">	
				TABLE
			</div>
		</div>	
	</div>
		<div id="moundModal" class="modal">
			<div id="seeds">
				<a href="#close" title="Close" class="close">X</a>
				<h1>MOUNDS OF MOUNDS!</h1>
				<div id="seed_table">	
				</div>
			</div>	
		</div>

	<a href="#inventoryModal" id="inventory">		
		Inventory		
	</a>

	<div id="money"> 
		Bank: ƒ{{ Auth::user()->money }}
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

	<div id="marketModal" class="modal">
		<div id="market">
			<a href="#close" title="Close" class="close">X</a>
			<h1>Welcome to The Market!</h1>
			<div id="market_table">	
				<input type="text" class="form-control" name="searched_item" id="searched_item">
				<input type="submit" value="search">
				<table>
						<tr>
						<th>Item</th>
						<th>Price</th>
						<th>description</th>
						<th>Seller</th>
						</tr>
						@foreach($marketItems as $item)
						{{ Form::open(array('action' => 'GameController@buyItem')) }}
						<tr>
							
							<td> <input type = "submit" id="item_for_sale" name="item_for_sale" value="{{$item->name}}"> </td>
							<td>{{$item->price}}</td>
							<input type ="text" id="sellling_price" name="selling_price" value="{{$item->price}}" readonly="true" hidden>
							<input type ="text" id="item_id" name="item_id" value="{{$item->item_id}}" readonly="true" hidden>
							<td>{{$item->description}}</td>
							<td>{{$item->username}}</td>
							<input type ="text" id="sellling_user" name="selling_user" value="{{$item->username}}" readonly="true" hidden>
						</tr>
						{{Form::close()}}
						@endforeach
				</table>
						<h3>Sell your Items</h3>
				<table>
						<tr>
						<th>Item</th>
						<th>Description</th>
						<th>Price To Sell</th>
						</tr>
						
						@foreach($userItems as $items)
						{{ Form::open(array('action' => 'GameController@sellItem')) }}	
						<tr>
							<td><input type ="submit" id="item_to_sell_name" name="item_to_sell_name" value ="{{$items->name}}"/></td>
							<td>{{$items->description}}</td>
							<input type="text" name="description_of_item" id="description_of_item" value="{{$items->description}}" readonly="true" hidden>
							<td><input type="number" name="price_to_sell" id="price_to_sell" value="{{$items->price}}"></td>
						</tr>
						{{Form::close()}}
						@endforeach
				</table>				
			</div>
		</div>	
	</div>

	<div id="fields">
		<div id="fieldRow1" class="fieldRow">
			<a href="#moundModal" id="mound1" class="mound" value="{{isset($field[1])}}">
				{{{ '' }}}
				@if(isset($field[1]))
					<img src="/images/tulips/{{getImg($field[1])}}" class="itemImage">
				@endif
			</a>
			<a href="#moundModal" id="mound2" class="mound" value="{{isset($field[2])}}">
				{{{ '' }}}
				@if(isset($field[2]))
					<img src="/images/tulips/{{getImg($field[2])}}" class="itemImage">
				@endif
			</a>
			<a href="#moundModal" id="mound3" class="mound" value="{{isset($field[3])}}">
				{{{ '' }}}
				@if(isset($field[3]))
					<img src="/images/tulips/{{getImg($field[3])}}" class="itemImage">
				@endif
			</a>
		</div>
		<br>

		<div id="fieldRow2" class="fieldRow">
			<a href="#moundModal" id="mound4" class="mound" value="{{isset($field[4])}}">
				{{{ '' }}}
				@if(isset($field[4]))
					<img src="/images/tulips/{{getImg($field[4])}}" class="itemImage">
				@endif
			</a>
			<a href="#moundModal" id="mound5" class="mound" value="{{isset($field[5])}}">
				{{{ '' }}}
				@if(isset($field[5]))
					<img src="/images/tulips/{{getImg($field[5])}}" class="itemImage">
				@endif
			</a>
			<a href="#moundModal" id="mound6" class="mound" value="{{isset($field[6])}}">
				{{{ '' }}}
				@if(isset($field[6]))
					<img src="/images/tulips/{{getImg($field[6])}}" class="itemImage">
				@endif
			</a>
		</div>
		<br>

		<div id="fieldRow3" class="fieldRow">
			<a href="#moundModal" id="mound7" class="mound" value="{{isset($field[7])}}">
				{{{ '' }}}
				@if(isset($field[7]))
					<img src="/images/tulips/{{getImg($field[7])}}" class="itemImage">
				@endif
			</a>
			<a href="#moundModal" id="mound8" class="mound" value="{{isset($field[8])}}">
				{{{ '' }}}
				@if(isset($field[8]))
					<img src="/images/tulips/{{getImg($field[8])}}" class="itemImage">
				@endif
			</a>
			<a href="#moundModal" id="mound9" class="mound" value="{{isset($field[9])}}">
				{{{ '' }}}
				@if(isset($field[9]))
					<img src="/images/tulips/{{getImg($field[9])}}" class="itemImage">
				@endif
			</a>
		</div>
	</div>


	        @if (Session::has('successMessage'))
                <script type="text/javascript">
                alert("{{{ Session::get('successMessage') }}}");
                </script>
            @endif

	<div id="buttons">
		<a href="#storeModal" class="fieldButton">Store</a>
		<br>
		<br>
		<br>
		<a href="{{ action('GameController@showAdventureTemplate', ['s_grounds']) }}" class="fieldButton">Adventure Time!</a>
		<br>
		<br>
		<br>
		<a href="#marketModal" class="fieldButton">Market</a>
		<br>
		<br>
		<br>
		<a href="/" class="fieldButton">Logout</a>
	</div>	

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$(".mound").click(function(){
		mound = $(this).attr('id').substring(5);
		if($(this).attr('value')){
			mound = $(this).attr('id').substring(5);
			$.get( "getMound/" + mound, function( data ) {
			  $("#seed_table").html(data);
			  console.log(data);
			});
		}
		else{
			$.get( "getSeeds", function( seeds ) {
			  if(seeds.length > 0){
			  		html ="<form method='POST' action='plant'>"; 
			  		for(i = 0; i < seeds.length; i++){
			  			html += '<label>' +
			  			
			  			'<input type="radio" name="seedID" value="' + seeds[i].id + '" >' +
			  			"<span>" + seeds[i].name + "</span>" + 
			  			'</label>' +
						"<br>";
			  		}
					html += '<input type="hidden" id="mound" name="mound" value="' + mound + '">' +
					        '<button type="submit">Plant</button>';
					$("#seed_table").html(html);
					console.log(mound);
			  }
			  else{
			  	$("#seed_table").html("<p>You don't have any seeds!</p>");
			  }
			});
		}
	})
	$.getJSON("$result", function(json) {
    console.log(json); // this will show the info it in firebug console 
});
</script>
	
</body>
</html>