<?php

namespace App\Data\Models;

use App\User as MainUserModel;

class User extends MainUserModel
{

    protected $guarded = [];
    
	public function CatererServices()
	{
		return $this->hasMany(CatererService::class, 'caterer_id', 'id');	
	}

	public function CustomerJobs()
	{
		return $this->hasMany(CustomerJob::class, 'customer_id', 'id');	
	}

    public function SaveContents()
    {
    	return $this->hasMany(SavedContent::class);
    }

    public function CreatedReviews()
    {
    	return $this->hasMany(UserReview::class, 'by_user_id', 'id');
    }

    public function ReceivedReviews()
    {
    	return $this->hasMany(UserReview::class, 'for_user_id', 'id');
    }
}
