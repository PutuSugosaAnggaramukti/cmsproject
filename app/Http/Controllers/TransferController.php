<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function TrasnferPage(){
        return view('Transfer.indextransfer');
    }
}
