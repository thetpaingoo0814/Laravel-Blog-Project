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
          <div class="tile">
            <div class="tile-body">
            <h2>Items Create Form</h2>
            <form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Photo:</label>
                    <div class="col-sm-10">
                    <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="ExampleInputPhoto">
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" name="name" placeholder="Eg. Electronic, Faction,...">
                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="name_id" class="col-sm-2 col-form-label"> Code No </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code_id" name="code">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label"> Price </label>
                    <div class="col-sm-10">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" name="unit">Unit Price</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" name="discount">Discount</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit_id" name="unit"></div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <input type="text" class="form-control @error('discount') is-invalid @enderror" id="discount_id" name="discount"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                        <label class="col-sm-2 col-form-label"> Description </label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"> Brand </label>
                        <div class="col-sm-10">
                        <select class="form-control" name="brand_id">
                           <option>Select brand</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"> Subcategory </label>
                        <div class="col-sm-10">
                        <select class="form-control" name="subcategory_id">
                            <option>Select subcategory</option>
                        </select>
                        </div>
                </div>


                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
         </div>
      </div>
    </main>

@endsection