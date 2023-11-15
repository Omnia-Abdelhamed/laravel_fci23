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
      <h4 class="page-title">Departments</h4>
      <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
            <a href="{{ route('admin.departments.create') }}">Add New</a></li>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
@endsection
@section('content')
<div class="card-body">
    @if (Session::has('msg'))
        <div class="alert alert-danger">
            {{ Session::get('msg') }}
        </div>
        @endif
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
            <th>Desc</th>
            <th>Mgr</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
            <tr>
                <td>{{ $department['dept_id'] }}</td>
                <td>{{ $department['dept_name'] }}</td>
                <td>{{ $department['desc'] }}</td>
                <td>{{ $department['MGRSSN'] }}</td>
                <td>
                    <form action="{{ route('admin.departments.destroyArchive',$department['dept_id']) }}" method="post" style="display: inline-block">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
              </tr>
            @endforeach
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


