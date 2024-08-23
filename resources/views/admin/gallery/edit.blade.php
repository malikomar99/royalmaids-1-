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
                        <h4 class="page-title">Edit Gallery </h4>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="card p-4"> <!-- padding inside the card -->
                                <h4 class="card-title">
                                    Edit Gallery
                                </h4>
                                <div class="row">
                                    <div class="col-12">
                                        <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('gallery.update',$gallery->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                <div class="form-group">
                                                    <label for="service_id">Select Services</label>
                                                    <input type="text" class="form-control" id="service_id" name="service_id" value="{{$gallery->service_id}}">
                                                    @error('service_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                               
                                            
                                           
                                            
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
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
                                                  <label>Image1</label>
                                                  <img src="{{$gallery->image1}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
                                                    <input type="file" name="image2" class="form-control">
                                                    @error('image2')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$gallery->image2}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
                                                    <input type="file" name="image3" class="form-control">
                                                    @error('image3')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$gallery->image3}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
                                                    <input type="file" name="image4" class="form-control">
                                                    @error('image4')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$gallery->image4}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
                                                    <input type="file" name="image5" class="form-control">
                                                    @error('image5')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$gallery->image5}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
                                                    <input type="file" name="image6" class="form-control">
                                                    @error('image6')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$gallery->image6}}" height="100px" width="100px">
                                                 
                                                </div>
                                              </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label> image </label>
                                                    <input type="file" name="image7" class="form-control">
                                                    @error('image7')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Image</label>
                                                  <img src="{{$gallery->image7}}" height="100px" width="100px">
                                                 
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


