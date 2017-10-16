@extends('app')

@section('content')

<style>

	input[type=text], select {

		width: 20%;
		padding: 9px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		background-color: grey;
		color: white;
	}

	.button {
		background-color: black;
		width: 20%;
		border: none;
		color: white;
		padding: 9px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		cursor: pointer;
	}

	.button:hover {
		background-color: #78C2EE;
	}

table {
	table-layout: fixed;
	text-align: center;
    border-collapse: separate;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
	
}

tr:nth-child(even){background-color: #dcd5c7}

th {
    background-color: green;
    color: black;
}
</style>

	<h1 align=center>Students Details </h1>
<center>
	<form method="get" action="{{url('hello/edit')}}">
	{{ Form::text('sIndex', 'Search') }}
		<button class="button	"  type="submit" >Edit</button>
		<button class="button" type="button" onclick="window.location='{{ url('hello/welcome') }}'">Add</button>
	</form>
</center>


	<table>
		<tr>
			<td>Student Name </td>
			<td>Student Index No </td>
			<td>Student Address  </td>
		</tr>
		@foreach($data as $value)
		<tr>
			<td>{{$value -> stuName}}</td>
			<td>{{$value -> stuIndex}} </td>
			<td>{{$value -> stuAddress}} </td>
			
			
		</tr>
		
		@endforeach
	</table>

	 
      
		
 @stop