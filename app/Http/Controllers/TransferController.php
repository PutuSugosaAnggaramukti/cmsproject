<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function TransferPage()
    {

        return view('Transfer.indextransfer');
    }

    public function TransferRekLainPage(){
        return view('Transfer.rekeninglain');
    }

    public function TransferSKNRTGSPage(){
        return view('Transfer.sknrtgs');
    }

    public function TransferAtmBersamaPrimaPage(){
        return view('Transfer.transferatmbersamaprima');
    }
}
