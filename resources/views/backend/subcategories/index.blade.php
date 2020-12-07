@extends('backend_master')
@section('content')
	
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Categories</a></li>
        </ul>
      </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="d-inline-block">Subcategories List</h2>
                    <a href="{{route('subcategories.create')}}" class="btn btn-info float-right">Add New</a>
                     <div class="tile">
                      <div class="tile-body">
                     <div class="table-responsive">
                      <table class="table table-hover table-bordered" id="sampleTable">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                  <tr>
                    <th scope="row">1</th>
                    <td>Bla</td>
                    <td><img src="" width="100"></td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
    </main>

@endsection

@section('script')
        <script type="text/javascript" src="{{ asset('backend_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('backend_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection