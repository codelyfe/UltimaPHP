<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class RatmanMage extends Mobile {
	public function summon() {
		$this->name = "ratman";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(146, 180);
		$this->dex = rand(101, 130);
		$this->int = rand(186, 210);
		$this->maxhits = rand(88, 108);
		$this->hits = $this->maxhits;
		$this->damage = 7;
		$this->damageMax = 14;
		$this->resist_physical = rand(40, 45);
		$this->resist_fire = rand(10, 20);
		$this->resist_cold = rand(10, 20);
		$this->resist_poison = rand(10, 20);
		$this->resist_energy = rand(10, 20);
		$this->karma = -7500;
		$this->fame = 7500;
		$this->virtualarmor = 44;

}}
?>
