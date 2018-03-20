<?php

namespace App\Http\Controllers\Frontsite\Guests\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function __invoke()
    {
    	return __CLASS__ . '@' . __METHOD__;
    }
}
