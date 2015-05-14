<!DOCTYPE html>
<html>
<head>
	<title>SHOWFIELD</title>
	<link rel="stylesheet" type="text/css" href="/css/showField.css">
</head>
<body>
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
							<td>{{{$item->name}}}</td>
							<td>{{{$item->description}}}</td>
							<td>ƒ {{{$item->price}}}</td>
						</tr>

						@endforeach
				</table>			
			</div>
		</div>	
	</div>

	{{-- <div id="container"> --}}
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
				<div class="mound leftMound">
					mound
				</div>
				<div class="mound middleMound">
					mound
				</div>
				<div class="mound rightMound">
					mound
				</div>
			</div>
			<br>

			<div id="fieldRow2" class="fieldRow">
				<div class="mound leftMound">
					mound
				</div>
				<div class="mound middleMound">
					mound
				</div>
				<div class="mound rightMound">
					mound
				</div>
			</div>
			<br>

			<div id="fieldRow3" class="fieldRow">
				<div class="mound leftMound">
					mound
				</div>
				<div class="mound middleMound">
					mound
				</div>
				<div class="mound rightMound">
					mound
				</div>
			</div>
		</div>
		<div id="buttons">
			<a href="#storeModal" class="fieldButton">Store</a>
			<br>
			<br>
			<br>
			<a href="/adventure_template" class="fieldButton">Adventure Time!</a>
			<br>
			<br>
			<br>
			<a href="/" class="fieldButton">Logout</a>
		</div>	
	{{-- </div> --}}

	
</body>
</html>