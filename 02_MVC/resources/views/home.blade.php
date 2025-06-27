<div>
    <h1> Home Page  this is for blade {{$name}}</h1>
    <!-- <h3>{{$students[0]}}</h3> -->


</div>
@if($name == "sahil")
<h1>this is sahil</h1>
@elseif ($name == "tinku") 
<h1>this is tinku</h1>
@elseif ($name == "rinku") 
<h1>this is rinku</h1>
@else
<h1>other student</h1>
@endif

<div>
    @while ($i = $students)
        
    @endwhile
</div>


<div>
    @foreach ($students as $student)
     <h1>{{$student}}</h1>
    @endforeach
</div>



<div >
  @for ($i = 0; $i < 10; $i++)
  <h1>{{$i}}</h1>
  @endfor
</div>
