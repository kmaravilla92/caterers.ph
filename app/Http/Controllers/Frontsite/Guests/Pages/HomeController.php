<?php

namespace App\Http\Controllers\Frontsite\Guests\Pages;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function __invoke()
    {
    	return view($this->view_base . '.home');
    }
}
