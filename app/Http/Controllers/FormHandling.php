<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students; // Ensure this matches your model name (singular form)

class FormHandling extends Controller
{
    public function index(){
        $url = url('/');
        $title = "Add Student";
        $data = compact('url', 'title');
        return view('home')->with($data); // Ensure your view is correctly named
    }

    public function store(Request $req){
        $student = new Students();
        $student->name = $req->input('name');
        $student->email = $req->input('email');
        $student->age = $req->input('age');
        $student->mobile = $req->input('mobile');
        $student->password = $req->input('password');
        $student->gender = $req->input('gender');
        $student->save();
        return redirect('/view-students');
    }

    public function show(){
        $students = Students::all();
        return view('student-view', compact('students')); // Ensure your view is correctly named
    }

    public function delete($id){
        $student = Students::find($id);
        if ($student) {
            $student->delete();
        }
        return redirect('/view-students');
    }

    public function edit($id){
        $student = Students::find($id);
        if (is_null($student)) {
            return redirect('/view-students');
        } else {
            $url = url('/update/' . $id);
            $title = "Update Student";
            return view('home', compact('student', 'url', 'title')); // Ensure your view is correctly named
        }
    }

    public function update(Request $request, $id){
        $student = Students::find($id);
        if ($student) {
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->age = $request->input('age');
            $student->mobile = $request->input('mobile');
            $student->password = $request->input('password');
            $student->gender = $request->input('gender');
            $student->save();
        }
        return redirect('/view-students');
    }
}
