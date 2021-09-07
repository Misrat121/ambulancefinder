<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Oxygen</th>
      <th scope="col">ICU</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
  @foreach($ambulanes as $data)
  <tr>
                <th scope="row">1</th>
                <td>{{$data->type}}</td>
                <td>{{$data->oxygen}}</td>
                <td>{{$data->icu}}</td>
                <td>{{$data->driver_name}}</td>
                <td>{{$data->phone_number}}</td>
                <td>view</td>
            </tr>
        @endforeach
  
  </tbody>
</table>