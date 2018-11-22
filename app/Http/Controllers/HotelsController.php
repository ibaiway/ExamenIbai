<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Hotel;

class HotelsController extends Controller
{
    public function hotels1()
        {
        	$hotels = Hotel::where('categoria', '1');
            return view('hotel.index', compact($hotels));
        }
}
