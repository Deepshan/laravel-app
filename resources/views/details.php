<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
		
		 
    </head>
    <body>
	<h1>Student Registration</h1>
	
	
	 <?php
	 
         echo Form::open(array('url' => 'foo/bar'));
		
			echo Form::label('Student Name');
			echo '<br/>';
			echo Form::text('stuName');
            echo '<br/>';
            
			echo Form::label('Student Index');
			echo '<br/>';
            echo Form::text('stuIndex');
            echo '<br/>';
			
			echo Form::label('Student Address');
			echo '<br/>';
            echo Form::text('stuAddress');
            echo '<br/>';
			echo '<br/>';
            
            /* echo Form::checkbox('name', 'value');
            echo '<br/>';
            
            echo Form::radio('name', 'value');
            echo '<br/>';
            
            echo Form::file('image');
            echo '<br/>';
            
            echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
            echo '<br/>'; */
            
            //echo Form::submit('Register!');
         echo Form::close();
		 
      ?>
		
    </body>
</html>
