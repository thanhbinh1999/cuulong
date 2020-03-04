<?php
 namespace hinh;
 class hinh{
 	public function ClassLists(){
 		return [
 			'vuong','tron'
 		];
 	}
	public  function  addClass($className){
		switch($className){
			case $className:
				return  new  $className;
				break;
			default:
				return null;
				break;
		}
	}
	
} 
	$hinh = new hinh();
	
	

 ?>