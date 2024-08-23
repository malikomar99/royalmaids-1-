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
                        <h4 class="page-title">Create Services </h4>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="card p-4"> <!-- Added padding inside the card -->
                                <h4 class="card-title">
                                    Create Services
                                </h4>
                                <div class="row">
                                    <div class="col-12">
                                        <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('services.store') }}">
                                            @csrf
                                            <div class="row">
                                                 <!-- Added margin bottom to the form groups -->
                                                    <div class="col-md-6 mb-3">
                                                        <div class="form-group">
                                                            <label>Services icons</label>
                                                            <input type="file" name="imageicons" class="form-control">
                                                            @error('imageicons')
                                                            <div class="invalid-feedback d-block">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="title">Services ToP Heading</label>
                                                        <input type="text" class="form-control" id="title" name="title">
                                                        @error('title')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6 mb-3"> 
                                                    <div class="form-group">
                                                        <label for="title2">Services Title</label>
                                                        <input type="text" class="form-control" id="title2" name="title2">
                                                        @error('title2')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                    <div class="form-group">
                                                        <label for="details">Services details</label>
                                                        <input type="text" class="form-control" id="details" name="details">
                                                        @error('details')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                    <div class="form-group">
                                                        <label for="services">Services Bulits Put ,after every built</label>
                                                        <input type="text" class="form-control" id="services" name="services">
                                                        @error('services')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                    <div class="form-group">
                                                        <label for="details2"> After Bulits Services Details</label>
                                                        <input type="text" class="form-control" id="details2" name="details2">
                                                        @error('details2')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                 
                                                <div class="col-md-6 mb-3"> <!-- Added margin bottom to the form groups -->
                                                    <div class="form-group">
                                                        <label for="price"> price</label>
                                                        <input type="text" class="form-control" id="price" name="price">
                                                        @error('price')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                 
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label>Services Image</label>
                                                        <input type="file" name="image" class="form-control">
                                                        @error('image')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                
                                              
    
                                              
    
                                               
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit"
                                                  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                              </div>                                        </form>
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