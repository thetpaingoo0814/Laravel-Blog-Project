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
          <li class="breadcrumb-item"><a href="#">Brands</a></li>
        </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <h2>brands Create Form</h2>
            <form method="post" action="{{route('brands.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Eg. Electronic, Faction,...">
                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Photo:</label>
                    <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="ExampleInputPhoto">
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
         </div>
      </div>
    </main>

@endsection