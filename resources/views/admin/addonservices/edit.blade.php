@extends('admin.layouts.main')
@section('section')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
    
          <!-- Left side columns -->
          <div class="col-lg-10">
            <div class="row">
                @if(Session::has('success'))
                <p class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Edit Add On Services </h4>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="card p-4"> <!-- Added padding inside the card -->
                                <h4 class="card-title">
                                    Edit Add On Services
                                </h4>
                                <div class="row">
                                    <div class="col-12">
                                        <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('addonservices.update',$services->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                <div class="form-group">
                                                    <label for="service_id">Select Services</label>
                                                    <input type="text" class="form-control" id="service_id" name="service_id" value="{{$services->service_id}}">
                                                    @error('service_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="index">index</label>
                                                    <input type="text" class="form-control" id="index" name="index" value="{{$services->index}}">
                                                    @error('speakers')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="heading1">Popular Add Title 1</label>
                                                    <input type="text" class="form-control" id="heading1" name="heading1" value="{{$services->heading1}}">
                                                    @error('speakers')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                <div class="form-group">
                                                    <label for="addonservices1">Add on Services bulits write with ,</label>
                                                    <input type="text" class="form-control" id="addonservices1" name="addonservices1" value="{{$services->addonservices1}}">
                                                    @error('speakers')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                <div class="form-group">
                                                    <label for="price1">Add on Services Price 1</label>
                                                    <input type="text" class="form-control" id="price1" name="price1" value="{{$services->price1}}">
                                                    @error('speakers')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label>Add on image </label>
                                                    <input type="file" name="image1" class="form-control">
                                                    @error('image1')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$services->image1}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                           

    
                                              
    
                                               
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit"
                                                  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
          </div>
        </section>
    </main>
@endsection

