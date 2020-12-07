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
          <li class="breadcrumb-item"><a href="#">Items</a></li>
        </ul>
      </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="d-inline-block">Items List</h2>
                    <a href="{{route('items.create')}}" class="btn btn-info float-right">Add New</a>
                     <div class="tile">
                      <div class="tile-body">
                     <div class="table-responsive">
                      <table class="table table-hover table-bordered" id="sampleTable">
                      <thead class="thead-dark">
                        <tr>
                           <th> No </th>
                           <th> Name </th>
                           <th> Brand </th>
                           <th> Subcategory </th>
                           <th> Price </th>
                           <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      
                            <tr>
                                <td>1</td>
                                <td> 
                                    <div class="d-flex no-block align-items-center">                             
                                        <div class="mr-3">
                                                <img src="" alt="user" class="rounded-circle" width="50" height="45" />
                                            </div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">M20111</h5>
                                            <span class="text-muted font-14">
                                                Japan made branded  
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td> CASIO </td>
                                <td> G-SHORK </td>
                                <td><del class="d-block"> 45000 MMK </del>40000 MMK</td>
                                <td>
                                    <a href="" class="btn btn-warning">
                                        <i class="icofont-ui-settings"></i>
                                    </a>

                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')" method="POST" action="item_delete.php">

                                        <input type="hidden" name="id" value="">

                                        <button class="btn btn-outline-danger">
                                            <i class="icofont-close"></i>
                                        </button>

                                    </form>
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