<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Bill\CreateBill;
use App\Http\Controllers\Bill\ShowCreateBill;
use Illuminate\Http\Request;
use Illuminate\Routing\Contracts\ControllerDispatcher;

class BillController extends Controller
{
    //
    public function index(Request $request){
    }
    public function store(Request $request){
        (new CreateBill())->store($request);
    }
    public function create(Request $request): \Inertia\Response
    {
        return (new ShowCreateBill)->index($request);
    }
    public function show(){

    }
    public function update(){

    }
    public function destroy(){

    }
    public function edit(){

    }
}
