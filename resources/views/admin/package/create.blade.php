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
                    <h4 class="page-title">Create package </h4>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card p-4"> <!-- Added padding inside the card -->
                            <h4 class="card-title">
                                Create package
                            </h4>
                            <div class="row">
                                <div class="col-12">
                                    <form class="forms-sample" method="POST" action="{{route('package.store')}}"  >
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
                                               <label for="price">price</label>
                                               <input type="text" class="form-control" id="price" name="price" >
        
                                               @error('price')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="service1">service1</label>
                                               <input type="text" class="form-control" id="service1" name="service1" >
        
                                               @error('service1')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="service2">service2</label>
                                               <input type="text" class="form-control" id="service2" name="service2" >
        
                                               @error('service2')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="service3">service3</label>
                                               <input type="text" class="form-control" id="service3" name="service3" >
        
                                               @error('service3')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="service4">service4</label>
                                               <input type="text" class="form-control" id="service4" name="service4" >
        
                                               @error('service4')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="service5">service5</label>
                                               <input type="text" class="form-control" id="service5" name="service5" >
        
                                               @error('service5')
                                                 <div class="invalid-feedback d-block">
                                                   {{$message}}
                                                 </div>
                                               @enderror
                                             </div>
                                           </div>
                                           <div class="col-md-6">
                                             <div class="form-group">
                                               <label for="service6">service6</label>
                                               <input type="text" class="form-control" id="service6" name="service6" >
        
                                               @error('service6')
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

