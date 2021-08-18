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
        
    </tr>
    </thead>
    <tbody>
    {{--course--}}
{{--@dd($courses)--}}
@foreach($ambulances as $ambulance)
    <tr>
        <th scope="row">{{$ambulance->id}}</th>
        <td>{{$ambulance->type}}</td>
        <td>{{$ambulance->number}}</td>

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
                <h5 class="modal-title" id="exampleModalLabel">Add new Ambulance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

             <form action="{{route('ambulances.store')}}" method="POST"> 
        @csrf

   
                <form>
                    <div class="form-group">
                        <label for="ambulance_type">Type</label>
                        <input name="ambulance_type" type="text" class="form-control" id="ambulance_type"  placeholder="Enter Ambulance type">
                   
                    </div>
                    <div class="form-group">
                        <label for="ambulance_number">Ambulance Number</label>
                        <input name="ambulance_number" type="text" class="form-control" id="ambulance_number" placeholder="Enter Ambulance Number">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input name="phone_number" type="text" class="form-control" id="phonee_number" placeholder="Enter Phone Number">
                    </div>
        
                    
                   
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>
@endsection



