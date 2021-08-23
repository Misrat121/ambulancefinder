@extends('backend.master')
@section('content')
<h1>Ambulances</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Add New Ambulance
</button>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Type</th>
        <th scope="col">Ambulance Number</th>
        <th scope="col">Driver Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Ambulance Number</th>
        <th scope="col">Driver Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Ambulance Number</th>
        <th scope="col">Driver Name</th>
        <th scope="col">Phone Number</th>
        
    </tr>
    </thead>
    <tbody>
    {{--course--}}
{{--@dd($courses)--}}
@foreach($ambulances as $ambulance)
    <tr>
        <th scope="row">{{$ambulance->id}}</th>
        <td>{{$ambulance->type}}</td>
        <td>{{$ambulance->ambulance_number}}</td>
        <td>{{$ambulance->driver_name}}</td>
        <td>{{$ambulance->phone_number}}</td>

    </tr>
@endforeach
    </tbody>
   
</table>
{{$ambulances->links('pagination::bootstrap-4')}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

    
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                
             <form action="{{route('ambulances.store')}}" method="POST"> 
                @csrf

                <!-- test -->
                
            <div class="modal-header">
                <h6 class="modal-title" id="Owner">Name</h6> 
            </div>
                <div class="mb-3">
                    <label for="Owner_Name" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="Owner_Name" placeholder="Owner_Name">
                </div>
                <div class="mb-3">
                    <label for="Contact_Number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="Contact_Number" placeholder="Contact_Number">
                </div>
                <div class="mb-3">
                    <label for="owner_address" class="form-label">Owner Address</label>
                    <input type="text" class="form-control" id="Owner" placeholder="Owner_address">
                </div>
                <!-- test end-->

                <!-- test2 -->
                
            <div class="modal-header">
                <h6 class="modal-title" id="Owner">Name</h6> 
            </div>
            <form action="/action_page.php">
  <p>Type:</p>
  <input type="radio" id="ac" name="fav_language" value="AC">
  <label for="html">AC</label>
<input type="radio" id="non ac" name="fav_language" value="NON AC">
  <label for="non ac">NON AC</label><br>

<p>Oxygen:</p>
  <input type="radio" id="yes" name="fav_language" value="YES">
  <label for="html">YES</label>
<input type="radio" id="no" name="fav_language" value="NO">
  <label for="no">NO</label><br>

<p>ICU:</p>
  <input type="radio" id="yes" name="fav_language" value="YES">
  <label for="html">YES</label>
<input type="radio" id="no" name="fav_language" value="NO">
  <label for="no">NO</label><br>
                <div class="mb-3">
                    <label for="vehicle_number" class="form-label">Vehicle Number</label>
                    <input type="text" class="form-control" id="Owner" placeholder="Vehicle_Number">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="Owner" placeholder="Location">
                </div>
                <!-- test2 end -->
                  <!-- test3 -->
                
            <div class="modal-header">
                <h6 class="modal-title" id="Owner">Driver Information</h6> 
            </div>
                <div class="mb-3">
                    <label for="driver_name" class="form-label">Driver Name</label>
                    <input type="text" class="form-control" id="driver_name" placeholder="Driver_Name">
                </div>
                <div class="mb-3">
                    <label for="driving_license" class="form-label">Driving Licencse</label>
                    <input type="text" class="form-control" id="driving_license" placeholder="Driving_License">
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" placeholder="Phone_Number">
                </div>
                <div class="mb-3">
                    <label for="nid_number" class="form-label">NID Number</label>
                    <input type="text" class="form-control" id="nid_number" placeholder="NID_Number">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
                <!-- test3 -->
                <!-- <form> -->
                      
                
            <!-- <div class="modal-header">
                <h6 class="modal-title" id="Owner">Name</h6> 
            </div>
                <div class="mb-3">
                    <label for="Owner" class="form-label">Owner name</label>
                    <input type="text" class="form-control" id="Owner" placeholder="Owner name">
                </div>
                <div class="mb-3">
                    <label for="Owner" class="form-label">Oener contact</label>
                    <input type="text" class="form-control" id="Owner" placeholder="Owner contact">
                </div>
                <div class="mb-3">
                    <label for="Owner" class="form-label">Owner address</label>
                    <input type="text" class="form-control" id="Owner" placeholder="Owner address">
                </div> -->
               
                    
                   
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>
@endsection



