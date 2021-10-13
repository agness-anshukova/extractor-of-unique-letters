<?php
	include 'string_handler.php';

	if (isset($_POST["sentence"])) { 

		$stringHandler = new StringHandler($_POST["sentence"]);
		$sentence = $stringHandler->getOriginalString();

		$uniqueLettersString = $stringHandler->getUniqueLettersString();

	    $result = array(
	    	'sentence' => $sentence,
	    	'uniqueLettersString' => $uniqueLettersString
	    ); 

	    echo json_encode($result); 
	}
?>