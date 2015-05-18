<?php 
	class Item extends BaseModel
	{
	    protected $table = 'items';

		public static function storeItems()
		{
			return Item::all()->get();
		}

	}

 ?>