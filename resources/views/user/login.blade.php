@extends('user.layouts.masterwithoutmenu')
@section('title','User Login')
@section('content')
<!-- main -->
<section class="vh-50">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center bg-light">

            <h3 class="mb-5 fw-bold">BobLaney Login</h3>
            @if (session('success'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('success') }}
                    </div>
      @endif
            <form action="{{ route('login.post') }}" method="POST">
            @csrf
            @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
         
            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" placeholder="Email"/>
            </div>
            @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" placeholder="Password"/>
            </div>

            <button class="btn btn-dark btn-lg btn-block form-control" type="submit">Login</button>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4 mt-3">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Remember password </label>
                </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- main -->
@endsection