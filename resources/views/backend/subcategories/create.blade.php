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
          <li class="breadcrumb-item"><a href="#">Subcategories</a></li>
        </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <h2>Subcategory Create Form</h2>
            <form method="post" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Eg. phone, clothes, pants,...">
                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose Category</label>
                  <select class="form-control @error('category') is-invalid @enderror" name="category" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                   @error('category')
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