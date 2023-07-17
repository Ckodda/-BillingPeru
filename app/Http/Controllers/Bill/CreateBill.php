<?php

namespace App\Http\Controllers\Bill;

use App\Http\Controllers\Controller;
use App\Services\WebServiceSunat;
use Illuminate\Http\Request;

class CreateBill extends Controller
{
    //
    public function store(Request $request, WebServiceSunat $sunat){
        dd($sunat->see);
    }
}
