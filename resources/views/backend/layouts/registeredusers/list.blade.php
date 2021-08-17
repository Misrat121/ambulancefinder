@extends('backend.master')
@section('content')
<h1>Registereddriver List</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Create New Driver
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
            
                <form>
                    <div class="form-group">
                        <label for="registereduser_name">Name</label>
                        <input name="registereduser_name" type="text" class="form-control" id="registereduser_name"  placeholder="Enter Registereduser Name">
                   
                    </div> 
                    <div class="form-group">
                        <label for="phone_no">Phone Number</label>
                        <input name="phonee_no" type="text" class="form-control" id="phone_no" placeholder="Enter Phone Number">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>

 @endsection
   