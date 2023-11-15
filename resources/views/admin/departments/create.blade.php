@extends('admin.layouts.master')
@section('title','Add Department')
@section('breadcrumb')
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Add Department</h4>
      <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
            <a href="#">All Departments</a></li>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
@endsection
@section('content')
<form class="form-horizontal" action="{{ route('admin.departments.store') }}" enctype="multipart/form-data" method="post">
    @csrf {{-- 419 error --}}
    <div class="card-body">
        @if (Session::has('msg'))
        <div class="alert alert-success">
            {{ Session::get('msg') }}
        </div>
        @endif
      <div class="form-group row">
        <label
          for="dno"
          class="col-sm-3 text-end control-label col-form-label"
          >Dno</label
        >
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="dno"
            placeholder="Dno Here"
            name="dno"
          />
        </div>
      </div>
      <div class="form-group row">
        <label
          for="dname"
          class="col-sm-3 text-end control-label col-form-label"
          >Dname</label
        >
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="dname"
            placeholder="Dname Here"
            name="dname"
          />
        </div>
      </div>
      <div class="form-group row">
        <label
          for="dname"
          class="col-sm-3 text-end control-label col-form-label"
          >Desc</label
        >
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="desc"
            placeholder="Desc Here"
            name="desc"
          />
        </div>
      </div>
      {{-- <div class="form-group row">
        <label
          for="dname"
          class="col-sm-3 text-end control-label col-form-label"
          >Image</label
        >
        <div class="col-sm-9">
          <input
            type="file"
            class="form-control"
            id="image"
            placeholder=""
            name="image"
          />
        </div>
      </div> --}}
      <div class="form-group row">
        <label
          for="fname"
          class="col-sm-3 text-end control-label col-form-label"
          >Manager</label
        >
        <div class="col-sm-9">
          <select class="form-control" name="manager">
            @foreach ($managers as $manager)
            <option value="{{ $manager['SSN'] }}">{{ $manager['name'] }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="border-top">
      <div class="card-body">
        <button type="submit" class="btn btn-primary">
          Add
        </button>
      </div>
    </div>
  </form>
@endsection
