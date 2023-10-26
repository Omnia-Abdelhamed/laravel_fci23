<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('departments.index');
    }

    public function create(){
        return view('departments.create');
    }

    public function show($id=null){ //5
        return view('departments.show',['id'=>$id]);
    }

    public function edit($id){
        return view('departments.edit',['id'=>$id]);
    }
}
