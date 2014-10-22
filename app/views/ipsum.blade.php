<!doctype html>
@include('logic')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}
		
		.maincont {
    border: 2px solid #a1a1a1;
   padding: 10px 40px; 
    background: #dddddd;
   width: 800px;
    border-radius: 25px;
    margin-top: 50px;
    margin-left: 250px;
    
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
	<div>
		<a href=" / "> Home </a>
		<p>Generates Random Ipsum Paragraphs</p>
		<br>
  {{Form:: open(array('url' => 'ipsum'))}}
  {{Form::label('number', '# paragraph')}}
  {{Form::number('paraNumber',1,array(
            'min' => '1',
            'max' => '10',
            'class' => 'form-control'))}}
  
  @if(isset($paraNumber))

          {{ "value=\"$paraNumber\"" }}

        @endif
        <br>
        {{Form::submit('Submit')}}
        
	</div>
	
	<div class='createdpara'>
		<?php if(!empty($paraResult)):
			echo $paraResult;
			endif;?>
	</div>
	</div>
	
</body>
</html>
