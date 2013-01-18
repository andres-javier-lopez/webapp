<?php

class Home extends Manager
{
	public function index() {
		echo Template::load('index');
	}
}