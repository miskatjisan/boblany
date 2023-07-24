@extends('admin.layouts.master')
@section('title','Admin Contacts')
@section('content')
<!-- main -->

    <div class="search-box d-flex justify-content-end mt-5 p-3 container">
        <i class="fa-solid fa-filter fs-3"></i>
        <input type="text" id="searchInput"  placeholder="Start From...">
    </div>  

<div  class="data-table container bg-light mt-3">
    <table id="dataTable" class="table table-striped text-center " style="width:100%">
        <thead class="bg-secondary text-white">
            <tr>
                <th>No</th>
                <th>Company Name</th>
                <th>Website Url</th>
                <th>Input Numbers</th>
                <th>Competitor Url</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tiger Nixon</td>
                <td>www.example1.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>lizan Nixon</td>
                <td>www.example2.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                    </div>
                </td>
            </tr>

   
    
            <tr>
                <td>3</td>
                <td>tizan Nixon</td>
                <td>www.example3.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                   
                    </div>
                </td>
            </tr>
       
            <tr>
                <td>3</td>
                <td>tizan Nixon</td>
                <td>www.example3.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                   
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>tizan Nixon</td>
                <td>www.example3.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                   
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>tizan Nixon</td>
                <td>www.example3.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                   
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>tizan Nixon</td>
                <td>www.example3.com</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control leftInput" placeholder="Your Reach...">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control rightInput" placeholder="Compitetor Reach...">
                        </div>
                    </div>
                </td>
                <td><input type="text" class="form-control" placeholder="Compitetor Url..."></td>
                <td><div class="colorInput"></div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-success">Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Send</a>
                        </div>
                   
                    </div>
                </td>
            </tr>
           
    
        </tbody>
        <tfoot class="bg-secondary text-white">
            <tr>
                <th>No</th>
                <th>Company Name</th>
                <th>Website Url</th>
                <th>Input Numbers</th>
                <th>Competitor Url</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="pagination mt-5" id="pagination"></div>
</div>
<!-- main -->

@endsection