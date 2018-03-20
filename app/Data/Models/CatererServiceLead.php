<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class CatererServiceLead extends Model
{

	protected $guarded = [];
	
    public function CatererService()
    {
    	return $this->belongsTo(CatererService::class);
    }
}
