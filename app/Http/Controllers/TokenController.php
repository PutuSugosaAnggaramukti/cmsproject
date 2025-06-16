<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function TokenPage()
    {
        return view('Token.indextoken');
    }
}
