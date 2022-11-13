<?php
use PHPUnit\Framework\TestCase;
require 'GumballMachine.php';

class GumballMachineTest extends TestCase {

	public $gumballMachineInstance;
	
	public function setup():void {
		
		$this->gumballMachineInstance = new GumballMachine();
	}
	
	public function turnWheel() {
		$this->setGumballs($this->getGumballs()-2);
	}
	
	public function testIfWheelWorks() {
		
		$this->gumballMachineInstance->setGumballs(100);
		
		$this->gumballMachineInstance->turnWheel();
		
		$this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
	}
}