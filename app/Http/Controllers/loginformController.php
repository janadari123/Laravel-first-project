<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class loginformController extends Controller
{
    //
    public function createForm(Request $request){
        return view('login');
    }

    public function loginForm(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'Date of birth' => 'required',
            'Telephone No.' => 'required',
            'NIC No.' => 'required',
            'gender' => 'required'
        ]);
    }
}
