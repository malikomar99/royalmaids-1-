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
            package List
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
            <a href="{{route('admin.package.create')}}" class="btn btn-primary">Create package </a>
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
                              
                              <th scope="col" >package Name</th>
                              <th scope="col" >package price</th>
                              <th scope="col" >package service1</th>
                              <th scope="col" >package service2</th>
                              <th scope="col" >package service3</th>
                              <th scope="col" >package service4</th>
                              <th scope="col" >package service5</th>
                              <th scope="col" >package service6</th>
                              
                            <th scope="col" >Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                              @if ($package->count()>0)
                              @foreach($package as $index=>$item)
                          <tr>
                            <td>{{$index + 1}}</td>
  
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->service1 }}</td>
                            <td>{{ $item->service2 }}</td>
                            <td>{{ $item->service3 }}</td>
                            <td>{{ $item->service4 }}</td>
                            <td>{{ $item->service5 }}</td>
                            <td>{{ $item->service6 }}</td>
                            <td><a href="{{route('package.edit',$item->id)}}" class="btn btn-primary  btn-sm">Edit</a>
                            <a  onclick="return confirm('you want to delete user?')" href="{{route('package.delete',$item->id)}}" class="btn btn-danger  btn-sm" >Delete</a></td>
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

