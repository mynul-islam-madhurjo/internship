<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ValidationController extends Controller {
    public function showform() {
        return view('create');
    }
    public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
    }
}
