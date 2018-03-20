<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class CatererService extends Model
{

	protected $guarded = [];

	public function Caterer()
	{
		return $this->hasMany(User::class, 'id', 'caterer_id');
	}

    public function Leads()
    {
    	return $this->hasMany(CatererServiceLead::class);
    }
}
