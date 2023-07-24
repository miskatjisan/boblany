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
            
              <div class="file-upload-wrapper">
                <!-- <header class="fw-bold">Upload you CSV or XLSX</header>
                <div class="icon fs-1"><i class="fas fa-cloud-upload-alt"></i></div>
                <input type="file" id="input-file-now" class="file-upload" hidden/>
                <header class="fw-bold">Drag & Drop</header>
                <p>Limit 25 MB</p> -->

                <form action="{{ route('cvs.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="csv_file">
                <input type="submit" value="submit">
                </form>
              </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- main -->
@endsection