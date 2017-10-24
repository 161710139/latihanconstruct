<?php
class pc{
public $os;
public $merk;
public $processor;
public $ram;
public $vga;


public function __construct($os,$merk,$processor,$ram,$vga){
	$this->os=$os;
	$this->merk=$merk;
	$this->processor=$processor;
	$this->ram=$ram;
	$this->vga=$vga;
}
public function get_os(){
return $this->os;
}
public function get_merk(){
return $this->merk;
}
public function get_processor(){
return $this->processor;	
}
public function get_ram(){
return $this->ram;	
}
public function get_vga(){
return $this->vga;	
}

}
?>