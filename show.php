<?php
 namespace Route;
 trait Route{
 	private $link;
 	public static function url($link){
 		return $link();
 	}
 }

 ?>