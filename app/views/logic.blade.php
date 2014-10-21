<?php
function ipsumparagraph($paraNumber){
	
	$numPara = '';
	
	$generator = new Badcow\LoremIpsum\Generator();
	
	$content = $generator->getParagraphs($paraNumber);
	
	foreach($content as $paragraph) {
		$numPara.='<p>'.$paragraph.'<p>';
	}
	return $numPara;
	
}
   ?>