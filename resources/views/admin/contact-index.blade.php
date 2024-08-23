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
            Contact List
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
        
        </div>
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table class="table table-striped mt-2">
                          <thead>
                            <tr class="text-nowrap">
                              <th scope="col" >Order No.</th>
                              <th scope="col" >Name</th>
                              <th scope="col" >Email</th>
                              <th scope="col" >Phone</th>
                              <th scope="col" >Massage</th>
                         
                            {{-- <th scope="col" >Actions</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                              @if ($contact->count()>0)
                              @foreach($contact as $index=>$item)
                          <tr>
                            <td>{{$index + 1}}</td>
  
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->massage }}</td>
                            
                           
                            
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



