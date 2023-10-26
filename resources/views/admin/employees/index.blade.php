@extends('admin.layouts.master')
@section('title','All Departments')
@section('css')
<link
href="{{ URL::asset('assets/css/dataTables.bootstrap4.css') }}"
rel="stylesheet"
/>
@endsection
@section('breadcrumb')
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Employees</h4>
      <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
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
    <h5 class="card-title">Basic Datatable</h5>
    <div class="table-responsive">
      <table
        id="zero_config"
        class="table table-striped table-bordered"
      >
        <thead>
          <tr>
            <th>Dno</th>
            <th>Dname</th>
            <th>Mgr</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="#" class="btn btn-primary">show</a>
                    <a href="#" class="btn btn-success">edit</a>
                    <form action="{{ route('admin.employees.destroy',10) }}" method="post" style="display: inline-block">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
              </tr>
      </table>
    </div>
  </div>
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/datatables.min.js') }}"></script>
<script>
  /****************************************
   *       Basic Table                   *
   ****************************************/
  $("#zero_config").DataTable();
</script>
@endsection

