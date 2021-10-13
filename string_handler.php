<?php
	class StringHandler {
		private $originalString;
		private $uniqueLettersArray;

		function __construct($value) {
	       $this->originalString = $this->cleanString($value);
	       $this->makeUniqueLettersArray();
	   	}

	   	protected function cleanString($value) {
	   		$value = trim($value);
		    $value = stripslashes($value);
		    $value = strip_tags($value);
		    $value = htmlspecialchars($value);
		    
		    return $value;
	   	}

	   	public function getOriginalString() {
	   		return $this->originalString;
	   	}

		public function getUniqueLettersArray() {
			return $this->uniqueLettersArray;
		}	

		public function getUniqueLettersString() {
			sort($this->uniqueLettersArray);
			$uniqueLettersString = implode(",", $this->uniqueLettersArray);
			return $uniqueLettersString;
		}	

	   	protected function makeUniqueLettersArray()
	   	{
			$wordsArray = explode(" ", $this->originalString);
			$lettersArr = array();
			$len = count($wordsArray);
			
			for ($i=0; $i < $len; $i++) { 
				$lettersArr[$i] = $wordsArray[$i][0];
			}

			$uniqueLetters = array_unique($lettersArr);
			$notLetter = array_search ("", $uniqueLetters);
			if($notLetter != false)
				unset($uniqueLetters[$notLetter]);
			
		//	$uniqueLetters = sort($uniqueLetters);
			$this->uniqueLettersArray = $uniqueLetters;
	   	}
   	
	}
?>