@extends('admin.layouts.master')
@section('title','Admin User-list')
@section('content')

<!-- main -->
<div class="user-list mt-3">
    <h2 class="bg-light text-center p-3">User List</h2>
</div>
<div  class="data-table container bg-light mt-5">
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              
            </tr>
           
       @endforeach
           
    
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    {!! $users->links() !!}
</div>
<!-- main -->

@endsection