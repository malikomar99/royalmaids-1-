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
            <a href="{{route('addonservices.create')}}" class="btn btn-primary">Create services </a>
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
                              <th scope="col" >service_id.</th>
                             
                              <th scope="col" >Popular add image1</th>
                              
                              <th scope="col" >Popular add image2</th>
                              
                              <th scope="col" >Popular add image3</th>
                              
                              <th scope="col" >Popular add image4</th>
                              <th scope="col" >Popular add image5</th>
                              <th scope="col" >Popular add image6</th>
                              <th scope="col" >Popular add image7</th>
                            <th scope="col" >Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                              @if ($gallery->count()>0)
                              @foreach($gallery as $index=>$item)
                          <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{ $item->service_id }}</td>
                            
                            <td><img src="{{$item->image1}}" class="img-fluid rounded" width="50" height="50"></td>
                           
                            <td><img src="{{$item->image2}}" class="img-fluid rounded" width="50" height="50"></td>
                           
                            <td><img src="{{$item->image3}}" class="img-fluid rounded" width="50" height="50"></td>
                           
                            <td><img src="{{$item->image4}}" class="img-fluid rounded" width="50" height="50"></td>                            
                            <td><img src="{{$item->image5}}" class="img-fluid rounded" width="50" height="50"></td>                            
                            <td><img src="{{$item->image6}}" class="img-fluid rounded" width="50" height="50"></td>                            
                            <td><img src="{{$item->image7}}" class="img-fluid rounded" width="50" height="50"></td>                            
                            <td><a href="{{route('gallery.edit',$item->id)}}" class="btn btn-primary  btn-sm">Edit</a>
                            <a  onclick="return confirm('you want to delete user?')" href="{{route('admin.gallery.delete',$item->id)}}" class="btn btn-danger  btn-sm" >Delete</a></td>
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


