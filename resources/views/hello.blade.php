
<html lang="{{ app()->getLocale() }}">
<style>
input[type=text], select {
	
    width: 30%;
    padding: 10px 20px;
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
    width: 30%;
    border: none;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    cursor: pointer;
}

.button:hover{
    background-color: #78C2EE;
}

input[type=submit] {
	text-align: center;
    width: 30%;
    background-color: black;
    color: white;
    padding: 14px 25px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {

    background-color: #78C2EE;
}

div {
	
    border-radius: 5px;
    background-color: #D93D32;
    padding: 20px;
}

form{
	text-align: center;
}

</style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="{{ URL::asset('css/addsheet.css') }}" />

        <title>Laravel</title>

        <!-- Fonts -->
		
		 
    </head>
    <body align=center>
	<h1 >Student Registration</h1>
	
		
	 <?php

	 
         echo Form::open(array('url' => 'hello/welcome'));
		
			echo Form::label('Student Name');
			echo '<br/>';
			echo Form::text('stuName');
            echo '<br/>';
            
			echo Form::label('Student Index No');
			echo '<br/>';
            echo Form::text('stuIndex');
            echo '<br/>';
			
			echo Form::label('Student Address');
			echo '<br/>';
            echo Form::text('stuAddress');
            echo '<br/>';
			echo '<br/>';


            echo Form::submit('Register!');
         echo Form::close();
		 
		 
		 
      ?>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

	  <button class="button" type="button" onclick="window.location='{{ route ('users.show') }}'">Student Details</button>
	   <input type="hidden" name="_token" value="{{ csrf_token() }}">

		
    </body>
</html>				
		
    
