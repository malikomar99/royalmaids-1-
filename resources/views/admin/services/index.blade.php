@extends('admin.layouts.main')
@section('section')
<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
    
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
      @if(Session::has('success'))
        <p class="alert alert-info">{{ Session::get('success') }}</p>
        @endif
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">
            services List
          </h4>
          {{-- <ul class="breadcrumbs">
            <li class="nav-home">
              <a href="">
               <i class="fa-solid fa-house"></i>
              </a>
            </li>
          </ul> --}}
        </div>
        <div style="display: flex;  justify-content: flex-end;">
        <div>
            <a href="{{route('services.create')}}" class="btn btn-primary">Create services </a>
         </div>
        </div>
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table class="table table-striped mt-2">
                          <thead>
                            <tr class="text-nowrap">
                              <th scope="col" >Order No.</th>
                              <th scope="col" > Icon Image</th>
                              <th scope="col" >services title</th>
                              <th scope="col" >services title2</th>
                              <th scope="col" >services items</th>
                              <th scope="col" >services Details</th>
                              <th scope="col" >services Details2</th>
                              <th scope="col" >services  Price</th>
                              <th scope="col" >services image</th>
                            <th scope="col" >Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                              @if ($services->count()>0)
                              @foreach($services as $index=>$item)
                          <tr>
                            <td>{{$index + 1}}</td>
                            <td><img src="{{$item->imageicons}}" class="img-fluid rounded" width="100px" height="100px"></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->title2 }}</td>
                            <td><span class="ml-4">{{$item->services}}</span> </td>
                            <td>{{Str::limit($item->details,100)}} </td>
                            <td> {{Str::limit($item->details2,100)}} </td>
                            <td>{{ $item->price }}</td>
                            <td><img src="{{$item->image}}" class="img-fluid rounded" width="100px" height="100px"></td>
                     
                            
                           
                            
                           
                          
                            
                            <td><a href="{{route('services.edit',$item->id)}}" class="btn btn-primary  btn-sm">Edit</a>
                            <a  onclick="return confirm('you want to delete user?')" href="{{route('admin.services.delete',$item->id)}}" class="btn btn-danger  btn-sm" >Delete</a></td>
                          </tr>
                           @endforeach
                           @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
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
