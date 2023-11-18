<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $data=Department::all(); // select * from departments
        return view('admin.departments.index',['departments'=>$data]);
    }

    public function create(){
        $managers=Employee::all();
        return view('admin.departments.create',['managers'=>$managers]);
    }

    public function store(DepartmentRequest $request){
        // $imageName=$request->file('image')->getClientOriginalName();
        $ext=$request->file('image')->getClientOriginalExtension();
        $imageName=$request->dno.".".$ext;
        $path=$request->file('image')->storeAs('images/departments',$imageName,'upload');
        // $department= new Department();
        // $department->dept_id=$request->dno;
        // $department->dept_name=$request->dname;
        // $department->desc=$request->desc;
        // $department->MGRSSN=$request->manager;
        // $department->save(); // insert

        // $request->validate([
        //     'dno'=>'required|unique:departments,dept_id|integer',
        //     'dname'=>'required|unique:departments,dept_name|alpha_num|max:100',
        //     'desc'=>'nullable',
        //     'manager'=>'integer|nullable'
        // ]);
        Department::create([
            'dept_id'=>$request->dno,
            'dept_name'=>$request->dname,
            'desc'=>$request->desc,
            'MGRSSN'=>$request->manager,
            'deptImage'=>$path
        ]);
        return redirect()->back()->with('msg','Addded Successfully..');
    }

    public function update(Request $request){
        $department=Department::findorfail($request->old_dept_id);
        // $department->dept_id=$request->dno;
        // $department->dept_name=$request->dname;
        // $department->desc=$request->desc;
        // $department->MGRSSN=$request->manager;
        // $department->save();

        //
        $department->update([
            'dept_id'=>$request->dno,
            'dept_name'=>$request->dname,
            'desc'=>$request->desc,
            'MGRSSN'=>$request->manager
        ]);
        return redirect()->back()->with('msg','Updated Successfully..');
    }
    public function show($id=null){ //5
        $data=Department::findorfail($id); // select * from departments where dept_id=$id
        return view('admin.departments.show',['data'=>$data]);
    }

    public function edit($id){
        $data=Department::findorfail($id); //pk => id
        $managers=Employee::all();
        return view('admin.departments.edit',['data'=>$data,'managers'=>$managers]);
    }

    public function destroy($id){
        // Department::findorfail($id)->delete();
        Department::destroy($id);
        return redirect()->back()->with('msg','Deleted..');
    }

    public function archive(){
        $data=Department::onlyTrashed()->get(); // select * from departments
        return view('admin.departments.archive',['departments'=>$data]);
    }

    public function destroyArchive($id){
        Department::withTrashed()->findorfail($id)->forceDelete();
        return redirect()->back()->with('msg','Deleted..');
    }
}
