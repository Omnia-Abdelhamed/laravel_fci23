<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $data=[
            ['Dno'=>10,'Dname'=>'D10','MGRSSN'=>223344],
            ['Dno'=>20,'Dname'=>'D20','MGRSSN'=>556677]
        ];

        return view('admin.departments.index',['departments'=>$data]);
    }

    public function create(){
        return view('admin.departments.create');
    }

    public function store(Request $request){
        return $request;
    }

    public function update(Request $request){
        return $request;
    }
    public function show($id=null){ //5
        return view('admin.departments.show',['id'=>$id]);
    }

    public function edit($id){
        return view('admin.departments.edit',['id'=>$id]);
    }

    public function destroy($id){
        return $id;
    }
}
