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
            expert List
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
            <a href="{{route('expert.create')}}" class="btn btn-primary">Create expert </a>
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
                              
                              <th scope="col" >expert Name</th>
                              <th scope="col" >expert profession</th>
                              <th scope="col" >expert image</th>
                              
                            <th scope="col" >Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                              @if ($expert->count()>0)
                              @foreach($expert as $index=>$item)
                          <tr>
                            <td>{{$index + 1}}</td>
  
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->profession }}</td>
                            
                           
                            
                            <td>
                              <img src="{{$item->image}}" class="img-fluid rounded" width="50" height="50">
                              
                            </td>
                            
                            <td><a href="{{route('expert.edit',$item->id)}}" class="btn btn-primary  btn-sm">Edit</a>
                            <a  onclick="return confirm('you want to delete user?')" href="{{route('admin.expert.delete',$item->id)}}" class="btn btn-danger  btn-sm" >Delete</a></td>
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

