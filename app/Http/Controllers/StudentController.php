<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class StudentController extends Controller
{
    public function student(Request $req)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address_info' => 'required',
        );
        $validator =  Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(),401);
        }else {
            return '0 Errors';
        }
        
    }
}
