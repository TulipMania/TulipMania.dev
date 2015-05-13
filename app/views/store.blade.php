
<div class="store">
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
						<td>{{{$item['name']}}}</td>
						<td>{{{$item['description']}}}</td>
						<td>ƒ {{{$item['price']}}}</td>
					</tr>
			</table>
			<button>X</button>				
		</div>	
</div>

