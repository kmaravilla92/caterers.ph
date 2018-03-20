<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class SavedContent extends Model
{

	protected $guarded = [];
	
    public function Owner()
    {
    	return $this->belongsTo(User::class);
    }

    public function Content()
    {
    	$class = $this->content_type;
    	return $this->belongsTo($class, 'id', 'content_id');
    }
}
