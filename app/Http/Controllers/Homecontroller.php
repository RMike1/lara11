<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Student;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Student::all();
        return view('Index',['data'=>$data]);
    }

    public function store(Request $request)
    {
        $data=new Student;
        $data->name=$request->name;
        $data->age=$request->age;
        $data->save();
        return redirect()->back();
    }

    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
