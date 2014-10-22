<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	/*$generator = new Badcow\LoremIpsum\Generator();
   $paragraphs = $generator->getParagraphs(1);
   echo implode('<p>', $paragraphs);
   */
	return View::make('hello');
});

Route::get('ipsum', function()
{
	return View::make('ipsum');
});

Route::post('ipsum', function()
{
	//paranumber is coming from ipsum. 
	$paragraph=Input::get('paraNumber');
	
	$numPara = '';
	
	$generator = new Badcow\LoremIpsum\Generator();
	
	$content = $generator->getParagraphs($paragraph);
	
	foreach($content as $paragraph) {
		$numPara.='<p>'.$paragraph.'<p>';
	}
	
	
	return View::make('ipsum')->with('paraResult',$numPara);
});

Route::get('randUsers', function()
{
	return View::make('randUsers');
});

Route::post('randUsers',function()
{
	$randomUsers=Input::get('randomUsers');
	$email= Input::get('email');
	$address=Input::get('address');
	
	$userResults='';

	$faker = Faker\Factory::create();
	
	for ($i=0; $i < $randomUsers; $i++) {
		
	$userResults.='<p>'.$faker->name.'<br>';
		
		if(isset($_POST['email']))	{
	$userResults.=$faker->email.'<br>';
	
}
		if(isset($_POST['address']))	{
	$userResults.=$faker->address.'<p>';
	
}
		
	}
		

	return View::make('randUsers')->with('randomResults',$userResults);
	
}
);
