<?php

class CKeyGen {
	const NN 	= 5;
	const NS 	= 2;
	const MINN 	= 1;
	const MAXN 	= 50;
	const MINS 	= 1;
	const MAXS 	= 11;
	
	public $knumbers;
	public $kstars;
	private $segredo="xpto";
	
	public function __construct() {
		$this->genKey();	
	}
	
	public function genKey() {
		$en = new CExtractor(CKeyGen::NN, CKeyGen::MINN, CKeyGen::MAXN);
		$es = new CExtractor(CKeyGen::NS, CKeyGen::MINS, CKeyGen::MAXS);
		$this->knumbers = $en->extractor();
		$this->kstars   = $es->extractor();
	}
	
	public function key2XHTML() {
		$root = new SimpleXMLElement("<div/>");
		
		$root->addChild("ul");
		$uls = $root->addChild("ul");
		
		$root->ul[0]->addAttribute("class","numbers");
		foreach($this->knumbers as $number) {
			$root->ul[0]->addChild("li",$number);
		}
		$uls->addAttribute("class","stars");
		foreach($this->kstars as $star) {
			$uls->addChild("li",$star);
		}
		
		return $root->asXML();
	}
	public function key2JSON() {
		return json_encode($this);
	}
	public function key2XML() {
		$root = new SimpleXMLElement("<key/>");
		
		$kn = $root->addChild("numbers");
		$ks = $root->addChild("stars");
		
		foreach($this->knumbers as $number) {
			$kn->addChild("num",$number);
		}

		foreach($this->kstars as $star) {
			$ks->addChild("num",$star);
		}
		
		return $root->asXML();
;	}
	
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