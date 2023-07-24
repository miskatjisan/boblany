@extends('admin.layouts.master')
@section('title','Admin User-create')
@section('content')
<!-- main -->
<section class="vh-50">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center bg-light">

            <h3 class="mb-5 fw-bold">Create User</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('users.store') }}" method="POST">
    @csrf
            <div class="form-outline mb-4">
                <input type="text" id="typeEmailX-2" name="username" class="form-control form-control-lg" required placeholder="UserName"/>
              </div>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" required placeholder="Email"/>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" required placeholder="Password"/>
            </div>

            <button class="btn btn-dark btn-lg btn-block form-control" type="submit">Create User</button>
          </form>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- main -->
@endsection