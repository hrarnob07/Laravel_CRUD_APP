@extends('layouts.app')
@section('content')
  <div class="row">
  	@if(session('successMsg'))
       <p>{{session('successMsg')}}</p>
  	@endif
  </div>
  <div class="container">
  	  

  	 <table class= "table table-striped">
       <thead >
  	  	 <tr>
  	  			<th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>phone</th>
            <th class="text-center">Action</th>
  	     </tr>
  	  </thead>
  	    <tbody>
  	  @foreach($datas as $data )
  	 <tr>
  	 	 <td>{{$data->id}} </td> 
       <td> {{$data->first_name}}</td> 
       <td>{{$data->last_name}} </td>
       <td>{{$data->email}}</td>
       <td>{{$data->phone}}</td>
       <td class="text-center">
        <a href="{{url("/edit/{$data->id}")}}">Edite()</a> || <a href="{{url("/delete/{$data->id}")}}">Delete()</a></td>


  	 </tr>
  	 </tbody>

  	  @endforeach
</table>

  </div>


@stop