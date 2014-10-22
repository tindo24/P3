<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Users</title>
	
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}
		.maincont {
    border: 2px solid #a1a1a1;
   padding: 10px 40px; 
    background: #dddddd;
   width: 800px;
    border-radius: 25px;
    margin-top: 50px;
    margin-left: 250px;

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class='maincont'>
		<a href=" / "> Home </a>
		<br>
		
		<p>Generates random Users</p>
		<br>
 {{Form:: open(array('url' => 'randUsers'))}}
  {{Form::label('number', 'number Of Users')}}
  {{Form::number('randomUsers',1,array(
            'min' => '1',
            'max' => '10',
            'class' => 'form-control'))}}
  
  @if(isset($randomUsers))

          {{ "value=\"$randomUsers\"" }}

        @endif
        <br>
        {{Form::label('email', 'user Email')}}
  {{Form::checkbox('email','yes')}}
  
  @if(isset($email))

          {{ "value=\"$email\"" }}

        @endif
        
        <br>
  {{Form::label('Address', 'user Address')}}
  {{Form::checkbox('address','yes')}}
  
  @if(isset($address))

          {{ "value=\"$address\"" }}

        @endif 
        <br>
          
  {{Form::submit('Submit')}}
  <?php if(!empty($randomResults)):
			echo $randomResults;
			endif;?>           	
</div>
	
</body>
</html>
