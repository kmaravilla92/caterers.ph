<?php

namespace App\Http\Controllers\Frontsite\Guests\Pages;

use Illuminate\Http\Request;

class SignInController extends BaseController
{
    public function getForm()
    {
    	return __CLASS__ . '@' . __METHOD__;
    }

    public function postForm()
    {

    }
}
