<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{

    protected $guarded = [];
    
    public function FromUser()
    {
    	return $this->belongsTo(User::class, 'id', 'by_user_id');
    }

    public function ForUser()
    {
    	return $this->belongsTo(User::class, 'id', 'for_user_id');
    }

    public function ForContent()
    {
    	$class = $this->for_content_type;
    	return $this->belongsTo($class, 'id', 'for_content_id');
    }
}
