<?php
class config{
	private  $data;
	private  static $instance;
	private function __construct(){
		$json=file_get_contents(__DIR__.'/app.json');
		json_encode($json);

		$this->data=json_decode($json,true);
	}
	public static function GetInstance(){
		if(self::$instance==null){
			self::$instance =new config();
		}
		return self::$instance;
	}
	public function get($key){
		if(!isset($this->data[$key])){
			echo "nothing read from json file";
		}
		return $this->data[$key];
	}
}
?>