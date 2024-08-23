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
                    <h4 class="page-title">Edit Experts </h4>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card p-4"> <!-- Added padding inside the card -->
                            <h4 class="card-title">
                                Edit Experts
                            </h4>
                            <div class="row">
                                <div class="col-12">
                                    <form class="forms-sample" method="POST" action="{{route('expert.update',$expert->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                   
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="name"> name</label>
                                              <input type="text" class="form-control" id="name" name="name" value="{{$expert->name}}" >
       
                                              @error('car')
                                                <div class="invalid-feedback d-block">
                                                  {{$message}}
                                                </div>
                                              @enderror
                                            </div>
                                          </div>
            
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="profession">profession</label>
                                              <input type="text" class="form-control" id="profession" name="profession" value="{{$expert->profession}}" >
       
                                              @error('profession')
                                                <div class="invalid-feedback d-block">
                                                  {{$message}}
                                                </div>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>image </label>
                                                <input type="file" name="image" class="form-control">
                                                @error('image')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Image</label>
                                              <img src="{{$expert->image}}" height="100px" width="100px">
                                             
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


