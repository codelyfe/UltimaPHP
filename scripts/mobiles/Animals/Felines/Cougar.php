<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Cougar extends Mobile {
	public function summon() {
		$this->name = "a cougar";
		$this->body = 63;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x73;
		$this->str = rand(56, 80);
		$this->dex = rand(66, 85);
		$this->int = rand(26, 50);
		$this->maxhits = rand(34, 48);
		$this->hits = $this->maxhits;
		$this->damage = 4;
		$this->damageMax = 10;
		$this->resist_physical = rand(20, 25);
		$this->resist_fire = rand(5, 10);
		$this->resist_cold = rand(10, 15);
		$this->resist_poison = rand(5, 10);
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 450;
		$this->virtualarmor = 16;

}}
?>
