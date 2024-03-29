<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'name',
		'descrption',
	];	

	public function products()
	{
		return $this->belongsToMany(Product::class);
	}
}
