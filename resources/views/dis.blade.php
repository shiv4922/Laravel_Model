<h1>HELLO BABES</h1>

@php
print_r($data);

@endphp

@foreach($data as $key=>$value)

	</br></br>{{$value->name}} and {{$value->pass}}

@endforeach