@extends('app')
@section('content')

<h1>About</h1>

<h3>People I Like:</h3>

@if (count($people))
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>    
@endif


<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Veniam facere reiciendis et repellat numquam pariatur quidem modi eveniet nobis molestias. 
    Enim consequatur odit commodi animi explicabo optio nam reprehenderit dolore.
</p>

@stop
    