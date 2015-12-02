<?php
/**
**** Singleton
**/
class Window {
	public static $instance;
	
	public static function getInstance() {
		if(!isset(Window::$instance)){
			Window::$instance = new Window();
		}
			
		return Window::$instance;
	}
	
	public function open() {
		
	}
	
	public function Close() {
		
	}
}

$window1 = new Window::getInstance();
$window2 = new Window::getInstance();
$window3 = new Window::getInstance();