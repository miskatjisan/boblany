<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7491bed1a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">BobLaney</span>
<!-- menu -->
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{'admin'}}">Contacts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.upload')}}">Upload</a>
    </li>
    <li class="nav-item">
      <!-- Drowpdown -->
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          Profile
        </button>
        <ul class="dropdown-menu bg-light p-2" aria-labelledby="dropdownMenu2">
          <li><a href="{{route('users.create')}}" class="dropdown-item" type="button">Create User</a></li>
          <li><a href="{{route('users.index')}}" class="dropdown-item" type="button">User List</a></li>
          <!-- <li><a href="updateProfile.html" class="dropdown-item" type="button">Update</a></li> -->
          <li><a href="{{route('admin.logout')}}" class="dropdown-item" type="button">Logout</a></li>
        </ul>
      </div>
<!-- Drowpdown end-->
    </li>
  </ul>

<!-- menu -->
</div>
 </nav>
 @yield('content')

 <nav class="navbar navbar-dark bg-dark mt-5 p-5">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">BobLaney</span>
    </div>
</nav>

<nav class="navbar navbar-dark bg-dark mt-1">
    <div class="container-fluid copy-right">
      <span class="text-white mb-0">@2023 All Rights Reserved</span>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="#">Terms & Conditions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy & Policy</a>
        </li>
      </ul>
    </div>
</nav>

</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>