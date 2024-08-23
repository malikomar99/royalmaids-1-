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
                    <h4 class="page-title">Create expert </h4>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card p-4"> <!-- Added padding inside the card -->
                            <h4 class="card-title">
                                Create expert
                            </h4>
                            <div class="row">
                                <div class="col-12">
                                    <form class="forms-sample" method="POST" action="{{route('expert.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                   
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="name">Name</label>
                                               <input type="text" class="form-control" id="name" name="name"  >
        
                                               @error('name')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
             
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="profession">profession</label>
                                               <input type="text" class="form-control" id="profession" name="profession" >
        
                                               @error('profession')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="image	">Image	</label>
                                               <input type="file" class="form-control" id="image" name="image"  >
        
                                               @error('image')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
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

