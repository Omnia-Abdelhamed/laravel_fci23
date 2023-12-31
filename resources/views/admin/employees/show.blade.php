@extends('admin.layouts.master')
@section('breadcrumb')
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">empName {{ $id }}</h4>
      <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">All Departments</a></li>
            <li class="breadcrumb-item active" aria-current="page">
            <a href="add.php">Add New</a></li>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
      <table class="table">
          <tbody>
              <tr>
                  <th scope="row">Dno</th>
                  <td></td>
              </tr>
              <tr>
                  <th scope="row">Dname</th>
                  <td></td>
              </tr>
              <tr>
                  <th scope="row">Manager</th>
                  <td></td>
              </tr>
              <tr>
                  <th scope="row">Image</th>
                  <td><img class="img-fluid" width="100" src=""></td>
              </tr>
          </tbody>
      </table>
    </div>
  </div>
@endsection
