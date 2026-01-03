<h3>Tanjimul Islam Tareq</h3>

{{5 + 2}}

<br><br>

{{"Hello World"}}


<br><br>

{!!"<h1>HTML</h1>"!!}

<!-- {!!"<script>alert('This is JS')</script>"!!} -->

<br><br>

@php
$user = ["Tareq", "Abid", "Rohan"]
@endphp
<ul>
@foreach ($user as $n)
<li>{{$loop->index}} - {{$n}}</li>
@endforeach
</ul>



@php
    $names = ["Tareq", "Abid", "Rohan"]; 
@endphp

<ul>
@foreach ($names as $n)
    @if ($loop->first)
        <li style="color: red;">{{$n}}</li>
    @else 
        <li>{{$n}}</li>
    @endif 
@endforeach
</ul>
