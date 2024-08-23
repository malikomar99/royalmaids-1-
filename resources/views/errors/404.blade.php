@extends('layouts.app')

@section('content')
<div class="container text-center mt-5 mb-5" style="margin-top: 150px !important">
    <h1 style="font-size:200px;">404</h1>
    <div  style="margin-top: 80px !important">
        <p>Sorry, the page you are looking for could not be found.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Go to Homepage</a>
    </div>
</div>
@endsection
