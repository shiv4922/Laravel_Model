<h1>Hello shiv raj	</h1>


<!DOCTYPE html>
<html>
<head>
	<title>Insert form</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<center>
	<div>
<table class="table table-bordered">
		<thead class="btn-primary dark">
				<center>	<th colspan="4" class="text-center">SHIVRAJ</th></center>
		</thead>
		<tbody>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>price</th>
				<th>View</th>
			</tr>

			<?php $i=1; ?>
			@foreach($phone as $key=>$value)
			<tr class="btn-warning text-primary">
				<td >{{$i++}}</td>
				<td>{{$value->name}}</td>
				<td>{{$value->price}}</td>
				<td>
					
			<button><a href="{{url('phone/' .$value->id. '/edit')}}">Edit</a></button>
			<button><a href="{{url('phone/' .$value->id. '/delete')}}">Delete</a></button>
					<button>vIEW</button>

				</td>
			</tr>
			@endforeach
		</tbody>


</table>

					

				</div>


		</center>

</body>
</html>