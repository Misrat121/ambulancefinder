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
        <th scope="col">RegisteredUser ID</th>
        <th scope="col">License No</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody>
 
    @foreach($registereddrivers as $registereddriver)
    <tr>
        <th scope="row">{{$registereddriver->id}}</th>
        <td>{{$registereddriver->name}}</td>
        <td>{{$registereddriver->registereduser->name}}</td>
        <td>{{$registereddriver->license_number}}</td>
        <td>{{$registereddriver->contact_number}}</td>
        <td>{{$registereddriver->address}}</td>

    </tr>
@endforeach
    </tbody>
</table>
{{$registereddrivers->links('pagination::bootstrap-4')}}
<!-- Modal -->
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
            <form action="{{route('registereddrivers.store')}}" method="POST"> 
        @csrf
        <div class="form-group">
                            <label for="driver_name">Select Registered User</label>
                            <select class="form-control" name="registereduser_id" id="">
                                @foreach($registeredusers as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            </div>
            
                <form>
                    <div class="form-group">
                        <label for="registereddriver_name">Name</label>
                        <input name="registereddriver_name" type="text" class="form-control" id="registereddriver_name"  placeholder="Enter Registereddriver name">
                   
                    </div>
                    <div class="form-group">
                        <label for="license_number">License Number</label>
                        <input name="license_number" type="text" class="form-control" id="license_number" placeholder="Enter License Number">
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input name="contact_number" type="text" class="form-control" id="contact_number" placeholder="Enter Contact Number">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="Enter Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>
@endsection



