@extends('user.layouts.master')
@section('title','User Contacts')
@section('content')
<!-- main -->
<div class="user-list mt-3">
    <h2 class="bg-light text-center p-3">Update Your Profile</h2>
</div>

<div class="container bootstrap snippets bootdeys mt-5">
    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <form class="form-horizontal" action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="panel panel-default">
              <div class="panel-body text-center">
                   <img src="{{asset('assets/img/'.$data->img)}}" class="img-circle profile-avatar" style="width: 10rem;height: 10rem;" alt="User avatar">
               <input name="img" type="file" class="form-control mt-3">
              </div>
              <h2 class="text-center mt-3">{{$data->username}}</h2>
            </div>
          <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="panel-title">User info</h4>
            </div>
            <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Change Username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" value="{{$data->username}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Location</label>
                <div class="col-sm-10">
                  <select name="location" class="form-control">
                    <option selected="" value="{{$data->location}}">{{$data->location}}</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Canada">Canada</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Estonia">Estonia</option>
                    <option value="France">France</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Company name</label>
                <div class="col-sm-10">
                  <input type="text" name="company_name" class="form-control" value="{{$data->company_name}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Position</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="position" value="{{$data->position}}">
                </div>
              </div>
            </div>
          </div>
    
          <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="panel-title">Contact info</h4>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Work number</label>
                <div class="col-sm-10">
                  <input type="tel" name="work_number" class="form-control" value="{{$data->work_number}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Mobile number</label>
                <div class="col-sm-10">
                  <input type="tel" name="phone" class="form-control" value="{{$data->phone}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">E-mail address</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" value="{{$data->email}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Work address</label>
                <div class="col-sm-10">
                  <textarea rows="3" class="form-control" name="work_address" >{{$data->work_address}}</textarea>
                </div>
              </div>
            </div>
          </div>
    
          <div class="panel panel-default">
            <div class="panel-heading">
            <h4 class="panel-title">Security</h4>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Change password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" value="{{$data->password}}">
                </div>
              </div>
              
              <div class="form-group mt-3">
                <div class="col-sm-10 col-sm-offset-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
<!-- main -->


@endsection