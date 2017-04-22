<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class blacksoleninfiltratorqueen extends Mobile {
	public function summon() {
		$this->name = "a black solen infiltrator";
		$this->body = 807;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(326, 350);
		$this->dex = rand(141, 165);
		$this->int = rand(96, 120);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 10;
		$this->damage_max = 15;
		$this->resist_physical = rand(30, 40);
		$this->resist_fire = rand(30, 35);
		$this->resist_cold = rand(25, 35);
		$this->resist_poison = rand(35, 40);
		$this->resist_energy = rand(25, 30);
		$this->karma = -6500;
		$this->fame = 6500;
		$this->virtualarmor = 50;

}}
?>