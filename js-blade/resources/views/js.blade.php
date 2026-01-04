@extends('layouts.masterlayout')
@section('content')
    <div>
    @php
        $user = "Tareq";
        $fruits = ["Banana", "Mango", "Apple"];
    @endphp
   
   <script>
    let data = @json($fruits);
    // let data = {{Js::from($fruits)}};
    data.forEach(function(entry){
console.log(entry);
    });
    
   </script>
    </div>
@endsection

@section('title')
    JS in Blade
@endsection