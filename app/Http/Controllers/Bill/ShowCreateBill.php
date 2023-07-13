<?php

namespace App\Http\Controllers\Bill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowCreateBill extends Controller
{
    //
    public function index(Request $request): \Inertia\Response
    {
        return Inertia::render('CreateBill',[
            'page'=>"Create Bill Controller"
        ]);
    }
}
