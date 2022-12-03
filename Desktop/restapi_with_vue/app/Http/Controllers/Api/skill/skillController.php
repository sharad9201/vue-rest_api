<?php

namespace App\Http\Controllers\Api\skill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class skillController extends Controller
{
    //
    public function index(){
        return response()->json('skill index');
    }

    public function store(Request $request){

    }
}
