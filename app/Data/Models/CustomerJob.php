<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerJob extends Model
{

	protected $guarded = [];
	
	public function Customer()
	{
		return $this->hasMany(User::class, 'id', 'customer_id');
	}

    public function Applications()
    {
    	return $this->hasMany(CustomerJobApplication::class);
    }
}
