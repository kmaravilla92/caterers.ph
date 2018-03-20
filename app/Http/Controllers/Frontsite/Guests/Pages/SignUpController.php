<?php

namespace App\Http\Controllers\Frontsite\Guests\Pages;

use Illuminate\Http\Request;

class SignUpController extends BaseController
{
    public function getForm()
    {
    	return view($this->_view_base . '.signup');
    }

    public function postForm()
    {

    }
}
