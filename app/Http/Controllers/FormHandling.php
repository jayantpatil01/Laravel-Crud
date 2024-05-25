<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormHandling extends Controller
{
    public function index(){
        return view('Home');
    }
    public function store(Request $req){
        echo "<pre>";
        print_r($req->all());
    }
}
