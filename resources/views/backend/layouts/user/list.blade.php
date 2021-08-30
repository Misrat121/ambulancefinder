@extends('backend.master')
@section('content')
<h1>User List</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Create New user
</button>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Address</th>
    </tr>

    </thead>
   
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

    
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- <form action="{{route('registeredusers.store')}}" method="POST"> 
        @csrf -->
            
                <form>
                    <div class="form-group">
                        <label for="user_name">Name</label>
                        <input name="user_name" type="text" class="form-control" id="user_name"  placeholder="Enter User Name">
                   
                    </div> 
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="user_address">Address</label>
                        <input name="user_address" type="text" class="form-control" id="user_address"  placeholder="Enter User Address">
                   
                    </div> 
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>

 @endsection
   