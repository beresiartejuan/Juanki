<?php

require_once __DIR__ . '/vendor/autoload.php';

class Juanki extends Bramus\Router\Router{

	public function __construct(){
		return $this;
	}

	public function self(){
		return $this;
	}

	public function __destruct(){
		$this->run();
	}
}

class this{

	protected static $instance;
	protected static $object;

	private function __construct(){}

	public static function is($obj){
		if(isset(self::$instance)){
			self::$instance = new self;
		}

		self::$object = $obj;
	}

	public static function __callStatic($fn, $args){
		return call_user_func_array(array(self::$object, $fn), $args);
	}
}