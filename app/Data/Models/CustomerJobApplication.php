<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerJobApplication extends Model
{

	protected $guarded = [];
	
    public function CustomerJob()
    {
    	return $this->hasMany(CustomerJob::class);
    }
}
