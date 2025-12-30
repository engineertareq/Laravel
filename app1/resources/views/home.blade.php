@extends('layouts.default')

@section("content")


<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>I'm Showng Student Datas...</p>
  </div>
</div>
  @php  @dump($students) @endphp
  
<div class="container-fluid bg-3 text-center">    
  <h3>Student List</h3><br>
  <div class="row">
    @foreach ($students as $student)
      <div class="col-sm-3">
        <p>{{ $student->id }}</p>
        <p>{{ $student->name }}</p>
        <p>{{ $student->email }}</p>
        <p>{{ $student->date_of_birth }}</p>
      </div>
    @endforeach
  </div>
</div><br>

@endsection