<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;


class FormHandling extends Controller
{
    public function index(){
        return view('Home');
    }
    public function store(Request $req){
        $student = new Students();
        $student->name = $req['name'];
        $student->email = $req['email'];
        $student->age = $req['age'];
        $student->mobile = $req['mobile'];
        $student->password = $req['password'];
        $student->gender = $req['gender'];
        $student->save();
        return response()->json(['Message'=> 'Student Entry was suscefully Enterd'],201);

    }
}
