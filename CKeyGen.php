<?php

class CKeyGen {
	
}

class CExtractor {
	
	private $my_n;
	private $my_vmin;
	private $my_vmax;
	
	public function __construct($n,$vmin,$vmax) {
		$this->my_n = $n;
		$this->my_vmin = $vmin;
		$this->my_vmax = $vmax;
	}
	
	public function extractor() {
		$bag = array();
		$key = array();
		
		$bagsize = $this->my_vmax - $this->my_vmin + 1;
		for($i = 0; $i < $bagsize; $i++) {
			$bag[] = $i + $this->my_vmin;
		}
		for($i = 0; $i < $this->my_n; $i++) {
			$random_idx = rand(0,count($bag)-1);
			$key[] = $bag[$random_idx];
			array_splice($bag,$random_idx,1);
		}
		sort($key);
		return $key;
	}
}

?>