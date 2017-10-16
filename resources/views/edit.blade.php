@extends('app')

@section('content')

	<style>

		input[type=text], select {
			width: 100%;
			padding: 10px 20px;
			margin: 10px 0%;
			display: inline-block;
			border: 3px solid #ccc;
			border-radius: 8px;
			box-sizing:border-box;
			background-color: white;
			color: black;


		}
	.button {
	background-color: black;
	width: 100%;
	border: none;
	color: white;
	padding: 15px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 12px;
	cursor: pointer;
	}

	.button:hover{
	background-color: #78C2EE;
	}

	input[type=submit] {
	text-align: center;
	width: 20%;
	background-color: black;
	color: white;
	padding: 14px 25px;
	margin: 10% ;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	}

	input[type=submit]:hover {

	background-color: #78C2EE;
	}

</style>


	<h1 align=center>Edit Students Details</h1>

	<center>

<table>

		<tr>
			<td>Student Name </td>
			<td>Student Index No </td>
			<td>Student Address  </td>
		</tr>

		
		@foreach($data as $value)




			<form action = "{{ route('users.add') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<tr>

		<td> {{ Form::text('stu_name', $value -> stuName) }}</td>
		<td> {{ Form::text('stu_index', $value -> stuIndex , ['readonly']) }} </td>


		<td> {{ Form::text('stu_address', $value -> stuAddress) }} </td>
				</tr>
			<tr>
				<td  colspan="2">	<button class="button" type="submit">Update</button> </td>


			</form>

		<td colspan="1"> <button class="button" type="submit" onclick="window.location='{{ url("delete/".$value->stuIndex) }}'">Delete</button> </td>

		</tr>


		
		@endforeach

		
		
			
		
			
	
	</table>

</center>
	
	@stop