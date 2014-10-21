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
	$randUsers=Input::get('randUsers');
	
	$userResults='';

	$faker = Faker\Factory::create();
	
	for ($i=0; $i < $randUsers; $i++) {
		$userResults.='<p>'.$faker->name.'<br>'.$faker->email.'<br>'.$faker->address.'<p>';
		
}	
	return View::make('randUsers')->with('randUsers',$userResults);
	/*start with just the number before going to the submit buttons
	 * use a for loop for faker
	 * faker has $name,$city,$email variables
	 * */
		
	
}
);
