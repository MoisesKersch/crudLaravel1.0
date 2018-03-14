<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
